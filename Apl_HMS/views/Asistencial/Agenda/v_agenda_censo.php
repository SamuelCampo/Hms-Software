<?if($this->Modulo->verifacceso("ASAGE")){
    if(defined('HMSAgendaT')){
      $url = site_url('/pacientes/agendat');
    }else{
      $url = site_url('/pacientes/agenda');
    }
  ?> 

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
    <div class="col-lg-6">
        <div class="box box-primary">
          <div class="panel-heading <?=$this->Planthtml->estilo->colorprinc?> cajapanelprinctit">
            <h3 class="panel-title "><a href="<?=$url?>">Agenda</a></h3>
            <input type="hidden" id="medicos" value="<?=$this->Modulo->usr->identificacion_t0?>" />
          </div>
            <div class="box-body no-padding">
                <!-- THE CALENDAR -->
                  <?php if ($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6 == "SUP"): ?>
                    <div id="calendar"></div>
                  <?php endif ?>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
    </div><!-- /.col -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
<style> 
    #sortable{
      width: 100%;
      float: left;
      list-style: none;
    }
    .ui-state-default{
      box-shadow: 5px 5px 5px 1px#ccc;
      width: 23%;
      margin: 1%;
      height: 200px;
      float: left;
      padding: 5px;
    }
</style>
<!--<ul id="sortable">
  <li class="ui-state-default text-center" style="background-color: #29b6f6; color:white">
    <h3>Pacientes en Hospitalización</h3>
    <span style="font-size: 40pt;"><?=$numcensohos?></span>
    <img style="position: relative; left: 200px;bottom: 80px" width="150" src="https://www.mienlacemedico.com/zihuatanejo/wp-content/uploads/2017/07/rect21.png" alt="hospitalizacion" class="img-responsive">
  </li>
  <li class="ui-state-default" style="background-color: #f44336; color: white;">
    <h3>Pacientes en Urgencias</h3>
    <span style="font-size: 40pt;"><?=$numcensourg?></span>
    <img style="position: relative; left: 200px;bottom: 50px" width="70" src="http://gruposas.es/images/vida.png" alt="hospitalizacion" class="img-responsive">
  </li>
  <li class="ui-state-default" style="background-color: #43a047; color:white">
    <h3>Pacientes en Observacion</h3>
    <span style="font-size: 40pt;"><?=$numcensoobs?></span>
    <img style="position: relative; left: 200px;bottom: 50px" width="70" src="https://www.clinicageneraldelnorte.com/wp-content/uploads/2018/05/icono-cardiovascular.png" alt="hospitalizacion" class="img-responsive">
  </li>
  <li class="ui-state-default" style="background-color: #1565c0; color: white">
    <h3>Pacientes en Consulta Externa</h3>
    <span style="font-size: 40pt;">21</span>
    <img style="position: relative; left: 200px;bottom: 50px" width="70" src="http://www.brasil.gov.br/editoria/economia-e-financas/2018/03/EDUCACAO.png" alt="hospitalizacion" class="img-responsive">
  </li>
  <li class="ui-state-default" style="width: 48% !important; background-color: transparent !important; border: none; height: auto !important;"><canvas id="popChart" style="width: 100%"></canvas></li>
  <li class="ui-state-default" style="width: 48% !important; background-color: transparent !important; border: none; height: auto !important;"><canvas id="densityChart" style="width: 48% !important; background-color: transparent !important; border: none; height: auto !important;"></canvas></li>
</ul>-->

</div>
<?}?>