    <div style="border:1px solid #000">
      <table width="100%" border="0" cellspacing="0" cellpadding="1" style="border-collapse: collapse;">
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
          <td colspan="2">
            <?if(!empty($datconsulta->tipooption_t64)){?>
              <strong>Tipo de Diagnostico</strong> <br/>
              <?=$datconsulta->tipooption_t64;?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datconsulta->causaext_t64)){?>
              <strong>Causa Externa</strong> <br/>
              <?=$datconsulta->causaext_t64;?>
            <?}?>
          </td>
        </tr>
          <tr>
          <td colspan="2">
            <?if(!empty($datconsulta->viaing_t64)){?>
              <strong>Via Ingreso</strong> <br/>
              <?=$datconsulta->viaing_t64;?>
            <?}?>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datconsulta->finalconsu_t64)){?>
              <strong>FINALIDAD DE LA CONSULTA</strong> <br/>
              <?=$datconsulta->finalconsu_t64;?>
            <?}?>
          </td>
          <td colspan="2">
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
              <strong>FECHA ATENCIÓN</strong>
            </td>
            <td align="center" width="50%" colspan="2">
              <strong>EGRESO</strong>
            </td> 
          </tr> 
          <tr>
              <td ><strong> Fecha / Hora </strong></td> 
              <td ><strong> Vía</strong></td>
              <td ><strong> Fecha/ Hora </strong></td> 
              <td ><strong> Vía</strong></td>
          </tr>
          <tr>
            <td ><?=$dathistoria->fingreso_t4?></td>
            <td ><?=$dathistoria->viaing_t4?></td>
            <td ><?php if($datconsulta->fingreso_t4 > $datconsulta->fsalida){}else{echo $datconsulta->fsalida_t4;} ?></td>
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
      <center><b>DATOS DE INGRESO</b></center>
      <div style="border:1px solid #000">
        <table border="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
         <tr><td>
               <strong>MOTIVO DE CONSULTA </strong><?=$datconsulta->motconsulta_t64?> </td> 
         </tr>
         <tr><td>
             <strong>ENFERMEDAD ACTUAL </strong><?=$datconsulta->enfermactual_t64?> </td> 
         </tr>
       </table>
      </div>
      <?php if ($this->db->database != "CLIOFTALMO"): ?>
       <center><b>ANTECEDENTES</b></center>
      <div style="border:1px solid #000">
        <table align="center" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td nowrap ><center><b>PERSONALES</b></center></td>
            <td nowrap><center><b>FAMILIARES</b></center></td>
          </tr>
          <tr valign="top">
            <td>
              <table align="center" cellspacing="0" cellpadding="0">
                <?if($datconsulta->datantpers->alergia_t65=='SI'){?>
                <tr>
                  <td>Alergias</td>
                  <td><b><?=$datconsulta->datantpers->alergia_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->dijestivas_t65=='SI'){?>
                <tr>
                  <td> Enf.Digestivas</td>
                  <td><b><?=$datconsulta->datantpers->dijestivas_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->alzaimer_t65=='SI'){?>
                <tr>
                  <td> Alzaheimer</td>
                  <td><b><?=$datconsulta->datantpers->alzaimer_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->hipertension_t65=='SI'){?>
                <tr>
                  <td> Hipertensión</td>
                  <td><b><?=$datconsulta->datantpers->hipertension_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->renales_t65=='SI'){?>
                <tr>
                  <td> Enfermedades Renales</td>
                  <td><b><?=$datconsulta->datantpers->renales_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->hepatitis_t65=='SI'){?>
                <tr>
                  <td> Hepatitis</td>
                  <td><b><?=$datconsulta->datantpers->hepatitis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->asma_t65=='SI'){?>
                <tr>
                  <td> Asma</td>
                  <td><b><?=$datconsulta->datantpers->asma_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->neuromental_t65=='SI'){?>
                <tr>
                  <td>Neuromentales</td>
                  <td><b><?=$datconsulta->datantpers->neuromental_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->lupus_t65=='SI'){?>
                <tr>
                  <td>Lupus</td>
                  <td><b><?=$datconsulta->datantpers->lupus_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->cancer_t65=='SI'){?>
                <tr>
                  <td>Cancer</td>
                  <td><b><?=$datconsulta->datantpers->cancer_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->sifilis_t65=='SI'){?>
                <tr>
                  <td>Sifilis</td>
                  <td><b><?=$datconsulta->datantpers->sifilis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->psoriasis_t65=='SI'){?>
                <tr>
                  <td>Psoriasis</td>
                  <td><b><?=$datconsulta->datantpers->psoriasis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->cardiovascular_t65=='SI'){?>
                <tr>
                  <td>Cardiovascular</td>
                  <td><b><?=$datconsulta->datantpers->cardiovascular_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->tbc_t65=='SI'){?>
                <tr>
                  <td>T.B.C</td>
                  <td><b><?=$datconsulta->datantpers->tbc_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->artritis_t65=='SI'){?>
                <tr>
                  <td>Artritis Reumat.</td>
                  <td><b><?=$datconsulta->datantpers->artritis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->diabetes_t65=='SI'){?>
                <tr>
                  <td>Diabetes</td>
                  <td><b><?=$datconsulta->datantpers->diabetes_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantpers->acv_t65=='SI'){?>
                <tr>
                  <td>A.C.V</td>
                  <td><b><?=$datconsulta->datantpers->acv_t65?></b></td>
                </tr>
                <?}?>    
              </table>
              <?if(!empty($datconsulta->datantpers->descripcion_t65)){?>
                <p style="text-align: left"><b>Descripción: </b>
                  <?=$datconsulta->datantpers->descripcion_t65?>
                </p>
              <?}?>
              <?if(!empty($datconsulta->datantpers->otros_t65)){?>
                <p style="text-align: left"><b>Otros: </b>
                  <?=$datconsulta->datantpers->otros_t65?>
                </p>
              <?}?>
            </td>
            <td>
              <table align="center" cellspacing="0" cellpadding="0">
                <?if($datconsulta->datantfam->alergia_t65=='SI'){?>
                <tr>
                  <td>Alergias</td>
                  <td><b><?=$datconsulta->datantfam->alergia_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->dijestivas_t65=='SI'){?>
                <tr>
                  <td> Enf.Digestivas</td>
                  <td><b><?=$datconsulta->datantfam->dijestivas_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->alzaimer_t65=='SI'){?>
                <tr>
                  <td> Alzaheimer</td>
                  <td><b><?=$datconsulta->datantfam->alzaimer_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->hipertension_t65=='SI'){?>
                <tr>
                  <td> Hipertensión</td>
                  <td><b><?=$datconsulta->datantfam->hipertension_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->renales_t65=='SI'){?>
                <tr>
                  <td> Enfermedades Renales</td>
                  <td><b><?=$datconsulta->datantfam->renales_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->hepatitis_t65=='SI'){?>
                <tr>
                  <td> Hepatitis</td>
                  <td><b><?=$datconsulta->datantfam->hepatitis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->asma_t65=='SI'){?>
                <tr>
                  <td> Asma</td>
                  <td><b><?=$datconsulta->datantfam->asma_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->neuromental_t65=='SI'){?>
                <tr>
                  <td>Neuromentales</td>
                  <td><b><?=$datconsulta->datantfam->neuromental_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->lupus_t65=='SI'){?>
                <tr>
                  <td>Lupus</td>
                  <td><b><?=$datconsulta->datantfam->lupus_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->cancer_t65=='SI'){?>
                <tr>
                  <td>Cancer</td>
                  <td><b><?=$datconsulta->datantfam->cancer_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->sifilis_t65=='SI'){?>
                <tr>
                  <td>Sifilis</td>
                  <td><b><?=$datconsulta->datantfam->sifilis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->psoriasis_t65=='SI'){?>
                <tr>
                  <td>Psoriasis</td>
                  <td><b><?=$datconsulta->datantfam->psoriasis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->cardiovascular_t65=='SI'){?>
                <tr>
                  <td>Cardiovascular</td>
                  <td><b><?=$datconsulta->datantfam->cardiovascular_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->tbc_t65=='SI'){?>
                <tr>
                  <td>T.B.C</td>
                  <td><b><?=$datconsulta->datantfam->tbc_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->artritis_t65=='SI'){?>
                <tr>
                  <td>Artritis Reumat.</td>
                  <td><b><?=$datconsulta->datantfam->artritis_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->diabetes_t65=='SI'){?>
                <tr>
                  <td>Diabetes</td>
                  <td><b><?=$datconsulta->datantfam->diabetes_t65?></b></td>
                </tr>
                <?}?>
                <?if($datconsulta->datantfam->acv_t65=='SI'){?>
                <tr>
                  <td>A.C.V</td>
                  <td><b><?=$datconsulta->datantfam->acv_t65?></b></td>
                </tr>
                <?}?>    
              </table>
              <?if(!empty($datconsulta->datantfam->descripcion_t65)){?>
                <p style="text-align: left"><b>Descripción: </b>
                  <?=$datconsulta->datantfam->descripcion_t65?>
                </p>
              <?}?>
              <?if(!empty($datconsulta->datantfam->otros_t65)){?>
                <p style="text-align: left"><b>Otros: </b>
                  <?=$datconsulta->datantfam->otros_t65?>
                </p>
              <?}?>
            </td>
          </tr>
          <tr>
            <td nowrap ><center><b>VACUNACIÓN</b></center></td>
            <td nowrap></td>
          </tr>
          <tr>
            <td nowrap colspan="2">ESQUEMA ADEACUADO PARA LA EDAD: <?=$datconsulta->vacunas["ESQAD"]->valor_t106?></td>
          </tr>
        </table>
      </div>
      <center><b>REVISIÓN POR SISTEMAS</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>Ojos</strong></td>
            <td><?=$datconsulta->rs_ojos_t64?></td>
            <td><strong>ORL</strong></td>
            <td><?=$datconsulta->rs_orl_t64?></td>
            <td><strong>Cuello</strong></td>
            <td><?=$datconsulta->rs_cuello_t64?></td>
          </tr>
          <tr>
            <td><strong>Cardio-Vascular:</strong></td>
            <td><?=$datconsulta->rs_cardiovascular_t64?></td>
            <td><strong>Pulmonar</strong></td>
            <td><?=$datconsulta->rs_pulmonar_t64?></td>
            <td><strong>Digestivo</strong></td>
            <td><?=$datconsulta->rs_digestivo_t64?></td>
            
            
          </tr>
          <tr>
            <td><strong>Genito-urinario</strong></td>
            <td><?=$datconsulta->rs_genitourinario_t64?></td>
            <td><strong>Musculo-Esqueletico</strong></td>
            <td><?=$datconsulta->rs_musculoesqueletico_t64?></td>
            <td><strong>Extremidades</strong></td>
            <td><?=$datconsulta->rs_extremidades_t64?></td>
          </tr>
          <tr>
            <td><strong>Neurologico</strong></td>
            <td><?=$datconsulta->rs_neurologico_t64?></td>
            <td><strong>Piel y Anexos</strong></td>
            <td><?=$datconsulta->rs_pielanexos_t64?></td>
            <td><strong>Otros</strong></td>
            <td><?=$datconsulta->rs_otros_t64?></td>
          </tr>
        </table>
      </div>
      <center><b>EXAMEN FISICO</b></center>
      <div style="border:1px solid #000">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>Talla(cms)</b></td>
              <td><?=$datconsulta->altura_t64?></td>
              <td><b>Peso(Kg)</b></td>
              <td><?=$datconsulta->peso_t64?></td>
              <td><b>IMC</b></td>
              <td><?=$datconsulta->imc_t64?></td>
              <td><b>T°</b></td>
              <td><?=$datconsulta->temp_t64?></td>
            </tr>
            <tr>
              <td><b>Frecuencia Respiratoria (r/min)</b></td>
              <td><?=$datconsulta->fr_t64?></td>
              <td><b>Frecuencia Cardiaca (L/min)</b></td>
              <td><?=$datconsulta->fc_t64?></td>
              <td><b>Presion Arterial(mmHg)</b></td>
              <td><?=$datconsulta->ta_t64?></td>
              <td><b>P. ABD(cms)</b></td>
              <td><?=$datconsulta->pabd_t64?></td>
            </tr>
            <tr>
                <!--DATOS NUEVOS 23/04 EXAMEN FISICO-->
              <td><b>M. CRANEO</b></td>
              <td><?=$datconsulta->mcraneo_t64?></td>
              <td><b>M. MUÑECA</b></td>
              <td><?=$datconsulta->mmuneca_t64?></td>
              <td><b>P. ABD</b></td>
              <td><?=$datconsulta->pabd_t64?></td>
              <td><b>SINT RESP</b></td>
              <td><?=$datconsulta->SINTR_t64?></td>
           
            </tr>
            <tr>
              <td><b>SINT PIEL</b></td>
              <td><?=$datconsulta->SINTP_t64?></td>
              <td><b>SINT FEBRIL</b></td>
              <td><?=$datconsulta->SINTF_t64?></td>
              <!--datos nuevo de examen fisico 23/04-->
            </tr>
        </table>
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>Ojos</strong></td>
            <td><?=$datconsulta->ojos_t64?></td>
            <td><strong>ORL</strong></td>
            <td><?=$datconsulta->orl_t64?></td>
            <td><strong>Cuello</strong></td>
            <td><?=$datconsulta->cuello_t64?></td>
          </tr>
          <tr>
            
            <td><strong>Cardio-Vascular:</strong></td>
            <td><?=$datconsulta->cardiovascular_t64?></td>
            <td><strong>Pulmonar</strong></td>
            <td><?=$datconsulta->pulmonar_t64?></td>
            <td><strong>Digestivo</strong></td>
            <td><?=$datconsulta->digestivo_t64?></td>
          </tr>
          <tr>
            <td><strong>Genito-urinario</strong></td>
            <td><?=$datconsulta->genitourinario_t64?></td>
            <td><strong>Musculo-Esqueletico</strong></td>
            <td><?=$datconsulta->rs_musculoesqueletico_t64?></td>
            <td><strong>Extremidades</strong></td>
            <td><?=$datconsulta->extremidades_t64?></td>
          </tr>
          <tr>
            <td><strong>Neurologico</strong></td>
            <td><?=$datconsulta->neurologico_t64?></td>
            <td><strong>Piel y Anexos</strong></td>
            <td><?=$datconsulta->pielanexos_t64?></td>
            <td><strong>Otros</strong></td>
            <td><?=$datconsulta->otros_t64?></td>
          </tr>
          <tr><td colsspan="6">PODOLOGÍA</td></tr>
          <tr>
            <td><strong>Pulsos</strong></td>
            <td><?=$datconsulta->podpulsos_t64?></td>
            <td><strong>Alteración Biomecánica</strong></td>
            <td><?=$datconsulta->podaltbiomecanica_t64?></td>
            <td><strong>Sensibilidad Plantar</strong></td>
            <td><?=$datconsulta->podsensibplantar_t64?></td>
          </tr>
          <tr>
            <td><strong>Amputación</strong></td>
            <td><?=$datconsulta->podamputacion_t64?></td>
            <td><strong>Piel</strong></td>
            <td><?=$datconsulta->popiel_t64?></td>
            <td><strong>Uñas (Micosis)</strong></td>
            <td><?=$datconsulta->podunasmicosis_t64?></td>


          
          </tr>
        </table>
      </div> 
      <?php endif ?>
      
      <?php if ($this->db->database == "CLIOFTALMO") { ?>
              <!-- EXAMEN VISUAL -->
      <?php //var_dump(datoconsulta[0]) ?>
      <center><b>EXAMEN VISUAL</b></center>
      <div style="border:1px solid #000">
        <legend> AGUDEZA VISUAL</legend>
        <legend>AV VL</legend>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>VL</b></td>
              <td></td>
              <td><b>SIN CORRECCIÓN</b></td>
              <td><?=$datoconsulta[0]->agudeza_sin_correccion?></td>
              <td><b>DESCRIPCION</b></td>
              <td><?=$datoconsulta[0]->agudeza_texto_sin_correccion?></td>
            </tr>
            <tr>
              <td><b>CON CORRECCION</b></td>
              <td><?=$datoconsulta[0]->agudeza_con_correccion?></td>
              <td><b>DESCRIPCION</b></td>
              <td><?=$datoconsulta[0]->agudeza_texto_con_correccion?></td>
            </tr>
            <tr>
              <td><b>VP</b></td>
              <td><?=$datconsulta->altura_t64?></td>
              <td><b>SIN CORRECCIÓN</b></td>
              <td><?=$datoconsulta[0]->agudeza_vp_sin_correccion?></td>
              <td><b>DESCRIPCION</b></td>
              <td><?=$datoconsulta[0]->agudeza__texto_vp_sin_correccion?></td>
            </tr>
            <tr>
              <td><b>CON CORRECCION</b></td>
              <td><?=$datoconsulta[0]->agudeza_vp_con_correccion?></td>
              <td><b>DESCRIPCION</b></td>
              <td><?=$datoconsulta[0]->agudeza__texto_vp_con_correccion?></td>
            </tr>
        </table>
        <center><b>REFRACCION</b></center>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td></td>
              <td colspan="2"><b>LENSOMETRIA</b></td>
              <td></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->refraccion_lensometria_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->refraccion_lensometria_izquierdo?></td>
            </tr>
            <tr>
              <td><b>RX</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->refraccion_rx_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->refraccion_rx_izquierdo?></td>
            </tr>
            <tr>
              <td><b>RX CICLOPEGIA</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->refraccion_ciclopegia_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->refraccion_ciclopegia_izquierdo?></td>
            </tr>
        </table>
      </div>
      <!-- FIN DE EXAMEN VISUAL -->
      <!-- EXAMEN OFTALMOLOGICO -->
      <center><b>EXAMEN OFTALMOLOGICO</b></center>
      <div style="border:1px solid #000">
        <h5>      REFRACCION</h5>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>QUERATOMETRIA</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_queratometria_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_queratometria_izquierdo?></td>
            </tr>
            <tr>
              <td><b>EXTERNO ORBITAS Y PARPADOS</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_orbita_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_orbita_izquierdo?></td>
            </tr>
            <tr>
              <td><b>VIA LAGRIMAL</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_lagrimal_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_lagrimal_izquierdo?></td>
            </tr>
            <tr>
              <td><b>BIOMICROSCOPIA</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_biomicroscopia_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_biomicroscopia_izquierdo?></td>
            </tr> 
            <tr>
              <td><b>GONIO</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_gonio_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_gonio_izquierdo?></td>
            </tr> 
            <tr>
              <td><b>PIO</b></td>
            </tr>
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_pio_derecho?></td>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_pio_izquierdo?></td>
            </tr> 
        </table>
      </div>
      <!-- FIN DE EXAMEN OFTALMOLOGICO -->
      <!-- INICIO DE OPTOMETRIA -->
      <center><b>EXAMEN OPTOMETRIA</b></center>
      <div style="border:1px solid #000">
        <h5>      LENSOMETRIA</h5>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>OJO DERECHO</b></td>
              <td><?=$datoconsulta[0]->examen_queratometria_derecho?></td>
              <td><b>TIPO DE LENTE</b></td>
              <td><?=$datoconsulta[0]->examen_queratometria_izquierdo?></td>
            </tr>
            <tr>
              <td><b>OJO IZQUIERDO</b></td>
              <td><?=$datoconsulta[0]->examen_orbita_derecho?></td>
              <td><b>TIPO DE LENTE</b></td>
              <td><?=$datoconsulta[0]->examen_orbita_izquierdo?></td>
            </tr>
        </table>
        <center><b>EXAMEN POR SISTEMA OPTOMETRIA</b></center>
      <div style="border:1px solid #000">
        <h4>OJO DERECHO</h4>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>FONDO DE OJO</b></td>
              <td><b>CATARATA SENIL</b></td>
              <td><b>OPACIDAD DE MEDIOS REFRIGERANTES</b></td>
              <td><b>EXCAVACION PAPILAR AUMENTADA</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>CONJUNTIVITIS AGUDA</b></td>
              <td><b>CONJUNTIVITIS CRONICA</b></td>
              <td><b>BLEFAROCONJUNTIVITIS</b></td>
              <td><b>PETIRIGIO NASAL</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>PETIRIGIO TEMPORAL</b></td>
              <td><b>LEUCOMA</b></td>
              <td><b>ANISOCORIA</b></td>
              <td><b>CATARATA INCIPIENTE</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>CATARATA MADURA</b></td>
              <td><b>QUERATITIS</b></td>
              <td><b>PINGUECULA</b></td>
              <td><b>LENTE INTRAOCULAR</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>DESCRIPCION</b></td>
              <td></td>
            </tr>
        </table>
        <h4>OJO IZQUIERDO</h4>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>FONDO DE OJO</b></td>
              <td><b>CATARATA SENIL</b></td>
              <td><b>OPACIDAD DE MEDIOS REFRIGERANTES</b></td>
              <td><b>EXCAVACION PAPILAR AUMENTADA</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>CONJUNTIVITIS AGUDA</b></td>
              <td><b>CONJUNTIVITIS CRONICA</b></td>
              <td><b>BLEFAROCONJUNTIVITIS</b></td>
              <td><b>PETIRIGIO NASAL</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>PETIRIGIO TEMPORAL</b></td>
              <td><b>LEUCOMA</b></td>
              <td><b>ANISOCORIA</b></td>
              <td><b>CATARATA INCIPIENTE</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>CATARATA MADURA</b></td>
              <td><b>QUERATITIS</b></td>
              <td><b>PINGUECULA</b></td>
              <td><b>LENTE INTRAOCULAR</b></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><b>DESCRIPCION</b></td>
              <td></td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
              <td>IDENTIFICACION DEL ORIGEN DE LA ENFERMEDAD</td> 
          </tr>
          <tr>
            <td>PACIENTE SANO</td>
            <td>ENFERMEDAD GENERAL O COMUN</td>
            <td>ENFERMEDAD PROFESIONAL U OCUPACIONAL</td>
            <td>ACCIDENTE DE TRABAJO O FUERA DEL TRABAJO</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <!-- FIN DE OPTOMETRIA -->
     <? } ?>

      <!--GINECOLOGIA-->
      <? 
      if(!empty($datgineco) && $datpaciente->genero_t3=="FEMENINO" ){  $ver='0'?>

        <center><b>GINECOLOGIA</b></center>
        <div style="border:1px solid #000">
         <table width="100%" cellspacing="0" border="0" cellpadding="2">
                    <tr >
                      
                        <?if(!empty($datgineco[0]['menarca_gineco'])){?>
                        <td ><b>Menarca</b></td>
                        <td ><?=$datgineco[0]['menarca_gineco']?></td>
                        <?}?>
                        <?if(!empty($datgineco[0]['inicvs_gineco'])){?>
                        <td><b>Inicio de Vida Sexual</b></td>
                        <td><?=$datgineco[0]['inicvs_gineco']?></td>
                         <?}?>
                        <?if(!empty($datgineco[0]['fum_gineco'])){?>
                        <td ><b>FUM</b></td>
                        <td ><?=$datgineco[0]['fum_gineco']?></td>
                         <?}?>
                         <?if(!empty($datgineco[0]['ets_gineco'])){?>
                            <td><b>ETS</b></td>
                            <td><?=$datgineco[0]['ets_gineco']?></td>
                      </tr>
                         <?}else{ $ver='1'; }?>
                    <?if($ver!='1'){ ?>
                      <tr >
                    <? }else{$ver='0';}?>
                            <?if(!empty($datgineco[0]['fu_citologia_gineco'])){?>
                                <td ><strong>F.U Citologia</strong></td>
                                <td><?=$datgineco[0]['fu_citologia_gineco']?></td>
                            <?}?>
                            <?if(!empty($datgineco[0]['result_gineco'])){?>
                            <td><b>Resultdado</b></td>
                            <td><?=$datgineco[0]['result_gineco']?></td>
                            <?}?>
                            <?if($datgineco[0]['anti_gineco']=='SI'){?>
                            <td><b>Anticoncepci&oacute;n</b></td>
                            <td><?=$datgineco[0]['anti_gineco']?></td>
                              <?}?>
                              <?if(!empty($datgineco[0]['tipooption_gienco'])){?>
                            <td><b>Tipo</b></td>
                            <td><?=$datgineco[0]['tipooption_gienco']?></td>
                            <?}?>
                            <?if(!empty($datgineco[0]['inicio_gineco'])){?>
                               <td><strong>Inicio</strong></td>
                               <td><?=$datgineco[0]['inicio_gineco']?></td>
                            <?}?>
                      </tr>
                      <tr>
                          <? if($datgineco[0]['sus_gineco']=='SI'){?>
                            <td><b>Suspensi&oacute;n</b></td>
                            <td><?=$datgineco[0]['sus_gineco']?></td>
                            <?}?>
                            <?if(!empty($datgineco[0]['fecha_su_gineco'])){?>
                              <td><strong>Fecha Suspenci&oacute;n</strong></td>
                              <td><?=$datgineco[0]['fecha_su_gineco']?></td>
                            <?}?>
                            <?if(!empty($datgineco[0]['concep_gineco'])){?>
                              <td><strong>Anticoncepcion Tiempo</strong></td>
                              <td><?=$datgineco[0]['concep_gineco']?></td>
                            
                            <?}?>
                             <?if($datgineco[0]['cuello_u_gineco']=="SI"){?>
                              <td><strong>Cirugia de Cuello Uterino</strong></td>
                              <td><?=$datgineco[0]['cuello_u_gineco']?></td>
                           </tr>
                            <?}else{ $ver='1'; }?>
                            <?if(!empty($datgineco[0]['gestas_gineco'])){?>
                      <!--    <tr><td colspan="12" align="center" width="100%"><label>Antecedentes Ginecologicos</label></td></tr> --> 
                        
                         <?}?>
                    <?if($ver!='1'){ ?>
                      <tr >
                    <? }else{$ver='0';}?>
                           
                            <?if(!empty($datgineco[0]['gestas_gineco'])){?>
                              <td><strong>Gestas</strong></td>
                              <td><?=$datgineco[0]['gestas_gineco']?></td>
                             <?}?>
                             <?if(!empty($datgineco[0]['partos_gineco'])){?>
                              <td><strong>Partos</strong></td>
                              <td><?=$datgineco[0]['partos_gineco']?></td>
                             <?}?>
                             <?if(!empty($datgineco[0]['vivos_gineco'])){?>
                              <td><strong>Vivos</strong></td>
                              <td><?=$datgineco[0]['vivos_gineco']?></td>
                             <?}?>
                      </tr>
                      
                      <tr>   
                            <?if(!empty($datgineco[0]['abortos_gineco'])){?>
                                <td><strong>Abortos</strong></td>
                                <td><?=$datgineco[0]['abortos_gineco']?></td>
                               <?}?>  
                             <?if(!empty($datgineco[0]['mortinatos_gineco'])){?>
                                <td><strong>Mortinatos</strong></td>
                                <td><?=$datgineco[0]['mortinatos_gineco']?></td>
                               <?}?>   
                                <?if(!empty($datgineco[0]['especiales_gineco'])){?>
                                <td><strong>Especiales</strong></td>
                                <td><?=$datgineco[0]['especiales_gineco']?></td>
                               <?}?>
                               <?if(!empty($datgineco[0]['tipoem_gineco'])){?>
                                <td><strong>Tipo de Embarazo</strong></td>
                                <td><?=$datgineco[0]['tipoem_gineco']?></td>
                                </tr>
                            <?}else{ $ver='1'; }?>
                    <?if($ver!='1'){ ?>
                      <tr >
                    <? }else{$ver='0';}?>
                             <?if(!empty($datgineco[0]['hta_gineco'])){?>
                                <td><strong>HTA</strong></td>
                                <td><?=$datgineco[0]['hta_gineco']?></td>
                              <?}?> 
                              <?if($datgineco[0]['infecc_gineco']=='SI'){?>
                                <td><strong>Infección</strong></td>
                                <td><?=$datgineco[0]['infecc_gineco']?></td>
                              <?}?>
                              <?if($datgineco[0]['iso_gineco']=='SI'){?>
                                <td><strong>Isoinmunizacion</strong></td>
                                <td><?=$datgineco[0]['iso_gineco']?></td>
                              <?}?>
                                <?if(!empty($datgineco[0]['descrip_gineco'])){?>
                                <td><strong>Descripcion</strong></td>
                                <td><?=$datgineco[0]['descrip_gineco']?></td>
                              <?}?>
                      </tr>

                      <tr>  
                          <?if(!empty($datgineco[0]['aten_pre_gineco'])){?>
                                <td><strong>Atenci&oacute;n Prenatal</strong></td>
                                <td><?=$datgineco[0]['aten_pre_gineco']?></td>
                              <?}?> 
                            <?if(!empty($datgineco[0]['n_consult_gineco'])){?>
                                <td><strong>N de Consultas</strong></td>
                                <td><?=$datgineco[0]['n_consult_gineco']?></td>
                              <?}?> 
                            <?if(!empty($datgineco[0]['ex_com_gineco'])){?>
                                <td><strong>Examenes Complem.</strong></td>
                                <td><?=$datgineco[0]['ex_com_gineco']?></td>
                              <?}?> 
                           <?if(!empty($datgineco[0]['alte_gineco'])){?>
                                <td><strong>Alterados </strong></td>
                                <td><?=$datgineco[0]['alte_gineco']?></td>
                             </tr>
                            <?}else{ $ver='1'; }?>
                    <?if((!empty($datgineco[0]['vacuna_gineco'])) || (!empty($datgineco[0]['influe_gineco'])) || (!empty($datgineco[0]['hayb_gineco'])) || (!empty($datgineco[0]['f_ama_gineco'])) ){?>
                    <?if($ver!='1'){ ?>
                      <tr >
                    <? }else{$ver='0';}?>
                            <td><strong>vacuna_gineco</strong></td>
                            <?if($datgineco[0]['vacuna_gineco']=='SI'){?>
                                <td><strong>E.Vacunaci&oacute;n T-D</strong></td>
                                <td><?=$datgineco[0]['vacuna_gineco']?></td>
                              <?}?> 
                           <?if($datgineco[0]['influe_gineco']=='SI'){?>
                                <td><strong>Influenza</strong></td>
                                <td><?=$datgineco[0]['influe_gineco']?></td>
                              <?}?> 
                              <?if($datgineco[0]['hayb_gineco']=='SI'){?>
                                <td><strong>H.AYB</strong></td>
                                <td><?=$datgineco[0]['hayb_gineco']?></td>
                              <?}?> 
                               <?if($datgineco[0]['f_ama_gineco']=='SI'){?>
                                <td><strong>F.Amarilla</strong></td>
                                <td><?=$datgineco[0]['f_ama_gineco']?></td>
                              <?}?>  
                              <?if($datgineco[0]['varicela_gineco']=='SI'){?>
                                <td><strong>Varicela</strong></td>
                                <td><?=$datgineco[0]['varicela_gineco']?></td>
                              <?}?>    
                                <?if($datgineco[0]['rabia_gineco']=='SI'){?>
                                <td><strong>Rabia</strong></td>
                                <td><?=$datgineco[0]['rabia_gineco']?></td>
                              <?}?>   
                      
                    <?}?>
                    </tr>
                    <?if(!empty($datgineco[0]['fpp_gineco'])){?>
                   <!--<tr><td colspan="12" align="center" width="100%">Antecedentes Obstetricos</td></tr>           -->           
                   <?}?>  
                <?if((!empty($datgineco[0]['varicela_gineco'])) || (!empty($datgineco[0]['rabia_gineco'])) || (!empty($datgineco[0]['fpp_gineco'])) || (!empty($datgineco[0]['ultimo_parto_gineco'])) ){?>
                     <tr>       
                           
                                <?if(!empty($datgineco[0]['fpp_gineco'])){?>
                                <td style="display=none"><strong><!--FPP--></strong></td>
                                <td style="display=none"><?//$datgineco[0]['fpp_gineco']?></td>
                              <?}?>     
                                 <?if(!empty($datgineco[0]['ultimo_parto_gineco'])){?>
                                <td><strong>Fecha Ultimo Parto</strong></td>
                                <td><?=$datgineco[0]['ultimo_parto_gineco']?></td>
                                <?}?>
                              <?if(!empty($datgineco[0]['ultima_cesarea_gineco'])){?>
                                <td><strong>Fecha Ultima Cesarea</strong></td>
                                <td><?=$datgineco[0]['ultima_cesarea_gineco']?></td> 
                            </tr>
                            <?}else{ $ver='1'; }?>
                  <?}?>
                  <?if((!empty($datgineco[0]['ultima_cesarea_gineco'])) || (!empty($datgineco[0]['malformaciones_gineco'])) || (!empty($datgineco[0]['prematuros_gineco'])) || (!empty($datgineco[0]['edadgest_gineco'])) ){?>
                    <?if($ver!='1'){ ?>
                      <tr >
                    <? }else{$ver='0';}?>    
                      
                            <?if(!empty($datgineco[0]['malformaciones_gineco'])){?>
                                <td><strong>Malformaciones</strong></td>
                                <td><?=$datgineco[0]['malformaciones_gineco']?></td>
                              <?}?>
                            <?if(!empty($datgineco[0]['prematuros_gineco'])){?>
                                <td><strong>Prematuros</strong></td>
                                <td><?=$datgineco[0]['prematuros_gineco']?></td>
                              <?}?>
                             <?if(!empty($datgineco[0]['edadgest_gineco'])){?>
                                <td><strong>Edad Gestacional(Semanas)</strong></td>
                                <td><?=$datgineco[0]['edadgest_gineco']?></td>
                              <?}?>    
                          <?}?>
                      </tr>  
          </table>
        </div>
      <?}?>
      <!--GINECOLOGIA-->
      <center><b>RESUMEN DE EVOLUCION</b></center>
      <div style="border:1px solid #000; text-align: left">
        Paciente con <?=$datconsulta->motconsulta_t64?> por lo cual se presenta en la Institución <?=$resumen?>
               DIAGNOSTICOS
               <?=$datconsulta->dxprincipal_t64?>
               <?=$datconsulta->dxrelprincipal_t64?>
               <?=$datconsulta->dxsecundario_t64?>
               <?=$datconsulta->dxrelsecundario_t64?>
               <?=$datconsulta->dxegreso_t64?>
               <?=$datconsulta->dxfallecido_t64?>
      </div>
        <?
          if(empty($datconsulta->datevoluciones) || count($datconsulta->datevoluciones["MEDICA"])<=1 ){?>
            <?php echo $datconsulta->mednomcomp_t64; ?>
            <center><b>CONDUCTA Y PLAN DE MANEJO</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?if(!empty($datconsulta->objetivos_t64)){
              echo '<h5>Objetivos :</h5> '.$datconsulta->objetivos_t64.'&nbsp;';
            }
            if(!empty($datconsulta->laboratorios_t64)){
              echo '<h5>Laboratorios :</h5> '.$datconsulta->laboratorios_t64.'&nbsp;';
            }
            echo '<br><h5>Conducta :</h5> '.$datconsulta->conducta_t64.'&nbsp;';
            echo '<br><h5>Plan de Manejo: </h5> '.$datconsulta->planmanejo_t64.'&nbsp; <br>';
            ?><?
          }
          if(count($datconsulta->datevoluciones["MEDICA"])>1){
            ?><center><b>EVOLUCIÓN MÉDICA</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$datconsulta->datevoluciones["MEDICA"]),true);?>
              </div>
            <?
          }
          if(count($datconsulta->datevoluciones["ENFERMERIA"])>0){
            ?><center><b>EVOLUCIÓN ENFERMERÍA</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$datconsulta->datevoluciones["ENFERMERIA"]),true);?>
              </div>
            <?
          }
          if(count($datconsulta->datevoluciones["TERAPIAS"])>0){
            //var_dump($datconsulta->datevoluciones["TERAPIAS"]);
            ?><center><b>TERAPIAS</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$datconsulta->datevoluciones["TERAPIAS"]),true);?>
              </div>
            <?
          }
          if(count($psicologia)>0){
            //var_dump($datconsulta->datevoluciones["TERAPIAS"]);
            ?><center><b>PSICOLOGICA</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?=$this->load->view('Asistencial/Historia/f_historia_evol_psicologica',array("psicologia"=>$psicologia),true);?>
              </div>
            <?
          }
        ?>
      
      <center><b>FORMULACIÓN</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?
          if(is_array($datconsulta->datordenes)){
            ?>
            <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
              <tr>
                <td width="5%" align="center" ><strong>MED / SUM</strong></td>
                <td width="45%" align="center" ><strong>DESCRIPCIÓN</strong></td>
                <td width="5%"><strong>Cant.</strong></td>
                <td width="15%"><strong>Posología y Vía de Administración</strong></td>
                <td width="15%"><strong>Días</strong></td>
                <td width="20%"><strong>Observaciones</strong></td> 
              </tr>  
            <?
            foreach($datconsulta->datordenes as $tipo=>$arr_ordenes){
              if(is_array($arr_ordenes) && ($tipo=='MED'||$tipo=='SUM')){
                foreach($arr_ordenes as $idorden=>$arr_orden){
                  if(is_array($arr_orden)){
                    foreach($arr_orden as $detorden){
                      if($detorden->pos_t67!='HPNP'){
                      @$dias = ($detorden->cantidad_t67*$detorden->frecuencia_t67)/($detorden->dosis_t67*24);
                      ?>
                      <tr valign="top">
                        <td width="5%"><?=$tipo?></td>
                        <td width="45%"><?=$detorden->descripcion_t67?></td>
                        <td width="5%"><?=$detorden->cantidad_t67?></td>
                        <td width="15%"><?=$detorden->posologia_t67." ".$detorden->via_t67?></td>
                        <td width="15%"><?=$detorden->durdias_t67?> Dias</td>
                        <td width="20%"><?=$detorden->observacion_t67?></td>   
                      </tr>
                    <?}}
                  }
                }
              }
            }?>
            </table>
          <?}
        ?>
      </div>
      <?//if(!empty($datinca)){ ?>
      <center><b>Incapacidad</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <?//foreach ($datinca as  $datinca) {
          ?>
          <tr>
            <td><strong>INCAPACIDAD POR</strong></td>
            <td><?=$datinca[0]["motivo_inca"]?></td>
            <td><strong>TIPO DE INCAPACIDAD</strong></td>
            <td><?=$datinca[0]["tipo_inca"]?></td>
            <td><strong>DIAGNOSTICO DE LA ENFERMEDAD</strong></td>
            <td><?=$datinca[0]["diag_enfer_inca"]?></td>
     
          </tr>
          <tr>
            <td><?=$datinca[0]["diag_enfer_inca"]?></td>
             <td><strong>DIAS DE INCAPACIDAD</strong></td>
            <td><?=$datinca[0]["dias_inca"]?></td>
            <td><strong>FECHA DE INICIO</strong></td>
            <td><?=$datinca[0]["fecha_inic_inca"]?></td>
          </tr>
          <tr>
            <td><strong>FECHA DE TERMINANCION</strong></td>
            <td><?=$datinca[0]["fecha_ter_inca"]?></td>
             <td><strong>PRORROGA</strong></td>
            <td><?=$datinca[0]["porroga_inca"]?></td>
            <td><strong>FECHA ULTIMA INCAPACIDAD</strong></td>
            <td><?=$datinca[0]["fecha_ult_inca"]?></td>
             </tr>
           <tr> 
            <td><strong>NUMERO DE DIAS</strong></td>
            <td><?=$datinca[0]["numer_dias_inca"]?></td>
            <td><strong>OBSERVACIONES</strong></td>
            <td><?=$datinca[0]["obser_inca"]?></td>
          </tr>
        </table>
        <?//}?>
      </div>
      <?//}?>
      <center><b>ORDENES</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?
          if(is_array($datconsulta->datordenes)){
            ?>
            <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
              <tr>
                <td width="10%" align="center" ><strong>TIPO</strong></td>
                <td width="45%" align="center" ><strong>DESCRIPCIÓN</strong></td>
                <td width="5%"><strong>Cant.</strong></td>
                <td width="20%"><strong>Observaciones</strong></td> 
              </tr>  
            <?
            //var_dump($datconsulta->datordenes);
            foreach($datconsulta->datordenes as $tipo=>$arr_ordenes){
              if(is_array($arr_ordenes) && ($tipo!='MED'&&$tipo!='SUM')){
                foreach($arr_ordenes as $idorden=>$arr_orden){
                  if(is_array($arr_orden)){
                    foreach($arr_orden as $detorden){
                      ?>
                      <tr valign="top">
                        <td width="10%"><?=$tipo?></td>
                        <td width="45%"><?=$detorden->descripcion_t67?></td>
                        <td width="5%"><?=$detorden->cantidad_t67?></td>
                        <td width="20%"><?=$detorden->observacion_t67?></td>   
                      </tr>
                    <?
                      if(!empty($detorden->conducta_t67)){?>
                        <tr valign="top">
                          <td colspan="4"><b>&nbsp;&nbsp;&nbsp;<u>Ev : </u> &nbsp;&nbsp;</b><?=$detorden->conducta_t67?></td>
                        </tr>
                      <?}
                      if(!empty($detorden->planmanejo_t67)){
                        ?>
                        <tr valign="top">
                          <td colspan="4"><b>&nbsp;&nbsp;&nbsp;<u>Respuesta : </u> &nbsp;&nbsp;</b><b>Objetivos:</b> <?=$detorden->objetivos_t67?> <b>Conducta:</b> <?=$detorden->conducta_t67?> <b>Plan:</b> <?=$detorden->planmanejo_t67?></td>
                        </tr>
                      <?
                      }
                    }
                  }
                }
              }
            }?>
            </table>
          <?}
        ?>
      </div>
      <br>  
        <div style="border:1px solid #000; text-align: left">
            <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
                <tr>
                  <td width="100%" align="center" ><strong>RECOMENDACIONES GENERALES</strong></td>
                </tr>
                <tr>
                  <td>1. Consultar con el médico de cabecera antes de utilizar un fármaco que no haya sido recomendado previamente. Aun cuando se pueda acceder a medicamentos sin receta, hay que ser cuidadoso, pues, esto no garantiza de que su consumo no conlleve riesgos.</td>
                </tr>
                <tr>
                  <td>2. No tomar fármacos por consejo de amigos, familiares o cualquier persona que no sea un profesional de la salud, ya que los medicamentos no actúan de la misma forma sobre todo el mundo.</td>
                </tr>
          </table>
        </div>
      <br/>
    <?if(!empty($datconsulta->notaclarat_t64)){?>
      <center><b>NOTAS</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?=$datconsulta->notaclarat_t64?><br/>
      </div>
    <?}?>
    <?if(!empty($datconsulta->remisdestino_t64)){?>
      <center><b>REMISIÓN</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?=$datconsulta->remisdestino_t64?> <?=$datconsulta->remismedico_t64?> <?=$datconsulta->remisespec_t64?> <?=$datconsulta->remismotivo_t64?><br/>
      </div>
    <?}?>
    <?if(!empty($datconsulta->condicionsalida_t64)){?>
      <center><b>CONDICIÓN DE SALIDA</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?=$datconsulta->condicionsalida_t64?><br/>
      </div>
    <?}?>