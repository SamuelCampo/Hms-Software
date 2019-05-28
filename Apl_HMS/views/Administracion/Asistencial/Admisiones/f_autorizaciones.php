<section>
  <fieldset>
    <div class="panel panel-default col-lg-12">
      <div class="panel-body">
        <div class="row">
          <label for="" class="col-lg-1 control-label">No.</label>
          <label for="" class="col-lg-2 control-label">Fecha</label>
          <label for="" class="col-lg-3 control-label">Servicio</label>
          <label for="" class="col-lg-3 control-label">Cantidad</label>
          <label for="" class="col-lg-2 control-label">Valor</label>
        </div>
        <fieldset>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
            <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="tipooption" >
              <option></option>
              <option value="01">01-Confirmado Nuevo</option>
              <option value="02">02-Confirmado Repetido</option>
              <option value="03">03-Impresion Diagnostica</option>
              </select> 
         </div>

         <div class="form-group">
          <div class="col-lg-12">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dxtercero" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
            <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
          </div>
        </div>
      </div>

        <div class="form-group no-padding" id="plantilla">
          <div class="col-lg-2">
            <input name="numero" type="text" class="form-control" id="numero" placeholder="No." value="" required>
          </div>
          <div class="col-lg-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fecha" type="text" class="form-control form_date" id="fecha" placeholder="Fecha" value="" required>
            </div>
          </div>
          <div class="col-lg-4">
            <input name="servicio" type="text" class="form-control" id="servicio" placeholder="Servicio" value="" required>
          </div>
          <div class="col-lg-2">
              <input name="cantidad" type="text" class="form-control" id="cantidad" placeholder="Cantidad" value="" required>
          </div>
          <div class="col-lg-2">
              <input name="valor" type="text" class="form-control" id="valor" placeholder="Valor" value="" required>
          </div>
          <br/> 
          <div class="form-group">
            <div class="row text-center">
             <br/>
              <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Fecha</th>
            <th>Servicio</th>
            <th>Cantidad</th>
            <th>Valor</th>
          </tr>
        </thead>
        <tbody class="listado">
        <?
        if(!empty($datautorizaciones)){
          foreach($datautorizaciones as $reg){
            ?>
              <tr>
                <td width="10%">
                  <?=$reg->numero_t71?>
                </td>
                <td width="20%">
                  <?=$reg->fecha_t71?>
                </td>
                <td width="40%">
                  <?=$reg->servicio_t71?>
                </td>
                <td width="10%">
                  <?=$reg->cantidad_t71?>
                </td>
                <td width="20%">
                  <?=$reg->valor_t71?>
                </td>
              </tr>
            <?
          }
        }
        ?>
        </tbody>
      </table>
    </div>
 </fieldset>
</section>
