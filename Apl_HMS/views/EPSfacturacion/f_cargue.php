  <fieldset>
    <h3><center>Radicación Facturas</center></h3>
    <div class="row">
      <div class="form-horizontal">
        <div class="col-lg-4">
          <label for="entidad">Entidad:</label>
          <input type="text" name="entidadd" id="entidadd" readonly="readonly" class="form-control" value="IPS SAN RAFAEL">
        </div>
        <div class="col-lg-4">
          <label for="entidad">Fecha:</label>
          <input type="text" name="fechad" id="fechad" readonly="readonly" class="form-control" value="<?=date('Y-m-d')?>">
        </div>
        <div class="col-lg-4">
          <label for="entidad">Lote:</label>
          <input type="text" name="fechad" id="fechad" readonly="readonly" class="form-control" value="IPS00101000030">
        </div>
      </div>
    </div>
    <hr>
    <div class="col-lg-10">
      <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/radicacion')?>">
        <div class="form-group">
          <div class="col-lg-4">
            <label># FACTURA</label>
          </div>
          <div class="col-lg-4">
            <label>VALOR</label>
          </div>
          <div class="col-lg-4">
            <label># RADICADO</label>
          </div>
        </div>
        <div class="form-group" id="factsregclon" style="display: none">
          <div class="col-lg-4">
            <input type="text" name="fecharadic" class="form-control" placeholder="# FACT">
          </div>
          <div class="col-lg-4">
            <input type="number" name="fecharadic" class="form-control" id="valor" placeholder="$" onblur="radica(this)">
          </div>
          <div class="col-lg-4">
            <input type="number" name="fecharadic" class="form-control" onclick="radica(this)" onfocus="radica(this)" value="" readonly placeholder="# RADICADO">
          </div>
        </div>
        <div class="row" id="cont_facts">
          <div class="form-group">
            <div class="col-lg-4">
              <input type="text" name="fecharadic" class="form-control" placeholder="# FACT">
            </div>
            <div class="col-lg-4">
              <input type="number" name="fecharadic" class="form-control" id="valor" placeholder="$" onblur="radica(this)">
            </div>
            <div class="col-lg-4">
              <input type="number" name="fecharadic" class="form-control" onclick="radica(this)" onfocus="radica(this)" value="" readonly placeholder="# RADICADO">
            </div>
          </div>
        </div>
        <div class="form-group">
          <center>
            <button name="lotenuevo" value="lote" type="button" class="btn <?=$this->Planthtml->estilo->colorprinc?>" onclick="guardafac()">Continuar</button>
            <button name="lotenuevo" value="lote" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" onclick="guardafac()">Cerrar</button>
          </center>
        </div>
      </form>
    </div>
  </fieldset>
  <script>
    function radica(obj){
      obj.value=Math.floor((Math.random() * 100000) + 1);
    }
    function guardafac(){
      $( "#factsregclon" ).clone().appendTo("#cont_facts").show();
    }
  </script>
  