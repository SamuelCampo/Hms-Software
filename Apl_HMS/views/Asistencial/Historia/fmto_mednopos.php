<?
  if(empty($hist_orden['NO POS']->durdias_t67)){
    @$diasnp = ($hist_orden['NO POS']->cantidad_t67*$hist_orden['NO POS']->frecuencia_t67)/($hist_orden['NO POS']->dosis_t67*24);
  }else{
    $diasnp = $hist_orden['NO POS']->durdias_t67;
  }
  if(empty($hist_orden['HPNP']->durdias_t67)){
    @$diashpnp = ($hist_orden['HPNP']->cantidad_t67*$hist_orden['HPNP']->frecuencia_t67)/($hist_orden['HPNP']->dosis_t67*24);
  }else{
    $diashpnp = $hist_orden['HPNP']->durdias_t67;
  }
?>

<html>
  <head></head>
  <body>
    <div style="
        margin:0;
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        color: #000000;
        font-size:7pt;
        padding:0em;">
      <div>       
        <table width="100%" cellspacing="0" cellpadding="1" border="0" style="border-collapse: collapse">
        <tr>
            <td width="20%" rowspan="2" colspan="1" >
              <center>
                <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">                
              </center>
            </td >
            <td width="30%" colspan="4" rowspan="2" style="text-align: center">
              JUSTIFICACION MEDICA PARA LA SOLICITUD DE MEDICAMENTOS Y SERVICIOS NO POS
            </td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;"></td>
        </tr>
        <tr>
          <td style="text-align: center;"><b>Día</b><br><?=date('d',strtotime($hist_orden['NO POS']->fmod_t67))?></td>
          <td style="text-align: center;"><b>Mes</b><br><?=date('m',strtotime($hist_orden['NO POS']->fmod_t67))?></td>
          <td style="text-align: center;"><b>Año</b><br><?=date('Y',strtotime($hist_orden['NO POS']->fmod_t67))?></td>
        </tr>
        <tr>
            <td colspan="8" style="border: hidden;border-top: 1px solid black; border-left: 1px solid black;padding:1em;" nowrap>
              <?=$this->load->view('Asistencial/Historia/f_historia_detencab','',true);?>
              <br>
            </td>
        </tr>
        <tr> 
            <td colspan="4" style="border: hidden;border-top: 1px solid black; border-left: 1px solid black;padding:1em;">
             <b>NOMBRE DEL MEDICO TRATANTE </b> <u>&nbsp;&nbsp; <?=$datconsulta->mednomcomp_t64?> &nbsp;&nbsp;&nbsp;</u> 
            </td>
            <td colspan="4" style="border: hidden;border-top: 1px solid black; border-right: 1px solid black;padding:1em;">
             <b>REG. MEDICO </b> <u>&nbsp;&nbsp; <?=$datconsulta->medreg_t64?> &nbsp;&nbsp;&nbsp;</u>
            </td>            
        </tr>
        <tr> 
            <td colspan="4" style="border: hidden; border-left: 1px solid black;padding:1em;">
             <b>ESPECIALIDAD </b> <u>&nbsp;&nbsp; <?=$agenda->especialidades_t12?> &nbsp;&nbsp;&nbsp;</u> 
            </td>
            <td colspan="4" style="border: hidden;border-right: 1px solid black;padding:1em;">
             <b>TELEFONO </b> <u>&nbsp;&nbsp; <?=$this->Modulo->infoentidad->telefono_t75?> &nbsp;&nbsp;&nbsp;</u> 
            </td>            
        </tr>
        <tr style="border-top:1px solid #000;;padding:1em;"> 
            <td colspan="8" style="border: hidden; border-top:1px solid #000;  border-right: 1px solid black; border-left: 1px solid black">
             <b>DIAGNOSTICO QUE MOTIVA ESTA SOLICITUD </b>
            </td>                       
        </tr>
        <tr> 
            <td colspan="4" style="border: hidden; border-left: 1px solid black">
            1.<u>&nbsp;&nbsp; <?=$datconsulta->dxprincipal_t64?> &nbsp;&nbsp;&nbsp;</u> 
            </td>
            <td colspan="4" style="border: hidden; border-right: 1px solid black">
             Código CIE X:<u>&nbsp;&nbsp; <?=$datconsulta->dxprincipalcod_t64?> &nbsp;&nbsp;&nbsp;</u> 
            </td>            
        </tr>
        <tr > 
            <td colspan="8" style="border: hidden; border-top:1px solid #000; border-left: 1px solid black;border-right: 1px solid black">
                <b>RESUMEN DE HISTORIA CLINICA DEL PACIENTE </b>(Favor describir datos relevantes de la historia clínica del paciente y su estado actual, que justifique la solicitud y detalle los tratamientos POS Utilizados). 
            </td>            
        </tr>
        <tr> 
            <td colspan="8" style="border: hidden; border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;">
              <u>
               DIAGNOSTICOS
               <?=$datconsulta->dxprincipal_t64?>
               <?=$datconsulta->dxrelprincipal_t64?>
               <?=$datconsulta->dxsecundario_t64?>
               <?=$datconsulta->dxrelsecundario_t64?>
               <?=$datconsulta->dxegreso_t64?>
               <?=$datconsulta->dxfallecido_t64?>
              </u>
              <p style="text-align: justify">
                <b>Enfermedad Actual: </b><?=$datconsulta->enfermactual_t64?><br>
                <b>Conducta: </b><?=$datconsulta->conducta_t64?><br>
                <b>Plan de Manejo: </b><?=$datconsulta->planmanejo_t64?><br>
              </p>
            </td>            
        </tr>
        <tr>
            <td colspan="8" style="border: hidden; border-left: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; text-align: center">
              ______________________________________________________________________________
            </td>            
        </tr>
        <tr> 
            <td colspan="8" style="border: hidden; border-left: 1px solid black;border-right: 1px solid black; border-top: 1px solid black"  >
                <b>JUSTIFICACIÓN DEL USO DEL MEDICAMENTO O PROCEDIMIENTO NO POS</b>(Favor describir las características y uso aprobado del medicamento y su pertinencia para el  manejo del paciente ó las características del procedimiento, su pertinencia y costo beneficio). 
            </td>            
        </tr>
        <tr> 
            <td colspan="8" style="border: hidden; border-left: 1px solid black;border-right: 1px solid black;">
               <u>
                <b>Justificaci&oacute;n: </b><?=$hist_orden['NO POS']->noposjust_t67?><br>
                <b>Evidencia Científica: </b><?=$hist_orden['NO POS']->noposevid_t67?><br>
                <b>Precauciones y contraindicaciones: </b><?=$hist_orden['NO POS']->noposprec_t67?><br>
              </u>
            </td>            
        </tr>
        <tr> 
            <td colspan="8" style="border: hidden; border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black; text-align: center">
             ______________________________________________________________________________
            </td>            
        </tr>
        <tr> 
            <td colspan="8" style="text-align: center">
             <b>MEDICAMENTO NO POS SOLICITADO</b>
            </td>                       
        </tr>
        <tr bgcolor="gray"> 
            <td colspan="3" style="text-align: center;font-size:.8em;">
             <b>NOMBRE DE LA SUSTANCIA ACTIVA (GENERICO)</b>
            </td> 
            <td style="text-align: center; font-size:.8em;">
             <b>FORMA FARMACEUTICA</b>
            </td>
            <td style="text-align: center; font-size:.8em">
             <b>CONCENTRACIÓN</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>DOSIS DIA</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>No. DIAS TRATAMIENTO ORDENADO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>TOTAL TRATAMIENTO ORDENADO</b>
            </td>
        </tr>
        <tr> 
            <td colspan="3" style="text-align: center">
            <?=$detmednp->principioact_t73?><br>
            </td> 
            <td style="text-align: center">
             <?=$detmednp->concentracion_t73?><br>
            </td>
            <td style="text-align: center">
             <?=$detmednp->unidad_t73?><br>
            </td>
            <td style="text-align: center">
             <?=$hist_orden['NO POS']->udosis_t67?>
            </td>
            <td style="text-align: center">
             <?=number_format($diasnp)?><br>
            </td>
            <td style="text-align: center">
             <?=$hist_orden['NO POS']->cantidad_t67?><br>
            </td>
        </tr>
        <tr bgcolor="gray"> 
            <td colspan="3" style="text-align: center;font-size:.8em;">
             <b>MEDICAMENTO HOMOLOGO EN EL POS</b>
            </td> 
            <td style="text-align: center;font-size:.8em">
             <b>FORMA FARMACEUTICA</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>CONCENTRACIÓN</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>DOSIS DIA</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>No. DIAS TRATAMIENTO ORDENADO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>TOTAL TRATAMIENTO ORDENADO</b>
            </td>
        </tr>
        <tr> 
            <td colspan="3" style="text-align: center">
            <?=$hist_orden['NO POS']->ordennopost?><br>
            </td> 
            <td style="text-align: center">
             <?=$detmednp->concentracion_t73?><br>
            </td>
            <td style="text-align: center">
             <?=$detmednp->unidad_t73?><br>
            </td>
            <td style="text-align: center">
             <?=$hist_orden['HPNP']->dosis_t67?><br><?=$hist_orden['NO POS']->udosis_t67?>
            </td>
            <td style="text-align: center">
             <?=number_format($diashpnp)?><br>
            </td>
            <td style="text-align: center">
             <?=$hist_orden['NO POS']->cantidad_t67?><br>
            </td>
        </tr>
        <tr> 
            <td colspan="8" style="text-align: center;">
             <b>PROCEDIMIENTO NO POS SOLICITADO</b>
            </td>                       
        </tr>
        <tr bgcolor="gray"> 
            <td colspan="3" style="text-align: center;font-size:.8em;">
             <b>NOMBRE DEL PROCEDIMIENTO NO POS</b>
            </td> 
            <td style="text-align: center;font-size:.8em">
             <b>CODIGO CUPS</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>OTRO CODIGO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>FRECUENCIA DE USO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>TIEMPO ORDENADO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>CANTIDAD TOTAL ORDENADA</b>
            </td>
        </tr>
        <tr> 
            <td colspan="3" style="text-align: center">
              &nbsp;<br><br>
            </td> 
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
        </tr>
        <tr bgcolor="gray"> 
            <td colspan="3" style="text-align: center;font-size:.8em;">
             <b>NOMBRE DEL PROCEDIMIENTO HOMOLOGO EN EL POS</b>
            </td> 
            <td style="text-align: center;font-size:.8em">
             <b>CODIGO MAPIPOS</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>OTRO CODIGO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>FRECUENCIA DE USO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>TIEMPO ORDENADO</b>
            </td>
            <td style="text-align: center;font-size:.8em">
             <b>CANTIDAD TOTAL ORDENADA</b>
            </td>
        </tr> 
        <tr> 
            <td colspan="3" style="text-align: center">
            &nbsp;<br><br>
            </td> 
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
            <td style="text-align: center">
             &nbsp;<br><br>
            </td>
        </tr>
    </table>
          <br/>  <br/>
    
          
    <table width="100%" cellspacing="0" cellpadding="1" border="1" style="border-collapse: collapse">
        <tr>
          <th width=" 80%">
            CUMPLIMIENTO DE LA LEGISLACIÓN SOBRE EL USO EN COLOMBIA
          </th>
          <th width=" 10%">
            SI
          </th>
          <th width="10%">
            NO
          </th>          
        </tr>
        <tr>
          <td width=" 80%">
            ¿ESTA AUTORIZADO EL USO DEL MEDICAMENTO PARA ESTA ENFERMEDAD POR EL INVIMA?
          </td>
          <td width=" 10%">
            <?php if ($hist_orden['NO POS']->autorizado_m == "si"): ?>
              <?php echo  "X" ?>
            <?php endif ?>
          </td>
          <td width="10%">
           <?php if ($hist_orden['NO POS']->autorizado_m == "No"): ?>
             <?php echo  "X" ?>
           <?php endif ?>
          </td>          
        </tr>
        <tr>
          <td width=" 80%">
            ¿ESTA AUTORIZADA LA EJECUCIÓN DEL PROCEDIMIENTO POR LA SOCIEDADES CIENTIFICAS DEL PAIS?
          </td>
          <td width=" 10%">
            <?php if ($hist_orden['NO POS']->ejecucion_m == "si"): ?>
             <?php echo  "X" ?>
           <?php endif ?>
          </td>
          <td width="10%">
           <?php if ($hist_orden['NO POS']->ejecucion_m == "No"): ?>
             <?php echo  "X" ?>
           <?php endif ?>
          </td>          
        </tr>
    </table>
           <br/> <br/> <br/>
    <table width="100%" cellspacing="0" cellpadding="1" border="0">  
        <tr>
            <td width="70%">
                <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> <br>FIRMA DEL MEDICO QUE SOLICITA 
            </td>
            <td width="30%">
              REG. MEDICO <u>&nbsp;&nbsp;&nbsp; <?=$datconsulta->medreg_t64?> &nbsp;&nbsp;&nbsp;</u>
            </td>
        </tr>
    </table>         
      
    
    </div>
    <br><br><br>
    <?=$this->load->view('Genericas/fmto_hmspie');?>
        
    </div>
  </body>
</html>
    