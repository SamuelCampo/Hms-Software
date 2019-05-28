<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graficas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Grafica');
	}
	public function index()
	{	
		$this->Planthtml->cont['contenido'] = $this->load->view('Graficas/general',$arr_data,true);
		$this->Planthtml->cont['js'] = $this->load->view('Graficas/js_general',"",true);
		$this->Planthtml->generar();
	}

}

/* End of file graficas.php */
/* Location: .//C/Users/samue/AppData/Local/Temp/fz3temp-2/graficas.php */