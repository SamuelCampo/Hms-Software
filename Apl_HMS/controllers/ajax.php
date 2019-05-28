<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ajax extends CI_Controller {
  
  function __construct(){    
		parent::__construct();  
		$this->output->cache(0);
	}
  
  public function menumedxespec(){
    if($this->Modulo->error == false){
      $this->load->model("Especialidades");
      $arr_vmeds["idespec"]=$this->uri->segment(3, "0");
      $this->load->view('Ajax/f_agenda_especmed',$arr_vmeds,"Refresh");
    }
	}
  
  public function datospaciente(){
    if($this->Modulo->error == false){
      $this->load->model("Paciente");
      $idpaci =$this->uri->segment(3, "0");
      $paciente=$this->Paciente->obtener($idpaci);
      echo json_encode($paciente);
      //var_dump($paciente);
    }
	}
  
  public function historia_evoldiariaplanobj(){
    if($this->Modulo->error == false){
      $idobj =$this->uri->segment(3, "0");
      $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobj',array("idobj"=>$idobj,'cabecera'=>true),"Refresh");
    }
	}
  
  public function historia_evoldiariaplanobjnp(){
    if($this->Modulo->error == false){
      $idobj =$this->uri->segment(3, "0");
      $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobjnp',array("idobj"=>$idobj,'cabecera'=>true),"Refresh");
    }
	}
  
  public function historia_evoldiariadetalle(){
    if($this->Modulo->error == false){
      $idevol =$this->uri->segment(3, "0");
      $this->load->view('Asistencial/Historia/f_historia_evoldiaria_detevol',array("datevol"=>$this->Historia->evoldiariadetalle($idevol)),"Refresh");
    }
	}
  
  
  
  
}
?>