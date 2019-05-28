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
   
   
   
   
   
   
   
  
    

  
  
  
  
  
  
  
  
  /*
,".$datconsulta->datantpers->hipertension_t65.",".$datconsulta->datantpers->renales_t65.",".$datconsulta->datantpers->hepatitis_t65.",".$datconsulta->datantpers->asma_t65.",".$datconsulta->datantpers->neuromental_t65.",".$datconsulta->datantpers->lupus_t65.",".$datconsulta->datantpers->cancer_t65.",".$datconsulta->datantpers->sifilis_t65.",".$datconsulta->datantpers->psoriasis_t65.",".$datconsulta->datantpers->cardiovascular_t65.",".$datconsulta->datantpers->tbc_t65.",".$datconsulta->datantpers->artritis_t65.",".$datconsulta->datantpers->diabetes_t65.",".$datconsulta->datantpers->acv_t65?>
      $resumen.=", ";
    }
    $resumen="ALZAIMER";
  }
  /*
<?",".$datconsulta->datantpers->dijestivas_t65.",".$datconsulta->datantpers->alzaimer_t65.",".$datconsulta->datantpers->hipertension_t65.",".$datconsulta->datantpers->renales_t65.",".$datconsulta->datantpers->hepatitis_t65.",".$datconsulta->datantpers->asma_t65.",".$datconsulta->datantpers->neuromental_t65.",".$datconsulta->datantpers->lupus_t65.",".$datconsulta->datantpers->cancer_t65.",".$datconsulta->datantpers->sifilis_t65.",".$datconsulta->datantpers->psoriasis_t65.",".$datconsulta->datantpers->cardiovascular_t65.",".$datconsulta->datantpers->tbc_t65.",".$datconsulta->datantpers->artritis_t65.",".$datconsulta->datantpers->diabetes_t65.",".$datconsulta->datantpers->acv_t65?>
      $resumen.=", ";
    }
    $resumen="ALZAIMER";
  }
  /*
<?","..",".$datconsulta->datantpers->hipertension_t65.",".$datconsulta->datantpers->renales_t65.",".$datconsulta->datantpers->hepatitis_t65.",".$datconsulta->datantpers->asma_t65.",".$datconsulta->datantpers->neuromental_t65.",".$datconsulta->datantpers->lupus_t65.",".$datconsulta->datantpers->cancer_t65.",".$datconsulta->datantpers->sifilis_t65.",".$datconsulta->datantpers->psoriasis_t65.",".$datconsulta->datantpers->cardiovascular_t65.",".$datconsulta->datantpers->tbc_t65.",".$datconsulta->datantpers->artritis_t65.",".$datconsulta->datantpers->diabetes_t65.",".$datconsulta->datantpers->acv_t65?>
 <?=$datconsulta->datantfam->alergia_t65.",".$datconsulta->datantfam->dijestivas_t65.",".$datconsulta->datantfam->alzaimer_t65.",".$datconsulta->datantfam->hipertension_t65.",".$datconsulta->datantfam->renales_t65.",".$datconsulta->datantfam->hepatitis_t65.",".$datconsulta->datantfam->asma_t65.",".$datconsulta->datantfam->neuromental_t65.",".$datconsulta->datantfam->lupus_t65.",".$datconsulta->datantfam->cancer_t65.",".$datconsulta->datantfam->sifilis_t65.",".$datconsulta->datantfam->psoriasis_t65.",".$datconsulta->datantfam->cardiovascular_t65.",".$datconsulta->datantfam->tbc_t65.",".$datconsulta->datantfam->artritis_t65.",".$datconsulta->datantfam->diabetes_t65.",".$datconsulta->datantfam->acv_t65?>      
 <?=$datconsulta->hospitalizacion_t66.",".$datconsulta->cronicas_t66.",".$datconsulta->cardiopatias_t66.",".$datconsulta->transfusion_t66.",".$datconsulta->$datconsulta->emergencia_t66.",".$datconsulta->$datconsulta->venerias_t66.",".$datconsulta->alergiaalim_t66.",".$datconsulta->alcohol_t66.",".$datconsulta->drogas_t66.",".$datconsulta->deporte_t66.",".$datconsulta->tabaco_t66?>
 <?=$datconsulta->datantpers->farmacologicos_t65.",".$datconsulta->datantpers->quirurgicos_t65?>  
   * 
   * 
   */
  
  
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
        <table width="100%">
          <tr>
            <td width="200px">
              <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
            </td>
            <td>
              <h3 align="center" > FORMULACIÓN MEDICAMENTOS NO POS</h3>
            </td>
          </tr>
        </table>
      <div style="border:1px solid #000;margin: 0;padding: 0;">
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="40%"><strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?></td>
              <td width="20%"><strong>Documento: </strong><?=$datpaciente->identificacion_t3?></td>
              <td width="10%"><strong>Tipo: </strong><?=$datpaciente->identiftipo_t3?></td>
            </tr>
        </table>
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="10%"><strong>HC.No: </strong><?=$dathistoria->idps_historia_t4?></td>
              <td width="20%"><strong>Sexo: </strong><?=$datpaciente->genero_t3?></td>
              <td width="25%"><strong>Fecha.Nac: </strong><?=$datpaciente->fnacim_t3?></td>
              <td width="10%"><strong>Edad: </strong><?=$datpaciente->edad_t10?></td>
              <td width="30%"><strong>Estado Civil: </strong><?=$datpaciente->estadocivil_t3?></td> 
            </tr>
        </table>
         <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="10%"><strong>Nivel: </strong><?=$datpaciente->nivel_t3?> </td>
              <td width="25%"><strong>Fecha: </strong><?=date("Y-m-d")?></td>
              <td width="25%"><strong>Hora: </strong><?=date("G:i")?></td>
              <td width="40%"><strong>Profesional: </strong><?=$datpersonalmedcons->nomcomp_t10?> </td>
            </tr>
          </table>
      </div>
      <table border="1" width="100%" style="border-collapse: collapse;">
          <tr>
            <td align="center" width="50%" colspan="2">
              <strong>INGRESO</strong>
            </td>
            <td align="center" width="50%" colspan="2">
              <strong>EGRESO</strong>
            </td> 
          </tr> 
          <tr>
              <td width="30%"><strong> Fecha / Hora </strong></td> 
              <td width="20%"><strong> Vía</strong></td>
              <td width="30%"><strong> Fecha/ Hora </strong></td> 
              <td width="20%"><strong> Vía</strong></td>
          </tr>
          <tr>
            <td width="30%"><?=$dathistoria->fingreso_t4?></td>
            <td width="20%"><?=$dathistoria->viaing_t4?></td>
            <td width="30%"><?=$datconsulta->fsalida_t4?></td>
            <td width="20%"><?=$datconsulta->destinopac_t64?></td>
          </tr>
          <tr>
            <td colspan="2" width="50%">
            </td>
            <td width="25%">
              <strong>Estado:</strong> <?=$datpaciente->estado_t3?> 
            </td> 
            <td width="25%">
              <strong>Destino:</strong><?=$datconsulta->destinopac_t64?> 
            </td> 
          </tr>
         <tr valign="top">
            <td colspan="2">
              <strong>Diagnóstico Principal</strong> <br/>
              <?=$datconsulta->dxprincipal_t64?>
            </td>
            <td colspan="2">
              <strong>Diagnostico Relacionado</strong> <br/>
              <?=$datconsulta->dxrelprincipal_t64?>
            </td> 
         </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datconsulta->dxsecundario_t64)){?>
              <strong>Dx Secundario</strong> <br/>
              <?=$datconsulta->dxsecundario_t64;?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datconsulta->dxrelsecundario_t64)){?>
              <strong>Dx Rel. Secundario</strong> <br/>
              <?=$datconsulta->dxrelsecundario_t64;?>
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
          <td colspan="4">
            <strong>Condiciones de Salida</strong> <br/>
            <?=$datconsulta->condicionsalida_t68?>       
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
        <center><b>DATOS DE INGRESO</b></center>
       <table border="1" cellspacing="0" width="100%" style="border-collapse: collapse;">
        <tr><td colspan="6">
            <strong>ESTADO DE INGRESO </strong><?=$datconsulta->estadoingreso_t64?></td>
        </tr>
        <tr><td colspan="6">
              <strong>MOTIVO DE CONSULTA </strong><?=$datconsulta->motconsulta_t64?> </td> 
        </tr>
        <tr><td colspan="6">
              <strong>ENFERMEDAD ACTUAL </strong><?=$datconsulta->enfermactual_t64?> </td> 
        </tr>
      </table>
      <center><b>RESUMEN DE EVOLUCION</b></center>
      <div style="border:1px solid #000; text-align: justify">
        Paciente con <?=$datconsulta->motconsulta_t64?> por lo cual se presenta en la Institución <?=$resumen?>
               DIAGNOSTICOS
               <?=$datconsulta->dxprincipal_t64?>
               <?=$datconsulta->dxrelprincipal_t64?>
               <?=$datconsulta->dxsecundario_t64?>
               <?=$datconsulta->dxrelsecundario_t64?>
               <?=$datconsulta->dxegreso_t64?>
               <?=$datconsulta->dxfallecido_t64?>
      </div>
      <center><b>CONDUCTA Y PLAN DE MANEJO</b></center>
      <div style="border:1px solid #000; text-align: justify">
        <?=$datconsulta->planmanejo_t68?>
        <?
          if(is_array($datconsulta->datevoldiaria)){
            foreach($datconsulta->datevoldiaria as $fechaevol=>$arr_evol){
              if(is_array($arr_evol)){
                foreach($arr_evol as $arr_detevol){
                  echo '<b>'.$fechaevol.'</b> '.$arr_detevol->evoldet->concep["problemnuevosdesc"]->valor_t83.'&nbsp;';
                }
              }
            }
          }
        ?>
      </div>
      <center><b>FORMULACIÓN</b></center>
      <div style="border:1px solid #000; text-align: justify">
        <?
          //var_dump($hist_orden); exit;
          //var_dump($datconsulta->datordenes["MED"]);
          //exit;
          if(is_array($hist_orden)){
            ?>
            <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
              <tr>
                <td width="45%" align="center" ><strong>MEDICAMENTO</strong></td>
                <td width="10%"><strong>Cant.</strong></td>
                <td width="15%"><strong>Posología y Vía de Administración</strong></td>
                <td width="15%"><strong>Días</strong></td>
                <td width="20%"><strong>Observaciones</strong></td> 
              </tr>  
            <?
            foreach($hist_orden as $detorden){
              @$dias = ($detorden->cantidad_t67*$detorden->frecuencia_t67)/($detorden->dosis_t67*24);
              ?>
              <tr>
                <td width="45%"><?=$detorden->descripcion_t67?></td>
                <td width="10%"><?=$detorden->cantidad_t67?></td>
                <td width="45%"><?=$detorden->dosis_t67?> cada <?=$detorden->frecuencia_t67?> horas vía <?=$detorden->via_t67?></td>
                <td width="10%"><?=$dias?></td>
                <td width="45%"><?=$detorden->observacion_t67?></td>   
              </tr>
            <?}?>
              <tr >
                <td width="45%">&nbsp;<br><br></td>
                <td width="10%">&nbsp;</td>
                <td width="45%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="45%">&nbsp;</td>   
              </tr>
            </table>
          <?}
        ?>
        <div style="text-align: left">
          <b>Justificación General :</b>
          <?=$detorden->noposjust_t67?>
        </div>
        <div style="text-align: left"><p>
          <b>Evidencia científica en casos similares :</b>
          <?=$detorden->noposevid_t67?></p>
        </div>
        <div style="text-align: left"><p>
          <b>Precauciones, contraindicaciones :</b>
          <?=$detorden->noposprec_t67?></p>
        </div>
        <div style="text-align: left"><p>
          <b>Medicamento genérico :</b>
          <?=$detorden->noposgen_t67?></p>
        </div>
      </div>
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