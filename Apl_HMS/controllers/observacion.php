<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Observacion extends CI_Controller {
  var $seccion;
  var $data;
  var $CI;
  function __construct(){
    parent::__construct();
    $this->output->cache(0);
    $this->seccion = "Adminitraci&oacute;n";
    $this->load->model('Cups');
    $this->load->model('Cie10');
    $this->load->model('Agenda');
    $this->load->model('Especialidades');
    $this->load->model('Factura');
    $this->load->model('modelo_universal');
    $this->load->model('tercero');
    $this->CI =& get_instance();
	}
    public function checked($miobject =null,$tipo =null,$nombre){
    $miobject = json_decode($miobject[0]['json203']);
    // debug($miobject);
    foreach ($miobject as $key => $value) {
      if($key =='antecedentes'){
        foreach ($value as $key2 => $value2) {
          if($key2 ==$tipo){
             $name = false;
            foreach ($value2 as $key3 => $value3) {
              # code...
             
              if($key3 == $nombre){
                $name = $value3;
                break;
              }
            }
            return $name;
          }
          # code...
        }
      }
      # code...
    }
  }

  public function ADM(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
        $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
        $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
        $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        if($this->uri->segment(5)=='guardar'){
          $this->Paciente->registrar($arr_vhistoria["dathistoria"]->paciente_t4);
          $this->Agenda->admimitir($this->uri->segment(4),$arr_vhistoria["dathistoria"]->paciente_t4);
          $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
          redirect(site_url("pacientes/censo/mensaje/".$mensaje));
        }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/f_admision_reg',$arr_vhistoria,true);
        }
        $arr_v_menuadd= array(
          "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
          "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
          "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
          "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
          );
        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
        $this->Planthtml->cont["js"]=$this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
        $this->Planthtml->generar();
    }
	}

  public function SUP(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
        $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
        $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
        $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        if($this->uri->segment(5)=='guardar'){
          $this->Paciente->registrar($arr_vhistoria["dathistoria"]->paciente_t4);
          $this->Agenda->admimitir($this->uri->segment(4),$arr_vhistoria["dathistoria"]->paciente_t4);
          $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
          redirect(site_url("pacientes/censo/mensaje/".$mensaje));
        }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/f_admision_reg',$arr_vhistoria,true);
        }
        $arr_v_menuadd= array(
          "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
          "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
          "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
          "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
          );
        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
        $this->Planthtml->cont["js"]=$this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
        $this->Planthtml->generar();
    }
	}

  public function IMP(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
        $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
        $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
        $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $arr_vhistoria["datautorizaciones"]=$this->Paciente->autorizacion_listar($idhistoria);
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_imprimir',$arr_vhistoria,true);
        $arr_v_menuadd= array(
          "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
          "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
          "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
          "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
          );
        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
        $this->Planthtml->generar();
    }
	}

  public function ADT(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
        $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
        //var_dump($arr_vhistoria["dathistoria"]);exit;
        $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
        $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        if($this->uri->segment(5)=='guardar'){
          $this->Paciente->registrar($arr_vhistoria["dathistoria"]->paciente_t4);
          $this->Agenda->admimitir($this->uri->segment(4),$arr_vhistoria["dathistoria"]->paciente_t4);
          $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
          redirect(site_url("pacientes/censo/mensaje/".$mensaje));
        }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/f_admision_reg',$arr_vhistoria,true);
        }
        $this->Planthtml->cont["js"]=$this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
        $this->Planthtml->generar();
    }
	}
  
  public function ENF(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $accion = $this->uri->segment(3, "0");
        $arr_datos = $this->uri->uri_to_assoc(3);
        switch($accion){
          case "guardar":
             $idhistoria=$this->uri->segment(4);
             $this->Historia->consulta_registrar($idhistoria);
             $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
             //var_dump($this->input->post('urldestino')); exit;
             $url = $this->input->post('urldestino')."/mensaje/$mensaje";
             if(empty($url)){
               $url = site_url("inicio/mensaje/".$mensaje);
             }
             redirect($url);
            break;
           case "ver":
             $sololectura = true;
           case "gestionar":
             $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["fconsultaurgfrom"] = $this->uri->segment(5);

             //var_dump($arr_vhistoria); exit;
             //var_dump($arr_vhistoria["fconsultaurgfrom"]);
             //exit;
             switch($arr_vhistoria["dathistoria"]->estado_t4){
               case "CERRADA":
                 $sololectura = true;
                 break;
             }
             switch($arr_vhistoria["fconsultaurgfrom"]){
               case "motingreso":
                 if($this->Modulo->perfilacceso["HISTMTING"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_motingreso"),true);
                 }
                 break;
               case "antecedentes":
                 if($this->Modulo->perfilacceso["HISTANTEC"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_antecedentes"),true);
                 }
                 break;
               case "examfisico":
                 if($this->Modulo->perfilacceso["HISTEXMFIS"]=='L')$sololectura=true;
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_exam_fisico"),true);
                 }
                 break;
               case "impdx":
                 if($this->Modulo->perfilacceso["HISTIMDX"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_impdx"),true);
                 }
                 break;
               case "ordenes":
                 if($this->Modulo->perfilacceso["HISTORDEN"]=='L')$sololectura=true;

                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_ordmed"),true);
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_ordproc"),true);
                 }
                 break;
               case "cierre":
                 if($this->Modulo->perfilacceso["HISTCIERHT"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_cierre"),true);
                 }
                 break;
             }
             if($this->uri->segment(6,"")=="mensaje"){
                 $arr_vhistoria["mensaje"]=base64_decode(urldecode($this->uri->segment(7)));
             }
             $evmednumobj = count($arr_vhistoria["datconsulta"]->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj);
             if(empty($evmednumobj)){
               $evmednumobj=0;
             }
             $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
              if(!empty($arr_vhistoria["dathistoria"]->triage_t4)){
               $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_med',$arr_vhistoria,true);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_triage',$arr_vhistoria,true);
               $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_triage_vert',$arr_v_menuadd,true);
               $this->Planthtml->cont["tit_seccion"]="Triage - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
             }
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);

            break;
           case "nuevo_ingreso_medico":
             $this->Planthtml->cont["tit_seccion"]="Pacientes / Historia / Nuevo";
             if($this->uri->segment(4)=="guardar"){
               $id = $this->Historia->registrar_ingreso();
               $mensaje=urlencode(base64_encode("Ingreso medico registrado satisfactoriamente"));
               redirect(site_url()."/pacientes/historia/mensaje/".$mensaje);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_ingreso_medico',"",true);
             }
            break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function TRP(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $accion = $this->uri->segment(3, "0");
        $arr_datos = $this->uri->uri_to_assoc(3);
        switch($accion){
          case "guardar":
             $idhistoria=$this->uri->segment(4);
             $this->Historia->consulta_registrar($idhistoria);
             $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
             //var_dump($this->input->post('urldestino')); exit;
             $url = $this->input->post('urldestino')."/mensaje/$mensaje";
             if(empty($url)){
               $url = site_url("inicio/mensaje/".$mensaje);
             }
             redirect($url);
            break;
           case "ver":
             $sololectura = true;
           case "gestionar":
             $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["fconsultaurgfrom"] = $this->uri->segment(5);

             //var_dump($arr_vhistoria); exit;
             //var_dump($arr_vhistoria["fconsultaurgfrom"]);
             //exit;
             switch($arr_vhistoria["dathistoria"]->estado_t4){
               case "CERRADA":
                 $sololectura = true;
                 break;
             }
             switch($arr_vhistoria["fconsultaurgfrom"]){
               case "motingreso":
                 if($this->Modulo->perfilacceso["HISTMTING"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_motingreso"),true);
                 }
                 break;
               case "antecedentes":
                 if($this->Modulo->perfilacceso["HISTANTEC"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_antecedentes"),true);
                 }
                 break;
               case "examfisico":
                 if($this->Modulo->perfilacceso["HISTEXMFIS"]=='L')$sololectura=true;
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_exam_fisico"),true);
                 }
                 break;
               case "impdx":
                 if($this->Modulo->perfilacceso["HISTIMDX"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_impdx"),true);
                 }
                 break;
               case "ordenes":
                 if($this->Modulo->perfilacceso["HISTORDEN"]=='L')$sololectura=true;

                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_ordmed"),true);
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_ordproc"),true);
                 }
                 break;
               case "cierre":
                 if($this->Modulo->perfilacceso["HISTCIERHT"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_cierre"),true);
                 }
                 break;
             }
             if($this->uri->segment(6,"")=="mensaje"){
                 $arr_vhistoria["mensaje"]=base64_decode(urldecode($this->uri->segment(7)));
             }
             $evmednumobj = count($arr_vhistoria["datconsulta"]->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj);
             if(empty($evmednumobj)){
               $evmednumobj=0;
             }
             $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
              if(!empty($arr_vhistoria["dathistoria"]->triage_t4)){
               $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_med',$arr_vhistoria,true);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_triage',$arr_vhistoria,true);
               $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_triage_vert',$arr_v_menuadd,true);
               $this->Planthtml->cont["tit_seccion"]="Triage - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
             }
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);

            break;
           case "nuevo_ingreso_medico":
             $this->Planthtml->cont["tit_seccion"]="Pacientes / Historia / Nuevo";
             if($this->uri->segment(4)=="guardar"){
               $id = $this->Historia->registrar_ingreso();
               $mensaje=urlencode(base64_encode("Ingreso medico registrado satisfactoriamente"));
               redirect(site_url()."/pacientes/historia/mensaje/".$mensaje);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_ingreso_medico',"",true);
             }
            break;
      }
      $this->Planthtml->generar();
    }
	}

  public function MED(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $accion = $this->uri->segment(3, "0");
        $arr_datos = $this->uri->uri_to_assoc(3);
        switch($accion){
          case "guardar":
             $idhistoria=$this->uri->segment(4);
             $this->Historia->consulta_registrar($idhistoria);
             $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
             //var_dump($this->input->post('urldestino')); exit;
             $url = $this->input->post('urldestino')."/mensaje/$mensaje";
             if(empty($url)){
               $url = site_url("inicio/mensaje/".$mensaje);
             }
             redirect($url);
            break;
           case "ver":
             $sololectura = true;
           case "gestionar":
             $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["fconsultaurgfrom"] = $this->uri->segment(5);

             //var_dump($arr_vhistoria); exit;
             //var_dump($arr_vhistoria["fconsultaurgfrom"]);
             //exit;
             switch($arr_vhistoria["dathistoria"]->estado_t4){
               case "CERRADA":
                 $sololectura = true;
                 break;
             }
             switch($arr_vhistoria["fconsultaurgfrom"]){
               case "motingreso":
                 if($this->Modulo->perfilacceso["HISTMTING"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_motingreso"),true);
                 }
                 break;
               case "antecedentes":
                 if($this->Modulo->perfilacceso["HISTANTEC"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_antecedentes"),true);
                 }
                 break;
               case "examfisico":
                 if($this->Modulo->perfilacceso["HISTEXMFIS"]=='L')$sololectura=true;
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_exam_fisico"),true);
                 }
                 break;
               case "impdx":
                 if($this->Modulo->perfilacceso["HISTIMDX"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_impdx"),true);
                 }
                 break;
               case "ordenes":
                 if($this->Modulo->perfilacceso["HISTORDEN"]=='L')$sololectura=true;

                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_ordmed"),true);
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_ordproc"),true);
                 }
                 break;
               case "cierre":
                 if($this->Modulo->perfilacceso["HISTCIERHT"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_cierre"),true);
                 }
                 break;
             }
             if($this->uri->segment(6,"")=="mensaje"){
                 $arr_vhistoria["mensaje"]=base64_decode(urldecode($this->uri->segment(7)));
             }
             $evmednumobj = count($arr_vhistoria["datconsulta"]->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj);
             if(empty($evmednumobj)){
               $evmednumobj=0;
             }
             $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
              if(!empty($arr_vhistoria["dathistoria"]->triage_t4)){
               $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_med',$arr_vhistoria,true);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_triage',$arr_vhistoria,true);
               $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_triage_vert',$arr_v_menuadd,true);
               $this->Planthtml->cont["tit_seccion"]="Triage - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
             }
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);

            break;
           case "nuevo_ingreso_medico":
             $this->Planthtml->cont["tit_seccion"]="Pacientes / Historia / Nuevo";
             if($this->uri->segment(4)=="guardar"){
               $id = $this->Historia->registrar_ingreso();
               $mensaje=urlencode(base64_encode("Ingreso medico registrado satisfactoriamente"));
               redirect(site_url()."/pacientes/historia/mensaje/".$mensaje);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_ingreso_medico',"",true);
             }
            break;
      }
      $this->Planthtml->generar();
    }
	}

  function imprimir(){
    $form = $this->uri->segment(4, "0");
    $historia = $this->uri->segment(5, "0");
    $arr_vfom["dathistoria"] = $this->Historia->obtener($historia);
    $arr_vfom["datpaciente"] = $this->Paciente->obtener($arr_vfom["dathistoria"]->paciente_t4);
    $arr_vfom["datconsulta"] = $this->Historia->consulta_obtener($arr_vfom["dathistoria"]->idps_historia_t4);

    switch($form){
      case "historia":
        $formato = $this->load->view('Asistencial/Historia/fmto_historia',$arr_vfom,true);
        $nombre ='Historia_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
        break;
      case "epicrisis":
          $formato = $this->load->view('Asistencial/Historia/fmto_epicrisis',$arr_vfom,true);
          $nombre ='Epicrisis_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
          //echo $formato; exit;
        break;
      case "remision":
          $formato = $this->load->view('Asistencial/Historia/fmto_remision',$arr_vfom,true).$this->load->view('Asistencial/Historia/fmto_contrareferencia',$arr_vfom,true);
          $nombre ='Remisión_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
        break;
      case "formula":
          $arr_vfom["hist_orden"]=$this->Historia->orden_obtener($this->uri->segment(6, ""));
          $formato = $this->load->view('Asistencial/Historia/fmto_formula',$arr_vfom,true);
          $nombre ='Formula_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
        break;
      case "examenes":
          $arr_vfom["hist_orden"]=$this->Historia->orden_obtener($this->uri->segment(6, ""));
          $formato = $this->load->view('Asistencial/Historia/fmto_examenes',$arr_vfom,true);
          $nombre ='Exámenes_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
        break;
      case "incapacidad":
          $formato = $this->load->view('Asistencial/Historia/fmto_incapacidad',$arr_vfom,true);
          $nombre ='Incapacidad_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
        break;
    }
    $this->load->library('my_dompdf');
    $this->my_dompdf->folder('export/');
    $this->my_dompdf->filename($nombre);
    $this->my_dompdf->paper('a4', 'portrait');
    $this->my_dompdf->html($formato);
    $this->my_dompdf->create();
    exit;
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
          $arr_lista["datpaciente"]=$this->Historia->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="Pacientes/Historia";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/l_pacientes',$arr_lista,true);
          break;

        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Admisiones / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $id = $this->Paciente->registrar();
            $this->Historia->registrar();
            $mensaje=urlencode(base64_encode("Paciente registrado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/pacientes/admisiones/mensaje/".$mensaje);
          }else{
            if($this->uri->segment(4)=="paciente"){
              $arr_modificar["datpaciente"]=$this->Paciente->obtener($this->uri->segment(5));
            }
            $this->Planthtml->cont["tit_seccion"]="Admisiones / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/f_admision_nuevo',$arr_modificar,true);
            $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
          }
          break;

        case "autorizaciones":
          $idhistoria = $this->uri->segment(4);
          $historia=$this->Historia->obtener($idhistoria);
          $this->Paciente->autorizacion_registrar($historia);
          $mensaje=urlencode(base64_encode("Paciente registrado satisfactoriamente"))."/buscado/".$idpaciente;
          redirect(site_url()."/pacientes/admisiones/mensaje/".$mensaje);
          break;

        case "gestionar":
          $this->Planthtml->cont["tit_seccion"]="Admisiones / Gestionar";
          if($this->uri->segment(5)=="guardar"){
            $id = $this->Paciente->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Paciente modificado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/pacientes/admisiones/mensaje/".$mensaje);
          }else{
            $idhistoria = $this->uri->segment(4);
            $arr_modificar["dathistoria"]=$this->Historia->obtener($idhistoria);
            $arr_modificar["datpaciente"]=$this->Paciente->obtener($arr_modificar["dathistoria"]->identificacion_t3);
            $arr_modificar["datautorizaciones"]=$this->Paciente->autorizacion_listar($idhistoria);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/f_admision',$arr_modificar,true);
            $this->Planthtml->cont["js"]=$this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
          }
          break;
      }
      $this->Planthtml->generar();
    }
	}

}
?>