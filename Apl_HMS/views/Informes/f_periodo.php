<form class="form-horizontal" role="form" action="<?=site_url($urlform)?>" method="post">
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
    <div class="col-lg-2">
      <div class="input-group">
       <select name="administradoracod" class="form-control input-sm" value="" required>
            <?php if ($datpaciente->administradora_t3 != ""): ?>
              <?php $this->load->model('tercero'); ?>
              <option value="<?= $datpaciente->administradoracod_t3  ?>"><?= $datpaciente->administradora_t3  ?></option>
            <?php endif ?>
             <option></option>
             <option value="830080573 PINEDA Y ASOCIADOS ADMINISTRACIONES S.A.S">830080573 PINEDA Y ASOCIADOS ADMINISTRACIONES S.A.S</option>
             <option value="900317686 O & G CONSTRUCCIONES S A S">900317686 O & G CONSTRUCCIONES S A S</option>
             <option value="900592116 CALISAND S.A.S / Franquicia Sandwich Qbano ">900592116 CALISAND S.A.S / Franquicia Sandwich Qbano </option>
           </select>
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