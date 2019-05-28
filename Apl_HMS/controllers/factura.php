<?
class Factura extends CI_Model {
  
  function __construct(){
    parent::__construct();
    $this->load->model("Cups");
  }

  function sigfac(){
    $this->db->select_max('factnum_t96');
    $query = $this->db->get('cm_cuentas_t96');
    $reg = $query->row();
    $sigfac = $reg->factnum_t96+1;
    return $sigfac;
  }
  
  function tiposctas(){
    $query = $this->db->get('param_tipctas_t99');
    return $query->result();
  }
  
  function eliminaitemord($iditem){
    $this->db->where("idhist_ordenes_t67",$iditem);
    $this->db->delete("ps_hist_ordenes_t67");
  }

  function registrar($datfact='',$idfac=""){
    if(empty($datfact)){
      $datfact = (object)$this->input->post();
    }
    if(empty($idfac)){
      $numfac = $this->sigfac();
    }else{
      $numfac = $idfac;
    }
    $datpaciente = $this->Paciente->obtener($datfact->idpaciente);
    if(empty($datfact->historia)){
      $dathist = (object)array(
          "identificacion"=>$datfact->idpaciente,
          "fingreso"=>$datfact->fingreso,
          "estado"=>"FACTURADO"
        );
      $datfact->historia = $this->Historia->registrar("",$dathist);
    }
    $arr_nuevo["tercid_t96"] = $datfact->tercid;
    $arr_nuevo["tercdesc_t96"] = $datfact->tercdesc;
    $arr_nuevo["factnum_t96"] = $numfac;
    $arr_nuevo["ffact_t96"] = $datfact->ffac;
    $arr_nuevo["fvence_t96"] = $datfact->ffac;
    $arr_nuevo["historia_t96"] = $datfact->historia;
    $arr_nuevo["tipo_t96"] = $datfact->tipocta;
    $arr_nuevo["pacid_t96"] = $datfact->idpaciente;
    $arr_nuevo["pacnom_t96"] = $datfact->paciente;
    $arr_nuevo["edad_t96"] = $datpaciente->edad["a"];
    $arr_nuevo["sexo_t96"] = $datpaciente->genero_t3;
    $arr_nuevo["dx_t96"] = $datfact->dx;
    $arr_nuevo["dxcod_t96"] = $datfact->dxcod;
    $arr_nuevo["fingreso_t96"] = $datfact->fingreso;
    $arr_nuevo["fegreso_t96"] = $datfact->fsalida;
    $arr_nuevo["estado_t96"] = "FACTURADO";
    $arr_nuevo["usrmod_t96"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t96"]=$this->Modulo->ahora();
    if(empty($idfac)){
      $this->db->insert("cm_cuentas_t96",$arr_nuevo);
    }else{
      $this->db->where("factnum_t96",$numfac);
      $this->db->update("cm_cuentas_t96",$arr_nuevo);
    }
    $vtotal=0;
    if(!empty($datfact->cod)){
      switch($datfact->tipopms){
        case 'PR':
          $objord = $this->Cups->obtener($datfact->cod);
          $arr_orden['tipo_t67']=$objord->tiposervicio_t63;
          break;
        case 'MD':
          $objord = $this->Constante->cums_obtener("",$datfact->cod);
          $arr_orden['tipo_t67']='MED';
          break;
        case 'SU':
          $arr_orden['tipo_t67']='SUM';
          break;
      }
      $arr_orden['codigo_t67']=$datfact->cod;
      $arr_orden['descripcion_t67']=$datfact->cod_desc;
      $arr_orden['cantidad_t67']=$datfact->cantidad;
      $arr_orden['valunit_t67']=$datfact->valor;
      $arr_orden['valor_t67']=$datfact->valor*$datfact->cantidad;
      $vtotal+=$arr_orden['valor_t67'];
      $arr_orden["usrmod_t67"]=$this->Modulo->usr->idusr;
      $arr_orden["fmod_t67"]=$this->Modulo->ahora();
      $arr_orden['idpaciente_t67']=$datfact->paciente;
      $arr_orden['idfactura_t67']=$numfac;
      $this->db->insert("ps_hist_ordenes_t67",$arr_orden);
      $idrefcta = $this->Modulo->insertid();
      //$this->Glosa->tarifas($datfact->radicado,$arr_orden,$idrefcta);
    }
    return (object)array("idfac"=>$numfac,"idhistoria"=>$datfact->historia);
  }

  function listar_historias($buscado){
    $buscar = false;
    if(!empty($buscado->fdesde) && !empty($buscado->fhasta)){
      $buscar = true;
      $this->db->where("fingreso_t4","between '$buscado->fdesde' and '$buscado->fhasta' ");
    }
    if(!empty($buscado->estado)){
      $buscar = true;
      $this->db->where("estado_t4",$buscado->estado);
    }
    if(!empty($buscado->idpaciente)){
      $buscar = true;
      $this->db->where("paciente_t4",$buscado->idpaciente);
    }
    if(!empty($buscado->tercid)){
      $buscar = true;
      $this->db->where("administradoracod_t3",$buscado->tercid);
    }
    if($buscar==true){
      $this->db->from("ps_historia_t4");
      $this->db->join("ps_paciente_t3","paciente_t4=identificacion_t3","INNER");
      $this->db->join("cm_cuentas_t96","idps_historia_t4=historia_t96","LEFT");
      $this->db->order_by("fingreso_t4",'desc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $resul = $query->result();
      }
      return $resul;
    }
  }

  function obtener_prefac($id,$condetalle=true){
    $this->db->from("cm_cuentas_t96");
    $this->db->where("factnum_t96",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $fact =  $query->row();
    }

    if($condetalle==true){
      $this->db->from("ps_hist_ordenes_t67");
      $this->db->where("idfactura_t67",$id);
      $this->db->order_by("tipo_t67",'ASC');
      $this->db->order_by("codigo_t67",'ASC');
      $query = $this->db->get();
      $fact->detalle = $query->result();
      if(is_array($fact->detalle)){
        foreach($fact->detalle as $detfac){
          $fact->detalleagr[$detfac->tipo_t67][]=$detfac;
        }
      }
    }
    return $fact;
  }
  
  function obtener($id){
    $this->db->from("ps_inv_detallle_t84");
    $this->db->where("codigo_t14",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return  $query->row();
    }
  }
  
  function listar($buscado){
    $this->db->from("ps_inv_detallle_t84");
    $this->db->join("ps_cums_t73","codigo_t84=codigoatc_t73","inner");
    if(!empty($buscado)){
      $this->db->like('codigo_t84',$buscado);
      $this->db->or_like('descripcion_t84',$buscado);
      $this->db->or_like('almacencod_t84',$buscado);
    }
    $this->db->order_by("descripcion_t84",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  
  function prefactura_listar($buscado){
    $this->db->from("ps_paciente_t3");
    $this->db->join("ps_historia_t4"," identificacion_t3 = paciente_t4","left");
    if(!empty($buscado)){
      $this->db->like('idps_historia_t4',$buscado);
      $this->db->or_like('ubicacion_t4',$buscado);
      $this->db->or_like('identificacion_t3',$buscado);
      $this->db->or_like('nomcomp_t3',$buscado);
    }
    $this->db->order_by("paciente_t4",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function ord_preliq(){
    $datform = (object)$this->input->post();
    $this->db->select("fingreso_t4 fecha, identificacion_t12 identificacion, nomcomp_t12 paciente, numero_identificacion_t12 medident, nomcompp_t12 med, especialidades_t12 medespec, estado_t4 estado, codproc_t12 codigo, procedimiento_t12 proc, procvalor_t12 valor");
    $this->db->from("ps_agenda_t12");
    $this->db->join("ps_historia_t4"," identificacion_t12 = paciente_t4","inner");
    $this->db->where("fingreso_t4 >=",$datform->fechad);
    $this->db->where("fingreso_t4 <=",$datform->fechah." 23:59");
    $this->db->where("grupoprod_t12 IN ('CONS','ICONS')");
    $this->db->where("(ref1_t12 is null or ref1_t12<>'')");
    $this->db->order_by("fingreso_t4",'asc');
    $query = $this->db->get();
    $arr_datos[] = $query->result();
    
    $this->db->select("fingreso_t4 fecha, identificacion_t12 identificacion, nomcomp_t12 paciente, numero_identificacion_t12 medident, nomcompp_t12 med, especialidades_t12 medespec, estado_t4 estado, grupoprod_t12 tipo, codproc_t12 codigo, procedimiento_t12 proc, procvalor_t12 valor");
    $this->db->from("ps_agenda_t12");
    $this->db->join("ps_historia_t4"," identificacion_t12 = paciente_t4","inner");
    $this->db->where("fingreso_t4 >=",$datform->fechad);
    $this->db->where("fingreso_t4 <=",$datform->fechah);
    $this->db->where("grupoprod_t12 NOT IN ('CONS','ICONS')");
    $this->db->where("(ref1_t12 is null or ref1_t12<>'')");
    $this->db->order_by("fingreso_t4",'asc');
    $query = $this->db->get();
    $arr_datos[] = $query->result();
    $this->db->select("fingreso_t4 fecha, identificacion_t3 identificacion, nomcomp_t3 paciente, medidentif_t64 medident, mednomcomp_t64 med, medespec_t64 medespec, estado_t4 estado, tipo_t67 tipo, codigo_t67 codigo, descripcion_t67 proc, ternom_t67 tercero, valor_t67 valor");
    $this->db->from("ps_hist_ordenes_t67");
    $this->db->join("ps_paciente_t3"," idpaciente_t67 = identificacion_t3","inner");
    $this->db->join("ps_historia_t4"," idpaciente_t67 = paciente_t4","inner");
    $this->db->join("ps_hist_consulta_t64","id_consulta_t67 = idhist_consulta_t64","inner");
    $this->db->where("fingreso_t4 >=",$datform->fechad);
    $this->db->where("fingreso_t4 <=",$datform->fechah);
    $this->db->order_by("tipo_t67",'asc');
    $this->db->order_by("fingreso_t4",'asc');
    $query = $this->db->get();
    $arr_datos[] = $query->result();
    return $arr_datos;
  }
  
  
} 
?>