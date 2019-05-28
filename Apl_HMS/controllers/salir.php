<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Salir extends CI_Controller {
    var $seccion;	
    
    function __construct(){
      parent::__construct();
      $this->output->cache(0);
      $this->seccion = "Salir";
    }
    
    public function index(){
      //$this->Modulo->psesion_finalizar($this->Modulo->usr->idusr);
      $this->session->destroy();
      $msj = urlencode(base64_encode("Gracias por usar nuestros servicios."));
      header("Location: ".$this->Modulo->formaut."ingreso.php?msj=$msj&tipo=ok");
      exit;
    }
  }
?>