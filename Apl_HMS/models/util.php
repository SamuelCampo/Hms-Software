<?
class Util extends CI_Model {
  var $usr;

  function __construct(){
    parent::__construct();
  }
  
  function confmenu($datos,$id,$descrip,$actual=""){
    $arr_menu["datos"]=$datos;
    $arr_menu["id"]=$id;
    $arr_menu["descrip"]=$descrip;
    $arr_menu["actual"]=$actual;
    //var_dump($arr_menu); exit;
    return $arr_menu;
  }

  function random($ruta){
   $characters = 'http://apln.hms.com.co/CLINICA_OFTALMOLOGICA/inicio.php/facturacion/factura/verificar/662/53496';
   $string = '';
   for ($i = 0; $i < $num; $i++) {
        $string .= $characters[rand(0, strlen($characters) - 1)];
   }
   return $characters;
   }

   function ValidarTable($table){
    if ($this->db->table_exists($table)) {
      return TRUE;
    }else{
      return FALSE;
    }
   }

   function CrearTable($table,$campos,$primary){
    $this->load->dbforge();
    $this->dbforge->add_field($campos);
      $this->dbforge->add_key($primary, TRUE);
      $this->dbforge->create_table($table);
   }
  
  function confmenucheck($datos,$id,$descrip,$filas,$nombre,$actual=""){
    $arr_check["datos"]=$datos;
    $arr_check["id"]=$id;
    $arr_check["descrip"]=$descrip;
    $arr_check["actual"]=$actual;
    $arr_check["filas"]=$filas;
    $arr_check["nombre"]=$nombre;
    return $arr_check;
  }
      function smshist($arr_msj){
    $data = array(
      'numero_t111' =>$arr_msj["destino"],
      'mensaje_t111' =>$arr_msj["texto"],
      'resultado_t111' =>$arr_msj["res"]["resultado"],
      'fmod_t111'=>$this->ahora()
   );
   $this->db->insert('ps_smshist_t111', $data);
  }
    function recordar()
  {
    $fecha = date('Y-m-d');
    $nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
    //$nuevafecha;
    //echo $nuevafecha;
    $this->db->where('fecha_programacion_t12 >=', $nuevafecha);
    $this->db->where('fecha_programacion_t12 <=', $nuevafecha.'23:59');
    $this->db->where('recordado != '.'"si"');
    $this->db->where('identificacion_t3 = identificacion_t12');
    $query = $this->db->get('ps_agenda_t12,ps_paciente_t3')->result();
    foreach ($query as $fila) {
        $data = array('recordado' => "si");
        $this->db->where('idps_agenda_t12',$fila->idps_agenda_t12)->update('ps_agenda_t12',$data);
        if(!empty($fila->telefono_t3)){
          $fcita = strtotime($fila->fecha_programacion_t12);
          $mensaje = "Clínica de Tenjo Ltda. le recuerda su cita de ".$fila->especialidades_t12;
          $mensaje.= "PARA EL DIA ".date("d",$fcita)." de ".$this->Constante->fecha->meses[date("n",$fcita)-1]." de ".date("Y",$fcita)." a las ".date("H",$fcita)." y ".date("i",$fcita)."  con  \n";
          $mensaje.= $fila->nomcompp_t12;
          $mensaje.= "Si no puede asistir le rogamos nos envie un email a clinicadetenjo@hotmail.com";
          //$mensaje.= " DOCUMENTOS QUE DEBE LLEVAR EL DÍA DE LA CITA: . \n";
          //$mensaje.= "ESTADO DE CUENTA, HISTORIA DEL DIA DEL ACCIDENTE, FURIPS, ORDEN DE SERVICIO, HISTORIA CONSULTA, POLIZA SOAT, CEDULA, TARJETA DE PROPIEDAD. \n";
          $mensaje.= " GRACIAS POR PREFERIRNOS.";
          echo strlen($mensaje);
          if(strlen($mensaje)>158){
            //var_dump(strlen($mensaje));
            $numsj = ceil(strlen($mensaje)/200);
            //var_dump($numsj);
            $largomensaje =  floor(strlen($mensaje)/$numsj);
            $largomensaje1 =  strlen($mensaje)-($numsj-1)*200;
            //var_dump($largomensaje);
            //var_dump($largomensaje1);
            $limite = strrpos(substr($mensaje, 0,$largomensaje1)," ");
            $sms = trim(substr($mensaje, 0,$limite));
            $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$fila->telefono_t3]);
            if($res["resultado"]<=0){
              $errorsms = true;
            }else{
              echo "<sript>alert('Hola')</script>";
            }
            
            $mensaje = trim(substr($mensaje,$limite));
            for($i=1;$i<$numsj;$i++){
              $limite = strrpos(substr($mensaje, 0,$largomensaje-$numsj-$i)," ");
              $sms = trim(substr($mensaje, 0,$limite));
              $mensaje = trim(substr($mensaje,$limite));
              
              $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$fila->telefono_t3]);
              if($res["resultado"]<=0){
                $errorsms = true;
              }else{
                echo "Error al enviar mensaje";
              }
            }
            
