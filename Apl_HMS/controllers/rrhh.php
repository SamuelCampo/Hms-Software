<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rrhh extends CI_Controller {
  var $seccion;
  function __construct(){
    parent::__construct(); 
    $this->output->cache(0);
    $this->seccion = "Adminitraci&oacute;n";
    } 
    public function personal(){
      if($this->Modulo->error == false){
        $this->load->model('Personal');
        $this->load->model('Especialidades');
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
            $arr_lista["datpersonal"]=$this->Personal->listar($arr_lista["buscado"]);
            $this->Planthtml->cont["tit_seccion"]="Rrhh/Personal";
            $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_personal',$arr_lista,true);
            break;
          case "nuevo":
            $this->Planthtml->cont["tit_seccion"]="Rrhh/Personal/Nuevo";
            if($this->uri->segment(4)=="guardar"){
              $idusr = $this->Personal->registrar();
              $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$idusr;
              redirect(site_url()."/rrhh/personal/mensaje/".$mensaje);
            }else{
              $arr_formpersonal["roles"]=$this->Usuario->rol_listar();
              $arr_formpersonal["servicios"]=$this->Serviciohab->listar();
              $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_personal',$arr_formpersonal,true);
            }
          break;
          case "modificar":
            $this->Planthtml->cont["tit_seccion"]="Rrhh / Personal/ Modificar";
            $id = $this->uri->segment(4);
            if($this->uri->segment(5)=="guardar"){
              $idusr = $this->Personal->registrar($id);
              $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$idusr;
              redirect(site_url()."/rrhh/personal/mensaje/".$mensaje);
            }else{
              $arr_formpersonal["personal"]=$this->Personal->obtener($id);
              $arr_formpersonal["usuario"]=$this->Usuario->obtenerxident($arr_modificar["personal"]->numero_identificacion_t10);
              $arr_formpersonal["rolesact"]=$this->Usuario->perf_obtener($id);
              $arr_formpersonal["roles"]=$this->Usuario->rol_listar();
              $arr_formpersonal["servicios"]=$this->Serviciohab->listar();
              $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_personal',$arr_modificar,true);
              $this->Planthtml->cont["js"] = $this->load->view('Js/js_f_personal',"",true);
            }
          break;
        }
        $this->Planthtml->generar();
      }
   }
 }
?>