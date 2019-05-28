<?
  $resumen="ANTECEDENTES PERSONALES: ";
  if(!empty($datconsulta->datantpers->alergia_t65)){
    $resumen.="Alergias";
  }
  if(!empty($datconsulta->datantpers->dijestivas_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Enfermedades Digestivas";
  }
  if(!empty($datconsulta->datantpers->alzaimer_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Alzaheimer";
  }
  if(!empty($datconsulta->datantpers->hipertension_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Hipertensión";
  }
  if(!empty($datconsulta->datantpers->renales_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Enfermedades Renales";
  }
  if(!empty($datconsulta->datantpers->hepatitis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Hepatitis";
  }
  if(!empty($datconsulta->datantpers->asma_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Asma";
  }
  if(!empty($datconsulta->datantpers->neuromental_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Neuromental";
  }
  if(!empty($datconsulta->datantpers->lupus_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Lupus";
  }
  if(!empty($datconsulta->datantpers->cancer_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Cancer";
  }
  if(!empty($datconsulta->datantpers->sifilis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Sifilis";
  }
  if(!empty($datconsulta->datantpers->psoriasis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Psoriasis";
  }
  if(!empty($datconsulta->datantpers->cardiovascular_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Cardiovascular";
  }
  if(!empty($datconsulta->datantpers->tbc_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="T.B.C";
  }
  if(!empty($datconsulta->datantpers->artritis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Artritis";
  }
  if(!empty($datconsulta->datantpers->diabetes_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Diabetes";
  }
  if(!empty($datconsulta->datantpers->acv_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="A.C.V";
  }
  $resumen.=" Antecedentes Familiares ";
  if(!empty($datconsulta->datantfam->alergia_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Alergias";
  }
  if(!empty($datconsulta->datantfam->dijestivas_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Enfermedades Digestivas";
  }
  if(!empty($datconsulta->datantfam->alzaimer_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Alzaheimer";
  }
  if(!empty($datconsulta->datantfam->hipertension_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Hipertensión";
  }
  if(!empty($datconsulta->datantfam->renales_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Enfermedades Renales";
  }
  if(!empty($datconsulta->datantfam->hepatitis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Hepatitis";
  }
  if(!empty($datconsulta->datantfam->asma_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Asma";
  }
  if(!empty($datconsulta->datantfam->neuromental_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Neuromental";
  }
  if(!empty($datconsulta->datantfam->lupus_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Lupus";
  }
  if(!empty($datconsulta->datantfam->cancer_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Cancer";
  }
  if(!empty($datconsulta->datantfam->sifilis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Sifilis";
  }
  if(!empty($datconsulta->datantfam->psoriasis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Psoriasis";
  }
  if(!empty($datconsulta->datantfam->cardiovascular_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Cardiovascular";
  }
  if(!empty($datconsulta->datantfam->tbc_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="T.B.C";
  }
  if(!empty($datconsulta->datantfam->artritis_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Artritis";
  }
  if(!empty($datconsulta->datantfam->diabetes_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Diabetes";
  }
  if(!empty($datconsulta->datantfam->acv_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="A.C.V";
  }
  $resumen.=" ANTECEDENTES PATOLÓGICOS Y PSICOBIOLÓGICOS ";
  if(!empty($datconsulta->datantfam->hospitalizacion_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Hospitalizaciones";
  }
  if(!empty($datconsulta->datantfam->cronicas_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Enfermedades Cronicas";
  }
  if(!empty($datconsulta->cardiopatias_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Cardiopatias";
  }
  if(!empty($datconsulta->transfusion_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Transfusiones";
  }
  if(!empty($datconsulta->emergencia_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Emergencias";
  }
  if(!empty($datconsulta->venerias_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Enfermedades Venerias";
  }
  if(!empty($datconsulta->alergiaalim_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Alergias Alimentarias";
  }
  if(!empty($datconsulta->alcohol_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Alcohol";
  }
  if(!empty($datconsulta->drogas_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Drogas";
  }
  if(!empty($datconsulta->deporte_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen="Deporte";
  }
  if(!empty($datconsulta->tabaco_t66)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Tabaco";
  }
  if(!empty($datconsulta->datantpers->farmacologicos_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Farmacologicos".$datconsulta->datantpers->farmacologicos_t65;
  }
  if(!empty($datconsulta->datantpers->quirurgiccos_t65)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Quirurgicos".$datconsulta->datantpers->quirurgiccos_t65;
  }
  $resumen.=" EXAMEN FISICO ";
  if(!empty($datconsulta->altura_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Altura".$datconsulta->altura_t64;
  }
  if(!empty($datconsulta->peso_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Peso".$datconsulta->peso_t64;
  }
  if(!empty($datconsulta->imc_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="IMC".$datconsulta->imc_t64;
  }
  if(!empty($datconsulta->temp_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="T°".$datconsulta->temp_t64;
  }
  if(!empty($datconsulta->fr_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="F.R".$datconsulta->fr_t64;
  }
  if(!empty($datconsulta->fc_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="F.C".$datconsulta->fc_t64;
  }
  if(!empty($datconsulta->ta_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="T.A".$datconsulta->fc_t64;
  }
  if(!empty($datconsulta->so2_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="SPo2".$datconsulta->so2_t64;
  }
  if(!empty($datconsulta->glasgow_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Glasgow".$datconsulta->glasgow_t64;
  }
   if(!empty($datconsulta->tiss_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Tiss".$datconsulta->glasgow_t64;
   }  
   if(!empty($datconsulta->apache_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Apache".$datconsulta->apache_t64;
   }
   if(!empty($datconsulta->neurologico_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Neurologico".$datconsulta->neurologico_t64;
   }
   if(!empty($datconsulta->respiratorio_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Respiratorio".$datconsulta->respiratorio_t64;
   } 
   if(!empty($datconsulta->cardiovascular_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Cardiovascular".$datconsulta->cardiovascular_t64;
   } 
   if(!empty($datconsulta->abdomen_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Abdomen".$datconsulta->abdomen_t64;
   } 
   if(!empty($datconsulta->urinario_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Urinario".$datconsulta->urinario_t64;
   } 
   if(!empty($datconsulta->extremidad_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Extremidad".$datconsulta->extremidad_t64;
   } 
   if(!empty($datconsulta->otros_t64)){
    if(!empty($resumen)){
      $resumen.=", ";
    }
    $resumen.="Otros".$datconsulta->otros_t64;
   } 
   
   
 
?>
<html>
  <head></head>
  <body>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:7pt;">
        <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
          width=647 style='width:484.9pt;border-collapse:collapse;border:none;
          margin-left:4.8pt;margin-right:4.8pt'>
          <tr style='page-break-inside:avoid;height:12.7pt'>
            <td rowspan=2 valign=top style='width:93.1pt;border:
           solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
              <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
            </td>
           <td colspan=4 rowspan=2 valign=top style='width:393.1pt;border:
           solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt; text-align: center'>
           <b><span lang=ES style='font-size:11.0pt;font-family:"Tahoma","sans-serif"'>JUSTIFICACION
               MEDICA PARA LA SOLICITUD <br> DE MEDICAMENTOS Y SERVICIOS NO POS</span></b>
           </td>
           <td width=36 valign=top style='width:26.65pt;border:solid windowtext 1.0pt;
           border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>Día</span></b></p>
           </td>
           <td width=39 colspan=2 valign=top style='width:29.15pt;border:solid windowtext 1.0pt;
           border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>Mes</span></b></p>
           </td>
           <td width=47 valign=top style='width:35.35pt;border:solid windowtext 1.0pt;
           border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.7pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>Año</span></b></p>
           </td>
           <td style='border:none;padding:0cm 0cm 0cm 0cm' width=1><p class='MsoNormal'>&nbsp;</td>
          </tr>
          <tr style='page-break-inside:avoid;height:11.5pt'>
           <td width=36 style='width:26.65pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 5.4pt 0cm 5.4pt;height:11.5pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>19</span></p>
           </td>
           <td width=39 colspan=2 style='width:29.15pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 5.4pt 0cm 5.4pt;height:11.5pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>07</span></p>
           </td>
           <td width=47 style='width:35.35pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 5.4pt 0cm 5.4pt;height:11.5pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>2016</span></p>
           </td>
           <td style='border:none;padding:0cm 0cm 0cm 0cm' width=1><p class='MsoNormal'>&nbsp;</td>
          </tr>
          <tr style='height:71.25pt'>
           <td width=646 colspan=9 valign=top style='width:484.25pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:71.25pt'>
            <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>NOMBRE DEL AFILIADO: <u>&nbsp;&nbsp;<?=$datpaciente->nomcomp_t3?>&nbsp;&nbsp;</u>  EDAD: <u>&nbsp;&nbsp;<?=$datpaciente->edad_t10?>&nbsp;&nbsp;</u></span></b></p>
            <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>TIPO Y NUMERO DE IDENTIFICACION: <u>&nbsp;&nbsp;<?=$datpaciente->identiftipo_t3?> <?=$datpaciente->identificacion_t3?>&nbsp;&nbsp;</u>  TELEFONO: <u>&nbsp;&nbsp;<?=$datpaciente->telefono_t3?>&nbsp;&nbsp;</u></span></b></p>
            <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>DIRECCIÓN: <u>&nbsp;&nbsp;<?=$datpaciente->direccion_t3?>&nbsp;&nbsp;</u>  MUNICIPIO: <u>&nbsp;&nbsp;<?=$datpaciente->municipio_t3?>&nbsp;&nbsp;</u>  </span></b></p>
           </td>
           <td style='border:none;padding:0cm 0cm 0cm 0cm' width=1><p class='MsoNormal'>&nbsp;</td>
          </tr>
          <tr style='height:173.5pt'>
           <td width=646 colspan=9 valign=top style='width:484.25pt;border:solid windowtext 1.0pt;
           border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:173.5pt'>
           
           <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>NOMBRE DEL MEDICO TRATANTE: <u>&nbsp;&nbsp;<?=$datconsulta->mednomcomp_t64?>&nbsp;&nbsp;</u>  REG. MEDICO: <u>&nbsp;&nbsp;<?=$datconsulta->medreg_t64?>&nbsp;&nbsp;</u>  </span></b></p>
           <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>ESPECIALIDAD: <u>&nbsp;&nbsp;<?=$datconsulta->medespec_t64?>&nbsp;&nbsp;</u>  TELEFONO: <u>&nbsp;&nbsp;&nbsp;&nbsp;</u>  </span></b></p>
           <p class=MsoNormal><b><span lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>DIAGNOSTICO QUE MOTIVA ESTA SOLICITUD</span></b></p>
           
           <p class=MsoNormal style='margin-left:183.0pt;text-indent:-183.0pt'><span
           lang=ES style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>1. <u>&nbsp;&nbsp;<?=$datconsulta->dxprincipal_t64?>&nbsp;&nbsp;</u>  Código CIE X: <u>&nbsp;&nbsp;<?=$datconsulta->dxprincipalcod_t64?>&nbsp;&nbsp;</u>  </span></p>
           
           <p class=MsoNormal style='text-align:justify'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>RESUMEN DE HISTORIA
           CLINICA DEL PACIENTE</span></b><span lang=ES style='font-size:8.0pt;
           font-family:"Tahoma","sans-serif"'> </span></p>
           <p class=MsoNormal style='text-align:justify'><span lang=ES style='font-size:
           8.0pt;font-family:"Tahoma","sans-serif"'>(Favor describir datos relevantes de
           la historia clínica del paciente y su estado actual, que justifique la
           solicitud y detalle los tratamientos POS Utilizados).  </span></p>
           <p class=MsoNormal><span lang=ES style='font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>
           <p class=MsoNormal style='text-align:justify'><u><span lang=ES
           style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>__________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</span></u><span
           lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>    <u>     </u></span></p>
           
           </td>
           <td style='border:none;padding:0cm 0cm 0cm 0cm' width=1><p class='MsoNormal'>&nbsp;</td>
          </tr>
          <tr style='height:15.15pt'>
           <td width=646 colspan=9 valign=top style='width:484.25pt;border:solid windowtext 1.0pt;
           border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.15pt'>
           <p class=MsoNormal style='text-align:justify'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>JUSTIFICACIÓN DEL
           USO DEL MEDICAMENTO O PROCEDIMIENTO NO POS</span></b></p>
           <p class=MsoNormal style='text-align:justify'><span lang=ES style='font-size:
           8.0pt;font-family:"Tahoma","sans-serif"'>(Favor describir las características
           y uso aprobado del medicamento y su pertinencia para el  manejo del paciente
           ó las características del procedimiento, su pertinencia y costo beneficio).</span></p>
           <p class=MsoNormal><b><span lang=ES style='font-family:"Tahoma","sans-serif"'>&nbsp;</span></b></p>
           <p class=MsoNormal style='text-align:justify'><u><span lang=ES
           style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>____________________________________________________________________________________________________________________________________________________________________________</span></u></p>
           <p class=MsoNormal><span lang=ES style='font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>
           </td>
           <td style='border:none;padding:0cm 0cm 0cm 0cm' width=1><p class='MsoNormal'>&nbsp;</td>
          </tr>
          <tr style='height:7.9pt'>
           <td width=646 colspan=9 valign=top style='width:484.25pt;border:solid windowtext 1.0pt;
           border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:7.9pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Tahoma","sans-serif"'>MEDICAMENTO NO POS
           SOLICITADO</span></b></p>
           </td>
           <td style='border:none;border-bottom:solid windowtext 1.0pt' width=1><p class='MsoNormal'>&nbsp;</td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>NOMBRE DE LA SUSTANCIA ACTIVA (GENERICO)</span></b></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>FORMA FARMACEUTICA</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CONCENTRA</span></b></p>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CIÓN</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>DOSIS DIA</span></b></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>No. DIAS TRATAMIENTO
           ORDENADO</span></b></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>TOTAL TRATAMIENTO
           ORDENADO</span></b></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal><span lang=ES style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>MEDICAMENTO HOMOLOGO
           EN EL POS</span></b></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>FORMA FARMACEUTICA</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CONCENTRA</span></b></p>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CIÓN</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>DOSIS DIA</span></b></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>No. DIAS TRATAMIENTO
           ORDENADO</span></b></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>TOTAL TRATAMIENTO
           ORDENADO</span></b></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
           </td>
          </tr>
          <tr style='height:10.9pt'>
           <td width=647 colspan=10 style='width:484.9pt;border:solid windowtext 1.0pt;
           border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:10.9pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>PROCEDIMIENTO NO POS
           SOLICITADO</span></b></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>NOMBRE DEL
           PROCEDIMIENTO NO POS</span></b></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CODIGO CUPS</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>OTRO </span></b></p>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CODIGO</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>FRECU</span></b></p>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>ENCIA DE USO</span></b></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>TIEMPO ORDENADO</span></b></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CANTIDAD TOTAL
           ORDENADA</span></b></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>NOMBRE DEL
           PROCEDIMIENTO HOMOLOGO EN EL POS</span></b></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CODIGO MAPIPOS</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>OTRO </span></b></p>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CODIGO</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#E5E5E5;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>FRECU</span></b></p>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>ENCIA DE USO</span></b></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>TIEMPO ORDENADO</span></b></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           background:#E5E5E5;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>CANTIDAD TOTAL
           ORDENADA</span></b></p>
           </td>
          </tr>
          <tr style='height:21.85pt'>
           <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-top:
           none;padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
           solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
           height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=72 colspan=3 style='width:54.0pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
           <td width=75 colspan=3 style='width:56.5pt;border-top:none;border-left:none;
           border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
           padding:0cm 3.5pt 0cm 3.5pt;height:21.85pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
           </td>
          </tr>
          <tr height=0>
           <td width=735 style='border:none'></td>
           <td width=278 style='border:none'></td>
           <td width=214 style='border:none'></td>
           <td width=149 style='border:none'></td>
           <td width=44 style='border:none'></td>
           <td width=118 style='border:none'></td>
           <td width=40 style='border:none'></td>
           <td width=93 style='border:none'></td>
           <td width=149 style='border:none'></td>
           <td width=0 style='border:none'></td>
          </tr>
         </table>

         <p class=MsoNormal><span lang=ES style='font-size:2.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>

         <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=643
          style='width:482.4pt;border-collapse:collapse;border:none'>
          <tr style='height:11.5pt'>
           <td width=571 valign=top style='width:428.4pt;border:solid black 1.0pt;
           padding:0cm 5.4pt 0cm 5.4pt;height:11.5pt'>
           <p class=MsoNormal align=center style='text-align:center'><b><span lang=ES
           style='font-size:8.5pt;font-family:"Tahoma","sans-serif"'>CUMPLIMIENTO DE LA LEGISLACIÓN SOBRE EL USO EN COLOMBIA</span></b></p>
           </td>
           <td width=36 valign=top style='width:27.0pt;border:solid black 1.0pt;
           border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:11.5pt'>
           <p class=MsoNormal><span lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>SI</span></p>
           </td>
           <td width=36 valign=top style='width:27.0pt;border:solid black 1.0pt;
           border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:11.5pt'>
           <p class=MsoNormal><span lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>NO</span></p>
           </td>
          </tr>
          <tr>
           <td width=571 valign=top style='width:428.4pt;border:solid black 1.0pt;
           border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
           <p class=MsoNormal><span lang=ES style='font-size:8.5pt;font-family:"Tahoma","sans-serif"'>¿ESTA
           AUTORIZADO EL USO DEL MEDICAMENTO PARA ESTA ENFERMEDAD POR EL INVIMA?</span></p>
           </td>
           <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
           border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
           <p class=MsoNormal><span lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
           border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
           <p class=MsoNormal><span lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>
           </td>
          </tr>
          <tr>
           <td width=571 valign=top style='width:428.4pt;border:solid black 1.0pt;
           border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
           <p class=MsoNormal><span lang=ES style='font-size:8.5pt;font-family:"Tahoma","sans-serif"'>¿ESTA
           AUTORIZADA LA EJECUCIÓN DEL PROCEDIMIENTO POR LA SOCIEDADES CIENTIFICAS DEL PAIS?</span></p>
           </td>
           <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
           border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
           <p class=MsoNormal><span lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>
           </td>
           <td width=36 valign=top style='width:27.0pt;border-top:none;border-left:none;
           border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
           <p class=MsoNormal><span lang=ES style='font-size:10.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>
           </td>
          </tr>
         </table>

         <p class=MsoNormal><span style='position:absolute;z-index:251658237;margin-left:
         174px;margin-top:8px;width:151px;height:80px'><img width=151 height=80
         src="FOR%20NO%20POS_archivos/image002.jpg"></span></p>

         <p class=MsoNormal style='margin-right:-44.0pt'><span lang=ES style='font-size:
         8.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>

         <p class=MsoNormal style='margin-right:-44.0pt'><span lang=ES style='font-size:
         8.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>

         <p class=MsoNormal style='margin-right:-44.0pt'><span lang=ES style='font-size:
         8.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>

         <p class=MsoNormal style='margin-right:-44.0pt'><span lang=ES style='font-size:
         8.0pt;font-family:"Tahoma","sans-serif"'>&nbsp;</span></p>

         <p class=MsoNormal style='margin-right:-44.0pt'><span lang=ES style='font-size:
         8.0pt;font-family:"Tahoma","sans-serif"'>FIRMA DEL MEDICO QUE SOLICITA <b>____<u>
                        </u>_____________REG. MEDICO: <u>&nbsp;&nbsp;<?=$datconsulta->medreg_t64?>&nbsp;&nbsp;</u></b></span></p>
      <br/><br/>
      &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5('80156516').".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br/>
      <?=$datconsulta->mednomcomp_t64?><br/>
      <?=$datconsulta->medespec_t64?><br/>
      REG. <?=$datconsulta->medreg_t64?><br/>
      <?=$datconsulta->medcargo_t64?><br/>
      <br><br><br>
      <?=$this->load->view('Genericas/fmto_hmspie');?>
    </div>
  </body>
</html>