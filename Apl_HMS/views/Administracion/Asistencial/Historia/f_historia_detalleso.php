<?
?>
      <?php if ($this->db->database != "CLIOFTALMO" && $this->db->database != "hms_FUNSABIAM") { ?>
             <center><b>CONSULTA SALUD OCUPACIONAL</b></center>
      <div style="border:1px solid #000">
        <table border="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
         <tr><td>
             <strong>TIPO DE EXAMEN</strong><br>
            <?if($datconsultaso->tipoexa_ingreso_t99=='SI'){?>INGRESO<?}?>
            <?if($datconsultaso->tipoexa_periodico_t99=='SI'){?>PERIODICO<?}?>
            <?if($datconsultaso->tipoexa_retir_t99=='SI'){?>RETIRO<?}?>
            <?if($datconsultaso->tipoexa_camocupa_t99=='SI'){?>CAMBIO OCUPACION<?}?>
            <?if($datconsultaso->tipoexa_reubica_t99=='SI'){?>REUBICACION<?}?>
            <?if($datconsultaso->tipoexa_altur_t99=='SI'){?>ALTURAS<?}?>
           </td>
           <td>
             <strong>EPP</strong><br>
             <?if($datconsultaso->epp_unifor_t99=='SI'){?> UNIFORME<?}?>
             <?if($datconsultaso->epp_guantes_t99=='SI'){?> GUANTES<?}?>
             <?if($datconsultaso->epp_presp_t99=='SI'){?> P. RESPIRATORIA<?}?>
             <?if($datconsultaso->epp_paudit_t99=='SI'){?> P. AUDITIVA<?}?>
             <?if($datconsultaso->epp_pvisual_t99=='SI'){?> P. VISUAL<?}?>
             <?if($datconsultaso->epp_botas_t99=='SI'){?> BOTAS<?}?>
             <?if($datconsultaso->epp_otros_t99=='SI'){?> OTROS<?}?>
             
           </td>
           <td>
             <strong>EMPLEO ACTUAL</strong><br>
             EMPLEADOR: <?=$datconsultaso->emact_emplea_t99?> 
             ACTIVIDAD ECONÓMICA: <?=$datconsultaso->emact_actiecon_t99?> 
             CARGO: <?=$datconsultaso->emact_cargo_t99?> 
             SECCIÓN: <?=$datconsultaso->emact_secc_t99?> 
             TURNO: <?=$datconsultaso->emact_turno_t99?> 
             INGRESO A LA EMPRESA: <?=$datconsultaso->emact_ingremp_t99?> 
           </td>
         </tr>
           <?if(is_array($datconsultaso->emp)){?>
         <tr>
           <td colspan="3">
             <strong>EMPLEOS ANTERIORES</strong><br>
             <table width="100%">
               <tr>
                 <th>EMPLEADOR</th>
                 <th>TIEMPO</th>
                 <th>CARGO</th>
                 <th>FACTORES DE RIESGO</th>
                 <th>FIN</th>
               </tr>
               <?foreach($datconsultaso->emp as $emp){
                 ?>
               <tr>
                 <td><?=$emp->empant_ample_t100?></td>
                 <td><?=$emp->empant_tiemp_t100?></td>
                 <td><?=$emp->empant_carg_t100?></td>
                 <td><?=$emp->empant_fact_t100?></td>
                 <td><?=$emp->empant_fin_t100?></td>
               </tr>
               <?}?>
             </table>
           </td>
           </tr>
           <?}?>
         <tr>
           <td colspan="3">
             <strong>FACTORES DE RIESGO</strong><br>
             <b>Físicos</b> : <?=$datconsultaso->frfis_obs_t99?>
                <?if(!empty($datconsultaso->frfis_iludef_t99)){?>Iluminación deficiente<?}?> 
                <?if(!empty($datconsultaso->frfis_iluexc_t99)){?>Iluminación Excesiva<?}?> 
                <?if(!empty($datconsultaso->frfis_rui_t99)){?>Ruido<?}?>  
                <?if(!empty($datconsultaso->frfis_radnoion_t99)){?>Radiaciones no Oinizantes<?}?>  
                <?if(!empty($datconsultaso->frfis_temext_t99)){?>Tempraturas Extremas<?}?>  
                <?if(!empty($datconsultaso->frfis_vibra_t99)){?>Vibraciones<?}?>  
             <b>Quimicos</b> : <?=$datconsultaso->frqui_obs_t99?>
                <?if(!empty($datconsultaso->frqui_polv_t99)){?>Polvos<?}?> 
                <?if(!empty($datconsultaso->frqui_humos_t99)){?>Humos<?}?> 
                <?if(!empty($datconsultaso->frqui_gases_t99)){?>Gases<?}?>  
                <?if(!empty($datconsultaso->frqui_matpart_t99)){?>Material Particulado<?}?>  
                <?if(!empty($datconsultaso->frqui_liqui_t99)){?>Líquidos<?}?>
             <b>Psicosociales</b> : <?=$datconsultaso->frpsi_obs_t99?>
                <?if(!empty($datconsultaso->frpsi_cargment_t99)){?>Carga Mental<?}?> 
                <?if(!empty($datconsultaso->frpsi_canttrab_t99)){?>Cantidad de Trabajo<?}?> 
                <?if(!empty($datconsultaso->frpsi_nivresp_t99)){?>Nivel de Resposabilidad del Cargo<?}?>  
                <?if(!empty($datconsultaso->frpsi_condemp_t99)){?>Condiciones de la Empresa<?}?>  
                <?if(!empty($datconsultaso->frpsi_condind_t99)){?>Condiciones Individuales<?}?>
             <b>Biológicos</b> : <?=$datconsultaso->frbio_obs_t99?>
                <?if(!empty($datconsultaso->frbio_virus_t99)){?>Virus<?}?> 
                <?if(!empty($datconsultaso->frbio_bact_t99)){?>Bacterias<?}?> 
                <?if(!empty($datconsultaso->frbio_hong_t99)){?>Hongos<?}?>  
                <?if(!empty($datconsultaso->frbio_paras_t99)){?>Parásitos<?}?>  
             <b>De Seguridad</b> :<?=$datconsultaso->frseg_obs_t99?>
                <?if(!empty($datconsultaso->frseg_elect_t99)){?>Eléctricos<?}?> 
                <?if(!empty($datconsultaso->frseg_mecan_t99)){?>Mecánicos<?}?> 
                <?if(!empty($datconsultaso->frseg_locat_t99)){?>Locativos<?}?>  
                <?if(!empty($datconsultaso->frseg_explo_t99)){?>Explosión<?}?>  
                <?if(!empty($datconsultaso->frseg_atra_t99)){?>Atrapamiento<?}?>  
             <b>Ergonómicos</b> :<?=$datconsultaso->frerg_obs_t99?>
                <?if(!empty($datconsultaso->frerg_cargest_t99)){?>Carga Estáttica / Dinámica<?}?> 
                <?if(!empty($datconsultaso->frerg_postforz_t99)){?>Postura Forzada<?}?> 
                <?if(!empty($datconsultaso->frerg_dispuest_t99)){?>Diseño de Puesto<?}?>  
                <?if(!empty($datconsultaso->frerg_manicarg_t99)){?>Manipulación de Cargas<?}?>  
                <?if(!empty($datconsultaso->frerg_movrept_t99)){?>Movimientos Repetitivos<?}?>  
           </td>
         </tr>
         <?if(is_array($datconsultaso->aat)){?>
         <tr>
           <td colspan="3">
             <strong>ANTECEDENTES ACCIDENTES DE TRABAJO</strong><br>
             <table width="100%">
               <tr>
                 <th>FECHA</th>
                 <th>EMPRESA</th>
                 <th>NATURALEZA LESION</th>
                 <th>PARTE AFECTADA</th>
                 <th>INCAPACIDADES</th>
                 <th>SECUELAS</th>
               </tr>
               <?foreach($datconsultaso->aat as $aat){?>
               <tr>
                 <td><?=$aat->antacc_fec_t101?></td>
                 <td><?=$aat->antacc_empre_t101?></td>
                 <td><?=$aat->antacc_natulesi_t101?></td>
                 <td><?=$aat->antacc_partafec_t101?></td>
                 <td><?=$aat->antacc_incap_t101?></td>
                 <td><?=$aat->antacc_secu_t101?></td>
               </tr>
               <?}?>
             </table>
           </td>
           </tr>
           <?}?>
         <?if(is_array($datconsultaso->aep)){?>
         <tr>
           <td colspan="3">
             <strong>ANTECEDENTES ENFERMEDAD PROFESIONAL</strong><br>
             <table width="100%">
               <tr>
                 <th>FECHA CALIFICACIÓN</th>
                 <th>EMPRESA</th>
                 <th>DX</th>
                 <th>ENTIDAD CALIFICADORA</th>
               </tr>
               <?foreach($datconsultaso->aep as $aep){?>
               <tr>
                 <td><?=$aep->antenf_feccal_t109?></td>
                 <td><?=$aep->antenf_empre_t109?></td>
                 <td><?=$aep->antenf_dx_t109?></td>
                 <td><?=$aep->antenf_entcalif_t109?></td>
               </tr>
               <?}?>
             </table>
           </td>
           </tr>
           <?}?>
         <tr>
           <td colspan="3">
             <strong>PARACLINICOS SOPORTES Y REFEFIDOS POR ANTECEDENTES</strong><br>
             <table width="100%">
                  <tr>
                    <td>AUDIOMETRIA: <?=$datconsultaso->psra_audiometria_t99?></td>
                    <td>ESPIROMETRIA: <?=$datconsultaso->psra_espirometria_t99?></td>
                    <td>OPTOMETRIA: <?=$datconsultaso->psra_optometria_t99?></td>
                    <td>GLICEMIA: <?=$datconsultaso->psra_glicemia_t99?></td>
                  </tr>
                  <tr>
                    <td>COLESTEROL TOTAL: <?=$datconsultaso->psra_colesteroltotal_t99?></td>
                    <td>TRIGLICELIDOS TOTALES: <?=$datconsultaso->psra_triguicelidostotales_t99?></td>
                    <td>KOH: <?=$datconsultaso->psra_koh_t99?></td>
                    <td>FROTIS FARINGEO: <?=$datconsultaso->psra_frotisfaringeo_t99?></td>
                  </tr>
                  <tr>
                    <td>COPROLÓGICO: <?=$datconsultaso->psra_coprologico_t99?></td>
                    <td>RX LUMBOSACRA: <?=$datconsultaso->psra_rxlumbosacra_t99?></td>
                    <td>VALORAC OSTEOMUSCULAR: <?=$datconsultaso->psra_valoracosteomuscular_t99?></td>
                    <td>HEMOGRAMA: <?=$datconsultaso->psra_hemograma_t99?></td>
                  </tr>
                  <tr>
                    <td>SEROLOGIA: <?=$datconsultaso->psra_serologia_t99?></td>
                    <td>PARCIAL ORINA: <?=$datconsultaso->psra_parcialorina_t99?></td>
                  </tr>
                </table>
           </td>
         </tr>
         <tr>
           <td colspan="3">
             <strong>HABITOS</strong> <?=$datconsultaso->hab_obser_t99?><br>
                <?if(!empty($datconsultaso->hab_tabaquis_t99)){?>Tabaquismo<?}?> 
                <?if(!empty($datconsultaso->hab_alcohol_t99)){?>Alcohol<?}?> 
                <?if(!empty($datconsultaso->hab_sicofar_t99)){?>Sicofarmacos<?}?>  
                <?if(!empty($datconsultaso->hab_deport_t99)){?>Deporte<?}?>  
           </td>
         </tr>
         <tr>
           <td colspan="3">
             <strong>CONCEPTO MÉDICO</strong><br>
             APTITUD: 
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI'){?>INGRESO<?}?>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI'){?>PERIODICO<?}?>
                      <?if($datconsultaso->tipoexa_retir_t99=='SI'){?>RETIRO<?}?>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI'){?>CAMBIO OCUPACION<?}?>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI'){?>REUBICACION<?}?>
                      <?if($datconsultaso->tipoexa_altur_t99=='SI'){?>ALTURAS<?}?>
                      &nbsp;&nbsp;
                      <?if($datconsultaso->cmaptex_apto_t99=='SI'){?>APTO<?}?>
                      <?if($datconsultaso->cmaptex_aptorest_t99=='SI'){?>APTO CON RESTRICCIONES<?}?>
                      <?if($datconsultaso->cmaptex_noapto_t99=='SI'){?>NO APTO<?}?>
                      <?if($datconsultaso->cmaptex_difer_t99=='SI'){?>DIFERIDO<?}?>
                      <?if($datconsultaso->cmexeg_satis_t99=='SI'){?>SATISFACTORIO<?}?>
                      <?if($datconsultaso->cmexeg_nosatis_t99=='SI'){?>NO SATISFACTORIO<?}?>
             
           </td>
         </tr>
         <tr>
           <td colspan="3">
             <strong>RECOMENDACIONES</strong>
             <?=$datconsultaso->cm_recoyrest_t99?>
           </td>
         </tr>
         <tr>
           <td colspan="3">
             <strong>PROGRAMAS VIGILANCIA EPIDEMIOLÓGICA</strong><br>
             <?if($datconsultaso->pvepi_audit_t99=='SI'){?> Auditivo<?}?>
             <?if($datconsultaso->pvepi_visual_t99=='SI'){?> Visual<?}?>
             <?if($datconsultaso->pvepi_ergono_t99=='SI'){?> Ergonómico<?}?>
             <?if($datconsultaso->pvepi_resp_t99=='SI'){?> Respiratorio<?}?>
             <?if($datconsultaso->pvepi_psico_t99=='SI'){?> Psicolaboral<?}?>
             <?if($datconsultaso->pvepi_dealtatem_t99=='SI'){?> De altas temperaturas<?}?>
             <?if($datconsultaso->pvepi_riequimico_t99=='SI'){?> De Riesgos Químicos<?}?>
             <?if($datconsultaso->pvepi_plagui_t99=='SI'){?> De Plaguicidas<?}?>
             <?if($datconsultaso->pvepi_riescard_t99=='SI'){?> De Riesgo Cardiovascular<?}?>
           </td>
         </tr>
       </table>
      </div> 
      <? } ?>
