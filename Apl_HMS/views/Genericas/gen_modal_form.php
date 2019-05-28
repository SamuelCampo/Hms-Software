<div id="<?=$fgenmod_id?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm" style="margin-top:10%;margin-left:10%;width: 60%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header <?=$fgenmod_titclas?>">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="modtitulo"><?=$fgenmod_titulo?></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="<?=$fgenmod_ruta?>"  method="post" enctype="multipart/form-data">
          <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
          <p><?=$fgenmod_contenido?></p>
          <div class="form-group">
            <div class="row text-center">
              <button type="submit" class="btn bg-navy">Continuar</button>
            </div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>