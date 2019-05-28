<?if(!empty($mensaje)){
    echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
}?>
<div class="row table-responsive">
  <table class="table table-condensed table-striped table-hover">
    <thead>
      <tr>
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
          Administradora
        </th>
        <th>
          Riesgo
        </th>
        <th >
          Estado
        </th>
        <th >
          Ubicación
        </th>
        <th >
          Días
        </th>
      </tr>
    </thead>
    <tbody class="listado">
      <?
      if(is_array($censo->obs)){
        foreach($censo->obs as $reg){
          $url = site_url($this->Constante->arr_defservcios[$reg->ubicacion_t4]->controlador_t90.'/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso');
          ?>
          <tr>
            <td>
            <?=$reg->identificacion_t3?>
            </td>
            <td>
              <a href="<?=$url?>"><?=$reg->idps_historia_t4?></a>
            </td>
            <td>
              <?=ucwords(strtolower($reg->nomcomp_t3))?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->administradora_t3))?>
            </td>
            <td>
              <?=$reg->estado_t3?>
            </td>
            <td>
              <?=$reg->ubicacion_t4?>
            </td>
            <td>
                <?php $dias = (strtotime($reg->fingreso_t4)-strtotime(date('Y-m-d')))/86400;
  $dias   = abs($dias); $dias = floor($dias);   ?>
              <?=$dias?>
            </td>
          </tr>
          <?
        }
      }
      ?>
    </tbody>
  </table>
</div>
