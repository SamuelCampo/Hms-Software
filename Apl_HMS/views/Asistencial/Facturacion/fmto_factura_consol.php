<?
  $tffac = strtotime($dat_listos[0]->ffact_t96);
  $tfvenc = strtotime($dat_listos[0]->fvence_t96);
  //var_dump($this->Modulo->infoentidad);
  //var_dump($datfac);
  //var_dump($dat_fac);
  //exit;
   // $valor = (object)$this->input->post();
    //var_dump($valores);  
    $imgelab = '<br><br><br><br>';
    //var_dump($this->db->database);
    //exit;
    switch($this->db->database){
      case "hms_P900577773":
        if(file_exists(FCPATH.'img/frm/P900577773.png')){
          $imgelab = '<img src="'.FCPATH.'img/frm/P900577773.png" alt="">';
        }
      break;
      case "hms_P900887466":
      case "hms_PIRMABARRERA":
        if(file_exists(FCPATH.'img/frm/P900887466.png')){
          $imgelab = '<img src="'.FCPATH.'img/frm/P900887466.png" alt="">';
        }
      break;
    }
    //var_dump($imgelab);
    //exit;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  </head>
  <body>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:7pt;
        height: 100%">
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellpadding="0" cellspacing="1" width="100%" style='border: 0px solid #000; border-collapse: collapse;margin:0'>
            <tr align="middle">
                    <td width="30%">
                      <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
                    </td>
                    <td width="30%"><strong><?=$entidad->nombre_t75?><br>
                        NIT: <?=$entidad->nit_t75?>
                      <br>Direcci&oacute;n <?=$entidad->direccion_t75?>
                      <br>Tel&eacute;fono: <?=$entidad->telefono_t75?></strong>
                      <br><?php echo $datos_entidad[0]->resoluc_t97?><br>
                      <?php echo $datos_entidad[0]->subfijo_t97 ?>
                    </td>
                    <td width="60%" nowrap style="font-size: 16px"><center><strong>Factura de Venta</strong><br><strong>No. <?= $datos_entidad[0]->prefijo_t97.$numero_factura ?></strong><br>
                      <img src="<?= FCPATH.'img/qrcode.png' ?>" alt="<?=$entidad->nombre_t75?>" style="width: 150px; height: 150px;"></center>
                    </td>
                </tr>
            </table> 
            <table  cellspacing="0" cellpadding="0" width="100%" style="margin: 0;border-collapse: collapse;">
                <tr>
                  <td rowspan="3" width="60%" style='border: 1px solid #000'><strong>
                      Paciente: <?=$datfac->identiftipo_t3?> <?=$dat_listos[0]->pacid_t96?> <?=$dat_listos[0]->pacnom_t96?><br>
                      Sexo: <?= $dat_listos[0]->sexo_t96 ?><br>
                      Tipo de Afiliacio&acute;n: <?= $datfac->tipoaf_t3   ?><br>
                      Municipio: <?= $datfac->municipio_t3  ?><br>
                      Direccion: <?= $datfac->direccion_t3 ?><br>
                      Dx Principal: <?if (!empty($datconsulta[0]->dxprincipal_t64)) {
                        echo $dat_listos[0]->dx_t96;
                      }else{
                        echo $dat_listos[0]->dx_t96;
                      }  ?><br>
                      Telefono: <?= $datfac->telefono_t3 ?><br>
                      Tipo de Cuenta: <?= $datfac->tipocta_t4   ?>
                    </strong></td>
                    <td colspan="3" style='border: 1px solid #000;text-align: center'><strong>Fecha Factura</strong></td>
                    <td colspan="3" style='border: 1px solid #000;text-align: center'><strong>Fecha Vencimiento</strong></td>
                </tr>
                <tr>
                    <td style='border: 1px solid #000;text-align: center'><strong>Dia </strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong>Mes </strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong>A&Ntilde;o </strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong>Dia </strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong>Mes </strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong>A&Ntilde;o </strong></td>
                </tr>
                <?php $fac = explode(" ",$dat_listos[0]->ffact_t96); 
                      $fecha_fac = explode("-", $fac[0]);
                ?>
                <tr>
                    <td style='border: 1px solid #000;text-align: center'><strong><?= $fecha_fac[2]  ?> </strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong><?= $fecha_fac[1]  ?></strong></td>
                    <td style='border: 1px solid #000;text-align: center'><strong><?= $fecha_fac[0]  ?></strong></td>
                    <td style='border: 1px solid #000;text-align: center'><?= $fecha_fac[2]; ?></td>
                    <td style='border: 1px solid #000;text-align: center'><?= $fecha_fac[1]; ?> </td>
                    <td style='border: 1px solid #000;text-align: center'><?= $fecha_fac[0]; ?> </td>
                </tr>
                </tr>
            </table>
                              <?php $time = explode(" ", $datfac->fingreso_t4);
        $arr_hprog = explode(":",$time[1]);
        $arr_fprog = explode("-",$time[0]);
        $ffin = mktime($arr_hprog[0],$arr_hprog[1]+23,0,$arr_fprog[1],$arr_fprog[2],$arr_fprog[0]); ?>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
              <tr align="bottom">
                    <td width="10%" style='border: 1px solid #000'><strong>Nombre, Raz&oacute;n Social</strong></td>
                    <td width="50%" style='border: 1px solid #000'><strong><?= $dat_listos[0]->tercdesc_t96 ?></strong></td>
                    <td width="20%" style='border: 1px solid #000'><center><strong>Fecha de ingreso </strong><br><?= $datfac->fingreso_t4?></center></td>
                    <td width="20%" style='border: 1px solid #000'><center><strong>Fecha de Egreso </strong><br><?= date("Y-m-d h:i:s",$ffin)?></center></td>
                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
                <tr>
                    <td width="10%" style='border: 1px solid #000'><strong>Direcci&oacute;n </strong></td>
                    <td width="20%" style='border: 1px solid #000'><strong><?= $eps[0]->direccion_t70?></strong></td>
                    <td width="10%" style='border: 1px solid #000'><strong> Ciudad</strong> </td>
                    <td width="20%" style='border: 1px solid #000'><strong><?=$eps[0]->ciudadcod_t70?></strong> </td>
                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
                <tr>
                    <td width="10%" style='border: 1px solid #000'><strong>Nit o Cedula No. </strong></td>
                    <td width="15%" style='border: 1px solid #000'> <?= $dat_listos[0]->tercid_t96  ?> </td>
                    <td width="10%" style='border: 1px solid #000'><strong>Autorizaci&oacute;n </strong></td>
                    <td width="15%" style='border: 1px solid #000'> 
                      <?php if (!empty($autorizacion[0]->autorizacion)) {
                      echo $autorizacion[0]->autorizacion;
                    }else{
                     echo $this->input->post('autorizacion');
                    } ?> </td>
                    <td width="10%" style='border: 1px solid #000'><strong> Tel&eacute;fono </strong></td>
                    <td width="10%" style='border: 1px solid #000'><?=$eps[0]->telefono_t70?></td>
                </tr>
            </table>
            <table cellspacing="0" cellpadding="0" width="100%" style='margin:0;border: 1px solid #000;border-collapse: collapse'>
                <tr>
                  <td width="10%" style='border: 1px solid #000'><center><strong>C&oacute;digo</strong></center></td>  
                  <td width="50%" style='border: 1px solid #000'><center><strong>Detalle o Concepto Facturado</strong></center></td>
                  <td width="10%" style='border: 1px solid #000'><center><strong>Cantidad</strong></center></td>  
                  <td width="15%" style='border: 1px solid #000'><center><strong>Valor Unit</strong></center></td>  
                  <td width="15%" style='border: 1px solid #000'><center><strong>Valor Total</strong></center></td>  
                </tr>
                  <?php $i = 0 ?>
                  <?php  foreach ($valores as $fila): ?>
                        <?php if (!empty($fila->valor_t67)): ?>
                          <?php $total = $fila->valor_t67 * $fila->cantidad_t67 ?> 
                          <?php else: ?>  
                            <?php $total = $fila->valunit_t67 * $fila->cantidad_t67 ?> 
                        <?php endif ?>
                      <?php if ($fila->tipo_t67 == "CONS"){ 
                          $cons_t +=  $total;
                       }elseif ($fila->tipo_t67 == "HOSP") {
                         $hosp_t +=  $total;
                       }elseif ($fila->tipo_t67 == "LABO") {
                         $labo_t += $total;
                       }elseif ($fila->tipo_t67 == "PROC") {
                         $proc_t += $total;
                       }elseif ($fila->tipo_t67 == "QUIR") {
                         $quir_t += $total;
                       }elseif ($fila->tipo_t67 == "MED") {
                         $med_t += $total;
                       }elseif ($fila->tipo_t67 == "SUMI") {
                         $sumi_t += $total;
                       } ?>
                      <?php $fuerza += $total; ?>
                  <?php  endforeach ?>
                  <?php if ($cons_t > 0): ?>
                   <tr>
                    <td width="">CONS</td>
                    <td width="">CONSULTA</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $cons_t ?></td>
                  </tr> 
                  <?php endif ?>
                  <?php if ($hosp_t > 0): ?>
                   <tr>
                    <td width="">HOSP</td>
                    <td width="">HOSPITALIZACI&Oacute;N</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $hosp_t ?></td>
                  </tr> 
                  <?php endif ?>
                  <?php if ($labo_t > 0): ?>
                   <tr>
                    <td width="">LABO</td>
                    <td width="">LABORATORIO</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $labo_t ?></td>
                  </tr> 
                  <?php endif ?>
                  <?php if ($proc_t > 0): ?>
                   <tr>
                    <td width="">PROC</td>
                    <td width="">PROCEDIMIENTOS</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $proc_t ?></td>
                  </tr> 
                  <?php endif ?>
                  <?php if ( $quir_t > 0): ?>
                   <tr>
                    <td width="">QUIR</td>
                    <td width="">QUIRURGICO</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $quir_t ?></td>
                  </tr> 
                  <?php endif ?>
                  <?php if ($med_t > 0): ?>
                  <tr>
                    <td width="">MED</td>
                    <td width="">MEDICAMENTOS</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $med_t ?></td>
                  </tr>  
                  <?php endif ?>
                  <?php if ($sumi_t > 0): ?>
                   <tr>
                    <td width="">SUMI</td>
                    <td width="">SUMINISTRO</td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""></td>
                    <td width=""><?php echo $sumi_t ?></td>
                  </tr> 
                  <?php endif ?>
                  
                  <tr>
                    <td width="10%"></td>  
                    <td width="60%" colspan="2">
                      <br><br><br>
                      <?php 
                        if (!empty($dat_listos[0]->copago_t96)) {
                          $copago = $dat_listos[0]->copago_t96;
                        }else{
                          if($this->input->post('copago')!==0){
                        $copago = 0;
                  switch ($dat_fac->copago) {
                    case '1':
                      $copago= $fuerza * 0.115;
                      
                      break;
                    
                      case '2':
                      $copago= $fuerza * 0.175;
                       
                      break;
                      case '3':
                      $copago= $fuerza * 0.23;
                      

                      break;
                      case '4':
                      $copago= $fuerza * 0.1;   
                      break;
                       default:
                             
                          break;
                  }
                }
                 
                        }
                  $a = $fuerza-$copago; 
                   $m = round($a);
                ?>
                      <?php $total = $this->Numerosaletras->to_word($m, null); ?>
                      <b>Son: </b><?= $total ?> PESOS MDA/CTE.
                    </td>  
                    <td width="15%" style="text-align: right"></td>
                    <td width="15%" style="text-align: right"></td>
                  </tr>
            </table>
          <table  cellspacing="0" cellpadding="0" width="100%" style="margin:0;padding: 0;border-collapse: collapse;">
              <tr valign="top">
                <td width="60%" style='border: 1px solid #000;margin:0;padding:.2em;'><strong>Observaciones Finales :</strong>
                  <br>
                  <?=$dat_listos->obs1_t96?>
                </td>
                  <td width="20%" style='border: 1px solid #000;text-align: right;padding:.2em;'><strong>Total  antes Iva<br>Copago<br>Cuota Moderadora<br>Valor Iva<br>Total  Factura</strong></td><br>
              <td width="20%" style='border: 1px solid #000;margin:0;text-align: right;padding:.2em;'><strong><?= number_format(round($fuerza), 0, ",", ".")?><br><?php echo   $copago ?> <br><?= $dat_listos[0]->cuota_mo_t96;  ?> <br> 0 <br>
