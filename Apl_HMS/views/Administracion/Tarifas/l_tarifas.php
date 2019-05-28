  <form action="<?=site_url('/administracion/tarifas/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
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
      <th >
        ISS COD
      </th>
      <th >
         ISS DESC
      </th>
      <th >
        ISS CLASIF
      </th>
      <th >
        ISS GRUP Q
      </th>
      <th >
        ISS TARIFA
      </th>
      <th >
        SOAT COD
      </th>
      <th >
        SOAT DESC
      </th>
      <th >
        SOAT TARIFA
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($dattarifas)){
    foreach($dattarifas as $reg){
      ?>
        <tr>
          <td>
             <?=$reg->isscod_t95?>
          </td>
          <td>
            <?=$reg->issdesc_t95?>
          </td>
          <td>
            <?=$reg->issclasif_t95?>
          </td>
          <td>
            <?=$reg->issidgrupquir_t95?>
          </td>
          <td>
            <?=number_format($reg->isstarifa_t95)?>
          </td>
          <td>
            <?=$reg->soatcod_t95?>
          </td>
          <td>
            <?=$reg->soatdesc_t95?>
          </td>
          <td>
            <?=number_format($reg->soattarifa_t95)?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>