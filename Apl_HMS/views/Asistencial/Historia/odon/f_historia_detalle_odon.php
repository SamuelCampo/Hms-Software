<?php //var_dump($datodon); ?>

    <div style="border:1px solid #000">
      <table width="100%" border="0" cellspacing="0" cellpadding="1" style="border-collapse: collapse;">
          <tr valign="top">
            <td colspan="2">
              <strong>Diagnóstico Principal</strong> <br/>
              <?=$datodon[0]["dx_dxprincipal_odon"]?>
            </td>
            <td colspan="2">
              <strong>Diagnostico Relacionado</strong> <br/>
              <?=$datodon[0]["dx_dxrelprincipal_odon"]?>
            </td>
         </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_dxsecundario_odon"])){?>
              <strong>Dx Secundario</strong> <br/>
              <?=$datodon[0]["dx_dxsecundario_odon"];?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_dxrelsecundario_odon"])){?>
              <strong>Dx Rel. Secundario</strong> <br/>
              <?=$datodon[0]["dx_dxrelsecundario_odon"];?>
            <?}?>
          </td>
          
        </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_dxtercero_odon"])){?>
              <strong>Observacion del DX Principal</strong> <br/>
              <?=$datodon[0]["dx_dxtercero_odon"];?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_dxcuarto_odon"])){?>
              <strong>Observacion del DX Secuandario</strong> <br/>
              <?=$datodon[0]["dx_dxcuarto_odon"];?>
            <?}?>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_tipodx_odon"])){?>
              <strong>Tipo de Diagnostico</strong> <br/>
              <?=$datodon[0]["dx_tipodx_odon"];?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_causaext_odon"])){?>
              <strong>Causa Externa</strong> <br/>
              <?=$datodon[0]["dx_causaext_odon"];?>
            <?}?>
          </td>
        </tr>
          <tr>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_viaing_odon"])){?>
              <strong>Via Ingreso</strong> <br/>
              <?=$datodon[0]["dx_viaing_odon"];?>
            <?}?>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_finalconsu_odon"])){?>
              <strong>FINALIDAD DE LA CONSULTA</strong> <br/>
              <?=$datodon[0]["dx_finalconsu_odon"];?>
            <?}?>
          </td>
          <td colspan="2">
            <?if(!empty($datodon[0]["dx_finalproc_odon"])){?>
              <strong>FINALIDAD DEL PROCEDIMIENTO</strong> <br/>
              <?=$datodon[0]["dx_finalproc_odon"];?>
            <?}?>
          </td>
        </tr>
       <!-- <tr>
          <td colspan="2">
            <?if(!empty($datodon[0]["dxegreso"])){?>
              <strong>Dx Egreso</strong> <br/>
              <?=$datodon[0]["dxegreso"]?>
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
            <td ><?=$datodon[0]["fsalida_t4"]?></td>
            <td ><?=$datodon[0]["destinopac_t64"]?></td>
          </tr>-->
       <!-- <tr>
          <td colspan="2">
            <strong>Condiciones de Salida</strong> <br/>
            <?=$datodon[0]["condicionsalida_t68"]?>       
          </td>
          <td >
              <strong>Estado:</strong> <?=$datpaciente->estado_t3?> 
            </td> 
            <td >
              <strong>Destino:</strong><?=$datodon[0]["destinopac_t64"]?> 
            </td>
        </tr>-->
        
       </table>
      </div>
      <center><b>DATOS DE INGRESO</b></center>
      <div style="border:1px solid #000">
        <table border="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
         <tr><td>
               <strong>MOTIVO DE CONSULTA </strong><?=$datodon[0]["m_consulta_odon"]?> </td> 
         </tr>
         <tr><td>
             <strong>ENFERMEDAD ACTUAL </strong><?=$datodon[0]["m_enfer_actual_odon"]?> </td> 
         </tr>
       </table>
      </div>
   
      <center><b>REVISION POR SISTEMAS</b></center>
      <div style="border:1px solid #000">
        <table cellspacing="0" border ="0"cellpadding="0" width="100%">
          <tr>
            <td align="center" width="100%" >
              <strong>HABITOS DE HIGIENE ORAL</strong>
            </td>
          </tr> 
          <tr>
            <td><strong>Frecuencia de Cepillado</strong></td>
            <td><?=$datodon[0]["r_cepillado_odon"]?></td>
            <td><strong>Uso de seda Dental</strong></td>
            <td><?=$datodon[0]["r_dental_odon"]?></td>
            <td><strong>Enjuaje Bucal</strong></td>
            <td><?=$datodon[0]["r_bucal_odon"]?></td>
          </tr>
          <tr>
            <td><strong>Habitos:</strong></td>
            <td><?=$datodon[0]["r_habitos_odon"]?></td>
            <td><strong>Ultima consulta Odontologica</strong></td>
            <td><?=$datodon[0]["r_ultima_consulta_odon"]?></td>
            
            
          </tr>
             <tr>
            <td align="center" width="100%" >
              <strong>EXAMEN CLINICO DE LA CAVIDAD ORAL</strong>
            </td>
          </tr> 
          <tr>
            <td><strong>LABIOS</strong></td>
            <td><?=$datodon[0]["r_labios_odon"]?></td>
            <td><strong>VESTIBULO</strong></td>
            <td><?=$datodon[0]["r_vestibulo_odon"]?></td>
            <td><strong>CARRILLOS</strong></td>
            <td><?=$datodon[0]["r_carrillos_odon"]?></td>
            <td><strong>PALADAR</strong></td>
            <td><?=$datodon[0]["r_paladar_odon"]?></td>
          </tr>
          <tr> 
            <td><strong>LENGUA</strong></td>
            <td><?=$datodon[0]["r_lengua_odon"]?></td>
            <td><strong>PISO DE LENGUA</strong></td>
            <td><?=$datodon[0]["r_piso_lengua_odon"]?></td>
                   <td><strong>Descripci&oacute;n</strong></td>
            <td><?=$datodon[0]["r_descrip_odon"]?></td>
          </tr>
           <tr>
            <td align="center" width="100%">
              <strong>EXAMEN PERIODONTAL</strong>
            </td>
          </tr> 
            <tr> 
              <td><strong>Aspecto</strong></td>
              <td><?=$datodon[0]["r_aspecto_odon"]?></td>
              <td><strong>Color</strong></td>
              <td><?=$datodon[0]["r_color_odon"]?></td>
              <td><strong>Forma</strong></td>
              <td><?=$datodon[0]["r_forma_odon"]?></td>
               <td><strong>Descripci&oacute;n</strong></td>
              <td><?=$datodon[0]["r_descrip2_odon"]?></td>
          </tr>
           <tr> 
              <td><strong>Factores Irritantes</strong></td>
              <td><?=$datodon[0]["r_irritantes_odon"]?></td>
              <td><strong>Calculos Supra</strong></td>
              <td><?=$datodon[0]["r_supra_odon"]?></td>
              <td><strong>Bolsas</strong></td>
              <td><?=$datodon[0]["r_bolsas_odon"]?></td>
               <td><strong>Movilidad Dentaria</strong></td>
              <td><?=$datodon[0]["r_movilidad_odon"]?></td>
          </tr>
           <tr> 
              <td><strong>Malposicion Dentaria</strong></td>
              <td><?=$datodon[0]["r_malposicion_odon"]?></td>
              <td><strong>Obturaciones Desbordantes</strong></td>
              <td><?=$datodon[0]["r_obturaciones_odon"]?></td>
              <td><strong>Coronas desadaptadas</strong></td>
              <td><?=$datodon[0]["r_coronas_odon"]?></td>
              <td><strong>Descripci&oacute;n</strong></td>
              <td><?=$datodon[0]["r_descrip3_odon"]?></td>
          </tr>
           <tr> 
              <td><strong>Otros</strong></td>
              <td><?=$datodon[0]["r_otros_odon"]?></td>
              <td><strong>OCLUCION Clasificaci&oacute;n de Angle</strong></td>
              <td><?=$datodon[0]["r_clasif_odon"]?></td>
              <td><strong>Interferencias en Lateralidad</strong></td>
              <td><?=$datodon[0]["r_lateralidad_odon"]?></td>
              <td><strong>Interferencias en Protrusiva</strong></td>
              <td><?=$datodon[0]["r_protrusiva_odon"]?></td>
          </tr>
           <tr> 
              <td><strong>ATM</strong></td>
              <td><?=$datodon[0]["r_atm_odon"]?></td>
              <td><strong>Examen RX</strong></td>
              <td><?=$datodon[0]["r_examen_rx_odon"]?></td>
              <td><strong>Clasificaci&oacute;n de Riesgo</strong></td>
              <td><?=$datodon[0]["r_clasif_ries_odon"]?></td>
              <td><strong>Descripci&oacute;n</strong></td>
              <td><?=$datodon[0]["r_descrip4_odon"]?></td>
          </tr>
          <tr>
            <td><strong>Clasificacion de Riesgo</strong></td>
            <td><?= $datodon[0]['r_clasif_ries_odon'] ?></td>
            <td><strong>OCLUSION Angle derecha</strong></td>
            <td><?= $datodon[0]['r_clasif_odon2'] ?></td>
            <td><strong>Indice de Dean</strong></td>
            <td><?= $datodon[0]['dean'] ?></td>
            <td><strong>Indice de Oleary</strong></td>
            <td><?= $datodon[0]['oleary'] ?></td>

          </tr>
        </table>
      </div>
       <center><b>ANALISIS</b></center>
      <div>
        <table border="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
         <tr>
          <td>
               <strong>Resultados Laboratorios, Ayudas Dx </strong><?=$datodon[0]["a_laboratorios_odon"]?> </td> 
         </tr>
         <tr>
          <td>
             <strong>Analisis </strong><?=$datodon[0]["a_planmanejo_odon"]?> </td> 
         </tr>

       </table>
      </div>
        <?php if (!empty($evolodon["MEDICA"])): ?>
             <div style="border: 1px solid black">
               <table align="center" border="" cellspacing="0" width="100%" style=''>
          <tr>
            <td colspan="2" align="center" >
              <strong>EVOLUCION ODONTOLOGICA</strong>      
            </td>
          </tr>
          <tr>
            <td> <? //var_dump($evolodon["MEDICA"]);

            foreach($evolodon["MEDICA"] as $regev){ 
      if(!empty($regev)){
      ?>
  
    <div style="border-bottom: 1px dotted #000; text-align: left">
      <div style="padding: 0 0 0 1em;margin:0;"><?=$regev["fmod_t68"]?> Hecho Por: <?= $regev["mednomcomp_t68"] ?><h5>Plan de Manejo: </h5></div>
      <div style="padding: 0 0 0 2em;margin:0;">
    <?
    if(!empty($regev["objetivos_t68"])){
      echo '<h5>Objetivos :</h5> '.$regev["objetivos_t68"].'&nbsp;';
    }
    if(!empty($regev["laboratorios_t68"])){
      echo '<h5>Laboratorios :</h5> '.$regev["laboratorios_t68"].'&nbsp;';
    }
    echo '<h5>Conducta :</h5> '.$regev["conducta_t68"].'&nbsp;';
    echo '<h5>Plan de Manejo: </h5> '.$regev["planmanejo_t68"].'&nbsp; <br>';?>
      </div>
      <?
        if(is_array($regev->detalle)){
          echo '<hr>';
          foreach($regev->detalle as $tipo=>$arr_tipo){
            echo '<h5>'.$arr_tipo["desc"].' :</h5> ';
            if(is_array($arr_tipo["det"])){
              foreach ($arr_tipo["det"] as $categ=>$arr_categ){
                echo '<b>'.$arr_categ["desc"].' :</b> ';
                if(is_array($arr_categ["det"])){
                  foreach($arr_categ["det"] as $valor){
                    echo " $valor ";
                  }
                }
              }
            }
          }
        }
      ?>
  </div>
  <?
      
  
  }
    }?></td>
          </tr>
        </table> 
             </div>
           <?php endif ?>   
        
      
     <!-- <center><b>FORMULACIÓN</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?
          if(is_array($datodon[0][datordenes])){
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
            foreach($datodon[0][datordenes] as $tipo=>$arr_ordenes){
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
                        <td width="15%"><?=$detorden->posologia_t67?></td>
                        <td width="15%"><?=$detorden->durante_t67?> Dias</td>
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
      <center><b>ORDENES</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?
          if(is_array($datodon[0][datordenes])){
            ?>
            <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
              <tr>
                <td width="10%" align="center" ><strong>TIPO</strong></td>
                <td width="45%" align="center" ><strong>DESCRIPCIÓN</strong></td>
                <td width="5%"><strong>Cant.</strong></td>
                <td width="20%"><strong>Observaciones</strong></td> 
              </tr>  
            <?
            //var_dump($datodon[0][datordenes);
            foreach($datodon[0][datordenes] as $tipo=>$arr_ordenes){
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
      <br/>
    <?if(!empty($datodon[0][notaclarat_t64])){?>
      <center><b>NOTAS</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?=$datodon[0][notaclarat_t64]?><br/>
      </div>
    <?}?>
    <?if(!empty($datodon[0][remisdestino_t64])){?>
      <center><b>REMISIÓN</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?=$datodon[0][remisdestino_t64]?> <?=$datodon[0][remismedico_t64]?> <?=$datodon[0][remisespec_t64]?> <?=$datodon[0][remismotivo_t64]?><br/>
      </div>
    <?}?>
    <?if(!empty($datodon[0][condicionsalida_t64])){?>
      <center><b>CONDICIÓN DE SALIDA</b></center>
      <div style="border:1px solid #000; text-align: left">
        <?=$datodon[0][condicionsalida_t64]?><br/>
      </div>
    <?}?>-->