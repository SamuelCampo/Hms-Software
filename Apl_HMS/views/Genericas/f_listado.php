  <form action="<?=$flist_rutabuscar?>" class="col-lg-12 form-inine" method="post" id="<?=$flist_idformbuscar?>">
    <div class="col-lg-6">
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$flist_buscado?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <?if(!empty($flist_rutaregistrar)){?>
          <a class="btn bg-navy" href="<?=$flist_rutaregistrar?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
            <span class="glyphicon glyphicon-file"></span>
          </a>
          <?}?>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <?=$this->Paginacion->vpaginacion($flist_idformbuscar);?>
    </div>
   </form>
  <?if(!empty($flist_mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$flist_mensaje.'</div></div>';
  }?>