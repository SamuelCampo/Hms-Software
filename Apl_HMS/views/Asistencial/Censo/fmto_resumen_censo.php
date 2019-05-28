<?php //var_dump($censodet) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Descripci&oacute;n Quirurgica</title>

	<style>
	html{
        margin: 1cm;
      }
      @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -0px; right: 0px; height: 150px; text-align: left; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    #footer { position: fixed; left: 0px; bottom: -200px; right: 0px; height: 150px; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
		.text-center{
			text-align: center;
		}
		table,p,h4{
			padding: 20px;
		}
		body{
		font-family: 'B612', sans-serif;
		padding:50px 0px;
        margin:20px 0px 0px 0px;
        color: #000000;
        font-size:7pt;"
		}
		.div{
			border: 1px black solid
		}
	</style>
</head>
<body>
	    	<table width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td>
              <table width="100%">
                <tr>
                  <td width="50px">
                    <img src="<?=FCPATH.'img/'.$this->Modulo->infoentidad->logo_t75?>" style="width: 90px" alt="<?=$entidad->nombre_t75?>">
                  </td>
                  <td>
                    <div style="text-align: center;font-size: 8pt;">
                      <br>
                      <span><?=$this->Modulo->infoentidad->nombre_t75?></span><br> 
                      <span>NIT: <?=$this->Modulo->infoentidad->nit_t75?> </span><br> 
                      <span>DIR: <?=$this->Modulo->infoentidad->direccion_t75?> </span><br> 
                      <span>TEL: <?=$this->Modulo->infoentidad->telefono_t75?></span>
                      <br>
                      <br><br>
                      
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
	<h5 style="text-align: center;">Resumen de Censo</h5>
	<table width="100%" border="1" cellspacing="0" cellpadding="0">
		<thead>
      <tr>
        <th>
          Historia
        </th>
        <th >
          Identificacion
        </th>
        <th >
          Nombre
        </th>
        <th >
          Administradora
        </th>
        <th>
          Riesgo
        </th>
        <th >
          Ubicación
        </th>
        <th >
          Días
        </th>
      </tr>
    </thead>
    <tbody>
    	<?
      if(is_array($censodet)){
        foreach($censodet as $reg){
          ?>
          <tr>
            <td>
             <?=$reg->idps_historia_t4?>
            </td>
            <td>
            <?=$reg->identificacion_t3?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->nomcomp_t3))?>
            </td>
            <td>
              <?=ucwords(strtolower($reg->administradora_t3))?>
            </td>
            <td>
              <?=$reg->estado_t3?>
            </td>
            <td>
              <?=$reg->ubicacion_t4?>
            </td>
            <td>
                 <?php $dias = (strtotime($reg->fingreso_t4)-strtotime(date('Y-m-d')))/86400;
  $dias   = abs($dias); $dias = floor($dias);   ?>
              <?=$dias?>
            </td>
          </tr>
          <?
        }
      }
      ?>
    </tbody>
	</table>
</body>
</html>