  <form action="<?=site_url('/inventarios/stock/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/inventarios/stock/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo"><span class="glyphicon glyphicon-file"></span>
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
        Cantidad
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

  <? //var_dump($inventario);
    foreach($inventario as $reg){
      ?>
        <tr>
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
            <?=number_format($reg->cantidad_t84)?>
          </td>
          <td>  
            <?= $reg->fechav_t84 ?>
          </td>
          <td><?= "Sin especificar" ?> </td>
          <td><?= "Sin especificar" ?> </td>
          <td><?= $reg->stock_min ?> </td>
          <td><?= $reg->tarifa1_t91 ?> </td>
          <td><?= $reg->tarifa2_t91 ?> </td>
        </tr>
      <? 
    }
  ?>
</table>