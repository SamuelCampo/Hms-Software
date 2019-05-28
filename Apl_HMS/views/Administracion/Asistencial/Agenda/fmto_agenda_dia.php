<html>
  <head></head>
  <body>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:8pt;">
        <table width="100%">
          <tr>
            <td width="200px">
              <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
            </td>
            <td>
              <h3 align="center" > AGENDA DIARIA</h3>
              <table border="1" style="border-collapse: collapse;">
                <tr><td width="20%" style="border-bottom: 1px solid #000"><b>Médico: </b></td><td style="border-bottom: 1px solid #000"><?=$this->Planthtml->mayusc($agedaregs[0]->nomcompp_t12)?> </td></tr>
                <tr><td style="border-bottom: 1px solid #000"><b>Especialidad: </b></td><td style="border-bottom: 1px solid #000"><?=$this->Planthtml->mayusc($agedaregs[0]->especialidades_t12)?> </td></tr>
                <tr><td style="border-bottom: 1px solid #000"><b>Servicio: </b> </td><td style="border-bottom: 1px solid #000"><?=$this->Planthtml->mayusc($agedaregs[0]->servicio_t12)?> </td></tr>
                <tr><td style="border-bottom: 1px solid #000"><b>Día:</b> </td><td style="border-bottom: 1px solid #000"><?=$dia?> </td></tr>
              </table>
            </td>
          </tr>
        </table>
      <div style="margin: 0;padding: 0;">
        <br><br><br><br>
        <table border="1" width="100%" style="border-collapse: collapse;">
          <tr>
            <td align="center" width="10%" colspan="2">
              <strong>HORA</strong>
            </td>
            <td align="center" width="70%" colspan="2">
              <strong>PACIENTE</strong>
            </td>
            <td align="center" width="10%" colspan="2">
              <strong>IDENTIFICACION</strong>
            </td>             
            <td align="center" width="70%" colspan="2">
              <strong>TELÉFONO</strong>
            </td> 
            <td align="center" width="20%" colspan="2">
              <strong>&nbsp;</strong>
            </td> 
          </tr>
          <?if(is_array($agedaregs)){
            foreach($agedaregs as $agendareg){
              $hora = substr($agendareg->fecha_programacion_t12, 11,5);
              ?>
              <tr>
                <td align="center" width="10%" colspan="2" style="text-align: left">
                  <?=$hora?>
                </td>
                <td align="center" width="70%" colspan="2" style="text-align: left">
                  <strong><?=$this->Planthtml->mayusc($agendareg->nomcomp_t12)?></strong>
                </td>
                <td align="center" width="70%" colspan="2" style="text-align: left">
                  <?=$agendareg->identificacion_t3?> 
                <td align="center" width="70%" colspan="2" style="text-align: left">
                  <?=$agendareg->telefono_t3?>
                </td> 
                <td align="center" width="20%" colspan="2" style="border-bottom: 1px solid #000">
                  &nbsp;
                </td> 
              </tr>
          <?}
          }?>
       </table> 

      <br><br><br>
      <?=$this->load->view('Genericas/fmto_hmspie');?>
    </div>
  </body>
</html>