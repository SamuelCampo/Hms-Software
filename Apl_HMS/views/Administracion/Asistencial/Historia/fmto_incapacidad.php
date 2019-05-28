<html>
  <head>
    <style>
      html{
        margin: 1cm;
      }
      @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -0px; right: 0px; height: 150px; text-align: left; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    #footer { position: fixed; left: 0px; bottom: -200px; right: 0px; height: 150px; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    /*#footer .page:after { content: counter(page, upper-roman); }*/
    </style>
  </head>
  <body>
    <div id="header">
              <strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?><span> </span>
              <strong>Tipo Doc: </strong><?=$datpaciente->identiftipo_t3?> <strong>Documento: </strong><?=$datpaciente->identificacion_t3?><span> </span>
              <strong>HC.No: </strong><?=$dathistoria->idps_historia_t4?><span> </span>
    </div>
    <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        color: #000000;
        font-size:10pt;">
     
     <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>" class="img-thumbnail"> <h3 align="center" > Incapacidad o Licencia de Maternidad</h3>
     <a href="factura1.html"></a>
    
        <div style="border:1px solid #000;margin: 0;padding: 0;">
        <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
              <td><strong>Estado</strong> </td>
            </tr>
        </table>
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>N° Autorización: </strong></td>
              <td width="50%"><strong>N° Incapacidad: </strong><?=$datinca[0]["id_inca"]?> </td>
            </tr>
        </table>
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Ciudad: </strong><?=$datpaciente->municipio_t3?></td>
              <td width="50%"><strong>N° Solicitud: </strong> </td>
            </tr>
       </table>
          <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
              <td><strong>Cotizante: </strong><?=$datpaciente->identificacion_t3?>  <?=$datpaciente->nomcomp_t3?></td>
            </tr>
          </table>  
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Fecha de Recepción: </strong></td>   
              <td width="50%"> <strong>Fecha Expedición: </strong><?=date("Y-m-d")?></td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td><strong>Empleador: </strong><?=$datpaciente->trabajo_t3?> </td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td><strong>IPS: </strong><?=$this->Modulo->infoentidad->nombre_t75?></td>  
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="20%"><strong>Días de Incapacidad: </strong><?=$datinca[0]["dias_inca"]?></td>   
              <td width="40%"> <strong>Fecha de Inicio: </strong><?=$datinca[0]["fecha_inic_inca"]?></td>
              <td width="40%"> <strong>Fecha de Terminación: </strong><?=$datinca[0]["fecha_ter_inca"]?></td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%" >
            <tr>
              <td><strong>Prorroga: <?=$datinca[0]["porroga_inca"]?></strong>
            </tr>
            <?php if ($datinca[0]["porroga_inca"]=="AMBULATORIA") {?>
            
          
            <tr>
              <td width="20%"><strong>Días de Incapacidad: </strong><?=$datinca[0]["numer_dias_inca"]?></td>   
              <td width="40%"> <strong>Fecha de Ult.Incapacidad: </strong><?=$datinca[0]["fecha_ult_inca"]?></td>
            <?php   }  ?>
          </tr>
          </table>  
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td><strong>Diagnóstico: </strong><?=$datconsulta->dxprincipal_t64?></td>   
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td><strong>Contingencia: </strong> <?=$datconsulta->causaext_t4?></td>    
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="30%"><strong>Incapacidad por: </strong><?=$datinca[0]["motivo_inca"]?></td>
              <td width="70%"><strong>Tipo de Incapacidad: </strong><?=$datinca[0]["tipo_inca"]?></td>
              
            </tr>
            <tr>
              <td width="70%"><strong>Observaciones:</strong><?=$datinca[0]["obser_inca"]?></td>

            </tr>
          </table>  
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td>
                <br/><br/><br/>
         -------------------------------------------------------------------<br/>
                <strong>Dr(a): <?=$datpersonalmedcons->nomcomp_t10?> </strong>
              </td>
            </tr>
            <tr>
              <td><strong><?=$datpersonalmedcons->cargo_t10?> </strong></td>
            </tr>
            <tr>
              <td>Registro Medico</td>
            </tr>
          </table>
      </div>
    </div>
  </body>
</html>