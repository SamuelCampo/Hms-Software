<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Inicio extends CI_Controller {
   var $seccion;

	function __construct(){    
		parent::__construct();  
		$this->output->cache(0);
    $this->seccion = "Inicio";
	}

	public function index(){
    $this->Util->recordar();
    if(strpos(HMSConfModsInicio,'CENSO')!==false){
      $censo=$this->Paciente->censo();
      $arr_vcensourg["censodet"] = $censo->urg;
      $arr_lista["censourg"]=$this->load->view('Asistencial/Censo/l_censourg',$arr_vcensourg,true);
      $arr_lista["numcensourg"]=count($censo->urg);
      $arr_vcensoobs["censodet"] = $censo->obs;
      $arr_lista["censoobs"]=$this->load->view('Asistencial/Censo/l_censodet',$arr_vcensoobs,true);
      $arr_lista["numcensoobs"]=count($censo->obs);
      $arr_vcensohos["censodet"] = $censo->hos;
      $arr_lista["censohos"]=$this->load->view('Asistencial/Censo/l_censodet',$arr_vcensohos,true);
      $arr_lista["numcensohos"]=count($censo->hos);
      $arr_vcensosal["censodet"] = $censo->sal;
      $arr_lista["censosal"]=$this->load->view('Asistencial/Censo/l_censodet',$arr_vcensosal,true);
      $arr_lista["numcensosal"]=count($censo->sal);
      $arr_vcensouci["censodet"] = $censo->uci;
      $arr_lista["censouci"]=$this->load->view('Asistencial/Censo/l_censodet',$arr_vcensouci,true);
      $arr_lista["numcensouci"]=count($censo->uci);
      // Censo Glosa y Facturación
      $arr_vcensofac["censodet"] = $censo->fac;
      $arr_lista["censofac"]=$this->load->view('Asistencial/Censo/l_censodet',$arr_vcensofac,true);
      $arr_lista["numcensofac"]=count($censo->fac);
      // Fin de Glosa
      $arr_lista["censocex"]=$this->load->view('Asistencial/Agenda/v_agenda_censo',"",true);
      $arr_lista["numcensocex"]=count($censo->uci);
      $arr_vinicio["censo"]=$this->load->view('Asistencial/Censo/l_censo',$arr_lista,true);
    }
    if(strpos(HMSConfModsInicio,'ASAGE')!==false){
      $censo=$this->Paciente->censo();
      $arr_lista["numcensourg"]=count($censo->urg);
      $arr_lista["numcensoobs"]=count($censo->obs);
      $arr_lista["numcensohos"]=count($censo->hos);
      $arr_lista['avendatipovista'] = "agendaDay";
      $arr_lista['defaultDate'] = date('Y-m-d');
      $irFecha = date('Y-m-d');
      $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Agenda/js_v_agenda',$arr_lista,true);
    }
    //var_dump(HMSConfModsInicio);
    if(strpos(HMSConfModsInicio,'INTERC')!==false){
      if($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADT' || $this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM' || $this->Modulo->usr->su_t0=='SI'){
        $arr_vinicio["dat_ini_interc"]=$this->Historia->interconsulta_pendagend();
      }
    }
    if(HMSConfEstadoCont=='ACTIVO'){
      $this->Planthtml->cont["contenido"]=$this->load->view('Plantilla/v_panel_inicio',$arr_vinicio,true);
    }else{
      $this->Planthtml->cont["contenido"]=$this->load->view('Plantilla/v_panel_'.HMSConfEstadoCont,$arr_vinicio,true);
    }
    
    $this->Planthtml->generar();
	}
}
?>