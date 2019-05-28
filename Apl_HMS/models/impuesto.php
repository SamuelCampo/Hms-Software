<?
  class Impuesto extends CI_Model {
    var $arr_tipodocs;
    var $arr_tipoimp;
 
    
    function __construct(){
      parent::__construct();
     $this->arr_tipodocs = array(
      (object)array("tipodocs"=>"COMPRA"),
      (object)array("tipodocs"=>"VENTA")
      );
     
     $this->arr_tipoimp = array(
      (object)array("tipo"=>"GRAVADO"),
      (object)array("tipo"=>"EXCENTO")
      );
    }
    
    function listar($buscado,$paginar=true){
      $this->db->from("param_imptos_t400");
      if(!empty($buscado)){
        $this->db->like('idparam_imptos_t400',$buscado);
        $this->db->or_like('codigo_t400',$buscado);
        $this->db->or_like('descripcion_t400',$buscado);
        $this->db->or_like('cta_t400',$buscado);
      }
      $this->db->order_by("descripcion_t400",'asc');
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
      $this->db->from("param_imptos_t400");
      if(!empty($codigo)){
        $this->db->where("codigo_t400",$codigo);
      }
      $this->db->where("idparam_imptos_t400",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->row();
      }
      return false;
    }
    
    function registrar($id=""){
      $oCta = $this->Puc->obtener("",$this->input->post("cuenta"));
      $arr_nuevo["codigo_t400"]=$this->input->post("codigo");
      $arr_nuevo["descripcion_t400"]=$this->input->post("descripcion");
      $arr_nuevo["cta_t400"]=$oCta->cod_t4;
      $arr_nuevo["ctadesc_t400"]=$oCta->cod_t4.' '.$oCta->desc_t4;
      $arr_nuevo["tipoimp_t400"]=$this->input->post("tipoimp");
      $arr_nuevo["tipodoc_t400"]=$this->input->post("tipodoc");
      $arr_nuevo["base_t400"]=$this->input->post("base");
      $arr_nuevo["estado_t400"]=$this->input->post("estado");
      $arr_nuevo["usrmod_t400"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t400"]=$this->Modulo->ahora();
      if(empty($id)){
        $this->db->insert("param_imptos_t400",$arr_nuevo);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("idparam_imptos_t400",$id);
        $this->db->update("param_imptos_t400",$arr_nuevo);
      }
      return $arr_nuevo["codigo_t400"];
    }
    
    function eliminar($id){
      $this->db->where("idparam_imptos_t400",$id);
      $this->db->delete("param_imptos_t400");
    }
  }
?>