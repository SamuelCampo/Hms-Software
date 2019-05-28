<?
  class Entidad extends CI_Model {
    
    var $arr_tipo_entidad;
 
    function __construct(){
      parent::__construct();
      $this->arr_tipo_entidad = array(
        (object)array("tipo"=>"IPS"),
        (object)array("tipo"=>"CONSULTORIO")
      );
    }
  
   function registrar($id=""){
      $logo = (object)$_FILES["logo"];
      if(!empty($logo->name) && !empty($logo->tmp_name)){
        move_uploaded_file($logo->tmp_name,FCPATH."/img/".$logo->name);
        $arr_nuevo["logo_t75"]=$logo->name;
      }
      $arr_nuevo["tipo_t75"]=$this->input->post("tipo");
      $arr_nuevo["codigo_t75"]=$this->input->post("codigo");
      $arr_nuevo["nit_t75"]=$this->input->post("nit");
      $arr_nuevo["nombre_t75"]=$this->input->post("nombre");
      $arr_nuevo["direccion_t75"]=$this->input->post("direccion");
      $arr_nuevo["telefono_t75"]=$this->input->post("telefono");
      $arr_nuevo["nombrereplegal_t75"]=$this->input->post("nombrereplegal");
      $arr_nuevo["ccreplegal_t75"]=$this->input->post("ccreplegal");
      $arr_nuevo["telreplegal_t75"]=$this->input->post("telreplegal");
      $arr_nuevo["usrmod_t75"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t75"]=$this->Modulo->ahora();
      $this->db->update("ps_ips_t75",$arr_nuevo);
    }
    
    
    function obtener(){
       $this->db->from("ps_ips_t75");
       $query = $this->db->get();
       $arr_datos = $query->result();
       if (count($arr_datos) > 0){
         $ips = $query->row();
       }
       return $ips;
     }
    
  }
    
?>