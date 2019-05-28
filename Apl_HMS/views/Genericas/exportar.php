<?
  header('Content-Type: ' .$mime);  
  header('Content-Disposition: '.$disp.'; filename="'.$nomarchiv.'"');  
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');  
  header('Content-Type: text/html; charset=UTF-8');  
  header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');  
  header('Pragma: public');  
  if($tipo!="A"){
    echo $contenido;
  }else{
    @readfile($ruta);
  }
?>