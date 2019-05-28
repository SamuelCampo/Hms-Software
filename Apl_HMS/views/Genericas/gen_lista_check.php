<?
  if($datos!=false){
    echo '<div class="form-control" style="overflow:auto; height:'.$filas.'em;">    ';
    foreach($datos as $fila){
      $selected='';
      if(is_array($actual)){
        foreach($actual as $filaact){
          if($fila->$id==$filaact->$id){
            $selected = 'checked';
            break;
          }else{
            $selected='';
          }
        }
      }elseif($fila->$id==$actual){
        $selected = 'checked';
      }
      echo '<input class="form-control" type="checkbox" data-size="mini" name="'.$nombre.'[]" '.$selected.' value="'.$fila->$id.'" style="font-size:.8em;" />'.$fila->$descrip.'<br/>';
    }
    echo '   </div>    ';
  }
?>