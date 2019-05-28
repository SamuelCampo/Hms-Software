<html>
  <head></head>
  <body>
    <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>" class="img-thumbnail"> <h1 align="center" > REMISION DE PACIENTES</h1>
    <div style="
        margin:0;
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        color: #000000;
        font-size:10pt;
        padding:1em;">
        <?=date("Y-m-d")?>  <?=date("G:i")?>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          
          <table align="center" cellspacing="0" width="100%">
            <tr>
            <td align="center" >
              <strong>INFORMACION DEL PRESTADOR</strong>      
            </td>
            </tr>
           </table> 
        </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="60%"><strong>Nombre: </strong><?=$this->Modulo->infoentidad->nombre_t75?></td>
              <td width="40%"><strong>NIT: </strong><?=$this->Modulo->infoentidad->nit_t75?></td>
            </tr>
        </table>
        <table align="center" cellspacing="0" width="100%">
          <tr>
            <td width="40%"><strong>Código: </strong><?=$this->Modulo->infoentidad->codigo_t75?></td>
            <td width="60%"><strong>Dirección Prestador: </strong> <?=$this->Modulo->infoentidad->direccion_t75?><?=$this->Modulo->infoentidad->ciudad_t75?></td>
          </tr>
        </table>
         </div> 
      <div style="border:1px solid #000;margin: 0;padding: 0;">
       <table align="center" cellspacing="0" width="100%">
          <tr>
            <td align="center">
              <strong>DATOS DEL PACIENTE</strong>      
            </td>
          </tr>
        </table> 
      </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="30%"><strong>Tipo de Documento: </strong><?=$dathistoria->identiftipo_t3?></td>
              <td width="70%"><strong>Número: </strong><?=$datpaciente->identificacion_t3?></td>
            </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="100%"><strong>Nombre: </strong><?=$dathistoria->nomcomp_t3?></td>              
            </tr>
          </table>
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="70%"><strong>Dirección: </strong></strong><?=$datpaciente->direccion_t3?>  <?=$dathistoria->municipio_t3?> </td>   
              <td width="30%"> <strong>Teléfono: </strong><?=$datpaciente->telefono_t3?></td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="70%"><strong>ENTIDAD RESPONSABLE DEL PAGO :</strong><?=$datpaciente->administradora_t3?></td>  
              <td width="30%"> <strong>CÓDIGO: </strong><?=$datpaciente->administradoracod_t3?></td>
          </tr>
          </table>
        </div> 
      <div style="border:1px solid #000;margin: 0;padding: 0;">
       <table align="center" cellspacing="0" width="100%">
          <tr>
            <td align="center" >
              <strong>DATOS PERSONALES RESPONSABLE DEL PACIENTE</strong>      
            </td>
          </tr>
      </table> 
      </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="30%"><strong>Documento: </strong></td>
              <td width="70%"><strong>Nombre: </strong><?=$datpaciente->emerg1_t3.",".$datpaciente->emerg2_t3?></td>
            </tr>
          </table>  
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Dirección: </strong></td>   
              <td width="50%"> <strong>Teléfono: </strong><?=$datpaciente->emerg1tel_t3.",".$datpaciente->emerg2tel_t3?></td>
          </tr>
          </table>
        </div> 
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellspacing="0" width="100%">
            <tr>
            <td align="center" >
              <strong>PROFESIONAL QUE SOLICITA LA REFERENCIA Y EL SERVICIO AL CUAL REMITE</strong>      
            </td>
            </tr>
           </table> 
        </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="70%"><strong>Nombre:</strong><?=$datpersonalmedcons->nomcomp_t10?></td>
              <td width="30%"><strong>Teléfono: </strong><?=$datpersonalmedcons->n_corporativo_t10?></td>
            </tr>
          </table>  
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="70%"><strong>Servicio que solicita la referencia: </strong><?=$dathistoria->estado_t3?></td>   
              <td width="30%"> <strong>Teléfono Celular: </strong><?=$datpersonalmedcons->n_corporativo_t10?></td>
            </tr>
            </table>
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="80%"><strong>Servicio para el cual se solicita la referencia: </strong><?=$dathistoria->destinopac_t68?></td>   
            </tr>
            </table>
        </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
            <table align="center" cellspacing="0" width="100%">
            <tr>
            <td align="center" >
              <strong>INFORMACION CLINICA RELEVANTE</strong>      
            </td>
            </tr>
            </table>
        </div>
      <div style="border:1px solid #000;margin: 0;padding: 0;">
        <table>
            <tr>
            <td>
              Diligencie en el orden indicado el resumen de anamnesis y examen físico,fechas y resultados de exámenes auxiliares de diagnostico resumen de la evolucion 
              <?=$datconsulta->orden_t67.",".$datconsulta->tipo_t67.",".$datconsulta->descripcion_t67.",".$datconsulta->cantidad_t67.",".$datconsulta->observacion_t67.",".$datconsulta->resultado_t67?>
              <?=$datconsulta->viaing_t4.",".$datconsulta->estadoingreso_t64.",".$datconsulta->motconsulta_t64.",".$datconsulta->enfermactual_t64.",".$datconsulta->altura_t64.",".$datconsulta->peso_t64?>
              <?=$datconsulta->temp_t64.",".$datconsulta->fr_t64.",".$datconsulta->fc_t64.",".$datconsulta->ta_t64.",".$datconsulta->pvc_t64.",".$datconsulta->sao2_t64?>
              <?=$datconsulta->glsgow_t64.",".$datconsulta->tiss_t64.",".$datconsulta->apache_t64.",".$datconsulta->neurologico_t64.",".$datconsulta->respiratorio_t64.",".$datconsulta->cardiovascular_t64?>
              <?=$datconsulta->abdomen_t64.",".$datconsulta->urinario_t64.",".$datconsulta->extremidad_t64.",".$datconsulta->otros_t64?>
              <?=$datconsulta->valoracionini_t64.",".$datconsulta->dxprincipal_t64.",".$datconsulta->dxsecundario_t64.",".$datconsulta->dxegreso_t64.",".$datconsulta->dxrelprincipal_t64.",".$datconsulta->dxrelsecundario_t64?>
              <?=$datconsulta->dxfallecido_t64.",".$datconsulta->impresiondx_t64.",".$datconsulta->triage_t64.",".$datconsulta->servicio_t64.",".$datconsulta->destinopac_t64.",".$datconsulta->condicionsalida_t64?>
            </td>
            <strong></strong>
            </tr>
        </table>
      </div>
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td>
                <br/><br/><br/>
         -------------------------------------------------------------------<br/>
                <strong>Dr(a): <?=$datpersonalmedcons->nomcomp_t10?> </strong></td>
            </tr>
            <tr>
              <td><strong><?=$datpersonalmedcons->cargo_t10?> </strong></td>
            </tr>
            <tr>
              <td>Registro Medico</td>
            </tr>
         </table>
      </div>

   
  </body>
</html>