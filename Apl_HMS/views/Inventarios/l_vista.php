  <form action="<?=site_url('/inventarios/stock/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a href="<?=site_url('/inventarios/stock/despacho')?>" class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-inbox"></span>
            <a href="<?=site_url('/inventarios/stock/cargar_factura')?>" class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-cloud-upload"></span>
          </a>
          <a href="<?=site_url('/inventarios/stock/nuevo')?>" class="btn <?= $this->Planthtml->colorprinc ?>">
            <span class="glyphicon glyphicon-plus"></span>
          </a>
        </div>
      </div>
   </form>


<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("Realmente desea eliminar?"))
    {
        return true;
    }
    return false;
}
//-->
</script>

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
        Almacen
      </th>
      <th >
        Descripción
      </th>
       <th >
        Cantidad
      </th>
       <th >
        F. Vencimiento
       </th>
       <th >
        Lote
      </th>
        <th >
        Laboratorio
      </th>
      <th >
        Cantidad Min
      </th>
       <th >
        Valor compra
      </th>
       <th >
        Valor venta
      </th>
    </tr>
</thead>
<tbody class="listado">

  <?
      foreach ($inventario['inv'] as $reg){
      ?> <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('inventarios/stock/modificar/'.$reg->codigo_t84)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </td>
          <td>
            <?= 'INV'; ?>
          </td>
          <td>
            <?= $reg->almacencod_t84?> <?=$reg->almacen_t84?>
          </td>
          <td>
            <?= $reg->codigo_t84." ".$reg->descripcion_t84 ?>
          </td>
          <td style="text-align: right">
            <?=number_format($reg->cantidad_t84);?>
          </td>
          <td>  
            
          </td>
          <td><?= "Sin especificar"; ?> </td>
          <td></td>
          <td></td>
          <td><?= $reg->precio; ?> </td>
          <td></td>
        </tr>
      <?php
    }
    foreach($inventario['cums'] as $reg){
      ?>
        <tr <?php if ($reg->stock_min_t73 >= $reg->stock_t73): ?>
          style="color: red !important";
        <?php endif ?>>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('inventarios/stock/modificar/'.$reg->codigoatc_t73)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </td>
          <td>
            <?= $reg->tipo_t73 ?>
          </td>
          <td>
            <?= $reg->almacencod_t84?> <?=$reg->almacen_t84?>
          </td>
          <td>
            <?=$reg->codigoatc_t73?> <?=$reg->nombreatc_t73?> <?=$reg->nombreatc_t73?> <?=$reg->principioact_t73?> <?=$reg->farmaceutica_t73?> <?=$reg->concentracion_t73?>
          </td>
          <td style="text-align: right">
            <?=number_format($reg->stock_t73)?>
          </td>
          <td>  
            <?= $reg->fecha_v_t73 ?>
          </td>
          <td><?= "Sin especificar" ?> </td>
          <td><?= $reg->cod_proveedor_t73 ?> </td>
          <td><?= $reg->stock_min_t73 ?> </td>
          <td><?= $reg->tarifa1_t73 ?> </td>
          <td><?= $reg->tarifa2_t73 ?> </td>
        </tr>
      <? 
    }
    foreach($inventario['sums'] as $reg){
      ?>
        <tr <?php if ($reg->stock_min_t91 >= $reg->stock_t91): ?>
          style="color: red !important";
        <?php endif ?>>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('inventarios/stock/modificar/'.$reg->codigoatc_t91)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </td>
          <td>
            <?= $reg->tipo_t91 ?>
          </td>
          <td>
            <?= $reg->almacencod_t84?> <?=$reg->almacen_t84?>
          </td>
          <td>
            <?=$reg->codigoatc_t91?> <?=$reg->nombreatc_t91?> <?=$reg->nombreatc_t91?> <?=$reg->principioact_t91?> <?=$reg->farmaceutica_t91?> <?=$reg->concentracion_t91?>
          </td>
          <td style="text-align: right">
            <?=number_format($reg->stock_t91)?>
          </td>
          <td>  
            <?= $reg->fecha_v_t91 ?>
          </td>
          <td><?= "Sin especificar" ?> </td>
          <td><?= $reg->cod_proveedor_t73 ?></td>
          <td><?= $reg->stock_min_t91 ?> </td>
          <td><?= $reg->tarifa1_t91 ?> </td>
          <td><?= $reg->tarifa2_t91 ?> </td>
        </tr>
      <? 
    }
  ?>
</table>