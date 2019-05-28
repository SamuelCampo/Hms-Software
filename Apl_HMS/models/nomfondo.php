<?
  class Nomfondo extends CI_Model {
    var $tipofondo;
    function __construct(){
      parent::__construct();
      $this->tipofondo = array(
        (object)array("tipo"=>"AFP"),
        (object)array("tipo"=>"ARL"),
        (object)array("tipo"=>"CCF"),
        (object)array("tipo"=>"PARAFISCAL"),
        (object)array("tipo"=>"EPS")
      );
    }
    
    function listar($buscado){
      $this->db->from("rrhh_fondo_t58");
      if(!empty($buscado)){
        $this->db->like('codigo_t58',$buscado);
        $this->db->like('nit_t58',$buscado);
        $this->db->or_like('administradora_t58',$buscado);
        $this->db->or_like('tipo_t58',$buscado);
      }
      $this->db->order_by("codigo_t58",'asc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->result();
      }
      return false;
    }
    
    function obtener($id){
      $this->db->from("nom_conceptos_t53");
      $this->db->where("idnom_conceptos_t53",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $concepto = $query->row();
        $concepto->detalle = $this->obtenerdet($id);
        return $concepto;
      }
      return false;
    }
    
    function obtenerdet($id){
      $this->db->from("nom_conceptosdet_t54");
      $this->db->where("idnom_conceptos_t54",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $arr_datos;
      }
      return false;
    }
    
    function registrar($idfondo=""){
      $arr_nuevo["codigo_t58"]=$this->input->post("codigo");
      $arr_nuevo["nit_t58"]=$this->input->post("nit");
      $arr_nuevo["administradora_t58"]=$this->input->post("administradora");
      $arr_nuevo["nombre_t58"]=$this->input->post("nombre");
      $arr_nuevo["tipo_t58"]=$this->input->post("tipo");
      $arr_nuevo["iderp_t58"]=$this->input->post("iderp");
      $arr_nuevo["usrmod_t58"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t58"]=$this->Modulo->ahora();
      
      if(empty($idfondo)){
      $this->db->insert("rrhh_fondo_t58",$arr_nuevo);
      $id = $this->db->insert_id();
      }else{
      $this->db->where("codigo_t58",$id);
      $this->db->update("administradora_t58",$arr_nuevo);
      }
      return $this->input->post("codigo");
      
    }
    
    function eliminar($idfondo){
      $this->db->where("idnom_conceptos_t53",$idfondo);
      $this->db->delete("nom_conceptos_t53");
      $this->eliminardet($idfondo);
    }
    
    function eliminardet($idfondo){
      $this->db->where("idnom_conceptos_t54",$idfondo);
      $this->db->delete("nom_conceptosdet_t54");
    }
    
    function registrardet($idfondo,$arr_detalle){
      $arr_datosdet["idnom_conceptos_t54"]=$idfondo;
      $num = count($arr_detalle);
      for($i=0;$i<$num;$i++){
        if(!empty($arr_detalle["cuentadeb"][$i]) || !empty($arr_detalle["cuentacred"][$i])){
          $arr_datosdet["ccosto_t54"]=$arr_detalle["ccosto"][$i];
          $arr_datosdet["cuentadeb_t54"]=$arr_detalle["cuentadeb"][$i];
          $arr_datosdet["cuentacred_t54"]=$arr_detalle["cuentacred"][$i];
          $arr_datosdet["usrmod_t54"]=$this->Modulo->usr->idsgi_usuarios;
          $arr_datosdet["fmod_t54"]=date('Ymd H:i');
          $this->db->insert("nom_conceptosdet_t54",$arr_datosdet);
        }
      }
        
    }
    
  }
?>