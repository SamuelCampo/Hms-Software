<html>
  <head>
    <style>
      html{
        margin: 1cm;
      }
      @page { margin: 180px 50px; }
    #header { position: fixed; left: 0px; top: -0px; right: 0px; height: 150px; text-align: left; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    #footer { position: fixed; left: 0px; bottom: -200px; right: 0px; height: 150px; font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;        color: #000000;
        font-size:7pt;}
    /*#footer .page:after { content: counter(page, upper-roman); }*/
    </style>
  </head>
  <body>
    <div id="header">
              <strong>Paciente: </strong><?=$datpaciente->nomcomp_t3?><span> </span>
              <strong>Tipo Doc: </strong><?=$datpaciente->identiftipo_t3?> <strong>Documento: </strong><?=$datpaciente->identificacion_t3?><span> </span>
              <strong>HC.No: </strong><?=$dathistoria->idps_historia_t4?><span> </span>
    </div>
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
              <h3 align="center" > Procedimientos</h3>
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
              <td><strong>Dirrección: </strong><?=$this->Modulo->infoentidad->direccion_t75?><?=$this->Modulo->infoentidad->ciudad_t75?></td>
            </tr>
            <tr>
              <td><strong>Contrato: </strong><?=$datpaciente->administradoracod_t3?></td>
              <td><strong>Servicio de: </strong><?=$dathistoria->ubicacion_t4?></td>
              <td><strong>Cama: </strong></td>
            </tr>
                <tr>
              <td><strong>Examen: </strong><?=$this->data['examen'][0]['descripcion_t67']?></td>
              <td></td>
              <td></td>
            </tr>
            <?if(!empty($hist_orden[0]->terid_t67)){?>
              <tr>
                <td colspan="10
                  <b>Prestador: </b><?=$hist_orden[0]->ternom_t67?> <?=$hist_orden[0]->ternit_t67	?> <?=$hist_orden[0]->terdir_t67?>
                </td>
              </tr>
            <?}?>
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
         <table align="center" border="1" cellspacing="0" width="100%" style='border: 1px solid #ccc'>
          <tr>
            <td width="10%" align="center" ><strong>Procedimiento</strong></td>
            <td width="10%" align="center" ><strong>Examen</strong></td>
            <td width="10%" align="center" ><strong>Referencia</strong></td>
            <td width="10%" align="center" ><strong>Resultado</strong></td>
   
          </tr>  

      

         <?php // foreach ($this->data['examenespk'] as $key => $value) {
          ?>
          <?php foreach ($this->data['examen'] as $fila) { ?>
            <tr style="padding: 10px 0px; margin-bottom: 10px;">
              <td width="10%">    
                <?php echo utf8_encode($fila['descripcion_t67'])."<br>"; ?>
              </td>
              <td width="10%" align="left">
                <?php foreach ($this->data['examenespk'] as $llave => $value): ?>
                    <?php //var_dump($value); ?>
                    <?php $resultado =  count($value); ?>
                    <?php if ($value[0]['procedimiento200'] == $fila['codigo_t67']): ?>
                      <?php  for ($i = 0; $i < $resultado; $i++) { 
                          echo utf8_encode($value[$i]['nombre200'])."<br>";
                      }  ?>
                    <?php endif ?>
                <?php endforeach ?>
              </td>
              <td width="10%" align="center">
                <?php foreach ($this->data['examenespk'] as $llave => $value): ?>
                    <?php  $dol = count($value); ?>
                    <?php if ($value[0]['procedimiento200'] == $fila['codigo_t67']): ?>
                      <?php  for ($i = 0; $i < $dol; $i++) { 
                          echo $value[$i]['referencia200']."<br>";
                      }  ?>
                    <?php endif ?>
                <?php endforeach ?>
              <?php ?></td>
              <td width="10%" align="center">
                <?php foreach ($ex as $key => $value) {
                  $num = count($value);
                  for ($i=0; $i < $num; $i++) { 
                    if ($value[$i]['idcolum6201'] == $fila['idhist_ordenes_t67']) {
                      if (!empty($value[$i]['resultado201'])) {
                        echo $value[$i]['resultado201']."<br>";
                      }
                    }
                  }
                } 
          ?>
              </td>     
            </tr>
          <? }?>
        </table>
        </div>
        <?php echo $resultado; ?>
        
        <br/><br/>
        &nbsp;&nbsp;&nbsp;&nbsp; <img src="<?=FCPATH."/img/frm/".md5($datconsulta->medidentif_t64).".png"?>" alt="<?=$entidad->nombre_t75?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br/>
        <?=$datconsulta->mednomcomp_t64?><br/>
        <?=$datconsulta->medcargo_t64?><br/> 
        REG. <?=$datconsulta->medreg_t64?><br/>
      </div>
      <br><br><br>
      <?=$this->load->view('Genericas/fmto_hmspie');?>
    
  </body>
</html>