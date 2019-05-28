<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Administracion extends CI_Controller {
  
  var $seccion;
  function __construct(){    
		parent::__construct();  
		$this->output->cache(0);
    $this->seccion = "Adminitraci&oacute;n";
    $this->load->model('Personal');
    $this->load->model('Especialidades');
    $this->load->model('Entidad');
    $this->load->model('Convenio');
    $this->load->model('Tarifa');
	}

  public function tarifas(){
     if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["dattarifas"]=$this->Tarifa->base_listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="Administración / Base Tarifas";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Tarifas/l_tarifas',$arr_lista,true);
          $this->Planthtml->generar();
          break;
        }
      }
  }

  public function convenios(){
     if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datconvenios"]=$this->Convenio->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="Administración / Convenios";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Convenios/l_convenios',$arr_lista,true);
          $this->Planthtml->generar();
          break;

        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administración / Convenios / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $id = $this->Convenio->registrar();
            $mensaje=urlencode(base64_encode("Convenio registrado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/administracion/convenios/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["tit_seccion"]="Administración / Convenios / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Convenios/f_convenios',$arr_modificar,true);
            $this->Planthtml->cont["js"] = $this->load->view('Administracion/Convenios/js_f_convenios','',true);
            $this->Planthtml->generar();
          }
          break;

        case "gestionar":
          $this->Planthtml->cont["tit_seccion"]="Administración / Convenios / Gestionar";
          $idtercer = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $id = $this->Convenio->registrar($idtercer);
            $mensaje=urlencode(base64_encode("Convenio registrado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/administracion/convenios/mensaje/".$mensaje);
          }else{
            $arr_modificar["datconvenios"]=$this->Convenio->obtener($idtercer);
            $this->Planthtml->cont["tit_seccion"]="Administración / Convenios / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Convenios/f_convenios',$arr_modificar,true);
            $this->Planthtml->cont["js"] = $this->load->view('Administracion/Convenios/js_f_convenios','',true);
            $this->Planthtml->generar();
          }
          break;
        }
      }
  }

  public function terceros(){
    if($this->Modulo->error == false){
      $this->load->model('Tercero');
      $this->Planthtml->cont["tit_seccion"]="Parámetros / Terceros";
      $this->Planthtml->cont["arr_vplantprincruta"]=array('Parámetros','Terceros');
      $msjdescobj = "Registro";
      $urlfunc = "terceros";
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["v_l_terceros_res"]=$this->Tercero->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Terceros/l_terceros',$arr_lista,true);
          break;

        case "registrar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $desc_creado = $this->Tercero->registrar($this->uri->segment(5));
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect("administracion/$urlfunc/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["tit_seccion"].=" / Registrar";
            $id = $this->uri->segment(4);
            if(!empty($id)){
              $arr_v_reg["v_f_terceros_reg"]=$this->Tercero->obtener($id);
            }
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Terceros/f_terceros_reg',$arr_v_reg,true);
            $this->Planthtml->cont["js"].= $this->load->view('Administracion/Terceros/js_f_terceros_reg',$arr_v_reg,true);
          }
          break;

         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          $this->Tercero->eliminar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("Tercero eliminado satisfactoriamente"));
          redirect("administracion/$urlfunc/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function entidad (){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Administración / Entidad";
      $msjdescobj = "Entidad";
      $urlfunc = "entidad";
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "mensaje":
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_formentidad["mensaje"]="";
          }else{
            $arr_formentidad["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_formentidad["entidad"]=$this->Entidad->obtener();
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Entidad/f_entidad',$arr_formentidad,true);
          break;
          
        case "guardar":
          $this->Entidad->registrar();
          $mensaje=urlencode(base64_encode("Datos registrados satisfactoriamente"));
          redirect(site_url()."/administracion/entidad/mensaje/".$mensaje);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function estructura(){
  if($this->Modulo->error == false){
    $this->load->model('Estructura');
    $accion = $this->uri->segment(3, "0");
    $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
    case "buscar":
    $arr_datos["buscado"]=$this->input->post("buscado");
    case "mensaje":
    case "0":
    if(empty($arr_datos["buscado"])){
    $arr_lista["buscado"]="";
    }
    else{
    $arr_lista["buscado"]=$arr_datos["buscado"];
    }
  if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datestructura"]=$this->Estructura->listar();
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/l_estructura',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/f_estructura',"",true);
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/f_estructura',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function especialidades(){
    if($this->Modulo->error == false){
      $this->load->model('Especialidades');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "0":
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datespecialidades"]=$this->Especialidades->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Especialiadades";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Especialidades/l_especialidades',$arr_lista,true);
          break;
      case "nuevo":
        $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Especialidades / Nuevo";
         if($this->uri->segment(4)=="guardar"){
           $this->Especialidades->registrar();
           $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
           redirect(site_url()."/administracion/especialidades/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Especialidades/f_especialidades',"",true);
          }
          break;
       case "eliminar":
         $this->Planthtml->cont["tit_seccion"].=" Administraci&oacute;n / Especialidades / Eliminar";
         $idespec = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Especialidades->eliminar($idespec);
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect(site_url()."/administracion/especialidades/mensaje/".$mensaje);
          }else{
            $especialidad = $this->Especialidades->obtener($idespec,true);
            $arr_modificar["mensaje"]="Se eliminará la especialidad ".$especialidad->especialidades_t9;
            $this->Planthtml->cont["contenido"] = $this->load->view('Genericas/gen_eliminar',$arr_modificar,true);
          }
          break;
       case "modificar":
         $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Especialidades / Modificar";
         if($this->uri->segment(5)=="guardar"){
           $this->Especialidades->registrar($this->uri->segment(4));
           $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
           redirect(site_url()."/administracion/especialidades/mensaje/".$mensaje);
           }else{
             $id = $this->uri->segment(4);
             $arr_modificar["especialidades"]=$this->Especialidades->obtener($id,true);
             $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Especialidades/f_especialidades',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function roles(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datos"]=$this->Usuario->rol_listar();
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Roles";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Roles/l_roles',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Roles / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Usuario->rol_reg();
            $mensaje=urlencode(base64_encode("Rol creado satisfactoriamente"));
            redirect(site_url()."/administracion/roles/mensaje/".$mensaje);
          }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Roles/f_roles',"",true);
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Roles / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Usuario->rol_reg($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Rol modificado satisfactoriamente"));
            redirect(site_url()."/administracion/roles/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_nuevo["datrol"]=$this->Usuario->rol_obtener($id);
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Roles/f_roles',$arr_nuevo,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
  }
  
  public function usuarios(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datos"]=$this->Usuario->obtener($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Usuarios";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Usuarios/l_usuarios',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Usuarios / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $identif = $this->Personal->registrar();
            $idusr = $this->Usuario->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$idusr;
            redirect(site_url()."/administracion/usuarios/mensaje/".$mensaje);
          }else{
            $arr_formusr["roles"]=$this->Usuario->rol_listar();
            $arr_formusr["servicios"]=$this->Serviciohab->listar();
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Usuarios/f_usuarios',$arr_formusr,true);
            $this->Planthtml->cont["js"] = $this->load->view('RRHH/Personal/js_f_personal',"",true);
          }
          break;
          
       case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Usuarios / Modificar";
          $id = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $identif = $this->Personal->registrar();
            $idusr = $this->Usuario->registrar();
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$idusr;
            redirect(site_url()."/administracion/usuarios/mensaje/".$mensaje);
          }else{
            $arr_formusr["usuario"]=$this->Usuario->obtener($id,true);
            $arr_formusr["rolesact"]=$this->Usuario->perf_obtener($id);
            $arr_formusr["personal"]=$this->Personal->obtener($arr_formusr["usuario"]->identificacion_t0);
            $arr_formusr["roles"]=$this->Usuario->rol_listar();
            $arr_formusr["servicios"]=$this->Serviciohab->listar();
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Usuarios/f_usuarios',$arr_formusr,true);
            $this->Planthtml->cont["js"] = $this->load->view('RRHH/Personal/js_f_personal',"",true);
          }
          break;
        case "eliminar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Usuarios / Eliminar";
          $id = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Usuario->eliminar($id);
            $mensaje=urlencode(base64_encode("Usuario eliminado satisfactoriamente"));
            redirect(site_url()."/administracion/usuarios/mensaje/".$mensaje);
          }else{
            $arr_modificar["usuario"]=$this->Usuario->obtener($id,true);
            $arr_modificar["personal"]=$this->Personal->obtener($arr_modificar["usuario"]->identificacion_t0);
            $arr_modificar["mensaje"]="Se eliminará el usuario ".$arr_modificar["usuario"]->nombre_t0." [".$arr_modificar["usuario"]->idps_usuarios_t0."] ";
            $this->Planthtml->cont["contenido"] = $this->load->view('Genericas/gen_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
   }
	}
  
  public function servicioshab(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datos"]=$this->Serviciohab->listar();
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Servicios Habilitados";
          $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/ServiciosHabilitados/l_servicioshab',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Servicios Habilitados / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $idserv = $this->Serviciohab->registrar();
            $mensaje=urlencode(base64_encode("Servicio agregado satisfactoriamente"))."/buscado/".$idserv;
            redirect(site_url()."/administracion/servicioshab/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"]="Administraci&oacute;n / Servicios Habilitados / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/ServiciosHabilitados/f_servicioshab',"",true);
          }
          break;
          
       case "eliminar":
         $this->Planthtml->cont["tit_seccion"].=" Administraci&oacute;n / Usuarios / Eliminar";
         $idserv = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Serviciohab->eliminar($idserv);
            $mensaje=urlencode(base64_encode("Servicio eliminado satisfactoriamente"));
            redirect(site_url()."/administracion/servicioshab/mensaje/".$mensaje);
          }else{
            $servicio = $this->Serviciohab->obtener($idserv,true);
            $arr_modificar["mensaje"]="Se eliminará el servicio ".$servicio->descripcion_t74;
            $this->Planthtml->cont["contenido"] = $this->load->view('Genericas/gen_eliminar',$arr_modificar,true);
          }
          break;
       case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Servicios Habilitados / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Serviciohab->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Servicio modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/servicioshab/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["servicio"]=$this->Serviciohab->obtener($id);
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/ServiciosHabilitados/f_servicioshab',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
   }
	}
}
?>