<?php $t = $fuerza-$copago-$dat_listos[0]->cuota_mo_t96 ?>
                <?= number_format(round($t), 0, ",", ".") ?> </strong></td>
                </tr>
            </table>
          <?if(!empty($datos_entidad[0]->resolucion_t97)){?>
            <table  cellspacing="0" cellpadding="0" width="100%" style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="100%" style='border: 1px solid #000;margin:0;padding:.2em;'><?=$datos_entidad[0]->resolucion_t97?></td>
                </tr>
            </table>
          <?}?>
          <?if(!empty($datos_entidad[0]->obsleg_t97)){?>
            <table  cellspacing="0" cellpadding="0" width="100%" style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="100%" style='border: 1px solid #000;margin:0;padding:.2em;'><?=$datos_entidad[0]->obsleg_t97?></td>
                </tr>
            </table>
          <?}?>
          <table  cellspacing="0" cellpadding="0" width="100%" style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="100%" style='border: 1px solid #000;margin:0;padding:.2em;'>Esta factura asimila en todos sus
efectos a la letra de cambio (Art. 774 de C.) y causa intereses de mora del % ( Art. 1617 C. Civil) NO SOMOS RETENEDORES DE IVA.
</td>
                </tr>
            </table>
            <table align="center" cellpadding="0" cellspacing="0" width="100%" height="40%"  style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <br><br><br><br>
                      Factura Impresa por  Computador <br>
                      
                    </td>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <img src="<?=FCPATH."/img/frm/".md5($this->Modulo->usr->identificacion_t0).".png"?>" alt="<?php ?>"><br> 
                      <br>
                      Elaborado Por</td>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <br><br><br><br>
                      <script type="text/php">
    if (isset($pdf)){
        $font = Font_Metrics::get_font("Arial", "bold");
        $pdf->page_text(765, 550, "Pagina {PAGE_NUM} de {PAGE_COUNT}", $font, 9, array(25, 25, 25));
    }
</script>
                      Aceptada por Comprador</td>
                </tr>
            </table>
        </div>

    </div>
  </body>
</html>