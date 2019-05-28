<?
  //var_dump($datconsulta->datevoldiariaact["ENFERMERÍA"]->concep["pendientes"]->valor_t83);
?>
  <fieldset>
    <legend><strong>Impresión Diagnóstica</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">        
        <label for="dxprincipalcod">DX Principal</label>
        <input name="evolmed[concep][dxprincipal]" type="text" class="form-control" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="" id="dxprincipal" >
        <input name="evolmed[concep][dxprincipalcod]" type="hidden" value="<?=$datconsulta->dxprincipalcod_t64?>" id="dxprincipalcod" >
      </div>
      <div class="col-lg-6">        
        <label for="dxrelprincipalcod">DX Relacionado con el Principal</label>
        <input name="evolmed[concep][dxrelprincipal]" type="text" class="form-control hmsdxdesc" placeholder="Dx Relacionado con ppal" value="<?=$datconsulta->dxrelprincipal_t64?>">
        <input name="evolmed[concep][dxrelprincipalcod]" type="hidden" id="dxrelprincipalcod" value="<?=$datconsulta->dxrelprincipalcod_t64?>">
      </div>
   </div>
  </fieldset>
<div class='col-lg-6'>
  <fieldset>
    <legend><strong>Objetivos</strong></legend>
    <div class="form-group">
      <div class="col-lg-12">
       <textarea class="form-control" name="evolmed[concep][objetivos]" rows="6" required></textarea>
     </div>
    </div>
  </fieldset>
</div>
<div class='col-lg-6'>
  <fieldset>
    <legend><strong>Conducta</strong></legend>
    <div class="form-group">
      <div class="col-lg-12">
       <textarea class="form-control" name="evolmed[concep][problemnuevosdesc]" rows="6" required></textarea>
     </div>
    </div>
  </fieldset>
</div>
<div class='col-lg-6'>
  <fieldset>
    <legend><strong>Plan de Manejo</strong></legend>
    <div class="form-group">
      <div class="col-lg-12">
       <textarea class="form-control" name="evolmed[concep][obs]" rows="6" required></textarea>
     </div>
    </div>
  </fieldset>
</div>
  
  <div class="form-group">
    <div class="row text-center">
      <input type="hidden" name='tipoevolucion' value='EVOLUCIÓN MÉDICA'>
     <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>