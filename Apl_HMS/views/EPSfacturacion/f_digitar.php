  <?
    //var_dump($datfac->idserie_t96);
    //exit;
    //var_dump($this->Factura->series());
    //var_dump($datfac->idserie_t96);
    //exit;
  ?>
 <div class="modal fade bd-example-modal-lg exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="container" style="padding: 50px">
          <div class="row">
            <form action="<?=site_url('facturacion/facturas/verPreliminar/'.$this->uri->segment(4))?>" name="preliminar1" method="post">
              <div class="form-group">
                <div class="col-lg-12">
                  <label for="entidad">Preliminar por fechas</label>
                  <div class="row">
                  <div class="col-md-3">
                  <div class="input-group">
                    <label for="">Todo</label><br>  
                    <input name="buscar_fecha" type="radio" class="" id="" placeholder="Fecha" value="">
                    <input type="hidden" name="historia" id=""> value="<?= $this->uri->segment(4) ?>">
                  </div>
                </div> 
                  <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="" type="text" class="form-control form_date" id="ffac" placeholder="Fecha" value="<?=$datfac->fingreso_t96?:$dathistoria->fingreso_t4?>"  disabled>
                    <input type="hidden" value="<?=$datfac->fingreso_t96?:$dathistoria->fingreso_t4?>" name="fechaI">
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="" type="text" class="form-control form_date" id="ffac" placeholder="Fecha" value="<?=$datfac->fegreso_t96?:$dathistoria->fsalida_t4?>" disabled >
                    <input type="hidden" value="<?=$datfac->fegreso_t96?:$dathistoria->fsalida_t4?>" name="fechaF">
                  </div>
                </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <label for="entidad">Identifique los parametros para la liquidación Por Fechas</label>
                  <div class="row">
                  <div class="col-md-3">
                  <div class="input-group">
                    <label for="">Todo</label><br>  
                    <input name="monto" type="radio" class="" id="" value="" >
                  </div>
                </div> 
                  <div class="col-md-3">
                  <div class="input-group">
                    <label for="">Tope</label>
                    <input name="max_monto" type="text" class="form-control" id="ffac" placeholder="" value="" >
                  </div>
                </div>
                  </div>
                </div> <!-- Fin de la col-lg-12 -->
                <div class="col-lg-12">
                  <div class="row">
                  <div class="col-md-3">
                  <div class="input-group">
                    <label for="">Todo</label><br>  
                    <input name="grupof" type="radio" class="" id="" placeholder="Fecha" value="" >
                  </div>
                </div> 
                  <div class="col-md-3">
                  <div class="input-group">
                    <label for="">Selecciones por que grupo desea</label><br>
                    <select name="grupo" id="" class="form-control">
                      <option value="">TODOS</option>
                      <option value="OTROSPROC">PR</option>
                      <option value="MD">MD</option>
                      <option value="SU">SU</option>
                    </select>
                  </div>
                </div>
                  </div>
                </div> <!-- Fin de la col-lg-12 -->
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-12">
                      <label for="">Identifique el responsable y los Procentaje de Cobertura</label>
                    </div>
                  <div class="col-md-2">
                  <div class="input-group">
                    <input name="ffac" type="radio" class="" id="" placeholder="Fecha" value="" ><label for="">Particular</label> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <input name="ffac" type="radio" class="" id="" placeholder="Fecha" value="" ><label for="">Empresa</label>
                  </div>
                </div> 
                  <div class="col-md-3">
                  </div>
                </div>
                  </div>
                </div> <!-- Fin de la col-lg-12 -->
                <div class="col-lg-12">
                  <label for="">Impuesto y Retenciones</label><br> 
                  <div class="row">
                  <div class="col-md-3">
                  <div class="input-group"> 
                    <input name="ffac" type="checkbox" class="" id="" placeholder="Fecha" value="" ><label for="#">Rete Ica</label>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="input-group"> 
                    <input name="ffac" type="checkbox" class="" id="" placeholder="Fecha" value="" ><label for="#">Rete Iva</label>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="input-group">
                    <input name="ffac" type="checkbox" class="" id="" placeholder="Fecha" value="" ><label for="#">Rete Fuente</label>
                  </div>
                  </div> 
                  <div class="col-md-3">
                  <div class="input-group">

                  </div>
                </div>
                  </div>
                  <button class="btn" id="" type="submit">Preliquidar</button>
                </div> <!-- Fin de la col-lg-12 -->
              </div>
            </form>
          </div>
        </div> 
    </div>
  </div>
