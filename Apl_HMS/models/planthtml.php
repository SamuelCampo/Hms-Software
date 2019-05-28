<?
class Planthtml extends CI_Model {
  var $titmod;
  var $cont;
  var $menu;
  var $menu_admin;
  var $menumod;
  var $menufunc;
  var $tipoventana;
  var $arr_ruta;
  var $urlpost;
  var $modinfo;
  var $limpia;
  var $estilo;

  function __construct(){
    parent::__construct();
    $this->output->cache(0);
    $this->estilo->colorprinc = "bg-navy";
  }
  
  function generar(){
    //var_dump($this->Modulo->modulos); exit;
    if($this->limpia==true){
      $this->load->view('Plantilla/v_plantilla_limp',$this->cont,'refresh');
    }else{
      $this->load->view('Plantilla/v_plantilla',$this->cont,'refresh');
    }
  }
  
  function ucwords($cad){
    return mb_convert_case($cad,MB_CASE_TITLE,"ISO-8859-1");
  }
  
  function mayusc($cad){
    return mb_convert_case($cad,MB_CASE_UPPER,"ISO-8859-1");
  }
  
  function solonumletra($cadena){
    $cadena = str_replace("á","a",$cadena);
    $cadena = str_replace("Á","A",$cadena);
    $cadena = str_replace("é","e",$cadena);
    $cadena = str_replace("É","E",$cadena);
    $cadena = str_replace("í","i",$cadena);
    $cadena = str_replace("Í","I",$cadena);
    $cadena = str_replace("ó","o",$cadena);
    $cadena = str_replace("Ó","O",$cadena);
    $cadena = str_replace("ú","u",$cadena);
    $cadena = str_replace("Ú","U",$cadena);
    $cadena = str_replace("ñ","n",$cadena);
    $cadena = str_replace("Ñ","N",$cadena);
    $cadena = preg_replace("/[^a-zA-Z0-9]/","", $cadena);
    return $cadena;
  }
  
  function checradio($val,$valsel,$valret=""){
    $res = "&nbsp;&nbsp;";
    if($val==$valsel){
      if(!empty($valret)){
        if($valret===true){
          $res = $val;
        }else{
          $res = $valret;
        }
      }else{
        $res = 'checked="checked"';
      }
    }
    return $res;
  }
}
?>