  <?
    if(empty($size)){
      $size="mini";
    }
    if(empty($toff)){
      $toff="No";
    }
    if(empty($ton)){
      $ton="Si";
    }
    if($btswitchini==false){
      $dataswitchnoinit = 'data-switch-no-init';
    }
  ?>
  <input <?=$dataswitchnoinit?> data-size="<?=$size?>" data-animate="<?=$anim?>" data-off-text="<?=$toff?>" data-on-text="<?=$ton?>" type="<?=$tipo?>" name="<?=$nombre?>" id="<?=$nombre?>" value="<?=$valor?>" <?=$disabled?>
  <?
    if($actual==$valor){
      ?>
         checked="checked"
      <?
    }
  ?>       
  >