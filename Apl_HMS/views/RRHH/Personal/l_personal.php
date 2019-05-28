<form action="<?=site_url('/rrhh/personal/buscar')?>" class="col-lg-6 form-inine" method="post" >
  <div class="input-group">
    <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
    <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
      <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
        <span class="glyphicon glyphicon-search"></span>
      </button>
      <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/rrhh/personal/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
        <span class="glyphicon glyphicon-file"></span>
      </a>
      <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/rrhh/personal/plantilla')?>" data-toggle="tooltip" data-placement="bottom" title="Cargar Plantilla de Registros">
        <span class="glyphicon glyphicon-cloud-upload"></span>
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
      <th>
        Identificacion
      </th>
      <th>
        Nombre
      </th>
      <th>
        Centro de Costo
      </th>
      <th>
        Ciudad
      </th>
      
      <th>
        Dirección
      </th>
      <th>
        Celular
      </th>
      <th>
        Cel. Corporativo
      </th>
      <th>
        Cargo
      </th>
      <th>
        Estado
      </th>
    </tr>
  </thead>
  <tbody class="listado">
 <?
 if(!empty($datpersonal)){
   foreach($datpersonal as $reg){
     ?>
    <tr>
      <td>
        <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/rrhh/personal/modificar/'.$reg->numero_identificacion_t10)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
          <span class="glyphicon glyphicon-edit"></span>
        </a>
      </td>
      <td>
       <?=$reg->numero_identificacion_t10?>
      </td>
      <td>
       <?=$reg->nomcomp_t10?>
      </td>
      <td>
       <?=$reg->centro_costos_t10?>
      </td>
      <td>
       <?=$reg->ciudad_t10?>
      </td>
      <td>
       <?=$reg->direccion_t10?>
      </td>
      <td>
       <?=$reg->ncelular_t10?>
      </td>
      <td>
       <?=$reg->ncorporativo_t10?>
      </td>
      <td>
       <?=$reg->cargo_t10?>
      </td>
      <td>
       <?=$reg->estado_t10?>
      </td>
    </tr>
      <?
      }
      }
      ?>
</table>