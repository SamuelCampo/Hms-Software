 
  <form action="<?=site_url('/facturacion/planestarifarios/buscar')?>" class="col-lg-6 form-inine" method="post" >
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
      <th >
        Código
      </th>
      <th >
        Tipo
      </th>
      <th >
        Grupo
      </th>
      <th >
        Descripción
      </th>
      <th >
        Valor
      </th>
   </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datplanestar)){
    foreach($datplanestar as $reg){
      ?>
        <tr>
          <td>
            <?=$reg->codplantarifa_t63?>
          </td>
          <td>
            <?=$reg->tipoplan_t63?>
          </td>
          <td>
            <?=$reg->tiposervicio_t63?>
          </td>
          <td>
            <?=$reg->descripcion_t63?>
          </td>
          <td>
            <?=$reg->valor_t63?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>