<html>
  <head></head>
  <body>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:7pt;">
        <table width="100%">
          <tr>
            <td width="200px">
              <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
            </td>
            <td>
              <h3 align="center" > Historia Clínica No.<?=$dathistoria->idps_historia_t4?></h3>
            </td>
          </tr>
        </table>
      
     <div style="border:1px solid #000;margin: 0;padding: 0;">
        <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
          <tr>
            <td width="60%"><strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?></td>
            <td width="40%"><strong>Identificación: </strong><?=$datpaciente->identiftipo_t3?>  <?=$datpaciente->identificacion_t3?></td>
          </tr>
        </table>
        <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
          <tr>
            <td width="30%"><strong>Fecha Nac.: </strong><?=$datpaciente->fnacim_t3?></td>
            <td width="30%"><strong>Sexo: </strong><?=$datpaciente->genero_t3?></td>
            <td width="20%"><strong>Edad: </strong><?=$edad?></td>
            <td width="20%"><strong>Nivel: </strong><?=$datpaciente->nivel_t3?></td> 
          </tr>
       </table>
       <table align="center" cellspacing="0" width="100%">
          <tr>
            <td width="30%"><strong>Estado Civil: </strong><?=$datpaciente->estadocivil_t3?></td>
            <td width="30%"><strong>Teléfono: </strong><?=$datpaciente->telefono_t3?></td>
            <td width="40%"><strong>Dirección: </strong><?=$datpaciente->direccion_t3?>  <?=$datpaciente->municipio_t3?></td>  
          </tr>
       </table>
          <table align="center" cellspacing="0" width="100%">
              <tr>
                <td width="50%"><strong>Nivel Educativo: </strong><?=$datpaciente->ocupacion_t3?></td>
                <td width="50%"><strong>Régimen: </strong><?=$datpaciente->tipoaf_t3?></td>  
              </tr>
          </table>
         <table align="center" cellspacing="0" width="100%">
              <tr>
                <td width="50%"><strong>Ocupación: </strong><?=$datpaciente->ocupacion_t3?></td>
                <td width="50%"><strong>Sede: </strong><?=$this->Modulo->infoentidad->ciudad_t75?></td>
              </tr>
         </table>
         <table align="center" cellspacing="0" width="100%">
          <tr>
            <td width="50%"><strong>Datos Acompañante: </strong></td>
            <td width="50%"><strong>Tel: </strong></td>
          </tr>
        </table>
        <table align="center" cellspacing="0" width="100%">
          <tr>
            <td width="60%"><strong>Responsables del Paciente: </strong></td>
            <td width="20%"><strong>Tel: </strong></td>
            <td width="20%"><strong>Parentesco: </strong></td> 
          </tr>
          <tr>
            <td width="60%"><?=$datpaciente->emerg1_t3?></td>
            <td width="20%"><?=$datpaciente->emerg1tel_t3?></td>
            <td width="20%"></td> 
          </tr>
          <tr>
            <td width="60%"><?=$datpaciente->emerg2_t3?></td>
            <td width="20%"><?=$datpaciente->emerg2tel_t3?></td>
            <td width="20%"></td> 
          </tr>
        </table>
  </div> 
  <div style="border:1px solid #000;margin: 0;padding: 0;">
      <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
        <tr>
          <td colspan="2" align="center" >
            <strong>EVOLUCION MEDICA</strong>      
          </td>
        </tr>
      </table>
  </div>
  <div style="border:1px solid #000;margin: 0;padding: 0;">
      <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
        <tr>
          <td width="50%"><strong>Servicio: </strong><?=$dathistoria->ubicacion_t4?></td>
          <td width="50%"><strong>Fecha y Hora de Registro: </strong><?=$dathistoria->fingreso_t4?></td>
        </tr>
      </table>  
      <table align="center" cellspacing="0" width="100%">
        <tr>
          <td width="50%"><strong>Empresa de Servicio:  </strong><?=$datpaciente->administradora_t3?></td>   
          <td width="50%"> <strong>Contrato: </strong><?=$datpaciente->administradoracod_t3?></td>
        </tr>
      </table>
  </div> 
  <div style="border:1px solid #000;margin: 0;padding: 0;">
      <table align="center" cellspacing="0" width="100%" style='border: 0px solid #000'>
        <tr>
          <td width="30%"><strong>Hora Valoración</strong></td>
          <td width="70%"><?=$datconsulta->fmod_t64?></td>
        </tr>
      </table>  
      <table align="center" cellspacing="0" width="100%">
        <tr>
          <td width="30%"><strong>Procedimientos Realizados</strong></td>   
          <td width="70%"><?=$datordenesp->orden_t67."  ".$datordenesp->descripcion_t67." ".$datordenesp->cantidad_t67." ".$datordenesp->observacion_t67." ".$datordenesp->resultado_t67?></td>
        </tr>
      </table>
  </div> 
  <br/><br/>
  &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br/>
  <?=$datconsulta->mednomcomp_t64?><br/>
  <?=$datconsulta->medcargo_t64?><br/> 
  REG. <?=$datconsulta->medreg_t64?><br/>
  </body>
</html>