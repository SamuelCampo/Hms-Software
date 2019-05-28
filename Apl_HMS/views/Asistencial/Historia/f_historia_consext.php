<?
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  $colbotpaciente = $colbotmotingreso = $colbotantecedentes = $colbotexamfisico = $colbotimpdx = $colbotordenes = $colbotcierre = $colbotimprimir = "bg-light-blue";
  switch($fconsultaurgfrom){
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
  $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "disabled";
  //var_dump($dathistoria->estado_t4);
  switch ($dathistoria->estado_t4){
    case "AGENDADA":
      $botdesabpaciente = "";
      break;
    case "ADMITIDA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabimprimir = "";
      break;
    case "VALORADA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "";
      break;
    case "CERRADA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "";
      break;
  }
?>

    <div class="row no-padding no-margin">
      <div class="row panel-heading">
        <legend class="no-margin no-padding">
          Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> Edad: <?=$edad?> años
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
          </div>
      </div>
    </div>
    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
<div class="row contenedorsobreadonopd">
      <ul class="nav nav-tabs nav-justified">
        <?if($dathistoria->estado_t4=='AGENDADA'){?>
          <li class="text-center menusobreado"><a class="btn bg-light-blue btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/cita')?>" ><br>Cita</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("ASPAC")){?>
          <li class="text-center menusobreado"><a <?=$botdesabpaciente?> class="btn <?=$colbotpaciente?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/paciente')?>" ><br>Paciente</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTMTING")){?>
          <li class="text-center menusobreado"><a <?=$botdesabmotingreso?> class="btn <?=$colbotmotingreso?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/motingreso')?>" >Motivo de <br> Ingreso</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTANTEC")){?>
          <li class="text-center menusobreado"><a <?=$botdesabantecedentes?> class="btn <?=$colbotantecedentes?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/antecedentes')?>" ><br>Antecedentes</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTEXMFIS")){?>
          <li class="text-center menusobreado"><a <?=$botdesabexamfisico?> class="btn <?=$colbotexamfisico?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/examfisico')?>" ><br>Exámen Físico</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTIMDX")){?> 
          <li class="text-center menusobreado"><a <?=$botdesabimpdx?> class="btn <?=$colbotimpdx?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/impdx')?>" >Impresión  <br> Diágnostica</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTORDEN")){?>
          <li class="text-center menusobreado"><a <?=$botdesabordenes?> class="btn <?=$colbotordenes?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/ordenes')?>"><br>Ordenes</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTCIERHT")){?>
          <li class="text-center menusobreado"><a <?=$botdesabcierre?> class="btn <?=$colbotcierre?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/cierre')?>"><br>Cierre Historia</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTIMP")){?>
          <li class="text-center menusobreado"><a <?=$botdesabimprimir?> class="btn <?=$colbotimprimir?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/imprimir')?>"><br><i class="fa fa-print"></i></a></li>
        <?}?>
      </ul>
      <div class="row paddingh">
        <?
        switch($fconsultaurgfrom){
          case "cita":
            ?>
              <form id="form_historia_paciente" class="form-horizontal" role="form" action="<?=site_url("pacientes/agenda/cancelar/".$dathistoria->idps_historia_t4)?>" method="post">
                <?$this->load->view('Asistencial/Agenda/f_agenda_prop',"",'refresh');?>
              </form>
            <?
            break;
          case "paciente":
            ?>
              <form id="form_historia_paciente" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/actualizarpaciente/".$dathistoria->idps_historia_t4)?>" method="post">
                <?$this->load->view('Asistencial/Admisiones/f_paciente',"",'refresh');?>
              </form>
            <?
            break;
          case "motingreso":
            $this->load->view('Asistencial/Historia/f_historia_ingreso_medico_mot_ingreso',"",'refresh');
            break;
          case "antecedentes":
            $this->load->view('Asistencial/Historia/f_historia_antecedentes',"",'refresh');
            break;
          case "examfisico":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?$this->load->view('Asistencial/Historia/f_historia_ingreso_medico_exam_fisico',"",'refresh');?>
              <?$this->load->view('Asistencial/Historia/f_historia_exam_fisico',"",'refresh');?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="examfisico" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
            </form>
            <?
            break;
          case "impdx":
            ?>
            <form id="form_historia_impdx" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?$this->load->view('Asistencial/Historia/f_historia_impre_diagnostica',"",'refresh');?>
              <?$this->load->view('Asistencial/Historia/f_historia_evolucion_medica',array("btnguardarevolmedic"=>true),'refresh');?>
            </form>
            <?
            break;
          case "ordenes":
            $this->load->view('Asistencial/Historia/f_historia_ordenes',"",'refresh');
            break;
          case "cierre":
            ?>
            <form id="form_historia_cierre" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
            <?
            $this->load->view('Asistencial/Historia/f_historia_cierre',"",'refresh');
            ?>
            </form>
            <?
            break;
          case "imprimir":
            $this->load->view('Asistencial/Historia/f_historia_imprimir',"",'refresh');
            break;
        }
        ?>
      </div>
</div>