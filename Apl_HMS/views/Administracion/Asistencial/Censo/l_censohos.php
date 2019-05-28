<?if(!empty($mensaje)){
    echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
}?>
<style>
  .ball{
    padding: 25px;
  }
</style>
<div class="row table-responsive">
  <table class="table table-condensed table-striped table-hover">
    <thead>
      <tr>
        <th>
          Historia
        </th>
        <th >
          Identificacion
        </th>
        <th >
          Nombre
        </th>
        <th>
          Riesgos
        </th>
        <th >
          Administradora
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
      if(is_array($censo->hos)){
        foreach($censo->hos as $reg){
          $url = site_url($this->Constante->arr_defservcios[$reg->ubicacion_t4]->controlador_t90.'/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso');
          ?>
          <tr>
            <td>
              <a href="<?=$url?>"><?=$reg->idps_historia_t4?></a>
            </td>
            <td>
              <?=$reg->identificacion_t3?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->nomcomp_t3))?>
            </td>
            <td>
              <?php var_dump($reg); ?>
              <?php if (!empty($reg->r_caida)): ?>
                <div class="ball" style="background-color: #f44336">h</div>
              <?php endif ?>
              <?php if (!empty($reg->r_abuso_sexual)): ?>
                <div class="ball" style="background-color: #2e7d32">h</div>
              <?php endif ?>
              <?php if (!empty($reg->r_auto_lesion)): ?>
                <div class="ball" style="background-color: #ffeb3b">h</div>
              <?php endif ?>
              <?php if (!empty($reg->r_hetero_agresion)): ?>
                <div class="ball" style="background-color: #1976d2">h</div>
              <?php endif ?>
              <?php if (!empty($reg->r_fuga)): ?>
                <div class="ball" style="background-color: #f57c00">h</div>
              <?php endif ?>
              <?php if (!empty($reg->alergia_medicamento)): ?>
                <div class="ball" style="background-color: #e91e63">h</div>
              <?php endif ?>
              <?php if (!empty($reg->r_biocontaminacion)): ?>
                <div class="ball" style="background-color: #90a4ae">h</div>
              <?php endif ?>
              <?php if (!empty($reg->r_ulcera)): ?>
                <div class="ball" style="border-radius: 35%; background-color: #90a4ae">h</div>              
              <?php endif ?>
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
