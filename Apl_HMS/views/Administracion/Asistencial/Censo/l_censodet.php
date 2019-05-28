<?if(!empty($mensaje)){
    echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
}?>
<style>
  .ball{
    height: 10px;
    width: 10px;
    float: left;
  }
</style>
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
        <th>
          Riesgo
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
      if(is_array($censodet)){
        foreach($censodet as $reg){
          $url = site_url($this->Constante->arr_defservcios[$reg->ubicacion_t4]->controlador_t90.'/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso');
          $icono="";
          switch ($reg->estado_t3){
            case "ATENCIÓN MÉDICA":             
              $icono = 'class="fa fa-user-md"';
              break;
            case "CIERRE ENFERMERÍA":
              $icono = 'class="fa fa-medkit"';
              break;
            case "DE ALTA":
               $icono = 'class="fa fa-sign-out"';
              break;
            case "REMITIDO":
               $icono = 'class="fa fa-ambulance"';
              break;
            case "FALLECIDO":
              $icono = 'class="fa fa-ban"';
              break;
          }
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
            <td style="">
              <div style="float: left;">
              <?php if (!empty($reg->r_caida)): ?>
                <div class="ball" style="background-color: #f44336; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->r_abuso_sexual)): ?>
                <div class="ball" style="background-color: #2e7d32; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->r_auto_lesion)): ?>
                <div class="ball" style="background-color: #ffeb3b; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->r_hetero_agresion)): ?>
                <div class="ball" style="background-color: #1976d2; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->r_fuga)): ?>
                <div class="ball" style="background-color: #f57c00; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->alergia_medicamento)): ?>
                <div class="ball" style="background-color: #e91e63; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->r_biocontaminacion)): ?>
                <div class="ball" style="background-color: #90a4ae; border-radius:50%;"></div>
              <?php endif ?>
              <?php if (!empty($reg->r_ulcera)): ?>
                <img src="https://banner2.kisspng.com/20180320/qde/kisspng-triangle-computer-icons-scalable-vector-graphics-c-triangle-png-5ab1c1384975e1.2906497215215987763009.jpg" width="10" alt="" style="position: relative; top:-5px">              
              <?php endif ?>
            </div>
            </td>
            <td>
              <?=ucwords(strtolower($reg->administradora_t3))?>
            </td>
            <td class="no-margin no-padding">
              <h2 class="no-margin no-padding"><i <?=$icono?>></i></h2>
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
