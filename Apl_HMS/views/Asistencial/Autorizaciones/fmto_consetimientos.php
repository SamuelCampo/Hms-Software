<?php //var_dump($this->Modulo->infoentidad); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=B612" rel="stylesheet">
	<style>
      @page { margin: 50px 50px; }
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
        <h1 align="center" > CONSENTIMIENTO INFORMADO</h1>
	<?=$this->load->view('Asistencial/Historia/f_historia_detencab','',true);?>
	<h1 style="text-align: center;"><?= $autorizaciones[0]->ps_titulo_t10 ?></h1>
<h5>OBJETIVOS</h5>
<p style="text-align: justify-all;"><?= $autorizaciones[0]->ps_objetivo_t10 ?></p>
	<h5>DESCRIPCI&oacute;N DEL PROCEDIMIENTO</h5>
<p style="text-align: justify-all;">El cirujano/a me ha explicado que tengo una enfermedad grave que requiere una intervenci&oacute;n quir&uacute;rgica para ser tratada, antes de que aparezcan complicaciones m&aacute;s graves. Esta intervenci&oacute;n debe realizarse de forma urgente, aunque no dispongamos de un diagn&oacute;stico cierto, ya que mi estado no permite esperar a la realizaci&oacute;n de otras pruebas. <br></p>
<p style="text-align: justify;">En su caso y en este momento, pensamos que el diagn&oacute;stico probable es <b><?=$datconsulta->dxprincipal_t64?></b> Cabe la posibilidad de que durante la cirug&iacute;a haya que realizar modificaciones del procedimiento por los hallazgos intraoperatorios, para proporcionarme el tratamiento m&aacute;s adecuado.</p> <br> <p style="text-align: justify;">El procedimiento requiere anestesia de cuyos riesgos ser&eacute; informado por el anestesi&oacute;logo, y es posible que durante o despu&eacute;s de la intervenci&oacute;n sea necesario la utilizaci&oacute;n de sangre y/o hemoderivados.</p> <br> <p style="text-align: justify;">Se podr&aacute; utilizar parte de los tejidos obtenidos con car&aacute;cter cient&iacute;fico, en ning&uacute;n caso comercial, salvo que yo manifieste lo contrario. <br> La realizaci&oacute;n de mi procedimiento puede ser filmado con fines cient&iacute;ficos o did&aacute;cticos, salvo que yo manifieste lo contrario. <br></p> <h5><b>BENEFICIOS DEL PROCEDIMIENTO</b></h5> <p style="text-align: justify;">El cirujano/a me ha informado que, mediante este procedimiento, se pretende dar el tratamiento m&aacute;s eficaz a mi enfermedad, y que debe realizarse de forma urgente, ya que mi estado no permite esperar </p>

<h5><b>ALTERNATIVAS AL PROCEDIMIENTO</b></h5> <p style="text-align: justify-all;">En su caso y en este momento, pensamos que no existe una alternativa eficaz de tratamiento para su enfermedad </p>

<h5><b>RIESGOS GENERALES Y ESPEC&iacute;FICOS DEL PROCEDIMIENTO</b></h5>
<p style="text-align: justify;">Comprendo que, a pesar de la adecuada elecci&oacute;n de la t&eacute;cnica y de su correcta realizaci&oacute;n, pueden presentarse efectos indeseables, tanto los comunes derivados de toda intervenci&oacute;n y que pueden afectar a todos los &oacute;rganos y sistemas como otros espec&iacute;ficos del procedimiento, que pueden ser:</p>
<p style="text-align: justify;">Riesgos poco graves y frecuentes: Infecci&oacute;n o sangrado de la herida quir&uacute;rgica, retenci&oacute;n aguda de orina, flebitis. Dolor prolongado en la zona de la operaci&oacute;n</p>
<p style="text-align: justify;">Estas complicaciones habitualmente se resuelven con tratamiento m&eacute;dico (medicamentos, sueros, etc.), pero pueden llegar a requerir una reintervenci&oacute;n, generalmente de urgencia, y puede producirse la muerte.</p>
<h5><b>CARACTERISTICAS</b></h5>
<p style="text-align: justify-all;"><?= $autorizaciones[0]->ps_caracteristicas_t10 ?></p>

<h5>RIESGOS PERSONALIZADOS Y OTRAS CIRCUNSTANCIAS:</h5>
<p style="text-align: justify-all;"><?= $autorizaciones[0]->ps_riesgos_cir_t10 ?></p>
<h5><b>CONSECUENCIAS DE LA CIRUG&iacute;A: </b></h5>
<p style="text-align: justify-all;"><?= $autorizaciones[0]->ps_conlusion_t10 ?></p>
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