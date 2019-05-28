<?
class Glosa extends CI_Model {
  
  var $arr_tipos;
  var $arr_caract;
  
  function __construct(){
    parent::__construct();
    $this->arr_caract = array(
      (object)array("caract"=>"TRANSITORIO"),
      (object)array("caract"=>"DEFINITIVO"),
      (object)array("caract"=>"MEDICA")
    );
  }
  
  function tiposeventosadv($buscado=""){
    $this->db->from("param_teventadv_t101");
    if(!empty($buscado)){
      $this->db->like('grupo_t101',$buscado);
      $this->db->or_like('descripcion_t101',$buscado);
    }
    $this->db->order_by('grupo_t101');
    $this->db->order_by('descripcion_t101');
    $query = $this->db->get();
    return $query->result();
  }
  
  function tiposglosas($buscado=""){
    $this->db->from("param_tglosas_t100");
    if(!empty($buscado)){
      $this->db->like('codigo_t100',$buscado);
      $this->db->or_like('grupo_t100',$buscado);
      $this->db->or_like('descripcion_t100',$buscado);
    }
    $this->db->order_by('grupo_t100');
    $this->db->order_by('descripcion_t100');
    $query = $this->db->get();
    return $query->result();
  }
  
  function obtener($rad){
    $this->db->from("cm_glosas_t97");
    $this->db->where("cuenta_t97",$rad);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $regglos){
        $arr_res[$regglos->	idrefcta_t97][]=$regglos;
      }
    }
    //var_dump($arr_res);
    return $arr_res;
  }
  
  function tarifas($radicado,$detrad,$idref){
    $detfact = $this->Factura->obtener($radicado,false);
    $detconv = $this->Convenio->obtener($detfact->tercid_t96);
    $dettarif = $this->Tarifa->obtener($detrad['codigo_t67']);
    $arr_defconv = $detconv['tarifas'][$detrad['tipo_t67']];
    if($arr_defconv['ISS']!=0){
      $tarifbase = $dettarif->isstarifa_t95 + $dettarif->isstarifa_t95*$arr_defconv['ISS']/100;
      $vtotalbase = $tarifbase*$detrad["cantidad_t67"];
      $gobs = "ISS ".$arr_defconv['ISS'];
    }
    if($arr_defconv['SOAT']!=0){
      $tarifbase = $dettarif->soattarifa_t95 +$dettarif->soattarifa_t95*$arr_defconv['SOAT']/100;
      $vtotalbase = $tarifbase*$detrad["cantidad_t67"];
      $gobs = "SOAT ".$arr_defconv['SOAT'];
    }
    if(!empty($vtotalbase) && $vtotalbase<$detrad["valor_t67"]){
      $gvtotal = $detrad["valor_t67"]-$vtotalbase;
    }
    if(!empty($gvtotal)){
      $arr_nglosa["lote_t97"]=$detfact->lote_t96;
      $arr_nglosa["cuenta_t97"]=$detfact->radicado_t96;
      $arr_nglosa["terid_t97"]=$detfact->tercid_t96;
      $arr_nglosa["ternom_t97"]=$detfact->tercdesc_t96;
      $arr_nglosa["pacid_t97"]=$detfact->pacid_t96;
      $arr_nglosa["pacnom_t97"]=$detfact->pacnom_t96;
      $arr_nglosa["dxcod_t97"]=$detfact->dxcod_t96;
      $arr_nglosa["dx_t97"]=$detfact->dx_t96;
      $arr_nglosa["idrefcta_t97"]=$idref;
      $arr_nglosa["codproc_t97"]=$detrad["codigo_t67"];
      $arr_nglosa["proc_t97"]=$detrad["descripcion_t67"];
      $arr_nglosa["rcant_t97"]=$detrad["cantidad_t67"];
      $arr_nglosa["rvunit_t97"]=$detrad["valunit_t67"];
      $arr_nglosa["rvtotal_t97"]=$detrad["valor_t67"];
      $arr_nglosa["gtipo_t97"]='TARIFAS';
      $arr_nglosa["caracter_t97"]='TRANSITORIA';
      $arr_nglosa["gtarifas_t97"]=$gvtotal;
      $arr_nglosa["gobs_t97"]=$gobs;
      $arr_nglosa["usrmod_t97"]=$this->Modulo->usr->idusr;
      $arr_nglosa["fmod_t97"]=$this->Modulo->ahora();
      $this->db->insert("cm_glosas_t97",$arr_nglosa);
    }
  }
  
  function registrar($radicado){
    $datglosas = $this->input->post('glosas');
    $datglosasgr = $this->input->post('glosasgrup');
    if(is_array($datglosas)){
      foreach($datglosas as $idref=>$reglosa){
        //var_dump($reglosa);
        if(!empty($reglosa['tipo']) && $reglosa['tipo']!='SIN GLOSA'){
          $detfact = $this->Factura->obtener($radicado,false);
          $detrad = $this->Factura->obtenerdet($idref);
          $arr_nglosa["lote_t97"]=$detfact->lote_t96;
          $arr_nglosa["cuenta_t97"]=$detfact->radicado_t96;
          $arr_nglosa["terid_t97"]=$detfact->tercid_t96;
          $arr_nglosa["ternom_t97"]=$detfact->tercdesc_t96;
          $arr_nglosa["pacid_t97"]=$detfact->pacid_t96;
          $arr_nglosa["pacnom_t97"]=$detfact->pacnom_t96;
          $arr_nglosa["dxcod_t97"]=$detfact->dxcod_t96;
          $arr_nglosa["dx_t97"]=$detfact->dx_t96;
          $arr_nglosa["idrefcta_t97"]=$idref;
          $arr_nglosa["codproc_t97"]=$detrad->codigo_t67;
          $arr_nglosa["proc_t97"]=$detrad->descripcion_t67;
          $arr_nglosa["rcant_t97"]=$detrad->cantidad_t67;
          $arr_nglosa["rvunit_t97"]=$detrad->valunit_t67;
          $arr_nglosa["rvtotal_t97"]=$detrad->valor_t67;
          $arr_nglosa["caracter_t97"]=$reglosa['caract'];
          $arr_nglosa["gtipocod_t87"]=$reglosa['tipocod'];
          $arr_nglosa["gtipo_t97"]=$reglosa['tipo'];
          $arr_nglosa["gobs_t97"]=$reglosa["obs"];
          $arr_nglosa["gcant_t97"]=$reglosa["cant"];
          $arr_nglosa["gvunit_t97"]=$reglosa["valor"];
          $arr_nglosa["gtarifas_t97"]=$reglosa["valortotal"];
          $arr_nglosa["usrmod_t97"]=$this->Modulo->usr->idusr;
          $arr_nglosa["fmod_t97"]=$this->Modulo->ahora();
          $this->db->insert("cm_glosas_t97",$arr_nglosa);
        }
        
      }
    }
    if(is_array($datglosasgr)){
      foreach($datglosasgr as $grupo=>$arr_grupo){
        if($arr_grupo["glosar"]=='1'){
          $detfact = $this->Factura->obtener($radicado);
          switch($grupo){
            case "TOTAL":
              if(is_array($detfact->detalle)){
                foreach($detfact->detalle as $detrad){
                  $arr_nglosa["lote_t97"]=$detfact->lote_t96;
                  $arr_nglosa["cuenta_t97"]=$detfact->radicado_t96;
                  $arr_nglosa["terid_t97"]=$detfact->tercid_t96;
                  $arr_nglosa["ternom_t97"]=$detfact->tercdesc_t96;
                  $arr_nglosa["pacid_t97"]=$detfact->pacid_t96;
                  $arr_nglosa["pacnom_t97"]=$detfact->pacnom_t96;
                  $arr_nglosa["dxcod_t97"]=$detfact->dxcod_t96;
                  $arr_nglosa["dx_t97"]=$detfact->dx_t96;
                  $arr_nglosa["idrefcta_t97"]=$detrad->idhist_ordenes_t67;
                  $arr_nglosa["codproc_t97"]=$detrad->codigo_t67;
                  $arr_nglosa["proc_t97"]=$detrad->descripcion_t67;
                  $arr_nglosa["rcant_t97"]=$detrad->cantidad_t67;
                  $arr_nglosa["rvunit_t97"]=$detrad->valunit_t67;
                  $arr_nglosa["rvtotal_t97"]=$detrad->valor_t67;
                  $arr_nglosa["caracter_t97"]=$arr_grupo['caract'];
                  $arr_nglosa["gtipocod_t87"]=$arr_grupo['tipocod'];
                  $arr_nglosa["gtipo_t97"]=$arr_grupo['tipo'];
                  $arr_nglosa["gobs_t97"]=$arr_grupo["obs"];
                  $arr_nglosa["gcant_t97"]=$detrad->cantidad_t67;
                  $arr_nglosa["gvunit_t97"]=$detrad->valunit_t67;
                  $arr_nglosa["gtarifas_t97"]=$detrad->valor_t67;
                  $arr_nglosa["usrmod_t97"]=$this->Modulo->usr->idusr;
                  $arr_nglosa["fmod_t97"]=$this->Modulo->ahora();
                  $this->db->insert("cm_glosas_t97",$arr_nglosa);
                }
              }
              break;
            default:
              if(is_array($detfact->detalleagr[$grupo])){
                foreach($detfact->detalleagr[$grupo] as $detrad){
                  $arr_nglosa["lote_t97"]=$detfact->lote_t96;
                  $arr_nglosa["cuenta_t97"]=$detfact->radicado_t96;
                  $arr_nglosa["terid_t97"]=$detfact->tercid_t96;
                  $arr_nglosa["ternom_t97"]=$detfact->tercdesc_t96;
                  $arr_nglosa["pacid_t97"]=$detfact->pacid_t96;
                  $arr_nglosa["pacnom_t97"]=$detfact->pacnom_t96;
                  $arr_nglosa["dxcod_t97"]=$detfact->dxcod_t96;
                  $arr_nglosa["dx_t97"]=$detfact->dx_t96;
                  $arr_nglosa["idrefcta_t97"]=$detrad->idhist_ordenes_t67;
                  $arr_nglosa["codproc_t97"]=$detrad->codigo_t67;
                  $arr_nglosa["proc_t97"]=$detrad->descripcion_t67;
                  $arr_nglosa["rcant_t97"]=$detrad->cantidad_t67;
                  $arr_nglosa["rvunit_t97"]=$detrad->valunit_t67;
                  $arr_nglosa["rvtotal_t97"]=$detrad->valor_t67;
                  $arr_nglosa["caracter_t97"]=$arr_grupo['caract'];
                  $arr_nglosa["gtipocod_t87"]=$arr_grupo['tipocod'];
                  $arr_nglosa["gtipo_t97"]=$arr_grupo['tipo'];
                  $arr_nglosa["gobs_t97"]=$arr_grupo["obs"];
                  $arr_nglosa["gcant_t97"]=$detrad->cantidad_t67;
                  $arr_nglosa["gvunit_t97"]=$detrad->valunit_t67;
                  $arr_nglosa["gtarifas_t97"]=$detrad->valor_t67;
                  $arr_nglosa["usrmod_t97"]=$this->Modulo->usr->idusr;
                  $arr_nglosa["fmod_t97"]=$this->Modulo->ahora();
                  $this->db->insert("cm_glosas_t97",$arr_nglosa);
                }
              }
              break;
          }
        }
      }
    }
    
    return $radicado;
  }
  
} 
?>