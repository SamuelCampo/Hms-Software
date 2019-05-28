<?php //$descripcion[0] = (object)$this->input->post(); ?>
<?php 	var_dump($descripcion) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Plantilla</title>

	<style>
		.text-center{
			text-align: center;
		}
		table{
			padding: 20px;
		}
		body{
		font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:7pt;"
		}
		.sombra{
			background-color: #ccc;
			padding: 5px;
			margin-top: 0px
		}
		.div{
			border: 1px black solid
		}
	</style>
</head>
<body>
	<div >
		<table style="margin-bottom: -70px" width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td>
              <table width="100%">
                <tr>
                  <td width="70px">
                    <img style="width: 300px; height: 150px" src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
                  </td>
                  <td>
                    <h3 class="text-center"> DESCRIPCIÓN QUIRURGICA</h3>
                    <div style="text-align: left">
                      <br>
                      <span><?=$this->Modulo->infoentidad->nombre_t75?></span>
                      <br/>
                      <span>NIT: <?=$this->Modulo->infoentidad->nit_t75?></span>
                      <br/>
                      <span>DIR: <?=$this->Modulo->infoentidad->direccion_t75?></span>
                      <br/>
                      <span>TEL: <?=$this->Modulo->infoentidad->telefono_t75?></span>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <div class="div">
		<h3 class="text-center sombra">NOMBRE DEL PACIENTE</h3>
		<table width="100%">
			<tr>
				<td><b>Documento:</b> <?= $dathistoria->paciente_t4 ?></td>
				<td><b>Fecha de nacimiento:</b> <?= $dathistoria->fnacim_t3 ?></td>
				<td><b>Edad:</b><?= $datpaciente->edad ?> <b></td>
				<td></td>
				<td><b>Sexo:</b> <?= $dathistoria->genero_t3 ?></td>
				<td><b>Pertenecia Étnica:</b>></td>
				<td></td>
			</tr>
		</table>
		<table width="100%">	
			<tr>
				<td><b>Estado Civil:</b> <?= $dathistoria->estadocivil_t3 ?></td>
				<td><b>Ocupacion:</b> <?= $dathistoria->ocupacion_t3 ?></td>
				<td><b>Grupo Poblacional:</b> <?= $dathistoria->grupoet_t3 ?></td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td><b>Direccion:</b> <?= $dathistoria->direccion_t3 ?></td>
				<td><b>Lugar de Residencia:</b> <?= $dathistoria->zonares_t3 ?></td>
				<td><b>Telefono:</b> <?= $dathistoria->telefono_t3 ?></td>
				<td><b>Nº. Ingreso:</b> </td>
				<td><b>Fecha Registro:</b> <?= $dathistoria->fingreso_t4 ?></td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td><b>Entidad Pagadora:</b></td>
				<td><b>Particular tipo Afiliado:</b> <?= $dathistoria->tipoaf_t3 ?></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="sombra">DATOS INICIALES</h4>
		<table width="100%">
			<tr>
				<td><b>Inicia Procedimiento: </b><?= $descripcion[0]->fecha_inicio ?> </td>
				<td><b>Finaliza Procedimiento:</b><?=$descripcion[0]->fecha_fin ?></td>
				<td><b>Tiempo Quirúrgico:</b> 1:2100(hhmm)</td>
			</tr>
		</table>
		<table width="100%">
			<tr>
				<td><b>Tipo de Procedimiento:</b> </td>
				<td><b>Sala:</b></td>
				<td><b>Reintervencion:</b></td>
				<td><b>Recien Nacido:</b></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">Tipo De Anestecia</h4>
		<table width="100%">
			<tr>
				<td class="text-center"><b><?= $descripcion[0]->rh ?></b></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">DIAGNOSTICO</h4>
		<table width="100%">
			<tr>
				<td>DX Principal<b> <?=$datconsulta->dxprincipal_t64?></b></td>
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
				<td>Cod</td>
				<td>Cant</td>
				<td>Procedimiento</td>
				<td>Lateralidad</td>
				<td>Via</td>
				<td>Principal</td>
				<td>Bilateral</td>
				<td>Realizado</td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="sombra text-center"><b>Suspension Y Conversion</b></h4>
		<table width="100%">
			<tr>
				<td><p><?=$dathistoria->obs?></p></td>
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="text-center sombra">Equipo Quirurgico</h4>
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
				<td><b><?=$datconsulta->dxtercero_t64?></b></td>	
			</tr>
		</table>
		</div>
		<div class="div">
		<h4 class="sombra">COMPLICACIONES</h4>
		<p><?= $descripcion[0]->complicaciones  ?></p>
		</div>
		<div class="div">
		<h4 class="sombra">PROCEDIMIENTOS INTRAOPERATORIOS NO QUIRURGICOS</h4>
		<p><?= $descripcion[0]->procedimientos_intraoperatorios  ?></p>
		</div>
		<div class="div">
		<h4 class="sombra">MEDICACION EN BLOCK</h4>
		<p><?= $descripcion[0]->medicacion_en_block  ?></p>
		</div>
		<div class="div">
		<h4 class="sombra">Descripcion[0] Quirurgica</h4>
		</div>
		<div class="div">
		<table>
			<tr><td><b>N 1	</b> <?= $descripcion[0]->descripcion_quirurgica  ?></td></tr>
		</table>
		</div>
		<hr>
		<h4 class="text-center">Principal</h4>
		<p class="text-center">Direccion Calle 127 A 7-53 Piso 5 Telefono 7032530</p>
		<table width="100%">
			<tr>
				<td width="40%" class="text-center"><b>Impreso Por:</b> Lorem Ipsum</td>
				<td width="40%" class="text-center"><b>Fecha de Impresion:</b> Jun 15 2018</td>
			</tr>
		</table>
	</div>
</body>
</html>