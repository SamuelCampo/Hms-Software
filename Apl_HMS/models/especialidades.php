<?
class Especialidades extends CI_Model {
  
  function __construct(){
    parent::__construct();
  }
  
  function param_listar($idespec=""){
    var_dump($idespec);
    $this->db->from("param_especialidades_t103 u");
    $this->db->order_by("u.especialidades_t103",'asc');
    if(!empty($idespec)){
      $this->db->where("u.idps_especialidades_t103",$idespec);
      $query = $this->db->get();
      return $query->row();
    }else{
      $query = $this->db->get();
      return $query->result();
    }
  }
  
  function obtener_especialidades_medico($espec=""){
    if(empty($espec)){
      $this->db->select("idps_especialidades_t11, especialidades_t9");
    }else{
      $this->db->select("numero_identificacion_t10, nomcomp_t10");
      $this->db->where("idps_especialidades_t11",$espec);
    }
    $this->db->distinct();
    $this->db->from("ps_personal_espec_t11");
    $this->db->join("ps_especialidades_t9","idps_especialidades_t11=idps_especialidades_t9","left");
    $this->db->join("ps_personal_t10","idps_personal_t11=numero_identificacion_t10","left");
    $this->db->order_by('especialidades_t9', 'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
   function obtener($id){
    $resul = false;
    $this->db->from("ps_especialidades_t9");
    $this->db->where("idps_especialidades_t9",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  function eliminar($id){
      $this->db->where("idps_especialidades_t9",$id);
      $this->db->delete("ps_especialidades_t9",$arr_datos);
    }
  
  function listar($buscado,$id=false){
     $resul = false;
    $this->db->from("ps_especialidades_t9 u");
    if($id==true){
      $this->db->where("u.idps_especialidades_t9",$buscado);
    }elseif(!empty($buscado)){
   $this->db->like('u.especialidades_t9',$buscado);
          }
    $this->db->order_by("u.especialidades_t9",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      //var_dump($query); exit;
    if($id==true){
      $resul =  $query->row();
     }else{
      $resul = $query->result();
      }
      }
    return $resul;
  }
  function registrar($id=""){
    $arr_nuevo["especialidades_t9"]=$this->input->post("especialidades");
    $arr_nuevo["usrmod_t9"]=$this->Modulo->usr->idusr;
    $arr_nuevo["fmod_t9"]=$this->Modulo->ahora();
    
    if(empty($id)){
      $this->db->insert("ps_especialidades_t9",$arr_nuevo);       
      $id = $this->db->insert_id();
    }else{
      $this->db->where("idps_especialidades_t9",$id);
      $this->db->update("ps_especialidades_t9",$arr_nuevo);
    }
    return $id;
  }
  
} 
?>