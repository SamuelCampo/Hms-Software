<?
  class Ccosto extends CI_Model {
    
    function __construct(){
      parent::__construct();
    }
    
    function listar($buscado,$paginar=true){
      $this->db->from("param_ccosto_t11");
      if(!empty($buscado)){
        $this->db->like('id_ccosto_t11',$buscado);
        $this->db->or_like('cod_t11',$buscado);
        $this->db->or_like('desc_t11',$buscado);
      }
      $this->db->order_by("desc_t11",'asc');
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
      $this->db->from("param_ccosto_t11");
      if(!empty($codigo)){
        $this->db->where("cod_t11",$codigo);
      }else{
        $this->db->where("id_ccosto_t11",$id);
      }
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->row();
      }
      return false;
    }
    
    function registrar($id=""){
      $arr_nuevo["cod_t11"]=$this->input->post("ccosto");
      $arr_nuevo["desc_t11"]=$this->input->post("nombreccosto");
      $arr_nuevo["tipo_t11"]=$this->input->post("tipoccosto");
      $arr_nuevo["ccmayor_t11"]=$this->input->post("ccostomayor");
      $arr_nuevo["activo_t11"]=$this->input->post("activo");
      $arr_nuevo["usrmod_t11"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fechmod_t11"]=$this->Modulo->ahora();
      if(empty($id)){
        $this->db->insert("param_ccosto_t11",$arr_nuevo);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("id_ccosto_t11",$id);
        $this->db->update("param_ccosto_t11",$arr_nuevo);
      }
      return $id;
    }
    
    function eliminar($id){
      $this->db->where("id_ccosto_t11",$id);
      $this->db->delete("param_ccosto_t11");
    }
  }
?>