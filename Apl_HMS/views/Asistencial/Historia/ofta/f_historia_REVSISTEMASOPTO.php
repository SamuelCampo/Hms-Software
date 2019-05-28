<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>REVISION POR SISTEMAS</legend>



<div class="col-lg-12">
<legend align="left">VISION CROMATICA Y ESTEREOPSIS</legend>
</div>
    <div class="col-lg-6">
                  <label for="emergencia" class="control-label">OJO DERECHO</label>
                </div>
    
         <div class="form-group">
                <label for="descripcion1" class="col-lg-2 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="vision_descripcion_derecha" class="form-control" rows="4" id="descripcion1"><?= $datoconsulta[0]->vision_descripcion_derecha  ?></textarea>
                </div>
         </div>
<div class="col-lg-6">
                  <label for="emergencia" class="control-label">OJO IZQUIERDO</label>
                </div>
    
         <div class="form-group">
                <label for="descripcion1" class="col-lg-2 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="vision_descripcion_izquierdo" class="form-control" rows="4" id="descripcion1"> <?= $datoconsulta[0]->vision_descripcion_derechaizquierdo ?> </textarea>
                </div>
         </div>


