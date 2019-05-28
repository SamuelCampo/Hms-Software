<?
  $arr_modsinicio = explode(",",HMSConfModsInicio);
  //var_dump($arr_modsinicio);
  if(is_array($arr_modsinicio)){
    foreach($arr_modsinicio as $v_mod){
      if(!empty($v_mod)){
        $this->load->view('Inicio/v_'.$v_mod);
      }
    }
  }
?>