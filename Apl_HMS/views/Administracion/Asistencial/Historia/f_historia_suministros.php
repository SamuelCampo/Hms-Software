<section>
  <fieldset>
    <div class="panel panel-default col-lg-12 ">
      <div class="panel-body ">
        <div class="row no-padding no-marging">
          <div class="col-lg-4 text-center"><b>Suministro</b></div>
          <div class="col-lg-2 text-center"><b>Cant</b></div>
          <!-- agregados por mi -->
          <div class="col-lg-2 text-center"><b>Duracion</b></div>
          <div class="col-lg-3 text-center"><b>Observacion</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordensumins" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding no-marging" id="plantordsumins" >
          <div class="col-lg-4 no-padding no-marging">
            <input name="orden[medcs][tipo][]" type="hidden" value="SUM">
            <input name="orden[medcs][cum_desc][]" type="text" class="form-control" id="sumin_desc" placeholder="Suministro" requiered>
            <input name="orden[medcs][cum][]" type="hidden" id="sum_codigo" value="">
          </div>
          <div class="col-lg-2 no-padding no-marging">
            <input name="orden[medcs][cantidad][]" type="number" class="form-control" id="cantidad" placeholder="Cantidad" value="">
          </div>
          <div class="col-lg-2 no-padding no-marging">
            <input type="number" class="form-control" id="fecha" placeholder="Fecha" value=""
            name="orden[medcs][sum_tiempo][]" required>
          </div>
          <div class="col-lg-3 no-padding no-marging">
            <input type="text" class="form-control" id="descripcion" placeholder="Descripcion"
            value="" name="orden[medcs][sum_descr][]" required>
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
     <button type="submit" name="formularioenviado" value="ordenmedcs" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>
 </fieldset>
</section>
<?$this->load->view('Asistencial/Historia/l_historia_suminis',"",'Refresh');?>