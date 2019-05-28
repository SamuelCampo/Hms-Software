  <form action="<?=site_url('/administracion/convenios/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/administracion/convenios/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
         CODIGO
      </th>
      <th >
         NIT
      </th>
      <th >
        TERCERO
      </th>
      <th >
        DESCRIPCIÓN
      </th>
      <th >
        VIGENCIA
      </th>
      <th >
        PERIODO PAGO
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datconvenios)){
    foreach($datconvenios as $reg){
      ?>
        <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/administracion/convenios/gestionar/'.$reg->codigo_t95)?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
              <span class="fa fa-cog"></span>
            </a>
          </td>
          <td>
             <?=$reg->codigo_t95?>
          </td>
          <td>
             <?=$reg->tercero_t95?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->desc_t16))?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->descripcion_t95))?>
          </td>
          <td>
             <?=$this->Modulo->formatofecha($reg->vigdesde_t95)?> - <?=$this->Modulo->formatofecha($reg->vighasta_t95)?>
          </td>
          <td>
             <?=$reg->periodopago_t95?> Días
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>