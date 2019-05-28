<div class="row no-padding no-margin">
      <div class="row panel-heading">
        <legend class="no-margin no-padding">
          Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> Edad: <?=$edad?> años
        </legend>
          <div class="form-group">
            <div class="col-lg-3">
              <label class="control-label">Administradora:</label>
              <?=$dathistoria->administradora_t3?>
            </div>
            <div class="col-lg-2">
              <label class="control-label">Servicio:</label>
              <?=$dathistoria->ubicacion_t4?>
            </div>
            <div class="col-lg-3">
              <label class="control-label">Ingreso:</label>
              <?=$dathistoria->fingreso_t4?>
            </div>
            <div class="col-lg-4">
              <label class="control-label">Triage:</label>
              <?=$dathistoria->triage_t4?>
            </div>
          </div>
      </div>
    </div>

<fieldset>
   <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="glyphicon glyphicon-tasks"></i> Procedimientos
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["QUIR"]),'Refresh');?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="glyphicon glyphicon-briefcase"></i> Medicamentos
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?$this->load->view('Asistencial/Historia/l_historia_medicamentos',array("datlprocs"=>$datconsulta->datordenes["PROC"]),'Refresh');?>
      </div>
     </div>
    </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="glyphicon glyphicon-filter"></i> Laboratorios
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["LABO"]),'Refresh');?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <i class="glyphicon glyphicon-picture"></i> Ayudas Dx
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["AYDX"]),'Refresh');?>
      </div>
    </div>
  </div>
 </div>
</fieldset>
<div class="form-group">
  <br/>
  <div class="row text-center">
    <input type="hidden" name='tipoevolucion' value=''>
   <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Generar Factura</button>
  </div>
</div>