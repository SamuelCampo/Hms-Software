  <form action="<?=site_url('/inventarios/stock/despacho')?>" class="col-lg-6 form-inine" method="post" >
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
        N&#176; de orden
      </th>
       <th >
        Cantidad
      </th>
       <th >
        F. de la Solicitud
       </th>
       <th >
        Descripcion
      </th>
      <th >
        Posologia
      </th>
       <th >
        Via de administraci&acute;n
      </th>
      <th>
        Cantidad a despachar
      </th>
    </tr>
</thead>
<tbody class="listado">
    <?php foreach ($inventario as $fila): ?>
      <tr>
      <th></th>
      <th >
        <?php echo $fila->idhist_ordenes_t67 ?>
      </th>
       <th >
        <?php echo $fila->cantidad_t67 ?>
      </th>
       <th >
        <?php echo $fila->fmod_t67 ?>
       </th>
       <th >
        <?php echo $fila->descripcion_t67 ?>
      </th>
      <th >
        <?php echo $fila->posologia_t67 ?>
      </th>
       <th >
        <?php echo $fila->via_t67 ?>
      </th>
      <th><input type="number" name="despachado" id="despachado<?= $fila->idhist_ordenes_t67 ?>"  value="<?= $fila->cantidad_t67 ?>"></th>
      <th><button class="btn <?=$this->Planthtml->estilo->colorprinc?> despacho" id="<?= $fila->idhist_ordenes_t67 ?>">Despachar</button></th>
    </tr>
    <?php endforeach ?>
</tbody>

  <?
    
  ?>
</table>