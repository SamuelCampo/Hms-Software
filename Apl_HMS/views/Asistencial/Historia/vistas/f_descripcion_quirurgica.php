<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<?php //var_dump($datconsulta) ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend class="no-margin">
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b><br> Edad: <?=$edad?>
        </legend>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-5">
            <label class="control-label">Administradora:</label><br>
            <?=$dathistoria->administradora_t3?>
          </div>
          <div class="col-lg-3">
            <label class="control-label">Servicio:</label><br>
            <?=$dathistoria->ubicacion_t4?>
          </div>
          <div class="col-lg-2">
            <label class="control-label">Fecha Consulta:</label><br>
            <?=$dathistoria->fingreso_t4?>
          </div>
          <div class="col-lg-1">
            <label class="control-label">RH:</label><br>
            <?=$datpaciente->rh_t3?>
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <?if(!empty($datconsulta->dxprincipalcod_t64)){?>
            <div class="col-lg-10">
            <label class="control-label">DX Principal:</label>
            <?=$datconsulta->dxprincipal_t64?>
          </div>
          <?}?>
        </div>
      </div>
      <div class="row paddingh">
<?php  //var_dump($descripcion); ?>
<?php if (!empty($descripcion)): ?>
  <?php $cirujano = $descripcion[0]->cirujano_principal; ?>
  <?php else: ?>  
    <?php $cirujano = $this->Modulo->usr->nombre_t0;    ?>
<?php endif ?>
<form action="<?= site_url('pacientes/quirurgico/'.$this->uri->segment(3).'/guardar') ?>" name="proceso_quirurgico" method="post">
  <div class="">
  <legend>PROFESIONAL OPERATORIO </legend>
      <label for="noident" class="col-lg-2 control-label">Cirujano</label>
      <div class="col-lg-4">
        <select name="cirujano_principal" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select>
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar</label>
      <div class="col-lg-4">
      	<select name="cirujano_auxiliar" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select>
    	</div>
      <label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar2</label>
      <div class="col-lg-4">
      	<select name="cirujano_auxiliar2" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select></div>
<label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar3</label>
      <div class="col-lg-4">
      	<select name="cirujano_auxiliar3" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select></div>
</style>
<legend>PROFESIONALES COMPLEMENTARIOS </legend>


      <label for="noident" class="col-lg-2 control-label">ANESTESIOLOGO</label>
      <div class="col-lg-4">
      	<select name="anesteciologo" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select>
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">AUXILIAR</label>
      <div class="col-lg-4">
      	<select name="anesteciologo_auxiliar" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select>
       </div>
<label for="noident" class="col-lg-2 control-label">INSTRUMENTADOR</label>
      <div class="col-lg-4">
      	<select name="instrumentador" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select>
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">CIRCULANTE</label>
      <div class="col-lg-4">
      	<select name="circulante" id="" class="form-control">
          <option value=""></option>
          <?php foreach ($medicos as $fila): ?>
            <option value="<?= $fila->nomcomp_t10 ?>"><?= $fila->nomcomp_t10 ?></option>
          <?php endforeach ?>
        </select>
       </div>

</style>
<legend>FECHA </legend>


<label for="identiftipo" class="col-lg-2 control-label">Fecha y Hora de Inicio</label>
      <div class="col-lg-4">
       <input name="fecha_inicio" type="text" class="form-control input-sm form_dates" id="nombre medico" placeholder="Fecha y hora de inicio" value="<?= $descripcion[0]->fecha_inicio?>">
       </div>
<label for="identiftipo" class="col-lg-2 control-label">Fecha y Hora de Terminacion</label>
      <div class="col-lg-4">
       <input name="fecha_fin" type="text" class="form-control input-sm form_dates" id="nombre medico" placeholder="Fecha y hora Final" value="<?= $descripcion[0]->fecha_fin?>">
       </div>

</style>
<legend>DIAGNOSTICOS </legend>


<fieldset>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
            <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
          </div>
     </div>     
     <div class="form-group">
          <div class="col-lg-6">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dxtercero" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
            <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
          </div>
     </div>  
