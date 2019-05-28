<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Facturacion extends CI_Controller {
  
  function __construct(){    
		parent::__construct();  
    $this->load->model('Tarifa');
    $this->load->model('Factura');
    $this->load->model('Convenio');
    $this->load->model('Tercero');
    $this->load->model('entidad');
    $this->load->model('Paciente');
    $this->load->dbforge();
  }

  public function Factura(){
    if ($this->Modulo->error == false) {
      $accion = $this->uri->segment(3);
      switch ($accion) {
        case 'personal':
          $this->Planthtml->cont['tit_seccion'] = "Generar Facturacion";
          $this->Planthtml->cont['contenido'] = $this->load->view('Asistencial/Facturacion/panel_facturacion',"",true);
          $this->Planthtml->cont['js'] = $this->load->view('Asistencial/Facturacion/js_panel_facturacion',"",true);
          break;
        case 'masiva':
          $this->Planthtml->cont['tit_seccion'] = "Generar Facturacion Masiva";
          $this->Planthtml->cont['contenido'] = $this->load->view('Asistencial/Facturacion/panel_facturacion_masiva',"",true);
          $this->Planthtml->cont['js'] = $this->load->view('Asistencial/Facturacion/js_panel_facturacion',"",true);
          break;
        case 'registrar':
          $historia = $this->uri->segment(4);
          if($this->uri->segment(5) != ""){
            $arr_historia['dat_listos'] = $this->Factura->buscarDat($this->uri->segment(5));
          }
          $arr_historia['historia'] = $this->Historia->obtener($historia);
          //var_dump($arr_historia['historia']->administradoracod_t3);
          $arr_historia['eps'] = $this->Tercero->obtener("",$arr_historia['historia']->administradoracod_t3);
          $arr_historia["datconsulta"]=$this->Historia->obtener_diagnostico($historia);
          $arr_historia['ordenes'] = $this->Historia->obtener_ordenes($historia);
          $arr_historia['costos'] = $this->Historia->tarifario($arr_historia['ordenes']);
          $arr_historia['convenios'] = $this->Historia->convenios($arr_historia['historia']->administradoracod_t3);
          $arr_historia['medicamentos'] = $this->Historia->tarifario_medicamentos($arr_historia['ordenes']);
          $this->Planthtml->cont['tit_seccion'] = "Registrar / Facturacion";
          $this->Planthtml->cont['contenido'] = $this->load->view('Asistencial/Facturacion/registrar',$arr_historia,true);
          $this->Planthtml->cont['js'] = $this->load->view('Asistencial/Facturacion/js_registrar',"",true);
          $this->Planthtml->cont["js"].= $this->load->view('EPSfacturacion/js_f_digitar','',true);
          break;
        case 'anular':
          $arr_datos = (object)$this->input->post();
          var_dump($arr_datos);
          $arr_historia['ordenes'] = $this->Factura->liberarOrden($arr_datos->cnfac);
          break;
        case 'imprimir':
         $conf = (object)$this->input->post();
        $numfac = $this->Factura->sigfac($conf->serie);
        $arr_historia['confirmar'] = $this->Historia->confirmar_ordenes($conf,$numfac);
        $arr_factura['valores'] = $this->Historia->buscar_facturados($numfac);
        foreach ($conf->conf as $codigo) {
          $dat = explode('T', $codigo);
          $monto_total += $dat[1];
        }
        //exit();
        $historia = $this->uri->segment(4);
        $arr_factura["datconsulta"]=$this->Historia->obtener_diagnostico($historia);
        $arr_factura['datfac'] = $this->Historia->obtener($historia);
        $arr_factura['entidad'] = $this->entidad->obtener();
        $arr_factura['eps'] = $this->Historia->convenio($conf->codadministradora);
        $arr_fctura['facturacion'] = $this->Factura->registrar_factura($arr_factura['eps'],$arr_factura['datfac'],$numfac,$arr_factura["datconsulta"],$monto_total);
        $arr_factura["datconsulta"]=$this->Historia->obtener_diagnostico($historia);
        $arr_factura['dat_fac'] = $conf;
        $arr_factura['numero_factura'] = $numfac;
        $formato = $this->load->view('Asistencial/Facturacion/fmto_factura', $arr_factura, true);
        $nombre ='Factura_'.$numfac.".pdf";
         redirect(site_url('facturacion/factura/registrar/'.$this->uri->segment(4)."/".$numfac),'refresh');
          break;
        case 'actualizar_valor':
          return $this->historia->actualizar_ordenes();
          break;
        case 'verificar':
          $this->load->model('factura');
          $numfac = $this->uri->segment(5);
          $idserie = $this->uri->segment(6);
          $arr_factura['valores'] = $this->Historia->buscar_facturados($numfac);
          $historia = $this->uri->segment(4);
          $arr_factura["datconsulta"]=$this->Historia->obtener_diagnostico($historia);
          $arr_factura['datfac'] = $this->Historia->obtener($historia);
          $this->load->model('entidad');
          $arr_factura['entidad'] = $this->entidad->obtener();
          /*if(!empty($arr_factura['datfac']->administradoracod_t3)) {
          $arr_factura['eps'] = $this->Historia->convenio($arr_factura['datfac']->administradoracod_t3);
        }else{*/
          $arr_factura['dat_listos'] = $this->factura->buscarDat($numfac,$idserie);
          $arr_factura['eps'] = $this->Historia->convenio($arr_factura['dat_listos'][0]->tercid_t96);
        //}
          //var_dump($arr_factura['eps']);
          //exit();
        $arr_factura['datos_entidad'] = $this->factura->buscarExtras($arr_factura['dat_listos'][0]->idserie_t96);
          $arr_factura['autorizacion'] = $this->factura->buscarAuto($numfac);
           $arr_factura['numero_factura'] = $numfac;
          //var_dump($arr_factura['datos_entidad']);
            //cargamos la librería  
           $this->load->library('ciqrcode');
           //hacemos configuraciones
           $rutabase = 'img/qrcode.png';
           $rutarQr = FCPATH.$rutabase;
           $params['data'] = site_url('facturacion/factura/'.$this->uri->segment(3).'/'.$this->uri->segment(4)."/".$this->uri->segment(5));
           $params['level'] = 'H';
           $params['size'] = 5;
           $params['savename'] = $rutarQr;
           $this->ciqrcode->generate($params);
           //decimos el directorio a guardar el codigo qr, en este 
           //caso una carpeta en la raíz llamada qr_code
           //generamos el código qr
          $query = $this->ciqrcode->generate($params);
           if ($this->uri->segment(6) == "grupo") {
              $formato = $this->load->view('Asistencial/Facturacion/fmto_factura_consol', $arr_factura, true);
           }else{
              $formato = $this->load->view('Asistencial/Facturacion/fmto_factura', $arr_factura, true);
           }
          $nombre ='Factura_'.$numfac.".pdf";
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename($nombre);
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          break;
          case 'impresion_masiva':
           $this->load->model('entidad');
          $this->load->model('factura');
          $arr_dat = $this->Factura->listarfacturas();
          $can = count($arr_dat);
          for ($i=0; $i < $can; $i++) {
          $numfac = $arr_dat[$i]->factnum_t96;
          $arr_factura['valores'] = $this->Historia->buscar_facturados($numfac);
          $historia = $arr_dat[$i]->historia_t96;
          $arr_factura["datconsulta"]=$this->Historia->obtener_diagnostico($historia);
          $arr_factura['datfac'] = $this->Historia->obtener($historia);
          $arr_factura['entidad'] = $this->entidad->obtener();
          if(!empty($arr_factura['datfac']->administradoracod_t3)) {
          $arr_factura['eps'] = $this->Historia->convenio($arr_factura['datfac']->administradoracod_t3);
        }else{
          $arr_factura['eps'] = $this->Historia->convenio($conf->codadministradora);
        }
          $arr_factura['dat_listos'] = $this->factura->buscarDat($numfac);
          $arr_factura['autorizacion'] = $this->factura->buscarAuto($numfac);
          $arr_factura['numero_factura'] = $numfac;
          $formato['can'] = $can;
          //var_dump($arr_factura['autorizacion']);
          $nombre ='Factura_'.$numfac.".pdf";
          $formato['formato'][] = $this->load->view('Asistencial/Facturacion/fmto_factura', $arr_factura, true);
          }
          $muestra = $this->load->view('Asistencial/Facturacion/fmto_facturas', $formato,true);
          $this->crear_pdf($nombre,$muestra);
          break;
          case 'generarCd':
          $this->load->helper("url");
          $this->config->base_url = FCPATH.'qr_code/';
            //cargamos la librería  
           $this->load->library('ciqrcode');
           //hacemos configuraciones
           $rutabase = 'img/qrcode.png';
           $rutarQr = FCPATH.$rutabase;
           $params['data'] = $this->Util->random(30);
           $params['level'] = 'H';
           $params['size'] = 5;
           $params['savename'] = $rutarQr;
           //decimos el directorio a guardar el codigo qr, en este 
           //caso una carpeta en la raíz llamada qr_code
           //generamos el código qr
          $query = $this->ciqrcode->generate($params);
          echo '<img src="'.base_url().'img/qrcode.png" />';
            break;
      }
    }
      $this->Planthtml->generar();
  }

  function factura_nueva()
  {
    if ($this->Modulo->error == false) {
      $accion = $this->uri->segment(3);
      switch ($accion) {
        case 'registrar':
        if ($this->uri->segment(4) == "guardar") {
        $conf = (object)$this->input->post();
        $numfac = $this->Factura->sigfac($conf->serie);
        $arr_factura['entidad'] = $this->entidad->obtener();
        $arr_factura['eps'] = $this->Historia->convenio('830003564');
        $arr_factura['dat_fac'] = $conf;
        $arr_factura['numero_factura'] = $numfac;
        $arr_factura['datfac'] = $this->Paciente->obtener('25676512');
        $fila = $this->db->list_fields('cm_cuentas_t96');
        foreach ($fila as $l) {
          if ($l == "abono_t96") {
            $crear = "NO";
          }
        }
        if ($crear != "NO"){
            $campos = array(
                      "abono_t96" => array(
                          'type' => "int",
                          'null' => TRUE
                      )
            );
          $this->dbforge->add_column("cm_cuentas_t96",$campos);
        }
        var_dump($arr_factura['datfac']);
        exit();
        $arr_fctura['facturacion'] = $this->Factura->registrar_factura($arr_factura['eps'],$arr_factura['datfac'],$numfac,$arr_factura["datconsulta"],$monto_total);

        }
        $this->Planthtml->cont['tit_seccion'] = "Registrar Nueva";
        $this->Planthtml->cont['contenido'] = $this->load->view('Asistencial/Facturacion/f_registrar_nueva',"", true);
        $this->Planthtml->cont['js'].= $this->load->view('Asistencial/Facturacion/js_registrar',"",true);
        $this->Planthtml->cont["js"].= $this->load->view('EPSfacturacion/js_f_digitar','',true);
        $this->Planthtml->cont["js"].= $this->load->view('Asistencial/Facturacion/js_registrar_nueva','',true);
        break;
      }
    }

    $this->Planthtml->generar(); 
  }

  function crear_pdf($nombre,$formato){
      $this->load->library('my_dompdf');
      $this->my_dompdf->folder(FCPATH."docs/export");
      $this->my_dompdf->paper('a4', 'portrait');
      $this->my_dompdf->filename($nombre);
      $this->my_dompdf->html($formato);
      $this->my_dompdf->create();
      exit();
  }

  public function actualizar_ordeness()
  {
    $this->load->model('historia');
    return $this->historia->actualizar_ordenes();
  }

  public function actualizar_cantidad()
  {
    $this->load->model('historia');
    return $this->historia->actualizar_cantidad();
  }

  function DescargarRips()
  { 
    $archct = base_url('docs/RIPS/'.$this->uri->segment(3).'/'.$this->uri->segment(4).$this->uri->segment(3).'.TXT');
    header ("Content-Disposition: attachment; filename=".$this->uri->segment(4).$this->uri->segment(3).".TXT ");
    header ("Content-Type: application/octet-stream");
    header ("Content-Length: ".filesize($archct));
    readfile($archct);
  }

  public function facturas(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscadobj"]=(object)$this->input->post();
        $arr_lista["buscadobj"]=$arr_datos["buscadobj"];
      case "mensaje":
      case "0":
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        $arr_lista["datpaciente"]=$this->Factura->listar_historias($arr_lista["buscadobj"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación / Facturas";
        //$this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_prefactura',$arr_lista,true);
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/panelprinc',$arr_lista,true);
        $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Facturacion/js_panelprinc',"",true);
        $this->Planthtml->generar();
        break;

        case "gestionar":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Prefactura";
          if($this->uri->segment(4)=="guardar"){
            //$this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            //redirect(site_url()."/facturacion/prefactura/mensaje/".$mensaje);
          }else{
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
            $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_prefactura',$arr_vhistoria,true);
            $this->Planthtml->generar();
          }
          break; 
        // función para registrar nuemas cuentas para algun cliente
        case "registrar":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Factura";
          // Si el 4 segmento de la ruta es guardar cumplir esta función
          if($this->uri->segment(4)=="Guardar"){
            $idfac = $this->uri->segment(5); // Esta función es el id de la factura
                  // debug($idfac);
            $resreg = $this->Factura->registrar("",$idfac);
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/facturacion/facturas/registrar/$resreg->idhistoria/$resreg->idfac/mensaje/".$mensaje);
          }else{
            $idfac = $this->uri->segment(5);
            $idhistoria = $this->uri->segment(4);
            if(!empty($idhistoria)){
              $arr_vfac["dathistoria"] = $this->Historia->obtener($idhistoria);
              $arr_vfac["datconsulta"] = $this->Historia->consulta_obtener($idhistoria);
              $arr_vfac["datpaciente"] = $this->Paciente->obtener($arr_vfac["dathistoria"]->paciente_t4);
            }
            if(!empty($idfac)){
              $arr_vfac["datfac"]=$this->Factura->obtener_prefac($idfac,true,$idhistoria);
            }
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_digitar',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_digitar','',true);
            $this->Planthtml->generar();
          }
          break;
      case "eliminar":
        $idhist = $this->uri->segment(4);
        $idfac = $this->uri->segment(5);
        $iditem = $this->uri->segment(6);
        $this->Factura->eliminaitemord($iditem);
        $mensaje=urlencode(base64_encode("Registro eliminado satisfactoriamente"))."/buscado/".$this->db->insert_id();
        redirect(site_url()."/facturacion/facturas/registrar/$idhist/$idfac/mensaje/".$mensaje);
        break;
      case "ver":
        $idfac = $this->uri->segment(4);
        $idhistoria = $this->uri->segment(5);
        $arr_vfac["datfac"]=$this->Factura->obtener_prefac($idfac,true,$idhistoria);
       
        
        $formato = $this->load->view('Asistencial/Facturacion/fmto_factura',$arr_vfac,true);
        //echo $formato;
        //exit;
        $nombre ='Factura_'.$idfac.".pdf";
        $this->load->library('my_dompdf');
        $this->my_dompdf->folder('export/');
        $this->my_dompdf->filename($nombre);
        $this->my_dompdf->paper('a4', 'portrait');
        $this->my_dompdf->html($formato);
        $this->my_dompdf->create();
        exit;
        break;
        case "verPreliminar":
        // $idfac = $this->uri->segment(4);
            //var_dump($this->input->post());
            $idfac = $this->uri->segment(5);
            $idhistoria = $this->uri->segment(4);
            if(!empty($idhistoria)){
              $arr_vfac["dathistoria"] = $this->Historia->obtener($idhistoria);
              $arr_vfac["datconsulta"] = $this->Historia->consulta_obtener($idhistoria);
              //debug($arr_vfac["datconsulta"]->datordenes);
              foreach ($arr_vfac["datconsulta"]->datordenes as $fila => $value) {
                foreach($value as $orden=>$arr_reg){
                  foreach($arr_reg as $regfac){
                    if ($regfac->tipo_t67 == "LABO") {
                      echo "Medicina";
                    }else if($regfac->t67 != "LABO"){
                      echo $regfac->tipo_t67;
                    }
                  }
                }
              }
              exit();
              $arr_vfac["datpaciente"] = $this->Paciente->obtener($arr_vfac["dathistoria"]->paciente_t4);
            }
            if(!empty($idfac)){
              $arr_vfac["datfac"]=$this->Factura->obtener_prefac($idfac,true,$idhistoria);
            }
            $this->Planthtml->cont["contenido"] = $this->load->view('EPSfacturacion/f_digitar',$arr_vfac,true);
            $this->Planthtml->cont["js"] = $this->load->view('EPSfacturacion/js_f_digitar','',true);
            $this->Planthtml->generar();
        //exit;
        /*$nombre ='Preliquidacion_'.$idfac.".pdf";
        $this->load->library('my_dompdf');
        $this->my_dompdf->folder('export/');
        $this->my_dompdf->filename($nombre);
        $this->my_dompdf->paper('a4', 'portrait');
        $this->my_dompdf->html($formato);
        $this->my_dompdf->create();
        exit;*/
        break;
      }
    }
	}
  
  public function prefactura(){
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
        $arr_lista["datpaciente"]=$this->Factura->prefactura_listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación / Prefactura";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_prefactura',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "gestionar":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Prefactura";
          if($this->uri->segment(4)=="guardar"){
            //$this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/facturacion/prefactura/mensaje/".$mensaje);
          }else{
            $arr_vhistoria["dathistoria"] = $this->Historia->obtener($this->uri->segment(4));
            $arr_vhistoria["datpaciente"] = $this->Paciente->obtener($arr_vhistoria["dathistoria"]->paciente_t4);
            $arr_vhistoria["datconsulta"]=$this->Historia->consulta_obtener($arr_vhistoria["dathistoria"]->idps_historia_t4);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_prefactura',$arr_vhistoria,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
	}
  
  public function preliqord(){
    if($this->Modulo->error == false){
      $this->load->model('Rips');
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
        //$arr_lista["datrips"]=$this->Rips->listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación / Pre - Liquidación Ordenes";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_preliqord',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Facturación / Pre - Liquidación Ordenes / Nuevo";
          if($this->uri->segment(4)=="generar"){
            $arr_vpreliq["datpreliq"] = $this->Factura->ord_preliq();
            $this->output
            ->set_content_type('application/x-msdownload')
            ->set_header("HTTP/1.0 200 OK")
            ->set_header("HTTP/1.1 200 OK")
            ->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT')
            ->set_header("Cache-Control: no-store, no-cache, must-revalidate")
            ->set_header("Cache-Control: post-check=0, pre-check=0")
            ->set_header("Pragma: no-cache")
            ->set_header("Content-Disposition: attachment; filename=Preliq_Ordenes.xls")
            ->set_output($this->load->view('Asistencial/Facturacion/i_preliqord',$arr_vpreliq,true));
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_preliqord','',true);
            $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Facturacion/js_f_preliqord','',true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
	}
  
  public function rips(){
    if($this->Modulo->error == false){
      $this->load->model('Rips');
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
        $arr_lista["datrips"]=$this->Rips->listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación / RIPS";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_rips',$arr_lista,true);
        $this->Planthtml->generar();
        break;
        
        case "validar":
          $this->Planthtml->cont["tit_seccion"]="Facturación / RIPS / Correcion CUPS Res 4678";
          $funcion = $this->uri->segment(4);
          switch($funcion){
            case "generar":
              $idval = $this->Rips->validar();
              $arr_vform["detres"] = $this->Rips->validarobtener($idval);
              $arr_vform["mensaje"]="Corrección realizada satisfactoriamente";
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_ripsval',$arr_vform,true);
              break;
            case "ver":
              $idval = $this->uri->segment(5);
              $arr_vform["detres"] = $this->Rips->validarobtener($idval);
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_ripsval',$arr_vform,true);
            case "nuevo":
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_ripsval','',true);
              break;
            default:
              $arr_vlist["datval"]=$this->Rips->validarlistar();
              $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_ripsval',$arr_vlist,true);
              break;
          }
          $this->Planthtml->generar();
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Facturación / RIPS / Nuevo";
          if($this->uri->segment(4)=="confirmar"){
            $arr_conf["datconf"] = $this->Rips->confirmar();
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_ripsconf',$arr_conf,true);
            $this->Planthtml->generar();
          }elseif($this->uri->segment(4)=="generar"){
            $numrem = $this->Rips->generar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$numrem;
            redirect(site_url()."/facturacion/rips/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_rips','',true);
            $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Facturacion/js_f_rips','',true);
            $this->Planthtml->generar();
          }
          break;
        
        case "gestionar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
        case "remision":
          $remision = $this->uri->segment(4);
          $arr_vfmto["datrips"] = $this->Rips->obtener($remision);
          $formato = $this->load->view('Asistencial/Facturacion/fmto_remrips',$arr_vfmto,true);
          $this->load->library('my_dompdf');
          $this->my_dompdf->folder('export/');
          $this->my_dompdf->filename("Rem_Rips_".$remision.".pdf");
          $this->my_dompdf->paper('a4', 'portrait');
          $this->my_dompdf->html($formato);
          $this->my_dompdf->create();
          exit;
          break;
      }
    }
	}
  
  
  public function planestarifarios(){
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
        $arr_lista["datplanestar"]=$this->Tarifa->planes_listar();
        $this->Planthtml->cont["tit_seccion"]="Facturación / Planes Tarifarios";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_planestarifarios',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',"",true);
            $this->Planthtml->generar();
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
	}
  
  public function parametrizacion(){
    if($this->Modulo->error == false){
      $this->load->model('Tarifa');
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
        //$arr_lista["datestructura"]=$this->Estructura->listar();
        $this->Planthtml->cont["tit_seccion"]="Facturación / Parametrización";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_param_facturacion',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',"",true);
            $this->Planthtml->generar();
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
	}
  
  public function asistente(){
    if($this->Modulo->error == false){
      $this->load->model('Estructura');
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
        //$arr_lista["datestructura"]=$this->Estructura->listar();
        $this->Planthtml->cont["tit_seccion"]="Facturación / Parametrización";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_asistente_facturacion',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/f_estructura',"",true);
            $this->Planthtml->generar();
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/f_estructura',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
	}
  
  public function convenios(){
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
          $arr_lista["datconvenios"]=$this->Historia->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="convenios/Historia";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_convenios',$arr_lista,true);
          $this->Planthtml->generar();
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Facturacion / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $id = $this->convenios->registrar();
            $this->convenios->registrar();
            $mensaje=urlencode(base64_encode("convenio registrado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/facturacion/convenios/mensaje/".$mensaje);
          }else{
            if($this->uri->segment(4)=="convenio"){
              $arr_modificar["datconvenios"]=$this->convenio->obtener($this->uri->segment(5));
            }
            $this->Planthtml->cont["tit_seccion"]="Admisiones / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_convenios',$arr_modificar,true);
            $this->Planthtml->generar();
          }
        }
      }
  }

    public function pruebas (){
            $this->Planthtml->cont["tit_seccion"]="Admisiones / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/panelprinc',$arr_lista,true);
        $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Facturacion/js_panelprinc',"",true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Inventarios/l_inventarios','',true);//aca cambiar la vista del contenido
            $this->Planthtml->generar();
  }
}
