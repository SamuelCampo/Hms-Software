<?php // var_dump($autorizaciones); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <style>
      html{
        margin: 1cm;
      }
      @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -0px; right: 0px; height: 150px; text-align: left; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    #footer { position: fixed; left: 0px; bottom: -200px; right: 0px; height: 150px; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    /*#footer .page:after { content: counter(page, upper-roman); }*/
    </style>
</head>
<body style="
		font-family: 'B612', sans-serif;
		padding:50px 0px;
        margin:20px 0px 0px 0px;
        color: #000000;
        font-size:7pt;">
        <div id="header">
              <strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?><span> </span>
              <strong>Tipo Doc: </strong><?=$datpaciente->identiftipo_t3?> <strong>Documento: </strong><?=$datpaciente->identificacion_t3?><span> </span>
              <strong>HC.No: </strong><?=$dathistoria->idps_historia_t4?><span> </span>
    </div>    <table width="100%" border="0" cellspacing="0" cellpadding="1">
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
        <h1 align="center" > AUTORIZACI&oacute;N</h1>
        <?=$this->load->view('Asistencial/Historia/f_historia_detencab','',true);?>
      <div style="">
      <table width="100%" border="0" cellspacing="0" cellpadding="1" style="">
          <tr valign="top">
            <td colspan="2">
              <strong>Diagn&oacute;stico Principal</strong> <br/>
              <?=$datconsulta->dxprincipal_t64?>
            </td>
            <td colspan="1">
              <strong>Diagnostico Relacionado</strong> <br/>
              <?=$datconsulta->dxrelprincipal_t64?>
            </td>
            <td colspan="1">
            <?if(!empty($datconsulta->dxsecundario_t64)){?>
              <strong>Ojo Comprometido</strong> <br/>
              <?=$datoconsulta[0]->dxojocomprometido.$datoconsultas[0]->dxojocomprometido;?>
            <?}?>
          </td>
         </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datconsulta->dxsecundario_t64)){?>
              <strong>Dx Secundario</strong> <br/>
              <?=$datconsulta->dxsecundario_t64;?>
            <?}?>
          </td>
          <td colspan="1">
            <?if(!empty($datconsulta->dxrelsecundario_t64)){?>
              <strong>Dx Rel. Secundario</strong> <br/>
              <?=$datconsulta->dxrelsecundario_t64;?>
            <?}?>
          </td>
          <td colspan="1">
            <?if(!empty($datconsulta->tipooption_t64)){?>
              <strong>Tipo de Diagnostico</strong> <br/>
              <?=$datconsulta->tipooption_t64;?>
            <?}?>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datconsulta->dxtercero_t64)){?>
              <strong>Observacion del DX Principal</strong> <br/>
              <?=$datconsulta->dxtercero_t64;?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datconsulta->dxcuarto_t64)){?>
              <strong>Observacion del DX Secuandario</strong> <br/>
              <?=$datconsulta->dxcuarto_t64;?>
            <?}?>
          </td>
        </tr>
        <tr>

          <td colspan="1">
            <?if(!empty($datconsulta->causaext_t64)){?>
              <strong>Causa Externa</strong> <br/>
              <?=$datconsulta->causaext_t64;?>
            <?}?>
          </td>
          <td colspan="1">
            <?if(!empty($datconsulta->viaing_t64)){?>
              <strong>Via Ingreso</strong> <br/>
              <?=$datconsulta->viaing_t64;?>
            <?}?>
          </td>
          <td colspan="1">
            <?if(!empty($datconsulta->finalconsu_t64)){?>
              <strong>FINALIDAD DE LA CONSULTA</strong> <br/>
              <?=$datconsulta->finalconsu_t64;?>
            <?}?>
          </td>
          <td colspan="1">
            <?if(!empty($datconsulta->finalproc_t64)){?>
              <strong>FINALIDAD DEL PROCEDIMIENTO</strong> <br/>
              <?=$datconsulta->finalproc_t64;?>
            <?}?>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datconsulta->dxegreso_t64)){?>
              <strong>Dx Egreso</strong> <br/>
              <?=$datconsulta->dxegreso_t64;?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datconsulta->dxfallecido_t64)){?>
              <strong>Dx Fallecido</strong> <br/>
              <?=$datconsulta->dxfallecido_t64;?>
            <?}?>
          </td>
        </tr>
          <tr>
            <td align="center" width="50%" colspan="2">
              <strong>FECHA ATENCI&Oacute;N</strong>
            </td>
            <td align="center" width="50%" colspan="2">
              <strong>EGRESO</strong>
            </td> 
          </tr> 
          <tr>
              <td ><strong> Fecha / Hora </strong></td> 
              <td ><strong> V&iacute;a</strong></td>
              <td ><strong> Fecha/ Hora </strong></td> 
              <td ><strong> V&iacute;a</strong></td>
          </tr>
          <tr>
            <?php if (!empty($datconsulta->datevoluciones['TERAPIAS'][0]->fmod_t68)): ?>
              <? foreach($datconsulta->datordenes as $tipo=>$arr_ordenes){
              if(is_array($arr_ordenes) && ($tipo!='MED'&&$tipo!='SUM')){
                foreach($arr_ordenes as $idorden=>$arr_orden){
                  if(is_array($arr_orden)){
                    foreach($arr_orden as $detorden){
                      $fecha_ingreso = $detorden->fmod_t67;
                    }
                  }
                }
              }
            } ?>
              <td ><?=$fecha_ingreso?></td>
              <?php else: ?>
              <td ><?=$dathistoria->fingreso_t4?></td>
            <?php endif ?>
            
            <td ><?=$dathistoria->viaing_t4?></td>
            <td ><?php echo $datconsulta->fsalida_t4; ?></td>
            <td ><?=$datconsulta->destinopac_t64?></td>
          </tr>
        <tr>
          <td colspan="2">
            <strong>Condiciones de Salida</strong> <br/>
            <?=$datconsulta->condicionsalida_t68?>       
          </td>
          <td >
              <strong>Estado:</strong> <?=$datpaciente->estado_t3?> 
            </td> 
            <td >
              <strong>Destino:</strong><?=$datconsulta->destinopac_t64?> 
            </td>
        </tr>
        <tr>
        <td colspan="4">
          <?if(!empty($datconsulta->dxfallecido_t64)){?>
            <strong>Dia Muerte</strong> <br/>
            <?=$datconsulta->dxfallecido_t64;?>
          <?}?>
         </td>
        </tr>
       </table>
      </div>
	<table style="width: 100%">
		<thead>
		</thead>
	</table>
	<table style="width: 100%">
		<thead>
			<tr>
				<td><b>Codigo</b></td>
				<td><b>Fecha</b></td>
				<td><b>Procedimiento</b></td>
				<td><b>Cantidad</b></td>
			</tr>
		</thead>
		<tbody>
      <?php foreach ($autorizaciones as $fila): ?>
        <tr>
          <td><?= $fila->codigo_t67 ?></td>
          <td><?= $fila->fmod_t67 ?></td>
          <td><?= $fila->descripcion_t67 ?></td>
          <td><?= $fila->cantidad_t67 ?></td>
        </tr>
      <?php endforeach ?>
		</tbody>
	</table>
	<table style="width: 100%">
		<tbody>
			<tr>
				<td><b>Justificaci&oacute;n</b>: <?= $autorizaciones[0]->ps_justificacion_t11  ?></td>
			</tr>
			<tr>
				<td><b>Observaciones</b>: <?= $autorizaciones[0]->ps_observacion_t11  ?></td>
			</tr>
		</tbody>
	</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td>
              <br/>
              <br/>
              &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br/>
              <?=$datconsulta->mednomcomp_t64?><br/>
              <?=$datconsulta->medespec_t64?><br/>
              REG. <?=$datconsulta->medreg_t64?><br/>
              <?=$datconsulta->medcargo_t64?><br/>
            </td>
          </tr>
          <tr>
            <td>
              <br><br><br>
              
            </td>
          </tr>
        </table>
        <script type="text/php">
    if (isset($pdf)){
        $font = Font_Metrics::get_font('helvetica', 'normal');
        $size = 9;
        $y = $pdf->get_height() - 24;
        $x = $pdf->get_width() - 15 - Font_Metrics::get_text_width('1/1', $font, $size);
        $pdf->page_text($x, $y, '{PAGE_NUM}/{PAGE_COUNT}', $font, $size);
    }
</script>
</body>
</html>