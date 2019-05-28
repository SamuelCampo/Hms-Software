<?
class Factura extends CI_Model {
  
  function __construct(){
    parent::__construct();
    $this->load->model("Cups");
    $this->load->model("Numerosaletras");
  }
  
  function series($idserie=""){
    $this->db->from("cm_cuentaseries_t97");
    if(!empty($idserie)){
      $this->db->where("idcm_cuentaseries_t97",$idserie);
    }
    $query = $this->db->get();
    if(!empty($idserie)){
      return $query->row();
    }
    return $query->result();
  }

  function sigfac($idserie){
    $oSerie = $this->series($idserie);
    $sigfac = $oSerie->numero_t97+1;
    $data = array('numero_t97' => $sigfac);
    $this->db->where('idcm_cuentaseries_t97',$idserie)->update('cm_cuentaseries_t97', $data);
    return $sigfac;
  }

  function buscarExtras($id){
    $this->db->where('idcm_cuentaseries_t97', $id);
    $query = $this->db->get('cm_cuentaseries_t97')->result();
    if (count($query) > 0) {
      return $query;
    }
  }

  function listarfacturas(){
    $arr_buscar = (object)$this->input->post();
    //var_dump($arr_buscar->factura_inicio);
    $this->db->where('factnum_t96 >=', $arr_buscar->factura_inicio);
    $this->db->where('factnum_t96 <=', $arr_buscar->factura_fin);
    $this->db->where('estado_t96 != "ANULADO"');
    return $this->db->get('cm_cuentas_t96')->result();
  }

  function liberarOrden($cnfac)
  {
    $arr_datos = (object)$this->input->post();
    //$sql = "UPDATE `ps_hist_ordenes_t67` SET `idfactura_t67` = NULL,`estado_f_t67` = NULL  WHERE `ps_hist_ordenes_t67`.`idfactura_t67` = ".$cnfac."";
    //$this->db->query($sql);
    $sql = array(
        'idfactura_t67' => "NULL",
        'estado_f_t67' => "NULL"
    );
    $this->db->where('idfactura_t67', $cnfac);
    $query = $this->db->update('ps_hist_ordenes_t67', $sql);
    if ($query) {
      $cambiar = array(
      'estado_t96' => 'ANULADO',
      'motivos_externos' => $arr_datos->motivo
    );
    $this->db->where('factnum_t96', $arr_datos->cnfac)->update('cm_cuentas_t96',$cambiar);
    }

    //$sql2 = "UPDATE `cm_cuentas_t96` SET `estado_t96` = `ANULADO`,`motivos_externos` = ".$arr_datos->motivo."  WHERE `factnum_t96` = ".$arr_datos->cnfac."";
  }
  
  function tiposctas(){
    $query = $this->db->get('param_tipctas_t99');
    return $query->result();
  }
  
  function eliminaitemord($iditem){
    $this->db->where("idhist_ordenes_t67",$iditem);
    $this->db->delete("ps_hist_ordenes_t67");
  }

