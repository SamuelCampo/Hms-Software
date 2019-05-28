  <form action="<?=site_url('/pacientes/ordpend/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
   </form>
<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
        Identificacion
      </th>
      <th >
        Historia
      </th>
      <th >
        Orden
      </th>
      <th >
        Nombre
      </th>
      <th >
        Servicio
      </th>
      <th >
        Procedimiento
      </th>
      <th >
        Pendiente
      </th>
      <th >
        Estado
      </th>
      <th >
        Ingreso 
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  //var_dump($datpaciente);
  if(!empty($datosodrpend)){
    foreach($datosodrpend as $reg){
      //var_dump($reg);
      //exit;
      if(!empty($reg->idps_historia_t4) && !empty($reg->identificacion_t3)){
        //var_dump($reg);
        //exit;
        
        ?>
          <tr>
            <td nowrap>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso')?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
                <span class="fa fa-cog"></span>
              </a>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('pacientes/agenda/ordenref/'.$reg->idhist_ordenes_t67.'/medico/'.$reg->medidentif_t64)?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
                <span class="fa fa-calendar"></span>
              </a>
            </td>
            <td>
               <?=$reg->identificacion_t3?>
            </td>
            <td>
              <?=$reg->idps_historia_t4?>
            </td>
            <td>
              <?=$reg->orden_t67?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->nomcomp_t3))?>
            </td>
            <td>
              <?=$reg->ubicacion_t4?>
            </td>
            <td>
              <?=$reg->codigo_t67?> <?=$reg->descripcion_t67?>
            </td>
            <td>
              <?=$reg->cantidadpen_t67?>
            </td>
            <td>
              <?=$reg->estado_t4?>
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