</div>

  <form class="form-horizontal" id="formdigitarfac" method="post" action="<?=site_url('/facturacion/facturas/registrar/Guardar/'.$datfac->factnum_t96)?>">
    <legend>Digitación Facturas</legend>
    <div class="row">
      <div class="form-horizontal col-lg-11">
        <div class="form-group no-margin no-padding">
          <div class="col-lg-6">
            <label for="entidad">Convenio:</label>
            <input type="text" name="conveniodesc" id="conveniodesc" class="form-control" value="<?=$datfac->conveniodesc_t96?>" placeholder="CONVENIO" required>
            <input type="hidden" name="convenio" id="convenio" value="<?=$datfac->convenio_t96?>" required>
          </div>
          
          <div class="col-lg-6">
            <label for="entidad">Paciente</label>
            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datpaciente->identificacion_t3?> <?=$datpaciente->nomcomp_t3?>" placeholder="USUARIO">
            <input type="hidden" name="idpaciente" id="idpaciente" value="<?=$datpaciente->identificacion_t3?>" >
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-2 no-margin no-padding text-center">
            <label for="reliquidar">Reliquidar:</label>
            <input type="checkbox" name="reliquidar" class="form-control input-sm" value="S" >
          </div>
          <div class="col-lg-2 no-margin no-padding text-center">
            <label for="valman">Valores Manuales:</label>
            <input type="checkbox" name="valman" class="form-control input-sm" value="S" >
          </div>
          <div class="col-lg-8 no-margin no-padding text-center">
            <div class="col-lg-12 no-margin no-padding">
              <label for="valman">Factura Cerrada:</label>
              <input type="checkbox" name="validado" id="FacValidado" class="form-control input-sm" value="SI" <?if($datfac->validado_t96=='SI'){?>checked<?}?>  >
            </div>
            <div class="col-lg-12 no-margin no-padding">
              <span class="alert alert-warning small-box">Opción no es reversble, asegúrese de validar la totalidad de la factura.</span>
            </div>
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-3">
            <label for="entidad">Fecha:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="ffac" type="text" class="form-control form_date" id="ffac" placeholder="Fecha" value="<?=$datfac->ffact_t96?>" >
            </div>
          </div>
          <div class="col-lg-3">
            <div class="col-lg-6 no-margin no-padding">
              <label for="entidad">Preliquidación No.</label>
              <div class="input-group">
                <input type="text" readonly="readonly" class="form-control" value="<?=$datfac->factnum_t96?>">
                <?if($datfac->validado_t96=='SI'){?>
                  <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
                    <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('facturacion/facturas/ver/'.$datfac->factnum_t96.'/'.$datfac->historia_t96)?>" data-toggle="tooltipn" data-placement="bottom" title="Imprimmir">
                      <span class="glyphicon glyphicon-print"></span>
                    </a>
                  </div>
                <?}?>+
              </div>
              <input type="hidden" name="historia" id="historia1" value="<?= $this->uri->segment(4)?>">
            </div>
            <div class="col-lg-6 no-margin no-padding">
              <label for="entidad">Serie</label>
              <select name="serie" class="form-control" >
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->series(),"idcm_cuentaseries_t97","descripcion_t97",$datfac->idserie_t96))?>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <label for="entidad">Tipo</label>
            <select name="tipocta" class="form-control" >
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->tiposctas(),"tipocta_t99","tipocta_t99",$datfac->tipo_t96))?>
            </select>
          </div>
          <div class="col-lg-3">
            <label for="entidad">Valor</label>
            <input type="text" id="dgvalordig" readonly="readonly" class="form-control" value="" style="text-align: right">
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-3">
            <label for="entidad">DX</label>
            <input type="text" name="dx" id="dx" class="form-control" value="<?=$datfac->dx_t96?:$datconsulta->dxprincipal_t64?>" placeholder="DX">
            <input type="hidden" name="dxcod" id="dxcod" value="<?=$datfac->dxcod_t96?:$datconsulta->dxprincipalcod_t64?>" >
          </div>
          
          <div class="col-lg-3">
            <label for="entidad">Ingreso</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fingreso" type="text" class="form-control form_date" id="fingreso" placeholder="Fecha" value="<?=$datfac->fingreso_t96?:$dathistoria->fingreso_t4?>" disabled>
            </div>
          </div>
          <div class="col-lg-3">
            <label for="entidad">Egreso</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fsalida" type="text" class="form-control form_date" id="fsalida" placeholder="Fecha" value="<?=$datfac->fegreso_t96?:$dathistoria->fsalida_t4?>" disabled>
            </div>
          </div>
          <div class="col-lg-3">
            <label for="entidad">Copago</label>
            <div class="input-group">
              <input name="copago" type="text" class="form-control" id="" placeholder="Colocar copago" value="" >
            </div>
          </div>
          <div class="col-lg-3">
            <label for="">Selecciona Copago</label>
            <div class="input-group">
              <select class="form-control" name="copago">
                <option value="0">No copago</option>
                <option value="1">nivel 1, 11.5%</option>
                <option value="2">nivel 2 17.3%</option>
                <option value="3">nivel 3 23%</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <label for="entidad">Cuota Moderadora</label>
            <div class="input-group">
              <select class="form-control" name="Cuota Moderadora">
                <option value="0">No Cuota</option>
                <option value="1">nivel 1, 3.000</option>
                <option value="2">nivel 2, 12.000</option>
                <option value="3">nivel 3, 31.600</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="input-group">
              <label for="">Preliminar</label><br>
              <a href="#" class="btn btn-group-lg" data-toggle="modal" data-target=".exampleModal" id="printPre"><i class="fa fa-print"></i></a>
            </div>
          </div>
          <div class="col-lg-3">
            <br><br>
            <div class="col-lg-5 no-margin no-padding text-right">
              <button id="btn-guardar" type="submit"  class=" btn <?=$this->Planthtml->estilo->colorprinc?>" >Facturar</button>
            </div>
          </div>
    <hr>
    <div class="col-lg-10">
      <div class="form-group">
        <div class="col-lg-2 text-center">
          <label>Cantidad</label>
        </div>
        <div class="col-lg-2 text-center">
          <label>V Unit</label>
        </div>
        <div class="col-lg-2 text-center">
          <label>V Total</label>
        </div>
        <div class="col-lg-1 text-center">
          <label>Conf.</label>
        </div>
        <div class="col-lg-1 text-center">
          <label>Ext.</label>
        </div>
        <div class="col-lg-1 text-center">
          <label>Iva</label>
        </div>
        <div class="col-lg-1 text-center">
          <label>Ica</label>
        </div>
        <div class="col-lg-1 text-center">
          <label>Retefuente</label>
        </div>
      </div>
        <div class="row no-margin no-padding" id="cont_facts">
          <div class="form-group no-margin no-padding">
            <div class="col-lg-1 no-margin no-padding">
              <select onchange="urltipop()" id="tipopms" name="tipopms" class="form-control input-sm">
                <option value="PR">PR</option>
                <option value="MD">MD</option>
                <option value="SU">SU</option>
              </select>
            </div>
            <div class="col-lg-11 no-margin no-padding">
              <input type="text" name="cod_desc" id="cod_desc" class="form-control input-sm" placeholder="COD CUPS CUMS" >
              <input type="hidden" name="cod" id="cod">
            </div>
          </div>
          <div class="form-group no-margin no-padding">
            <div class="col-lg-2 no-margin no-padding">
              <input type="text" name="cantidad" class="form-control input-sm" id="valor" placeholder="#" >
            </div>
            <div class="col-lg-4 no-margin no-padding">
              <input type="text" name="valor" class="form-control input-sm" id="costo" value="" placeholder="$" >
            </div>
            <button id="gurdar-sum" onclick="guardarSuministro()" class="btn <?= $this->Planthtml->estilo->colorprinc ?>">Guardar Suministro</button>
            <?//if($datfac->validado_t96!='SI'){?>
            <?//}?>
          </div>
        </div>
      </form>
      <?
        if(!empty($datconsulta->datordenes)){
          foreach($datconsulta->datordenes as $grupo=>$arr_ord){
            foreach($arr_ord as $orden=>$arr_reg){
              foreach($arr_reg as $regfac){
                if($regfac->cantfac_t67<>'0' && $regfac->externo_t67!='S'){
                  $valdig+= $regfac->valor_t67;
                }
                $ordscarg.="||".$regfac->idhist_ordenes_t67."||";
                ?>
                <div class="row no-margin no-padding">
                  <div class="form-group no-margin no-padding">
                    <div class="col-lg-1 no-margin no-padding">
                      <input type="text" class="form-control" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->tipo_t67?>" >
                    </div>
                    <div class="col-lg-11 no-margin no-padding">
                      <input type="text" class="form-control" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->descripcion_t67?>" >
                    </div>
                  </div>
                  <div class="form-group no-margin no-padding">
                    <div class="col-lg-1 no-margin no-padding">
                      <input type="text" class="form-control" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->cantidad_t67?>" style="text-align:right" >
                    </div>
                    <div class="col-lg-1 no-margin no-padding">
                      <input type="text" name="actdet[<?=$regfac->idhist_ordenes_t67?>][faccant]" class="form-control" placeholder="COD CUPS CUMS" value="<?=$regfac->cantfac_t67?>" style="text-align:right" >
                    </div>
                    <div class="col-lg-2 no-margin no-padding">
                      <input type="text" name="actdet[<?=$regfac->idhist_ordenes_t67?>][facvunit]" class="form-control" placeholder="COD CUPS CUMS" value="<? echo number_format($regfac->valor_t67/$regfac->cantfac_t67); ?>" style="text-align:right" >
                    </div>
                    <div class="col-lg-2 no-margin no-padding">
                      <input type="text" class="form-control" placeholder="COD CUPS CUMS" readonly value="<?=number_format($regfac->valor_t67)?>" style="text-align:right" >
                    </div>
                    <div class="col-lg-1 no-margin no-padding text-center">
                      <input type="checkbox" name="actdet[<?=$regfac->idhist_ordenes_t67?>][facconf]" class="form-control input-sm check" value="S" <?if($regfac->facturado_t67=='S'){?>checked<?}?>>
                    </div>
                    <div class="col-lg-1 no-margin no-padding text-center">
                      <input type="checkbox" name="actdet[<?=$regfac->idhist_ordenes_t67?>][externo]" class="form-control input-sm" value="S" <?if($regfac->externo_t67=='S'){?>checked<?}?> >
                    </div>
                    <div class="col-lg-1 no-margin no-padding text-center">
                      <input type="checkbox" name="activa[<?=$regfac->idhist_ordenes_t67?>][facconf]" class="form-control input-sm" value="S">
                    </div>
                    <div class="col-lg-1 no-margin no-padding text-center">
                      <input type="checkbox" name="actica[<?=$regfac->idhist_ordenes_t67?>][externo]" class="form-control input-sm" value="S">
                    </div>
                    <div class="col-lg-1 no-margin no-padding text-center">
                      <input type="checkbox" name="actRefefuente[<?=$regfac->idhist_ordenes_t67?>][externo]" class="form-control input-sm" value="S">
                    </div>
                    <?if($regfac->facturado_t67!='S'){?>
                    <?}?>
                    
                  </div>
                </div>
                <?
              }
            }
          }
        }
        if(is_array($datfac->detalle)){
          foreach($datfac->detalle as $regfac){
            if(strpos($ordscarg, $regfac->idhist_ordenes_t67)===false){
              $valdig+= $regfac->valor_t67;
              ?>
              <div class="row no-margin no-padding">
                <div class="form-group no-margin no-padding">
                  <div class="col-lg-1 no-margin no-padding">
                    <input type="text" class="form-control input-sm" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->tipo_t67?>" >
                  </div>
                  <div class="col-lg-11 no-margin no-padding">
                    <input type="text" class="form-control input-sm" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->descripcion_t67?>" >
                  </div>
                </div>
                <div class="form-group no-margin no-padding">
                  <div class="col-lg-1 no-margin no-padding">
                    <input type="text" class="form-control input-sm" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->cantidad_t67?>" style="text-align:right" >
                  </div>
                  <div class="col-lg-1 no-margin no-padding">
                    <input type="text" class="form-control input-sm" placeholder="COD CUPS CUMS" readonly value="<?=$regfac->cantfac_t67?:$regfac->cantidad_t67?>" style="text-align:right" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input type="text" class="form-control input-sm" placeholder="COD CUPS CUMS" readonly value="<?=number_format($regfac->valunit_t67)?>" style="text-align:right" >
                  </div>
                  <div class="col-lg-2 no-margin no-padding">
                    <input type="text" class="form-control input-sm" placeholder="COD CUPS CUMS" readonly value="<?=number_format($regfac->valor_t67)?>" style="text-align:right" >
                  </div>
                  <div class="col-lg-1 no-margin no-padding text-right">
                    <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('facturacion/facturas/eliminar/'.$datfac->historia_t96."/".$datfac->factnum_t96."/".$regfac->idhist_ordenes_t67)?>" data-toggle="tooltipn" data-placement="bottom" title="Eliminar">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </div>
              </div>
              <?
            }
          }
        }
        
      ?>
    </div>
    <div class="row">
      <div class="form-horizontal col-lg-11">
        <div class="form-group no-margin no-padding">
          <div class="col-lg-6">
            <label for="obs1">Observación:</label>
            <textarea class="form-control" name="obs1"><?=$datfac->obs1_t96?></textarea>
          </div>
          <div class="col-lg-6">
            <label for="obs2">Descripción</label>
            <textarea class="form-control" name="obs2"><?=$datfac->obs2_t96?></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group col-lg-10">
      <center>
        <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('facturacion/facturas')?>" >Volver</a>
        <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('facturacion/facturas/registrar')?>" >Nueva</a>
      </center>
    </div>
  </form>
  <script type="text/javascript">
    document.getElementById("dgvalordig").value = "<?=number_format($valdig)?>";
  </script>
  