<?
  class Puc extends CI_Model {
    var $arr_clasecta;
    var $arr_nivel;
 
    
    function __construct(){
      parent::__construct();
     $this->arr_clasecta = array(
      (object)array("cuenta"=>"ACTIVO","tipo_cuenta"=>"ACTIVO"),
      (object)array("cuenta"=>"PASIVO","tipo_cuenta"=>"PASIVO"),
      (object)array("cuenta"=>"PATRIMONIO","tipo_cuenta"=>"PATRIMONIO"),
      (object)array("cuenta"=>"INGRESO","tipo_cuenta"=>"INGRESO"),
      (object)array("cuenta"=>"COSTO","tipo_cuenta"=>"COSTO"),
      (object)array("cuenta"=>"GASTO","tipo_cuenta"=>"GASTO"),
      (object)array("cuenta"=>"DEUDORAS","tipo_cuenta"=>"DEUDORAS"),
      (object)array("cuenta"=>"ACREEDORAS","tipo_cuenta"=>"ACREEDORAS")
      );
     
     $this->arr_nivel = array(
      (object)array("nivel"=>"1","tipo_nivel"=>"1"),
      (object)array("nivel"=>"2","tipo_nivel"=>"2"),
      (object)array("nivel"=>"3","tipo_nivel"=>"3"),
      (object)array("nivel"=>"4","tipo_nivel"=>"4"),
      (object)array("nivel"=>"5","tipo_nivel"=>"5")
      );
    }
    
    function listar($buscado,$paginar=true){
      $this->db->from("param_puc_t4");
      if(!empty($buscado)){
        $this->db->like('id_puc_t4',$buscado);
        $this->db->or_like('cod_t4',$buscado);
        $this->db->or_like('desc_t4',$buscado);
        $this->db->or_like('clasecta_t4',$buscado);
      }
      $this->db->order_by("cod_t4",'asc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if(count($arr_datos) > 0){
        if($paginar==true){
          return $this->Paginacion->paginar($arr_datos);
        }else{
          return $arr_datos;
        }
      }
      return false;
    }
    
      
    function obtener($id,$codigo=""){
      $this->db->from("param_puc_t4");
      if(!empty($codigo)){
        $this->db->where("cod_t4",$codigo);
      }else{
        $this->db->where("id_puc_t4",$id);
      }
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->row();
      }
      return false;
    }
    
    function registrar($id=""){
      $arr_nuevo["cod_t4"]=$this->input->post("cod");
      $arr_nuevo["desc_t4"]=$this->input->post("desc");
      $arr_nuevo["clasecta_t4"]=$this->input->post("clasecta");
      $arr_nuevo["nivel_t4"]=$this->input->post("nivel");
      $arr_nuevo["ctamayor_t4"]=$this->input->post("ctamayor");
      $arr_nuevo["activof_t4"]=$this->input->post("activof");
      $arr_nuevo["tercero_t4"]=$this->input->post("tercero");
      $arr_nuevo["ctaasoci_t4"]=$this->input->post("ctaasoci");
      $arr_nuevo["saldo_t4"]=$this->input->post("saldo");
      $arr_nuevo["ctaniif_t4"]=$this->input->post("ctaniif");
      $arr_nuevo["usrmod_t4"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t4"]=$this->Modulo->ahora();
      if(empty($id)){
        $this->db->insert("param_puc_t4",$arr_nuevo);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("id_puc_t4",$id);
        $this->db->update("param_puc_t4",$arr_nuevo);
      }
      return $id;
    }
    
    function eliminar($id){
      $this->db->where("id_puc_t4",$id);
      $this->db->delete("param_puc_t4");
    }
  }
?>