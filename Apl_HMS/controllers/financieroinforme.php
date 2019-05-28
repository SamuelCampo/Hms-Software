<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Financieroinforme extends CI_Controller {
  
  var $seccion;
  function __construct(){    
    parent::__construct();  
    $this->output->cache(0);
    $this->seccion = "Financiero";
    $this->load->model('Financieroinf');
  }
  
  public function libroauxiliar(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Financiero / Informes / Libro Auxiiliar ";
      $msjdescobj = "Registro";
      $urlfunc = "libroauxiliar";
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        default:
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Informes/f_informe',$arr_lista,true);
          $this->Planthtml->cont["js"] = $this->load->view('Financiero/Informes/js_f_informe',' ',true);
          break;
        case "generar":
          $this->Financieroinf->libroauxiliar();
          break;
      }
      $this->Planthtml->generar();
    }
	}
   public function libromayor(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Financiero / Informes / Libro Mayor ";
      $msjdescobj = "Registro";
      $urlfunc = "libromayor";
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Informes/f_informe',' ',true);
          $this->Planthtml->cont["js"] = $this->load->view('Financiero/Informes/js_f_informe',' ',true);
          break;
        case "generar":
          $this->Financieroinf->libromayor();
          break;
      }
      $this->Planthtml->generar();
    }
  }

  public function balanceprueba(){
    if($this->Modulo->error == false){
      $this->Planthtml->cont["tit_seccion"]="Financiero / Informes / Balance de Prueba ";
      $msjdescobj = "Registro";
      $urlfunc = "balanceprueba";
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $this->Planthtml->cont["contenido"] = $this->load->view('Financiero/Informes/f_informe',' ',true);
          $this->Planthtml->cont["js"] = $this->load->view('Financiero/Informes/js_f_informe',' ',true);
          break;
        case "generar":
          $this->Financieroinf->balancep();
          break;
      }
      $this->Planthtml->generar();
    }
  }
}
?>