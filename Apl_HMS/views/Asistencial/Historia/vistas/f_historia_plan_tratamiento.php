
<div class="row">
<div class="col-lg-12">
 <div class="col-lg-3"></div>
  <div class="form-group col-lg-6">
    <div class="col-lg-12 text-center" for="evoldiaria"><b>Indicaciones Medicas/Conducta:</b></div>
    <div class="col-lg-12">
      <textarea class="form-control" rows="6" name="conducta" value="<?=$this->Historia->conducta_t15?>"></textarea>
    </div>
  </div>
  <div class="col-lg-3"></div>
  <div class="form-group col-lg-6">
     <div class="col-lg-12 text-center" for="evoldiaria"><b>Justificación:</b></div>
     <div class="col-lg-12">
       <textarea class="form-control" rows="6" name="justificacion" value="<?=$this->Historia->justificacion_t15?>"></textarea>
     </div>
  </div>

</div>
</div>
     
   <?if($btnguardarptratamiento==true){?>
    <div class="form-group">
      <div class="row text-center">
       <button type="submit" name="formularioenviado" value="plantratamto" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
      </div>
    </div>
  <?}?>
 