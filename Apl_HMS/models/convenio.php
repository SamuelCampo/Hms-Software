<?
class Convenio extends CI_Model {
  
  var $arr_planes;
  
  function __construct(){
    parent::__construct();
    $this->load->model('Tarifa');
    $this->arr_planes = $this->Tarifa->planes_tipos();
  }
  
  
  function listar($buscado="",$tercero=""){
    $this->db->distinct();
    $this->db->select("codigo_t95, tercero_t95,	desc_t16, descripcion_t95, vigdesde_t95, vighasta_t95, periodopago_t95");
    $this->db->from("ps_convenios_t95");
    $this->db->join("param_terceros_t16","tercero_t95=ident_t16");
    if(!empty($tercero)){
      $this->db->where("tercero_t95",$tercero);
    }elseif(!empty($buscado)){
      $this->db->like("tercero_t95",$buscado);
      $this->db->or_like("desc_t16",$buscado);
      $this->db->or_like("descripcion_t95",$buscado);
    }
    $this->db->order_by("tercero_t95","asc");
    $this->db->order_by("vigdesde_t95","desc");
    $query = $this->db->get();
    return $query->result();
  }
  
  function obtener($id){
    $this->db->from("ps_convenios_t95");
    $this->db->join("param_terceros_t16","tercero_t95=ident_t16");
    $this->db->where("codigo_t95",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      foreach($arr_datos as $reg){
        $arr_res["tercero"]=$reg->tercero_t95;
        $arr_res["tarifas"][$reg->grupo_t95][$reg->codplan_t95]=$reg->valor_t95;
        $arr_res["convenio"]=$reg;
      }
    }
    return $arr_res;
  }
  
  function registrar($id="",$datconv=""){
    if(empty($datconv)){
      $datconv = (object)$this->input->post();
    }
    if(is_array($datconv->TARIFAS)){
      if(!empty($id)){
        $this->db->where("codigo_t95",$id);
        $this->db->delete("ps_convenios_t95");
      }else{
        $id = $this->sigcodigo($datconv->tercero);
      }
      foreach($datconv->TARIFAS as $codgrup=>$tarifgrup){
        if(is_array($tarifgrup)){
          foreach($tarifgrup as $plan=>$valor){
            if(is_numeric($valor)){
              $arr_nuevo["codigo_t95"]=$id;
              $arr_nuevo["vigdesde_t95"]=$datconv->vigdesde;
              $arr_nuevo["vighasta_t95"]=$datconv->vighasta;
              $arr_nuevo["periodopago_t95"]=$datconv->periodopago;
              $arr_nuevo["tercero_t95"]=$datconv->tercero;
              $arr_nuevo["descripcion_t95"]=$datconv->descripcion;
              $arr_nuevo["codplan_t95"]=$plan;
              $arr_nuevo["grupo_t95"]=$codgrup;
              $arr_nuevo["valor_t95"]=$valor;
              $arr_nuevo["usrmod_t95"]=$this->Modulo->usr->idusr;
              $arr_nuevo["fmod_t95"]=$this->Modulo->ahora();
              $this->db->insert("ps_convenios_t95",$arr_nuevo);
              unset($arr_nuevo);
            }
          }
        }
      }
    }
    return $datconv->tercero;
  }
  
  function sigcodigo($tercero){
    $this->db->select_max("codigo_t95");
    $this->db->from("ps_convenios_t95");
    $this->db->where("tercero_t95",$tercero);
    $query = $this->db->get();
    $reg = $query->row();
    //var_dump($reg);
    $cod = $tercero.str_pad((str_replace($tercero,'',$reg->codigo_t95)*1+1),3,'0',STR_PAD_LEFT);;
    //var_dump($cod);
    //exit;
    return $cod;
  }
  
} 
?>