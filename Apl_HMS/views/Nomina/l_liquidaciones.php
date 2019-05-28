  <form action="<?=site_url('/nomina/liquidacion/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn bg-navy" href="<?=site_url('/nomina/liquidacion/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
      <th ></th>      
      <th >
        Nombre
      </th>      
      <th >
        Tipo
      </th>
      <th >
        Realizada el:
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
            <?if($reg->estado_t36=='REGISTRADA'){?>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/rrhh_bienestar/certificaciones/aprobar/'.$reg->idrhh_certilab_t36)?>" data-toggle="tooltip" data-placement="bottom" title="Aprobar">
              <span class="glyphicon glyphicon-check"></span>
            </a>
            <?}?>
            <?if($reg->estado_t36=='APROBADA'){?>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/rrhh_bienestar/certificaciones/descargar/'.$reg->idrhh_certilab_t36)?>" data-toggle="tooltip" data-placement="bottom" title="Descargar" target="_blank">
              <span class="glyphicon glyphicon-cloud-download"></span>
            </a>
            <?}?>
          </td>
          <td>
            <?=$reg->idrhh_certilab_t36?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->nomcomp_t1))?>
          </td>
          <td>
            <?=$reg->fsol_t36?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->area_t16))?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->cargo_t15))?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->estado_t36))?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>