<form class="form-horizontal" role="form" action="<?=site_url('informes/informeporanalista/generar')?>" method="post">
  <div class="form-group">
    <label for="fechad" class="col-lg-2 control-label">Periodo</label>
    <div class="col-lg-2">
     <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
       <input name="fechad" type="text" class="form-control form_date" id="fechad" placeholder="Desde" value="">
     </div>
    </div>
    <div class="col-lg-2">
      <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
       <input name="fechah" type="text" class="form-control form_date" id="fechah" placeholder="Hasta" value="">
     </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row text-center">
     <br/>
     <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Generar</button>
    </div>
  </div>
</form>