<?
class Cups extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function obtener($id){
    $this->db->from("ps_plan_tarifario_t63");
    $this->db->where("codplantarifa_t63",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
  function listar_tab(){
    $this->db->from("ps_plan_tarifario_t63");
    $this->db->where("tipoplan_t63",'ISS');
    $query = $this->db->get();
    return $query->result();
  }
  
  function listar($buscado,$tipo=""){
    if(empty($tipo)){
      $this->db->from("v_ps_plan_tarifario_t63_iss");
    }else{
      $this->db->from("v_ps_plan_tarifario_t63_iss_".strtolower($tipo));
    }
    if(!empty($buscado)){
      $this->db->like('codplantarifa_t63',$buscado);
      $this->db->or_like('descripcion_t63',$buscado);
    }
    $this->db->order_by("descripcion_t63",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  
} 
?>