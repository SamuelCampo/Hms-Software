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
          <div class="col-lg-1 text-center"><b># Dosis</b></div>
          <div class="col-lg-2 text-center"><b>Frec<br>Horas</b></div>
          <div class="col-lg-1 text-center"><b>Tpo<br>Tratmto<br>Días</b></div>
          <div class="col-lg-1 text-center"><b>Cant</b></div>
          <div class="col-lg-2 text-center"><b>Vía</b></div>
          <div class="col-lg-2 text-center"><b>Posología</b></div>
          <div class="col-lg-1 text-center"><a id="btnagregarordenmedcs" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a></div>
        </div>
        <div class="form-group no-padding no-marging" id="plantordmedcs" >
          <div class="row no-marging no-padding">
            <div class="col-lg-10 no-padding no-marging">
              <input name="orden[medcs][tipo][]" type="hidden" value="MED">
              <input name="orden[medcs][cum_desc][]" type="text" class="form-control cum_desc" placeholder="Medicamento" id="cum_desc">
              <input name="orden[medcs][cum][]" type="hidden" id="codigo" value="">
            </div>
            <div class="col-lg-1" onclick="$(this).parent().remove();">
              <eliminar class="btn bg-navy btn-xs">
                <span class="glyphicon glyphicon-trash btneliminar"></span>
              </eliminar>
            </div>
          </div>
          <div class="row no-marging no-padding">
            <div class="col-lg-1 no-padding no-marging">
              <input name="orden[medcs][dosis][]" type="number" class="form-control" id="dosis" placeholder="Dosis" value="" required>
            </div>
            <div class="col-lg-1 no-padding no-marging">
              <input name="orden[medcs][frecuencia][]" type="number" class="form-control" id="frecuencia" placeholder="Frecuencia" value="" required>
            </div>
            <div class="col-lg-1 no-padding no-marging">
              <select name="orden[medcs][udos][]" id="diashoras" class="form-control">
                <option>DIA</option>
                <option>HORA</option>
              </select>
              <input class="form-control" type="text" name="tdiashoras" id="tdiashoras" style="display: none;" />
            </div>
            <div class="col-lg-1 no-padding no-marging">
              <input name="orden[medcs][durante][]" type="number" class="form-control" id="durante" placeholder="Durante" value="" required>
            </div>
            <div class="col-lg-1 no-padding no-marging">
              <input name="orden[medcs][cantidad][]" type="number" class="form-control" id="cantidad" placeholder="Cantidad" value="" >
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input name="orden[medcs][via_desc][]" type="text" id="via_desc" class="form-control via_desc" placeholder="Vía" required>
              <input name="orden[medcs][via][]" type="hidden" id="via" value="">
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input type="text" class="form-control" rows="3" name="orden[medcs][observacion][]" id="observ" placeholder="Observación" >
            </div>
            <div class="col-lg-12 no-padding no-marging">
              <input name="orden[medcs][formula][]" type="text" class="form-control" id="formula" placeholder="Formula" value="">
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