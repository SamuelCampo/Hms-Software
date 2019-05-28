<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Construir_proyect extends CI_Controller {

	function crear(){
		$this->uri->segment(3,'0');
		switch ($accion) {
			case '0':
			case 'consulta':
				$this->Planthtml->cont['contenido'] = $this->load->view('Constructor/consulta',"", true);
				break;
		}

		$this->Planthtml->generar();
	}

}

/* End of file construir_proyect.php */
/* Location: .//C/Users/samue/AppData/Local/Temp/fz3temp-2/construir_proyect.php */