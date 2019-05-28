<div class="row">
  <?
  //var_dump($this->Modulo->usr->roles);
  //exit;
  if(!empty($mensaje)){
    echo '<div class="row col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
  //var_dump($this->Modulo->usr->roles["rolprinc"]->codrol_t2);
  if($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADT' || $this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM' || $this->Modulo->usr->su_t0=='SI'  ){
  ?>
  <form class="form-horizontal" role="form" action="<?=site_url('pacientes/agendainterc/medico')?>" method="post">
    <input type="hidden" name="interc" value="<?=$aginterc_interc?>">
    <input type="hidden" name="espec" value="<?=$aginterc_espec?>">
    <div class="form-group">
      <label for="especialidades" class="col-lg-2 control-label">Especialidades</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="especialidades" id="especialidades" >
          <option value="">SELECCIONE ESPECIALIDAD</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico(),"idps_especialidades_t11","especialidades_t9",$aginterc_espec))?>
        </select>
      </div>
      <label for="medico" class="col-lg-1 control-label">MEDICO</label>
      <div class="col-lg-3" id="menumedicosxespec">

        <select class="form-control input-sm" name="medicos" id="medicos">
          <option value="">SELECCIONE MEDICO</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico($aginterc_espec),"numero_identificacion_t10","nomcomp_t10",$aginterc_med))?>
        </select>
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