<?
  if($datos!=false){
    foreach($datos as $fila){
      $selected='';
      if(is_array($actual)){
        if(array_search($fila->$id,$actual)===false){
          $selected='';
        }else{
          $selected = 'selected="selected"';
        }
      }elseif($fila->$id==$actual){
        $selected = 'selected="selected"';
      }
      echo '<option '.$selected.' value="'.$fila->$id.'">'.$fila->$descrip.'</option>';
    }
  }
?>