<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>PROFESIONAL OPERATORIO </legend>


      <label for="noident" class="col-lg-2 control-label">Cirujano</label>
      <div class="col-lg-4">
        <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar2</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
<label for="identiftipo" class="col-lg-2 control-label">Cirujano Auxiliar3</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>


</style>
<legend>PROFESIONALES COMPLEMENTARIOS </legend>


      <label for="noident" class="col-lg-2 control-label">ANESTESIOLOGO</label>
      <div class="col-lg-4">
        <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">AUXILIAR</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
<label for="noident" class="col-lg-2 control-label">INSTRUMENTADOR</label>
      <div class="col-lg-4">
        <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
      <label for="identiftipo" class="col-lg-2 control-label">CIRCULANTE</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>

</style>
<legend>FECHA </legend>


<label for="identiftipo" class="col-lg-2 control-label">Fecha y Hora de Inicio</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
       </div>
<label for="identiftipo" class="col-lg-2 control-label">Fecha y Hora de Terminacion</label>
      <div class="col-lg-4">
       <input name="nombre medico" type="text" class="form-control input-sm" id="nombre medico" placeholder=" Nombre cirujano" value="<?=$datpaciente->nomcom_t10;?> <?=$datpaciente->nomcom_t10;?>">
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
<fieldset>          
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxsecundariocod">DX Secundario</label>
            <input name="dxsecundario" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxsecundario_t64?>" required="">
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



</style>
<legend>DESCRIPCION DEL PROCEDIMIENTO QUIRURGICO </legend>



      
        <div class="form-group no-padding no-marging">
          <div class="col-lg-6 text-center"><b>Procedimiento</b></div>
          <div class="col-lg-1 text-center"><b>Via</b></div>
          <div class="col-lg-2 text-center"><b>Observación</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" onclick="btnagregarordenprocs()"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding" id="plantordprocs_<?=$idtipoproc?>">
          <div class="col-lg-6 no-margin no-padding">
            <input name="orden[procs][procedimmiento][]" type="text" class="form-control input-sm cump_desc" id="cump_desc_<?=$idtipoproc?>" placeholder="Procedimiento" requiered onfocus="autocompcump('<?=$idtipoproc?>')">
            <input name="orden[procs][procedimmientocod][]" type="hidden" id="cupcodigo_<?=$idtipoproc?>" value="">
          </div>
          <div class="col-lg-1 no-margin no-padding">
            <input name="orden[procs][cantidad][]" type="text" class="form-control input-sm" id="proc_cantidad_<?=$idtipoproc?>" placeholder="Via" value="" requiered>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <input name="orden[procs][observacion][]" type="text" class="form-control input-sm" id="proc_observ_<?=$idtipoproc?>" placeholder="Observación" >
          </div>
</div>
          
<div class="form-group row">
                 
      <label for="prinombre" class="col-lg-2 control-label">Tipo de Anestesia</label>
      <div class="col-lg-6 text-center">
        <select class="form-control input-sm" name="rh"  id="rh" value="<?=$datpaciente->rh_t3;?>" >
         <option></option>
         <option id="local">Local</option>
         <option id="General">General</option>         
        </select>
      </div>
</div>
<div class="form-group row">
        <label for="viaing" class="col-lg-12 control-label">Observaciones</label>
        <div class="col-lg-12">
        <textarea name="obs" cols="40" rows="3" class="form-control">
         <?=$dathistoria->obs_t4;?></textarea> 
        </div>
      </div>
      