<div class="row">
  <?
    if(is_object($tercero)){
      $tercerdesc = $tercero->tercerref_t16." ".$tercero->espec_t16." ".$tercero->desc_t16;
    }
  //var_dump($this->Modulo->usr->roles);
  //exit;
  if(!empty($mensaje)){
    echo '<div class="row col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
  //var_dump($this->Modulo->usr->roles["rolprinc"]->codrol_t2);
  if($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADT' || $this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM' || $this->Modulo->usr->su_t0=='SI'  ){
  ?>
  <form class="form-horizontal" role="form" action="<?=site_url('pacientes/agendat/medico')?>" method="post" >
    <div class="form-group">
      <label for="especialidades" class="col-lg-2 control-label">Médico</label>
      <div class="col-lg-8">
        <input type="text" name="medico" id="medico" placeholder="IPS - ESPECIALIDAD - MEDICO" class="form-control" value="<?=$tercerdesc?>" />
        <input type="hidden" name="medicos" id="medicos" value="<?=$tercero->cod_t16?>" />
      </div>
      <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" title="Cargar">
        <span class="glyphicon glyphicon-refresh"></span>
      </button>
    </div>
 </form>
  <?}else{?>
    <input type="hidden" id="medicos" value="<?=$this->Modulo->usr->identificacion_t0?>" />
  <?}?>
  <div class="box box-primary">
    <div class="box-body no-padding">
        <!-- THE CALENDAR -->
        <div id="calendar"></div>
    </div><!-- /.box-body -->
  </div><!-- /. box -->
</div><!-- /.col -->