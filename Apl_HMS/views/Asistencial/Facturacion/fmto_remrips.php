<?
  //var_dump($datrips);
  $tffac = strtotime($datrips->ffact_t96);
  $tfvenc = strtotime($datrips->fvence_t96);
  //var_dump($this->Modulo->infoentidad);
  //var_dump($datrips);
  //var_dump($datrips);
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
                    <td width="30%"><strong><?=$datrips->detalle[0]->razonsocial_t97?><br>
                        NIT: <?=$datrips->detalle[0]->nit_t97?>
                      <br>Dirección <?=$datrips->detalle[0]->direccion_t97?> <?=$datrips->detalle[0]->ciudad_t97?>
                      <br>Teléfono: (57) <?=$datrips->detalle[0]->telefono_t97?></strong>
                    </td>
                    <td width="40%" nowrap><center><strong>Cuenta de Cobro</strong><br><strong>No. <?=$datrips->remision_t92?><?=$datrips->factnum_t96?><?=$datrips->subfijo_t97?></strong></center></td>
                </tr>
            </table>    
            
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
              <tr valign="bottom">
                    <td width="30%" style='border: 1px solid #000'><strong>Nombre, Razón Social</strong></td>
                    <td width="70%" style='border: 1px solid #000'><strong><?=$datrips->detalle[0]->desc_t16?></strong></td>

                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
                <tr>
                    <td width="20%" style='border: 1px solid #000'><strong>Dirección </strong></td>
                    <td width="30%" style='border: 1px solid #000'><strong><?=$datrips->detalle[0]->direccion_t16?></strong></td>
                    <td width="20%" style='border: 1px solid #000'><strong>Ciudad</strong> </td>
                    <td width="30%" style='border: 1px solid #000'><strong><?=$datrips->detalle[0]->cuidad_t16?></strong> </td>
                </tr>
            </table>
            <table  cellspacing="0" cellpadding="0" width="100%"  style="margin: 0;border-collapse: collapse;">
                <tr>
                    <td width="20%" style='border: 1px solid #000'><strong>Nit o Cedula No. </strong></td>
                    <td width="30%" style='border: 1px solid #000'><?=$datrips->detalle[0]->ident_t16?>-<?=$datrips->detalle[0]->dv_t16?></td>
                    <td width="20%" style='border: 1px solid #000'><strong>Teléfono </strong></td>
                    <td width="30%" style='border: 1px solid #000'><?=$datrips->detalle[0]->telefono1_t16?></td>
                </tr>
            </table>
            <table cellspacing="0" cellpadding="0" width="100%" style='margin:0;border: 1px solid #000;border-collapse: collapse'>
                <tr>
                  <td width="10%" style='border: 1px solid #000'><center><strong>Factura</strong></center></td>
                  <td width="70%" style='border: 1px solid #000'><center><strong>Paciente</strong></center></td>  
                  <td width="20%" style='border: 1px solid #000'><center><strong>Valor Total</strong></center></td>  
                </tr>
                <?if(is_array($datrips->detalle)){
                  foreach($datrips->detalle as $regfac){
                    $totalrad+=$regfac->valor_t96;
                    ?>
                    <tr valign="top">
                      <td style="text-align: center;" ><?=$regfac->factnum_t96?></td>  
                      <td style="text-align: left;" ><?=$regfac->pacnom_t96?></td>
                      <td style="text-align: right" ><?=number_format($regfac->valor_t96)?></td>  
                    </tr>
                  <?}
                  $a = round($totalrad);
                  $totalletras = $this->Numerosaletras->to_word($a, null);
                }?>
                  <tr>
                    <td colspan="2" ><br><br><br>
                    <b>Son: </b><?=$totalletras?> PESOS MDA/CTE.
                    </td>
                    <td style="text-align: right"><?=number_format($totalrad)?></td>  
                  </tr>
            </table>
            <table align="center" cellpadding="0" cellspacing="0" width="100%" height="40%"  style="margin:0;border-collapse: collapse;">
                <tr>
                    <td width="30%" style='border: 1px solid #000;margin:0;padding:.2em;text-align: center;'>
                      <br><br><br><br>
                      Factura Impresa por  Computador
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