</fieldset>   
</style>
<legend>DESCRIPCION DEL PROCEDIMIENTO O ACTO QUIRURGICO</legend>
    <small>Selecciona los procedimientos para esta descripci&oacute;n quirurgica</small>
      <table class="table table-stripped">
        <thead>
          <tr>
            <th></th>
            <th>Descripci&oacute;n</th>
            <th>via</th>
            <th>Principal</th>
            <th>Bilateral</th>
            <th>Realizado</th>
          </tr>
        </thead>
        <?php foreach ($datconsulta->datordenes as $l => $key): ?>
          <?php foreach ($key as $k => $orde): ?>
            <?php foreach ($orde as $m): ?>
              <?php //var_dump($m); ?>
                <tr>
                  <td><input type="checkbox" name="id_orden[]" value="<?= $m->idhist_ordenes_t67 ?>"></td>
                  <td><?= $m->descripcion_t67 ?></td>
                  <!--td><input type="text" name="via[]" class="form-control"></td>
                  <td><input type="checkbox" name="principal[]" value="<?= $m->idhist_ordenes_t67 ?>"></td>
                  <td><input type="checkbox" name="bilateral[]" value="<?= $m->idhist_ordenes_t67 ?>"></td>
                  <td><input type="checkbox" name="realizado[]" value="<?= $m->idhist_ordenes_t67 ?>"></td-->>
                </tr>
            <?php endforeach ?>
          <?php endforeach ?>
        <?php endforeach ?>
      </table>
      <div class="form-group row">
        <label for="viaing" class="col-lg-12 control-label">CIRUGIA O PROCEDIMIENTO </label>
        <div class="col-lg-12">
        <select name="tipo_procedimiento" id="tipo_cirugia" class="form-control">
          <option value=""></option>
          <option value="CRUENTO">CRUENTO</option>
          <option value="INCRUENTO">INCRUENTO</option>
        </select>
        </div>
      </div>
            <div class="form-group row">
        <label for="viaing" class="col-lg-12 control-label" >Tipo de Cirugia </label>
        <div class="col-lg-12">
        <select name="tipo_cirugia" id="tipo_cirugia" class="form-control">
          <option value=""></option>
          <option value="UNICA">UNICA</option>
          <option value="BILATERAL">BILATERAL</option>
        </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="viaing" class="col-lg-12 control-label">SUSPENSION Y CONVERSION</label>
        <div class="col-lg-12">
        <textarea name="obs" cols="40" rows="3" class="form-control">
         <?=$dathistoria->obs_t4;?></textarea> 
        </div>
      </div>
      <fieldset>  
      <legend>DIAGNOSTICO POST OPERATORIO</legend>       
            <div class="form-group">
                <div class="col-lg-6">        
                  <label for="dxsecundariocod">DX Secundario</label>
                  <input name="dxsecundario" type="text" class="form-control" id="dxsecundario" placeholder="Dx Principal" value="<?=$datconsulta->dxsecundario_t64?>" >
                  <input name="dxprincipalcod" type="hidden" id="dxsecundariocod" value="<?=$datconsulta->dxsecundariocod_t64?>">
                </div>
            </div>    
            <div class="form-group">
                <div class="col-lg-6">
                <label for="dxtercero">Observacion de DX Principal</label>
                  <input name="dxtercero" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
                  <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
                </div>
            </div>
      </fieldset>
      <fieldset>
        <legend>COMPLICACIONES</legend>
        <div>
          <div class="form-group">
            <textarea name="complicaciones" id="" cols="30" rows="10" class="form-control"><?= $descripcion[0]->complicaciones  ?></textarea>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <legend>PROCEDIMIENTOS INTRAOPERATORIO NO QUIRURGICOS</legend>
        <div>
          <div class="form-group">
            <textarea name="procedimientos_intraoperatorios" id="" cols="30" rows="10" class="form-control"><?= $descripcion[0]->procedimientos_intraoperatorios  ?></textarea>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <legend>MEDICACION EN EL BLOCK</legend>
        <div>
          <div class="form-group">
            <textarea name="medicacion_en_block" id="" cols="30" rows="10" class="form-control"><?= $descripcion[0]->medicacion_en_block  ?></textarea>
          </div>
        </div>
      </fieldset>
      <fieldset>
        <legend>DESCRIPCION QUIRURGICA</legend>
        <div>
          <div class="form-group">
            <textarea name="descripcion_quirurgica" id="" cols="30" rows="10" class="form-control"><?= $descripcion[0]->descripcion_quirurgica  ?></textarea>
          </div>
        </div>
      </fieldset>
      <button class="btn" type="submit">Guardar</button>
</div>
</form>
<fieldset>
  <legend>Historial de Ordenes</legend>
  <table class="table">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Cirujano Principal</th>
        <th>hora de inicio</th>
        <th>Hora Finalizada</th>
        <th>Acci&oacute;n</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($descripcion as $fila): ?>
      <tr>
        <th><?= $fila->fmod_quirurgica ?></th>
        <th><?= $cirujano ?></th>
        <th><?= $fila->fecha_inicio ?></th>
        <th><?= $fila->fecha_fin ?></th>
        <th><a href="<?=site_url("pacientes/quirurgico/".$dathistoria->idps_historia_t4."/imprimir/".$fila->id_desquirurgica)?>"><i class="fa fa-print"></i></a></th>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</fieldset>
</div>