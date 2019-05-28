<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ayuda extends CI_Controller {
  
    function __construct(){    
        parent::__construct();  
        $this->output->cache(0);
    $this->seccion = "Ayuda";
    }
  
  public function index(){
    $this->Planthtml->cont["tit_seccion"]=" HMS / Ayuda";
    $this->Planthtml->cont["contenido"] = $this->load->view('Plantilla/f_ayuda',"",true);
    $this->Planthtml->generar();
  }
  
}
?>