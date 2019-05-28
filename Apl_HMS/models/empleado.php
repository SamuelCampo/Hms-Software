<?
  class Empleado extends CI_Model {
    
    var $idtb;
    
    function __construct(){
      parent::__construct();
      $this->idtb="_t1";
    }
    
    function registrar($id=""){
      return true;
      $estado = $this->input->post("estado");
      if(empty($estado)){
        $estado = "ACTIVO";
      }
      $arr_datos["estado$this->idtb"]=$estado;
      $arr_datos["nombre1$this->idtb"]=$this->input->post("nombre1");
      $arr_datos["nombre2$this->idtb"]=$this->input->post("nombre2");
      $arr_datos["apellido1$this->idtb"]=$this->input->post("apellido1");
      $arr_datos["apellido2$this->idtb"]=$this->input->post("apellido2");
      $nomcomp = str_replace("  "," ",$arr_datos["apellido1$this->idtb"]." ".$arr_datos["apellido2$this->idtb"]." ".$arr_datos["nombre1$this->idtb"]." ".$arr_datos["nombre2$this->idtb"]);
      $arr_datos["nomcomp$this->idtb"]=$nomcomp;
      $arr_datos["fnacimiento$this->idtb"]=str_replace("-","",$this->input->post("fnacimiento"));
      $arr_datos["cumple$this->idtb"]=substr($this->input->post("fnacimiento"),5,5);
      $arr_datos["identificaciontipo$this->idtb"]=$this->input->post("identificaciontipo");
      $arr_datos["identificacion$this->idtb"]=$this->input->post("identificacion");
      $arr_datos["fexpedicion$this->idtb"]=str_replace("-","",$this->input->post("fexpedicion"));
      $arr_datos["lexpedicion$this->idtb"]=$this->input->post("lexpedicion");
      $arr_datos["lnacimiento$this->idtb"]=$this->input->post("lnacimiento");
      $arr_datos["cargo$this->idtb"]=$this->input->post("cargo");
      $arr_datos["area$this->idtb"]=$this->input->post("area");
      $arr_datos["centrocosto$this->idtb"]=$this->input->post("centrocosto");
      $arr_datos["rh$this->idtb"]=$this->input->post("rh");
      $arr_datos["arl$this->idtb"]=$this->input->post("arp");
      $arr_datos["afp$this->idtb"]=$this->input->post("afp");
      $arr_datos["eps$this->idtb"]=$this->input->post("eps");
      $arr_datos["fingreso$this->idtb"]=str_replace("-","",$this->input->post("fingreso"));
      $arr_datos["fretiro$this->idtb"]=str_replace("-","",$this->input->post("fretiro"));
      $arr_datos["estadocivil$this->idtb"]=$this->input->post("estadocivil");
      $arr_datos["ciudad$this->idtb"]=$this->input->post("ciudad");
      $arr_datos["direccion$this->idtb"]=$this->input->post("direccion");
      $arr_datos["barrio$this->idtb"]=$this->input->post("barrio");
      $arr_datos["telefono$this->idtb"]=$this->input->post("telefono");
      $arr_datos["celular$this->idtb"]=$this->input->post("celular");
      $arr_datos["telcorp$this->idtb"]=$this->input->post("telcorp");
      $arr_datos["correo$this->idtb"]=$this->input->post("correo");
      $arr_datos["cuentabanc$this->idtb"]=$this->input->post("cuentabanc");
      $arr_datos["salario$this->idtb"]=$this->input->post("salario");
      $arr_datos["fuentehv$this->idtb"]=$this->input->post("fuentehv");
      $arr_datos["hvfrecep$this->idtb"]=str_replace("-","",$this->input->post("hvfrecep"));
      $arr_datos["experienciatiempo$this->idtb"]=$this->input->post("experienciatiempo");
      $arr_datos["experienciacargo$this->idtb"]=$this->input->post("experienciacargo");
      $arr_datos["usrmod$this->idtb"]=$this->Modulo->usr->idsgi_usuarios;
      $arr_datos["fmod$this->idtb"]=date('Ymd H:i');
      if(!empty($id)){
        $this->db->where("idempleado$this->idtb",$id);
        $this->db->update("rrhh_empleado$this->idtb",$arr_datos);
      }else{
        $this->db->insert("rrhh_empleado$this->idtb",$arr_datos);
      }
      return $arr_datos["identificacion$this->idtb"];
    }
    
    function listar($buscado){
      return true;
      $this->db->from("rrhh_empleado_t1 e");
      $this->db->join("sgi_ciudades_t24 le","e.lexpedicion_t1=le.codigo_t24","left");
      $this->db->join("sgi_ciudades_t24 ln","e.lnacimiento_t1=ln.codigo_t24","left");
      $this->db->join("sgi_ciudades_t24 lr","e.ciudad_t1=lr.codigo_t24","left");
      $this->db->join("rrhh_cargos_t15 cg","e.cargo_t1=cg.idrrhh_cargos_t15","left");
      $this->db->join("sgi_areas_t16 ar","e.area_t1=ar.idsgi_area_t16","left");
      $this->db->join("rrhh_afp_t26 afp","e.afp_t1=afp.idrrhh_afp_t26","left");
      $this->db->join("rrhh_eps_t27 eps","e.eps_t1=eps.idrrhh_eps_t27","left");
      if(!empty($buscado)){
        $this->db->like("nombre1_t1",$buscado);
        $this->db->or_like("nombre2_t1",$buscado);
        $this->db->or_like("apellido1_t1",$buscado);
        $this->db->or_like("apellido2_t1",$buscado);
        $this->db->or_like("nomcomp_t1",$buscado);
        $this->db->or_like("estado_t1",$buscado);
        $this->db->or_like("cargo_t15",$buscado);
        $this->db->or_like("identificacion_t1",$buscado);
      }
      $this->db->order_by("apellido1_t1",'asc');
      $this->db->order_by("apellido2_t1",'asc');
      $this->db->order_by("nombre1_t1",'asc');
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        return $query->result();
      }
      return false;
    }
    
    function obtener($id){
      return true;
      $this->db->select("e.idempleado_t1, e.nombre1_t1, e.nombre2_t1, e.apellido1_t1, e.apellido2_t1, e.nomcomp_t1, e.fnacimiento_t1, e.identificaciontipo_t1, e.identificacion_t1, e.fexpedicion_t1, e.lexpedicion_t1, le.ciudad_t24 lexpedicion, e.lnacimiento_t1,ln.ciudad_t24 lnacimiento, e.cargo_t1, cg.cargo_t15, e.area_t1,ar.area_t16, e.centrocosto_t1, e.rh_t1, e.arl_t1, e.afp_t1, afp.afp_t26, e.eps_t1, eps.eps_t27, e.fingreso_t1, e.fretiro_t1, e.estadocivil_t1, e.fmod_t1, e.usrmod_t1, e.estado_t1, e.ciudad_t1, lr.ciudad_t24 lresidencia, e.barrio_t1, e.telefono_t1, e.celular_t1, e.telcorp_t1, e.correo_t1, e.cuentabanc_t1, e.salario_t1, e.direccion_t1, e.fuentehv_t1");
      $this->db->from("rrhh_empleado_t1 e");
      $this->db->join("sgi_ciudades_t24 le","e.lexpedicion_t1=le.codigo_t24","left");
      $this->db->join("sgi_ciudades_t24 ln","e.lnacimiento_t1=ln.codigo_t24","left");
      $this->db->join("sgi_ciudades_t24 lr","e.ciudad_t1=lr.codigo_t24","left");
      $this->db->join("rrhh_cargos_t15 cg","e.cargo_t1=cg.idrrhh_cargos_t15","left");
      $this->db->join("sgi_areas_t16 ar","e.area_t1=ar.idsgi_area_t16","left");
      $this->db->join("rrhh_afp_t26 afp","e.afp_t1=afp.idrrhh_afp_t26","left");
      $this->db->join("rrhh_eps_t27 eps","e.eps_t1=eps.idrrhh_eps_t27","left");
      $this->db->join("rrhh_empleacontratos_t43 ctemp","e.identificacion_t1=ctemp.idemplea_t43 and ctemp.estado_t43 = 'ACTIVO'","left");
      $this->db->where("identificacion_t1",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $infoemplea = $query->row();
      }
      $this->db->from("rrhh_empleabienlab_t34");
      $this->db->join("sgi_ciudades_t24","lugar_t34=codigo_t24","left");
      $this->db->join("rrhh_empleabienlabadj_t35","idrrhh_empleabienlab_t34=idreg_adj_t35","left");
      $this->db->where("idemplea_t34",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $infoemplea->bl = $query->result();
      }
      $this->db->from("rrhh_empleadocs_t31");
      $this->db->join("sgi_ciudades_t24","lugar_t31=codigo_t24","left");
      $this->db->join("rrhh_empleadocsadj_t32","idrrhh_empleadocs_t31=idreg_adj_t32","left");
      $this->db->where("idemplea_t31",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $infoemplea->docs = $query->result();
      }
      $this->db->from("rrhh_empleaso_t28");
      $this->db->join("rrhh_empleasoadj_t29","idrrhh_empleaso_t28=idreg_adj_t29","left");
      $this->db->where("idemplea_t28",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $infoemplea->so = $query->result();
      }
      $this->db->from("rrhh_empleapers_t37");
      $this->db->where("idemplea_t37",$id);
      $query = $this->db->get();
      $arr_datos = $query->result();
      if (count($arr_datos) > 0){
        $infoemplea->cntct = $query->result();
      }
      return $infoemplea;
    }
    
    
    
  }
?>