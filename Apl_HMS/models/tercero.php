<?
  class Tercero extends CI_Model {
 
    var $arr_tipoart;
    var $arr_tipopers;
    var $arr_tipoident;
    
    
    function __construct(){
      parent::__construct();
      $this->arr_tipoter = array(
        (object)array("tipo"=>"CLIENTE"),
        (object)array("tipo"=>"EMPLEADO"),
        (object)array("tipo"=>"PROVEEDOR"),
        (object)array("tipo"=>"MÉDICO"),
        (object)array("tipo"=>"IPS"),
      );
      $this->arr_tipopers = array(
        (object)array("idtipo"=>"13","tipo"=>"NATURAL"),
        (object)array("idtipo"=>"31","tipo"=>"JURÍDICA")
      );
      $this->arr_tipoident = array(
        (object)array("tipo"=>"CC"),
        (object)array("tipo"=>"NIT")
      );
    }

      function listar_ad(){
      return $this->db->get('param_terceros_t16')->result();
    }
    
    function listar_adm(){
      return $this->db->get('ps_administradoras_t70')->result();
    }

    function clientes_listar($buscado){
      $this->db->from("v_param_terceros_t16_cli");
      if(!empty($buscado)){
        $this->db->like('cod_t16',$buscado);
        $this->db->or_like('desc_t16',$buscado);
        $this->db->or_like('nomcomp_t16',$buscado);
      }
      $this->db->order_by("cod_t16",'asc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      return $query->result();
    }
    
    function listar($buscado,$paginar=true){
      $this->db->from("param_terceros_t16");
      if(!empty($buscado)){
        $this->db->like('cod_t16',$buscado);
        $this->db->or_like('desc_t16',$buscado);
      }
      $this->db->order_by("desc_t16",'asc');
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
    
      
    function obtener($id,$cod="",$ident=""){
      $this->db->from("param_terceros_t16");
      if(!empty($cod)){
        $this->db->where("cod_t16",$cod);
      }elseif(!empty($ident)){
        $this->db->where("ident_t16",$ident);
      }else{
        $this->db->where("idparam_terceros_t16",$id);
      }
      $query = $this->db->get();
      return $query->row();
    }
    
    function registrar($id=""){
      $arr_tipopers = $this->Modulo->arrayid($this->arr_tipopers,"idtipo");
      $arr_reg["cod_t16"]=$this->input->post("codtercero");
      $arr_reg["desc_t16"]=$this->input->post("descterc");
      if(empty($arr_reg["desc_t16"])){
        $arr_reg["desc_t16"] = str_replace("  "," ",trim($this->input->post("primapellterc")." ".$this->input->post("segapellterc")." ".$this->input->post("nomtercero")));
      }
      
      $arr_reg["tipoperscod_t16"]=$this->input->post("tipopersona");
      $arr_reg["tipopers_t16"]=$arr_tipopers[$this->input->post("tipopersona")]->tipo;
      $arr_reg["tipoter_t16"]=$this->input->post("tipotercero");
      $arr_reg["tipoident_t16"]=$this->input->post("tipoident");
      $arr_reg["ident_t16"]=$this->input->post("identtercero");
      $arr_reg["dv_t16"]=$this->input->post("dvterc");
      $arr_reg["nombre_t16"]=$this->input->post("nomtercero");
      $arr_reg["apellidos1_t16"]=$this->input->post("primapellterc");
      $arr_reg["apellidos2_t16"]=$this->input->post("segapellterc");
      $arr_reg["direccion_t16"]=$this->input->post("direcciontercero");
      $arr_reg["telefono1_t16"]=$this->input->post("telefono1tercero");
      $arr_reg["telefono2_t16"]=$this->input->post("telefono2tercero");
      $arr_reg["correo_t16"]=$this->input->post("emailtercero");
      $arr_reg["cuidadcod_t16"]=$this->input->post("cuidadtercero");
      $arr_reg["cuidad_t16"]=$this->input->post("cuidadtercero");
      $arr_reg["usrmod_t16"]=$this->Modulo->usr->idusr;
      $arr_reg["fechmod_t16"]=$this->Modulo->ahora();
      $arr_reg["direccion_com_t16"]=$this->input->post("dcomercialtercero");
      $arr_reg["ctl_cliente_t16"]=$this->input->post("ctaclientetercero");
      $arr_reg["ctl_prov_t16"]=$this->input->post("ctaproveedortercero");
      $arr_reg["ctl_empl_t16"]=$this->input->post("ctaempleadotercero");
      $arr_reg["ctl_ant_t16"]=$this->input->post("ctaanticipotercero");
      $arr_reg["tercerref_t16"]=$this->input->post("tercerref");
      $arr_reg["tercerrefcod_t16"]=$this->input->post("tercerrefcod");
      $oEspec = $this->Especialidades->param_listar($this->input->post("espec"));
      $arr_reg["idespec_t16"]=$this->input->post("espec");
      $arr_reg["espec_t16"]=$oEspec->especialidades_t103;
      
      if(empty($id)){
        $this->db->insert("param_terceros_t16",$arr_reg);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("idparam_terceros_t16",$id);
        $this->db->update("param_terceros_t16",$arr_reg);
      }
      $arr_administradora['tipoadmin_t70'] = $this->input->post("tipotercero");
      $arr_administradora['codministerio_t70'] = $this->input->post('tipoident');
      $arr_administradora['nit_t70'] = $this->input->post("identtercero");
      $arr_administradora['nombre_t70'] = $this->input->post("descterc");
      $arr_administradora['direccion_t70'] = $this->input->post("direcciontercero");
      $arr_administradora['ciudadcod_t70'] = $this->input->post("cuidadtercero");
      $arr_administradora['telefono_t70'] = $this->input->post("telefono1tercero");
      $arr_administradora['usrmod_t70'] = $this->Modulo->usr->idusr;
      $arr_administradora['fmod_t70'] = date('Y-m-d');
      $this->db->insert('ps_administradoras_t70', $arr_administradora);
      return $arr_reg["cod_t16"];
    }
    
    function eliminar($id){
      $this->db->where("idparam_terceros_t16",$id);
      $this->db->delete("param_terceros_t16");
    }
  }
?>