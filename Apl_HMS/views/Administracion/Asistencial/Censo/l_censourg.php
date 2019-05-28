<?if(!empty($mensaje)){
    echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
}?>
<div class="row table-responsive no-padding no-margin">
  <table class="table table-condensed table-hover no-padding no-margin">
    <thead>
      <tr>
        <th >
         
        </th>
        <th >
          Identificacion
        </th>
        <th >
          Historia
        </th>
        <th >
          Triage
        </th>
        <th >
          Nombre
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
        <th>
          Riesgos
        </th>
      </tr>
    </thead>
    <tbody class="listado">
      <?
      if(is_array($censodet)){
        foreach($censodet as $reg){
          $clase="";
          $clase2="";
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
          switch ($reg->triage_t4){
            case "1":             
              $clase = 'class="danger"';
              $clase2 = 'class="badge bg-red"';
              break;
            case "2":
              $clase = 'class="warning"';
              $clase2 = 'class="badge bg-orange"';
              break;
            case "3":
              $clase = 'class="success"';
              $clase2 = 'class="badge bg-green"';
              break;
            case "4":
              $clase = '';
              break;
            default:
              $clase = 'class="active"';
              break;
          }
          $url = site_url($this->Constante->arr_defservcios[$reg->ubicacion_t4]->controlador_t90.'/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$reg->idps_historia_t4.'/resumingreso');
          ?>
          <tr <?=$clase?> >
            <td>
              <span <?=$clase2?>>!</span>
            </td>
            <td>
              <?=$reg->identificacion_t3?>
            </td>
            <td>
              <a href="<?=$url?>"><?=$reg->idps_historia_t4?></a>
            </td>
            <td>
              <?=$reg->triage_t4?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->nomcomp_t3))?>
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
          </tr>
          <?
        }
      }
      ?>
    </tbody>
  </table>
</div>
