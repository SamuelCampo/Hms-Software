<?
  class Nomnovedad extends CI_Model {

    function __construct(){
      parent::__construct();
    }
    
    function eliminar($idnovedad){
      $this->db->where("idnom_novedades_t55",$idnovedad);
      $this->db->delete("nom_novedades_t55");
    }
    
    function listar($buscado){
      $this->db->from("nom_novedades_t55");
      if(!empty($buscado)){
        $this->db->like('nombre_t55',$buscado);
        $this->db->or_like('descripcion_t55',$buscado);
      }
      $this->db->order_by("periodo_t55",'desc');
      $this->db->order_by("idempleado_t55",'desc');
      $this->db->order_by("descripcion_t55",'desc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->result();
      }
      return false;
    }
    
    function obtener($id){
      $this->db->from("nom_novedades_t55");
      $this->db->where("idnom_novedades_t55",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->row();
      }
      return false;
    }
    
    function registrar($idnovedad=""){
      $concepto = $this->Nomconcepto->obtener($this->input->post("idnom_conceptos"));
      $empleado = $this->Empleado->obtener($this->input->post("idempleado"));
      $cargo = $this->Cargo->obtener($empleado->cargo_t1);
      $arr_datos["idnom_conceptos_t55"]=$concepto->idnom_conceptos_t53;
      $arr_datos["idcodigoconcepto_t55"]=$concepto->codigo_t53;
      $arr_datos["descripcion_t55"]=$concepto->concepto_t53;
      $arr_datos["idempleado_t55"]=$empleado->identificacion_t1;
      $arr_datos["nombre_t55"]=$empleado->nomcomp_t1;
      $arr_datos["idcargo_t55"]=$cargo->idrrhh_cargos_t15;
      $arr_datos["cargo_t55"]=$cargo->cargo_t15;
      $arr_datos["finicio_t55"]=$this->input->post("finicio");
      $arr_datos["ffinal_t55"]=$this->input->post("ffinal");
      $arr_datos["cantidad_t55"]=$this->input->post("cantidad");
      $arr_datos["valor_t55"]=$this->input->post("valor");
      $arr_datos["periodo_t55"]=$this->input->post("periodo");
      $arr_datos["usrmod_t55"]=$this->Modulo->usr->idsgi_usuarios;
      $arr_datos["fmod_t55"]=date('Ymd H:i');
      if(empty($idnovedad)){
        $this->db->insert("nom_novedades_t55",$arr_datos);
        $idnovedad = $this->Modulo->insertid();
      }else{
        $this->db->where("idnom_novedades_t55",$idnovedad);
        $this->db->update("nom_novedades_t55",$arr_datos);
      }
    }
    
  }
?>