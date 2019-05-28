  <form action="<?=site_url('/nomina/novedades/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn bg-navy" href="<?=site_url('/nomina/novedades/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
            <span class="glyphicon glyphicon-file"></span>
          </a>
          <a class="btn bg-navy" href="<?=site_url('/nomina/novedades/plantilla')?>" data-toggle="tooltip" data-placement="bottom" title="Cargar Plantilla de Registros">
            <span class="glyphicon glyphicon-cloud-upload"></span>
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
        Periodo
      </th>
      <th >
        Cedula
      </th>
      <th >
        Nombre 
      </th>
      <th >
        Concepto
      </th>
      <th >
        Cantidad
      </th>
      <th >
        Valor
      </th>
      <th >
        Fecha
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
            <a class="btn bg-navy btn-sm" href="<?=site_url('/nomina/novedades/modificar/'.$reg->idnom_novedades_t55)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/nomina/novedades/eliminar/'.$reg->idnom_novedades_t55)?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <?=$reg->periodo_t55?>
          </td>
          <td>
            <?=$reg->idempleado_t55?>
          </td>
          <td>
            <?=$reg->nombre_t55?>
          </td>
          <td>
            <?=$reg->descripcion_t55?>
          </td>
          <td>
            <?=$reg->cantidad_t55?>
          </td>
          <td>
            <?=$reg->valor_t55?>
          </td>
          <td>
            <?=$reg->finicio_t55?> <?=$reg->ffinal_t55?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>