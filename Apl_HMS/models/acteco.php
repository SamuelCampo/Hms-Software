<?
class ActEco extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function obtener($id){
    $this->db->from("ps_acteco_120");
    $this->db->where("cod_120",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return  $query->row();
    }
  }
  
  function listar($buscado){
    $this->db->from("ps_acteco_120");
    if(!empty($buscado)){
      $this->db->like('cod_120',$buscado);
      $this->db->or_like('desc_120',$buscado);
    }
    $this->db->order_by("desc_120",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  
} 
?>