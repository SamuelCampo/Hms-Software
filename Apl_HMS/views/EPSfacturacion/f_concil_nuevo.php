<fieldset>
  <h3><center>Conciliación Cuentas Médicas</center></h3>
  <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/conciliacion/factura')?>">
    <div class="form-group">
      <div class="col-lg-10">
        <label><strong># Radicado Factura:</strong></label>
        <input type="number" name="radicado" id="radicado" class="form-control" placeholder="# RADICADO INTERNO">
      </div>
    </div>
    <div class="form-group">
      <center>
        <button name="lotenuevo" value="lote" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Continuar</button>
      </center>
    </div>
  </form>
  <br>
</fieldset>