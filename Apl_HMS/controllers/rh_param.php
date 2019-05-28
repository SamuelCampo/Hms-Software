<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rh_param extends CI_Controller {
  
  function __construct(){    
		parent::__construct();  
		$this->output->cache(0);
    $this->load->model('Nomfondo');
	}
  
  public function parametrizacion(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Recursos Humanos / Parametrización";
      $msjdescobj = "Registro";
      $urlfunc = "parametrizacion";
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
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_rh_param_fondos',$arr_lista,true);
          break;
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Parametrizacion/ Nuevo";
          if($this->uri->segment(4)=="guardar"){
           $this->Nomfondo->registrar();
           $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
           redirect(site_url()."/rh_param/parametrizacion/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_rh_param_fondos',"",true);
          }
          break;
       case "buscar2":
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
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_orden_solicitada',$arr_lista,true);
          break;
        
           case "buscar3":
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
          $this->Planthtml->cont["contenido"] = $this->load->view('Listas/l_orden_descargada',$arr_lista,true);
          break;
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Parametrizacion/ Nuevo";
          if($this->uri->segment(4)=="guardar"){
           $this->Nomfondo->registrar();
           $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
           redirect(site_url()."/rh_param/parametrizacion/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_rh_param_fondos',"",true);
          }
          break;
         
          case "nuevo_convenio":
          $this->Planthtml->cont["tit_seccion"]="Parametrizacion/ Nuevo";
          if($this->uri->segment(4)=="guardar"){
           $this->Nomfondo->registrar();
           $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
           redirect(site_url()."/rh_param/parametrizacion/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_tarifa',"",true);
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
            $this->Planthtml->cont["contenido"] = $this->load->view('Formularios/f_rh_param_fondos',$arr_nuevo,true);
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
 
}
?>