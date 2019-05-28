<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fact_param extends CI_Controller {
  
  var $seccion;

  function __construct(){    
    parent::__construct();  
    $this->output->cache(0);
  }
  
  function index(){
    
  }
  
  public function plan_tarifario(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Facturación / Parametrización";
      $msjdescobj = "Plan Tarifario";
      $urlfunc = "plan_tarifario";
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
          //$arr_lista["datos"]=$this->Reqpersonal->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_'.$urlfunc,$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            //$desc_creado = $this->Reqpersonal->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creada satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/rrhh_bienestar/$urlfunc/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_'.$urlfunc,$arr_nuevo,true);
            
          break;
      }
      $this->Planthtml->generar();
    }
	}
}
 public function asistente_facturacion(){
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
          //$arr_lista["datos"]=$this->Reqpersonal->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_asistente_facturacion',$arr_nuevo,true);
          
          break;
      }
      $this->Planthtml->generar();
    }
   
    public function param_facturacion(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Facturación / Parametrización";
      $msjdescobj = "Parametrización de la Facturación";
      $urlfunc = "param_facturacion";
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
          //$arr_lista["datos"]=$this->Reqpersonal->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_param_facturacion',$arr_lista,true);
         break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            //$desc_creado = $this->Reqpersonal->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creada satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/rrhh_bienestar/$urlfunc/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_'.$urlfunc,$arr_nuevo,true);
            
          break;
      }
      $this->Planthtml->generar();
    }
	}
}
 
    
 }
  

?>