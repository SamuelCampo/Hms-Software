<?
  if(is_array($dat_ini_interc) && ($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADT' || $this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM' || $this->Modulo->usr->su_t0=='SI' )){?>
    <div class="col-lg-6">
        <div class="box box-primary">
          <div class="panel-heading <?=$this->Planthtml->estilo->colorprinc?> cajapanelprinctit">
            <h3 class="panel-title ">Interconsulta</h3>
          </div>
            <div class="box-body no-padding">
              <?foreach($dat_ini_interc as $espec=>$arr_espec){
                if(is_array($arr_espec)){?>
                <label>&nbsp;&nbsp;<?=$espec?></label><br><?
                  foreach($arr_espec as $proc=>$arr_espec){
                    if(is_array($arr_espec)){?>
                      <label style="font-size:.8em">&nbsp;&nbsp;<?=$proc?></label>
                      <ul class="list-group">
                      <?foreach($arr_espec as $reginterc){?>
                        <li class="list-group-item"><a href="<?=site_url('pacientes/agendainterc/espec/'.$reginterc->idespecialidad_t67."/interc/".$reginterc->idhist_ordenes_t67)?>"><?=$reginterc->identificacion_t3?> <?=$reginterc->nomcomp_t3?></a></li>
                      <?}?>
                      </ul>
                  <?}}}
              }?>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
    </div><!-- /.col -->
<?}?>