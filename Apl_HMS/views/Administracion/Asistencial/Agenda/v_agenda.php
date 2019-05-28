<style>
  a .fc-time-grid-event .fc-v-event .fc-event .fc-start .fc-end .fc-short{
    bottom: 0px !important;
  }
</style>
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
  <form class="form-horizontal" role="form" action="<?=site_url('pacientes/agenda/medico')?>" method="post">
    <?if(!empty($ordenref)){?>
      <input type="hidden" id="ordenref" name="ordenref" value="<?=$ordenref?>" />
    <?}?>
    <div class="form-group">
      <label for="especialidades" class="col-lg-2 control-label">Especialidades</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="especialidades" onchange="med_ret(this.options[this.selectedIndex].value)" id="especialidades" >
          <option value="">SELECCIONE ESPECIALIDAD</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico(),"idps_especialidades_t11","especialidades_t9",$agendaunimed->idps_especialidades_t11))?>
        </select>
      </div>
      <label for="medico" class="col-lg-2 control-label">MEDICO</label>
      <div class="col-lg-3" id="menumedicosxespec">
        <?
          if($agendaunimed!==false){
            ?>
        <select class="form-control input-sm" name="medicos" id="medicos">
          <option value="">SELECCIONE MEDICO</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico($agendaunimed->idps_especialidades_t11),"numero_identificacion_t10","nomcomp_t10",$agendaunimed->idps_personal_t11))?>
        </select>
            <?
          }
        ?>
        <input type="hidden" name="fecha_programacion" id="fecha_programacion">
      </div>
      <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" title="Cargar">
        <span class="glyphicon glyphicon-refresh"></span>
      </button>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="input-group">
          <div class="form_date" style="margin-left: -30px"></div>
        </div>
      </div>
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