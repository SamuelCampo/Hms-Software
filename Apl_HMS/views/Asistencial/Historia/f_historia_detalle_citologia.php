   <!-- <div style="border:1px solid #000">
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
            <td ><?=$datconsulta->fsalida_t4?></td>
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
      </div>-->
     <!-- <center><b>Antece</b></center>
      <div style="border:1px solid #000">
        <table border="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
         <tr><td>
               <strong>MOTIVO DE CONSULTA </strong><?=$datconsulta->motconsulta_t64?> </td> 
         </tr>
         <tr><td>
             <strong>ENFERMEDAD ACTUAL </strong><?=$datconsulta->enfermactual_t64?> </td> 
         </tr>
       </table>
      </div>-->
     <!-- <center><b>ANTECEDENTES</b></center>
      <div style="border:1px solid #000">
        <table align="center" cellspacing="0" cellpadding="0" width="100%">
          <tr valign="top">
            <td>
              <table align="center" cellspacing="0" cellpadding="0">
                <?if($datgineco[0]["fum_gineco"]){?>
                <tr>
                  <td>FUM</td>
                  <td><b><?=$datgineco[0]["fum_gineco"]?></b></td>
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
      </div>-->
      <center><b>ANTECEDENTES</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>FUM</strong></td>
            <td><?=$datgineco[0]["fum_gineco"]?></td>
            <td><strong>FPP</strong></td>
            <td><?=$datgineco[0]["fpp_gineco"]?></td>
            <td><strong>GESTAS</strong></td>
            <td><?=$datgineco[0]["gestas_gineco"]?></td>
          </tr>
          <tr>
            <td><strong>PARTOS:</strong></td>
            <td><?=$datgineco[0]["partos_gineco"]?></td>
            <td><strong>Fecha Ultimo Parto</strong></td>
            <td><?=$datgineco[0]["ultimo_parto_gineco"]?></td>
            <td><strong>Fecha Ultima Cesarea</strong></td>
            <td><?=$datgineco[0]["ultima_cesarea_gineco"]?></td>
            
            
          </tr>
          <tr>
            <td><strong>Abortos</strong></td>
            <td><?=$datgineco[0]["abortos_gineco"]?></td>
            <td><strong>INICIO VIDA SEXUAL</strong></td>
            <td><?=$datgineco[0]["inicvs_gineco"]?></td>
            <td><strong>NUMERO DE COMPA&Ntilde;EROS SEXUALES</strong></td>
            <td><?=$datgineco[0]["num_cs"]?></td>
          </tr>
        </table>
      </div>
      <center><b>Metodo de Planificaci&oacute;n</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>ANTICONCEPCION</strong></td>
            <td><?=$datgineco[0]["concep_gineco"]?></td>
            <td><strong>TIPO</strong></td>
            <td><?=$datgineco[0]["tipooption"]?></td>
          </tr> 
        </table>
      </div>
      <center><b>Citologia Anterior</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>F.U. Citologia</strong></td>
            <td><?=$datgineco[0]["fu_citologia_gineco"]?></td>
            <td><strong>Resultado</strong></td>
            <td><?=$datgineco[0]["result_gineco"]?></td>
          </tr> 
        </table>
      </div>

       <center><b>PROCEDIMIENTOS ANTERIORES EN EL CUELLO UTERINO</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>PROCEDIMIENTOS ANTERIORES EN EL CUELLO UTERINO</strong></td>
            <td><?=$datgineco[0]["proc_cuello_gineco"]?></td>
            <td><strong>DESCRIPCION</strong></td>
            <td><?=$datgineco[0]["descrip_proc_gineco"]?></td>
          </tr> 
        </table>
      </div>

      <center><b>ASPECTO DEL CUELLO UTERINO</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="2" cellpadding="0" width="100%">
          <tr>
            <td><strong>ASPECTO DEL CUELLO UTERINO</strong></td>
            <td><?=$datgineco[0]["asp_cuello_gineco"]?></td>
            <td><strong>DESCRIPCION</strong></td>
            <td><?=$datgineco[0]["des_asp_gineco"]?></td>
            <td><strong>OBSERVACIONES</strong></td>
            <td><?=$datgineco[0]["obser_gineco"]?></td>
          </tr> 
        </table>
      </div>

    