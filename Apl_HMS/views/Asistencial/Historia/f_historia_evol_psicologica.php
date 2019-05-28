<?foreach($psicologia as $regev){?>
  <?php     $query = $this->db->where('numero_identificacion_t10', $regev->iden_usrmod)->get('ps_personal_t10', 1)->result(); ?>
    <div style="border-bottom: 1px dotted #000; text-align: left">
      <div style="padding: 0 0 0 1em;margin:0;"><?=$regev->fmod_psicologia?> <?=$regev->usrmod_psicologia?> RM: <?= $query[0]->registromedico_t10 ?></div>
      <table width="100%">
        <tr>
          <td>Preocupacion Somatica</td>
          <td><b><?= $regev->precuocupacion_somatica ?></b></td>
          <td>Ansiedad Psqiquica</td>
          <td><b><?= $regev->ansiedad_psiquica ?></b></td>
        </tr>
        <tr>
          <td>Barreras Nacionales</td>
          <td><b><?= $regev->barreras_emocionales  ?></b></td>
          <td>Desorganizacion Conceptual</td>
          <td><b><?= $regev->desorganizacion_conceptual ?></b></td>
        </tr>
        <tr>
          <td>Autodepresivo</td>
          <td><b><?= $regev->autodrepesivo ?></b></td>
          <td>Ansiedad Somatica</td>
          <td><b><?= $regev->ansiedad_somatica  ?></b></td>
        </tr>
        <tr>
          <td>Alteraciones motoras especificas</td>
          <td><b><?= $regev->alteraciones_moto_espe  ?></b></td>
          <td>Autoestima Exagerada</td>
          <td><b><?= $regev->autoestima_exa ?></b></td>
        </tr>
        <tr>
          <td>Humor depresivo</td>
          <td><b><?= $regev->humor_depre  ?></b></td>
          <td>Hostilidad</td>
          <td><b><?= $regev->hostilidad  ?></b></td>
        </tr>
        <tr>
          <td>Hostilidad</td>
          <td><b><?= $regev->hostilidad  ?></b></td>
          <td>Suspicacia</td>
          <td><b><?= $regev->suspicacia  ?></b></td>
        </tr>
        <tr>
          <td>Alucinaciones</td>
          <td><b><?= $regev->alucinaciones  ?></b></td>
          <td>Enlentecimiento Motor</td>
          <td><b><?= $regev->enlentesimiento_motor  ?></b></td>
        </tr>
        <tr>
          <td>Falta de cooperaci&oacute;n</td>
          <td><b><?= $regev->falta_coperacion  ?></b></td>
          <td>transtornos del Pensamiento</td>
          <td><b><?= $regev->transtorno_pensamiento  ?></b></td>
        </tr>
        <tr>
          <td>Embotamiento o transtornos afectivos</td>
          <td><b><?= $regev->embotamiento  ?></b></td>
          <td>Agitaci&oacute;n psicomotriz</td>
          <td><b><?= $regev->agitacion_psicomotriz  ?></b></td>
        </tr>
        <tr>
          <td>Desorientacion y confunsi&oacute;n</td>
          <td><b><?= $regev->desorientacion  ?></b></td>
        </tr>
      </table>
      <table width="100%">
        <tr>
          <td>Gravedad de la enfermedad actual</td>
          <td>Como se encuentra el paciente en estos momentos? (Mejoria)</td>
          <td>Observaciones</td>
        </tr>
        <tr>
          <td><b><?= $regev->gravedad  ?></b></td>
          <td><b><?= $regev->mejoria  ?></b></td>
          <td><b><?= $regev->observacion_evol  ?></b></td>
        </tr>
      </table>
      
  </div>
  <?
      
  
  
    }?>