<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafica extends CI_Model {

	function listarPacientes()
	{	
		//echo $a = date('Y-m-d');
		$fecha =  new Datetime($a);
		$new = $fecha->modify('-12 month');
		$this->db->where('fmod_t4 >=', '2019-01-01 00:00:00');
		$this->db->where('identificacion_t3', 'paciente_t4 ');
		$this->db->where('estado_t4', 'ADMITIDO');
		$this->db->order_by('fmod_t4', 'asc');
		$query = $this->db->get('ps_paciente_t3,ps_historia_t4');
		//return $query->result();
		foreach ($query->result() as $fila) {
			$fecha = new Datetime($fila->fmod_t4);
			if (!in_array($fecha->format('F-y'),$data)) {
				$data[] =  $fecha->format('F-y');
			}
			foreach ($data as $key) {
				if ($key == $fecha->format('F-y')) {
					$data[$fecha->format('F-y')] += 1;
				}
			}
			/*if (in_array($fecha->format('d'), $data, false)) {
				echo $fecha->format('d');
				$data[] = $fecha->format('d');
			}*/
		}
		//var_dump($data);
		/*$data['datasets'] = array(
				'label' => "Informe de Pacientes",
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => array('0', '10', '5', '2', '20', '30', '45')

		);*/
		//var_dump($data);
		return $data;
	}

	function listarEgresos()
	{
		$fecha =  new Datetime($a);
		$new = $fecha->modify('-12 month');
		$this->db->where('fmod_t4 >=', '2019-01-01 00:00:00');
		$this->db->where('identificacion_t3', 'paciente_t4 ');
		$this->db->where('estado_t4', 'CERRADA');
		$this->db->order_by('fmod_t4', 'asc');
		$query = $this->db->get('ps_paciente_t3,ps_historia_t4');
		//return $query->result();
		foreach ($query->result() as $fila) {
			$fecha = new Datetime($fila->fmod_t4);
			if (!in_array($fecha->format('F'),$data)) {
				$data[] =  $fecha->format('F');
			}
			foreach ($data as $key) {
				if ($key == $fecha->format('F')) {
					$data[$fecha->format('F')] += 1;
				}
			}
			/*if (in_array($fecha->format('d'), $data, false)) {
				echo $fecha->format('d');
				$data[] = $fecha->format('d');
			}*/
		}
		//var_dump($data);
		/*$data['datasets'] = array(
				'label' => "Informe de Pacientes",
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => array('0', '10', '5', '2', '20', '30', '45')

		);*/
		//var_dump($data);
		return $data;
	}

	public function listarFacturas()
	{
		$this->db->where('ffact_t96 >= ', '2019-01-01');
		$this->db->where('estado_t96', 'FACTURADO');
		$query = $this->db->get('cm_cuentas_t96');
		foreach ($query->result() as $fila) {
			$fecha = new Datetime($fila->ffact_t96);
			if (!in_array($fecha->format('F'),$data)) {
				$data[] =  $fecha->format('F');
			}
			foreach ($data as $key) {
				if ($key == $fecha->format('F')) {
					$data[$fecha->format('F')] += 1;
				}
			}
			/*if (in_array($fecha->format('d'), $data, false)) {
				echo $fecha->format('d');
				$data[] = $fecha->format('d');
			}*/
		}

		return $data;

	}


	function listarProcedimientos()
	{	
		if ($this->input->post('fecha1') != "" && $this->input->post('fecha2') != "") {
			$this->db->where('fmod_t67 >= ', $this->input->post('fecha1'));
			$this->db->where('fmod_t67 <= ', $this->input->post('fecha2'));
		}else{
			$date = new Datetime(date('Y-m-d'));
			$date = $date->modify('-30 days');
			$this->db->where('fmod_t67 >= ', $date->format('Y-m-d'));
		}
			$this->db->where('tipo_t67', 'PROC');
			$query = $this->db->get('ps_hist_ordenes_t67');
			foreach ($query->result() as $fila) {
				if (!in_array($fila->codigo_t67,$data)) {
					$data[] =  $fila->codigo_t67;
				}
			}

			foreach ($query->result() as $fila) {
				foreach ($data as $key) {
					if ($key == $fila->codigo_t67) {
						$data[$fila->codigo_t67] += 1;
					}
				}
			}

		return $data;

	}

	function listarQuirurgicas()
	{	
		if ($this->input->post('fecha1') != "" && $this->input->post('fecha2') != "") {
			$this->db->where('fmod_t67 >= ', $this->input->post('fecha1'));
			$this->db->where('fmod_t67 <= ', $this->input->post('fecha2'));
		}else{
			$date = new Datetime(date('Y-m-d'));
			$date = $date->modify('-30 days');
			$this->db->where('fmod_t67 >= ', $date->format('Y-m-d'));
		}
			$this->db->where('tipo_t67', 'QUIR');
			$query = $this->db->get('ps_hist_ordenes_t67');
			foreach ($query->result() as $fila) {
				if (!in_array($fila->codigo_t67,$data)) {
					$data[] =  $fila->codigo_t67;
				}
			}

			foreach ($query->result() as $fila) {
				foreach ($data as $key) {
					if ($key == $fila->codigo_t67) {
						$data[$fila->codigo_t67] += 1;
					}
				}
			}

		return $data;

	}

}

/* End of file grafica.php */
/* Location: .//C/Users/samue/AppData/Local/Temp/fz3temp-2/grafica.php */