<?$edad=calculoedad($datpaciente->fnacim_t3);?>
<?php $num = 0; ?>

        <div style="border:1px solid #000">
          <table border="0" width="100%" style="border-collapse: collapse;">
            <tr>
              <td colspan="2"><strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?></td>
              <td nowrap><strong>Tipo Doc: </strong><?=$datpaciente->identiftipo_t3?> <strong>Documento: </strong><?=$datpaciente->identificacion_t3?></td>
            </tr>
            <tr>
              <td ><strong>HC.No: </strong><?=$dathistoria->idps_historia_t4?></td>
              <td ><strong>Sexo: </strong><?=$datpaciente->genero_t3?> <strong>Estado Civil: </strong><?=$datpaciente->estadocivil_t3?></td>
              <td nowrap><strong>Fecha Nac: </strong><?=$datpaciente->fnacim_t3?> <strong>Edad: </strong><?=$edad?></td>
            </tr>
            <tr>
              <td ><strong>Dirección: </strong><?=$datpaciente->direccion_t3?></td>
              <td ><strong>Municipio: </strong><?=$datpaciente->municipio_t3?></td>
              <td nowrap><strong>Tel: </strong><?=$datpaciente->emerg1tel_t3?></td>
            </tr>
            <tr valign="top">
              <td colspan="2">
                <strong>Nivel Educativo: </strong><?=$datpaciente->niveduc_t3?>
              </td>
              <td >
                <strong>Ocupación: </strong><?=$datpaciente->ocupacion_t3?>
              </td>
            </tr>
           <tr valign="top">
             <td colspan="2">
               <strong>Info Afiliación: </strong><?=$datpaciente->administradoracod_t3?> <?=$datpaciente->administradora_t3?> <?=$datpaciente->tipoaf_t3?> Nivel: <?=$datpaciente->nivel_t3?>
             </td>
             <td ><strong>Impreso: </strong><?=date("Y-m-d")?> <strong>Hora: </strong><?=date("G:i")?></td>
           </tr>
           <tr valign="top">
             <td colspan="2">
               <strong>Grupo Étnico: </strong><?=$datpaciente->grupoet_t3?><br>
               <strong>Población de Riesgo: </strong><?=$datpaciente->grupoespec_t3?><br>
               <strong>Discapacidad: </strong><?=$datpaciente->discap_t3?>
             </td>
             <td>
               <strong>Acompañante(s): </strong><br>
               &nbsp;&nbsp; <?=$datpaciente->emerg1_t3?> <b>Tel: </b> <?=$datpaciente->emerg1tel_t3?> <br>
               &nbsp;&nbsp; <?=$datpaciente->emerg2_t3?> <b>Tel: </b> <?=$datpaciente->emerg1te2_t3?>
             </td>
           </tr>
         </table>
        </div>