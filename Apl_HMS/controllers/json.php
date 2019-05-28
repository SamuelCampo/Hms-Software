<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Json extends CI_Controller {

  function __construct(){
    parent::__construct();  
    $this->output->cache(0);
  }
  
  public function index(){
    redirect('inicio');
  }
  
  public function unidades(){
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Articulo->arr_unidades);
  }
  
  public function terceros(){
    $this->load->model('Tercero');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    switch($solicitud){
      case "clientes":
        echo $this->Modulo->retjson($this->Tercero->clientes_listar($consulta));
        break;
      case "prveedores":
        echo $this->Modulo->retjson($this->Tercero->proveedores_listar($consulta));
        break;
      default:
        echo $this->Modulo->retjson($this->Tercero->listar($consulta));
        break;
    }
  }
  
  public function convenios(){
    $this->load->model('Convenio');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Convenio->listar($consulta));
  }
  
  public function ccosto(){
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Ccosto->listar($consulta,false));
  }
  
  public function cuentapuc(){
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Puc->listar($consulta,false));
  }

  public function impuestos(){
    $this->load->model('Impuesto');
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Impuesto->listar($consulta));
  }
  
  public function articulos(){
    $this->load->model('Articulo');
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Articulo->listar($consulta));
  }
  
  public function medcsudosis(){
    $this->load->model('Historia');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Historia->arr_udosis);
  }
  
  public function medcsviaadmon(){
    $this->load->model('Historia');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Historia->arr_viaadmon);
  }
  
  public function cums(){
    $this->load->model('Constante');
    $posnopos = $this->uri->segment(3);
    $consulta=utf8_decode($this->input->post("consulta"));
    header('Content-Type: text/html; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Constante->cums_listar($consulta,$posnopos));
  }
  
  public function cumsp(){
    $this->load->model('Constante');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=utf8_decode($this->input->post("consulta"));
    header('Content-Type: text/html; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Constante->cums_listar($consulta));
  }
  
  public function sumins(){
    $this->load->model('Constante');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=utf8_decode($this->input->post("consulta"));
    header('Content-Type: text/html; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Constante->sumins_listar($consulta));
  }
  
  public function ocupaciones(){
    $this->load->model('Constante');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=$this->input->post("consulta");
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Constante->ocupaciones_listar($consulta));
  }
  
  public function ciudades(){
    $this->load->model('Constante');
    $solicitud = $this->uri->segment(3, "0");
    $consulta=utf8_decode($this->input->post("consulta"));
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Modulo->retjson($this->Constante->listar_ciudades($consulta));
  }
  
  public function agenda(){
    $this->load->model('Agenda');
    $consulta=$this->input->post();
    if(empty($consulta)){
      $consulta["medico"] = $this->Modulo->usr->identificacion_t0;
    }
    //$consulta["medico"] = $_GET["medico"];
    //var_dump($consulta);
    header('Content-Type: application/json; charset=ISO-8859-1');
    echo $this->Agenda->listarjson($consulta);
  }
  
  public function paciente(){
    $solicitud = $this->uri->segment(3, "0");
    switch($solicitud){
      case "identificacion":
        $consulta=utf8_decode($this->input->post("consulta"));
        header('Content-Type: application/json; charset=ISO-8859-1');
        echo $this->Modulo->retjson($this->Paciente->listar($consulta));
        break;
      case "cuotamodcopago":
        $consulta=(object)$this->input->post();
        header('Content-Type: application/json; charset=ISO-8859-1');
        echo $this->Modulo->retjson($this->Paciente->cuotamodcopago($consulta));
        break;
      case "consultaexiste":
        $consulta=$this->input->post("consulta");
        header('Content-Type: application/json; charset=ISO-8859-1');
        echo json_encode(array_map(utf8_encode,(array)$this->Paciente->obtener($consulta)));
        break;
      case "ultcitaespec":
        $this->load->model('Agenda');
        $consulta=$this->input->post();
        header('Content-Type: application/json; charset=ISO-8859-1');
        echo json_encode(array_map(utf8_encode,(array)$this->Agenda->obtenercitapacespec($consulta)));
        break;
    }
  }
  
  public function cups(){
    $this->load->model('Cups');
    $solicitud = $this->uri->segment(3, "0");
    switch($solicitud){
      default:
        $consulta=utf8_decode($this->input->post("consulta"));
        $tipo=$this->input->post("tipo");
        if(empty($consulta)){
          $consulta=$this->uri->segment(3, "");
          $tipo = $this->uri->segment(4, "");
        }
        if($tipo=='OTROSPROC'){
          $tipo='';
        }
        header('Content-Type: application/json; charset=ISO-8859-1');
        echo $this->Modulo->retjson($this->Cups->listar($consulta,$tipo));
        break;
    }
  }
  
  public function cupsnoh(){
    $this->load->model('Cups');
    $solicitud = $this->uri->segment(3, "0");
    switch($solicitud){
      default:
        $consulta=utf8_decode($this->input->post("consulta"));
        if(empty($consulta)){
          $consulta=$this->uri->segment(3, "");
        }
        header('Content-Type: application/json; charset=ISO-8859-1');
        echo $this->Modulo->retjson($this->Cups->listar($consulta,'noh'));
        break;
    }
  }
  
 /*
    +Autor: Ing Mauricio Garibello R
    +Fecha: 10/12/2017
    +Nota: Se crea funcion para realizar busqueda predictiva de actividades economicas
    +  */
        public function acteco(){
        $this->load->model('acteco');
        $solicitud = $this->uri->segment(3, "0");
        switch($solicitud){
          default:
            $consulta=utf8_decode($this->input->post("consulta"));
            if(empty($consulta)){
              $consulta=$this->uri->segment(3, "");
            }
            header('Content-Type: application/json; charset=ISO-8859-1');
            echo $this->Modulo->retjson($this->acteco->listar($consulta));
            break;
        }
      }


      public function cie10(){
        $this->load->model('Cie10');
        $solicitud = $this->uri->segment(3, "0");
        switch($solicitud){
          default:
            $consulta=utf8_decode($this->input->post("consulta"));
            if(empty($consulta)){
              $consulta=$this->uri->segment(3, "");
            }
            header('Content-Type: application/json; charset=ISO-8859-1');
            echo $this->Modulo->retjson($this->Cie10->listar($consulta));
            break;
        }
      }

     /* public function verifagenda(){
        $fecha = $this->input->post("fecha")
        $hora = $this->input->post("hora")
        $medic = $this->input->post("medic")
        
         $this->load->model('Agenda');
         $this->load->model('modelo_universal');
         $this->modelo_universal->select("ps_agenda_t12","*",array("fecha_programacion_t12"=>$fecha." ".$hora,""));
      }*/

      public function listarDatos()
      {
        $this->load->model('Grafica');
        $data = $this->Grafica->listarPacientes();
        echo json_encode($data);
      }

      function listarEgresos(){
        $this->load->model('Grafica');
        $data = $this->Grafica->listarEgresos();
        echo json_encode($data);
      }

      function listarFacturas(){
        $this->load->model('Grafica');
        $data = $this->Grafica->listarFacturas();
        echo json_encode($data);
      }

      function listarProcedimientos(){
        $this->load->model('Grafica');
        $data = $this->Grafica->listarProcedimientos();
        echo json_encode($data);
      }

      function listarQuirurgicas(){
        $this->load->model('Grafica');
        $data = $this->Grafica->listarQuirurgicas();
        echo json_encode($data);
      }
}
