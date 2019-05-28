<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  $colbotpaciente = $colbotresingreso = $colbotmotingreso = $colbotevoldiaria = $colbotantecedentes = $colbotexamfisico = $colbotimpdx = $colbotordenes = $colbotcierre = $colbotsummedica = $colbotimprimir = "bg-light-blue";
  switch($fconsultaurgfrom){
    case "resumingreso":
      $colbotresingreso="bg-gray";
      break;
    case "examingreso":
      $colbotmotingreso="bg-gray";
      break;
    case "evoldiaria":
      $colbotevoldiaria="bg-gray";
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
    case "orden":
    case "ordenesres":
      $colbotordenes="bg-gray";
      break;
    case "summedica":
      $colbotsummedica="bg-gray";
      break;
    case "cierre":
      $colbotcierre="bg-gray";
      break;
    case "imprimir":
      $colbotimprimir="bg-gray";
      break;
  }
  $botdesabpaciente = $botdesabmotingreso = $botdesabevoldiaria = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabsummedica = $botdesabcierre = $botdesabimprimir = "disabled";
  //var_dump($dathistoria->estado_t4);
  switch ($dathistoria->estado_t4){
    case "ADMITIDA":
      $botdesabpaciente = $botdesabevoldiaria = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabimprimir = "";
      break;
    case "VALORADA":
      $botdesabpaciente = $botdesabevoldiaria = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabsummedica = $botdesabcierre = $botdesabimprimir = "";
      break;
    case "CERRADA":
      $botdesabpaciente = $botdesabevoldiaria = $botdesabmotingreso = $botdesabantecedentes = $botdesabexamfisico = $botdesabimpdx = $botdesabordenes = $botdesabcierre = $botdesabimprimir = "";
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
        <legend>
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> Edad: <?=$edad?> años
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
          case "examingreso":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <br/>
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />

              <?
                $this->load->view('Asistencial/Historia/medico/f_historia_antecedentes',"",'refresh');
              ?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="examingreso" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            </form>
            <?
            break;
          case "evoldiaria":
            $this->load->view('Asistencial/Historia/medico/f_historia_evoldiaria',"",'refresh');
            break;
          case "antecedentes":
            
            break;
          case "examfisico":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?$this->load->view('Asistencial/Historia/medico/f_historia_ingreso_medico_exam_fisico',"",'refresh');?>
              <?$this->load->view('Asistencial/Historia/medico/f_historia_exam_fisico',"",'refresh');?>
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
              <?$this->load->view('Asistencial/Historia/medico/f_historia_impre_diagnostica',array("btnguardarevolmedic"=>true),'refresh');?>
              <?//$this->load->view('Asistencial/Historia/medico/f_historia_evolucion_medica',array("btnguardarevolmedic"=>true),'refresh');?>
            </form>
            <?
            break;
          case "orden":
          case "ordenesres":
            $idorden = $this->uri->segment(6,'');
            if(!empty($idorden)){
              $arr_historden["datorden"] = $this->Historia->orden_obtener($idorden);
              switch($arr_historden["datorden"][0]->tipo_t67){
                case "QUIR":
                  $arr_historden["orden"] = $this->load->view('Asistencial/Historia/medico/f_historia_evoldiaria_rqxanest',"",true);
                  break;
                case "LABO":
                  $this->load->view('Asistencial/Historia/medico/f_historia_procedimientos_labo',"",'refresh');
                  break;
                case "AYDX":
                  $this->load->view('Asistencial/Historia/medico/f_historia_procedimientos_aydx',"",'refresh');
                  break;
                case "PROC":
                  $this->load->view('Asistencial/Historia/medico/f_historia_procedimientos_proc',"",'refresh');
                  break;
                default:
                  $this->load->view('Asistencial/Historia/medico/f_historia_procedimientos_otros',"",'refresh');
                  break;
              }
            }
            $this->load->view('Asistencial/Historia/medico/f_historia_ordenes',$arr_historden,'refresh');
            break;
          case "medsuminis":
            $this->load->view('Asistencial/Historia/medico/f_historia_medssum',"",'refresh');
            break;
          case "cierre":
            ?>
            <form id="form_historia_cierre" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
            <?
            $this->load->view('Asistencial/Historia/medico/f_historia_cierre',"",'refresh');
            ?>
            </form>
            <?
            break;
          case "imprimir":
            $this->load->view('Asistencial/Historia/medico/f_historia_imprimir',"",'refresh');
            break;
        }
        ?>
      </div>
</div>