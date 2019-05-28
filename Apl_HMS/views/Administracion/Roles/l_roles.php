  <div class="input-group">
    <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
      <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/administracion/roles/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
        <span class="glyphicon glyphicon-file"></span>
      </a>
    </div>
<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
  </div>
<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
        Id Rol
      </th>
      <th >
        Codigo
      </th>
      <th >
        Rol
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
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/administracion/roles/modificar/'.$reg->idps_roles_t2)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
          </td>
          <td>
            <?=$reg->idps_roles_t2?>
          </td>
          <td>
            <?=$reg->codrol_t2?>
          </td>
          <td>
            <?=$reg->rol_t2?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>