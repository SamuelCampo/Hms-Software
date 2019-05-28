  <fieldset>
    <h3><center>Digitación Facturas</center></h3>
    <div class="row">
      <div class="form-horizontal col-lg-10">
        <div class="form-group">
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
        <div class="form-group">
          <div class="col-lg-4">
            <label for="entidad"># RADICADO:</label>
            <input type="text" name="entidadd" id="dgnumrad" readonly="readonly" class="form-control" value="">
          </div>
          <div class="col-lg-4">
            <label for="entidad">$ FACTURA</label>
            <input type="text" name="fechad" id="dgnumfac" readonly="readonly" class="form-control" value="">
          </div>
          <div class="col-lg-4">
            <label for="entidad">SERVICIO</label>
            <input type="text" name="fechad" class="form-control" value="" placeholder="SERVICIO">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-4">
            <label for="entidad">USUARIO</label>
            <input type="text" name="entidadd" id="idusuario" class="form-control" value="" placeholder="IDENTIFICACION USUARIO">
          </div>
          <div class="col-lg-4">
            <label for="entidad">INGRESO</label>
            <input type="text" name="entidadd" class="form-control" value="" placeholder="<?=date('Y-m-d')?>">
          </div>
          <div class="col-lg-4">
            <label for="entidad">SALIDA</label>
            <input type="text" name="entidadd" class="form-control" value="" placeholder="<?=date('Y-m-d')?>">
          </div>
          
        </div>
        <div class="form-group">
          <div class="col-lg-4">
            <label for="entidad">VALOR RADICADO</label>
            <input type="text" name="fechad" id="dgvalor" readonly="readonly" class="form-control" value="521570">
          </div>
          <div class="col-lg-4">
            <label for="entidad">TOTAL GLOSA</label>
            <input type="text" name="fechad" id="totglosa" readonly="readonly" class="form-control" value="680">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="col-lg-10">
      <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/auditoria/guardar')?>">
        <div class="form-group">
          <div class="col-lg-3">
            <label># CODIGO</label>
          </div>
          <div class="col-lg-1">
            <label>CANT</label>
          </div>
          <div class="col-lg-2">
            <label>VALOR</label>
          </div>
          <div class="col-lg-2">
            <label>GLOSA TARIFAS</label>
          </div>
          <div class="col-lg-2">
            <label>GLOSA PERTINENCIA</label>
          </div>
          <div class="col-lg-2">
            <label>GLOSA SOPORTES</label>
          </div>
        </div>
        <div class="row" id="cont_facts">
          <div class="form-group">
            <div class="col-lg-3">
              <input type="text" name="fecharadic" class="form-control" placeholder="COD CUPS CUMS" value="S010103" readonly>
            </div>
            <div class="col-lg-1">
              <input type="number" name="fecharadic" class="form-control" id="valor" placeholder="#" value="1"  onblur="" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" value="458970" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" value="70" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" onblur="valdig(this.value)">
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" onblur="valdig(this.value)">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-3">
              <input type="text" name="fecharadic" class="form-control" placeholder="COD CUPS CUMS" value="890202" readonly>
            </div>
            <div class="col-lg-1">
              <input type="number" name="fecharadic" class="form-control" id="valor" placeholder="#" value="1"  onblur="" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" value="49700" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" value="10" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" onblur="valdig(this.value)">
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" onblur="valdig(this.value)">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-3">
              <input type="text" name="fecharadic" class="form-control" placeholder="COD CUPS CUMS" value="101" readonly>
            </div>
            <div class="col-lg-1">
              <input type="number" name="fecharadic" class="form-control" id="valor" placeholder="#" value="30"  onblur="" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" value="4920" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" value="20" readonly>
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" onblur="valdig(this.value)">
            </div>
            <div class="col-lg-2">
              <input type="number" name="fecharadic" class="form-control" placeholder="$" onblur="valdig(this.value)">
            </div>
          </div>
        </div>
        <div class="form-group">
          <center>
            <button name="lotenuevo" value="lote" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" onclick="guardafac()">Guardar</button>
          </center>
        </div>
      </form>
    </div>
  </fieldset>