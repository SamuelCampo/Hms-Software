<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]);
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  if($fecha[0]*1>0){
    $edad = "Edad ".(date("Y")-$fecha[0])." años";
  }else{
    $edad='';
  }

  //var_dump($dathistoria->estado_t4);
?>

    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend>
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> <?=$edad?>
        </legend>
        <div class="form-group">
          <div class="col-lg-2">
            <label class="control-label">Administradora:</label><br>
            <?=$dathistoria->administradora_t3?>
          </div>
          <div class="col-lg-2">
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
        <div class="form-group">
          <?if(!empty($datconsulta->dxprincipalcod_t64)){?>
            <div class="col-lg-10">
            <label class="control-label">DX Principal:</label>
            <?=$datconsulta->dxprincipal_t64?>
          </div>
          <?}?>
        </div>
      </div>
      <div class="row paddingh">
          <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Administraci&oacuten de medicamentos</a></li>
        <li><a href="#tab_cita" data-toggle="tab" id="pestcita" >Registro de medicamentos</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_paciente">
        	<table class="table">
        		<thead>
        			<th>Medicamento</th>
        			<th>Cantidad</th>
        			<th>Pen.</th>
        			<th>Horas</th>
        			<th>H. Dosis</th>
        			<!--<th>Proxima Dosis</th>-->
        			<th>Acci&oacuten</th>
        			<th>Dosis</th>
        			<th>Aplicado</th>
        		</thead>
        		<tbody>
        			<?php foreach($datconsulta->datordenes as $tipo=>$arr_ordenes){
              if(is_array($arr_ordenes) && ($tipo=='MED'||$tipo=='SUM')){
                foreach($arr_ordenes as $idorden=>$arr_orden){
                  if(is_array($arr_orden)){
                    foreach($arr_orden as $detorden){
                      if($detorden->pos_t67!='HPNP'){
                      @$dias = ($detorden->cantidad_t67*$detorden->frecuencia_t67)/($detorden->dosis_t67*24);
                      ?>
                      <tr valign="top">
                        <td><?=$detorden->descripcion_t67?></td>
                        <td><?=$detorden->cantidad_t67?></td>
                        <td><span id="cantidad_final<?=$detorden->idhist_ordenes_t67?>"><?=$detorden->cantidadpen_t67?></span><input type="hidden" id="cantidad<?=$detorden->idhist_ordenes_t67?>" value="<?php if($detorden->cantidadpen_t67 != ""){echo $detorden->cantidadpen_t67;}else{echo $detorden->cantidad_t67;}?>"></td>
                        <td>
                        	<span id="tiempo<?= $detorden->posologia_t67 ?>"><?= $detorden->posologia_t67 ?></span>
                        </td>
                        <td>
								        <input type="text" id="hora_input_inicio<?=$detorden->idhist_ordenes_t67?>" class="fechai<?=$detorden->idhist_ordenes_t67?>" readonly value="">
                        </td>
                        <!--<td>
                        	<span id="hora_fin<?=$detorden->idhist_ordenes_t67?>"><?= date("h:i:s",strtotime($detorden->prox_medicacion)) ?></span>
                        	<input type="hidden" id="hora_input_fin<?=$detorden->idhist_ordenes_t67?>" value="<?= date("h:i:s",strtotime($detorden->prox_medicacion)) ?>">
                        </td>-->
                        <td>
                        	<button class="btn btn-info btn-sm">Anular</button>
                        	<button class="btn btn-info btn-sm">Suspender</button>
                        </td>
                        <td>
                        	<?=$detorden->dosis_t67?>
                        </td>
                        <td>
                        	<button class="btn validar<?=$detorden->idhist_ordenes_t67?> btn-sm" data-number="<?=$detorden->idhist_ordenes_t67?>"  data-time="<?= $detorden->posologia_t67 ?>"><?php if (!empty($detorden->h_medicacion)): ?>
                        	V <?php else: ?>
                        	Iniciar
                        <?php endif ?></button>
                    	</td>   
                      </tr>
                    <?}}
                  }
                }
              }
            }?>
        		</tbody>
        	</table>
        </div>
        <div class="tab-pane" id="tab_cita">
        <div class="col-md-12">	
      	<div class="col-md-6">Medicamento</div>
      	<div class="col-md-6 text-center">Fecha / Hora</div>
      </div>
      <?php foreach($datconsulta->datordenes as $tipo=>$arr_ordenes){
              if(is_array($arr_ordenes) && ($tipo=='MED'||$tipo=='SUM')){
                foreach($arr_ordenes as $idorden=>$arr_orden){
                  if(is_array($arr_orden)){
                    foreach($arr_orden as $detorden){
                      if($detorden->pos_t67!='HPNP'){
                      @$dias = ($detorden->cantidad_t67*$detorden->frecuencia_t67)/($detorden->dosis_t67*24);
                      ?>
                            <div class="col-md-12">	
					      	<div class="col-md-6"><?=$detorden->descripcion_t67?></div>
					      	<div class="col-md-6">
					      		<ul id="registro<?=$detorden->idhist_ordenes_t67?>">
					      		<?php foreach ($registros as $val): ?>
					      			<?php if ($val->id_orden_registro == $detorden->idhist_ordenes_t67): ?>
					      				<ol><?php echo $val->momento_200." Aplicado por".$val->usrmod; ?></ol>
					      			<?php endif ?>
					      		<?php endforeach ?>
					      		</ul>	
					      	</div>
					      </div>
                    <?}}
                  }
                }
              }
            }?>
        </div>
      </div>
    </div>
    <!-- Funci&oacuten Paneles para la enfermeria -->

      </div>
</div>