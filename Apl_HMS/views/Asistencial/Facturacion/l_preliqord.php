  <form action="<?=site_url('/facturacion/preliqord/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/facturacion/preliqord/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
        No.
      </th>
      <th >
        Entidad
      </th>
      <th >
        Fecha
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datrips)){
    foreach($datrips as $reg){
      $urlct = base_url('docs/RIPS/'.$reg->remision_t92.'/CT'.$reg->remision_t92.'.TXT');
      $urlaf = base_url('docs/RIPS/'.$reg->remision_t92.'/AF'.$reg->remision_t92.'.TXT');
      $urlus = base_url('docs/RIPS/'.$reg->remision_t92.'/US'.$reg->remision_t92.'.TXT');
      $urlac = base_url('docs/RIPS/'.$reg->remision_t92.'/AC'.$reg->remision_t92.'.TXT');
      ?>
        <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=$urlct?>" data-toggle="tooltip" data-placement="bottom" title="Control">CT</a>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=$urlaf?>" data-toggle="tooltip" data-placement="bottom" title="Control">AF</a>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=$urlus?>" data-toggle="tooltip" data-placement="bottom" title="Control">US</a>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=$urlac?>" data-toggle="tooltip" data-placement="bottom" title="Control">AC</a>
          </td>
          <td>
             <?=$reg->remision_t92?>
          </td>
          <td>
             <?=$reg->prestadorcod_t92?> <?=$reg->prestador_t92?>
          </td>
          <td>
             <?=$reg->factfecha_t92?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>