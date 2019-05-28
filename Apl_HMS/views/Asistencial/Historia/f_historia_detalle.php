    <div style="border:1px solid #000">
      <table width="100%" border="0" cellspacing="0" cellpadding="1" style="border-collapse: collapse;">
          <tr valign="top">
            <td colspan="2">
              <strong>Diagnóstico Principal</strong> <br/>
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
          <?php if ($this->db->database != "hms_ERGOVIDA"): ?>
          <tr>
            <td nowrap ><center><b>VACUNACIÓN</b></center></td>
            <td nowrap></td>
          </tr>
          <tr>
            <td nowrap colspan="2">ESQUEMA ADEACUADO PARA LA EDAD: <?=$datconsulta->vacunas["ESQAD"]->valor_t106?></td>
          </tr>  
          <?php endif ?>
        </table>
      </div>
      <?php if ($this->db->database != "CLIOFTALMO"): ?>
      <center><b>REVISIÓN POR SISTEMAS</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>Inspecciones</strong></td>
            <td><?=$datconsulta->rs_ojos_t64?></td>
            <td><strong>Edema</strong></td>
            <td><?=$datconsulta->rs_orl_t64?></td>
            <td><strong>Palpacion</strong></td>
            <td><?=$datconsulta->rs_cuello_t64?></td>
          </tr>
          <tr>
            <td><strong>Sensibilidad:</strong></td>
            <td><?=$datconsulta->rs_cardiovascular_t64?></td>
            <td><strong>Alteraciones</strong></td>
            <td><?=$datconsulta->rs_pulmonar_t64?></td>
            <td><strong>Musculos afectados</strong></td>
            <td><?=$datconsulta->rs_digestivo_t64?></td>
            
            
          </tr>
          <tr>
            <td><strong>Pruebas / fuerza Muscular</strong></td>
            <td><?=$datconsulta->rs_genitourinario_t64?></td>
            <td><strong>Tipo de Dolor</strong></td>
            <td><?=$datconsulta->rs_musculoesqueletico_t64?></td>
            <td><strong>Escala del dolor</strong></td>
            <td><?=$datconsulta->rs_extremidades_t64?></td>
          </tr>
          <tr>
            <td><strong>Nivel de deporte</strong></td>
            <td><?=$datconsulta->rs_neurologico_t64?></td>
            <td><strong>Frecuencia del deporte</strong></td>
            <td><?=$datconsulta->rs_pielanexos_t64?></td>
            <td><strong></strong></td>
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

      <?php if ($datoconsulta[0] != null): ?>
      <center><b>ANTECEDENTES PATOLOGICOS</b></center>
      <div style="border:1px solid #000">
        <?php //var_dump($datconsulta); ?>
      	<table width="100%" cellspacing="0" cellpadding="0">
      		<tr>
      			<td>Hospitalizaciones: <b><?= $datconsulta->hospitalizacion_t66 ?></b></td>
      			<td>HTA <b><?= $datconsulta->emergencia_t66 ?></b></td>
      			<td>Enf.Cronicas <b><?= $datconsulta->cronicas_t66 ?></b></td>
      			<td>Diabetes <b><?= $datconsulta->venerias_t66 ?></b></td>
      		</tr>
      		<tr>
      			<td>Cardiopatias: <b><?= $datconsulta->cardiopatias_t66 ?></b></td>
      			<td>Obesidad: <b><?= $datconsulta->alergiaalim_t66 ?></b></td>
      			<td>Irritantes: <b><?= $datconsulta->transfusion_t66 ?></b></td>
      			<td>Transfusiones: <b><?= $datconsulta->alcohol_t66 ?></b></td>
      		</tr>
      		<tr>
      			<td>Farmacologicos: <b><?= $datconsulta->deporte_t66 ?></b></td>
      			<td>Quirurgicos: <b><?= $datconsulta->drogas_t66 ?></b></td>
      			<td>Toxicologicos: <b><?= $datconsulta->tabaco_t66 ?></b></td>
      			<td>Oftalmologicos: <b><?= $datconsulta->transfusiones_t66 ?></b></td>
      		</tr>
      		<tr>
      			<td width="45%">DESCRIPCION</td>
      			<td width="45%">Otros</td>
      		</tr>
      		<tr>
      			<td width="45%"><b><?=$datconsulta->descripcion2_t66 ?></b></td>
      			<td width="45%"><b><?=$datconsulta->otros2_t66 ?></b></td>
      		</tr>
      	</table>
      </div>
      <center><b>EXAMEN VISUAL</b></center>
      <div style="border:1px solid #000">
        <legend> AGUDEZA VISUAL</legend>
        <legend><b><h3>AV VL</h3></b></legend>
        <center><b>VL</b></center>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>SIN CORRECCIÓN</b></td>
            </tr>
            <tr>
              <td>OD</td>
              <td>OI</td>
            </tr>
            <tr>
              <td><?=$datoconsulta[0]->agudeOD?> <br> <?=$datoconsulta[0]->agudeza_texto_con_correccion_OD?></td>
              <td><?=$datoconsulta[0]->agudeD?> <br> <?=$datoconsulta[0]->agudeza_texto_con_correccion?></td>
            </tr>
            <tr>
              <td colspan="4"><b>CON CORRECCIÓN</b></td>
            </tr>
            <tr>
              <td>OD</td>
              <td>OI</td>
            </tr>
            <tr>
              <td><?=$datoconsulta[0]->agudeOI?> <br> <?=$datoconsulta[0]->agudeza_texto_con_correccion_OI?></td>
              <td><?=$datoconsulta[0]->agudeza_s_OD?> <br> <?=$datoconsulta[0]->agudeza_texto_con_correccion_s_OD?></td>
            </tr>
            <tr>
              <td colspan="4"><center><b>VP</b></center></td>
            </tr>
             <tr>
              <td colspan="4"><b>SIN CORRECCIÓN</b></td>
            </tr>
            <tr>
              <td>OD</td>
              <td>OI</td>
            </tr>
            <tr>
              <td><?=$datoconsulta[0]->agudeLOD?> <br> <?=$datoconsulta[0]->agudeza_vp_con_correccion_OD?></td>
              <td><?=$datoconsulta[0]->agudeL?> <br> <?=$datoconsulta[0]->agudeza_vp_con_correccion?></td>
            </tr>
            <tr>
              <td colspan="4"><b>CON CORRECCIÓN</b></td>
            </tr>
            <tr>
              <td>OD</td>
              <td>OI</td>
            </tr>
            <tr>
              <td><?=$datoconsulta[0]->agudeODs?> <br> <?=$datoconsulta[0]->agudeza_vp_sin_correccion_ODs?></td>
              <td><?=$datoconsulta[0]->agudeLs?> <br> <?=$datoconsulta[0]->agudeza_vp_con_correccion_s?></td>
            </tr>
            <tr>
        </table>
        <center><b>REFRACCION</b></center>
        <table width="100%" cellspacing="0" cellpadding="0">
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
              <td colspan="3"><?=$datoconsulta[0]->examen_queratometria_derecho?></td>
            </tr>
            <tr>
              <td><b>EXTERNO ORBITAS Y PARPADOS</b></td>
              <td colspan="3"><?=$datoconsulta[0]->examen_orbita_derecho?></td>
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
            <tr>
            	<td><b>FONDO DE OJO</b></td>
            </tr>
            <tr>
            	<td>OJO DERECHO</td>
            	<td><?=$datoconsulta[0]->examen_fondo_derecho ?> </td>
            	<td>OJO IZQUIERDO</td>
            	<td><?=$datoconsulta[0]->examen_fondo_izquierdo ?> </td>
            </tr>
            <tr>
              <td><b>MOTILIDAD</b></td>
              <td><?=$datoconsulta[0]->examen_motilidad_derecho ?> </td>
            </tr>
            <tr>
              <td colspan="4"><b>BIOMICROSCOPIA</b></td>
            </tr>
            <tr>
              <td>OJO DERECHO</td>
              <td><?=$datoconsulta[0]->examen_biomicroscopia_derecho ?> </td>
              <td>OJO IZQUIERDO</td>
              <td><?=$datoconsulta[0]->examen_biomicroscopia_izquierdo ?> </td>
            </tr>
            <!--<tr>
            	<td><b>COVER TEST</b></td>
            </tr>
            <tr>
            	<td><b>PRISMA</b></td>
            </tr>
            <tr>
            	<td>VL</td>
            	<td><?=$datoconsulta[0]->cover_prisma_vl_ojo_derecho ?></td>
            	<td>VP</td>
            	<td><?=$datoconsulta[0]->cover_prisma_vl_ojo_izquierdo ?></td>
            </tr>
            <tr>
            	<td><b>KRIMSKY</b></td>
            </tr>
            <tr>
            	<td>VL</td>
            	<td><?=$datoconsulta[0]->cover_krismky_vl_ojo_derecho ?></td>
            	<td>VP</td>
            	<td><?=$datoconsulta[0]->cover_krismky_vl_ojo_izquierdo ?></td>
            </tr>
            <tr>
            	<td><b>ADD. + 3.00 DPTS</b></td>
            </tr>
            <tr>
            	<td>VL</td>
            	<td><?=$datoconsulta[0]->cover_add_vl_ojo_derecho ?></td>
            	<td>VP</td>
            	<td><?=$datoconsulta[0]->cover_add_vl_ojo_izquierdo ?> </td>
            </tr>
            <tr>
            	<td><b>SC.</b></td>
            </tr>
            <tr>
            	<td><b>PRISMA</b></td>
            </tr>
            <tr>
            	<td>VL</td>
            	<td><?=$datoconsulta[0]->sc_prisma_vl_ojo_derecho ?></td>
            	<td>VP</td>
            	<td><?=$datoconsulta[0]->sc_prisma_vl_ojo_izquierdo ?></td>
            </tr>
            <tr>
            	<td><b>KRIMSKY</b></td>
            </tr>
            <tr>
            	<td>VL</td>
            	<td><?=$datoconsulta[0]->sc_krismky_vl_ojo_derecho ?></td>
            	<td>VP</td>
            	<td><?=$datoconsulta[0]->sc_krismky_vl_ojo_izquierdo ?></td>
            </tr>
            <tr>
            	<td><b>ADD. + 3.00 DPTS</b></td>
            </tr>
            <tr>
            	<td>VL</td>
            	<td><?=$datoconsulta[0]->sc_add_vl_ojo_derecho ?></td>
            	<td>VP</td>
            	<td><?=$datoconsulta[0]->sc_add_vl_ojo_izquierdo ?> </td>
            </tr>-->
        </table>
      </div>
      <!-- FIN DE EXAMEN OFTALMOLOGICO -->
      <!-- INICIO DE EVOLUCION -->
      <div style="border:1px solid #000">
      	<table width="100%" cellspacing="0" cellpadding="0">
      		<tr>
      			<td width="30%"><b>Resultados Laboratorios, Ayudas Dx</b></td>
      			<td width="30%"><b>Analisis</b></td>
      			<td width="30%"><b>Conducta o Plan</b></td>
      		</tr>
      		<tr>
      			<td width="30%"><?=$datoconsulta[0]->laboratorios ?></td>
      			<td width="30%"><?=$datoconsulta[0]->conducta ?></td>
      			<td width="30%"><?=$datoconsulta[0]->planmanejo ?></td>
      		</tr>
      	</table>
      </div>
      <!-- FIN DE EVOLUCION -->
      <?php endif ?>
      <!-- INICIO DE OPTOMETRIA -->
      <?php if ($datoconsultas[0] != null): ?>
      <center><b>EXAMEN OPTOMETRIA</b></center>
      <div style="border:1px solid #000">
        <h5>      LENSOMETRIA</h5>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="1"><b>TIPO DE LENTE OJO DERECHO</b></td>
              <td colspan="1"><?=$datoconsultas[0]->tipo_lente_derecho?></td>
            </tr>
            <tr>
              <td colspan="1"><b>TIPO DE LENTE OJO IZQUIERDO</b></td>
              <td colspan="1"><?=$datoconsultas[0]->tipo_lente_izquierdo?></td>
            </tr>
        </table>
      </div>
      <div style="border:1px solid #000">
        <h5>      OFTALMOSCOPIA (VISION CROMATICA Y ESTEREOPSIS)</h5>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="1"><b>OJO DERECHO</b></td>
              <td colspan="1"><?=$datoconsultas[0]->vision_descripcion_derecha?></td>
            </tr>
            <tr>
              <td colspan="1"><b>OJO IZQUIERDO</b></td>
              <td colspan="1"><?=$datoconsultas[0]->vision_descripcion_derechaizquierdo?></td>
            </tr>
        </table>
      </div>
      <div style="border:1px solid #000">
        <h5>      REFRACCION SUBJETIVO Y AFINACION</h5>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
            <td>REFRACCION</td>
            <td>OJO DERECHO <br> <b><?= $datoconsultas[0]->refraccion_rx_derecho?></b></td>
            <td>OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->refraccion_rx_izquierdo?></b></td>
            <td>RX CICLOPEGIA</td>
            <td>OJO DERECHO <br> <b><?= $datoconsultas[0]->refraccion_ciclopegia_derecho?></b></td>
            <td>OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->refraccion_ciclopegia_izquierdo?></b></td>
          </tr>
          <tr>
        </table>
      </div>
        <center><b>QUERATOMETRIA MOTILIDAD OCULAR BIOMICROSCOPIA</b></center>
      <!--<div style="border:1px solid #000">
        <h4>OJO DERECHO</h4>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>FONDO DE OJO</b></td>
              <td><b>CATARATA SENIL</b></td>
              <td><b>OPACIDAD DE MEDIOS REFRIGERANTES</b></td>
              <td><b>EXCAVACION PAPILAR AUMENTADA</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->fondo_ojo_derecho  ?></td>
              <td><?= $datoconsultas[0]->catarata_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->opacidad_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->excavacion_ojo_derecho   ?></td>
            </tr>
            <tr>
              <td><b>CONJUNTIVITIS AGUDA</b></td>
              <td><b>CONJUNTIVITIS CRONICA</b></td>
              <td><b>BLEFAROCONJUNTIVITIS</b></td>
              <td><b>PETIRIGIO NASAL</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->conjuntivitis_aguda_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->conjuntivitis_cronica_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->Blefaroconjuntivitis_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->pterigio_nasal_ojo_derecho   ?></td>
            </tr>
            <tr>
              <td><b>PETIRIGIO TEMPORAL</b></td>
              <td><b>LEUCOMA</b></td>
              <td><b>ANISOCORIA</b></td>
              <td><b>CATARATA INCIPIENTE</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->pterigio_temporal_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->leucoma_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->anisocoria_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->catarata_incipiente_ojo_derecho   ?></td>
            </tr>
            <tr>
              <td><b>CATARATA MADURA</b></td>
              <td><b>QUERATITIS</b></td>
              <td><b>PINGUECULA</b></td>
              <td><b>LENTE INTRAOCULAR</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->catarata_madura_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->queratitis_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->pinguecula_ojo_derecho   ?></td>
              <td><?= $datoconsultas[0]->intraocular_ojo_derecho   ?></td>
            </tr>
            <tr>
              <td><b>DESCRIPCION</b></td>
              <td><?= $datoconsultas[0]->texto_ojo_derecho ?></td>
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
              <td><?= $datoconsultas[0]->fondo_ojo_izquierdo  ?></td>
              <td><?= $datoconsultas[0]->catarata_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->opacidad_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->excavacion_ojo_izquierdo   ?></td>
            </tr>
            <tr>
              <td><b>CONJUNTIVITIS AGUDA</b></td>
              <td><b>CONJUNTIVITIS CRONICA</b></td>
              <td><b>BLEFAROCONJUNTIVITIS</b></td>
              <td><b>PETIRIGIO NASAL</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->conjuntivitis_aguda_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->conjuntivitis_cronica_ojo_izquierdo  ?></td>
              <td><?= $datoconsultas[0]->Blefaroconjuntivitis_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->pterigio_nasal_ojo_izquierdo   ?></td>
            </tr>
            <tr>
              <td><b>PETIRIGIO TEMPORAL</b></td>
              <td><b>LEUCOMA</b></td>
              <td><b>ANISOCORIA</b></td>
              <td><b>CATARATA INCIPIENTE</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->pterigio_temporal_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->leucoma_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->anisocoria_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->catarata_incipiente_ojo_izquierdo   ?></td>
            </tr>
            <tr>
              <td><b>CATARATA MADURA</b></td>
              <td><b>QUERATITIS</b></td>
              <td><b>PINGUECULA</b></td>
              <td><b>LENTE INTRAOCULAR</b></td>
            </tr>
            <tr>
              <td><?= $datoconsultas[0]->catarata_madura_ojo_izquierdo   ?></td>
              <td><?= $datoconsultas[0]->queratitis_ojo_izquierdo  ?></td>
              <td><?= $datoconsultas[0]->pinguecula_ojo_izquierdo  ?></td>
              <td><?= $datoconsultas[0]->intraocular_ojo_izquierdo   ?></td>
            </tr>
            <tr>
              <td><b>DESCRIPCION</b></td>
              <td><?= $datoconsultas[0]->texto_ojo_izquierdo ?></td>
            </tr>
        </table>
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
              <td>IDENTIFICACION DEL ORIGEN DE LA ENFERMEDAD</td> 
          </tr>
          <tr>
            <td><b>PACIENTE SANO</b></td>
            <td><b>ENFERMEDAD GENERAL O COMUN</b></td>
            <td><b>ENFERMEDAD PROFESIONAL U OCUPACIONAL</b></td>
            <td><b>ACCIDENTE DE TRABAJO O FUERA DEL TRABAJO</b></td>
          </tr>
          <tr>
            <td><?= $datoconsultas[0]->sano  ?></td>
            <td><?= $datoconsultas[0]->enfermedad   ?></td>
            <td><?= $datoconsultas[0]->enfermedad_profesional   ?></td>
            <td><?= $datoconsultas[0]->accidente   ?></td>
          </tr>
        </table>
      </div>-->
      <div style="border:1px solid #000">
        <table width="100%" cellspacing="0" cellpadding="0" >
          <tr>
            <td>QUERATOMETRIA</td>
            <td><b><?= $datoconsultas[0]->examen_queratometria_derecho ?></b></td>
            <td>EXTERNO ORBITAS Y PARPADOS</td>
            <td><b><?= $datoconsultas[0]->examen_orbita_derecho?></b></td>
            <td>MOTILIDAD</td>
            <td><b><?= $datoconsultas[0]->examen_motilidad_derecho?></b></td>
          </tr>
          <tr>
            <td>VIA LAGRIMAL</td>
            <td>OJO DERECHO <br> <b><?= $datoconsultas[0]->examen_lagrimal_derecho?></b></td>
            <td>OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->examen_lagrimal_izquierdo?></b></td>
            <td>BIOMICROSCOPIA</td>
            <td>OJO DERECHO <br> <b><?= $datoconsultas[0]->examen_biomicroscopia_derecho?></b></td>
            <td>OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->examen_biomicroscopia_izquierdo?></b></td>
          </tr>
          <tr>
            <td>GONIO</td>
            <td>OJO DERECHO <br> <b><?= $datoconsultas[0]->examen_gonio_derecho?></b></td>
            <td>OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->examen_gonio_izquierdo?></b></td>
            <td>PIO</td>
            <td>OJO DERECHO <br> <b><?= $datoconsultas[0]->examen_pio_derecho?></b></td>
            <td>OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->examen_pio_izquierdo?></b></td>
          </tr>
          <tr>
            <td colspan="2">FONDO DE OJO</td>
            <td colspan="2">OJO DERECHO <br> <b><?= $datoconsultas[0]->examen_fondo_derecho?></b></td>
            <td colspan="2">OJO IZQUIERDO <br> <b><?= $datoconsultas[0]->examen_fondo_izquierdo?></b></td>
          </tr>
        </table>
      </div>

      <center><b>EDUCACION DEL PACIENTE</b></center>
      <div style="border:1px solid #000">
      	<table width="100%" cellspacing="0" cellpadding="0">
      		<tr>
      			<td><b>EDUCACION DEL PACIENTE</b></td>
      		</tr>
      		<tr>
      			<td><?=$datoconsultas[0]->estudios ?></td>
      		</tr>
      	</table>
      </div>
      <center><b>PRESCRIPCION OPTICA</b></center>
      <div style="border:1px solid #000">
      	<table width="100%" cellspacing="0" cellpadding="0">
      		<tr>
      			<td><b>OJO DERECHO</b></td>
      			<td><b>OJO IZQUIERDO</b></td>
            <td><b>TIPO DE LENTE</b></td>
      		</tr>
      		<tr>
      			<td><?=$datoconsultas[0]->ojo_derecho ?></td>
      			<td><?=$datoconsultas[0]->ojo_izquierdo ?></td>
            <td><?=$datoconsultas[0]->ojo_tipo_lente?></td>
      		</tr>
      		<tr>
      			<td class="text-center"><b>DNP</b></td>
      		</tr>
      		<tr>
      			<td><b>OJO DERECHO</b></td>
      			<td><b>OJO IZQUIERDO</b></td>
      		</tr>
      		<tr>
      			<td><?=$datoconsultas[0]->dnp_derecho ?></td>
      			<td><?=$datoconsultas[0]->dnp_izquierdo ?></td>
      		</tr>
      	</table>
      </div>
      <?php endif ?>
      <!-- FIN DE OPTOMETRIA -->
     <? } ?>

      <!--GINECOLOGIA-->
      
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
            <?php echo $datconsulta->mednomcomp_t64; ?><img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>" style="width: 70px; height: 40px;">
            <center><b>CONDUCTA Y PLAN DE MANEJO</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?if(!empty($datconsulta->objetivos_t64)){
              echo '<h5>Objetivos :</h5> '.$datconsulta->objetivos_t64.'&nbsp;';
            }
            if(!empty($datconsulta->laboratorios_t64)){
              echo '<h5>Laboratorios :</h5> '.$datconsulta->laboratorios_t64.'&nbsp;';
            }
            if ($this->db->database == "CLIOFTALMO") {
              echo '<br><h5>Analisis :</h5> '.$datconsulta->conducta_t64.'&nbsp;';
            }else{
              echo '<br><h5>Conducta :</h5> '.$datconsulta->conducta_t64.'&nbsp;';
            }
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
          if(count($psicologia)>0 && $this->db->database == "hms_FUNSABIAM"){
            //var_dump($datconsulta->datevoluciones["TERAPIAS"]);
            ?><center><b>PSICOLOGICA</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?= $this->load->view('Asistencial/Historia/f_historia_evol_psicologica',array("psicologia"=>$psicologia),true);?>
              </div>
            <?
          }
        ?>
        <?php if (count($evoluciones > 0)): ?>
        <center><b>NOTAS AUXILIARES DE ENFERMERIA</b></center>
        <?php foreach ($evoluciones as $fila): ?>
 			<div class="col-md-1"></div>
 			<div class="col-md-10" style="border:1px solid #ccc;margin-bottom: 10px;width: 100%">
 				<p><b>Hecho por: <?php echo $fila->usrmod_aux ?> </b> a las <b><?= $fila->fmod_aux ?></b></p>
 				<table class="table">
 					<tr>
 						<td><b>Altura</b></td>
 						<td><b>Peso</b></td>
 						<td><b>Fr</b></td>
 						<td><b>Fc</b></td>
 					</tr>
 					<tr>
 						<td><?php echo $fila->altura_evol ?></td>
 						<td><?php echo $fila->peso_evol ?></td>
 						<td><?php echo $fila->fr_evol ?></td>
 						<td><?php echo $fila->fc_evol ?></td>
 					</tr>
 					<tr>
 						<td><b>Ta</b></td>
 						<td><b>SPO2</b></td>
 						<td><b>T°</b></td>
 						<td><b>Glasgow/15</b></td>
 					</tr>
 					<tr>
 						<td><?php echo $fila->ta_evol ?></td>
 						<td><?php echo $fila->spo2_evol ?></td>
 						<td><?php echo $fila->tem_evol ?></td>
 						<td><?php echo $fila->glasgow ?></td>
 					</tr>
 					<tr>
 						<td><b>Glasgow motora</b></td>
 						<td><b>Glasgow verbal</b></td>
 						<td><b>Glasgow ocular</b></td>
 						<td><b>Nota de Enfermeria:</b></td>
 					</tr>
 					<tr>
 						<td><?php echo $fila->glasgow_motora ?></td>
 						<td><?php echo $fila->glasgow_verbal ?></td>
 						<td><?php echo $fila->glasgow_ocular ?></td>
 						<td><?php echo $fila->nota_enfermeria ?></td>
 					</tr>
 				</table>
 			</div>
 			<div class="col-md-1"></div>
 		<?php endforeach ?>	
        <?php endif ?>

      
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
                          <script type="text/php">
    if (isset($pdf)){
        $font = Font_Metrics::get_font('helvetica', 'normal');
        $size = 9;
        $y = $pdf->get_height() - 24;
        $x = $pdf->get_width() - 15 - Font_Metrics::get_text_width('1/1', $font, $size);
        $pdf->page_text($x, $y, '{PAGE_NUM}/{PAGE_COUNT}', $font, $size);
    }
</script>