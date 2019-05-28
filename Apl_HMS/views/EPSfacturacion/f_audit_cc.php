  <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/auditoria/facturagr/guardar/'.$datfac->radicado_t96)?>">
    <legend>Auditoría Concurrente</legend>
      
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
            <label for="entidad">VIA DE INGRESO</label>            
            <select name="viaing" class="form-control input-sm" id="viaing" required >
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_viaing,"viaing","viaing",$viaing))?>
            </select>
          </div>          
        </div>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-4">            
            <label for="entidad">SERVICIO</label>
            <select name="ubicacion" class="form-control input-sm" id="ubicacion" required>
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_destino,"destino","destino",$ubicacion))?>
            </select>
          </div>
          <div class="col-lg-4">
            <label for="entidad">TIPO INGRESO</label>            
            <select name="viaing" class="form-control input-sm" id="viaing" required >             
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_tipoingreso,"tipo","tipo",$viaing))?>
            </select>
          </div>     
          <div class="col-lg-4">
            <label for="entidad">CAUSA DE HOSPITALIZACION</label>
            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="CAUSA">
          </div>
                   
        </div> 
        
      </div>
    </div>
    <hr>
    <div class="col-lg-10">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?
//        if(is_array($datfac->detalleagr)){
//          foreach($datfac->detalleagr as $descgrup=>$arr_grup){
//            if(is_array($arr_grup)){?>
              
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingIDACCCONCEPT">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseIDACCCONCEPT" aria-expanded="true" aria-controls="collapseIDACCCONCEPT">
                      <i class="glyphicon glyphicon-asterisk"></i> CONCEPTO, RESUMEN ESTANCIA, JUSTIFICACION
                    </a>
                  </h4>
                </div>
                <div id="collapseIDACCCONCEPT" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIDACCCONCEPT">
                  <div class="panel-body">
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
                        <div class="col-lg-4">
                         <label for="entidad">CONCEPTO</label>
                         <div class="input-group">
                           <textarea name="obs" cols="40" rows="3" class="form-control" id="obs"></textarea>
                         </div>
                        </div>
                        <div class="col-lg-4">
                         <label for="entidad">ESTANCIA</label>
                         <div class="input-group">
                           <textarea name="obs" cols="40" rows="3" class="form-control" id="obs"></textarea>
                         </div>
                        </div>
                        <div class="col-lg-4">
                         <label for="entidad">JUSTIFICACION</label>
                         <div class="input-group">
                           <textarea name="obs" cols="40" rows="3" class="form-control" id="obs"></textarea>
                         </div>
                        </div>                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingIDACCADJ">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseIDACCADJ" aria-expanded="true" aria-controls="collapseIDACCADJ">
                      <i class="glyphicon glyphicon-asterisk"></i> ADJUNTOS
                    </a>
                  </h4>
                </div>
                
                <div id="collapseIDACCADJ" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIDACCADJ">
                  <div class="panel-body">
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
                        <div class="col-lg-5">
                            <label for="entidad">DESCRIPCIÓN</label>
                            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="DESCRIPCION">
                        </div>
                        <div class="col-lg-5">
                            <label for="entidad">ADJUNTO</label>
                            <input name="adjunto" type="file" class="filestyle" id="adjunto" placeholder="ADJUNTO" data-buttonText="">
                        </div>   
                        <div class="col-lg-5">
                            <label for="entidad">DESCRIPCIÓN</label>
                            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="DESCRIPCION">
                        </div>
                        <div class="col-lg-5">
                            <label for="entidad">ADJUNTO</label>
                            <input name="adjunto" type="file" class="filestyle" id="adjunto" placeholder="ADJUNTO" data-buttonText="">
                        </div>  
                        <div class="col-lg-5">
                            <label for="entidad">DESCRIPCIÓN</label>
                            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="DESCRIPCION">
                        </div>
                        <div class="col-lg-5">
                            <label for="entidad">ADJUNTO</label>
                            <input name="adjunto" type="file" class="filestyle" id="adjunto" placeholder="ADJUNTO" data-buttonText="">
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingIDACCINOP">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseIDACCINOP" aria-expanded="true" aria-controls="collapseIDACCINOP">
                      <i class="glyphicon glyphicon-asterisk"></i> INOPORTUNIDADES
                    </a>
                  </h4>
                </div>
                
                <div id="collapseIDACCINOP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIDACCINOP">
                  <div class="panel-body">
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
                        <div class="col-lg-5">                        
                         <label for="entidad">INOPORTUNIDAD</label>
                            <select name="ubicacion" class="form-control input-sm" id="ubicacion" required>
                             <option></option>
                             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_inopor,"tipo","tipo",$ubicacion))?>
                            </select>
                        </div>                        
                        <div class="col-lg-5">
                            <label for="entidad">DESCRIPCIÓN</label>
                            <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="DESCRIPCION">
                        </div>                 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingIDACCEVADV">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseIDACCEVADV" aria-expanded="true" aria-controls="collapseIDACCEVADV">
                      <i class="glyphicon glyphicon-asterisk"></i> EVENTOS ADVERSOS
                    </a>
                  </h4>
                </div>
                
                <div id="collapseIDACCEVADV" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIDACCEVADV">
                  <div class="panel-body">
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
                        <div class="col-lg-5">                        
                         <label for="entidad">EVENTO</label>
                          <input name="glosasgrup[<?=$descgrup?>][tipo]" type="text" class="form-control teventoad" value="" placeholder="EVENTO ADVERSO" >
                          <input type="hidden" name="glosasgrup[<?=$descgrup?>][tipocod]" value="" />
                        </div>                        
                        <div class="col-lg-5">
                          <label for="entidad">DESCRIPCIÓN</label>
                          <input type="text" name="paciente" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="DESCRIPCION">
                        </div>
                        <div class="col-lg-2">
                          <label for="entidad">VALOR</label>
                          <input type="text" name="valor" id="paciente" class="form-control" value="<?=$datfac->pacnom_t96?>" placeholder="$">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingIDACCGLOSA">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseIDACCGLOSA" aria-expanded="true" aria-controls="collapseIDACCGLOSA">
                      <i class="glyphicon glyphicon-asterisk"></i> GLOSAS
                    </a>
                  </h4>
                </div>
                
                <div id="collapseIDACCGLOSA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIDACCGLOSA">
                  <div class="panel-body">
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
                        <div class="col-lg-3 no-margin no-padding">
                          <select onchange="urltipop()" id="tipopms" name="tipopms" class="form-control">
                            <option value="PR">PR</option>
                            <option value="MD">MD</option>
                            <option value="SU">SU</option>
                          </select>
                        </div>
                        <div class="col-lg-9 no-margin no-padding">
                          <input type="text" name="cod_desc" id="cod_desc" class="form-control" placeholder="COD CUPS CUMS" >
                          <input type="hidden" name="cod" id="cod" class="form-control" placeholder="COD CUPS CUMS">
                        </div>
                      </div>
                    </div>
                    <div class="row no-margin no-padding">
                      <div class="form-group no-margin no-padding">
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
                          <input name="glosasgrup[<?=$descgrup?>][obs]" type="text" class="form-control" value="" placeholder="$">
                        </div>
                        <div class="col-lg-3 no-margin no-padding">
                          <input name="glosasgrup[<?=$descgrup?>][obs]" type="text" class="form-control" value="" placeholder="Observación Glosa">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
       </div>
     </div>
    </div>
    <br><br>
    <div class="form-group col-lg-10">
      <center>
        <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</button>
      </center>
      <br><br><br><br>
    </div>
    
  </form>  