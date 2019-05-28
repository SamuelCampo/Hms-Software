<?
class Serviciohab extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function obtener($id){
    $this->db->from("ps_servicioshab_t74");
    $this->db->where("idps_servicioshab_t74",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return  $query->row();
    }
  }
  
  function listar($buscado){
    $this->db->from("ps_servicioshab_t74");
    $this->db->order_by("descripcion_t74",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $resul = $query->result();
    }
    return $resul;
  }
  
  function registrar($id=""){
    $arr_nuevo["codigo_t74"]=$this->input->post("codigo");
    $arr_nuevo["censo_t74"]=$this->input->post("censo");
    $arr_nuevo["descripcion_t74"]=$this->input->post("descripcion");
    $arr_nuevo["usrmod_t74"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t74"]=$this->Modulo->ahora();
    if(empty($id)){
      $this->db->insert("ps_servicioshab_t74",$arr_nuevo);
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idps_servicioshab_t74",$id);
      $this->db->update("ps_servicioshab_t74",$arr_nuevo);
    }
  }
  
  function eliminar($id){
    $this->db->where("idps_servicioshab_t74",$id);
    $this->db->delete("ps_servicioshab_t74");
  }
  
} 
?>