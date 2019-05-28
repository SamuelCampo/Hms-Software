  <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/conciliacion/factura/guardar/'.$datfac->radicado_t96)?>">
    <legend>Conciliación Cuentas Médicas</legend>
    <div class="row">
      <div class="form-horizontal col-lg-10 no-margin no-padding">
        <div class="form-group no-margin no-padding">
          <div class="col-lg-4">
            <label for="entidad">Entidad:</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=$datfac->tercid_t96?>">
          </div>
          <div class="col-lg-4">
            <label for="entidad">Fecha:</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=$datfac->fradic_t96?>">
          </div>
          <div class="col-lg-4">
            <label for="entidad">Lote:</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=$datfac->lote_t96?>">
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-4">
            <label for="entidad"># RADICADO:</label>
            <input type="text" name="radicado" readonly="readonly" class="form-control" value="<?=$datfac->radicado_t96?>">
          </div>
          <div class="col-lg-4">
            <label for="entidad">$ FACTURA</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=$datfac->factnum_t96?>">
          </div>
          <div class="col-lg-4">
            <label for="entidad">TIPO</label>
            <select name="tipocta" class="form-control" >
              <option></option> 
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->arr_tipocta,"tipo","tipo",$datfac->tipo_t96))?>
            </select>
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-2">
            <label for="entidad">ID USUARIO</label>
            <input type="text" name="idpaciente" id="idusuario" class="form-control" value="<?=$datfac->pacid_t96?>" placeholder="IDENTIFICACION USUARIO">
          </div>
          <div class="col-lg-6">
            <label for="entidad">USUARIO</label>
            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="USUARIO">
          </div>
          <div class="col-lg-2">
            <label for="entidad">EDAD</label>
            <input type="text" name="edad" id="edad" class="form-control" value="<?=$datfac->edad_t96?>" placeholder="EDAD">
          </div>
          <div class="col-lg-2">
            <label for="entidad">SEXO</label>
            <select name='sexo' class='form-control' >
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_generos,"genero","genero",$datfac->sexo_t96))?>
            </select>
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-4">
            <label for="entidad">DX</label>
            <input type="text" name="dx" id="dx" class="form-control" value="<?=$datfac->dx_t96?>" placeholder="DX">
            <input type="hidden" name="dxcod" id="dxcod" value="<?=$datfac->dxcod_t96?>" >
          </div>
          <div class="col-lg-4">
            <label for="entidad">INGRESO</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fingreso" type="text" class="form-control form_date" id="fingreso" placeholder="Fecha" value="<?=$datfac->fingreso_t96?>" >
            </div>
          </div>
          <div class="col-lg-4">
            <label for="entidad">EGRESO</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fsalida" type="text" class="form-control form_date" id="fsalida" placeholder="Fecha" value="<?=$datfac->fegreso_t96?>" >
            </div>
          </div>
          
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-4">
            <label for="entidad">VALOR GLOSADO</label>
            <input type="text" id="dgvalorglosa" readonly="readonly" class="form-control" value="" style="text-align: right">
          </div>
          <div class="col-lg-4">
            <label for="entidad">VALOR ACEPTADO</label>
            <input type="text" readonly="readonly" class="form-control" value="" style="text-align: right">
          </div>
          <div class="col-lg-4">
            <label for="entidad">VALOR A PAGAR</label>
            <input type="text" id="dgvalpag" readonly="readonly" class="form-control" value="" style="text-align: right">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="col-lg-10">
      <div class="form-group no-margin no-padding">
        <div class="col-lg-1">
          <label>TIPO</label>
        </div>
        <div class="col-lg-2">
          <label>CARACTER</label>
        </div>
        <div class="col-lg-3">
          <label>OBS</label>
        </div>
        <div class="col-lg-3">
          <label>GLOSADO</label>
        </div>
        <div class="col-lg-3">
          <label>ACEPTADO</label>
        </div>
      </div>
        <div class="row" id="cont_facts">
      <?
        if(is_array($datfac->detalle)){
          foreach($datfac->detalle as $regfac){
            $valdig+= $regfac->valor_t67;
            if(is_array($datglosas[$regfac->idhist_ordenes_t67])){?>
            <div class="row no-margin no-padding">
              <div class="form-group no-margin no-padding">
                <?=$regfac->tipo_t67?> <?=$regfac->descripcion_t67?>
              </div>
            </div>
              <?foreach($datglosas[$regfac->idhist_ordenes_t67] as $glosa){?>
                <div class="form-group no-margin no-padding " style="font-size:.8em">
                  <div class="col-lg-1 no-margin no-padding">
                    <input type="text" class="form-control" readonly value="<?=$glosa->gtipo_t97?>" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input type="text" class="form-control" readonly value="<?=$glosa->caracter_t97?>">
                  </div>
                  <div class="col-lg-3 no-margin no-padding">
                    <input type="text" class="form-control" readonly value="<?=$glosa->gobs_t97?>">
                  </div>
                  <div class="col-lg-1 no-margin no-padding">
                    <input type="text" class="form-control" readonly value="<?=$glosa->gcant_t97?>" style="text-align:right" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input type="text" class="form-control" readonly value="<?=number_format($glosa->gtarifas_t97)?>" style="text-align:right" >
                  </div>
                  <div class="col-lg-1 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][cant]" type="text" class="form-control" placeholder="CANT" value="" style="text-align:right" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][valor]" type="text" class="form-control" placeholder="$ ACEPTADO" value="" style="text-align:right" >
                  </div>
                </div>
              <?
              $vglosado+=$glosa->gtarifas_t97;
              }
            }?>
          <?}
        }
      ?>
      <div class="form-group">
          <center>
            <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</button>
          </center>
        </div>
    </div>
  </form>
  <script type="text/javascript">
    document.getElementById("dgvalorglosa").value = "<?=number_format($vglosado)?>";
  </script>
  