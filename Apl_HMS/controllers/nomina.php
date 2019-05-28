<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nomina extends CI_Controller {
  
  function __construct(){    
		parent::__construct();  
		$this->output->cache(0);
    $this->load->model('Nomconcepto');
    $this->load->model('Nomnovedad');
	}
  
  public function conceptos(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Nómina / Conceptos";
      $msjdescobj = "Registro";
      $urlfunc = "conceptos";
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
          $arr_lista["datos"]=$this->Nomconcepto->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_nom_conceptos',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $desc_creado = $this->Nomconcepto->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/nomina/$urlfunc/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_nom_conceptos_nuevo',"",true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          $idconcepto = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $desc_creado = $this->Nomconcepto->registrar($idconcepto);
            $mensaje=urlencode(base64_encode("$msjdescobj modificado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/nomina/$urlfunc/mensaje/".$mensaje);
          }else{
            $arr_nuevo["concepto"]=$this->Nomconcepto->obtener($idconcepto);
            $cont["tit_seccion"].=" / Modificar";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_nom_conceptos_nuevo',$arr_nuevo,true);
          }
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
           $idconcepto = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Nomconcepto->eliminar($idconcepto);
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect(site_url()."/nomina/$urlfunc/mensaje/".$mensaje);
          }else{
            $idconcepto = $this->uri->segment(4);
            $concepto = $this->Nomconcepto->obtener($idconcepto);
            $arr_modificar["mensaje"]="Se eliminará el registro ".$concepto->concepto_t53;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function novedades(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Nómina / Novedades";
      $msjdescobj = "Registro";
      $urlfunc = "novedades";
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
          $arr_lista["datos"]=$this->Nomnovedad->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_nom_novedades',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $desc_creado = $this->Nomnovedad->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creada satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/nomina/$urlfunc/mensaje/".$mensaje);
          }else{
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_nom_novedades_nuevo',"",true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          $idnovedad = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $desc_creado = $this->Nomnovedad->registrar($idnovedad);
            $mensaje=urlencode(base64_encode("$msjdescobj modificada satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/nomina/$urlfunc/mensaje/".$mensaje);
          }else{
            $arr_nuevo["novedad"]=$this->Nomnovedad->obtener($idnovedad);
            $cont["tit_seccion"].=" / Modificar";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_nom_novedades_nuevo',$arr_nuevo,true);
          }
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
           $idnovedad = $this->uri->segment(4);
          if($this->uri->segment(5)=="guardar"){
            $this->Nomnovedad->eliminar($idnovedad);
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect(site_url()."/nomina/$urlfunc/mensaje/".$mensaje);
          }else{
            $novedad = $this->Nomnovedad->obtener($idnovedad);
            $arr_modificar["mensaje"]="Se eliminará la nodedad ".$novedad->descripcion_t55.", de ".$novedad->nombre_t55." para el periodo ".$novedad->periodo_t55;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  
  public function liquidacion(){
    if($this->Modulo->error == false){
//      $this->load->model("Contrato");
      $this->Planthtml->cont["tit_seccion"]="Nómina / Liquidación";
      $msjdescobj = "Registro";
      $urlfunc = "liquidacion";
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
          //$arr_lista["datos"]=$this->Contrato->listar($arr_lista["buscado"]);
          //$arr_lista["datestado"]=$this->Constante->estados;
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_liquidaciones',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            //$desc_creado = $this->Reqpersonal->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/parametros/$urlfunc/mensaje/".$mensaje);
          }else{
            
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_liquidacion',$arr_nuevo,true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Modificar";
          $id = $this->Parametros->registrar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("$msjdescobj modificado satisfactoriamente"))."/buscado/".$id;
          redirect(site_url()."/parametros/$urlfunc/mensaje/".$mensaje);
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          if($this->uri->segment(5)=="guardar"){
            $this->Claseb->eliminar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect(site_url()."/parametros/$urlfunc/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $reg = $this->Claseb->obtener($id);
            $arr_modificar["mensaje"]="Se eliminará el registro ".$reg->clb;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_ccosto_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
        
    public function noveperiodica(){
    if($this->Modulo->error == false){
//      $this->load->model("Contrato");
      $this->Planthtml->cont["tit_seccion"]="Nómina / Novedades Periodicas";
      $msjdescobj = "Registro";
      $urlfunc = "novedades";
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
          //$arr_lista["datos"]=$this->Contrato->listar($arr_lista["buscado"]);
          //$arr_lista["datestado"]=$this->Constante->estados;
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_nom_novedades_periodicas',$arr_lista,true);
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"].=" / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            //$desc_creado = $this->Reqpersonal->registrar();
            $mensaje=urlencode(base64_encode("$msjdescobj creado satisfactoriamente"))."/buscado/".$desc_creado;
            redirect(site_url()."/parametros/$urlfunc/mensaje/".$mensaje);
          }else{
            
            $cont["tit_seccion"].=" / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_nom_novedades_periodicas',$arr_nuevo,true);
          }
          break;
          
        case "modificar":
          $this->Planthtml->cont["tit_seccion"].=" / Modificar";
          $id = $this->Parametros->registrar($this->uri->segment(4));
          $mensaje=urlencode(base64_encode("$msjdescobj modificado satisfactoriamente"))."/buscado/".$id;
          redirect(site_url()."/parametros/$urlfunc/mensaje/".$mensaje);
          break;
        
         case "eliminar":
          $this->Planthtml->cont["tit_seccion"].=" / Eliminar";
          if($this->uri->segment(5)=="guardar"){
            $this->Claseb->eliminar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("$msjdescobj eliminada satisfactoriamente"));
            redirect(site_url()."/parametros/$urlfunc/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $reg = $this->Claseb->obtener($id);
            $arr_modificar["mensaje"]="Se eliminará el registro ".$reg->clb;
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_eliminar',$arr_modificar,true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  
}
?>