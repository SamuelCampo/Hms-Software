  <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/auditoria/facturagr/guardar/'.$datfac->radicado_t96)?>">
    <legend>Auditoría Cuentas Médicas   <a href="<?=site_url('/epsfact/auditoria/factura/'.$datfac->radicado_t96)?>" class="small pull-right">Gestionar Desagrupada</a></legend>
      
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
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->tiposctas(),"tipocta_t99","tipocta_t99",$datfac->tipo_t96))?>
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
            <label for="entidad">VALOR RADICADO</label>
            <input type="text" readonly="readonly" class="form-control" value="<?=number_format($datfac->valor_t96)?>" style="text-align: right">
          </div>
          <div class="col-lg-4">
            <label for="entidad">VALOR A GLOSAR</label>
            <input type="text" id="dgvalorglosa" readonly="readonly" class="form-control" value="" style="text-align: right">
          </div>
          <div class="col-lg-4">
            <label for="entidad">VALOR A PAGAR</label>
            <input type="text" id="dgvalpag" readonly="readonly" class="form-control" value="" style="text-align: right">
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-2">
            <input name="glosasgrup[TOTAL][glosar]" type="checkbox" value='1' class="form-control" >
            <label for="entidad">GLOSA TOTAL</label>
          </div>
          <div class="col-lg-3 no-margin no-padding">
            <input name="glosasgrup[TOTAL][tipo]" type="text" class="form-control tglosa" value="" placeholder="TIPO" >
            <input type="hidden" name="glosasgrup[TOTAL][tipocod]" value="" />
          </div>
          <div class="col-lg-3 no-margin no-padding">
            <select name="glosasgrup[TOTAL][caract]" class="form-control" >
              <option value="">CARÁCTER</option> 
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Glosa->arr_caract,"caract","caract"))?>
            </select>
          </div>
          <div class="col-lg-3 no-margin no-padding">
            <input name="glosasgrup[TOTAL][obs]" type="text" class="form-control" value="" placeholder="Observación Glosa Total">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="col-lg-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?
        if(is_array($datfac->detalleagr)){
          foreach($datfac->detalleagr as $descgrup=>$arr_grup){
            if(is_array($arr_grup)){?>
              
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?=$descgrup?>">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$descgrup?>" aria-expanded="true" aria-controls="collapse<?=$descgrup?>">
                      <i class="glyphicon glyphicon-asterisk"></i> <?=$descgrup?>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?=$descgrup?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$descgrup?>">
                  <div class="panel-body">
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
                        <div class="col-lg-3">
                          <input name="glosasgrup[<?=$descgrup?>][glosar]" type="checkbox" value='1' class="form-control" >
                          <label for="entidad">GLOSAR GRUPO <?=$descgrup?></label>
                        </div>
                        <div class="col-lg-3 no-margin no-padding">
                          <input name="glosasgrup[<?=$descgrup?>][tipo]" type="text" class="form-control tglosa" value="" placeholder="TIPO" >
                          <input type="hidden" name="glosasgrup[<?=$descgrup?>][tipocod]" value="" />
                        </div>
                        <div class="col-lg-3 no-margin no-padding">
                          <select name="glosasgrup[<?=$descgrup?>][caract]" class="form-control" >
                            <option value="">CARÁCTER</option> 
                            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Glosa->arr_caract,"caract","caract"))?>
                          </select>
                        </div>
                        <div class="col-lg-3 no-margin no-padding">
                          <input name="glosasgrup[<?=$descgrup?>][obs]" type="text" class="form-control" value="" placeholder="Observación Glosa Grupo">
                        </div>
                      </div>
                    </div>
                    <hr class='no-padding'>
              <?foreach($arr_grup as $regfac){
                $valdig+= $regfac->valor_t67;
                $vunit = $regfac->valunit_t67;
                ?>
                <div class="row no-margin no-padding">
                  <div class="form-group no-margin no-padding">
                    <div class="col-lg-2 no-margin no-padding">
                      <input type="text" class="form-control" readonly value="<?=$regfac->tipo_t67?>" >
                    </div>
                    <div class="col-lg-5 no-margin no-padding">
                      <input type="text" class="form-control" readonly value="<?=$regfac->descripcion_t67?>" >
                    </div>
                    <div class="col-lg-1 no-margin no-padding">
                      <input type="text" class="form-control" readonly value="<?=$regfac->cantidad_t67?>" style="text-align:right" >
                    </div>
                    <div class="col-lg-2 no-margin no-padding">
                      <input type="text" class="form-control" readonly value="<?=number_format($regfac->valunit_t67)?>" style="text-align:right" >
                    </div>
                    <div class="col-lg-2 no-margin no-padding">
                      <input type="text" class="form-control" readonly value="<?=number_format($regfac->valor_t67)?>" style="text-align:right" >
                    </div>
                  </div>
                </div>
                <div class="form-group no-margin no-padding" style="font-size:.8em">
                  <div class="col-lg-1 no-margin no-padding"><label>GLOSA:</label></div>
                  <div class="col-lg-3 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][tipo]" type="text" class="form-control tglosa" value="" placeholder="TIPO" >
                    <input type="hidden" name="glosas[<?=$regfac->idhist_ordenes_t67?>][tipocod]" value="" />
                  </div>
                  <div class="col-lg-3 no-margin no-padding">
                    <select name="glosas[<?=$regfac->idhist_ordenes_t67?>][caract]" class="form-control" >
                      <option value="">CARÁCTER</option> 
                      <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Glosa->arr_caract,"caract","caract"))?>
                    </select>
                  </div>
                  <div class="col-lg-1 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][cant]" type="text" class="form-control" value="" style="text-align:right" placeholder="CANT" onblur="gcant($( this ),<?=$vunit?>)" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][valor]" type="text" class="form-control" value="" style="text-align:right" placeholder="$" onblur="gvunit($( this ))" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][valortotal]" type="text" class="form-control" value="" style="text-align:right" placeholder="$" >
                  </div>
                </div>
                <div class="form-group no-margin no-padding" style="font-size:.8em">
                  <div class="col-lg-1 no-margin no-padding"></div>
                  <div class="col-lg-11 no-margin no-padding">
                    <input name="glosas[<?=$regfac->idhist_ordenes_t67?>][obs]" type="text" class="form-control" value="" placeholder="OBS">
                  </div>
                </div>
                <?
                if(is_array($datglosas[$regfac->idhist_ordenes_t67])){
                  foreach($datglosas[$regfac->idhist_ordenes_t67] as $glosa){?>
                    <div class="form-group no-margin no-padding alert alert-warning" style="font-size:.8em">
                      <div class="col-lg-1 no-margin no-padding"></div>
                      <div class="col-lg-3 no-margin no-padding">
                        <input type="text" class="form-control" readonly value="<?=$glosa->gtipo_t97?>" >
                      </div>
                      <div class="col-lg-3 no-margin no-padding">
                        <input type="text" class="form-control" readonly value="<?=$glosa->caracter_t97?>">
                      </div>
                      <div class="col-lg-1 no-margin no-padding">
                        <input type="text" class="form-control" readonly value="<?=$glosa->gcant_t97?>" style="text-align:right" >
                      </div>
                      <div class="col-lg-2 no-margin no-padding">
                        <input type="text" class="form-control" readonly value="<?=number_format($glosa->gvunit_t97)?>" style="text-align:right" >
                      </div>
                      <div class="col-lg-2 no-margin no-padding">
                        <input type="text" class="form-control" readonly value="<?=number_format($glosa->gtarifas_t97)?>" style="text-align:right" >
                      </div>
                    </div>
                    <div class="form-group no-margin no-padding" style="font-size:.8em">
                      <div class="col-lg-1 no-margin no-padding"></div>
                      <div class="col-lg-11 no-margin no-padding">
                        <input type="text" class="form-control" readonly value="<?=$glosa->gobs_t97?>">
                      </div>
                    </div>
                  <?
                  $vglosado+=$glosa->gtarifas_t97;
                  }
                  }?><hr>
              <?}?>
              
              </div>
        </div>

              
            <?}
          }
        }
      ?>
        
       </div>
     </div>
    </div>
    <div class="form-group col-lg-10">
      <center>
        <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</button>
      </center>
    </div>
  </form>
  <script type="text/javascript">
    <?if($datfac->valor_t96<$vglosado){?>
      document.getElementById("dgvalpag").value = "0";
      document.getElementById("dgvalorglosa").value = "<?=number_format($datfac->valor_t96)?>";
    <?}else{?>
      document.getElementById("dgvalpag").value = "<?=number_format($datfac->valor_t96-$vglosado)?>";
      document.getElementById("dgvalorglosa").value = "<?=number_format($vglosado)?>";
    <?}?>
  </script>
  