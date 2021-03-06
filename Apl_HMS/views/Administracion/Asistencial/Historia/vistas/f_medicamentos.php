<section>
  <fieldset>
    <div class="panel panel-default col-lg-12">
      <div class="panel-body">
        <div class="row no-padding no-marging">
          <div class="col-lg-3 text-center"><b>Medicamento</b></div>
          <div class="col-lg-1 text-center"><b>Cantidad</b></div>
          <div class="col-lg-1 text-center"><b>Dosis</b></div>
          <div class="col-lg-1 text-center"><b>Frecuencia</b></div>
          <div class="col-lg-2 text-center"><b>V�a</b></div>
          <div class="col-lg-3 text-center"><b>Observaci�n</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordenmedcs" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding no-marging" id="plantordmedcs" >
          <div class="col-lg-3 no-padding no-marging">
            <input name="orden[medcs][cum_desc]" type="text" class="form-control" id="cum_desc" placeholder="Medicamento" required>
            <input name="orden[medcs][cum]" type="hidden" id="codigo" value="">
          </div>
          <div class="col-lg-1 no-padding no-marging">
            <input name="orden[medcs][cantidad]" type="text" class="form-control" id="cantidad" placeholder="Cantidad" value="" required>
          </div>
          <div class="col-lg-1 no-padding no-marging">
            <input name="orden[medcs][dosis]" type="text" class="form-control" id="dosis" placeholder="Dosis" value="">
          </div>
          <div class="col-lg-1 no-padding no-marging">
            <input name="orden[medcs][frecuencia]" type="text" class="form-control" id="frecuencia" placeholder="Frecuencia" value="" required>
          </div>
          <div class="col-lg-2 no-padding no-marging">
            <input name="orden[medcs][via_desc]" type="text" class="form-control" id="via_desc" placeholder="Via" required>
            <input name="orden[medcs][via]" type="hidden" id="via" value="">
          </div>
          <div class="col-lg-3 no-padding no-marging">
            <input type="text" class="form-control" rows="3" name="orden[medcs][observacion]" id="observ" placeholder="Observaci�n">
          </div>
          <div class="col-lg-1 no-padding no-marging">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"orden[medcs][externo][]","valor"=>"SI",""),true)?>
          </div>
          <div class="col-lg-1" onclick="$(this).parent().remove();">
            <eliminar class="btn bg-navy btn-xs">
              <span class="glyphicon glyphicon-trash btneliminar"></span>
            </eliminar>
          </div>
        </div>
      </div>
  </div>
  <div class="form-group">
    <div class="row text-center">
     <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>
 </fieldset>
</section>