<?
class Cie10 extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function obtener($id){
    $this->db->from("ps_cie10_14");
    $this->db->where("codigo_t14",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return  $query->row();
    }
  }
  
  function listar($buscado){
    $this->db->from("ps_cie10_14");
    if(!empty($buscado)){
      $this->db->like('codigo_t14',$buscado);
      $this->db->or_like('descripcion_t14',$buscado);
    }
    $this->db->order_by("descripcion_t14",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  
} 
?>