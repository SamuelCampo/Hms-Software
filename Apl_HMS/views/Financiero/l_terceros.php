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
        Nit
      </th>
      <th>
        DV
      </th>
      <th >
        Razón Social
      </th>
      <th >
        Teléfono
      </th>
      <th >
        Dirección
      </th>
      <th >
        Municipio
      </th>
      <th >
        Retenciones
      </th>
    </tr>
</thead>
<tbody class="listado">
  <tr>
    <td></td>
    <td>
      PROVEEDOR
    </td>
    <td>
      832471692
    </td>
    <td>
      2
    </td>
    <td>
      SUMINISTROS LA 100
    </td>
    <td>
      CRA 4 18 26
    </td>
    <td>
      416 28 15
    </td>
    <td>
      05001 MEDELLIN
    </td>
    <td>
      RTFTE 6%, ICA 2%
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      CLIENTE
    </td>
    <td>
      832474792
    </td>
    <td>
      2
    </td>
    <td>
      EPS SANITAS
    </td>
    <td>
      CRA 39 15 8
    </td>
    <td>
      231 98 76
    </td>
    <td>
      15131 CALDAS
    </td>
    <td>
      
    </td>
  </tr>
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