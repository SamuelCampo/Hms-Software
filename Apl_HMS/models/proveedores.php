<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Model {

	function registrarProveedor()
	{
		$datos = (object)$this->input->post();	
		$arr_nuevo['nombre_pro'] = $datos->nombre_pro;
		$arr_nuevo['nit'] = $datos->nit;	
		$arr_nuevo['telefono'] = $datos->telefono;
		$arr_nuevo['direccion'] = $datos->direccion;
		$arr_nuevo['correo'] = $datos->correo;
		$arr_nuevo['contacto'] = $datos->contacto;
		$arr_nuevo['plaso_pago'] = $datos->plaso_pago;
		$arr_nuevo['forma_pago'] = $datos->forma_pago;
		$arr_nuevo['fmod_proveedor'] = date('Y-m-d h:i:s');
		$arr_nuevo['usermod_proveedor'] = $this->Modulo->usr->idusr;

		$this->db->insert('ps_proveedor', $arr_nuevo);
		$id = $this->db->insert_id();

	}

	function buscarProveedor($id){
		
	}

}

/* End of file proveedores.php */
/* Location: .//C/Users/jowia/AppData/Local/Temp/fz3temp-2/proveedores.php */