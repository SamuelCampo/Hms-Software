      <div class="input-group">
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/administracion/estructura/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
            <span class="glyphicon glyphicon-file"></span>
          </a>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/administracion/estructura/plantilla')?>" data-toggle="tooltip" data-placement="bottom" title="Cargar Plantilla de Registros">
            <span class="glyphicon glyphicon-cloud-upload"></span>
          </a>
        </div>
      </div>

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
        Descripción
      </th>
      <th >
        Edificio
      </th>
      <th >
        Piso
      </th>
      <th >
        Servicio
      </th>
      <th >
        Cubiculos
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datestructura)){
    foreach($datestructura as $reg){
      ?>
        <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/administracion/estructura/modificar/'.$reg->idps_estructura_t8)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </td>
          <td>
            <?=$reg->descripcion_t8?>
          </td>
          <td>
            <?=$reg->edificio_t8?>
          </td>
          <td>
            <?=$reg->piso_t8?>
          </td>
          <td>
            <?=$reg->servicio_t8?>
          </td>
          <td>
            <?=$reg->numcubic_t8?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>