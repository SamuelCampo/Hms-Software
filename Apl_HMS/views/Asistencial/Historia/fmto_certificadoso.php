<?
  //var_dump($dathistoria);
  //exit;
  //var_dump($datconsultaso);
  //exit;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head></head>
  <body>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:10pt;">
        <table width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td>
              <table width="100%">
                <tr>
                  <td width="200px">
                    <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
                  </td>
                  <td nowrap>
                    <h3 align="center" > CERTIFICADO MÉDICO OCUPACIONAL</h3>
                    <div style="text-align: left">
                      <br>
                      <span><?=$this->Modulo->infoentidad->nombre_t75?></span>
                      <br/>
                      <span>NIT: <?=$this->Modulo->infoentidad->nit_t75?></span>
                      <span><?=$this->Modulo->infoentidad->codigo_t75?></span>
                      <br/>
                      <span>DIR: <?=$this->Modulo->infoentidad->direccion_t75?></span>
                      <span>TEL: <?=$this->Modulo->infoentidad->telefono_t75?></span>
                    </div>
                  </td>
                  <td>
                    <h3 align="center" >FECHA</h3><br>
                    <center>
                      <?=date("Y-m-d",strtotime($dathistoria->fmod_t4))?>
                    </center>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <div style="border:1px solid #000">
          <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
              <td colspan="3"><strong>Empresa: </strong><span style="font-size: 1.5em;font-weight: bold"><?=strtoupper($datconsultaso->emact_emplea_t99)?></span></td>
            </tr>
            <tr>
              <td colspan="2"><strong>Trabajador: </strong><?=strtoupper($datpaciente->nomcomp_t3)?></td>
              <td nowrap><strong>Identificación: </strong><?=$datpaciente->identiftipo_t3?> <?=$datpaciente->identificacion_t3?></td>
            </tr>
            <tr>
              <td><strong>Cargo a Certificar: </strong><?=strtoupper($datconsultaso->emact_cargo_t99)?></td>
              <td colspan="2" nowrap><strong>MD Evaluador: </strong><?=strtoupper($datconsulta->mednomcomp_t64)?></td>
            </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="1">
           <tr>
              <td colspan="3" style="border-top: 1px solid #000;padding:.5em"><center>CONCEPTO DE APTITUD Y/O CONCEPTO MÉDICO</center></td>
            </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="3">
                <table width="100%">
                  <tr>
                    <td>APTITUD INGRESO:</td>
                    <td>
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && $datconsultaso->cmaptex_apto_t99=='SI'){?>APTO<?}?>
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && $datconsultaso->cmaptex_aptorest_t99=='SI'){?>APTO CON RESTRICCIONES<?}?>
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && $datconsultaso->cmaptex_noapto_t99=='SI'){?>NO APTO<?}?>
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && $datconsultaso->cmaptex_difer_t99=='SI'){?>APLAZADO<?}?>
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && $datconsultaso->cmexeg_satis_t99=='SI'){?>SATISFACTORIO<?}?>
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && $datconsultaso->cmexeg_nosatis_t99=='SI'){?>NO SATISFACTORIO<?}?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->tipoexa_ingreso_t99=='SI' && !empty($datconsultaso->cm_recomend_t99)){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>APTITUD PERIODICO:</td>
                    <td>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && $datconsultaso->cmaptex_apto_t99=='SI'){?>APTO<?}?>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && $datconsultaso->cmaptex_aptorest_t99=='SI'){?>APTO CON RESTRICCIONES<?}?>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && $datconsultaso->cmaptex_noapto_t99=='SI'){?>NO APTO<?}?>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && $datconsultaso->cmaptex_difer_t99=='SI'){?>APLAZADO<?}?>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && $datconsultaso->cmexeg_satis_t99=='SI'){?>SATISFACTORIO<?}?>
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && $datconsultaso->cmexeg_nosatis_t99=='SI'){?>NO SATISFACTORIO<?}?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->tipoexa_periodico_t99=='SI' && !empty($datconsultaso->cm_recomend_t99)){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>APTITUD CAMBIO OCUPACIÓN:</td>
                    <td>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && $datconsultaso->cmaptex_apto_t99=='SI'){?>APTO<?}?>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && $datconsultaso->cmaptex_aptorest_t99=='SI'){?>APTO CON RESTRICCIONES<?}?>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && $datconsultaso->cmaptex_noapto_t99=='SI'){?>NO APTO<?}?>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && $datconsultaso->cmaptex_difer_t99=='SI'){?>APLAZADO<?}?>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && $datconsultaso->cmexeg_satis_t99=='SI'){?>SATISFACTORIO<?}?>
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && $datconsultaso->cmexeg_nosatis_t99=='SI'){?>NO SATISFACTORIO<?}?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->tipoexa_camocupa_t99=='SI' && !empty($datconsultaso->cm_recomend_t99)){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>APTITUD REUBICACIÓN:</td>
                    <td>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && $datconsultaso->cmaptex_apto_t99=='SI'){?>APTO<?}?>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && $datconsultaso->cmaptex_aptorest_t99=='SI'){?>APTO CON RESTRICCIONES<?}?>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && $datconsultaso->cmaptex_noapto_t99=='SI'){?>NO APTO<?}?>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && $datconsultaso->cmaptex_difer_t99=='SI'){?>APLAZADO<?}?>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && $datconsultaso->cmexeg_satis_t99=='SI'){?>SATISFACTORIO<?}?>
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && $datconsultaso->cmexeg_nosatis_t99=='SI'){?>NO SATISFACTORIO<?}?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->tipoexa_reubica_t99=='SI' && !empty($datconsultaso->cm_recomend_t99)){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>EGRESO:</td>
                    <td>SATISFACTORIO: 
                      <?if($datconsultaso->tipoexa_retir_t99=='SI' && $datconsultaso->cmexeg_satis_t99=='SI'){?> X <?}?>
                    </td>
                    <td>
                      NO SATISFACTORIO :
                      <?if($datconsultaso->tipoexa_retir_t99=='SI' && $datconsultaso->cmexeg_nosatis_t99=='SI'){?> X <?}?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <br>
                      <b>CON ÉNFASIS EN</b>
                      <br>
                    </td>
                  </tr>
                  <tr>
                    <td>ALTURAS:</td>
                    <td>
                      <?=strtoupper($datconsultaso->cmexeg_altur_t99)?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->cmexeg_altur_t99=='Apto con Restricciones'){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>COFINADO:</td>
                    <td>
                      <?=strtoupper($datconsultaso->cmexeg_cofina_t99)?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->cmexeg_confina_t99=='Apto con Restricciones'){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>OSTEOMUSCULAR:</td>
                    <td>
                      <?=strtoupper($datconsultaso->cmexeg_ostomus_t99)?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->cmexeg_ostomus_t99=='Apto con Restricciones'){?>SI<?}?>
                    </td>
                  </tr>
                  <tr>
                    <td>MANIPULACIÓN ALIMENTOS:</td>
                    <td>
                      <?=strtoupper($datconsultaso->tipoexa_manipulalim_t99)?>
                    </td>
                    <td>
                      CON REC :
                      <?if($datconsultaso->tipoexa_manipulalim_t99=='Apto con Restricciones'){?>SI<?}?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="1">
             <tr>
              <td colspan="3">
                <hr />
                <center>PARACLINICOS Y AYUDAS DIAGNOSTICAS<? /*if($datconsultaso->cmexeg_altur_t99=='SI'){?>ALTURAS<?} */?></center>
                <br><br>
              </td>
            </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="1">
              <tr>
                      <td>
                         <?if($datconsultaso->psra_audiometria_t99 != 'NA'){
                          echo 'AUDIOMETRIA';
                         } ?>  
                      </td>
                      <td>
                          <? if($datconsultaso->psra_optometria_t99 != 'NA'){
                          echo 'OPTOMETRIA';
                          } ?>
                      </td>
                                    
                   </tr>
                    <tr>  
                        <td>
                         <? if($datconsultaso->psra_glicemia_t99 != 'NA'){
                          echo 'GLICEMIA';
                          } ?>
                       </td>   
                          <td>
                            <? if($datconsultaso->psra_colesteroltotal_t99 != 'NA' ){
                              echo 'COLESTEROL TOTAL';
                            } ?>
                         </td>
                          
                         
                  </tr>
                  <tr>
                          <td>
                             <?if($datconsultaso->psra_triguicelidostotales_t99 != 'NA'){
                              echo 'TRIGRICELIDOS TOTALES';
                             } ?>  
                           </td>
                          <td>
                            <? if($datconsultaso->psra_koh_t99 != 'NA'){
                            echo 'KOH';
                            } ?>
                          </td>
                    </tr>
                    <tr>
                        <td>
                             <? if($datconsultaso->psra_frotisfaringeo_t99 == 'NORMAL'){
                              echo 'FORTIFARINGUEO ';
                              }elseif($datoconsultaso->psra_frotifaringeo_t99 == 'ANORMAL'){
                              echo 'FORTIFARINGUEO';
                              } ?>
                          </td>
                          <td>
                            <? if($datconsultaso->psra_coprologico_t99 == 'NORMAL' ){
                              echo 'CROPROLOGICO';
                            }elseif($datconsultaso->psra_coprologico_t99 == 'ANORMAL' ){
                              echo 'CROPROLOGICO';
                            } ?>
                         </td>
                           
                  </tr>
                  <tr>                
                     <td>
                       <? if($datconsultaso->psra_hemograma_t99 != 'NA'){
                        echo 'HEMEROGRAMA';
                        } ?>
                    </td>
                    <td>
                      <? if($datconsultaso->psra_serologia_t99 != 'NA' ){
                        echo 'SEROLOGIA';
                      } ?>
                  </td>
                   
              </tr>
              <tr>
                <td>
                     <?if($datconsultaso->psra_rxlumboscara_t99 == 'NORMAL'){
                      echo 'RX RUMBLOSCARA';
                     }elseif($datconsultaso->psra_rxlumboscara_t99 == 'ANORMAL'){
                      echo 'RX RUMBLOSCARA';
                     } ?>  
                  </td>  
                  <td>
                     <?if($datconsultaso->psra_serologia2_t99 != 'NA'){
                      echo 'SEROLOGIA 2';
                     } ?>  
                   </td>
              </tr>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="3">
                <hr /></td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="3">
                <center>RECOMENDACIONES GENERALES</center></td>
            </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="3">
                HÁBITOS DE VIDA SALUDABLES <BR>
                HIGIENE POSTURAL Y DE COLUMNA
              </td>
            </tr>
            <tr>
              <td colspan="3">
                USAR EPP: &nbsp;&nbsp;&nbsp;&nbsp; X
              </td>
            </tr>
            <tr>
              <td colspan="3"><center><?if($datconsultaso->cmexeg_altur_t99 =='SI'){?>RECOMENDACIONES ALTURAS<?}?></center></td>
            </tr>
            <tr>
              <td>
                <table >
                  <tr>
                    <td style="text-align: justify">
                      <!-- """ # /* */  -->
                      <?=  strtoupper($datconsultaso->cm_recoyrest_t99)?>
                      <?if(!empty($datconsultaso->cm_recomend_t99)){?>
                        <?=strtoupper($datconsultaso->cm_recomend_t99)?>
                      <?}else{?>
                      <BR> N/A <BR> 
                      <?} ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
        </td>
      </tr>
      
  </table>
  <div style="page-break-after:always;">
    
  </div>
  <table>
            <tr>
              <td>
                <hr /></td>
                <center>RESTRICCIONES</center>
            </tr> 
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
               <td colspan="3">
                <table >
                  <tr>
                    <td style="text-align: justify;">
                      <!-- """ # /* */  -->
                      <?=  strtoupper($datconsultaso->cm_recoyrest_t99)?>
                      <?if(!empty($datconsultaso->cm_restricc_t99)){?>
                        <?=strtoupper($datconsultaso->cm_restricc_t99)?>
                      <?}else{?>
                      <BR> N/A <BR> 
                      <?} ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="1">         
            <tr>
              <td colspan="3">
                <hr />
                <center>ELEMENTOS DE PROTECCION PERSONAL<? /* if($datconsultaso->cmexeg_altur_t99=='SI'){?>ALTURAS<?} */ ?></center></td>
            </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td>
                 <?if($datconsultaso->epp_unifor_t99 == 'SI'){
                  echo 'UNIFORME';
                 } ?>  
                </td>

                <td>
                  <? if($datconsultaso->epp_guantes_t99 == 'SI'){
                  echo 'GUANTES';
                  } ?>
                </td>

                <td>
                  <? if($datconsultaso->epp_presp_t99 == 'SI' ){
                    echo 'PRESP';
                  } ?>

                </td>
              </tr>
               <tr>
                <td>
                 <?if($datconsultaso->epp_pvisual_t99 == 'SI'){
                  echo 'PVISUAL';
                 } ?>  
                </td>
                <td>
                  <? if($datconsultaso->epp_botas_t99 == 'SI'){
                  echo 'BOTAS';
                  } ?>
                </td>
                <td>
                  <? if($datconsultaso->epp_otros_t99 == 'SI' ){
                    echo 'OTROS';
                  } ?>
                </td>
              </tr>
              <tr>
                 <td>
                  <? if($datconsultaso->epp_paudit_t99 == 'SI' ){
                    echo 'PAUDIT';
                  } ?>
                </td>
              </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="1">     
               <tr>
              <td colspan="3">
                <hr />
                <center>PROGRAMAS VIGILANCIA EPIDEMIOLOGICA
                 <? /*if($datconsultaso->cmexeg_altur_t99=='SI'){?>ALTURAS<?} */?>             
                </center>
                <br><br>
              </td>  
            </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td>
                 <?if($datconsultaso->pvepi_audit_t99 == 'SI'){
                  echo 'AUDITIVO ';
                 } ?>  
                </td> <td>
                  <? if($datconsultaso->pvepi_visual_t99 == 'SI'){
                  echo 'VISUAL ';
                  } ?>
                </td>
                <td>
                  <? if($datconsultaso->pvepi_ergono_t99 == 'SI' ){
                    echo 'ERGONOMICO';
                  } ?>
                </td>
              </tr>
              <tr>
                <td>
                 <? if($datconsultaso->pvepi_resp_t99 == 'SI'){
                  echo 'RESPIRATIVO';
                 }?> 
                </td>
                 <td>
                 <? if($datconsultaso->pvepi_psico_t99 == 'SI'){
                  echo 'PSICOLABORAL';
                 }?>
                </td>
                 <td>
                  <? if($datconsultaso->pvepi_dealtatem_t99 == 'SI'){
                    echo 'DE ALTAS TEMPERATURAS';
                  }?>
                </td>
              </tr>
              <tr>
                <td>
                 <? if($datconsultaso->pvepi_riequimico_t99 == 'SI'){
                  echo 'RIESGOS QUIMICOS';
                 }?>
                </td>
                <td>
                <? if($datconsultaso->pvepi_plagui_t99 == 'SI'){
                  echo 'PLAGUISIDAS';
                }?>
                </td>
                <td>
                <? if($dataconsultaso->pvepi_rescard_t99 == 'SI'){
                  echo 'RIESGOS CARDIOVASCULAR';
                }?>
                </td>
              </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td colspan="3" style="font-size: .9em">
                <hr/><p><small> La Resolucion 00311409 por la cual se establece el reglamento tecnico de trabajos seguros en alturas en su capitulo 1 articulo 1 define como trabajo en alturas toda labor o desplazamiento que se realice a 1.50 por encima o en nivel inferior
                  <!-- LA RESOLUCIÓN 0031409 POR LA CUAL SE ESTABLECE EL REGLAMENTO TÉCNICO DE TRABAJOS SEGUROS EN ALTURAS EN SU CAPÍTULO 1 ARTÍCULO 1 DEFINE COMO TRABAJO EN ALTURAS TODA LABOR O DESPLAZAMIENTO QUE SE REALICE A 1.50 POR ENCIMA O EN NIVEL INFERIOR --> </small>
                </p>       
                </td>
            </tr>
            <tr>
              <td colspan="3" style="font-size: .9em">
                <p><small><!-- EVALUACIÓN ACORDE A RESOLUCIÓN 0031409 DEL 2012 PARA TRABAJOS SEGUROS EN ALTURAS, SE ENTREGA Y FIRMA --> 
                Evaluacion acorde a resolucion 0031409 del 2012 para trabajos seguros en alturas, se entrega y firma</small></p>
                <p>
                  <small>El Decreto 1072 de 2015, que enmarca al nuevo Sistema de Gestión de Seguridad y Salud en el Trabajo (SG-SST), contempla la realización de exámenes médicos para los contratistas</small>
                </p>
              </td>
            </tr>
         </table>
        </div>
        <table width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr >
            <td width="50%">
              <br/>
              <br/>
              &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br/>
              <?=$datconsulta->mednomcomp_t64?><br/>
              <?=$datconsulta->medespec_t64?><br/>
              REG. <?=$datconsulta->medreg_t64?><br/>
              <?=$datconsulta->medcargo_t64?><br/>
            </td>
            <td width="50%" >
              <br/><br/><br/>
              _____________________________________
              <br/>
              <?=$datpaciente->nomcomp_t3?><br/>
              <?=$datpaciente->identiftipo_t3?> <?=$datpaciente->identificacion_t3?><br/>
              Trabajador
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <?=$this->load->view('Genericas/fmto_hmspie','',true);?>
            </td>
          </tr>
        </table>
    </div>
  </body>
</html>