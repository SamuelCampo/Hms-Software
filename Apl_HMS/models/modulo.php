<?
class Modulo extends CI_Model {
  var $error;
  var $llave;
  var $baseurl;
  var $alm_arch;
  var $config_cardoc;
  var $msjerror;
  var $usr;
  var $modencab;
  var $refer;
  var $collation;
  var $modulos;
  var $infoentidad;
  var $perfilacceso;

  function __construct(){
    parent::__construct();
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $this->llave = HMSConfLlave;
    $this->formaut = base_url();
    $this->alm_arch = FCPATH.'docs';
    $this->baseurl = substr(base_url(),0,strpos(base_url(),'/'.HMSConfEntidad.'/'))."/".HMSConfVersion;
    $this->infoentidad = $this->Entidad->obtener();
    $this->defap = unserialize(mcrypt_decrypt(MCRYPT_RIJNDAEL_128,'HMSK',base64_decode(HMSLicencia),MCRYPT_MODE_CBC));
    //var_dump($this->defap); exit;
    //var_dump($this->infoentidad); exit;
    //echo base64_decode('VkVUZWE5VWg4UXFZWklaMkVLbUVVUWdsS2NvM1BFdWdRcUxwcWpFQTBEZ3NsWXBFZWRuUU4xNnJJeHQybVNjMmZiNHYrUXRXbQ==');
    
    if(is_array($this->defap->servicios)){
      foreach($this->defap->servicios as $servicio){
        $this->Constante->arr_servicios[]=(object)array("destino"=>$servicio);
      }
      $this->Constante->arr_servicios[] = (object)array("destino"=>"UCI");
      $this->Constante->arr_servicios[] = (object)array("destino"=>"UCIN");
      $this->Constante->arr_servicios[] = (object)array("destino"=>"FACTURACION Y GLOSAS");
    }
    if(is_array($this->defap->modulos)){
      foreach($this->defap->modulos as $modulo){
        if(!empty($this->modulos)){
          $this->modulos.='-';
        }
        $this->modulos.=$modulo->modulo;
      }
    }
    
    $query = $this->db->get('ps_serviciosdef_t90');
    foreach ($query->result() as $reg){
      $this->Constante->arr_defservcios[$reg->servicio_t90]=$reg;
    }
    
    //var_dump($this->modulos);
    //exit;
    //var_dump($this->Constante->arr_servicios); exit;
    $this->validasesion();
    $this->perfilcarga();
    //exit;
    //var_dump($this->perfilacceso);
    //exit;
  }
  
  function perfilcarga(){
    if(is_array($this->usr->roles)){
      foreach($this->usr->roles as $servicio=>$arr_rolserv){
        if(is_array($arr_rolserv)){
          foreach($arr_rolserv as $rol){
            $arr_rolsusr[]=$rol;
          }
        }
      }
    }
    $arr_modslic = explode("-",$this->modulos);
    //var_dump($arr_modslic); 
    //var_dump($arr_rolsusr); 
    //exit;
    $this->db->from('ps_rolmodobj_t76');
    $this->db->where_in('modulo_t76', $arr_modslic);
    if($this->usr->su_t0!="SI"){
      $this->db->where_in('rol_t76', $arr_rolsusr);
    }
    $query = $this->db->get();
    $arr_perfil = $query->result();
    //var_dump($arr_perfil); exit;
    //exit;
    if (count($arr_perfil) > 0){
       foreach($arr_perfil as $perfil){
         $this->perfilacceso[$perfil->objeto_t76]=$perfil->acceso_t76;
         $this->perfilacceso[$perfil->modulo_t76]=$perfil->acceso_t76;
       }
    }
    //var_dump($this->modulos);
    //var_dump($this->perfilacceso);
    //exit;
  }
  
  function verifacceso($obj){
    //var_dump($this->perfilacceso);
    //exit;
    if($this->usr->su_t0=='SI'){
      return true;
    }
    //var_dump($this->usr->su_t0);
    //var_dump($this->perfilacceso);
    //var_dump($this->usr);
    //exit;
    if(empty($this->perfilacceso[$obj])){
      return false;
    }
    return true;
  }
  
  function base_url($url){
    return $this->baseurl."/".$url;
  }
  
