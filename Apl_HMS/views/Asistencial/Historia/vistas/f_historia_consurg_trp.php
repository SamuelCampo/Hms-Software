<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  $colbotpaciente = $colbotresingreso = $colbotmotingreso = $colbotantecedentes = $colbotexamfisico = $colbotimpdx = $colbotordenes = $colbotcierre = $colbotsummedica = $colbotcontmeds = $colbotimprimir = "bg-light-blue";
  switch($fconsultaurgfrom){
    case "resumingreso":
      $colbotresingreso="bg-gray";
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
    case "summedica":
      $colbotsummedica="bg-gray";
      break;
    case "contmeds":
      $colbotcontmeds="bg-gray";
      break;
    case "cierre":
      $colbotcierre="bg-gray";
      break;
    case "imprimir":
      $colbotimprimir="bg-gray";
      break;
  }
  $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabsummedica = $botdesabcierre = $botdesabimprimir = "disabled";
  //var_dump($dathistoria->estado_t4);
  switch ($dathistoria->estado_t4){
    case "ADMITIDA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabimprimir = "";
      break;
    case "VALORADA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabsummedica = $botdesabcierre = $botdesabimprimir = "";
      break;
    case "CERRADA":
      $botdesabpaciente = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "";
      break;
  }
?>
    <div class="row no-padding no-margin">
      <div class="row panel-heading">
        <legend class="no-margin no-padding">
          HC: <?=$dathistoria->idps_historia_t4?> Ident: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> Edad: <?=$edad?> años
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
    </div>
    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
<div class="row contenedorsobreadonopd">
      <ul class="nav nav-tabs nav-justified">
        <?if($this->Modulo->verifacceso("HISTMTING")){?>
          <li class="text-center menusobreado"><a class="btn <?=$colbotresingreso?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/resumingreso')?>" >Resumen de <br> Ingreso</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTIMDX")){?> 
          <li class="text-center menusobreado"><a <?=$botdesabimpdx?> class="btn <?=$colbotimpdx?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/impdx')?>" >Impresión  <br> Diágnostica</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTORDEN")){?>
          <li class="text-center menusobreado"><a <?=$botdesabordenes?> class="btn <?=$colbotordenes?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/ordenes')?>"><br>Ordenes</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTSUMMED")){?>
          <li class="text-center menusobreado"><a <?=$botdesabsummedica?> class="btn <?=$colbotsummedica?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/summedica')?>">Suministro de <br>  Medicamentos</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTCONTMED")){?>
          <li class="text-center menusobreado"><a class="btn <?=$colbotcontmeds?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/contmeds')?>">Control <br>  Meds - Insumos</a></li>
        <?}?>  
        <?if($this->Modulo->verifacceso("HISTCIERHT")){?>
          <li class="text-center menusobreado"><a <?=$botdesabcierre?> class="btn <?=$colbotcierre?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/cierre')?>">Cierre <br> Historia</a></li>
        <?}?>
        <?if($this->Modulo->verifacceso("HISTIMP")){?>
          <li class="text-center menusobreado"><a <?=$botdesabimprimir?> class="btn <?=$colbotimprimir?> btn-sm" href="<?=site_url('/pacientes/historia/'.$accionmenu.'/'.$dathistoria->idps_historia_t4.'/imprimir')?>"><br><i class="fa fa-print"></i></a></li>
        <?}?>
      </ul>
      <div class="row paddingh">
        <?
        switch($fconsultaurgfrom){
          case "resumingreso":
            $this->load->view('Asistencial/Historia/f_historia_ingreso_medico_resum_ingreso',"",'refresh');
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
          case "summedica":
            $this->load->view('Asistencial/Historia/f_historia_summedica',array('summeds'=>true),'refresh');
            break;
          case "contmeds":
            $this->load->view('Asistencial/Historia/f_historia_summedica','','refresh');
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