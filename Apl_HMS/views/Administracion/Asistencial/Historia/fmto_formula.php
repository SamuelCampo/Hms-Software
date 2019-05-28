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
              <h3 align="center" > Fórmula</h3>
            </td>
          </tr>
        </table>
      <div style="border:1px solid #000;margin: 0;padding: 0;">
        <?=$this->load->view('Asistencial/Historia/f_historia_detencab','',true);?>
       </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          
          <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'> 
            <tr>     
              <td><strong>Fec. Formula: </strong><?=$hist_orden[0]->fmod_t67?></td>
              <td><strong>Fec. Ingreso: </strong><?=$dathistoria->fingreso_t4?></td>
              <td><strong>Orden No.: </strong><?=$hist_orden[0]->orden_t67?></td>
            </tr>
            <tr>  
              <td colspan="3"><strong>Dirrección: </strong><?=$this->Modulo->infoentidad->direccion_t75?><?=$this->Modulo->infoentidad->ciudad_t75?></td>
            </tr>
            <tr>
              <td><strong>Contrato: </strong><?=$datpaciente->administradoracod_t3?></td>
              <td><strong>Servicio de: </strong><?=$dathistoria->ubicacion_t4?></td>
              <td><strong>Cama: </strong>
            </tr>    
          </table>
        </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
          <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
            <tr valign="top">
              <td colspan="2">
                <strong>Diagnóstico Principal</strong> <br/>
                <?=$datconsulta->dxprincipal_t64?>
              </td>
              <td colspan="2">
                <strong>Diagnostico Relacionado</strong> <br/>
                <?=$datconsulta->dxrelprincipal_t64?>
              </td>
           </tr>
          <tr>
            <td colspan="2">
              <?if(!empty($datconsulta->dxsecundario_t64)){?>
                <strong>Dx Secundario</strong> <br/>
                <?=$datconsulta->dxsecundario_t64;?>
              <?}?>
            </td>
            <td colspan="2">
              <?if(!empty($datconsulta->dxrelsecundario_t64)){?>
                <strong>Dx Rel. Secundario</strong> <br/>
                <?=$datconsulta->dxrelsecundario_t64;?>
              <?}?>
            </td>
          </tr>
        </table>
        </div>
        <div style="border:1px solid #000;margin: 0;padding: 0;">
         <table align="center" border="0" cellspacing="0" width="100%" style='border: 0px solid #000'>
          <tr>
            <td width="45%" align="center" ><strong>Medicamento</strong></td>
            <td width="10%"><strong>Cant.</strong></td>
            <td width="15%"><strong>Posología y Vía de Administración</strong></td>
            <td width="15%"><strong>Días</strong></td>
            <td width="20%"><strong>Observaciones</strong></td> 
          </tr>  
          <?
          if(!empty($hist_orden)){
            foreach($hist_orden as $orden){
              if($orden->pos_t67!='HPNP'){
                if(empty($orden->durdias_t67)){
                  @$dias = ($orden->cantidad_t67*$orden->frecuencia_t67)/($orden->dosis_t67*24);
                }else{
                  $dias = $orden->durdias_t67;
                }
              
          ?>
            <tr>
              <td width="45%"><?=$orden->descripcion_t67?></td>
              <td width="10%"><?=$orden->cantidad_t67?></td>
              <td width="45%"><?=$orden->dosis_t67." cada ".$orden->posologia_t67." horas. Via:".$orden->via_t67?></td>
              <td width="10%"><?=number_format($dias)?> Dias</td>
              <td width="45%"><?=$orden->observacion_t67?></td>   
            </tr>
              <?}}}?>
        </table>
        </div>
        
        <br/><br/>
        &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br/>
        <br/>
        <?=$datconsulta->mednomcomp_t64?><br/>
        <?=$datconsulta->medespec_t64?><br/>
        REG. <?=$datconsulta->medreg_t64?><br/>
        <?=$datconsulta->medcargo_t64?><br/>
      </div>
      <br><br><br>
      <?=$this->load->view('Genericas/fmto_hmspie');?>
    
  </body>
</html>