<div id="<?=$fmodeliminar_id?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" style="margin-top:10%;margin-left:10%;width: 60%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="modtitulo"><?=$fmodeliminar_titulo?></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="<?=$fmodeliminar_ruta?>"  method="post" >
          <p><?=$fmodeliminar_contenido?></p>
          <div class="form-group">
            <div class="row text-center">
              <button type="submit" class="btn bg-navy">Continuar</button>
            </div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>