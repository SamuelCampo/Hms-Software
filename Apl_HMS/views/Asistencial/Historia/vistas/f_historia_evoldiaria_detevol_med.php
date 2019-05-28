<? header('Content-Type: text/html; charset=iso-8859-1');?>
<?
    //var_dump($dathistoria);
    //var_dump($datevol);
    //var_dump($datpaciente);
    //var_dump($datconsulta);
?>

      <div class="row">
          <div style="border:1px solid #000;margin: 0;padding: 0;">
              <table align="center" cellspacing="0" width="100%">
                  <tr>
                      <td width="10%"><strong>HC.No: </strong></td>
                      <td><?=$dathistoria->idps_historia_t4?></td>
                      <td width="20%"><strong>Sexo: </strong></td>
                      <td><?=$dathistoria->genero_t3?></td>
                      <td width="25%"><strong>Fecha.Nac: </strong></td>
                      <td><?=$dathistoria->fnacim_t3?></td>
                      <td width="10%"><strong>Edad: </strong></td>
                      <td>45</td>
                      <td width="30%"><strong>Estado Civil: </strong></td>
                      <td><?=$dathistoria->estadocivil_t3?></td>
                  </tr>
              </table>
              <table align="center" cellspacing="0" width="100%">
                  <tr>
                      <td width="10%"><strong>Nivel: </strong></td>
                      <td><?=$dathistoria->nivel_t3?></td>
                      <td width="25%"><strong>Fecha: </strong></td>
                      <td><?=date("Y-m-d")?></td>
                      <td width="25%"><strong>Hora: </strong></td>
                      <td><?=date("G:i")?></td>
                      <td width="40%"><strong>Profesional: </strong></td>
                      <td></td>
                  </tr>
              </table>
      <table border="1" width="100%" style="border-collapse: collapse;">
          <tr>
            <td align="center" width="100%" colspan="5">
              <strong>IMPRESION DIAGNOSTICA</strong>
            </td>
          </tr> 
          <tr>
              <td width="30%"><strong> Diagnotico Principal </strong></td> 
              <td width="20%"></td>
              <td width="30%"><strong> Diagnotico relacionado con el principal </strong></td> 
              <td width="20%"></td>
          </tr>
      </table>
  <center><b>SIGNOS VITALES</b></center>
  <div style="border:1px solid #000">
      <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
              <td><b>PA(mmHg)</b></td>
              <td><?=$datevol->concep["presarterial"]->valor_t83?></td>
              <td><b>PA media (mmHg)</b></td>
              <td><?=$datevol->concep["presarterialmed"]->valor_t83?></td>
              <td><b>FC(l/min)</b></td>
              <td><?=$datevol->concep["freccardiaca"]->valor_t83?></td>
              <tr></tr>
              <td><b>FR(r/min)</b></td>
              <td><?=$datevol->concep["frecresp"]->valor_t83?></td>
              <td><b>Temperatura</b></td>
              <td><?=$datevol->concep["temp"]->valor_t83?></td>
            </tr>
        </table>
      </div>
          <center><b>OBJETIVOS Y PLANES</b></center>
      <div style="border:1px solid #000">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td><b>OBJETIVO</b></td>
              <td></td>
              <td><b>OBSERVACION</b></td>
              <td></td>
              <td><b>ESTADO</b></td>
              <td></td>
            </tr>
        </table>
      </div>
          <div>
          <table border="1" width="100%" style="border-collapse: collapse;">
              <tr>
                  <td width="30%"><strong> PROBLEMAS Y PLANEACION </strong></td>
                  <td width="20%"><?=$datevol->concep["problemnuevosdesc"]->valor_t83?></td>
                  <td width="30%"><strong> OBSERVACIONES </strong></td>
                  <td width="20%"><?=$datevol->concep["obs"]->valor_t83?></td>
              </tr>
          </table>
              <table border="1" width="100%" style="border-collapse: collapse;">
                  <tr>
                      <td width="50%"><strong> EVOLUCION DE ENFERMERIA <br>pendientes: </strong></td>
                      <td></td>
                      <td width="50%"><strong> EVOLUCION TERAPIAS <br>analisis: </strong></td>
                      <td></td>
                  </tr>
              </table>
          </div>
          <div style="border:1px solid #000; text-align: justify">
              <table>
                  <tr>
                      <td width="50%"><strong>OBSERVACIONES</strong></td>
                      <td></td>
                  </tr>
              </table>
          </div>
          </div>
      </div>