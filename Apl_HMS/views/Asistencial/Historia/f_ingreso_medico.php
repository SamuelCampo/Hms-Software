    <?
      if($this->uri->segment(5) == "mensaje"){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.base64_decode($this->uri->segment(6)).'</div></div>';
      }
    ?>
<fieldset>
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
 <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" onsubmit="">
<div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_motivo" data-toggle="tab">Notas de Enfermeria</a></li>
      
      </ul>
  
<div class="tab-content">
<div class="tab-pane active" id="tab_motivo">
    
      <!--<div class="row">
      <label for="motivoconsulta" class="col-lg-2 control-label"><h5>Motivo de consulta:</h5></label>
      <div class="form-group">
      <div class="col-lg-6">
        <textarea name="motivoconsulta" class="form-control" rows="5" id="motivoconsulta" value="<?=$historia->motivoconsulta_t15?>"></textarea>
      </div>
      </div>
      </div>
      <div class="row">
      <label for="enfermedadactual" class="col-lg-2 control-label"><h5>Enfermedad actual:</h5></label>
      <div class="form-group">
      <div class="col-lg-6">
        <textarea name="enfermedadactual" class="form-control" rows="5" id="enfermedadactual" value="<?=$historia->enfermedadactual_t15?>"></textarea>
      </div>
      </div>
      </div>-->
      <div class="row">
        
    
</div>  

 

<div class="tab-pane" id="tab_examen_fisico">

  <div class="row">
    <div class="col-lg-12">
      <div class="form-group">
        <label for="altura" class="col-lg-1 control-label">Altura </label>
        <div class="col-lg-3">
          <input name="altura" type="number" class="form-control input-sm" placeholder="Cms" id="altura" <?=$deshabingmed?> value="<?=$datconsulta->altura_t64?>" required>
        </div>
        <label for="peso" class="col-lg-1 control-label">Peso</label>
        <div class="col-lg-3">
          <input name="peso" type="number" class="form-control input-sm" placeholder="Kg" id="peso" <?=$deshabingmed?> value="<?=$datconsulta->peso_t64?>" required>
        </div>
        <label for="imc" class="col-lg-1 control-label">IMC</label>
        <div class="col-lg-3">
          <input name="imc" type="number" class="form-control input-sm"  id="imc" <?=$deshabingmed?> value="<?=$datconsulta->imc_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">  
        <label for="fr" class="col-lg-1 control-label">Fr</label>
        <div class="col-lg-3">
          <input name="fr" type="number" class="form-control input-sm" placeholder="RPM" id="	fr" <?=$deshabingmed?> value="<?=$datconsulta->fr_t64?>" required>
        </div>
        <label for="fc" class="col-lg-1 control-label">Fc</label>
        <div class="col-lg-3">
          <input name="fc" type="number" class="form-control input-sm" placeholder="LPM" id="fc" <?=$deshabingmed?> value="<?=$datconsulta->fc_t64?>" required> 
        </div>
        <label for="ta" class="col-lg-1 control-label">TA</label>
        <div class="col-lg-3">
          <input name="ta" type="text" value="/" class="form-control input-sm" placeholder="mmHg" id="ta" <?=$deshabingmed?> value="<?=$datconsulta->ta_t64?>" required>
        </div>
      </div>
      <div class="form-group"> 
        <label for="sao2" class="col-lg-1 control-label">SPO2</label>
        <div class="col-lg-3">
          <input name="sao2" type="number" maxlength="100" min="1" max="100" placeholder="%" class="form-control input-sm" id="sao2" <?=$deshabingmed?> value="<?=$datconsulta->sao2_t64?>" required><br/>
        </div>
        <label for="temp" class="col-lg-1 control-label">T°</label>
        <div class="col-lg-3">
          <input name="temp" type="float" class="form-control input-sm" placeholder="ºC" id="temp" <?=$deshabingmed?> value="<?=$datconsulta->temp_t64?>" required>
        </div>
         <label for="glsgow" class="col-lg-1 control-label">Glasgow/15</label>
        <div class="col-lg-3">
          <input name="glsgow" type="number" class="form-control input-sm" placeholder="/15" id="glsgow" <?=$deshabingmed?> value="<?=$datconsulta->glsgow_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <label for="sao2" class="col-lg-1 control-label">Glasgow motora</label>
        <div class="col-lg-3">
          <input name="gmotora" type="number" maxlength="6" min="1" max="6" placeholder="/6" class="form-control input-sm" id="gocular"   required ><br/>
        </div>
        <label for="sao2" class="col-lg-1 control-label">Glasgow verbal</label>
        <div class="col-lg-3">
          <input name="gverb" type="number" maxlength="5" min="1" max="5" placeholder="/5" class="form-control input-sm" id="gverb" required><br/>
        </div>
        <label for="sao2" class="col-lg-1 control-label">Glasgow ocular</label>
        <div class="col-lg-3">
          <input name="gocular" type="number" maxlength="4" min="1" max="4" placeholder="/4" class="form-control input-sm" id="gocular"  required><br/>
        </div>
      </div>
      
    </div>
  </div>
  <div class="form-group">
    <label for="sao2" class="col-lg-1 control-label">Fecha</label>
    <div class="col-md-3">
      <input type="text" name="fmod" class="form-control fechas_date">
    </div>
  </div>
       
       
     <div class="form-group">

     <label for="plantratamiento" class="col-lg-2 control-label"><h5>Nota de Enfermeria:</h5></label>
     <div class="col-lg-6">
       <textarea class="form-control" rows="5" name="plantratamiento" value="<?=$this->Historia->plantratamiento_t15?>"></textarea>
     </div>
     </div>
      
