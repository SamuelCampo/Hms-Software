<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  //var_dump($autorizaciones);
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  
 
?>

    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend>
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia CLinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> Edad: <?=$edad?> años
        </legend>
        <div class="form-group">
          <div class="col-lg-2 no-margin no-padding">
            <label class="control-label">Administradora:</label><br>
            <?=$dathistoria->administradora_t3?>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <label class="control-label">Servicio:</label><br>
            <?=$dathistoria->ubicacion_t4?>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <label class="control-label">Ingreso:</label><br>
            <?=$dathistoria->fingreso_t4?>
          </div>
          <?if(is_object($datconsultaso) && !is_null($datconsultaso->idps_hist_consulta_so_t99)){?>
          <div class="col-lg-2 no-margin no-padding">
            <a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/historia/imprimir/certificadoso/".$dathistoria->idps_historia_t4)?>">Certificado</a>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/historia/imprimir/epicrisisso/".$dathistoria->idps_historia_t4)?>">Epicrisis</a>
           </div>
          <?}else{?>
          <div class="col-lg-4 no-margin no-padding">
            <form action="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>" name="form2" method="post">
            <div class="row">
              <div class="form-group col-md-4">
                <label for="">Fecha de Inicio</label>
                <input type="text" name="fecha_inicio" class="form-control fechas_date" readonly value="<?=$dathistoria->fingreso_t4?>">
              </div>
              <div class="form-group col-md-4">
                <label for="">Fecha de Final</label>
                <input type="text" name="fecha_final" class="form-control fechas_date" readonly value="<?php echo date('Y-m-d h:i:s') ?>">
              </div>
              <div class="col-md-3"><br> 
                <button type="submit" style="font-size: 1.3em; font-weight: bold;margin-top: 10px;" class="btn btn-<?= $this->estilo->colorprinc ?>" href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>">Generar</button>
              </div>
              </div>
              
              </div>
            </form>
            <a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>">Epicrisis</a>
          <?}?>
        </div>
      <div class="row paddingh"> 
        <?  if(is_array($datconsulta->datordenes["LABO"])){?>
          <fieldset>
            <legend>Laboratorios</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["LABO"],"datlinca" => ""),'Refresh');?>
          </fieldset>
        <?}?>
          <?  if(!empty($datconsulta->INCA)){?>
          <fieldset>
            <legend>Incapacidades</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlinca"=>$datconsulta->INCA,"datlprocs" => ""),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["AYDX"])){?>
          <fieldset>
            <legend>Ayudas DX</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["AYDX"],"datlinca" => ""),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["PROC"])){?>
          <fieldset>
            <legend>Procedimientos</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["PROC"],"datlinca" => ""),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["QUIR"])){?>
          <fieldset>
            <legend>Quirurgico</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["QUIR"],"datlinca" => ""),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["OTROSPROC"])){?>
          <fieldset>
            <legend>Otros Procedimientos</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["OTROSPROC"],"datlinca" => ""),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["MED"])){?>
          <fieldset>
            <legend>Medicamentos</legend>
            <?=$this->load->view('Asistencial/Historia/l_historia_medicamentos',"",true);?>
          </fieldset>
        <?}?>
        <?if(is_array($registros)){?>
          <fieldset>
            <legend>Historias de Medicamentos</legend>
            <p>Generar Informe <a href="<?= site_url('hospitalizacion/ENF/imprimir_registro')."/".$this->uri->segment(4) ?>">Generar</a></p>
          </fieldset>
        <?}?>
        <?if(is_array($autorizaciones)){?>
          <fieldset>
            <legend>Historial de Consentimientos Informados</legend>
            <table class="table">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Procedimiento</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($autorizaciones as $fila): ?>
                  <tr>
                    <td><?php echo $fila->fmod_t10 ?></td>
                    <td><?php foreach($datconsulta->datordenes["PROC"] as $orden=>$arr_orden){
                      foreach($arr_orden as $reg){ ?>
                        <?php if ($reg->autorizado_m == $fila->psid_consinformados_t10): ?>
                          <?php echo $reg->descripcion_t67 ?>
                        <?php endif ?>
                    <?php } } ?></td>
                    <td><a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/autorizaciones_agenda/imprimir_autorizaciones/".$dathistoria->idps_historia_t4."/".$fila->psid_consinformados_t10)?>">Imprimir</a></td>
                  </tr>
              <?php endforeach ?>  
              </tbody>
            </table>
            
          </fieldset>
        <?}?>
        <?if(is_array($autorizacion)){?>
          <fieldset>
            <legend>Historial de Autorizaciones</legend>
            <table class="table">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Procedimiento</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($autorizacion as $fila): ?>
                  <tr>
                    <td><?php echo $fila->fmod_t11 ?></td>
                    <td><?php echo $fila->descripcion_t67 ?></td>
                    <td><a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/autorizaciones_agenda/imprimir_autorizacion/".$dathistoria->idps_historia_t4."/".$fila->psid_autorizaciones_t11)?>">Imprimir</a></td>
                  </tr>
              <?php endforeach ?>  
              </tbody>
            </table>
            
          </fieldset>
        <?}?>
      </div>
  </div>

<script type="text/javascript">
  
    $(".form_date").datetimepicker({
      format: 'yyyy-mm-dd',
      language:  'es',
      weekStart: 1,

      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
</script>