            if(strlen($arr_mensaje[count($arr_mensaje)-1])>strlen($mensaje)){
              $guiones = str_pad("-", strlen($arr_mensaje[count($arr_mensaje)-1])>strlen($mensaje));
              //var_dump($guiones);
              //var_dump(strlen($mensaje));
              //var_dump(strlen($arr_mensaje[count($arr_mensaje)-1]));
            }
            $sms = trim($mensaje)." ".$guiones;
            $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$fila->telefono_t3]);
            if($res["resultado"]<=0){
              $errorsms = true;
            }
          }else{
            $sms = $mensaje;
            $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$fila->telefono_t3]);
            if($res["resultado"]<=0){
              $errorsms = true;
            }
          }
          
          
          
          /*
          if(is_array($arr_mensaje)){
            foreach($arr_mensaje as $mensaje){
              $res = $this->Util->enviarsms(["texto"=>utf8_encode($mensaje),"destino"=>"57".$fila->telefono_t3]);
              if($res["resultado"]<=0){
                $errorsms = true;
              }
            }
          }
          */
          
          
        }
        $sms = "Le invitamos a escribirnos a clinicadetenjo@hotmail.com";
        var_dump($errorsms);
        //exit;
        $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$fila->telefono_t3]);
      }
  }
  function enviarsms($arrSMS){
    if(!empty($arrSMS["texto"]) && !empty($arrSMS["destino"]) ){
      $usr='soporte@hms.com.co';
      $cnt='0w5DiZjINP';
      $url = "https://sistemasmasivos.com/itcloud/api/sendsms/send.php?user=".urlencode($usr)."&password=".urlencode($cnt)."&GSM=".urlencode($arrSMS["destino"])."&SMSText=".urlencode($arrSMS["texto"]);

      $options = array(
          CURLOPT_RETURNTRANSFER => true,     // return web page
          CURLOPT_HEADER         => false,    // don't return headers
          CURLOPT_FOLLOWLOCATION => true,     // follow redirects
          CURLOPT_ENCODING       => "",       // handle all encodings
          CURLOPT_USERAGENT      => "HMS",    // who am i
          CURLOPT_AUTOREFERER    => true,     // set referer on redirect
          CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
          CURLOPT_TIMEOUT        => 120,      // timeout on response
          CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
          CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
      );

      $ch      = curl_init( $url );
      curl_setopt_array( $ch, $options );
      $content = curl_exec( $ch );
      $err     = curl_errno( $ch );
      $errmsg  = curl_error( $ch );
      $header  = curl_getinfo( $ch );
      curl_close( $ch );

      $header['errno']   = $err;
      $header['errmsg']  = $errmsg;
      $header['content'] = $content;
      $arr_res = preg_split("/, /", $content);
      $header["num"]=$arr_res[0];
      if(!empty($arr_res[1])){
        $arr_estado = explode(" ",$arr_res[1]);
        $header["resultado"]=$arr_estado[0];
      }
      $arrSMS["res"]=$header;
      $this->smshist($arrSMS);
      return $header;
    }
    return false;
  }
  function scape($cadena){
    $arr_scap = array("'",'`');
    return str_replace($arr_scap,'"',$cadena);
  }
  
  function bitacora($usr){
    $arr_datos["idusr_t7"]=$usr;
    $arr_datos["fecha_t7"]=date('Y-m-d H:i:s');
    $arr_datos["url_t7"]=$_SERVER["REQUEST_URI"];
    $arr_datos["urlref_t7"]=$_SERVER["HTTP_REFERER"];
    $arr_datos["consulta_t7"]=$_SERVER["QUERY_STRING"];
    $arr_datos["metodo_t7"]=$_SERVER["REQUEST_METHOD"];
    $arr_datos["server_t7"]=serialize($_SERVER);
    $arr_datos["get_t7"]=serialize($_GET);
    $arr_datos["post_t7"]=serialize($_POST);
    $this->db->insert('ps_bitacora_t7', $arr_datos);
  }
  
  function retdatos($select,$from,$where,$order,$arreglo=true){
    if(!empty($select)){
      $this->db->select($select,false);
    }
    $this->db->from($from,false);
    if(!empty($where)){
      $this->db->where("($where)");
    }
    $this->db->order_by($order,false);
    $query = $this->db->get();
    if ($query->num_rows() > 0){
      if($arreglo==true){
        return $query->result();
      }else{
        return $query->row();
      }
    }
    return false;
  }
  
  function reg_insertar($tabla,$arr_datos){
    $this->db->insert($tabla,$arr_datos);
    if ($this->db->affected_rows() == 1){
       return true;
    }
    return false;
  }
  
  function reg_modificar($tabla,$iddesc,$id,$arr_datos){
    $this->db->where($iddesc,$id);
    $this->db->update($tabla,$arr_datos);
    if ($this->db->affected_rows() >= 0){
       return true;
    }
    return false;
  }
  
  function exportarreporte($html,$tipo,$nombre,$tamaño="a4",$orientacion="landscape"){
    switch($tipo){
      case "doc":
      case "xls":
        $this->output
        ->set_content_type('application/x-msdownload')
        ->set_header("HTTP/1.0 200 OK")
        ->set_header("HTTP/1.1 200 OK")
        ->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT')
        ->set_header("Cache-Control: no-store, no-cache, must-revalidate")
        ->set_header("Cache-Control: post-check=0, pre-check=0")
        ->set_header("Pragma: no-cache")
        ->set_header("Content-Disposition: attachment; filename=$nombre")
        ->set_output($html);
        break;
       case "pdf":
        $this->load->library('my_dompdf');
        $this->my_dompdf->folder('export/');
        $this->my_dompdf->filename($nombre);
        $this->my_dompdf->paper($tamaño, $orientacion);
        $this->my_dompdf->html($html);
        $this->my_dompdf->create();
        break;
     }
  }
  
  function formatonumero($valor,$sdec=".",$smil=",",$ndec="2"){
    return number_format($valor , $ndec, $sdec, $smil);
  }
  
  function elimarch($ruta){
    if(file_exists($ruta)){
      unlink($ruta);
    }
  }
  
  function ahora(){
    switch($this->db->dbdriver){
      case "mssql":
      case "odbc":
        return date('Ymd H:i:s');
        break;
      default:
        return date('Y-m-d H:i:s');
        break;
    }
  }
  
  function prepfecha($fecha){
    switch($this->db->dbdriver){
      case "mssql":
      case "odbc":
        $fecha = str_replace("-","",$fecha);
        break;
    }
    return $fecha;
  }
  
  function formatofechasql($campofecha,$fmto){
    $arr_fmtoselfecha = array(
      "mssql"=>array(
        "d/m/Y"=>" CONVERT(varchar(10),$campofecha,103) ",
        "d/m/Y H"=>" CONVERT(varchar(16),$campofecha,103) "
      ),
      "odbc"=>array(
        "d/m/Y"=>" CONVERT(varchar(10),$campofecha,103) ",
        "d/m/Y H"=>" CONVERT(varchar(16),$campofecha,103) "
      ),
      "mysql"=>array(
        "d/m/Y"=>" DATE_FORMAT($campofecha,'%d/%c/%Y') ",
        "d/m/Y H"=>" DATE_FORMAT($campofecha,'%d/%c/%Y %k:%i') "
      ),
      "mysqli"=>array(
        "d/m/Y"=>" DATE_FORMAT($campofecha,'%d/%c/%Y') ",
        "d/m/Y H"=>" DATE_FORMAT($campofecha,'%d/%c/%Y %k:%i') "
      )
    );
    if(!empty($arr_fmtoselfecha[$this->db->dbdriver][$fmto])){
      return $arr_fmtoselfecha[$this->db->dbdriver][$fmto];
    }else{
      return $campofecha;
    }
  }
  
  function formatofecha($fecha,$fmto=""){
    if(!empty($fecha)){
      if(empty($fmto)){
        $fmto = "Y-m-d";
      }
      //$fecha=date("Y-m-d",strtotime($fecha));
      $fecha=date($fmto,strtotime($fecha));
    }
    return $fecha;
  }
  
  function formatofechahora($fecha,$fmto=""){
    if(!empty($fecha)){
      if(empty($fmto)){
        $fmto = "Y-m-d H:i";
      }
      $fecha=date($fmto,strtotime($fecha));
    }
    return $fecha;
  }
  
  function adicitiempo($fechahora,$tadic){
    $ano=substr($fechahora,0,4);
    $mes=substr($fechahora,5,2);
    $dia=substr($fechahora,8,2);
    $hora=substr($fechahora,11,2);
    $min=substr($fechahora,14,2);
    $nhorafecha=date("Y-m-d H:i:s",mktime($hora,$min+$tadic,0,$mes,$dia,$ano));
    return $nhorafecha;
   }
  
  function insertid(){
    //var_dump($this->db->dbdriver);
    switch($this->db->dbdriver){
      case "mssql":
        $sql = ($ver >= 8 ? "SELECT SCOPE_IDENTITY() AS last_id" : "SELECT @@IDENTITY AS last_id");
        $query = $this->db->query($sql);
        $row = $query->row();
        return $row->last_id;
        break;
      case "odbc":
        $sql = ($ver >= 8 ? "SELECT SCOPE_IDENTITY() AS last_id" : "SELECT @@IDENTITY AS last_id");
        $query = $this->db->query($sql);
        $row = $query->row();
        return $row->last_id;
        break;
      case "mysql":
      case "mysqli":
        return $this->db->insert_id();
        break;
    }
  }
  
  function retjson($datos){
    if(count($datos) > 0){
      foreach($datos as $reg){
        $json[] = array_map(utf8_encode,(array)$reg);
      }
      return json_encode($json);
    }
  }
  
  function arrayid($arreglo,$id){
    $arr_res = false;
    if(is_array($arreglo)){
      foreach($arreglo as $reg){
        $arr_res[$reg->$id]=$reg;
      }
    }
    return $arr_res;
  }
  
  function array_strreplace($dato,$buscado,$reemplazo){
    if(is_object($dato)){
      $obj = true;
      $arr_t = (array)$dato;
    }else{
      $arr_t = $dato;
    }
    foreach($arr_t as $id=>$valor){
      $arrres[$id]=str_replace($buscado, $reemplazo, $valor);
    }
    if($obj){
      return (object)$arrres;
    }else{
      return $arrres;
    }
  }
  
  function envcorreo($destino,$asunto,$mensaje,$por,$pordesc){
    if(is_array($destino)){
      foreach ($destino as $correo){
        if(!empty($destinatarios)){
          $destinatarios.=', ';
        }
        $destinatarios.=$correo;
      }
      unset($destino);
      $destino = $destinatarios;
    }

      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = TRUE;
      //$config['smtp_host'] = 'mail.cargandosa.com';
      //$config['smtp_user'] = 'sgi@cargandosa.com';
      //$config['smtp_pass'] = "construyendo";
      //$config['smtp_port'] = '25';
      $config['mailtype'] = 'html';
      $this->load->library('email');
      $this->email->initialize($config);
      
      $this->email->from($por, $pordesc);
      $this->email->to($destino);
      $this->email->bcc('desarrollo@construyendoweb.com');
      $this->email->subject($asunto);
      $this->email->message($mensaje);
      $this->email->send();
    }
} 
?>