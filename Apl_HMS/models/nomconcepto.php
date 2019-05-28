<?
  class Nomconcepto extends CI_Model {
    var $tipoconcepto;
    function __construct(){
      parent::__construct();
      $this->tipoconcepto = array(
        (object)array("tipo"=>"DEVENGADO"),
        (object)array("tipo"=>"PROVISIONES"),
        (object)array("tipo"=>"DEDUCIBLE")
      );
      
    }
    
    function listar($buscado){
      $this->db->from("nom_conceptos_t53");
      if(!empty($buscado)){
        $this->db->like('codigo_t53',$buscado);
        $this->db->or_like('concepto_t53',$buscado);
        $this->db->or_like('idnom_conceptos_t53',$buscado);
      }
      $this->db->order_by("codigo_t53",'asc');
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
    
    function registrar($idconcepto=""){
      $arr_datos["codigo_t53"]=$this->input->post("codigo");
      $arr_datos["concepto_t53"]=$this->input->post("concepto");
      $arr_datos["formula_t53"]=$this->input->post("formula");
      $arr_datos["tipoconcepto_t53"]=$this->input->post("tipoconcepto");
      $arr_datos["constsalario_t53"]=$this->input->post("constsalario");
      $arr_datos["constccosto_t53"]=$this->input->post("constccosto");
      $arr_datos["constercero_t53"]=$this->input->post("constercero");
      $arr_datos["constliquidacion_t53"]=$this->input->post("constliquidacion");
      $arr_datos["cuentadeb_t53"]=$this->input->post("cuentadeb");
      $arr_datos["cuentacred_t53"]=$this->input->post("cuentacred");
      $arr_datos["usrmod_t53"]=$this->Modulo->usr->idsgi_usuarios;
      $arr_datos["fmod_t53"]=date('Ymd H:i');
      if(empty($idconcepto)){
        $this->db->insert("nom_conceptos_t53",$arr_datos);
        $idconcepto = $this->Modulo->insertid();
      }else{
        $this->db->where("idnom_conceptos_t53",$idconcepto);
        $this->db->update("nom_conceptos_t53",$arr_datos);
        $this->eliminardet($idconcepto);
      }
      $arr_detalle = $this->input->post("detalle");
      if(count($arr_detalle)>0){
        $this->registrardet($idconcepto,$arr_detalle);
      }
    }
    
    function eliminar($idconcepto){
      $this->db->where("idnom_conceptos_t53",$idconcepto);
      $this->db->delete("nom_conceptos_t53");
      $this->eliminardet($idconcepto);
    }
    
    function eliminardet($idconcepto){
      $this->db->where("idnom_conceptos_t54",$idconcepto);
      $this->db->delete("nom_conceptosdet_t54");
    }
    
    function registrardet($idconcepto,$arr_detalle){
      $arr_datosdet["idnom_conceptos_t54"]=$idconcepto;
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