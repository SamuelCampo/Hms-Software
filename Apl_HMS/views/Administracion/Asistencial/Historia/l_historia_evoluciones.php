<?
  if(is_array($datevoldiariahist)){
    ?>
    <div class="row no-margin no-padding">
      <div class="col-md-12  no-margin no-padding">
        <ul class="timeline  no-margin no-padding">
    <?
    foreach($datevoldiariahist as $dia=>$arr_reg_evoluciones){
      ?>
        <li class="time-label">
          <span class="bg-red">
            <?=$dia?>
          </span>
        </li>
      <?
      if(is_array($arr_reg_evoluciones)){
        foreach($arr_reg_evoluciones as $reg_evol){
          $arr_reg_fecha = explode(" ",$this->Modulo->formatofechahora($reg_evol->fecha_t84));
          switch($reg_evol->tipo_t84){
            case "EVOLUCIÓN MÉDICA":
              $icono ='fa-stethoscope';
              break;
            case "ENFERMERÍA":
              $icono ='fa-plus-square';
              break;
            case "TERAPIA FÍSICA":
              $icono ='fa-wheelchair';
              break;
            case "TERAPIA RESPIRATORIA":
              $icono ='fa-heart-o';
              break;
            default:
              $icono ='fa-medkit';  
              break;
          }
          ?>
        <li class="no-margin no-padding">
            <i class="fa <?=$icono?>"></i>
            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i><?=$arr_reg_fecha[1]?></span>
              <h3 class="timeline-header">
                <a href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>" ><?=$reg_evol->tipo_t84?></a> <?=$reg_evol->mednomcomp_t84?>
              </h3>
            </div>
          </li>
          <?
        }
      }
    }
    ?>
          </ul>
        </div><!-- /.col -->
      </div><!-- /.row -->
    <?
  }
?>
  <div id="detevoldiaria" class="modal fade" role="dialog"></div>
              