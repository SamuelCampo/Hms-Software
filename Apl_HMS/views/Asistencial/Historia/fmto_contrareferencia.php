<html>
  <head></head>
  <body>
    <h1 align="center" >
      <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" align="left" alt="" border="0"> CONTRAREMISION DE PACIENTES</h1>
    <div style="
        margin:0;
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        color: #000000;
        font-size:10pt;
        padding:1em;">
      <div>
        <table align="center" border="1" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
            <td align="center" >
              <strong>INFORMACION DEL PRESTADOR QUE RESPONDE</strong>      
            </td>
            </tr>
           </table> 
        <div style="border:1px solid #000;margin: 0;padding: 0;">
        <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
              <td width="60%"><strong>Nombre</strong>
              <td width="20%"><strong>NIT</strong>
              <td width="20%"><strong>CC</strong> 
            </tr>
          </table>
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="40%"><strong>Codigo</strong>
              <td width="60%"><strong>Direccion Prestador</strong> 
            </tr>
          </table>
        <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="40%"><strong>Telefono</strong>
              <td width="30%"><strong>Departamento</strong>
              <td width="30%"><strong>Municipio</strong>  
            </tr>
       </table>
         </div> 
        <table align="center" border="1" cellspacing="0" width="100%" style='border: 0px solid #000'>
          <tr>
            <td align="center" >
              <strong>DATOS DEL PACIENTE</strong>      
            </td>
        </table> 
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
              <td width="30%"><strong>Tipo de Documento</strong><?=$dathistoria->identiftipo_t3?></td>
              <td width="70%"><strong>Número</strong><?=$datpaciente->identificacion_t3?></td>
            </tr>
          </table>  
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Direccion</strong><?=$datpaciente->direccion_t3?> </td>    
              <td width="50%"> <strong>Telefono</strong><?=$datpaciente->telefono_t3?></td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Departamento</strong><?=$dathistoria->municipio_t3?></td>   
              <td width="50%"> <strong>Municipio</strong><?=$datpaciente->municipio_t3?></td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>ENTIDAD RESPONSABLE DEL PAGO</strong><?=$datpaciente->administradora_t3?></td>   
              <td width="50%"> <strong>CODIGO</strong><?=$datpaciente->administradoracod_t3?></td>
          </tr>
          </table>
        </div>     
       <table align="center" border="1" cellspacing="0" width="100%" style='border: 0px solid #000'>
          <tr>
            <td align="center" >
              <strong>DATOS PERSONALES RESPONSABLE DEL PACIENTE</strong>      
            </td>
      </table> 
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
              <td width="30%"><strong>Documento: </strong>
              <td width="70%"><strong>Nombre: </strong><?=$datpaciente->emerg1_t3.",".$datpaciente->emerg2_t3?>
            </tr>
          </table>  
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Dirección: </strong></td>   
              <td width="50%"> <strong>Teléfono: </strong><?=$datpaciente->emerg1tel_t3.",".$datpaciente->emerg2tel_t3?></td>
          </tr>
          </table>
          <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="50%"><strong>Departamento: </strong></td>   
              <td width="50%"> <strong>Municipio: </strong></td>
          </tr>
          </table>
        </div> 
        <div style="border:1px solid #000;margin: 0;padding: 0;">
           <table align="center" border="1" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
            <td align="center" >
              <strong>PROFESIONAL QUE CONTRAREFIERE</strong>      
            </td>
            </tr>
           </table> 
          <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
              <td width="70%"><strong>Nombre</strong>
              <td width="30%"><strong>Telefono</strong>
            </tr>
          </table>  
            <table align="center" cellspacing="0" width="100%">
            <tr>
              <td width="70%"><strong>Servicio que contrarefiere</strong></td>   
              <td width="30%"> <strong>Telefono Celular</strong></td>
            </tr>
            </table>
            <table align="center" border="1" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr>
            <td align="center" >
              <strong>INFORMACION CLINICA RELEVANTE</strong>      
            </td>
            </tr>
            <tr>
            <td>
              Diligencie en el orden indicado el resumen de anamnesis y examen fisico,fechas y resultados de examenes auxiliares de diagnostico resumen de la evolucion    
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
            <tr>
            <td>
              <strong>Firma y Registro del Profesional que Contrarefiere</strong>      
            </td>
            <strong></strong>
            </tr>
           </table> 
      </div>
    </div>
  </body>
</html>