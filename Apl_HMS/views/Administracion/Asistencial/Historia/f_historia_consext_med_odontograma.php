<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $accionmenu = $this->uri->segment(3);
  
    $edad=calculoedad($datpaciente->fnacim_t3);

  //var_dump($dathistoria->estado_t4);
?>

    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend class="no-margin">
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b><br> Edad: <?=$edad?>
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
       <!-- <div class="form-group no-margin no-padding">
          <?if(!empty($datconsulta->dxprincipalcod_t64)){?>
            <div class="col-lg-10">
            <label class="control-label">DX Principal:</label>
            <?=$datconsulta->dxprincipal_t64?>
          </div>
          <?}?>
        </div>-->
      </div>
      <div class="row paddingh">
      <p>
     <!--  <a class="btn btn-primary btn-lg" href="http://apln.hms.com.co/odontograma/odontograma.php?id=<?php echo $datpaciente->identificacion_t3 ?>" target="_blank" role="button">abrir en una ventana externa</a> -->
      </p>
       <iframe style="width: 100%; height: 450px;" src="http://apln.hms.com.co/odontograma/odontograma.php?id=<?php echo $datpaciente->identificacion_t3 ?>"></iframe>
      </div>
       <div class="form-group" align="right">
             
                <a href="#"><button onclick="window.print();" class="btn  <?=$this->Planthtml->estilo->colorprinc?>"><i class="fa fa-print"></i></button></a>
          
          </div>
</div>|