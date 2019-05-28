<?
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  $colbotpaciente = $colbotresingreso = $colbotmotingreso = $colbotantecedentes = $colbotexamfisico = $colbottriage = $colbotimpdx = $colbotordenes = $colbotcierre = $colbotimprimir = "bg-light-blue";
  switch($fconsultaurgfrom){
    case "resumingreso":
      $colbotresingreso="bg-gray";
      break;
    case "paciente":
      $colbotpaciente="bg-gray";
      break;
    case "motingreso":
      $colbotmotingreso="bg-gray";
      break;
    case "antecedentes":
      $colbotantecedentes="bg-gray";
      break;
    case "examfisico":
      $colbotexamfisico="bg-gray";
      break;
    case "clastriage":
      $colbottriage="bg-gray";
      break;
    case "impdx":
      $colbotimpdx="bg-gray";
      break;
    case "ordenes":
      $colbotordenes="bg-gray";
      break;
    case "cierre":
      $colbotcierre="bg-gray";
      break;
    case "imprimir":
      $colbotimprimir="bg-gray";
      break;
  }
  $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabtriage = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "disabled";
  //var_dump($dathistoria->estado_t4);
  switch ($dathistoria->estado_t4){
    case "AGENDADA":
      $botdesabpaciente = "";
      break;
    case "ADMITIDA":
    case "ATENCIÓN MÉDICA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabtriage = $botdesabimpdx = $botdesabimprimir = "";
      break;
    case "VALORADA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabtriage = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "";
      break;
    case "CERRADA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabtriage = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "";
      break;
  }
?>

    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
<div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend class="no-margin no-padding">
          &nbsp; &nbsp;HC: <?=$dathistoria->idps_historia_t4?> Ident: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> Edad: <?=$edad?> años
        </legend>
          <div class="form-group">
            <div class="col-lg-3">
              <label class="control-label">Administradora:</label>
              <?=$dathistoria->administradora_t3?>
            </div>
            <div class="col-lg-2">
              <label class="control-label">Servicio:</label>
              <?=$dathistoria->ubicacion_t4?>
            </div>
            <div class="col-lg-3">
              <label class="control-label">Ingreso:</label>
              <?=$dathistoria->fingreso_t4?>
            </div>
            <div class="col-lg-4">
              <label class="control-label">Triage:</label>
              <?=$dathistoria->triage_t4?>
            </div>
          </div>
      </div>
      
      <div class="row paddingh">
        <?
        switch($fconsultaurgfrom){
          case "resumingreso":
            $this->load->view('Asistencial/Historia/f_historia_resum_ingreso',"",'refresh');
            break;
          case "motingreso":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <br/>
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" /><?
            $this->load->view('Asistencial/Historia/f_historia_ingreso_medico_mot_ingreso',"",'refresh');?>
              <label><h3>Examen fisico:</h3></label>
                <?  $this->load->view('Asistencial/Historia/f_historia_ingreso_medico_exam_fisico',"",'refresh');?>
              <input type="hidden" name="urldestino" value="<?=site_url('pacientes/censo')?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_ingreso_medico_clas_triage',array("btnguardar_ingreso_medico_clas_triage"=>true),true);?>
            </form><br>
            <?
            break;
        }
        ?>
      </div>
</div>