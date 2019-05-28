<?
  $arr_fecha = explode(" ", $datagenda->fecha_programacion_t12);
?>
<html>
  <head></head>
  <body>
      <div style="
        font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
        padding:0;
        margin:0;
        color: #000000;
        font-size:15pt;">
        <table width="100%">
          <tr>
            <td width="200px">
              <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" alt="<?=$entidad->nombre_t75?>">
            </td>
            <td>
              <h3 align="center" > Agendamiento Citas</h3>
            </td>
          </tr>
        </table>
      
     <div >
       <br><br><br>
       <legend>Datos Paciente</legend>
        <hr>
        <table align="center" cellspacing="2" width="90%" style='border: 0px solid #000'>
          <tr>
            <td><b>Identificación:</b></td>
            <td><?=$datpaciente->identificacion_t3?></td>
          </tr>
          <tr>
            <td><b>Paciente:</b></td>
            <td><?=$this->Planthtml->mayusc($datpaciente->nomcomp_t3)?></td>
          </tr>
          <tr>
            <td><b>Teléfono:</b></td>
            <td><?=$datpaciente->telefono_t3?></td>
          </tr>
          <tr>
            <td><b>Municipio:</b></td>
            <td><?=$this->Planthtml->mayusc($datpaciente->municipio_t3)?></td>
          </tr>
        </table>
        <br><br>
       <legend>Información Cita Asignada</legend>
       <hr>
        <table align="center" cellspacing="2" width="90%" style='border: 0px solid #000'>
          <tr>
            <td><b>Fecha Impresión:</b></td>
            <td><?=date("Y-m-d H:i")?></td>
          </tr>
          <tr>
            <td><b>Fecha Cita:</b></td>
            <td><?=$arr_fecha[0]?> <b>Hora Cita:</b> <?=$arr_fecha[1]?></td>
          </tr>
          <tr>
            <td><b>Médico:</b></td>
            <td><?=$this->Planthtml->mayusc($datagenda->nomcompp_t12)?></td>
          </tr>
          <tr>
            <td><b>Especialidad:</b></td>
            <td><?=$this->Planthtml->mayusc($datagenda->especialidades_t12)?></td>
          </tr>
          <tr>
            <td><b>Consultorio:</b></td>
            <td><?=$datagenda->servicio_t12?> <?=$datagenda->numcubic_t12?></td>
          </tr>
        </table>
    </div>
        <br>
        <hr>
        <div style="font-size:.8em;text-align: justify">
          Por favor llegar 15 minutos ántes de la hora programada, para cancelar su cita por favor comunicarlo con 24 horas de anticipación
        </div>
  <br/><br/>
  <br>
  <?=$this->load->view('Genericas/fmto_hmspie');?>
  </body>
</html>