</div>
  
  
  
  
</div>
</div>
   <div class="form-group">
        <div class="row text-center">
          <br/>
          <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">  Guardar  </button>
              <!--a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
                <span class = "glyphicon glyphicon-print"  aria-hidden = "true" > Imprimir</span>
              </a>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
                <span class = "glyphicon glyphicon-file"  aria-hidden = "true" >Nuevo</span>
          </a-->
        </div>
      </div>   
    
    
 </form>
 <div class="container-fluid">
 	<div class="row">
 		<?php foreach ($evoluciones as $fila): ?>
 			<div class="col-md-1"></div>
 			<div class="col-md-10" style="border:1px solid #ccc;margin-bottom: 10px;width: 100%">
 				<p><b>Hecho por: <?php echo $fila->usrmod_aux ?> </b> a las <b><?= $fila->fmod_aux ?></b></p>
 				<table class="table">
 					<tr>
 						<td><b>Altura</b></td>
 						<td><b>Peso</b></td>
 						<td><b>Fr</b></td>
 						<td><b>Fc</b></td>
 					</tr>
 					<tr>
 						<td><?php echo $fila->altura_evol ?></td>
 						<td><?php echo $fila->peso_evol ?></td>
 						<td><?php echo $fila->fr_evol ?></td>
 						<td><?php echo $fila->fc_evol ?></td>
 					</tr>
 					<tr>
 						<td><b>Ta</b></td>
 						<td><b>SPO2</b></td>
 						<td><b>T°</b></td>
 						<td><b>Glasgow/15</b></td>
 					</tr>
 					<tr>
 						<td><?php echo $fila->ta_evol ?></td>
 						<td><?php echo $fila->spo2_evol ?></td>
 						<td><?php echo $fila->tem_evol ?></td>
 						<td><?php echo $fila->glasgow ?></td>
 					</tr>
 					<tr>
 						<td><b>Glasgow motora</b></td>
 						<td><b>Glasgow verbal</b></td>
 						<td><b>Glasgow ocular</b></td>
 						<td><b>Nota de Enfermeria:</b></td>
 					</tr>
 					<tr>
 						<td><?php echo $fila->glasgow_motora ?></td>
 						<td><?php echo $fila->glasgow_verbal ?></td>
 						<td><?php echo $fila->glasgow_ocular ?></td>
 						<td><?php echo $fila->nota_enfermeria ?></td>
 					</tr>
 				</table>
 			</div>
 			<div class="col-md-1"></div>
 		<?php endforeach ?>
 	</div>
 </div>
</fieldset>