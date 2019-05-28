<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
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
          <div class="col-lg-2 no-margin no-padding">
            <a style="font-size: 1.3em; font-weight: bold" href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>">Epicrisis</a>
           </div>
          <?}?>
        </div>
      </div>
      <div class="row paddingh"> 
        <?  if(is_array($datconsulta->datordenes["LABO"])){?>
          <fieldset>
            <legend>Laboratorios</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["LABO"]),'Refresh');?>
          </fieldset>
        <?}?>
          <?  if(!empty($datconsulta->INCA)){?>
          <fieldset>
            <legend>Incapacidades</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlinca"=>$datconsulta->INCA),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["AYDX"])){?>
          <fieldset>
            <legend>Ayudas DX</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["AYDX"]),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["PROC"])){?>
          <fieldset>
            <legend>Procedimientos</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["PROC"]),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["QUIR"])){?>
          <fieldset>
            <legend>Quirurgico</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["QUIR"]),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["OTROSPROC"])){?>
          <fieldset>
            <legend>Otros Procedimientos</legend>
            <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["OTROSPROC"]),'Refresh');?>
          </fieldset>
        <?}?>
        <?if(is_array($datconsulta->datordenes["MED"])){?>
          <fieldset>
            <legend>Medicamentos</legend>
            <?=$this->load->view('Asistencial/Historia/l_historia_medicamentos',"",true);?>
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