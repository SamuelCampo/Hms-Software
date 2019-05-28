<?
  $tffac = strtotime($datfac->ffact_t96);
  $tfvenc = strtotime($datfac->fvence_t96);
  //var_dump($this->Modulo->infoentidad);
  //var_dump($datfac);
  //var_dump($datfac);
  //exit;
  
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
  <head></head>
  <body>
    <h1 style="text-align: center;">PRE-LIQUIDACION</h1>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:7pt;">
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellpadding="0" cellspacing="1" width="100%" style='border: 0px solid #000; border-collapse: collapse;margin:0'>
            <tr valign="middle">
                    <td width="30%">
                      <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
                    </td>
                    <td width="30%"><strong><?=$datfac->razonsocial_t97?><br>
                        NIT: <?=$datfac->nit_t97?>
                      <br>Dirección <?=$datfac->direccion_t97?> <?=$datfac->ciudad_t97?>
                      <br>Tel&oacute;efono: <?=$datfac->telefono_t97?></strong>
                    </td>
                    <td width="60%" nowrap><center><strong>Factura de Venta</strong><br><strong>No. <?=$datfac->prefijo_t97?><?=$datfac->factnum_t96?><?=$datfac->subfijo_t97?></strong></center></td>
                </tr>
            </table>    
            <table  cellspacing="0" cellpadding="0" width="100%" style="margin: 0;border-collapse: collapse;">
                <tr>
                  <td rowspan="3" width="60%" style='border: 1px solid #000'><strong>
                      Paciente: <?=$datfac->identiftipo_t3?> <?=$datfac->identificacion_t3?> <?=$datfac->nomcomp_t3?><br> 
                      Dirección: <?= $datfac->direccion_t3 ?><br> 
                      CC: <?= $datfac->identificacion_t3 ?>
                    </strong></td>
                    <td colspan="3" width="12%" style='border: 1px solid #000;text-align: center'><strong>Fecha Factura</strong></td>
                </tr>
                <tr>
                    <td width="12%" style='border: 1px solid #000;text-align: center'><strong>Dia </strong></td>
                    <td width="12%" style='border: 1px solid #000;text-align: center'><strong>Mes </strong></td>
                    <td width="16%" style='border: 1px solid #000;text-align: center'><strong>Año </strong></td>
                </tr>
                <tr>
                    <td width="12%" style='border: 1px solid #000;text-align: center'><strong><?=date("d",$tffac)?></strong></td>
                    <td width="12%" style='border: 1px solid #000;text-align: center'><strong><?=date("m",$tffac)?></strong></td>
                    <td width="16%" style='border: 1px solid #000;text-align: center'><strong><?=date("Y",$tffac)?></strong></td>
                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
              <tr valign="bottom">
                    <td width="10%" style='border: 1px solid #000'><strong>Nombre, Razón Social</strong></td>
                    <td width="50%" style='border: 1px solid #000'><strong><?=$datfac->desc_t16?></strong></td>
                    <td width="40%" style='border: 1px solid #000'><center><strong>Fecha de Vencimiento </strong></center></td>
                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
                <tr>
                    <td width="10%" style='border: 1px solid #000'><strong>Dirección </strong></td>
                    <td width="20%" style='border: 1px solid #000'><strong><?=$datfac->direccion_t16?></strong></td>
                    <td width="10%" style='border: 1px solid #000'><strong> Ciudad</strong> </td>
                    <td width="20%" style='border: 1px solid #000'><strong><?=$datfac->cuidad_t16?></strong> </td>
                    <td width="12%" style='border: 1px solid #000'><center><strong>Dia </strong></center></td>
                <td width="12%" style='border: 1px solid #000'><center><strong>Mes </strong></center></td>
                <td width="16%" style='border: 1px solid #000'><center><strong>Año </strong></center></td>
                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
                <tr>
                    <td width="10%" style='border: 1px solid #000'><strong>Nit o Cedula No. </strong></td>
                    <td width="30%" style='border: 1px solid #000'> <?=$datfac->ident_t16?>-<?=$datfac->dv_t16?></td>
            
                    <td width="10%" style='border: 1px solid #000'><strong> Teléfono </strong></td>
                    <td width="10%" style='border: 1px solid #000'><?=$datfac->telefono1_t16?></td>
                    <td width="12%" style='border: 1px solid #000;text-align: center'><?=date("d",$tfvenc)?></td>
                    <td width="12%" style='border: 1px solid #000;text-align: center'><?=date("m",$tfvenc)?></td>
                    <td width="16%" style='border: 1px solid #000;text-align: center'><?=date("Y",$tfvenc)?></td>
                </tr>
            </table>
            <table cellspacing="0" cellpadding="0" width="100%" style='margin:0;border: 1px solid #000;border-collapse: collapse'>
                <tr>
                  <td width="10%" style='border: 1px solid #000'><center><strong>Código</strong></center></td>  
                  <td width="50%" style='border: 1px solid #000'><center><strong>Detalle o Concepto Facturado</strong></center></td>
                  <td width="10%" style='border: 1px solid #000'><center><strong>Cantidad</strong></center></td>  
                  <td width="15%" style='border: 1px solid #000'><center><strong>Valor Unit</strong></center></td>  
                  <td width="15%" style='border: 1px solid #000'><center><strong>Valor Total</strong></center></td>  
                </tr>
                <?if($datfac->tipo_t96=='CAPITA' && !empty($datfac->obs2_t96)){?>
                  <tr valign="top">
                    <td colspan="4"><?=$datfac->obs2_t96?></td>  
                    <td width="15%" style="text-align: right"><?=number_format($datfac->detalle[0]->valor_t67)?></td>
                  </tr>
                <?
                  $vtotal+=$datfac->detalle[0]->valor_t67;
                }elseif(is_array($datfac->detalle)){
                  foreach($datfac->detalle as $regfac){
                   // if($regfac->externo_t67!='S' && $regfac->cantfac_t67>0){
                      $vtotal+=$regfac->valunit_t67;
                      ?>
                      <tr valign="top">
                        <td width="10%"><?=$regfac->codigo_t67?></td>  
                        <td width="50%"><?=$regfac->descripcion_t67?></td>  
                        <td width="10%" style="text-align: center"><?=number_format($regfac->cantfac_t67)?> </td>
                        <td width="15%" style="text-align: right"><?=number_format($regfac->valor_t67 / $regfac->cantfac_t67);?> </td>
                        <td width="15%" style="text-align: right"><?=number_format($regfac->valor_t67)?> </td>
                      </tr>
                  <?//}
                    }
                }?>
                  <tr>
                    <td width="10%"></td>  
                    <td width="60%" colspan="2">
                      <br><br><br>
                      <b><?php $total = $this->Numerosaletras->to_word($vtotal, null); ?></b>
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
                  <?=$datfac->obs1_t96?>
                </td>
                  <td width="20%" style='border: 1px solid #000;text-align: right;padding:.2em;'><strong>Total  antes Iva<br>Copago<br>Valor Iva<br>Total  Factura</strong></td><br>
              <td width="20%" style='border: 1px solid #000;margin:0;text-align: right;padding:.2em;'><strong><?=number_format($vtotal)?><br><?php if($this->input->post('copago')!==0){
                  $copago=0;
                  switch ($datfac->copago_t96) {
                    case '1':
                      $copago= $datfac->valor_t96 * 0.115;
                      echo number_format($copago);
                      break;
                    
                      case '2':
                      $copago= $datfac->valor_t96 * 0.175;
                      echo number_format($copago);
                      break;
                      case '3':
                      $copago= $datfac->valor_t96 * 0.23;
                        echo number_format($copago);
                      break;
                       default:
                            echo number_format($copago);
                          break;
                  }
                } ?> <br>0 <br><?=number_format($vtotal-$copago)?> </strong></td>
                </tr>
            </table>
          <?if(!empty($datfac->resolucion_t97)){?>
            <table  cellspacing="0" cellpadding="0" width="100%" style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="100%" style='border: 1px solid #000;margin:0;padding:.2em;'><?=$datfac->resolucion_t97?></td>
                </tr>
            </table>
          <?}?>
          <?if(!empty($datfac->obsleg_t97)){?>
            <table  cellspacing="0" cellpadding="0" width="100%" style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="100%" style='border: 1px solid #000;margin:0;padding:.2em;'><?=$datfac->obsleg_t97?></td>
                </tr>
            </table>
          <?}?>
            <table align="center" cellpadding="0" cellspacing="0" width="100%" height="40%"  style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <br><br><br><br>
                      Preliquidacion Impresa por  Computador
                    </td>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <?=$imgelab?>
                      <br>
                      Elaborado Por</td>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <br><br><br><br>
                      Aceptada por Comprador</td>
                </tr>
            </table>
        </div>
    </div>
  </body>
</html>