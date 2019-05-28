  <form action="<?=site_url('/facturacion/rips/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/facturacion/rips/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
      
      $archct = 'docs/RIPS/'.$reg->remision_t92.'/CT'.$reg->remision_t92.'.TXT';
      $archaf = 'docs/RIPS/'.$reg->remision_t92.'/AF'.$reg->remision_t92.'.TXT';
      $archus = 'docs/RIPS/'.$reg->remision_t92.'/US'.$reg->remision_t92.'.TXT';
      $archac = 'docs/RIPS/'.$reg->remision_t92.'/AC'.$reg->remision_t92.'.TXT';
      $archap = 'docs/RIPS/'.$reg->remision_t92.'/AP'.$reg->remision_t92.'.TXT';
      $archam = 'docs/RIPS/'.$reg->remision_t92.'/AM'.$reg->remision_t92.'.TXT';
      $archat = 'docs/RIPS/'.$reg->remision_t92.'/AT'.$reg->remision_t92.'.TXT';
      ?>
        <tr>
          <td>
            <?if(file_exists(FCPATH.$archct)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archct)?>" data-toggle="tooltip" data-placement="bottom" title="Control">CT</a>
            <?}
            if(file_exists(FCPATH.$archaf)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archaf)?>" data-toggle="tooltip" data-placement="bottom" title="Facturas">AF</a>
            <?}
            if(file_exists(FCPATH.$archus)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archus)?>" data-toggle="tooltip" data-placement="bottom" title="Usuarios">US</a>
            <?}
            if(file_exists(FCPATH.$archac)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archac)?>" data-toggle="tooltip" data-placement="bottom" title="Consulta">AC</a>
            <?}
            if(file_exists(FCPATH.$archap)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archap)?>" data-toggle="tooltip" data-placement="bottom" title="Procedimientos">AP</a>
            <?}
            if(file_exists(FCPATH.$archam)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archam)?>" data-toggle="tooltip" data-placement="bottom" title="Medicamentos">AM</a>
            <?}
            if(file_exists(FCPATH.$archat)){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=base_url($archat)?>" data-toggle="tooltip" data-placement="bottom" title="Otros Procedimientos">AT</a>
            <?}?>
          </td>
          <td>
            <a href="<?=site_url('facturacion/rips/remision/'.$reg->remision_t92)?>" data-toggle="tooltip" data-placement="bottom" title="Ver Remisión">
             <?=$reg->remision_t92?>
            </a>
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