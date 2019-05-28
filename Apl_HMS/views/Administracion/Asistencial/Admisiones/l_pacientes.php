  <form action="<?=site_url('/pacientes/admisiones/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/pacientes/admisiones/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
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
        Identificacion
      </th>
      <th >
        No. Ingreso
      </th>
      <th >
        Nombre
      </th>
      <th >
        Servicio
      </th>
      <th >
        Especialidad
      </th>
      <th >
        Estado
      </th>
      <th >
        Cita
      </th>
      <th >
        Ingreso 
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  //var_dump($datpaciente);
  if(!empty($datpaciente)){
    foreach($datpaciente as $reg){
      if(!empty($reg->idps_historia_t4) && !empty($reg->identificacion_t3) && $reg->estado_t4!='ANULADA' ){
        
        ?>
          <tr>
            <td>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso')?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
                <span class="fa fa-cog"></span>
              </a>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('pacientes/admisiones/modificar/paciente/'.$reg->identificacion_t3)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar Paciente">
                <span class="fa fa-edit"></span>
              </a>
            </td>
            <td>
               <?=$reg->identificacion_t3?>
            </td>
            <td>
              <?=$reg->idps_historia_t4?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->nomcomp_t3))?>
            </td>
            <td>
              <?=$reg->ubicacion_t4?>
            </td>
            <td>
              <?=$reg->especialidades_t12?>
            </td>
            <td>
              <?=$reg->estado_t4?>
            </td>
            <td>
              <?=$reg->fecha_programacion_t12?>
            </td>
            <td>
              <?=$reg->fingreso_t4?>
            </td>
          </tr>
        <?
      }
    }
  }
  ?>
</table>