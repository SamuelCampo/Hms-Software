 
  <form action="<?=site_url('/fact_param/parametrizacion/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn bg-navy" href="<?=site_url('/fact_param/parametrizacion/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
        Código
      </th>
      <th >
        NIT
      </th>
      <th >
        Administradora
      </th>
      <th >
        Tipo
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
            <a class="btn bg-navy btn-sm" href="<?=site_url('/rh_param/parametrizacion/modificar/'.$reg->idnom_conceptos_t53)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/rh_param/parametrizacion/eliminar/'.$reg->idnom_conceptos_t53)?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <?=$reg->idnom_conceptos_t53?>
          </td>
          <td>
            <?=$reg->codigo_t53?>
          </td>
          <td>
            <?=$reg->concepto_t53?>
          </td>
          <td>
            <?=$reg->tipoconcepto_t53?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>