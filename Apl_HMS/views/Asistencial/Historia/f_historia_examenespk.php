<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $dia=date("d");
  $mes=date("m");
  $ano=date("Y");
  $resultado=0;
  $accionmenu = $this->uri->segment(3);
  //$fecha = explode("-",$datpaciente->fnacim_t3);
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
        <div class="form-group no-margin no-padding">
          <?if(!empty($datconsulta->dxprincipalcod_t64)){?>
            <div class="col-lg-10">
            <label class="control-label">DX Principal:</label>
            <?=$datconsulta->dxprincipal_t64?>
          </div>
          <?}?>
        </div>
      </div>
            <div class="row paddingh">
                <div class="col-lg-4">
                <h1>Tipo</h1>
                </div>
                <div class="col-lg-4">
                <h1>Referencia</h1>
                </div>
                <div class="col-lg-4">
                <h1>Resultado</h1>
                </div>
            </div>
            <form method="post" action="<?php echo base_url()."inicio.php/consexterna/examenespkpost"; ?>">
            <input type="hidden" name="codigo_t67" value='<?= $this->data['examen'][0]['codigo_t67'] ?>' />
            <input type="hidden" name="orden" value='<?= $this->uri->segment(6,'') ?>' />
                        <input type="hidden" name="code" value='<?= $this->uri->segment(4,'') ?>' />
            <?php foreach ($this->data['examenespk'] as $key => $value) {

              // debug($value,false);
              # code...
            ?>
                  <div class="row paddingh">
                <div class="col-lg-4">
                <?php echo $value['nombre200'];?>
                </div>
                <div class="col-lg-4">
                 <?php echo $value['referencia200'];?>
                </div>
                <div class="col-lg-4">
                <input type="text" name="resultado[<?php echo $value['id200']; ?>]" value="<?php foreach ($this->data['resultadosexamenespk201'] as $key2 => $value2) {
                  # code...
                  // debug($value['id200'],false);
                  // debug($value2['examen201']);
                  if((int)$value['id200']==(int)$value2['examen201']){echo $value2['resultado201'];}
                }?>" />
                </div>
            </div>

            <?php } ?>
                         <div class="row paddingh">
                <div class="col-lg-12 btn-group">
                <center>
                <input type="submit" class="btn btn-default" value="Guardar">
                </input>
                </center>
                </div>
                </div>
                </form>
</div>