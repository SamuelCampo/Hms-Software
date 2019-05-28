<style type="text/css">

</style>
<section>
  <fieldset>
        <div class="col-lg-10">
          <div class='col-lg-6'>
              <fieldset>
                <legend><strong>Conducta</strong></legend>
                <div class="well"><?=$datconsulta->conducta_t64?></div>
              </fieldset>
            </div>
            <div class='col-lg-6'>
              <fieldset>
                <legend><strong>Plan de Manejo</strong></legend>
                <div class="well"><?=$datconsulta->planmanejo_t64?></div>
              </fieldset>
            </div>
        </div>
    </fieldset>
  
  <fieldset>
    <div class="panel panel-default col-lg-12 ">
      <div class="panel-body ">
        <div class="row no-padding no-marging">
          <div class="col-lg-1 text-center"><b>Cantidad</b></div>
          <div class="col-lg-6 text-center"><b>Posología</b></div>
          <div class="col-lg-1 text-center"><b>Tpo<br>Tratmto<br>Días</b></div>
          <div class="col-lg-3 text-center"><b>Observaciones</b></div>
          <div class="col-lg-1 text-center"><a id="btnagregarordenmedcs" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a></div>
        </div>
        <div class="form-group no-padding no-marging" id="plantordmedcs" >
          <div class="row no-marging no-padding">
            <div class="col-lg-10 no-padding no-marging">
              <input name="orden[medcs][tipo][]" type="hidden" value="MED">
              <input name="orden[medcs][cum_desc][]" type="text" class="form-control cum_desc" placeholder="Medicamento" id="cum_desc" onchange="comprobarmeds(this.value);">
              <input name="orden[medcs][cum][]" type="hidden" id="codigo" value="">
            </div>
            <div class="col-lg-1" onclick="$(this).parent().parent().remove();">
              <eliminar class="btn bg-navy btn-xs">
                <span class="glyphicon glyphicon-trash btneliminar"></span>
              </eliminar>
            </div>
          </div>
          <div class="row no-marging no-padding">
            <div class="col-lg-2 no-padding no-marging">
              <input name="orden[medcs][cantidad][]" type="number" class="form-control" id="cantidad" placeholder="Cantidad" min="1" required value="" >
            <br>
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input name="orden[medcs][dosis][]" type="number" min="1" class="form-control" id="dosis" placeholder="Dosis" value="" required>
            </div>

            <div class="col-lg-3" style="margin-top:10px; ">
              <label>Via de Administraci&oacute;n</label>
            </div>
             <div class="col-lg-3 no-padding no-marging" style="margin-left:-80px">
              <select name="orden[medcs][via][]" class="form-control">
                <option select value=""></option>
                <option value="ORAL">Oral</option>
               <option value="SUBLINGUAL"> Sublingual</option>
                <option value="RECTAL">Rectal</option>
                <option value="INTRAVENOSA">Intravenosa</option>
               <option value="INTRAMUSCULAR"> Intramuscular</option>
               <option value="SUBCUTÁNEA"> Subcutánea</option>
               <option value="DÉRMICA"> Dérmica</option>
               <option value="NASAL"> Nasal</option>
               <option value="OFTALMOLÓGICA"> Oftalmológica</option>
               <option value="INHALATORIA"> Inhalatoria</option>
               <option value="EPDIRUAL"> Epdirual</option>
               <option value="INTRATECAL"> Intratecal</option>
               <option value="VAGINAL"> Vaginal</option>
               <option value="TOPICA"> Topica</option>
              </select>
            </div>
            
            <div class="col-lg-1" style="margin-top:14px; margin-left:-10px">
              <label>Cada</label>
            </div>
             <div class="col-lg-2 no-padding no-marging">
              <input name="orden[medcs][posologia][]" type="text" class="form-control" id="posologia" placeholder="Intervalo" value="">
            </div>
            <div class="col-lg-1" style="margin-top:14px; margin-left:-10px">
               <label>Horas</label>
            </div>
            <div class="col-lg-3 no-padding no-marging">
              <input name="orden[medcs][durante][]" type="number" class="form-control" id="durante" placeholder="Durante"  value="" required>
              <br>
            </div>
            
            
            <div class="col-lg-3 no-padding no-marging">
              <input type="text" class="form-control" rows="3" name="orden[medcs][observacion][]" id="observ" placeholder="Observación" >
            <br>
            </div>
            </div>
            
          </div>
          <div id="nopos" style="display: none">
          <div class="col-md-12">
            <label for="">Homologo Post</label>
            <input name="ordennopost" type="text" class="form-control cum_descnp" placeholder="Medicamento">
          </div>
          <div class="row no-marging no-padding">
            <div class="col-lg-2 no-padding no-marging">
              <input name="dosis" type="number" class="form-control" id="cantidad" placeholder="Cantidad" min="1"  value="" >
            <br>
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input name="udosis" type="number" min="1" class="form-control" id="dosis" placeholder="Dosis" value="" >
            </div>

            <div class="col-lg-3" style="margin-top:10px; ">
              <label>Via de Administraci&oacute;n</label>
            </div>
             <div class="col-lg-3 no-padding no-marging" style="margin-left:-80px">
              <select name="orden[medcs][via][]" class="form-control">
                <option select value=""></option>
                <option value="ORAL">Oral</option>
               <option value="SUBLINGUAL"> Sublingual</option>
                <option value="RECTAL">Rectal</option>
                <option value="INTRAVENOSA">Intravenosa</option>
               <option value="INTRAMUSCULAR"> Intramuscular</option>
               <option value="SUBCUTÁNEA"> Subcutánea</option>
               <option value="DÉRMICA"> Dérmica</option>
               <option value="NASAL"> Nasal</option>
               <option value="OFTALMOLÓGICA"> Oftalmológica</option>
               <option value="INHALATORIA"> Inhalatoria</option>
               <option value="EPDIRUAL"> Epdirual</option>
               <option value="INTRATECAL"> Intratecal</option>
               <option value="VAGINAL"> Vaginal</option>
               <option value="TOPICA"> Topica</option>
              </select>
            </div>
            
            <div class="col-lg-1" style="margin-top:14px; margin-left:-10px">
              <label>Cada</label>
            </div>
             <div class="col-lg-2 no-padding no-marging">
              <input name="orden[medcs][posologia][]" type="text" class="form-control" id="posologia" placeholder="Intervalo" value="">
            </div>
            <div class="col-lg-1" style="margin-top:14px; margin-left:-10px">
               <label>Horas</label>
            </div>
            <div class="col-lg-3 no-padding no-marging">
              <input name="orden[medcs][durante][]" type="number" class="form-control" id="durante" placeholder="Durante"  value="" >
              <br>
            </div>
            
            
            <div class="col-lg-3 no-padding no-marging">
              <input type="text" class="form-control" rows="3" name="orden[medcs][observacion][]" id="observ" placeholder="Observación" >
            <br>
            </div>
            </div>
          <div class="col-md-3">
          <label for="">Justificaci&oacute;n</label>
          <textarea name="justificacion" id="" class="form-control"></textarea>
          </div>
          <div class="col-md-3">
          <label for="">Evidencia Cientifica</label>
          <textarea name="evidenciaCientifica" id="" class="form-control"></textarea>
          </div>
          <div class="col-md-3">
            <label for="">Precauciones y Contra indicaciones</label>
            <textarea name="precaucion" id="" class="form-control"></textarea>
          </div>
          <div class="col-md-3">
            <br>  
            <select name="valido" id="" class="form-control">
              <option value="si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-3">
            <br>  
            <select name="valido2" id="" class="form-control">
              <option value="si">Si</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>
        </div>
      </div>
  </div>
  <div class="form-group">
    <div class="row text-center">
     <button type="submit" name="formularioenviado" value="ordenmedcs" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>
 </fieldset>
</section>
<?$this->load->view('Asistencial/Historia/l_historia_medicamentos',"",'Refresh');?>