<?
  class Grupoarticulo extends CI_Model {
 
    
    function __construct(){
      parent::__construct();
    }
    
    function listar($buscado,$paginar=true){
      $this->db->from("param_garticulos_t8");
      if(!empty($buscado)){
        $this->db->like('id_garticulos_t8',$buscado);
        $this->db->or_like('cod_t8',$buscado);
        $this->db->or_like('desc_t8',$buscado);
      }
      $this->db->order_by("cod_t8",'asc');
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
    
      
    function obtener($id,$cod=false){
      $this->db->from("param_garticulos_t8");
      if($cod==true){
        $this->db->where("cod_t8",$id);
      }else{
        $this->db->where("id_garticulos_t8",$id);
      }
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->row();
      }
      return false;
    }
    
    function registrar($id=""){
      $arr_reg["cod_t8"]=$this->input->post("codgarticulos");
      $arr_reg["desc_t8"]=$this->input->post("nombregarticulos");
      $arr_reg["ctagasto_t8"]=$this->input->post("ctagastosgarticulos");
      $arr_reg["ctaingreso_t8"]=$this->input->post("ctaingresosgarticulos");
      $arr_reg["usrmod_t8"]=$this->Modulo->usr->idusr;
      $arr_reg["fechmod_t8"]=$this->Modulo->ahora();
      if(empty($id)){
        $this->db->insert("param_garticulos_t8",$arr_reg);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("id_garticulos_t8",$id);
        $this->db->update("param_garticulos_t8",$arr_reg);
      }
      return $arr_reg["cod_t8"];
    }
    
    function eliminar($id){
      $this->db->where("id_garticulos_t8",$id);
      $this->db->delete("param_garticulos_t8");
    }
  }
?>