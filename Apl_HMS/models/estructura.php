<?
class Estructura extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function obtener($id){
    $resul = false;
    $this->db->from("ps_estructura_t8");
    $this->db->where("idps_estructura_t8",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
  function obtener_agendable(){
    $resul = false;
    $this->db->from("ps_estructura_t8");
    $this->db->where("dispagenda_t8",1);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function listar($filtro){
    $this->db->from("ps_estructura_t8");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function registrar($id=""){
    $arr_nuevo["descripcion_t8"]=$this->input->post("descripcion");
    $arr_nuevo["edificio_t8"]=$this->input->post("edificio");
    $arr_nuevo["piso_t8"]=$this->input->post("piso");
    $arr_nuevo["servicio_t8"]=$this->input->post("servicio");
    $arr_nuevo["numcubic_t8"]=$this->input->post("numcubic");
    $arr_nuevo["dispagenda_t8"]=$this->input->post("dispagenda");
    $arr_nuevo["usrmod_t8"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t8"]=$this->Modulo->ahora();
    if(empty($id)){
      $this->db->insert("ps_estructura_t8",$arr_nuevo);
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idps_estructura_t8",$id);
      $this->db->update("ps_estructura_t8",$arr_nuevo);
    }
    $num = $this->input->post('camas')+1;
    for ($i=1; $i < $num; $i++) { 
      $arr_camas['servicios_cama'] = $this->input->post('descripcion');
      $arr_camas['identificador_cama'] = $i;
      $arr_camas['usrmod_t200'] = $this->Modulo->usr->idusr;
      $arr_camas['fmod_t200'] = $this->Modulo->ahora();
      $this->db->insert('ps_camas_t2000', $arr_camas);
    }
    return $id;
  }
  
} 
?>