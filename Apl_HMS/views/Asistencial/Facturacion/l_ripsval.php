  <form action="<?=site_url('/facturacion/rips/validar/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/facturacion/rips/validar/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
            <span class="glyphicon glyphicon-file"></span>
          </a>
        </div>
      </div>
   </form>

<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
        Fecha
      </th>
      <th >
        Remisión
      </th>
      <th >
        Archivos
      </th>
      <th >
        Errores
      </th>
      <th >
        Detalle
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datval)){
    foreach($datval as $reg){
      $rutarips = base_url('docs/RIPS');
      ?>
        <tr>
          <td rowspan="2">
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('facturacion/rips/validar/ver/'.$reg->idvalid_t107)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-cog"></span>
            </a>
          </td>
          <td>
            <?=date("Y-m-d H:i",strtotime($reg->fmod_t107))?>
          </td>
          <td>
            <?=$reg->idvalid_t107?>
          </td>
          <td>
            <?=$reg->archivos_t107?>
          </td>
          <td>
            <?=$reg->errores_t107?>
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <?if(is_array($reg->det)){
              foreach($reg->det as $regval){?>
                <span>
                  <a class="btn btn-success btn-xs" target="_blank" href="<?=$rutarips."/".$regval->idvalid_t108."/".$regval->archivo_t108?>"><i class="fa fa-download" aria-hidden="true"></i> <?=$regval->archivo_t108?></a>
                  <?if($regval->errores_t108>0){?>
                  <a class="btn btn-warning btn-xs" target="_blank" href="<?=$rutarips."/".$regval->idvalid_t108."/".$regval->archerr_t108?>"><i class="fa fa-download" aria-hidden="true"></i></a>
                  <?}?>
                   |
                </span>
              <?}
            }?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>