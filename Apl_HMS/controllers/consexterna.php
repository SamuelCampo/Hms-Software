<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consexterna extends CI_Controller {
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
           $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["evoluciones"]=$this->Historia->obtener_evoluciones($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
             $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
             $this->Planthtml->cont["tit_seccion"]="Pacientes / Historia / Nuevo";
             if($this->uri->segment(5)=="guardar"){
               $id = $this->Historia->registrar_ingreso($this->uri->segment(4));
               $mensaje=urlencode(base64_encode("Ingreso medico registrado satisfactoriamente"));
               redirect(site_url()."/hospitalizacion/ENF/nuevo_ingreso_medico/".$this->uri->segment(4)."/mensaje/".$mensaje);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_ingreso_medico',$arr_vhistoria,true);
               $this->Planthtml->cont["js"]= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_exam_fisico"),true);
             }
            break;
           case "medicacion":
           $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["registros"]=$this->Historia->obtener_registros($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
             $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
             $this->Planthtml->cont["tit_seccion"]="Pacientes / Historia / medicacion";
             if($this->uri->segment(5)=="guardar"){
               $id = $this->Historia->registrar_medicacion();
               $mensaje=urlencode(base64_encode("Ingreso medico registrado satisfactoriamente"));
               redirect(site_url()."/pacientes/historia/mensaje/".$mensaje);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/enfermeria/l_medicacion',$arr_vhistoria,true);
               $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/enfermeria/js_f_medicacion',$arr_vhistoria,true);
             }
            break;
            case 'imprimir_registro':
              $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
              $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
              $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria["registros"]=$this->Historia->obtener_registros($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $formato = $this->load->view('Asistencial/Historia/fmto_registro_medicacion',$arr_vhistoria,true);
              $nombre ='Historia_Medicacion'.$arr_vhistoria["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vhistoria["dathistoria"]->paciente_t4.".pdf";
              $this->load->library('my_dompdf');
              $this->my_dompdf->folder('export/');
              $this->my_dompdf->filename($nombre);
              $this->my_dompdf->paper('a4', 'portrait');
              $this->my_dompdf->html($formato);
              $this->my_dompdf->create();
              exit();
              break;
      }
      $this->Planthtml->generar();
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
        $this->load->model('serviciohab');
        $arr_vhistoria["destino"] = $this->serviciohab->listar();
        if($this->uri->segment(5)=='guardar'){
          $this->Paciente->registrar($arr_vhistoria["dathistoria"]->paciente_t4);
          $this->Agenda->admimitir($this->uri->segment(4),$arr_vhistoria["dathistoria"]->paciente_t4);
          $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
          redirect(site_url()."/pacientes/agenda/mensaje/".$mensaje);
        }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_admision_reg',$arr_vhistoria,true);
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

           case "oftalmologia":
            
             $this->Planthtml->cont["tit_seccion"]="Oftalmologia/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datoconsulta"]=$this->Historia->consulta_ofta($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $this->data=$this->modelo_universal->select('antecedentes203',"*",array('idpaciente203'=>$arr_vhistoria["dathistoria"]->identificacion_t3),1,0,'id203','DESC');
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );

              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_ofta',$arr_vhistoria,true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
           break;

           case "optometria":
             $this->Planthtml->cont["tit_seccion"]="optometria/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datoconsulta"] = $this->Historia->consulta_opto($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $this->data=$this->modelo_universal->select('antecedentes203',"*",array('idpaciente203'=>$arr_vhistoria["dathistoria"]->identificacion_t3),1,0,'id203','DESC');
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_opto',$arr_vhistoria,true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
           break;



          case "citologia":
           $this->Planthtml->cont["tit_seccion"]="Procedimiento/Citologia";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datgineco"]= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));

              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );

              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_cito',$arr_vhistoria,true);
          break;
            case "incapacidad":
                $this->Planthtml->cont["tit_seccion"]="Historia/Incapacidades";
               $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
               $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
               $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datinca"]= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vhistoria["dathistoria"]->idps_historia_t4),null,null,"usrmod_inca","DESC");

                $arr_v_menuadd= array(
                 "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
                 "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
                 "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
                 "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
                 );

                $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/incapacidad/f_historia_consext_med_inca',$arr_vhistoria,true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
            break;
           case "odontologia":
            $parte=4;
            $accion= $this->uri->segment(4);
              if(!is_numeric($accion)){
                  $parte=5;
              }
             $this->Planthtml->cont["tit_seccion"]="Odontologia/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment($parte));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $arr_vhistoria["evolodon"]= $this->modelo_universal->select("ps_hist_evolucion_odon_t68","*",array('idhistoria_t68'=>$arr_vhistoria["dathistoria"]->idps_historia_t4),null,null,"fmod_t68","DESC"); 
             //DEBUG($arr_vhistoria["evolodon"]);
                for( $i=0;$i<=count($arr_vhistoria["evolodon"]);$i++){
                    if($arr_vhistoria["evolodon"]["tipoevol_t68"]=="ENFERMERERIA"){
                    $arr_vhistoria["evolodon"]["ENFERMERERIA"]=$arr_vhistoria["evolodon"];
                  }else{
                    $arr_vhistoria["evolodon"]["MEDICA"]=$arr_vhistoria["evolodon"];
                  }
                }
               
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
                    switch($accion){
                        case "evolmedica":

                        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/odon/f_historia_consext_med_evol_odon.php',$arr_vhistoria,true);
                    
                        break;
                        case "evolhigi":
                        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/odon/f_historia_consext_med_higi_odon',$arr_vhistoria,true);
                         
                        break;
                        default:
                           $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
            
                          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_odon',$arr_vhistoria,true);
                        break;
                    }

             
              
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
           break;
           case "ver":
             $sololectura = true;
           case "gestionar":
             $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             // debug($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datgineco"]= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $arr_vhistoria["datinca"]= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             if ($this->db->database == "CLIOFTALMO") {
               $arr_vhistoria["datoconsulta"]=$this->Historia->consulta_ofta($arr_vhistoria["dathistoria"]->idps_historia_t4);
             }
             
             
             $arr_vhistoria["fconsultaurgfrom"] = $this->uri->segment(5);
             $this->data=$this->modelo_universal->select('antecedentes203',"*",array('idpaciente203'=>$arr_vhistoria["dathistoria"]->identificacion_t3),1,0,'id203','DESC');
             // debug($this->data);

             //debug( $arr_vhistoria["fconsultaurgfrom"]);
             // var_dump($arr_vhistoria["dathistoria"] ); exit;
             //var_dump($arr_vhistoria["fconsultaurgfrom"]);
             //exit;
             switch($arr_vhistoria["dathistoria"]->estado_t4){
               case "CERRADA":
                 $sololectura = true;
                 break;
             }
             switch($arr_vhistoria["fconsultaurgfrom"]){
               case "consultaso":
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_so_aat','',true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_so_aep','',true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_so_emp','',true);
                 break;
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
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                    // debug($arr_vhistoria,false);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med',$arr_vhistoria,true);
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
  
  public function IMP(){
    $accion = $this->uri->segment(3);
    if($accion=="odontologia"){
          $this->load->model('Paciente');
            $this->load->model('Historia');
            $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
            $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datautorizaciones"]=$this->Paciente->autorizacion_listar($idhistoria);
            $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/odon/f_historia_imprimir_odon',$arr_vhistoria,true);
            $arr_v_menuadd= array(
              "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
              "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
              "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
              "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
              );
            $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
            $this->Planthtml->generar();

    }else{
        if($this->Modulo->error == false){
            $this->load->model('Paciente');
            $this->load->model('Historia');
            $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
            $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datautorizaciones"]=$this->Paciente->autorizacion_listar($idhistoria);
            $result = $this->Util->ValidarTable("ps_consinformados_t10");
             if ($result) {
               $arr_vhistoria['autorizaciones'] = $this->Historia->listarAutorizaciones($arr_vhistoria["dathistoria"]->idps_historia_t4);
             }
             $autorizaciones = $this->Util->ValidarTable("ps_autorizaciones_t11");
             if ($autorizaciones) {
               $arr_vhistoria['autorizacion'] = $this->Historia->listarAutorizacion($arr_vhistoria["dathistoria"]->idps_historia_t4);
             }
            if ($this->db->database == "CLIOFTALMO") {
              $arr_vhistoria["datoconsultas"] = $this->Historia->consulta_opto($arr_vhistoria["dathistoria"]->idps_historia_t4);
$arr_vhistoria["datoconsulta"]=$this->Historia->consulta_ofta($arr_vhistoria["dathistoria"]->idps_historia_t4);
            }
              $arr_vhistoria["datconsulta"]->INCA =$this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vhistoria["dathistoria"]->idps_historia_t4),null,null,"usrmod_inca","DESC");



          

            $arr_v_menuadd= array(
              "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
              "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
              "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
              "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
              );

            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_imprimir',$arr_vhistoria,true);
            $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
            $this->Planthtml->cont["js"]=$this->load->view('Asistencial/Historia/enfermeria/js_f_medicacion',"",true);
            $this->Planthtml->generar();
        }
    }
	}
  
  public function ADT(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $this->load->model('tercero');
            $arr_modificar['tercero'] = $this->tercero->listar_ad();
        $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
        $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
        //var_dump($arr_vhistoria["dathistoria"]);exit;
        $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
        $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
        $this->load->model('serviciohab');
        $arr_vhistoria["destino"] = $this->serviciohab->listar();
        if($this->uri->segment(5)=='guardar'){
          $this->Paciente->registrar($arr_vhistoria["dathistoria"]->paciente_t4);
          $this->Agenda->admimitir($this->uri->segment(4),$arr_vhistoria["dathistoria"]->paciente_t4);
          $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
          if ($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6 == "ADT") {
              redirect(site_url('facturacion/factura/registrar/'.$arr_vhistoria["dathistoria"]->idps_historia_t4),'refresh');
            }else{
              redirect(site_url()."/pacientes/agenda/mensaje/".$mensaje."/".$this->input->post("fecha_programacion"));
            }
        }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_admision_reg',$arr_vhistoria,true);
        }
        $this->Planthtml->cont["js"]=$this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
        $this->Planthtml->generar();
    }
	}
    public function examenespkpost(){
   if($this->input->post()){
        $mipost=$this->input->post();
        foreach ($mipost['resultado'] as $key => $value) {
          # code...
        $chk=$this->modelo_universal->select('resultadosexamenespk201','*',array('procedimiento201'=>$mipost['codigo_t67'],'idcolum6201'=>$mipost['orden'],'examen201'=>$key));
        if($chk){
            $this->modelo_universal->update('resultadosexamenespk201',array('procedimiento201'=>$mipost['codigo_t67'],'idcolum6201'=>$mipost['orden'],'examen201'=>$key,'resultado201'=>$value),array('id201'=>$chk[0]['id201']));
        }
        else{
          $this->modelo_universal->insert('resultadosexamenespk201',array('procedimiento201'=>$mipost['codigo_t67'],'idcolum6201'=>$mipost['orden'],'examen201'=>$key,'resultado201'=>$value));

        }

       
          }
           redirect('./consexterna/examenespk/gestionar/'.$mipost['code'].'/evolucorden/'.$mipost['orden']);
          
    
      }
  }
    public function examenespk(){
      // debug('aca');
      $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
      // debug($arr_vhistoria["dathistoria"]);
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datgineco"]= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $arr_vhistoria["datinca"]= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $arr_vhistoria["fconsultaurgfrom"] = $this->uri->segment(5);
                 $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
      $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
      $this->data['examen']=$this->modelo_universal->select('ps_hist_ordenes_t67','*',array('idhist_ordenes_t67'=>$this->uri->segment(6,'')));

      
        $this->data['examenespk']=$this->modelo_universal->select('examenespk200','*',array('procedimiento200'=>$this->data['examen'][0]['codigo_t67']));
                $this->data['resultadosexamenespk201']=$this->modelo_universal->select('resultadosexamenespk201','*',array('procedimiento201'=>$this->data['examen'][0]['codigo_t67'],'idcolum6201'=>$this->uri->segment(6,'')));
                // debug($this->data['resultadosexamenespk201'],false);

        // debug($this->data['examenespk']);
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                    // debug($arr_vhistoria,false);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_examenespk',$arr_vhistoria,true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
                   $this->Planthtml->generar();
           
  }
  public function odontograma(){

       if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
        $accion = $this->uri->segment(3, "0");
        $arr_datos = $this->uri->uri_to_assoc(3);
       
        switch($accion){

          case "gestionar":
           
             $this->Planthtml->cont["tit_seccion"]="Historia / Odontologia";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
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
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              //$this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med',$arr_vhistoria,true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
               //$this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/pkodontograma',"",true); 
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_odontograma',$arr_vhistoria,true);
              $this->Planthtml->generar();
              break;
        }

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

            case 'consentimientos':
              $this->Planthtml->cont['tit_seccion'] = "Consentimientos";
              $this->Planthtml->cont["tit_seccion"]="Oftalmologia/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );

              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/consinformados/creaModelo',$arr_vhistoria,true);
              $this->Planthtml->cont['js'] = $this->load->view('Asistencial/Historia/consinformados/js_creaModelo',$arr_vhistoria,true);
              break;

           case "oftalmologia":
            
             $this->Planthtml->cont["tit_seccion"]="Oftalmologia/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datoconsulta"]=$this->Historia->consulta_ofta($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $this->data=$this->modelo_universal->select('antecedentes203',"*",array('idpaciente203'=>$arr_vhistoria["dathistoria"]->identificacion_t3),1,0,'id203','DESC');
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );

              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_ofta',$arr_vhistoria,true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
           break;

           case "optometria":
             $this->Planthtml->cont["tit_seccion"]="optometria/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datoconsulta"] = $this->Historia->consulta_opto($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $this->data=$this->modelo_universal->select('antecedentes203',"*",array('idpaciente203'=>$arr_vhistoria["dathistoria"]->identificacion_t3),1,0,'id203','DESC');
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_opto',$arr_vhistoria,true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
           break;



          case "citologia":
           $this->Planthtml->cont["tit_seccion"]="Procedimiento/Citologia";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datgineco"]= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));

              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );

              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_cito',$arr_vhistoria,true);
          break;
            case "incapacidad":
                $this->Planthtml->cont["tit_seccion"]="Historia/Incapacidades";
               $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
               $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
               $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datinca"]= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vhistoria["dathistoria"]->idps_historia_t4),null,null,"usrmod_inca","DESC");

                $arr_v_menuadd= array(
                 "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
                 "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
                 "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
                 "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
                 );

                $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/incapacidad/f_historia_consext_med_inca',$arr_vhistoria,true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
            break;
           case "odontologia":
            $parte=4;
            $accion= $this->uri->segment(4);
              if(!is_numeric($accion)){
                  $parte=5;
              }
             $this->Planthtml->cont["tit_seccion"]="Odontologia/ Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment($parte));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $arr_vhistoria["evolodon"]= $this->modelo_universal->select("ps_hist_evolucion_odon_t68","*",array('idhistoria_t68'=>$arr_vhistoria["dathistoria"]->idps_historia_t4),null,null,"fmod_t68","DESC"); 
             //DEBUG($arr_vhistoria["evolodon"]);
                for( $i=0;$i<=count($arr_vhistoria["evolodon"]);$i++){
                    if($arr_vhistoria["evolodon"]["tipoevol_t68"]=="ENFERMERERIA"){
                    $arr_vhistoria["evolodon"]["ENFERMERERIA"]=$arr_vhistoria["evolodon"];
                  }else{
                    $arr_vhistoria["evolodon"]["MEDICA"]=$arr_vhistoria["evolodon"];
                  }
                }
               
              $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
                    switch($accion){
                        case "evolmedica":

                        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/odon/f_historia_consext_med_evol_odon.php',$arr_vhistoria,true);
                    
                        break;
                        case "evolhigi":
                        $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/odon/f_historia_consext_med_higi_odon',$arr_vhistoria,true);
                         
                        break;
                        default:
                           $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
            
                          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med_odon',$arr_vhistoria,true);
                        break;
                    }

             
              
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_exam_fisico',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
              $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
           break;
           case "ver":
             $sololectura = true;
           case "gestionar":
             $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             // debug($arr_vhistoria["dathistoria"]->idps_historia_t4);
             if ($this->db->database == "CLIOFTALMO") {
               $arr_vhistoria["datoconsultas"] = $this->Historia->consulta_opto($arr_vhistoria["dathistoria"]->idps_historia_t4);
               $arr_vhistoria["datoconsulta"]=$this->Historia->consulta_ofta($arr_vhistoria["dathistoria"]->idps_historia_t4);
             }
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datgineco"]= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             $arr_vhistoria["datinca"]= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
             
             $arr_vhistoria["fconsultaurgfrom"] = $this->uri->segment(5);
             $this->data=$this->modelo_universal->select('antecedentes203',"*",array('idpaciente203'=>$arr_vhistoria["dathistoria"]->identificacion_t3),1,0,'id203','DESC');
             // debug($this->data);

             //debug( $arr_vhistoria["fconsultaurgfrom"]);
             // var_dump($arr_vhistoria["dathistoria"] ); exit;
             //var_dump($arr_vhistoria["fconsultaurgfrom"]);
             //exit;
             switch($arr_vhistoria["dathistoria"]->estado_t4){
               case "CERRADA":
                 $sololectura = true;
                 break;
             }
             switch($arr_vhistoria["fconsultaurgfrom"]){
               case "consultaso":
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_so_aat','',true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_so_aep','',true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_so_emp','',true);
                 break;
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
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
                    // debug($arr_vhistoria,false);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med',$arr_vhistoria,true);
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
              $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext_med',$arr_vhistoria,true);
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