  public function buscarDat($numfac,$idserie ="")
  {
    if ($idserie_t96 != "") {
      return $this->db->where('factnum_t96', $numfac)->where('idserie_t96',$idserie_t96)->get('cm_cuentas_t96')->result();
    }else{
      return $this->db->where('factnum_t96', $numfac)->get('cm_cuentas_t96')->result();  
    }
    
  }
    function registrar_factura($convenio, $datos,$numfac,$consulta,$monto_total)
  {
    //$nit = explode("-", $convenio[0]->nit_t70);
    $arr_nuevo["convenio_t96"] = $convenio[0]->ident_t16;
    $arr_nuevo["conveniodesc_t96"] = $convenio[0]->ident_t16." ".$datos->tipocta_t4." ".$convenio[0]->desc_t16;
    $arr_nuevo["tercid_t96"] = $convenio[0]->ident_t16;
    $arr_nuevo["tercdesc_t96"] = $convenio[0]->desc_t16;
    $arr_nuevo["factnum_t96"] = $numfac;
    if ($this->input->post('fecha_facturacion') != "") {
      $arr_nuevo["ffact_t96"] = $this->input->post('fecha_facturacion');
      $arr_nuevo["fvence_t96"] = $this->input->post('fecha_facturacion');
    }else{
      $arr_nuevo["ffact_t96"] = date('Y-m-d h:i:s');
      $arr_nuevo["fvence_t96"] = date('Y-m-d h:i:s');
    }
    $arr_nuevo["idserie_t96"] = $this->input->post('serie');
    $arr_nuevo["historia_t96"] = $datos->idps_historia_t4;
    $arr_nuevo["validado_t96"] = "";
    $arr_nuevo["tipo_t96"] = $this->input->post('tipo_cuenta');

    $arr_nuevo["pacid_t96"] = $datos->paciente_t4;
    $arr_nuevo["pacnom_t96"] = $datos->nomcomp_t3;
    $arr_nuevo["edad_t96"] = $datos->fnacim_t3;
    $arr_nuevo["sexo_t96"] = $datos->genero_t3;
    if (!empty($consulta[0]->dxprincipal_t64)){
      $arr_nuevo["dx_t96"] = $consulta[0]->dxprincipal_t64;
      $arr_nuevo["dxcod_t96"] = $consulta[0]->dxprincipalcod_t64;
    }else{
      $arr_nuevo["dx_t96"] = 'NO APLICA';
      $arr_nuevo["dxcod_t96"] = 'N/A';
    }
    if ($this->input->post('fingreso') != "") {
      $arr_nuevo["fingreso_t96"] = $this->input->post('fingreso');
      $arr_nuevo["fegreso_t96"] = $this->input->post('fegreso');
    }else{
      $arr_nuevo["fingreso_t96"] = date('Y-m-d h:i:s');
      $arr_nuevo["fegreso_t96"] = date('Y-m-d h:i:s');
    }
    $arr_nuevo['valor_t96'] = $monto_total;
    $arr_nuevo["estado_t96"] = "FACTURADO";
    $arr_nuevo["obs1_t96"] = $this->input->post('observaciones');
    if ($this->input->post('total_copago')!= "") {
      $arr_nuevo["copago_t96"]= $this->input->post('total_copago');
      $arr_nuevo["cuota_mo_t96"]= $this->input->post('cuota_moderadora');
      $arr_nuevo['autorizacion'] = $this->input->post('autorizacion');
    }else{
      $arr_nuevo["copago_t96"]= 0;
      $arr_nuevo["cuota_mo_t96"]= 0;
      $arr_nuevo['autorizacion'] = 0;
    }
    $arr_nuevo["usrmod_t96"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t96"]=$this->Modulo->ahora();

    $this->db->insert('cm_cuentas_t96', $arr_nuevo);
  }

  function registrar($datfact='',$idfac=""){

    if(empty($datfact)){
      $datfact = (object)$this->input->post();
    }


    if(empty($idfac)){
     
      $numfac = $this->sigfac($datfact->serie);

    }else{
      $numfac = $idfac;
      $oFact = $this->obtener_prefac($idfac,true,$datfact->historia);
    }

    $datpaciente = $this->Paciente->obtener($datfact->idpaciente);
  
    if(empty($datfact->historia)){
      $dathist = (object)array(
          "identificacion"=>$datfact->idpaciente,
          //"fingreso"=>$datfact->fingreso,
          "estado"=>"FACTURADO"
        );
      $datfact->historia = $this->Historia->registrar("",$dathist);
      // debug($datfact->historia );
    }
// debug($datfact);
    $oConv = $this->Convenio->obtener($datfact->convenio);

    // var_dump($datfact);
    // var_dump($oConv);
    // exit;
    // debug($oConv["convenio"]);
    $arr_nuevo["convenio_t96"] = $datfact->convenio;
    $arr_nuevo["conveniodesc_t96"] = $datfact->convenio." ".$oConv["convenio"]->descripcion_t95." ".$oConv["convenio"]->desc_t16;
    $arr_nuevo["tercid_t96"] = $oConv["convenio"]->ident_t16;
    $arr_nuevo["tercdesc_t96"] = $oConv["convenio"]->desc_t16;
    $arr_nuevo["factnum_t96"] = $numfac;
    $arr_nuevo["ffact_t96"] = $datfact->ffac;
    $arr_nuevo["fvence_t96"] = $datfact->ffac;
    $arr_nuevo["idserie_t96"] = $datfact->serie;
    $arr_nuevo["historia_t96"] = $datfact->historia;
    $arr_nuevo["validado_t96"] = $datfact->validado;
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
    $arr_nuevo["obs1_t96"]=$datfact->obs1;
    $arr_nuevo["obs2_t96"]=$datfact->obs2;
    $arr_nuevo["copago_t96"]=$datfact->copago;
    $arr_nuevo["cuota_mo_t96"]=$datfact->cuota_moderadora;
    $arr_nuevo["usrmod_t96"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t96"]=$this->Modulo->ahora();

    if(empty($idfac)){
   
  $this->db->insert("cm_cuentas_t96",$arr_nuevo);
      $arr_actserie["numero_t97"]=$numfac;
      $this->db->where("idcm_cuentaseries_t97",$datfact->serie);
      $this->db->update("cm_cuentaseries_t97",$arr_actserie);
    }else{
          // debug('aca7');
      $this->db->where("historia_t96",$datfact->historia);
      $this->db->where("factnum_t96",$numfac);
      $this->db->update("cm_cuentas_t96",$arr_nuevo);
    }
    $vtotal=0;
    if(!empty($datfact->cod) && !empty($datfact->cantidad)){
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
      $arr_orden['cantfac_t67']=$datfact->cantidad;
      $arr_orden['facturado_t67']="S";
      $arr_orden['valunit_t67']=$datfact->valor;
      $arr_orden['valor_t67']=$datfact->valor*$datfact->cantidad;
      $vtotal+=$arr_orden['valor_t67'];
      $arr_orden["usrmod_t67"]=$this->Modulo->usr->idusr;
      $arr_orden["fmod_t67"]=$this->Modulo->ahora();
      $arr_orden['idpaciente_t67']=$datfact->paciente;
      $arr_orden['idfactura_t67']=$numfac;
      $arr_orden['idhistoria_t67']=$datfact->historia;
      $this->db->insert("ps_hist_ordenes_t67",$arr_orden);
      $idrefcta = $this->Modulo->insertid();
      $this->reliquidar($numfac,$datfact->historia);
      //$this->Glosa->tarifas($datfact->radicado,$arr_orden,$idrefcta);
    }
    if(is_array($datfact->actdet)){
      foreach($datfact->actdet as $idregord=>$arr_detord){
        if(!is_null($arr_detord["faccant"])){
          $arr_acdetord["cantfac_t67"]=$arr_detord["faccant"];
        }
        if(!is_null($arr_detord["facvunit"])){
          $arr_acdetord["valunit_t67"]=$arr_detord["facvunit"];
        }
        $arr_acdetord["facturado_t67"]=$arr_detord["facconf"];
        $arr_acdetord["externo_t67"]=$arr_detord["externo"];
        if(is_numeric($arr_acdetord["cantfac_t67"]) && is_numeric($arr_acdetord["valunit_t67"])){
          $arr_acdetord["valor_t67"] = $arr_acdetord["valunit_t67"]*$arr_acdetord["cantfac_t67"];
        }
        $arr_acdetord["idfactura_t67"]=$numfac;
        $this->db->where("idhist_ordenes_t67",$idregord);
        $this->db->update("ps_hist_ordenes_t67",$arr_acdetord);
        unset($arr_acdetord);
      }
    }
    if($datfact->valman!='S'){
      if($oFact->convenio_t96!=$oConv["convenio"]->codigo_t95 || $datfact->reliquidar=='S' ){
        $this->reliquidar($numfac,$datfact->historia);
      }
    }
    $this->acttotal($numfac,$datfact->historia);
    return (object)array("idfac"=>$numfac,"idhistoria"=>$datfact->historia);
  }
  
  function acttotal($numfac,$historia){
    $oFac = $this->obtener_prefac($numfac,true,$historia,false);
    if(is_array($oFac->detalle)){
      foreach($oFac->detalle as $regfac){
        if($regfac->externo_t67!='S' && is_numeric($regfac->valor_t67)){
          $vtotal+=$regfac->valor_t67;
        }
      }
      $arr_tcnta["valor_t96"]=$vtotal;
      $this->db->where("historia_t96",$historia);
      $this->db->where("factnum_t96",$numfac);
      $this->db->update("cm_cuentas_t96",$arr_tcnta);
    }
  }
  
  function reliquidar($numfac,$historia){
    $oFac = $this->obtener_prefac($numfac,true,$historia);
    $oConv = $this->Convenio->obtener($oFac->convenio_t96);  
    if(is_array($oFac->detalle) && is_array($oConv)){
      $arrsumins = $this->Modulo->objarrasoc($this->Constante->sumins_listar(),"codigoatc_t91");
      $arrmeds = $this->Modulo->objarrasoc($this->Constante->cums_listar(),"idps_medicamentos_t73");
      $arrmedscod = $this->Modulo->objarrasoc($this->Constante->cums_listar(),"codigoatc_t73");
      $arrhomolog = $this->Tarifa->homologacion();
      //var_dump($oFac->detalle);
      //exit;
      foreach($oFac->detalle as $regfac){
        //if($regfac->codigo_t67=='')
        if($regfac->externo_t67!='S' && $regfac->cantfac_t67<>0){
          $vunit=null;
          switch($regfac->tipo_t67){
            case "MED":
              $vunit = round($arrmeds[$regfac->codigo_t67]->tarifa1_t73+($arrmeds[$regfac->codigo_t67]->tarifa1_t73*$oConv["tarifas"][$regfac->tipo_t67]["VAL"]/100));
              if(is_null($arrmeds[$regfac->codigo_t67]->tarifa1_t73)){
                $vunit = round($arrmedscod[$regfac->codigo_t67]->tarifa1_t73+($arrmedscod[$regfac->codigo_t67]->tarifa1_t73*$oConv["tarifas"][$regfac->tipo_t67]["VAL"]/100));
              }
              break;
            case "SUM":
              $vunit = round($arrsumins[$regfac->codigo_t67]->tarifa1_t91+($arrsumins[$regfac->codigo_t67]->tarifa1_t91*$oConv["tarifas"][$regfac->tipo_t67]["VAL"]/100));
              break;
            default:
              if(is_array($oConv["tarifas"][$regfac->tipo_t67])){
                foreach($oConv["tarifas"][$regfac->tipo_t67] as $idplan=>$valor){
                  if(is_numeric($valor)){
                    $ghomolog = $arrhomolog["baseg"][$regfac->codigo_t67]; 
                    $regplan =$arrhomolog["gpt"][$ghomolog][$idplan];
                    $vunit = round($regplan->valor_t63+($regplan->valor_t63*$valor/100));
                  }
                }
              }
              break;
          }
          if(is_numeric($vunit)){
            $vtotal = $vunit*$regfac->cantidad_t67;
            $arr_acdetord["valunit_t67"]=$vunit;
            $arr_acdetord["valor_t67"]=$vtotal;
            $this->db->where("idhist_ordenes_t67",$regfac->idhist_ordenes_t67);
            $this->db->update("ps_hist_ordenes_t67",$arr_acdetord);
          }
        }
      }
    }
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
    if(!empty($buscado->factura)){
      $buscar = true;
      $this->db->where("factnum_t96",$buscado->factura);
    }
    if(!empty($buscado->idpaciente)){
      $buscar = true;
      $this->db->where("paciente_t4",$buscado->idpaciente);
    }
    if(!empty($buscado->tercid)){
      $buscar = true;
      $this->db->where("tercid_t96",$buscado->tercid);
    }
    if($buscar==true){
      $this->db->from("ps_historia_t4");
      $this->db->join("ps_paciente_t3","paciente_t4=identificacion_t3","INNER");
      $this->db->join("cm_cuentas_t96","idps_historia_t4=historia_t96","LEFT");
      $this->db->join("cm_cuentaseries_t97","idserie_t96 = idcm_cuentaseries_t97","LEFT");
      $this->db->order_by("factnum_t96",'asc');
      $this->db->order_by("fingreso_t4",'desc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $resul = $query->result();
      }
      return $resul;
    }
  }

  function obtener_prefac($id,$condetalle=true,$historia,$acttot=true){
    if($acttot===true){
      $this->acttotal($id,$historia);
    }
    $this->db->from("cm_cuentas_t96");
    $this->db->join("param_terceros_t16","tercid_t96=ident_t16","left");
    $this->db->join("ps_paciente_t3","pacid_t96=identificacion_t3","left");
    $this->db->join("cm_cuentaseries_t97","idserie_t96=idcm_cuentaseries_t97","left");
    $this->db->where("factnum_t96",$id);
    $this->db->where("historia_t96",$historia);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $fact =  $query->row();
    }
    //var_dump($fact);
    //exit;

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
    $fact->totalletras = $this->Numerosaletras->to_word($fact->valor_t96, null);
    return $fact;
  }

  function obtener_preliminar($historia=true,$condetalle=true){

    $condiciones = (object)$this->input->post();
    //var_dump($condiciones);
    if($acttot===true){
      $this->acttotal($id,$historia);
    }
    $this->db->from("cm_cuentas_t96"); // Llama a la tabla cuentas para obtener los resultados del historial de las facturas
    $this->db->join("param_terceros_t16","tercid_t96=ident_t16","left"); // Que se parezcan a los codigos de los clientes
    $this->db->join("ps_paciente_t3","pacid_t96=identificacion_t3","left"); // Que el paciente concuerda con la consulta
    $this->db->join("cm_cuentaseries_t97","idserie_t96=idcm_cuentaseries_t97","left");
    $this->db->where("historia_t96",$historia);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $fact =  $query->row();
    }
    //var_dump($fact);
    //exit;

    $id = $this->uri->segment(4);
    echo $condiciones->fechaI;
    if($condetalle==true){
      $this->db->from("ps_hist_ordenes_t67"); // Llama a la tabla de las ordenes
      $this->db->where("idhistoria_t67",$id); // Llama por el numero de Factura
      if ($condiciones->fechaI != "" and $condiciones->fechaF != "") {
        $this->db->where('fmod_t67 >=',$condiciones->fechaI);
        $this->db->where('fmod_t67 <=',$condiciones->fechaF." 23:59");
      }
      if ($condiciones->grupo != "") {
        $this->db->where('tipo_t67', $condiciones->grupo);
      }
      $this->db->order_by("tipo_t67",'ASC'); 
      $this->db->order_by("codigo_t67",'ASC');
      $query = $this->db->get();
      $fact->detalle = $query->result();
      

      //var_dump($fact->detalle);
      if(is_array($fact->detalle)){
        foreach($fact->detalle as $detfac){
          $fact->detalleagr[$detfac->tipo_t67][]=$detfac;
        }
      }
    }
    $fact->totalletras = $this->Numerosaletras->to_word($fact->valor_t96, null);
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
    function buscarAuto($numfac){
    $query = $this->db->where('factnum_t96',$numfac)->get('cm_cuentas_t96', 1)->result();
    return $query;
  }
}
?>