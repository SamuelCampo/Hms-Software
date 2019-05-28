<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
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
        <input name="cirujano_principal" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?= $cirujano?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar</label>
      <div class="col-lg-4">
       <input name="cirujano_auxiliar" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->cirujano_auxiliar ?> "></div>
      <label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar2</label>
      <div class="col-lg-4">
       <input name="cirujano_auxiliar2" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->cirujano_auxiliar2 ?> "></div>
<label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar3</label>
      <div class="col-lg-4">
       <input name="cirujano_auxiliar3" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->cirujano_auxiliar3 ?> "></div>
</style>
<legend>PROFESIONALES COMPLEMENTARIOS </legend>


      <label for="noident" class="col-lg-2 control-label">ANESTESIOLOGO</label>
      <div class="col-lg-4">
        <input name="anesteciologo" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->anesteciologo?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">AUXILIAR</label>
      <div class="col-lg-4">
       <input name="anesteciologo_auxiliar" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->anesteciologo_auxiliar?>">
       </div>
<label for="noident" class="col-lg-2 control-label">INSTRUMENTADOR</label>
      <div class="col-lg-4">
        <input name="instrumentador" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->instrumentador?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">CIRCULANTE</label>
      <div class="col-lg-4">
       <input name="circulante" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$descripcion[0]->circulante ?>">
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
<legend>DESCRIPCION DEL PROCEDIMIENTO QUIRURGICO </legend>



      
        <div class="form-group no-padding no-marging">
          <div class="col-lg-6 text-center"><b>Procedimiento</b></div>
          <div class="col-lg-1 text-center"><b>Via</b></div>
          <div class="col-lg-3 text-center">
            <div class="row">
              <div class="col-md-3"><label for="#">Principal</label></div>
              <div class="col-md-3"><label for="#">Bilateral</label></div>
              <div class="col-md-3"><label for="#">Realizado</label></div>
            </div>
          </div>
          <div class="col-lg-1 text-center" style="">
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" onclick="btnagregarprocsdescqxs()"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding procedimientoQ" id="procedimientoQ">
          <div class="col-lg-6 no-margin no-padding">
            <input name="orden[procedimmiento][]" type="text" class="form-control input-sm cump_desc" id="cump_desc_PROC" placeholder="Procedimiento" requiered onfocus="autocompcump('<?="PROC"?>')">
            <input name="orden[procedimmientocod][]" type="hidden" id="cupcodigo_<?=$idtipoproc?>" value="">
          </div>
          <div class="col-lg-1 no-margin no-padding">
            <input name="orden[cantidad][]" type="text" class="form-control input-sm" id="proc_cantidad_<?=$idtipoproc?>" placeholder="Via" value="" requiered>
          </div>
          <div class="col-lg-3 no-margin no-padding">
           <div class="row">
            <div class="col-md-1"></div>
             <div class="col-md-3"><input type="checkbox" name="orden[principal][]"></div>
             <div class="col-md-3"><input type="checkbox" name="orden[bilateral][]"></div>
             <div class="col-md-3"><input type="checkbox" name="orden[realizado][]"></div>
             <div class="col-md-1"></div>
           </div>
          </div>
                  <div class="row">
          <div class="form-group no-padding">
          <label for="prinombre" class="col-lg-12 control-label">Tipo de Anestesia</label>
            <div class="col-lg-6  no-margin no-padding">
              <select class="form-control input-sm" name="orden[tipo_anestecia][]"  id="rh" value="<?=$datpaciente->rh_t3;?>" >
               <option></option>
               <option value="local">Local</option>
               <option value="General">General</option>         
              </select>
            </div>
        </div>
    </div>
        </div>
        <div class="clonar"> </div>
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
                  <input name="dxsecundario" type="text" class="form-control" id="dxsecundario" placeholder="Dx Principal" value="<?=$datconsulta->dxsecundario_t64?>" required="">
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
        <th><a href="<?=site_url("pacientes/quirurgico/".$dathistoria->idps_historia_t4."/imprimir/".$descripcion[0]->id_desquirurgica)?>"><i class="fa fa-print"></i></a></th>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</fieldset>
</div>