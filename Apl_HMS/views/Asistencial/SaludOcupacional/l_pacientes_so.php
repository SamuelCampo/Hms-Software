  <form action="<?=site_url('asistencialsaludocupacional/admisiones/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <?if(strpos($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6, "EXT")===false){?>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('asistencialsaludocupacional/admisiones/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
              <span class="glyphicon glyphicon-file"></span>
            </a>
          <?}?>
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
        if(
          strpos($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6, "EXT")===false || 
          (strpos($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6, "EXT")!==false) && $this->Modulo->usr->personal->numero_identificacion_t10==$reg->emact_empleaidentif_t99 ){
        ?>
          <tr>
            <td nowrap>
              <?if(strpos($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6, "EXT")===false){?>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso')?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
                <span class="fa fa-cog"></span>
              </a>
              <?}?>
              <a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/historia/imprimir/certificadoso/".$reg->idps_historia_t4)?>" data-toggle="tooltip" data-placement="bottom" title="Imprimir Certificado">
                <span class="fa fa-print"></span>
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
  }
  ?>
</table>