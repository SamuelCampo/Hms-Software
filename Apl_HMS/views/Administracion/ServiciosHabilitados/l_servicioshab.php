  <form action="<?=site_url('/administracion/servicioshab/buscar')?>" class="col-lg-6 form-inine" method="post" >
    <div class="input-group">
      <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
      <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
        <button class="btn bg-navy">
          <span class="glyphicon glyphicon-search"></span>
        </button>
        <a class="btn bg-navy" href="<?=site_url('/administracion/servicioshab/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
      <th ></th>
      <th >
        Código
      </th>
      <th >
        Servicios Habilitados
      </th>
      <th >
        Censo
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datos)){
    foreach($datos as $reg){
      ?>
        <tr>
          <td>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/administracion/servicioshab/modificar/'.$reg->idps_servicioshab_t74)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/administracion/servicioshab/eliminar/'.$reg->idps_servicioshab_t74)?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <?=$reg->codigo_t74?>
          </td>
          <td>
            <?=$reg->descripcion_t74?>
          </td>
          <td>
            <?=$reg->censo_t74?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>