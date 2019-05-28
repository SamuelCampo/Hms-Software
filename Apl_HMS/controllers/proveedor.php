<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Proveedores');
	}

	public function Administracion()
	{
		if ($this->modulo->error == false) {
			$this->Planthtml->cont["tit_seccion"]="Proveedor / Nuevo";
			$accion = $this->uri->segment(3, "0");
			switch ($accion) {
				case 'nuevo':
				if ($this->uri->segment(4) == "guardar") {
					$resultado = $this->Proveedores->registrarProveedor();
					}
					$this->Planthtml->cont["contenido"] = $this->load->view('proveedores/index',"", true);
					break;
				
				default:
					# code...
					break;
			}

			$this->Planthtml->generar();
		}
	}

}

/* End of file Proveedor.php */
/* Location: .//D/Programas/Servidor/AppServ/www/apln/apln.hms.com.co/1.3/Apl_HMS/controllers/Proveedor.php */