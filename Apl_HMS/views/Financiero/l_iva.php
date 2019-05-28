  <form action="<?=site_url('/financiero/ccosto/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          
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
        Tipo
      </th>
      <th >
        Porcentaje  
      </th>
      <th >
        Cuenta
      </th>
      <th >
        Aplica a
      </th>
    </tr>
</thead>
<tbody class="listado">
    <tr>
      <td></td>
      <td >
        GENERADO
      </td>
      <td >
        16%  
      </td>
      <td >
        2408020101
      </td>
      <td >
        Ventas
      </td>
    </tr>
    <tr>
      <td></td>
      <td >
        DESCONTABLE
      </td>
      <td >
        16%  
      </td>
      <td >
        2408010101
      </td>
      <td >
        Ventas
      </td>
    </tr>
   
</tbody>
<tbody class="listado">
  <?
  if(!empty($datos)){
    foreach($datos as $reg){
      ?>
        <tr>
          <td>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/ccosto/modificar/'.$reg->idsgi_area_t16)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/ccosto/eliminar/'.$reg->idsgi_area_t16)?>" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <?=$reg->idsgi_area_t16?>
          </td>
          <td>
            <?=$reg->area_t16?>
          </td>
          <td>
            <?=$reg->sigla_t16?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>