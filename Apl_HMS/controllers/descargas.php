<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Descargas extends CI_Controller {
  
	function __construct()
	{    
		parent::__construct();  
		$this->output->cache(0);
    $this->seccion = "Documentos";
    $this->load->model('Modulo');
	}
  
  public function adjuntos()
  {
    if($this->Modulo->error === false)
    {
      $this->load->model('Adjuntos');
      $arr_vista = $this->Modulo->arr_docs();
      $tipo = $this->uri->segment(3, "0");
      $id = $this->uri->segment(4, "0");
      $arr_adj = $this->Adjuntos->descargar($tipo,$id);
      $this->load->view('exportar',$arr_adj,'refresh');
    }
  }

}
?>