<?php //$descripcion[0] = (object)$this->input->post(); ?>
<?php 	//var_dump($descripcion) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Descripci&oacute;n Quirurgica</title>

	<style>
	html{
        margin: 1cm;
      }
      @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -0px; right: 0px; height: 150px; text-align: left; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    #footer { position: fixed; left: 0px; bottom: -200px; right: 0px; height: 150px; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
		.text-center{
			text-align: center;
		}
		table,p,h4{
			padding: 20px;
		}
		body{
		font-family: 'B612', sans-serif;
		padding:50px 0px;
        margin:20px 0px 0px 0px;
        color: #000000;
        font-size:7pt;"
		}
		.div{
			border: 1px black solid
		}
	</style>
</head>
<body>
	<div id="header">
              <strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?><span> </span>
              <strong>Tipo Doc: </strong><?=$datpaciente->identiftipo_t3?> <strong>Documento: </strong><?=$datpaciente->identificacion_t3?><span> </span>
              <strong>HC.No: </strong><?=$dathistoria->idps_historia_t4?><span> </span>
    </div>
    	<table width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td>
              <table width="100%">
                <tr>
                  <td width="50px">
                    <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" style="width: 90px" alt="<?=$entidad->nombre_t75?>">
                  </td>
                  <td>
                    <div style="text-align: center;font-size: 8pt;">
                      <br>
                      <span><?=$this->Modulo->infoentidad->nombre_t75?></span><br> 
                      <span>NIT: <?=$this->Modulo->infoentidad->nit_t75?> </span><br> 
                      <span>DIR: <?=$this->Modulo->infoentidad->direccion_t75?> </span><br> 
                      <span>TEL: <?=$this->Modulo->infoentidad->telefono_t75?></span>
                      <br>
                      <br><br>
                      
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
	<div >
        <div class="div">
		<h3 class="text-center sombra">NOMBRE DEL PACIENTE</h3>
		<?=$this->load->view('Asistencial/Historia/f_historia_detencab','',true);?>
		</div>
		<div class="div">
		<h4 class="sombra">DATOS INICIALES</h4>
		<table width="100%">
			<?php 
			$date1 = new DateTime($descripcion[0]->fecha_inicio);
			$date2 = new DateTime($descripcion[0]->fecha_fin);
			$data = $date1->diff($date2); ?> 
			<tr>
				<td><b>Inicia Procedimiento: </b><?= $descripcion[0]->fecha_inicio ?> </td>
				<td><b>Finaliza Procedimiento:</b><?=$descripcion[0]->fecha_fin ?></td>
				<td><b>Tiempo Quirurgico: <?php echo ceil((strtotime($descripcion[0]->fecha_inicio) - strtotime($descripcion[0]->fecha_fin) / 60)).' Minutos'; ?></b></td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td><b>Tipo de Procedimiento:</b> <?= $descripcion[0]->tipo_procedimiento 	 ?> </td>
				<td><b>Sala:</b>principal</td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">TIPO DE CIRUGIA</h4>
		<table width="100%">
			<tr>
				<td class="text-center"><b><?= $descripcion[0]->tipo_cirugia_qui ?></b></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">DIAGNOSTICO</h4>
		<table width="100%">
			<tr>
				<td>DX Principal<b> <?=$descripcion[0]->dxprincipal?></b></td>
			</tr>
			<tr>
				<td>Observacion de DX Principal<b> <?=$datconsulta->dxtercero_t64?></b></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">PROCEDIMIENTO QUIRURGICOS</h4>
		<table width="100%">
			<tr>
				<td>Procedimiento</td>
				<td>Via</td>
				<td>Principal</td>
				<td>Bilateral</td>
				<td>Realizado</td>
			</tr>
			<?php foreach ($procedimientos['procedimmiento'] as $fila): ?>
				<tr style="font-weight: bold;">
					<td><?= $fila->descripcion_t67 ?></td>
					<td><?= $fila->via_t67 ?></td>
					<td><?= $fila->ps_principal_t67 ?></td>
					<td><?= $fila->ps_bilateral_t67 ?></td>
					<td><?= $fila->ps_realizado_t67 ?></td>
				</tr>
        <?php endforeach ?>
		</table>
		</div>
		<div class="div">
		<h4 class="sombra text-center"><b>SUSPENSION Y CONVERSION</b></h4>
		<table width="100%">
			<tr>
				<td><p><?=$descripcion[0]->suspension?></p></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">EQUIPO QUIRURGICO</h4>
		<table width="100%">
			<tr>
				<td><b>Cirujano:</b> <?=$descripcion[0]->cirujano_principal  ?></td>
				<td><b>Cirujano Auxiliar:</b> <?=$descripcion[0]->cirujano_auxiliar  ?></td>
				<td><b>Cirujano Auxiliar2:</b> <?=$descripcion[0]->cirujano_auxiliar2  ?></td>
				<td><b>Cirujano Auxiliar3:</b> <?=$descripcion[0]->cirujano_auxiliar3  ?></td>
			</tr>
			<tr>	
				<td><b>ANESTESIOLOGO:</b> <?=$descripcion[0]->anesteciologo  ?></td>
				<td><b>AUXILIAR:</b> <?=$descripcion[0]->anesteciologo_auxiliar  ?></td>	
				<td><b>INSTRUMENTADOR:</b> <?=$descripcion[0]->instrumentador  ?></td>
				<td><b>CIRCULANTE:</b> <?=$descripcion[0]->circulante  ?></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">DIAGNOSTICO POST-OPERATORIOS</h4>
		<table width="100%">	
			<tr>
				<td><b><?=$datconsulta->dxsecundario_t64?></b></td>
				<td><b><?=$datconsulta->dxrelsecundario?></b></td>	
			</tr>
		</table>
		</div>
				<div class="div">
		<h4 class="sombra text-center">DESCRIPCION QUIRURGICA</h4>
		<p><?= $descripcion[0]->descripcion_quirurgica  ?></p>
		</div>
		<div class="div">
		<h4 class="sombra text-center">COMPLICACIONES</h4>
		<p><?= $descripcion[0]->complicaciones  ?></p>
		</div>
		<div class="div">
		<h4 class="sombra text-center">PROCEDIMIENTOS INTRAOPERATORIOS NO QUIRURGICOS</h4>
		<p><?= $descripcion[0]->procedimientos_intraoperatorios  ?></p>
		</div>
		<div class="div">
		<h4 class="sombra text-center">MEDICACION EN BLOCK</h4>
		<p><?= $descripcion[0]->medicacion_en_block  ?></p>
		</div>
		<table width="100%">
			<tr>
				<td width="40%" class="text-center"><b>&nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br/>
              <?=$datconsulta->mednomcomp_t64?><br/>
              <?=$datconsulta->medespec_t64?><br/>
              REG. <?=$datconsulta->medreg_t64?><br/>
              <?=$datconsulta->medcargo_t64?><br/></b></td>
				<td width="40%" class="text-center"><b>Fecha de Impresion:</b> <?php echo date('Y-m-d h:i:s') ?></td>
			</tr>
		</table>
	</div>
</body>
</html>