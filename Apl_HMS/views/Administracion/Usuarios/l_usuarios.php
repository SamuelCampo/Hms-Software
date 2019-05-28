  <form action="<?=site_url('/administracion/usuarios/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/administracion/usuarios/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
            <span class="glyphicon glyphicon-file"></span>
          </a>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/administracion/usuarios/plantilla')?>" data-toggle="tooltip" data-placement="bottom" title="Cargar Plantilla de Registros">
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
        Id Usuario
      </th>
      <th >
        Identificacion
      </th>
      <th >
        Nombre
      </th>
      <th >
        Estado
      </th>
      <th >
        Telefono Movil
      </th>
      <th >
        Telefono
      </th>
      <th >
        Correo
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
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/administracion/usuarios/modificar/'.$reg->idps_usuarios_t0)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
             <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/administracion/usuarios/eliminar/'.$reg->idps_usuarios_t0)?>"  data-toggle="tooltip" data-placement="bottom" title="Eliminar">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <?=$reg->idps_usuarios_t0?>
          </td>
          <td>
            <?=$reg->identificacion_t0?>
          </td>
          <td>
            <?=$reg->nombre_t0?>
          </td>
          <td>
            <?=$reg->estado_t0?>
          </td>
          <td>
            <?=$reg->telefono_t0?>
          </td>
          <td>
            <?=$reg->tel_movil_t0?>
          </td>
          <td>
            <?=$reg->email_t0?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>