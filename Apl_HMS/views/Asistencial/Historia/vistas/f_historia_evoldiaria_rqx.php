      <legend>INFORME QUIRURGICO:</legend>
      <div class="row">
          <div class="form-group">
            <div class="col-lg-5">
                <label>Inicio</label>
                <div class="input-group">
                  <div class="col-lg-7 no-padding no-margin">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <div class="form-control no-padding no-margin">
                     <div class="no-padding no-margin col-lg-4">
                       <input name="finicio[ano]" type="number" class="form-control" id="fnacim_ano" placeholder="YYYY" value="<?=date("Y")?>" required>
                     </div>
                     <div class="no-padding no-margin col-lg-4">
                       <input name="finicio[mes]" type="number" class="form-control" id="fnacim_mes" placeholder="MM" value="<?=date("n")?>" required>
                     </div>
                     <div class="no-padding no-margin col-lg-4">
                       <input name="finicio[dia]" type="number" class="form-control" id="fnacim_dia" placeholder="DD" value="<?=date("j")?>"  required>
                     </div>
                    </div>
                  </div>
                  <div class="col-lg-5 no-padding no-margin">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <div class="form-control no-padding no-margin">
                     <div class="no-padding no-margin col-lg-6">
                       <input name="finicio[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="YYYY" value="<?=date("G")?>" required>
                     </div>
                     <div class="no-padding no-margin col-lg-6">
                       <input name="finicio[min]" type="number" class="form-control" id="fnacim_mes" placeholder="MM" value="<?=date("i")?>" required>
                     </div>
                    </div>
                  </div>
                </div>
                <label>Fin</label>
                <div class="input-group">
                  <div class="col-lg-7 no-margin no-padding">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <div class="form-control no-padding no-margin">
                     <div class="no-padding no-margin col-lg-4">
                       <input name="ffin[ano]" type="number" class="form-control" id="fnacim_ano" placeholder="YYYY" value="<?=date("Y")?>" required>
                     </div>
                     <div class="no-padding no-margin col-lg-4">
                       <input name="ffin[mes]" type="number" class="form-control" id="fnacim_mes" placeholder="MM" value="<?=date("n")?>" required>
                     </div>
                     <div class="no-padding no-margin col-lg-4">
                       <input name="ffin[dia]" type="number" class="form-control" id="fnacim_dia" placeholder="DD" value="<?=date("j")?>"  required>
                     </div>
                    </div>
                  </div>
                  <div class="col-lg-5 no-margin no-padding">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <div class="form-control no-padding no-margin">
                     <div class="no-padding no-margin col-lg-6">
                       <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
                     </div>
                     <div class="no-padding no-margin col-lg-6">
                       <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
                     </div>
                    </div>
                  </div>
                </div>
             </div>
              <div class="col-lg-7">
                <div class="form-group">
                  <label for="cirujano" class="control-label">Cirujano</label>
                  <input name="cirujano" type="text" class="form-control" id="cirujano" placeholder="Nombre Cirujano">
                </div>
                <div class="form-group">
                  <label for="anestesiologo" class="control-label">Anestesiologo </label>
                  <input name="anestesiologo" type="text" class="form-control" id="anestesiologos" placeholder="Nombre Anestesiologo">
                </div>
              </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <label for="ayudante1" class="control-label">Ayudante 1 </label>
              <input name="ayudante1" type="text" class="form-control" id="ayudante1" placeholder="Nombre Ayudante 1">
            </div>
            <div class="col-lg-6">
              <label for="ayudante2" class="control-label">Ayudante 2 </label>
              <input name="ayudante2" type="text" class="form-control" id="ayudante2" placeholder="Nombre Ayudante 2">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <label for="enfermero" class="control-label">Enfermera: </label>
              <input name="enfermero" type="text" class="form-control" id="enfermero" placeholder="Nombre Enfermera">  
            </div>
            <div class="col-lg-6">
              <label for="instrumentador" class="control-label">Instrumentador:</label>
              <input name="instrumentador" type="text" class="form-control" id="instrumentador" placeholder="Nombre Instrumentador">       
            </div>
          </div>
          <legend>Diagnostico</legend>
          <div class="form-group">   
            <div class="col-lg-12">
              <label for="tipopre" class="control-label">Pre-Operatorio:</label>
              <input name="diagnoticopre" type="text" class="form-control hmsdxdesc" placeholder="Diagnostico Pre-Operatorio">
              <input name="dxprincipalcod" type="hidden" value="<?=$datconsulta->dxprincipalcod_t64?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              <label for="diagnostico" class="control-label">Post-Operatorio: </label>
              <input name="diagnoticopost" type="text" class="form-control hmsdxdesc" placeholder="Diagnostico Post-Operatorio">
              <input name="diagnoticopostcod" type="hidden" value="<?=$datconsulta->dxprincipalcod_t64?>">
            </div>
          </div>
          <legend>
            Procedimientos Realizados: 
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" onclick="btnagregarprocsdescqx()"><span class="glyphicon glyphicon-plus"></span></a>
          </legend>
          <div class="form-group no-padding" id="plantordprocs_desxcqx">
            <div class="col-lg-10">
            <input name="orden[procs][procedimmiento][]" type="text" class="form-control cump_desc" id="cump_desc_desxcqx" placeholder="Procedimiento" requiered onfocus="autocompcump('desxcqx')">
            <input name="orden[procs][procedimmientocod][]" type="hidden" id="cupcodigo_desxcqx" value="">
          </div>
            <div class="col-lg-1" onclick="$(this).parent().remove();">
              <eliminar class="btn bg-navy btn-xs">
                <span class="glyphicon glyphicon-trash btneliminar"></span>
              </eliminar>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-5">
              <label for="tipoanestesia" class="control-label">Tipo Anestesia: </label>
              <select name="tipoanestesia" class="form-control" id="instrumentador"><option value="0">Seleccion</option>
                  <option>GENERAL</option>
                  <option>REGIONAL</option>
                  <option>LOCAL</option>
              </select>
            </div>
            <div class="col-lg-5">
              <label for="tipoqx" class="control-label">Tipo de Cirugia:</label>
              <select name="tipocirugia" class="form-control" id="tipocirugia"><option value="0">Seleccion</option>
                  <option>UNA SOLA CIRUGÍA</option>
                  <option>CIRUGÍA BILATERAL</option>
                  <option>MISMO ESPECIALISTA MISMA VIA</option>
                  <option>MISMO ESPECIALISTA DIFERENTE VIA</option>
                  <option>DIFERENTE ESPECIALISTA MISMA VIA</option>
                  <option>DIFERENTE ESPECIALISTA DIFERENTE VIA</option>
                  <option>POLITRAUMA ABDOMINAL, TORACICO, CRANEOFACIAL Y DE FRACTURAS MULTIPLES</option>
              </select>
            </div>
            <div class="col-lg-2">
              <label for="evoldiaria">Tejido a Patologia:</label>
              <label class="checkbox-inline">
                <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][diuretic]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
              </label>
            </div>
          </div>
        <div class="form-group">
          <div class="col-lg-4">
            <label for="descqx" class="control-label">Descripcion Quirurgica: </label>
            <textarea class="form-control" id="descqx" rows="4" placeholder="Descripcion de la cirugia..."></textarea>
          </div> 
          <div class="col-lg-4">
            <label for="drenaje" class="control-label">Drenajes: </label>    
            <textarea class="form-control" id="drenajes" rows="4" placeholder="Describa el tipo de drenaje..."></textarea>
          </div> 
          <div class="col-lg-4">
            <label for="instrucciones" class="control-label">Instrucciones: </label>    
            <textarea class="form-control" id="instrucciones" rows="4" placeholder="Describa las Instrucciones..."></textarea>
          </div> 
        </div>
      </div>
      <div class="form-group">
        <br/>
        <div class="row text-center">
          <input type="hidden" name='tipoevolucion' value='EVOLUCIÓN MÉDICA'>
         <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>