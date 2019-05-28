<fieldset>
  <legend>Validación RIPS</legend>
  <?
    if(!empty($mensaje)){
      echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
    }
    $rutarips = base_url('docs/RIPS');
    if(is_array($detres)){?>
      <legend>Resultado Validación</legend>
      <div class="col-lg-8">
      <?foreach($detres as $regval){?>
        <div class="alert alert-info">
          <a class="btn btn-success" target="_blank" href="<?=$rutarips."/".$regval->idvalid_t108."/".$regval->archivo_t108?>"><i class="fa fa-download" aria-hidden="true"></i></a>
          <?if($regval->errores_t108>0){?>
          <a class="btn btn-warning" target="_blank" href="<?=$rutarips."/".$regval->idvalid_t108."/".$regval->archerr_t108?>"><i class="fa fa-download" aria-hidden="true"></i></a>
          <?}?>
          Archivo: <?=$regval->archivo_t108?> | Lineas Procesadas: <?=$regval->lineas_t108?> | Correcciones <?=$regval->errores_t108?>
        </div>
      <?}?>
      </div>
    <?}?>
  <legend>Validar Archivos</legend>
  <div class="col-lg-12">
  <form class="form-horizontal" method="post" action="<?=site_url('/facturacion/rips/validar/generar')?>" enctype="multipart/form-data" >
    <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
    <div class="col-lg-10">
      <div class="form-group col-lg-10">
        <div class="col-lg-8">
          <label class="col-lg-2">CT</label>
          <input name="CT" id="CT" placeholder="CT" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AF</label>
          <input name="AF" id="AF" placeholder="AF" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">US</label>
          <input name="US" id="US" placeholder="US" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AD</label>
          <input name="AD" id="AD" placeholder="AD" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AC</label>
          <input name="AC" id="AC" placeholder="AC" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AP</label>
          <input name="AP" id="AP" placeholder="AP" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AH</label>
          <input name="AH" id="AH" placeholder="AH" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AU</label>
          <input name="AU" id="AU" placeholder="AU" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AN</label>
          <input name="AN" id="AN" placeholder="AN" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AM</label>
          <input name="AM" id="AM" placeholder="AM" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <label class="col-lg-2">AT</label>
          <input name="AT" id="AT" placeholder="AT" type="file" class="form-file" >
        </div>
        <div class="col-lg-8">
          <center>
            <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</button>
          </center>
        </div>
      </div>
    </div>
  </form>
  </div>
</fieldset>