<?
  class Personal extends CI_Model {
    var $arr_tipo_identificacion;
    var $arr_estado_civil;
    var $arr_genero;
    var $arr_rh;
    var $arr_estado;
    var $arr_cargo;
    
 
  function __construct(){
    parent::__construct();
    
    $this->arr_rh = array(
      (object)array("rh"=>"A+","tipo_rh"=>"A+"),
      (object)array("rh"=>"A-","tipo_rh"=>"A-"),
      (object)array("rh"=>"O+","tipo_rh"=>"O+"),
      (object)array("rh"=>"O-","tipo_rh"=>"O-"),
      (object)array("rh"=>"B+","tipo_rh"=>"B+"),
      (object)array("rh"=>"B-","tipo_rh"=>"B-"),
      (object)array("rh"=>"AB+","tipo_rh"=>"AB+"),
      (object)array("rh"=>"AB-","tipo_rh"=>"AB-")
    );
    $this->arr_cargo = array(
      (object)array("cargo"=>"COORDINADOR MEDICO","tipo_cargo"=>"Coordinador medico"),
      (object)array("cargo"=>"COORDINADOR DE ENFERMERIA","tipo_cargo"=>"Coordinador de enfermeria"),
      (object)array("cargo"=>"JEFE DE FACTURACION ","tipo_cargo"=>"jefe de facturacion"),
      (object)array("cargo"=>"JEFE DE AUTORIZACIONES","tipo_cargo"=>"jefe de Autorizaciones"),
      (object)array("cargo"=>"MEDICO","tipo_cargo"=>"Medico"),
      (object)array("cargo"=>"AUXILIAR","tipo_cargo"=>"Auxiliar"),
      (object)array("cargo"=>"GERENTE","tipo_cargo"=>"Gerente"),
      (object)array("cargo"=>"ADMINISTRADOR","tipo_cargo"=>"Administrador"),
      (object)array("cargo"=>"CONTADOR","tipo_cargo"=>"Contador"),
      (object)array("cargo"=>"REVISOR FISCAL","tipo_cargo"=>"Revisor fiscal"),
      (object)array("cargo"=>"QUIMICO","tipo_cargo"=>"quimico")
      
  
    );
     $this->arr_estado = array(
      (object)array("estado"=>"ACTIVO"),
      (object)array("estado"=>"INACTIVO")
    );
    $this->arr_tipo_identificacion = array(
      (object)array("tipo"=>"CÉDULA DE CIUDADANÍA","idtipo"=>"CC"),
      (object)array("tipo"=>"CÉDULA DE EXTRANJERÍA","idtipo"=>"CE"),
      (object)array("tipo"=>"NÚMERO ÚNICO DE IDENTIFICACIÓN","idtipo"=>"NIU")
    );
    $this->arr_genero = array(
      (object)array("genero"=>"MASCULINO","tipogenero"=>"MASCULINO"),
      (object)array("genero"=>"FEMENINO","tipogenero"=>"FEMENINO")
    );
    $this->arr_estado_civil = array(
      (object)array("estadocivil"=>"SOLTERO(A)","estado_civil"=>"Soltero"),
      (object)array("estadocivil"=>"VIUDO(A) ","estado_civil"=>"Viudo"),
      (object)array("estadocivil"=>"UNIÓN LIBRE","estado_civil"=>"Union Libre"),
      (object)array("estadocivil"=>"CASADO(A)","estado_civil"=>"Casado")
    );
  }
  
   function registrar($id="",$datpersonal=""){
      if(empty($datpersonal)){
        $datpersonal = (object)$this->input->post();
      }
      $datactpersonal = $this->obtener($datpersonal->numero_identificacion);
      if(is_null($datpersonal->primer_nombre)==false)$arr_nuevo["prim_nomb_t10"]=$datpersonal->primer_nombre;
      if(is_null($datpersonal->segundo_nombre)==false)$arr_nuevo["seg_nomb_t10"]=$datpersonal->segundo_nombre;
      if(is_null($datpersonal->primer_apellido)==false)$arr_nuevo["prim_apell_t10"]=$datpersonal->primer_apellido;
      if(is_null($datpersonal->segundo_apellido)==false)$arr_nuevo["seg_apell_t10"]=$datpersonal->segundo_apellido;
      $nomcomp = trim(str_replace("  "," ",$arr_nuevo["prim_apell_t10"]." ".$arr_nuevo["seg_apell_t10"]." ".$arr_nuevo["prim_nomb_t10"]." ".$arr_nuevo["seg_nomb_t10"]));
      if(!empty($nomcomp))$arr_nuevo["nomcomp_t10"]=$nomcomp;
      if(is_null($datpersonal->fecha_nacimiento)==false)$arr_nuevo["fecha_nac_t10"]=$this->Modulo->prepfecha($datpersonal->fecha_nacimiento);
      if(is_null($datpersonal->genero)==false)$arr_nuevo["genero_t10"]=$datpersonal->genero;
      if(is_null($datpersonal->tipo_identificacion)==false)$arr_nuevo["tipo_identificacion_t10"]=$datpersonal->tipo_identificacion;
      if(is_null($datpersonal->numero_identificacion)==false)$arr_nuevo["numero_identificacion_t10"]=$datpersonal->numero_identificacion;
      if(is_null($datpersonal->fecha_expedicion)==false)$arr_nuevo["fech_expd_t10"]=$this->Modulo->prepfecha($datpersonal->fecha_expedicion);
      if(is_null($datpersonal->lugar_expedicion)==false)$arr_nuevo["lugar_expd_t10"]=$datpersonal->lugar_expedicion;
      if(is_null($datpersonal->lugar_nacimiento)==false)$arr_nuevo["lugar_nac_t10"]=$datpersonal->lugar_nacimiento;
      if(is_null($datpersonal->rh)==false)$arr_nuevo["rh_t10"]=$datpersonal->rh;
      if(is_null($datpersonal->ciudad)==false)$arr_nuevo["ciudad_t10"]=$datpersonal->ciudad;
      if(is_null($datpersonal->direccion)==false)$arr_nuevo["direccion_t10"]=$datpersonal->direccion;
      if(is_null($datpersonal->barrio)==false)$arr_nuevo["barrio_t10"]=$datpersonal->barrio;
      if(is_null($datpersonal->ntelefono)==false)$arr_nuevo["ntelefono_t10"]=$datpersonal->ntelefono;
      if(is_null($datpersonal->ncelular)==false)$arr_nuevo["ncelular_t10"]=$datpersonal->ncelular;
      if(is_null($datpersonal->ncorporativo)==false)$arr_nuevo["ncorporativo_t10"]=$datpersonal->ncorporativo;
      if(is_null($datpersonal->ncuenta)==false)$arr_nuevo["ncuenta_t10"]=$datpersonal->ncuenta;
      if(is_null($datpersonal->centro_costos)==false)$arr_nuevo["centro_costos_t10"]=$datpersonal->centro_costos;
      if(is_null($datpersonal->email)==false)$arr_nuevo["email_t10"]=$datpersonal->email;
      if(is_null($datpersonal->arp)==false)$arr_nuevo["arp_t10"]=$datpersonal->arp;
      if(is_null($datpersonal->eps)==false)$arr_nuevo["eps_t10"]=$datpersonal->eps;
      if(is_null($datpersonal->titular)==false)$arr_nuevo["titular_t10"]=$datpersonal->titular;
      if(is_null($datpersonal->identificacion_titular)==false)$arr_nuevo["id_titular_t10"]=$datpersonal->identificacion_titular;
      if(is_null($datpersonal->estado)==false)$arr_nuevo["estado_t10"]=$datpersonal->estado;
      if(is_null($datpersonal->afp)==false)$arr_nuevo["afp_t10"]=$datpersonal->afp;
      if(is_null($datpersonal->estado_civil)==false)$arr_nuevo["estado_civil_t10"]=$datpersonal->estado_civil;
      if(is_null($datpersonal->salario)==false)$arr_nuevo["salario_t10"]=$datpersonal->salario;
      if(is_null($datpersonal->valor1)==false)$arr_nuevo["valor1_t10"]=$datpersonal->valor1;
      if(is_null($datpersonal->valor2)==false)$arr_nuevo["valor2_t10"]=$datpersonal->valor2;
      if(is_null($datpersonal->cargo)==false)$arr_nuevo["cargo_t10"]=$datpersonal->cargo;
      if(is_null($datpersonal->cargo)==false)$arr_nuevo["registromedico_t10"]=$datpersonal->registromedico;
      if(is_null($datpersonal->fecha_ingreso)==false)$arr_nuevo["fecha_ingr_t10"]=$this->Modulo->prepfecha($datpersonal->fecha_ingreso);
      if(is_null($datpersonal->fecha_retiro)==false)$arr_nuevo["fecha_retir_t10"]=$this->Modulo->prepfecha($datpersonal->fecha_retiro);
      $arr_nuevo["usrmod_t10"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t10"]=$this->Modulo->ahora();
      //var_dump($arr_nuevo); exit;
      if(empty($datactpersonal->numero_identificacion_t10)){
        $this->db->insert("ps_personal_t10",$arr_nuevo);
        $id = $this->db->insert_id();
      }else{
        $this->db->where("numero_identificacion_t10",$datactpersonal->numero_identificacion_t10);
        $this->db->update("ps_personal_t10",$arr_nuevo);
      }
      return $datpersonal->numero_identificacion;
    }
    
    
 function obtener($id){
   $resul = false;
    $this->db->from("ps_personal_t10");
    $this->db->where("numero_identificacion_t10",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $personal = $query->row();
    }
    $this->db->from("ps_personal_espec_t11");
    $this->db->join("ps_especialidades_t9","idps_especialidades_t11=idps_especialidades_t9");
    $this->db->where("idps_personal_t11",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      $personal->especialidades = $arr_datos;
    }
    return $personal;
  }  
 
  function listar($buscado,$id=false){
     $resul = false;
    $this->db->from("ps_personal_t10 u");
    if($id==true){
      $this->db->where("u.idps_personal_t10",$buscado);
    }elseif(!empty($buscado)){
    $this->db->like('u.numero_identificacion_t10',$buscado);
      $this->db->or_like('u.nomcomp_t10',$buscado);
      $this->db->or_like('u.centro_costos_t10',$buscado);
      $this->db->or_like('u.ciudad_t10',$buscado);
      $this->db->or_like('u.direccion_t10',$buscado);
      $this->db->or_like('u.ncelular_t10',$buscado);
      $this->db->or_like('u.estado_t10',$buscado);
      $this->db->or_like('u.ncorporativo_t10',$buscado);
       $this->db->or_like('u.cargo_t10',$buscado);
          }
     $this->db->order_by("cargo_t10",'asc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      //var_dump($query); exit;
      if($id==true){
        $resul =  $query->row();
      }else{
        $resul = $query->result();
      }
    }
    return $resul;
  }
  }
  
  function obtenerdeidsur($idusr){
    $this->db->from("ps_personal_t10");
    $this->db->join("ps_usuarios_t0","numero_identificacion_t10=identificacion_t0");
    $this->db->where("idps_usuarios_t0",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
    return false;
  }
  
?>