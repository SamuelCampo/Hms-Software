
  <form action="<?=site_url('/nomina/noveperiodica/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn bg-navy" href="<?=site_url('/nomina/noveperiodica/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
        Cedula
      </th>
      <th >
        Nombre 
      </th>
      <th >
        Concepto
      </th>
      <th >
        De:
      </th>
      <th >
        Hasta:
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
            <a class="btn bg-navy btn-sm" href="<?=site_url('/nomina/noveperiodica/modificar/'.$reg->idsgi_parametro_t40)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/nomina/noveperiodica/eliminar/'.$reg->idsgi_parametro_t40)?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <?=$reg->idsgi_parametro_t40?>
          </td>
          <td>
            <?=$reg->codparam_t40?>
          </td>
          <td>
            <?=$reg->parametro_t40?>
          </td>
          <td>
            <?=$reg->descripcion_t40?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>