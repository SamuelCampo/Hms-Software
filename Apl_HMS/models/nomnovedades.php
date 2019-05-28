<?
  class Novedad extends CI_Model {

    function __construct(){
      parent::__construct();
      
    }
    
    function listar($buscado){
      $this->db->from("nom_novedades_t55");
      if(!empty($buscado)){
        $this->db->like('nombre_t55',$buscado);
        $this->db->or_like('descripcion_t55',$buscado);
      }
      $this->db->order_by("concepto_t53",'asc');
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
      $empleado = $this->Empleado->obtener($this->input->post("empleado"));
      $cargo = $this->Cargo->obtener($empleado->cargo_t1);
      $arr_datos["idnom_conceptos_t55"]=$concepto->idnom_conceptos_t53;
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
      var_dump($arr_datos); exit;
      if(empty($id)){
        $this->db->insert("nom_novedades_t55",$arr_datos);
        $idconcepto = $this->Modulo->insertid();
      }else{
        $this->db->where("idnom_novedades_t55",$idconcepto);
        $this->db->update("nom_novedades_t55",$arr_datos);
      }
    }
    
    function registrardet($idconcepto,$arr_detalle){
      $arr_datosdet["idnom_conceptos_t54"]=$idconcepto;
      $num = count($arr_detalle);
      for($i=0;$i<$num;$i++){
        $arr_datosdet["ccosto_t54"]=$arr_detalle["ccosto"][$i];
        $arr_datosdet["cuenta_t54"]=$arr_detalle["cuenta"][$i];
        $arr_datosdet["usrmod_t54"]=$this->Modulo->usr->idsgi_usuarios;
        $arr_datosdet["fmod_t54"]=date('Ymd H:i');
        $this->db->insert("nom_conceptosdet_t54",$arr_datosdet);
      }
        
    }
    
  }
?>