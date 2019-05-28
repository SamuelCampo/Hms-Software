<legend>REGISTRO ANESTESIA:</legend>
  <div class="form-group">
    <div class="col-lg-6">
        <label>Inicio Anestesia</label>
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
        <label>Fin Anestesia</label>
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
    <div class="col-lg-6">
        <label>Inicio Cirugía</label>
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
        <label>Fin Cirugía</label>
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
  </div>
  <div class="form-group">
    <div class="col-lg-6">
      <label>Fin Recuperación</label>
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
    <div class="col-lg-6">
      <label for="tipoanestesia" class="control-label">Tipo Anestesia: </label>
      <select name="tipoanestesia" class="form-control" id="instrumentador"><option value="0">Seleccion</option>
          <option>GENERAL</option>
          <option>REGIONAL</option>
          <option>LOCAL</option>
      </select>
    </div>
  </div>
  <div class="form-group">
      <label for="anestesiologo" class="control-label">Anestesiologo </label>
      <input name="anestesiologo" type="text" class="form-control" id="anestesiologos" placeholder="Nombre Anestesiologo">
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
  <legend>Datos Registro:</legend>
  <div class="form-group">
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">Accesos Perifericos: </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">Admon Líquidos: </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">ASA: </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="accesoperiferico" class="control-label">Detalles Técnica Anestésica: </label>
    <div class="row">
      <div class="col-lg-2 no-padding no-margin">
        <div class="input-group">
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
      <div class="no-padding no-margin col-lg-9">
        <textarea id="valorliq" class="form-control" placeholder="Detalles Técnica Anestésica"></textarea>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="accesoperiferico" class="control-label">Evolución Corta: </label>
    <div class="row">
      <div class="col-lg-2 no-padding no-margin">
        <div class="input-group">
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
      <div class="no-padding no-margin col-lg-9">
        <textarea id="valorliq" class="form-control" placeholder="Evolución Corta"></textarea>
      </div>
    </div>
  </div>
  <legend>Manejo Anestésico:</legend>
  <div class="form-group">
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        CAPNOGRAFIA: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        E.C.: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        FRECUENCIA CARDIACA: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        FRECUENCIA RESPIRATORIA: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        SAO2%: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        TENSION ARTERIAL DIASTOLICA: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        TENSION ARTERIAL SISTOLICA: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label for="accesoperiferico" class="control-label">
        POSICIÓN: 
        <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" ><span class="glyphicon glyphicon-plus"></span></a>
      </label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        <div class="form-control no-padding no-margin">
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[hora]" type="number" class="form-control" id="fnacim_ano" placeholder="HH" value="<?=date("G")?>" required>
         </div>
         <div class="no-padding no-margin col-lg-3">
           <input name="ffin[min]" type="number" class="form-control" id="fnacim_mes" placeholder="mm" value="<?=date("i")?>" required>
         </div>
          <div class="no-padding no-margin col-lg-6">
            <input type="text" id="valorliq" class="form-control" placeholder="Valor">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="accesoperiferico" class="control-label">Observaciones Especiales: </label>
    <div class="row">
      <div class="col-lg-2 no-padding no-margin">
        <div class="input-group">
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
      <div class="no-padding no-margin col-lg-9">
        <textarea id="valorliq" class="form-control" placeholder="Detalles Técnica Anestésica"></textarea>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="accesoperiferico" class="control-label">Observaciones: </label>
    <textarea id="valorliq" class="form-control" placeholder="Detalles Técnica Anestésica"></textarea>
  </div>
  <div class="form-group">
    <div class="col-lg-6">
      <label for="anestesiologo" class="control-label">Estado al Salir </label>
      <input name="anestesiologo" type="text" class="form-control" id="anestesiologos" placeholder="Nombre Anestesiologo">
    </div>
    <div class="col-lg-6">
      <label for="anestesiologo" class="control-label">Destino </label>
      <input name="anestesiologo" type="text" class="form-control" id="anestesiologos" placeholder="Nombre Anestesiologo">
    </div>
  </div>
  <div class="form-group">
    <br/>
    <div class="row text-center">
      <input type="hidden" name='tipoevolucion' value='EVOLUCIÓN MÉDICA'>
     <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>