<?
  if(!empty($datconsulta->datantpers->alergia_t65)){
    $resumen_ap.="  Alergias";
  }
  if(!empty($datconsulta->datantpers->dijestivas_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.="  Enfermedades Digestivas";
  }
  if(!empty($datconsulta->datantpers->alzaimer_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.="  Alzaheimer";
  }
  if(!empty($datconsulta->datantpers->hipertension_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Hipertensión";
  }
  if(!empty($datconsulta->datantpers->renales_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Enfermedades Renales";
  }
  if(!empty($datconsulta->datantpers->hepatitis_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Hepatitis";
  }
  if(!empty($datconsulta->datantpers->asma_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Asma";
  }
  if(!empty($datconsulta->datantpers->neuromental_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Neuromental";
  }
  if(!empty($datconsulta->datantpers->lupus_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Lupus";
  }
  if(!empty($datconsulta->datantpers->cancer_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Cancer";
  }
  if(!empty($datconsulta->datantpers->sifilis_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Sifilis";
  }
  if(!empty($datconsulta->datantpers->psoriasis_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Psoriasis";
  }
  if(!empty($datconsulta->datantpers->cardiovascular_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Cardiovascular";
  }
  if(!empty($datconsulta->datantpers->tbc_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" T.B.C";
  }
  if(!empty($datconsulta->datantpers->artritis_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Artritis";
  }
  if(!empty($datconsulta->datantpers->diabetes_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" Diabetes";
  }
  if(!empty($datconsulta->datantpers->acv_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" A.C.V";
  }
  if(!empty($datconsulta->datantpers->descripcion_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" ".$datconsulta->datantpers->descripcion_t65;
  }
  if(!empty($datconsulta->datantpers->otros_t65)){
    if(!empty($resumen_ap)){
      $resumen_ap.=" , ";
    }
    $resumen_ap.=" ".$datconsulta->datantpers->otros_t65;
  }
  if(!empty($resumen_ap)){
    $resumen="ANTECEDENTES PERSONALES: ".$resumen_ap;
  }
  
  if(!empty($datconsulta->datantfam->alergia_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Alergias";
  }
  if(!empty($datconsulta->datantfam->dijestivas_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Enfermedades Digestivas";
  }
  if(!empty($datconsulta->datantfam->alzaimer_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Alzaheimer";
  }
  if(!empty($datconsulta->datantfam->hipertension_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Hipertensión";
  }
  if(!empty($datconsulta->datantfam->renales_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Enfermedades Renales";
  }
  if(!empty($datconsulta->datantfam->hepatitis_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Hepatitis";
  }
  if(!empty($datconsulta->datantfam->asma_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Asma";
  }
  if(!empty($datconsulta->datantfam->neuromental_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Neuromental";
  }
  if(!empty($datconsulta->datantfam->lupus_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Lupus";
  }
  if(!empty($datconsulta->datantfam->cancer_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Cancer";
  }
  if(!empty($datconsulta->datantfam->sifilis_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Sifilis";
  }
  if(!empty($datconsulta->datantfam->psoriasis_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Psoriasis";
  }
  if(!empty($datconsulta->datantfam->cardiovascular_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Cardiovascular";
  }
  if(!empty($datconsulta->datantfam->tbc_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" T.B.C";
  }
  if(!empty($datconsulta->datantfam->artritis_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Artritis";
  }
  if(!empty($datconsulta->datantfam->diabetes_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" Diabetes";
  }
  if(!empty($datconsulta->datantfam->acv_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" A.C.V";
  }
  if(!empty($datconsulta->datantfam->descripcion_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" ".$datconsulta->datantfam->descripcion_t65;
  }
  if(!empty($datconsulta->datantfam->otros_t65)){
    if(!empty($resumen_af)){
      $resumen_af.=" , ";
    }
    $resumen_af.=" ".$datconsulta->datantfam->otros_t65;
  }
  if(!empty($resumen_af)){
    $resumen.="  ANTECEDENTES FAMILIARES ".$resumen_af;
  }
  
  $resumen.="  REVISIÓN POR SISTEMAS ";

   if(!empty($datconsulta->rs_neurologico_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Neurologico ".$datconsulta->rs_neurologico_t64;
   }
   if(!empty($datconsulta->rs_respiratorio_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Respiratorio ".$datconsulta->rs_respiratorio_t64;
   }
   if(!empty($datconsulta->rs_cardiovascular_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Cardiovascular ".$datconsulta->rs_cardiovascular_t64;
   } 
   if(!empty($datconsulta->rs_pielanexos_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Piel y Anexos ".$datconsulta->rs_pielanexos_t64;
   } 
   if(!empty($datconsulta->rs_ojos_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Ojos ".$datconsulta->rs_ojos_t64;
   } 
   if(!empty($datconsulta->rs_orl_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" ORL ".$datconsulta->rs_orl_t64;
   } 
   if(!empty($datconsulta->rs_cuello_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Cuello ".$datconsulta->rs_cuello_t64;
   } 
   if(!empty($datconsulta->rs_digestivo_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Digestivo ".$datconsulta->rs_digestivo_t64;
   } 
   if(!empty($datconsulta->rs_pulmonar_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Pulmonar ".$datconsulta->rs_pulmonar_t64;
   } 
   if(!empty($datconsulta->rs_genitourinario_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Genito-Urinario ".$datconsulta->rs_genitourinario_t64;
   } 
   if(!empty($datconsulta->rs_musculoesqueletico_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Musculo-Esqueletico ".$datconsulta->rs_musculoesqueletico_t64;
   } 
   if(!empty($datconsulta->rs_extremidades_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Extremidades ".$datconsulta->rs_extremidades_t64;
   } 
   if(!empty($datconsulta->rs_otros_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Otros ".$datconsulta->rs_otros_t64;
   }
  
  $resumen.="  EXAMEN FISICO ";
  if(!empty($datconsulta->altura_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Altura ".$datconsulta->altura_t64;
  }
  if(!empty($datconsulta->peso_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Peso ".$datconsulta->peso_t64;
  }
  if(!empty($datconsulta->imc_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" IMC ".$datconsulta->imc_t64;
  }
  if(!empty($datconsulta->temp_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" T° ".$datconsulta->temp_t64;
  }
  if(!empty($datconsulta->fr_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" F.R ".$datconsulta->fr_t64;
  }
  if(!empty($datconsulta->fc_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" F.C ".$datconsulta->fc_t64;
  }
  if(!empty($datconsulta->ta_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" T.A ".$datconsulta->fc_t64;
  }
  if(!empty($datconsulta->so2_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" SPo2 ".$datconsulta->so2_t64;
  }
  if(!empty($datconsulta->glasgow_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Glasgow ".$datconsulta->glasgow_t64;
  }
   if(!empty($datconsulta->tiss_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Tiss ".$datconsulta->glasgow_t64;
   }  
   if(!empty($datconsulta->apache_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Apache ".$datconsulta->apache_t64;
   }
   if(!empty($datconsulta->neurologico_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Neurologico ".$datconsulta->neurologico_t64;
   }
   if(!empty($datconsulta->respiratorio_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Respiratorio ".$datconsulta->respiratorio_t64;
   }
   if(!empty($datconsulta->cardiovascular_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Cardiovascular ".$datconsulta->cardiovascular_t64;
   } 
   if(!empty($datconsulta->pielanexos_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Piel y Anexos ".$datconsulta->pielanexos_t64;
   } 
   if(!empty($datconsulta->ojos_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Ojos ".$datconsulta->ojos_t64;
   } 
   if(!empty($datconsulta->orl_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" ORL ".$datconsulta->orl_t64;
   } 
   if(!empty($datconsulta->cuello_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Cuello ".$datconsulta->cuello_t64;
   } 
   if(!empty($datconsulta->digestivo_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Digestivo ".$datconsulta->digestivo_t64;
   } 
   if(!empty($datconsulta->pulmonar_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Pulmonar ".$datconsulta->pulmonar_t64;
   } 
   if(!empty($datconsulta->genitourinario_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Genito-Urinario ".$datconsulta->genitourinario_t64;
   } 
   if(!empty($datconsulta->musculoesqueletico_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Musculo-Esqueletico ".$datconsulta->musculoesqueletico_t64;
   } 
   if(!empty($datconsulta->extremidades_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Extremidades ".$datconsulta->extremidades_t64;
   } 
   if(!empty($datconsulta->otros_t64)){
    if(!empty($resumen)){
      $resumen.=" , ";
    }
    $resumen.=" Otros ".$datconsulta->otros_t64;
   }   
   
   
  /*
,".$datconsulta->datantpers->hipertension_t65.",".$datconsulta->datantpers->renales_t65.",".$datconsulta->datantpers->hepatitis_t65.",".$datconsulta->datantpers->asma_t65.",".$datconsulta->datantpers->neuromental_t65.",".$datconsulta->datantpers->lupus_t65.",".$datconsulta->datantpers->cancer_t65.",".$datconsulta->datantpers->sifilis_t65.",".$datconsulta->datantpers->psoriasis_t65.",".$datconsulta->datantpers->cardiovascular_t65.",".$datconsulta->datantpers->tbc_t65.",".$datconsulta->datantpers->artritis_t65.",".$datconsulta->datantpers->diabetes_t65.",".$datconsulta->datantpers->acv_t65?>
      $resumen.=" , ";
    }
    $resumen="ALZAIMER";
  }
  /*
<?",".$datconsulta->datantpers->dijestivas_t65.",".$datconsulta->datantpers->alzaimer_t65.",".$datconsulta->datantpers->hipertension_t65.",".$datconsulta->datantpers->renales_t65.",".$datconsulta->datantpers->hepatitis_t65.",".$datconsulta->datantpers->asma_t65.",".$datconsulta->datantpers->neuromental_t65.",".$datconsulta->datantpers->lupus_t65.",".$datconsulta->datantpers->cancer_t65.",".$datconsulta->datantpers->sifilis_t65.",".$datconsulta->datantpers->psoriasis_t65.",".$datconsulta->datantpers->cardiovascular_t65.",".$datconsulta->datantpers->tbc_t65.",".$datconsulta->datantpers->artritis_t65.",".$datconsulta->datantpers->diabetes_t65.",".$datconsulta->datantpers->acv_t65?>
      $resumen.=" , ";
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

      <?=$this->load->view('Asistencial/Historia/f_historia_detencab','',true);?>
      <?=$this->load->view('Asistencial/Historia/f_historia_detalle',array('resumen'=>$resumen),true);?>
      <?if(is_object($datconsultaso)){?>
        <?=$this->load->view('Asistencial/Historia/f_historia_detalleso',"",true);?>
      <?}?>

      

      <center><b>HISTÓRICO CONSULTA</b></center>
      <div style="border:1px solid #000; text-align: left">
        <table cellpadding="2">
          <tr>
            <th></th>
            <th>FECHA</th>
            <th>DX</th>
            <th>ESPECIALIDAD</th>
          </tr>
          <?if(is_array($datconsulta->historicocons)){
            foreach($datconsulta->historicocons as $cons){
              ?>
              <tr>
                <td><a href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$cons->idps_historia_t4)?>"><i class="fa fa-print"></i></a></td>
                <td><a target="_blank" href="<?=site_url("pacientes/historia/verepicrisis/".$cons->idps_historia_t4)?>"><?=  substr($cons->fingreso_t4,0,16)?></a></td>
                <td><?=$cons->dxprincipal_t64?></td>
                <td><?=$cons->medespec_t64?></td>
              </tr>
              <?
            }
          }?>
        </table>
        <br><br>
        <?
          //var_dump($datconsulta->historicocons);
        ?>
      </div>
      <br>
      