  function confmenu($datos,$id,$descrip,$actual=""){
    $arr_menu["datos"]=$datos;
    $arr_menu["id"]=$id;
    $arr_menu["descrip"]=$descrip;
    $arr_menu["actual"]=$actual;
    //var_dump($arr_menu); exit;
    return $arr_menu;
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
  
  function retdatos($select,$from,$where,$order){
    if(!empty($select)){
      $this->db->select($select);
    }
    $this->db->from($from);
    if(!empty($where)){
      $this->db->where("($where)");
    }
    if(!empty($order)){
      $this->db->order_by($order);
    }
    $query = $this->db->get();
    if ($query->num_rows() > 0){
       return $query->result();
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
  
  function validasesion(){
    $idusr = $this->input->post('usr');
    if(empty($idusr)){
      $usr = $this->session->userdata('usr');
      $idusr = $usr->idusr;
      unset($usr);
    }
    //$this->bitacora($idusr);
    if($this->input->post($this->input->post('id')) == hash_hmac('md5',$this->input->post('id'),$this->llave)){
      $usr = $this->Usuario->validausuario($this->input->post('usr'),$this->input->post('cnt'),$this->llave);
      if($usr==false || $usr->estado!='ACTIVO'){
        $msj = urlencode(base64_encode("Error de autenticaci&oacute;n al validar el acceso del usuario, por favor verifique y vuela a intentarlo."));
        header("Location: ".$this->formaut."ingreso.php?msj=$msj&tipo=error");
        exit;
      }
      $this->usr = $usr;
      $arr_sesion = array(
          'usr'=>$this->usr
      );
      $this->session->unset_userdata('usr');
      $this->session->set_userdata($arr_sesion);
      $this->verifconcurr($idusr);
      $rutaini = 'inicio';
      switch ($this->usr->roles["rolprinc"]->cod_rol_t6){
        case 'EXTSO':
          $rutaini = "asistencialsaludocupacional/admisiones";
          break;
      }
      
      if(defined('HMSConfRutaIni')){
        $rutaini = HMSConfRutaIni; 
      }
      redirect($rutaini,'refresh');
    }
    elseif($this->session->userdata('usr')){
      $this->usr = $this->session->userdata('usr');
      $this->verifconcurr($this->usr->idusr);
    }else{
      $contr = $this->uri->segment('2');
      if($contr!=='agendarCitaCliente'){
      $msj = urlencode(base64_encode("Error de autenticaci&oacute;n al validar la sesión, por favor verifique y vuela a intentarlo."));
      header("Location: ".$this->formaut."ingreso.php?msj=$msj&tipo=error");
      exit;
    }
  }
    //$this->usr->roles = $this->Usuario->perf_obtener($this->usr->idps_usuarios);
  }
  
  function verifconcurr($idusr){
    $idsesion = $this->session->userdata('session_id');
    $this->db->from('ps_sesion_t78');
    $this->db->where("idusr_t78",$idusr);
    $this->db->where("estado_t78",'ACTIVA');
    $query = $this->db->get();
    if ($query->num_rows() > 0){
      $sesionactiva = $query->row();
    }
    if($idsesion==$sesionactiva->idsesion_t78){
      $this->psesion_actualiza($idusr);
      return true;
    }elseif(!is_null($sesionactiva->idsesion_t78)){
      $this->db->from('ps_sesion_t78');
      $this->db->where("idsesion_t78",$idsesion);
      $query = $this->db->get();
      if ($query->num_rows() > 0){
        $sesion = $query->row();
      }
      if($sesion->estado_t78=='FINALIZADA'){
        $this->session->destroy();
        $msj = urlencode(base64_encode("Esta sesión no es válida y ha sido finalizada, por favor vuela a ingresar."));
        header("Location: ".$this->formaut."ingreso.php?msj=$msj&tipo=error");
        exit;
      }
      $this->psesion_finalizar($idusr);
      $this->psesion_crear($idusr);
      return true;
    }else{
      $this->db->from('ps_sesion_t78');
      $this->db->where("idsesion_t78",$idsesion);
      $query = $this->db->get();
      if ($query->num_rows() > 0){
        $sesion = $query->row();
      }
      if($sesion->idsesion_t78==$idsesion){
        $this->session->destroy();
        $msj = urlencode(base64_encode("Esta sesión no es válida y ha sido finalizada, por favor vuela a ingresar."));
        header("Location: ".$this->formaut."ingreso.php?msj=$msj&tipo=error");
        exit;
      }elseif(is_null($sesion->idsesion_t78)){
        $this->psesion_crear($idusr);
        return true;
      }else{
        $this->session->destroy();
        $msj = urlencode(base64_encode("Error al validar la sesión, por favor vuelva a ingresar."));
        header("Location: ".$this->formaut."ingreso.php?msj=$msj&tipo=error");
        exit;
      }
    }
    $this->session->destroy();
    $msj = urlencode(base64_encode("Error al validar la sesión, actualmente existe otra sesión activa, por favor verifique y vuela a intentarlo."));
    header("Location: ".$this->formaut."ingreso.php?msj=$msj&tipo=error");
    exit;
  }
  
  function psesion_crear($idusr){
    $arr_datsesion['estado_t78']='ACTIVA';
    $arr_datsesion['idusr_t78']=$idusr;
    $arr_datsesion['idsesion_t78']=$this->session->userdata('session_id');
    $arr_datsesion["fexpira_t78"]=$this->prepfecha(date('Y-m-d H:i:s',time()+HMSVidaSesion));
    $arr_datsesion["fcreada_t78"]=$this->ahora();
    $this->db->insert('ps_sesion_t78',$arr_datsesion);
  }
  
  function psesion_actualiza($idusr){
    $arr_datsesion["fexpira_t78"]=$this->prepfecha(date('Y-m-d H:i:s',time()+HMSVidaSesion));
    $this->db->where("idsesion_t78",$this->session->userdata('session_id'));
    $this->db->update('ps_sesion_t78',$arr_datsesion);
  }
  
  function psesion_finalizar($idusr){
    $arr_datsesion['estado_t78']='FINALIZADA';
    $arr_datsesion["ffinalizada_t78"]=$this->ahora();
    $this->db->where("idusr_t78",$idusr);
    $this->db->where("estado_t78",'ACTIVA');
    $this->db->update('ps_sesion_t78',$arr_datsesion);
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
  
  function formatofecha($fecha){
    if(!empty($fecha)){
      $fecha=date("Y-m-d",strtotime($fecha));
    }
    return $fecha;
  }
  
  function formatofechahora($fecha){
    if(!empty($fecha)){
      $fecha=date("Y-m-d H:i",strtotime($fecha));
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
        return @mysql_insert_id($this->db->conn_id);
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
  
  function objarrasoc($arreglo,$idobj){
    $arr_res = false;
    if(is_array($arreglo)){
      foreach($arreglo as $objeto){
        if(!empty($objeto->$idobj)){
          $arr_res[$objeto->$idobj]=$objeto;
        }
      }
    }
    return $arr_res;
  }
  
  function arrayid($arreglo,$id){
    return $this->Util->arrayid($arreglo,$id);
  }
  
} 
?>