  <form action="<?=site_url('/facturacion/prefactura/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
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
        Historia
      </th>
      <th >
        Nombre
      </th>
      <th >
        Servicio
      </th>
      <th >
        Ingreso
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datpaciente)){
    foreach($datpaciente as $reg){
      ?>
        <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/facturacion/prefactura/gestionar/'.$reg->idps_historia_t4)?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
              <span class="fa fa-cog"></span>
            </a>
          </td>
          <td>
             <?=$reg->identificacion_t3?>
          </td>
          <td>
            <a href="<?=site_url('/pacientes/historia/gestionar/'.$reg->idps_historia_t4.'/paciente')?>"><?=$reg->idps_historia_t4?></a>
          </td>
          <td>
            <?=ucwords(strtolower($reg->nomcomp_t3))?>
          </td>
          <td>
            <?=$reg->ubicacion_t4?>
          </td>
          <td>
            <?=$reg->fingreso_t4?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>