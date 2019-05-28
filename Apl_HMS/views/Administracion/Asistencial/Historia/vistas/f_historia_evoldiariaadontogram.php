  <fieldset>
    <legend><strong>Odontograma</strong></legend>
    <div class="form-group">
      <img class="img-responsive" src="<?=base_url('/img/odontograma.gif')?>" style="cursor: pointer" />
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Observaciones</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">
       <textarea class="form-control" name="evoldiaria" id="evoldiaria" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <div class="form-group">
    <div class="row text-center">
     <button type="submit" name="formularioenviado" value="evolmed" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>


