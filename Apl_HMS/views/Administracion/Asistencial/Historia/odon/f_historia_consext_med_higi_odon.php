<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $accionmenu = $this->uri->segment(3);
 $edad=calculoedad($datpaciente->fnacim_t3);

$mensaje=$_POST['mensaje'];

$mostrar=$_SESSION["mostrar"];
  //var_dump($dathistoria->estado_t4);

?>

    <?
      if(!empty($mostrar)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mostrar.'</div></div>';
      }
    ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend class="no-margin">
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> <?=$edad?>
        </legend>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-5">
            <label class="control-label">Administradora:</label><br>
            <?=$dathistoria->administradora_t3?>
          </div>
          <div class="col-lg-3">
            <label class="control-label">Servicio:</label><br>
            <?=$dathistoria->ubicacion_t4?>
          </div>
          <div class="col-lg-2">
            <label class="control-label">Fecha Consulta:</label><br>
            <?=$dathistoria->fingreso_t4?>
          </div>
          <div class="col-lg-1">
            <label class="control-label">RH:</label><br>
            <?=$datpaciente->rh_t3?>
          </div>
        </div>
        <div class="form-group no-margin no-padding" style="display:none">
          <?if(!empty($datconsulta->dxprincipalcod_t64)){?>
            <div class="col-lg-10">
            <label class="control-label">DX Principal:</label>
            <?=$datconsulta->dxprincipal_t64?>
          </div>
          <?}?>
        </div>
      </div>
      <div class="row paddingh">
      
            <!--<form id="" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/odontologia/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />-->
              <?
                $this->load->view('Asistencial/Historia/odon/f_historia_evolucion_higi',"",'refresh');
              ?>
              <div class="form-group" style="display:none">
                <div class="row text-center">
                 <button name="formularioenviado" value="consulta_odon" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            <!--</form>-->
      </div>
</div>
<?unset($_SESSION["mostrar"]);?>
