<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Asistencialsaludocupacional extends CI_Controller {
  var $seccion;
  function __construct(){
    parent::__construct();  
    $this->output->cache(0);
    $this->load->model('Cups');
    $this->load->model('Cie10');
    $this->load->model('Agenda');
    $this->load->model('Especialidades');
    $this->load->model('Factura');
    $this->load->model('Historiasaludocupacional');
	}
  
  public function admisiones(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datpaciente"]=$this->Historiasaludocupacional->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="Salud Ocupacional / Historias";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/SaludOcupacional/l_pacientes_so',$arr_lista,true);
          break;
          
        case "nuevo":
          if($this->uri->segment(4)=="guardar"){
            $idpac = $this->Paciente->registrar();
            $idhist = $this->Historia->registrar();
            $mensaje=urlencode(base64_encode("Paciente registrado satisfactoriamente"));
            redirect(site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$idhist.'/consultaso/mensaje/'.$mensaje));
            exit;
          }else{
            if($this->uri->segment(4)=="paciente"){
              $arr_modificar["datpaciente"]=$this->Paciente->obtener($this->uri->segment(5));
            }
            $this->Planthtml->cont["tit_seccion"]="Consulta Salud Ocupacional / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/SaludOcupacional/f_admision_nuevo_so',$arr_modificar,true);
            $this->Planthtml->cont["js"] = $this->load->view('Asistencial/SaludOcupacional/js_f_paciente_so',"",true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}
}
?>