<fieldset>
   <div class="form-group">
      <div class="col-lg-6">        
        <label for="dxprincipalcod">DX Principal</label>
          <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal?>">
          <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod?>">
      </div>
      <div class="col-lg-6">        
        <label for="dxrelprincipalcod">DX Relacionado con el Principal</label>
        <input name="dxrelprincipal" type="text" class="form-control" id="dxrelprincipal" placeholder="Dx Relacionado con ppal" value="<?=$datconsulta->dxrelprincipal?>">
        <input name="dxrelprincipalcod" type="hidden" id="dxrelprincipalcod" value="<?=$datconsulta->dxrelprincipalcod?>">  
      </div>
   </div>
   <div class="form-group">
      <div class="col-lg-6">        
      <label for="dxsecundariocod">DX Secundario</label>
        <input name="dxsecundario" type="text" class="form-control" id="dxsecundario" placeholder="Dx Secundario" value="<?=$datconsulta->dxsecundario?>">
        <input name="dxsecundariocod" type="hidden" id="dxsecundariocod" value="<?=$datconsulta->dxsecundariocod?>">  
      </div>
      <div class="col-lg-6">        
        <label for="dxrelsecundario">DX Relacionado con el Secundario</label>
        <input name="dxrelsecundario" type="text" class="form-control" id="dxrelsecundario" placeholder="Dx Relacionado con el secundario" value="<?=$datconsulta->dxrelsecundario?>">
        <input name="dxrelsecundariocod" type="hidden" id="dxrelsecundariocod"  value="<?=$datconsulta->dxrelsecundariocod?>">
      </div>
   </div>
   <div class="form-group">
      <div class="col-lg-6">        
        <label for="dxegresocod">DX Egreso</label>
        <input name="dxegreso" type="text" class="form-control" id="dxegreso" placeholder="Dx de Egreso">
        <input name="dxegresocod" type="hidden" id="dxegresocod" value="">  
      </div>
      <div class="col-lg-6">        
        <label for="dxfallecidocod">DX Fallecido</label>
        <input name="dxfallecido" type="text" class="form-control" id="dxfallecido" placeholder="Dx Fallecido">
        <input name="dxfallecidocod" type="hidden" id="dxfallecidocod" value="">  
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-12"> 
        <label for="impresiondx">Impresión DX</label>
        <textarea class="form-control" rows="4" name="impresiondx" ></textarea>
      </div>
    </div>
   
    <?if($btnguardarimprediag==true){?>
    <div class="form-group">
      <div class="row text-center">
       <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
      </div>
    </div>
    <?}?>  
    
    
 
</fieldset>