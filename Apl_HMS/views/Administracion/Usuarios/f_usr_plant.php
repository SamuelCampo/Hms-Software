<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <?=$msj?>
      <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/cargar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
        <div class="form-group">
          <div class="alert alert-warning">
            Puede actualizar en forma masiva los registros a través de una plantilla, cree un archivo separado por <b>tabulaciones</b> donde la primer fila sean los campos a actualizar, los campos permitidos son: identif, cnt, tipo, estado, nombre, telefono, correo.
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10">
            <input name="plantilla" type="file" class="filestyle" id="plantilla" placeholder="Plantilla" data-buttonText="Plantilla" >
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">Cargar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>
<script type="text/javascript">
  
</script>