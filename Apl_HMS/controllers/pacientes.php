<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pacientes extends CI_Controller {
  var $seccion;
  function __construct(){
    parent::__construct();  
    $this->output->cache(0);
    $this->seccion = "Adminitraci&oacute;n";
    $this->load->model('Cups');
    $this->load->model('Cie10');
    $this->load->model('Agenda');
    $this->load->model('Especialidades');
    $this->load->model('Factura');
    $this->load->model('HistoriaSaludOcupacional');
    $this->load->model('Historia');
    $this->load->model('modelo_universal');
    $this->load->model('serviciohab');
    $this->load->dbforge();
	}

function agendarCitaCliente(){
  if ($this->uri->segment(3) == "enviar") {
      $this->load->library('email');
      $config['mailtype'] = "html";
      $this->email->initialize($config);
      $this->email->from('citas@oftalmologia.com', 'Clinica Oftalmologica');
      $this->email->to('jowialqui@gmail.com');
      $this->email->cc('samuelcampo18@gmail.com');
      $this->email->subject('Agendamiento de Citas');
      $name = $this->input->post('name');
      $apellido = $this->input->post('apellido');
      $cod = $this->input->post('cod');
      $especialidad = $this->input->post('especialidad');
      $fecha_cita = $this->input->post('fecha_cita');
      $documento = $this->input->post('documento');
      $this->email->message('Han solicitado la cita desde la plataforma con los siguientes datos:<br>'. 'Nombre:'.$name.' '.$apellido.'<br> Numero de Documento:'.$documento.'<br>'. 'Especialidad:'.$especialidad.'<br>'.'Para la fecha del: '.$fecha_cita.'<br>'.'Codigo del Procedimiento:'.$cod."<br> Contactar al siguiente numero:".$this->input->post('telefono'));
      
      $qury = $this->email->send();
      if ($qury) {
        redirect(site_url('pacientes/agendarCitaCliente/exito'),'refresh');
      }
  }
  $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/formulario_cliente',$arr_vhistoria,true);
    $this->Planthtml->generar();
}


    public function guardar_orden()
  {
    $guardar_suministro = $this->Historia->guardar_suministro();
    if ($guardar_suministro = TRUE) {
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function autorizacion()
  {
    $query = $this->Paciente->autorizacion();
    if ($query) {
      echo json_encode($query);
    }
  }
  // Funcion para eliminar evoluciones
  public function evol_delete($id,$ingreso)
  {
    $this->load->model('Paciente');
    $this->Paciente->eliminarEvolucion($id);
    redirect('consexterna/MED/gestionar/'.$ingreso.'/resumingreso','refresh');
  }

  function autorizaciones_agenda(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "mensaje":
          $arr_lista["mensaje"]=base64_decode(urldecode($this->uri->segment(4)));
        case "crear":
          $this->Planthtml->cont["tit_seccion"]="Censo";
          $result = $this->Util->ValidarTable("ps_autorizaciones_t11");
          if (!$result) {
            $table =  "ps_autorizaciones_t11";
            $campos = array(
                    "psid_autorizaciones_t11" => array(
                                                 'type' => 'INT',
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                        ),
                    "historia_t11" => array(
                        'type' => "varchar",
                        'constraint' => '1000'
                    ),
                    "idpaciente_t11" => array(
                        'type' => "varchar",
                        'constraint' => '100',
                        'null' => FALSE
                    ),
                    "ps_justificacion_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_observacion_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_info_solicitud_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_tipo_servicio_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_servicio_actual_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_especialidad_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_orden_t11" => array(
                        'type' => "int",
                        'null' => FALSE
                    ),
                    "ps_cama_t11" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "fmod_t11" => array(
                        'type' => "datetime",
                        'null' => FALSE
                    ),
                    "usrmod_t11" => array(
                        'type' => "varchar",
                        'constraint' => "20",
                        'null' => FALSE
                    ),
            );
          $primary = "psid_autorizaciones_t11";
          $this->Util->CrearTable($table,$campos,$primary);
          }
          $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
          $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
          $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          if ($this->uri->segment(5) == "guardar") {
              $query = $this->Historia->registrarAutorizaciones($this->uri->segment(4));
              if ($query) {
                $mensaje = base64_encode("Registro realizado con exito");
                redirect(site_url('pacientes/autorizaciones_agenda/crear/'.$this->uri->segment(4)."/mensaje/".$mensaje),'refresh');
              }
            }
           $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
          $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/autorizaciones',$arr_vhistoria,true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
          $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
          break;
          case 'autorizaciones':
            $this->Planthtml->cont["tit_seccion"]="autorizaciones";
            $result = $this->Util->ValidarTable("ps_consinformados_t10");
          if (!$result) {
            $table =  "ps_consinformados_t10";
            $campos = array(
                    "psid_consinformados_t10" => array(
                                                 'type' => 'INT',
                                                 'unsigned' => TRUE,
                                                 'auto_increment' => TRUE
                        ),
                    "historia_t10" => array(
                        'type' => "varchar",
                        'constraint' => '1000'
                    ),
                    "idpaciente_t10" => array(
                        'type' => "varchar",
                        'constraint' => '100',
                        'null' => FALSE
                    ),
                    "ps_justificacion_t10" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_justificacion_t10" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "ps_observacion_t10" => array(
                        'type' => "varchar",
                        'constraint' => "2000",
                        'null' => FALSE
                    ),
                    "fmod_t10" => array(
                        'type' => "datetime",
                        'null' => FALSE
                    ),
                    "usrmod_t10" => array(
                        'type' => "varchar",
                        'constraint' => "20",
                        'null' => FALSE
                    ),
            );
          $primary = "psid_consinformados_t10";
          $this->Util->CrearTable($table,$campos,$primary);
          }
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
            $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
            if ($this->uri->segment(5) == "guardar") {
              $query = $this->Historia->registrarConsentimiento($this->uri->segment(4));
              if ($query) {
                $mensaje = base64_encode("Registro realizado con exito");
                redirect(site_url('pacientes/autorizaciones_agenda/autorizaciones/'.$this->uri->segment(4)."/mensaje/".$mensaje),'refresh');
              }
            }
            $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Autorizaciones/f_repor_urgencias',$arr_vhistoria,true);
            break;
            case 'furips':
            $this->Planthtml->cont["tit_seccion"]="autorizaciones";
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(3));
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            //$arr_vhistoria['descripcion'] = $this->Historia->consulta_quirurgica($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_fur_FURIPS',$arr_vhistoria,true);
            break;
            case 'furpen':
            $this->Planthtml->cont["tit_seccion"]="autorizaciones";
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(3));
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            //$arr_vhistoria['descripcion'] = $this->Historia->consulta_quirurgica($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_fur_FURPEN',$arr_vhistoria,true);
            break;
            case 'furcen':
            $this->Planthtml->cont["tit_seccion"]="autorizaciones";
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(3));
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            //$arr_vhistoria['descripcion'] = $this->Historia->consulta_quirurgica($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_fur_FURCEN',$arr_vhistoria,true);
            break;
            case 'reportes_emergencias':
            $this->Planthtml->cont["tit_seccion"]="autorizaciones";
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(3));
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            //$arr_vhistoria['descripcion'] = $this->Historia->consulta_quirurgica($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Autorizaciones/fmto_autorizaciones',$arr_vhistoria,true);
            break;
            case 'imprimir_autorizaciones':
              $nombre = "Consentimientos_informados_".$this->uri->segment(4).".pdf";
              $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
              $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
              $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria['autorizaciones'] = $this->Historia->listarAutorizaciones($arr_vhistoria["dathistoria"]->idps_historia_t4,$this->uri->segment(5));
              $formato = $this->load->view('Asistencial/Autorizaciones/fmto_consetimientos',$arr_vhistoria,true);
              $this->load->library('my_dompdf');
              $this->my_dompdf->folder('export/');
              $this->my_dompdf->filename($nombre);
              $this->my_dompdf->paper('a4', 'portrait');
              $this->my_dompdf->html($formato);
              $this->my_dompdf->create();
            break;
            case 'imprimir_autorizacion':
              $nombre = "Autorizaciones".$this->uri->segment(4).".pdf";
              $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
              $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
              $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
              $arr_vhistoria['autorizaciones'] = $this->Historia->listarAutorizacion($arr_vhistoria["dathistoria"]->idps_historia_t4,$this->uri->segment(5));
              $formato = $this->load->view('Asistencial/Agenda/fmto_autorizaciones',$arr_vhistoria,true);
              //exit();
              $this->load->library('my_dompdf');
              $this->my_dompdf->folder('export/');
              $this->my_dompdf->filename($nombre);
              $this->my_dompdf->paper('a4', 'portrait');
              $this->my_dompdf->html($formato);
              $this->my_dompdf->create();
            break;
      }
      $this->Planthtml->generar();
    }
  }


    function guardartercero(){
    $this->load->model('paciente');
    $this->paciente->Guardartercero();
  }
    public function camas_destino()
  {
    $query = $this->Historia->consulta_camas();
    echo json_encode($query);
  }

  public function guardarDiagnostico()
  { 
    $objecto = (object)$this->input->post();
     $data = array(
      'dxprincipal_t64' => $objecto->des,
      'dxprincipalcod_t64' => $objecto->descod,
      'idhistoria_t64'=>$objecto->id
  );
     $result = $this->modelo_universal->select("ps_hist_consulta_t64","*",array('idhistoria_t64'=>$objecto->id));
     var_dump($result);
    if (!empty($result)) {
      $this->db->where('idhistoria_t64',$objecto->id)->update('ps_hist_consulta_t64', $data);
    }else{
      $this->db->insert('ps_hist_consulta_t64', $data);
    }
  }

  function quirurgico(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(4, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "mensaje":
          $arr_lista["mensaje"]=base64_decode(urldecode($this->uri->segment(4)));
        case "crear":
        $fila = $this->db->list_fields('ps_hist_ordenes_t67');
        foreach ($fila as $l) {
          if ($l == "ps_principal_t67") {
            $crear = "NO";
          }
        }
        if ($crear != "NO"){
            $campos = array(
                      "ps_principal_t67" => array(
                          'type' => "varchar",
                          'constraint' => "2000",
                          'null' => TRUE
                      ),
                      "ps_bilateral_t67" => array(
                          'type' => "varchar",
                          'constraint' => "2000",
                          'null' => TRUE
                      ),
                      "ps_realizado_t67" => array(
                          'type' => "varchar",
                          'constraint' => "2000",
                          'null' => TRUE
                      ),
                      "ps_realizado_t67" => array(
                          'type' => "varchar",
                          'constraint' => "2000",
                          'null' => TRUE
                      )
            );
          $this->dbforge->add_column("ps_hist_ordenes_t67",$campos);
        }
        $this->load->model('Usuario');
          $this->Planthtml->cont["tit_seccion"]="Descripción Quirurgica";
          $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(3));
          $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria['descripcion'] = $this->Historia->consulta_quirurgica($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria['procedimientos'] = $this->Historia->consulta_procedimientos_q($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria['medicos'] = $this->Usuario->usuariosMedicos();
          //var_dump($arr_vhistoria['medicos']);
          $arr_v_menuadd= array(
               "v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4,
               "v_menuadd_estado"=>$arr_vhistoria["dathistoria"]->estado_t4,
               "v_menuadd_rol"=>$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,
               "v_menuadd_servicio"=>$this->Constante->arr_defservcios[$arr_vhistoria["dathistoria"]->ubicacion_t4]->controlador_t90
               );
          $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',$arr_v_menuadd,true);
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/vistas/f_descripcion_quirurgica',$arr_vhistoria,true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
          $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
          $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_suministros',"",true);
          $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
          $this->Planthtml->cont["js"] .= $this->load->view('Asistencial/Facturacion/js_panelprinc',"",true);
          break;
          case 'imprimir':
          $nombre ='Vista'.".pdf";
          $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(3));
          $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
          $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria["datconsultaso"]=$this->Historia->consultaso_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
          $arr_vhistoria['descripcion'] = $this->Historia->consulta_quirurgica($arr_vhistoria["dathistoria"]->idps_historia_t4,$this->uri->segment(5));
          //var_dump($arr_vhistoria['descripcion'][0]->ordenes);
          $arr_vhistoria['procedimientos'] = $this->Historia->consulta_procedimientos_q($arr_vhistoria["dathistoria"]->idps_historia_t4,$arr_vhistoria['descripcion'][0]->ordenes);
          $arr_vhistoria["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vhistoria["dathistoria"]->idps_historia_t4));
          //var_dump($arr_vhistoria["descripcion"]);
          $formato = $this->load->view('Asistencial/Historia/vista_pdf',$arr_vhistoria,true);
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename($nombre);
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create(); 
          break;
          case 'guardar':
            $query = $this->Historia->quirurgica($this->uri->segment(3));
            //var_dump($query);
            redirect('pacientes/quirurgico/'.$this->uri->segment(3).'/crear','refresh');
            break;
      }
      $this->Planthtml->generar();
    }
  }
    function citas()
  {
    $this->load->model('Paciente');
    $query = $this->Paciente->ultimasCitas();
    echo json_encode($query);
  }
  
  public function ordpend(){
    if($this->Modulo->error == false){
      $this->load->model('Especialidades');
      $this->load->model('Paciente');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_ordpend["buscado"]=$this->input->post("buscado");
          $arr_ordpend["datosodrpend"]=$this->Historia->ordenespend($arr_ordpend["buscado"]);
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Pacientes /Ordenes Pendientes";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/l_ordenespend',$arr_ordpend,true);
          break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function agendat(){
    if($this->Modulo->error == false){
      $this->load->model('Especialidades');
      $this->load->model('Paciente');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
          $arr_datos["medico"]=$this->uri->segment(5);
        case "medico":
          if(empty($arr_datos["medico"])){
            $arr_datos["medico"]=$this->input->post("medicos");
            $ordref = $this->input->post("ordenref");
            if(!empty($ordref)){
              $arr_vagenda["ordenref"]=$this->input->post("ordenref");
            }
          }
        case "ordenref":
          if($this->uri->segment(3)=='ordenref'){
            $arr_datos["medico"]=$this->uri->segment(6);
            $arr_vagenda["ordenref"]=$this->uri->segment(4);
          }
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_vagenda["mensaje"]="";
          }else{
            $arr_vagenda["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          if(empty($arr_datos["medico"]) && defined('HMSConfAgendaMedDef')){
            $arr_datos["medico"] = HMSConfAgendaMedDef;
          }
          if(!empty($arr_datos["medico"])){
            $arr_vagenda["tercero"]= $this->Tercero->obtener(null,$arr_datos["medico"]);
            $arr_vagenda["agendaunimed"] = $arr_vagenda["tercero"]->especialidades[0];
          }
          
          $this->Planthtml->cont["tit_seccion"]="Pacientes /Agenda";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/v_agendat',$arr_vagenda,true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agendat',array("avendatipovista"=>'agendaWeek'),true);
          break;
          
      case "nuevo":
        //var_dump($this->input->post());exit;
       $this->Planthtml->cont["tit_seccion"]="Pacientes / Agenda / Nuevo";
       if($this->uri->segment(4)=="guardar"){
         $medage = $this->Agenda->registrart();
         $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/".$medage;
         redirect(site_url()."/pacientes/agendat/mensaje/".$mensaje);
       }else{
         $arr_vagenda["fecha"] = $this->uri->segment(5);
         $idtercero = $this->uri->segment(7);
          $arr_vagenda["tercero"] = $this->Tercero->obtener(null,$idtercero);
         $arr_vagenda["medico"] = $arr_vagenda["tercero"];
         $consulta = $this->agenda->consultaFecha();
         if ($consulta == TRUE) {
           $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_agenda_propt',$arr_vagenda,true);
         $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agenda_selpac',$arr_vagenda,true);
         } else {
           
         }
         
       }
       break;
          
      case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Pacientes/ Agenda / Modificar";
          $cita = $this->Agenda->obtener($this->uri->segment(4));
          if($this->uri->segment(5)=="guardar"){
            $this->Agenda->modificar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/".$cita->numero_identificacion_t12;
            redirect(site_url()."/pacientes/agendat/mensaje/".$mensaje);
          }
          break;
      case "imprimir":
        if($this->uri->segment(4)=='cita'){
          $idcita = $this->uri->segment(5);
          $arr_vagenda["datagenda"] = $this->Agenda->obtenercita($idcita);
          $arr_vagenda["datpaciente"] = $this->Paciente->obtener($arr_vagenda["datagenda"]->identificacion_t12);
          $formato = $this->load->view('Asistencial/Agenda/fmto_agenda',$arr_vagenda,true);
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename("HMS_AGENDA_".$arr_vagenda["datagenda"]->identificacion_t12.".pdf");
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          exit;
        }else{
          $medico = $this->uri->segment(5);
          $arr_vagendadia["dia"] = $this->uri->segment(4);
          $arr_vagendadia["agedaregs"] = $this->Agenda->obtenerdia($medico,$arr_vagendadia["dia"]);
          $formato = $this->load->view('Asistencial/Agenda/fmto_agenda_dia',$arr_vagendadia,true);
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename("HMS_AGENDA_DIARIA_".$medico."_".$arr_vagendadia["dia"].'.pdf');
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          exit;
        }
       break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function agenda(){
    if($this->Modulo->error == false){
      $this->load->model('Especialidades');
      $this->load->model('Paciente');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
          $arr_datos["medico"]=$this->uri->segment(5);
        case "medico":
          if(empty($arr_datos["medico"])){
            $arr_datos["medico"]=$this->input->post("medicos");
            $ordref = $this->input->post("ordenref");
            if(!empty($ordref)){
              $arr_vagenda["ordenref"]=$this->input->post("ordenref");
            }
          }
        case "ordenref":
          if($this->uri->segment(3)=='ordenref'){
            $arr_datos["medico"]=$this->uri->segment(6);
            $arr_vagenda["ordenref"]=$this->uri->segment(4);
          }
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_vagenda["mensaje"]="";
          }else{
            $arr_vagenda["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          if(empty($arr_datos["medico"]) && defined('HMSConfAgendaMedDef')){
            $arr_datos["medico"] = HMSConfAgendaMedDef;
          }
          if(!empty($arr_datos["medico"])){
            $med = $this->Personal->obtener($arr_datos["medico"]);
            $arr_vagenda["agendaunimed"] = $med->especialidades[0];
          }
          
          $fecha = explode('/', $this->input->post('fecha_programacion'));
          $irFecha = $fecha[2]."-".$fecha[1]."-".$fecha[0];
          $this->Planthtml->cont["tit_seccion"]="Pacientes /Agenda";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/v_agenda',$arr_vagenda,true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agenda',array("avendatipovista"=>'agendaWeek',"defaultDate" => $irFecha ),true);
          break;
          
      case "nuevo":
        //var_dump($this->input->post());exit;
       $this->Planthtml->cont["tit_seccion"]="Pacientes / Agenda / Nuevo";
       if($this->uri->segment(4)=="guardar"){
         $medage = $this->Agenda->registrar();
         if($res=='ERRORSMS'){
              $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente, error en el env�o SMS"))."/".$cita->numero_identificacion_t12;
            }else{
              $mensaje=urlencode(base64_encode("Registro creado satisfactoriamente"))."/".$this->input->post('idpersonal');
            }
         redirect(site_url()."/pacientes/agenda/mensaje/".$mensaje."/".$this->input->post("fecha_programacion"));
       }else{
         $arr_vagenda["fecha"] = $this->uri->segment(5);
          $idespec = $this->uri->segment(7);
          $arr_vagenda["especialidad"] = $this->Especialidades->obtener($idespec);
          $idmed = $this->uri->segment(9);
          $arr_vagenda["medico"] = $this->Personal->obtener($idmed);
          $idorden = $this->uri->segment(11,'');
          if(!empty($idorden)){ 
            $arr_vagenda["orden"]=$this->Historia->ordenproc_obtener($idorden);
            $arr_vagenda["historia"]=$this->Historia->obtener($arr_vagenda["orden"]->idhistoria_t67);
          }
          //var_dump($arr_vagenda); exit;
          $consulta = $this->Agenda->consultaFecha($idespec,$arr_vagenda['fecha'],$idmed);
         if ($consulta == NULL) {
           $arr_vagenda["medico"] = $this->Personal->obtener($idmed);
         $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_agenda',$arr_vagenda,true);
         $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agenda_selpac',$arr_vagenda,true);
         } else {
           $medage = "Errada";
         $mensaje=urlencode(base64_encode("Esta fecha ya mantiene un cita"))."/".$medage;
         redirect(site_url()."/pacientes/agenda/mensaje/".$mensaje."/".$this->input->post("fecha_programacion"));
         }
       }
       break;
             case 'bloquear':
         $this->Planthtml->cont['tit_seccion'] = "Agenda / Bloquear";
         if ($this->uri->segment(4) == "guardar") {
           $medage = $this->Agenda->agendarBloquear();
           $mensaje = urlencode(base64_encode("Registro realizado satisfactoriamente"))."/".$medage;
           redirect(site_url()."/pacientes/agenda/bloquear/".$mensaje,'refresh');
         }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_agenda_bloquear',array('url' => "pacientes/agenda/bloquear/guardar"),true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agenda',array("avendatipovista"=>'agendaDay',"defaultDate" => $irFecha ),true);
         }
         break;
              case 'desbloquear':
         $this->Planthtml->cont['tit_seccion'] = "Agenda / Bloquear";
         if ($this->uri->segment(4) == "guardar") {
           $medage = $this->Agenda->agendardesbloquear();
           $mensaje = urlencode(base64_encode("Bloqueo realizado satisfactoriamente"))."/".$medage;
           redirect(site_url()."/pacientes/agenda/desbloquear/".$mensaje,'refresh');
         }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_agenda_bloquear',array('url' => "pacientes/agenda/desbloquear/guardar"),true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agenda',array("avendatipovista"=>'agendaDay',"defaultDate" => $irFecha ),true);
         }
         break;

       case 'transladar':
         $this->Planthtml->cont['tit_seccion'] = "Agenda / Bloquear";
         if ($this->uri->segment(4) == "guardar") {
           $medage = $this->Agenda->agendarTransaladar();
           $mensaje = urlencode(base64_encode("Bloqueo realizado satisfactoriamente"))."/".$medage;
           redirect(site_url()."/pacientes/agenda/transladar/".$mensaje,'refresh');
         }else{
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/cambio_agenda',"",true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_cambio_agenda',array("avendatipovista"=>'agendaDay',"defaultDate" => $irFecha ),true);
         }
         break;
          
      case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Pacientes/ Agenda / Modificar";
          $cita = $this->Agenda->obtener($this->uri->segment(4));
          if($this->uri->segment(5)=="guardar"){
            $res = $this->Agenda->modificar($this->uri->segment(4));
            if($res=='ERRORSMS'){
              $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente, error en el env�o SMS"))."/".$cita->numero_identificacion_t12;
            }else{
              $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/".$cita->numero_identificacion_t12;
            }
            if($cita->tipoagenda_t12=='TERCEROS'){
              redirect(site_url()."/pacientes/agendat/mensaje/".$mensaje);
            }else{
              redirect(site_url()."/pacientes/agenda/mensaje/".$mensaje);
            }
          }
          break;
      case "imprimir":
        if($this->uri->segment(4)=='cita'){
          $idcita = $this->uri->segment(5);
          $arr_vagenda["datagenda"] = $this->Agenda->obtenercita($idcita);
          $arr_vagenda["datpaciente"] = $this->Paciente->obtener($arr_vagenda["datagenda"]->identificacion_t12);
          $formato = $this->load->view('Asistencial/Agenda/fmto_agenda',$arr_vagenda,true);
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename("HMS_AGENDA_".$arr_vagenda["datagenda"]->identificacion_t12.".pdf");
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          exit;
        }else{
          $medico = $this->uri->segment(5);
          $arr_vagendadia["dia"] = $this->uri->segment(4);
          $arr_vagendadia["agedaregs"] = $this->Agenda->obtenerdia($medico,$arr_vagendadia["dia"]);
          $formato = $this->load->view('Asistencial/Agenda/fmto_agenda_dia',$arr_vagendadia,true);
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename("HMS_AGENDA_DIARIA_".$medico."_".$arr_vagendadia["dia"].'.pdf');
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          exit;
        }
       break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function agendainterc(){
    if($this->Modulo->error == false){
      $this->load->model('Especialidades');
      $this->load->model('Paciente');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "mensaje":
          $arr_datos["medico"]=$this->uri->segment(5);
        case "espec":
          $arr_vagenda["aginterc_espec"]=$arr_datos["espec"];
          $arr_vagenda["aginterc_interc"]=$arr_datos["interc"];
        case "medico":
          if(empty($arr_vagenda)){
            $arr_vagenda["aginterc_espec"]=$this->input->post("espec");
            $arr_vagenda["aginterc_interc"]=$this->input->post("interc");
            $arr_vagenda["aginterc_med"]=$this->input->post("medicos");
          }
        case "0":
          if(empty($arr_datos["mensaje"])){
            $arr_vagenda["mensaje"]="";
          }else{
            $arr_vagenda["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          //var_dump($arr_vagenda); exit;
          $this->Planthtml->cont["tit_seccion"]="Pacientes /Agenda";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/v_agenda_interc',$arr_vagenda,true);
          $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Agenda/js_v_agenda_interc',array("avendatipovista"=>'agendaWeek'),true);
          break;
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Pacientes / Agenda / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $medage = $this->Agenda->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/".$medage;
            redirect(site_url()."/pacientes/agenda/mensaje/".$mensaje);
          }else{
            $arr_vagenda["fecha"] = $this->uri->segment(5);
            $idespec = $this->uri->segment(7);
            $arr_vagenda["especialidad"] = $this->Especialidades->obtener($idespec);
            $idmed = $this->uri->segment(9);
            $arr_vagenda["medico"] = $this->Personal->obtener($idmed);
            $idorden = $this->uri->segment(11,'');
            if(!empty($idorden)){ 
              $arr_vagenda["orden"]=$this->Historia->ordenproc_obtener($idorden);
              $arr_vagenda["historia"]=$this->Historia->obtener($arr_vagenda["orden"]->idhistoria_t67);
            }
            //var_dump($arr_vagenda); exit;
            $arr_vagenda["medico"] = $this->Personal->obtener($idmed);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Agenda/f_agenda_interc',$arr_vagenda,true);
          }
          break;
          
      }
      $this->Planthtml->generar();
    }
	}
  
  public function censo(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "mensaje":
          $arr_lista["mensaje"]=base64_decode(urldecode($this->uri->segment(4)));
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Censo";
          $censo=$this->Paciente->censo();
          $arr_vcensouci["camas"] = $this->Paciente->verCamas();
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
          $arr_vconexterna["censodet"] = $censo->conexterna;
          $arr_lista["censocex"]=$this->load->view('Asistencial/Censo/l_censodet',$arr_vconexterna,true);
          $arr_lista["numconexterna"]=count($censo->conexterna);
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Censo/l_censo',$arr_lista,true);
          break;
          case 'imprimir':
          $censo=$this->Paciente->censo();
          $arr_vcenso["camas"] = $this->Paciente->verCamas();
          $arr_vcenso["censodet"] = $censo->uci;
            $ombre = date('Y-m-d')."Censo ".$this->uri->segment(4);
            $formato = $this->load->view('Asistencial/Censo/fmto_resumen_censo', $arr_vcenso, true);
            $this->load->library('my_dompdf');
            $this->my_dompdf->folder('export/');
            $this->my_dompdf->filename($nombre);
            $this->my_dompdf->paper('a4', 'portrait');
            $this->my_dompdf->html($formato);
            $this->my_dompdf->create();
          exit;
            break;
      }
      $this->Planthtml->generar();
    }
	}
  
  public function historia(){
    if($this->Modulo->error == false){
        $this->load->model('Paciente');
        $this->load->model('Historia');
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
          case "guardar":
          
            //exit;
            //debug($_POST);
             $idhistoria=$this->uri->segment(4);
             if($idhistoria=="odontologia"){
             
                $idhistoria=$this->uri->segment(5);
                $evento=$this->uri->segment(5);
               
                $var=$this->Historia->odontologia($idhistoria,null,null);
                //$mensaje="SU accion fue ejecutada";
                 //$url = $this->input->post('urldestino')."?mensaje=$mensaje";
                if($var==1){
                  $_SESSION["mostrar"]="Registro realizado satisfactoriamente";
                }else{
                  $_SESSION["mostrar"]="Modificaci&oacute;n realizada satisfactoriamente";
                }
               
             }elseif($idhistoria=="incapacidad"){
                $idhistoria=$this->uri->segment(5);
               $var= $this->Historia->incapacidad($idhistoria);
                  if($var==1){
                    $_SESSION["mostrar"]="Registro realizado satisfactoriamente";
                  }else{
                    $_SESSION["mostrar"]="Modificaci&oacute;n realizada satisfactoriamente";
                  }
             }else if($idhistoria=="oftalmologia"){
              $numhistoria=$this->uri->segment(5);
                $this->Historia->oftalmologia($numhistoria);
                $url = $this->input->post('urldestino')."/mensaje/$mensaje";
              }else if($idhistoria == "optometria"){
                $numhistoria=$this->uri->segment(5);
                $this->Historia->optometria($numhistoria);
              }else if($idhistoria == "psicologia"){
                $numhistoria=$this->uri->segment(5);
                $this->Historia->psicologia($numhistoria);
              }else if($idhistoria == "trabajo_social"){
                $numhistoria=$this->uri->segment(5);
                $this->Historia->trabajo_social($numhistoria);
              }else{

                $this->Historia->consulta_registrar($idhistoria);
              }
             
        
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"));
                 $url = $this->input->post('urldestino')."/mensaje/$mensaje";
                 //$url = $this->input->post('urldestino')."/mensaje".$mensaje;
             if(empty($url)){
               $url = site_url("inicio/mensaje/".$mensaje);
             }
             redirect($url);
            break;
           case "nuevo":
             $this->Planthtml->cont["tit_seccion"]="Paciente/Historia/Nuevo";
             if($this->uri->segment(6)=="guardar"){
               $idpaciente = $this->Paciente->registrar();
               $idhistoria= $this->Historia->registrar();
               $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$idpaciente;
               redirect(site_url()."/pacientes/historia/mensaje/".$mensaje);
             }else{
               $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia',"",true);
             }
             break;
            case 'eliminar':
             $orden = $this->uri->segment('6',0);
             $historia = $this->uri->segment('5',0);
             $this->Paciente->eliminarOrdenes($historia,$orden);
             $mensaje=urlencode(base64_encode("Se elimino la orden satisfactoriamente"));
             redirect(site_url()."/consexterna/MED/gestionar/".$historia."/meds/mensaje/".$mensaje);
             break;
           case "ver":
             $sololectura = true;
           case "gestionar":
             $this->Planthtml->cont["tit_seccion"]="Historia / Gestionar";
             $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
             $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
             $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datagenda"]=$this->Agenda->obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria['psicologia'] = $this->Historia->evol_psicologica($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datoconsultas"] = $this->Historia->consulta_opto($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["datoconsulta"]=$this->Historia->consulta_ofta($arr_vhistoria["dathistoria"]->idps_historia_t4);
             $arr_vhistoria["evoluciones"]=$this->Historia->obtener_evoluciones($arr_vhistoria["dathistoria"]->idps_historia_t4);
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
               case "paciente":
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
                 if($this->Modulo->perfilacceso["ASPAC"]=='L')$sololectura=true;
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_paciente"),true);
                 }
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
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
                 if($sololectura){
                   $this->Planthtml->cont["js"].= $this->load->view('Genericas/js_formsololec',array("idformulario"=>"form_historia_impdx"),true);
                 }
                 break;
               case "ordenes":
                 if($this->Modulo->perfilacceso["HISTORDEN"]=='L')$sololectura=true;
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
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
             $evmednumobj = count($arr_vhistoria["datconsulta"]->datevoldiariaact["EVOLUCI�N M�DICA"]->obj);
             if(empty($evmednumobj)){
               $evmednumobj=0;
             }
             $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_vert',array("v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4),true);
             switch($arr_vhistoria["dathistoria"]->ubicacion_t4){
               case strpos($arr_vhistoria["dathistoria"]->ubicacion_t4,"OBSERVACI�N")!==false:
               case strpos($arr_vhistoria["dathistoria"]->ubicacion_t4,"HOSPITALIZACI�N")!==false:
               case strpos($arr_vhistoria["dathistoria"]->ubicacion_t4,"UNIDAD CUIDADOS INTENSIVOS")!==false:
                 $this->Planthtml->cont["tit_seccion"]=$arr_vhistoria["dathistoria"]->ubicacion_t4." - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
                 $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_med',$arr_vhistoria,true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
                 break;
               case "SALA DE CIRUGIA":
                 $this->Planthtml->cont["tit_seccion"]="Sala Cx - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
                 $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_med',$arr_vhistoria,true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
                 $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
                 break;
               case "URGENCIAS":
                 if(!empty($arr_vhistoria["dathistoria"]->triage_t4)){
                   $this->Planthtml->cont["tit_seccion"]="Consulta Urgencias - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
                   if($this->Modulo->usr->roles[$arr_vhistoria["dathistoria"]->ubicacion_t4]["MED"]){
                     $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/medico/f_historia_consurg_med',$arr_vhistoria,true);
                     $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
                     $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
                   }elseif($this->Modulo->usr->roles[$arr_vhistoria["dathistoria"]->ubicacion_t4]["TRP"]){
                     $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_trp',$arr_vhistoria,true);
                   }else{
                     if($this->Modulo->usr->roles[$arr_vhistoria["dathistoria"]->ubicacion_t4]["ENF"]){
                       $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_enf',$arr_vhistoria,true);
                     }
                   }
                   $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_v_impre_diagnostica',"",true);
                   $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_medicamentos',"",true);
                   $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_procedimientos',"",true);
                 }else{
                   $this->Planthtml->cont["v_plant_menuad"] = $this->load->view('Asistencial/Historia/v_menu_historia_triage_vert',array("v_menuadd_idhitoria"=>$arr_vhistoria["dathistoria"]->idps_historia_t4),true);
                   $this->Planthtml->cont["tit_seccion"]="Triage - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
                   $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_triage',$arr_vhistoria,true);

                 }
                 break;
               case "CONSULTA EXTERNA":
                 if(empty($arr_vhistoria["fconsultaurgfrom"])){
                   if(!empty($this->Modulo->perfilacceso["ASPAC"])){
                     redirect(site_url("pacientes/historia/gestionar/".$arr_vhistoria["dathistoria"]->idps_historia_t4."/paciente"));
                   }else{
                     redirect(site_url("pacientes/historia/gestionar/".$arr_vhistoria["dathistoria"]->idps_historia_t4."/paciente"));
                   }
                 }
                 $this->Planthtml->cont["tit_seccion"]="Consulta Externa - Historia ".$arr_vhistoria["dathistoria"]->idps_historia_t4." / Paciente ".$paciente->nomcomp_t3." ".$arr_vhistoria["datpaciente"]->identificacion_t3;
                 //$this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext',$arr_vhistoria,true);
                 if($this->Modulo->usr->roles[$arr_vhistoria["dathistoria"]->ubicacion_t4]["MED"]){
                   $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_med',$arr_vhistoria,true);
                   $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_l_historia_evoluciones',"",true);
                   $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Historia/js_f_historia_evoldiariamed',array('numobj'=>$evmednumobj),true);
                 }elseif($this->Modulo->usr->roles[$arr_vhistoria["dathistoria"]->ubicacion_t4]["TRP"]){
                   $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_trp',$arr_vhistoria,true);
                 }else{
                   if($this->Modulo->usr->roles[$arr_vhistoria["dathistoria"]->ubicacion_t4]["ENF"]){
                     $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consurg_enf',$arr_vhistoria,true);
                   }else{
                     $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_historia_consext',$arr_vhistoria,true);
                   }
                 }
                 break;
               default:
                 redirect(site_url()."/pacientes/censo");
                 break;
             }
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

           case "nuevo_informe":
              $this->Planthtml->cont["tit_seccion"]="Historia / Nuevo";
              if($this->uri->segment(4)=="guardar"){
                $id = $this->Historia->registrar();
                $mensaje=urlencode(base64_encode("Paciente registrado satisfactoriamente"))."/buscado/".$id;
                redirect(site_url()."/pacientes/historia/mensaje/".$mensaje);
              }else{
                $this->Planthtml->cont["tit_seccion"]="Historia / Nuevo";
                $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/f_informe_medico',"",true);
              }
             break;

           case "actualizarpaciente":
             $idhistoria = $this->uri->segment(4, "0");
             //var_dump($idhistoria); exit;
             $this->Planthtml->cont["tit_seccion"]="Pacientes / Historia/ Modificar";
             $urldestino = $this->input->post('urldestino');
             if(!empty($idhistoria) && !empty($urldestino)){
               $idpaciente = $this->Paciente->registrar($idhistoria);
               $infopost = (object)$this->input->post();
               $arr_historia["identificacion"]=$infopost->identificacion;
               if(is_null($infopaciente->fingreso)==false)$arr_historia["fingreso"]=$infopost->fingreso;
               if(is_null($infopaciente->ubicacion)==false)$arr_historia["ubicacion"]=$infopost->ubicacion;
               if(is_null($infopaciente->ubicaciondet)==false)$arr_historia["ubicaciondet"]=$infopost->ubicaciondet;
               if(is_null($infopaciente->motivoing)==false)$arr_historia["motivoing"]=$infopost->motivoing;
               if(is_null($infopaciente->viaing)==false)$arr_historia["viaing"]=$infopost->viaing;
               if(is_null($infopaciente->causaext)==false)$arr_historia["causaext"]=$infopost->causaext;
               $arr_historia["estado"]='ADMITIDA';
               if(is_null($infopost->obs)==false)$arr_historia["obs"]=$infopost->obs;
               $this->Historia->registrar($idhistoria,(object)$arr_historia);
               $mensaje=urlencode(base64_encode("Registro actualizado satisfactoriamente"));
               redirect(site_url($urldestino)."/mensaje/".$mensaje);
             }else{
               redirect(site_url('inicio'));
             }
             break;
          case "verepicrisis":
             $historia = $this->uri->segment(4, "0");
             $arr_vfom["dathistoria"] = $this->Historia->obtener($historia);
             $arr_vfom["datpaciente"] = $this->Paciente->obtener($arr_vfom["dathistoria"]->paciente_t4);
             $arr_vfom["datconsulta"] = $this->Historia->consulta_obtener($arr_vfom["dathistoria"]->idps_historia_t4);
             $this->Planthtml->limpia = true;
             $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Historia/fmto_epicrisis',$arr_vfom,true);
            break;
           case "imprimir":
             $form = $this->uri->segment(4, "0");
             $historia = $this->uri->segment(5, "0");
             
             $arr_vfom["dathistoria"] = $this->Historia->obtener($historia);
             $arr_vfom["datpaciente"] = $this->Paciente->obtener($arr_vfom["dathistoria"]->paciente_t4);
             $arr_vfom["datconsulta"] = $this->Historia->consulta_obtener($arr_vfom["dathistoria"]->idps_historia_t4);
             $arr_vfom["datconsultaso"] = $this->Historia->consultaso_obtener($arr_vfom["dathistoria"]->idps_historia_t4);
             if ($this->db->database != "CLIOFTALMO") {
              $arr_vfom['psicologia'] = $this->Historia->evol_psicologica($arr_vfom["dathistoria"]->idps_historia_t4); 
             }
             if ($this->db->database == "CLIOFTALMO") {
             $arr_vfom["datoconsultas"] = $this->Historia->consulta_opto($arr_vfom["dathistoria"]->idps_historia_t4);
             $arr_vfom["datoconsulta"]=$this->Historia->consulta_ofta($arr_vfom["dathistoria"]->idps_historia_t4);  
             }
             if ($this->db->database == "hms_FUNSABIAM") {
               $arr_vfom["evoluciones"]=$this->Historia->obtener_evoluciones($arr_vfom["dathistoria"]->idps_historia_t4);
             }
             $result = $this->Util->ValidarTable("ps_consinformados_t10");
             if ($result) {
               $arr_vfom['autorizaciones'] = $this->Historia->listarAutorizaciones($arr_vfom["dathistoria"]->idps_historia_t4);
             }
             $arr_vfom["datgineco"]= $this->modelo_universal->select("ps_hist_consulta_gineco","*",array('idhistoria_gineco'=>$arr_vfom["dathistoria"]->idps_historia_t4));
             $arr_vfom["datodon"]= $this->modelo_universal->select("ps_hist_consulta_odon","*",array('idhistoria_odon'=>$arr_vfom["dathistoria"]->idps_historia_t4));    
             $arr_vfom["evolodon"]= $this->modelo_universal->select("ps_hist_evolucion_odon_t68","*",array('idhistoria_t68'=>$arr_vfom["dathistoria"]->idps_historia_t4),null,null,"fmod_t68","DESC");            
            $arr_vfom["datinca"]= $this->modelo_universal->select("ps_historia_incapacidad","*",array('idhistoria_inca'=>$arr_vfom["dathistoria"]->idps_historia_t4),null,null,"usrmod_inca","DESC");
             switch($form){
               case "historia":
                 $formato = $this->load->view('Asistencial/Historia/fmto_historia',$arr_vfom,true);
                 $nombre ='Historia_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
               case "consultaso":
                  $formato = $this->load->view('Asistencial/Historia/fmto_consultaso',$arr_vfom,true);
                  $nombre ='Epicrisis_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                   //echo $formato; exit;
                 break;
               case "certificadoso":
                  $formato = $this->load->view('Asistencial/Historia/fmto_certificadoso',$arr_vfom,true);
                  $nombre ='Certificado_Médico_Ocupacional_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                   //echo $formato; exit;
                 break;
               case "epicrisisso":
                  $formato = $this->load->view('Asistencial/Historia/fmto_epicrisisso',$arr_vfom,true);
                  $nombre ='Epicrisis_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                   //echo $formato; exit;
                 break;
               case "epicrisis":
                  $dato = $this->uri->segment(6);
                  if($dato=="odontologia"){
                    for( $i=0;$i<=count($arr_vfom["evolodon"]);$i++){
                    if($arr_vfom["evolodon"]["tipoevol_t68"]=="ENFERMERERIA"){
                    $arr_vfom["evolodon"]["ENFERMERERIA"]=$arr_vfom["evolodon"];
                      }else{
                        $arr_vfom["evolodon"]["MEDICA"]=$arr_vfom["evolodon"];
                      }
                    }
                    $formato = $this->load->view('Asistencial/Historia/odon/fmto_epicrisis_odon',$arr_vfom,true);
                    $nombre ='Epicrisis_Odontologia_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                  }else{
                  $formato = $this->load->view('Asistencial/Historia/fmto_epicrisis',$arr_vfom,true);
                  $nombre ='Epicrisis_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                   }//echo $formato; exit;
                 break;
               case "remision":
                   $formato = $this->load->view('Asistencial/Historia/fmto_remision',$arr_vfom,true).$this->load->view('Asistencial/Historia/fmto_contrareferencia',$arr_vfom,true);
                   $nombre ='Remisi�n_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
               case "formula":
              $arr_vfom["hist_orden"]=$this->Historia->orden_obtener($this->uri->segment(6, ""));
                   $formato = $this->load->view('Asistencial/Historia/fmto_formula',$arr_vfom,true);
                   $nombre ='Formula_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
               case "formulamnp":
                  //var_dump($this->Modulo->infoentidad);
                   $arr_vfom["hist_orden"]=$this->Modulo->objarrasoc($this->Historia->orden_obtener($this->uri->segment(6, "")),'pos_t67');
                   $arr_vfom['agenda'] = $this->Agenda->obtener($this->uri->segment(5));
                   //var_dump($arr_vfom["hist_orden"]["NO POS"]->codigo_t67);
                   //exit();
                   $arr_vfom["detmednp"]= $this->Constante->cums_obtener($arr_vfom["hist_orden"]["NO POS"]->codigo_t67);
                   $arr_vfom["detmedhpnp"]= $this->Constante->cums_obtener($arr_vfom["hist_orden"]["HPNP"]->codigo_t67);
                   $formato = $this->load->view('Asistencial/Historia/fmto_mednopos',$arr_vfom,true);
                   //echo $formato;
                   //exit;
                   
                   $nombre ='Fmto_Med_no_POS_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
             case "examenes":
                   $arr_vfom["hist_orden"]=$this->Historia->orden_obtenerpk2($this->uri->segment(5, ""));
                   // debug($arr_vfom["hist_orden"]);
                   $formato = $this->load->view('Asistencial/Historia/fmto_examenes',$arr_vfom,true);
                   $nombre ='Ex�menes_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
                  case "examenespk":
                   $arr_vfom["hist_orden"]=$this->Historia->orden_obtenernewpk($this->uri->segment(6, ""));
                      // codigo kevis
                 $this->data['examen']=$this->modelo_universal->select('ps_hist_ordenes_t67','*',array('idhistoria_t67'=>$this->uri->segment(5,''),'tipo_t67'=>$this->uri->segment(8,'')));
                  //debug($this->data['examen'][0]['idhist_ordenes_t67']);
                 $valor =  count($this->data['examen']);
                 for ($i=0; $i < $valor; $i++) { 
                   $this->data['examenespk'][] = $this->modelo_universal->select('examenespk200','*',array('procedimiento200'=>$this->data['examen'][$i]['codigo_t67']));
                 }
                //debug($this->data['examenespk']);
                for ($i=0; $i < $valor; $i++) { 
                   $arr_vfom['ex'][] = $this->modelo_universal->select('resultadosexamenespk201','*',array('idcolum6201'=>$this->data['examen'][$i]['idhist_ordenes_t67']));
                 }
                //$this->data['resultadosexamenespk201']=$this->modelo_universal->select('resultadosexamenespk201','*',array('procedimiento201'=>$this->data['examen'][0]['codigo_t67'],'idcolum6201'=>$this->uri->segment(7,'')));
                // debug($this->db->last_query());
                // debug($this->data['resultadosexamenespk201']);
                // fin codigo kevis
                // debug($arr_vfom['resultado']);
                   $formato = $this->load->view('Asistencial/Historia/fmto_examenespk',$arr_vfom,true);
                   $nombre ='Exámenes_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
               case "incapacidad":
                   $formato = $this->load->view('Asistencial/Historia/fmto_incapacidad',$arr_vfom,true);
                   $nombre ='Incapacidad_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
                 break;
              case "citologia":
                    $formato = $this->load->view('Asistencial/Historia/fmto_citologia',$arr_vfom,true);
                    $nombre ='Citologia_'.$arr_vfom["dathistoria"]->idps_historia_t4.'_Paciente_'.$arr_vfom["dathistoria"]->paciente_t4.".pdf";
              break;
             }
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename($nombre);
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          exit;
        break;
      }
      $this->Planthtml->generar();
    }
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
              $arr_modificar['citas'] = $this->Paciente->ultimasadmisiones();
            }
            $this->load->model('tercero');
            $arr_modificar['tercero'] = $this->tercero->listar_ad();
            $this->load->model('serviciohab');
            $arr_modificar["destino"] = $this->serviciohab->listar();
            $this->Planthtml->cont["tit_seccion"]="Admisiones / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Admisiones/f_admision_nuevo',$arr_modificar,true);
            $this->Planthtml->cont["js"] .= $this->load->view('Asistencial/Admisiones/js_f_paciente',"",true);
          }
          break;
        case 'modificar':
          $this->Planthtml->cont["tit_seccion"]="Admisiones / Modificar";
          if($this->uri->segment(4)=="guardar"){
            $id = $this->Paciente->registrar();
            $mensaje=urlencode(base64_encode("Paciente registrado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/pacientes/admisiones/mensaje/".$mensaje);
          }else{
            if($this->uri->segment(4)=="paciente"){
              $arr_modificar["datpaciente"]=$this->Paciente->obtener($this->uri->segment(5));
              $arr_modificar['citas'] = $this->Paciente->ultimasadmisiones();
            }
            $this->load->model('tercero');
            $arr_modificar['tercero'] = $this->tercero->listar_ad();
            $this->load->model('serviciohab');
            $arr_modificar["destino"] = $this->serviciohab->listar();
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