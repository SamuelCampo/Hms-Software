<?
  $numorden = $this->uri->segment(6);
  //var_dump($cupsprod);
?>
<form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
  <input type="hidden" name="numorden" value="<?=$numorden?>" />
  
  <?if($cupsprod->tiposervicio_t63=='TERA'){?>
    <input type="hidden" name="tipoevol" value="TERAPIAS" />
  <?}?>
  
  <fieldset>
  <?if(!empty($datconsulta->conducta_t64) || !empty($datconsulta->planmanejo_t64)){?>
    <div class="col-lg-12">
        <div class='col-lg-6'>
          <legend><strong>Conducta</strong></legend>
          <div class="well"><?=$datconsulta->conducta_t64?></div>
        </div>
        <div class='col-lg-6'>
          <legend><strong>Plan de Manejo</strong></legend>
          <div class="well"><?=$datconsulta->planmanejo_t64?></div>
        </div>
    </div>
    <?}?>
    <div class="well col-lg-12"><?=$proc->especialidad_t67?> <?=$proc->descripcion_t67?> Pend: <?=$proc->cantidadpen_t67?></div>
    <div class="row col-lg-12">
      <div class="form-group">
        <div class="col-lg-6">        
          <label for="dxprincipalcod">DX Principal</label>
          <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
          <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
        </div>
        <div class="col-lg-6">        
          <label for="dxrelprincipalcod">DX Relacionado con el Principal</label>
          <input name="dxrelprincipal" type="text" class="form-control" id="dxrelprincipal" placeholder="Dx Relacionado con principal" value="<?=$datconsulta->dxrelprincipal_t64?>">
          <input name="dxrelprincipalcod" type="hidden" id="dxrelprincipalcod" value="<?=$datconsulta->dxrelprincipalcod_t64?>">  
        </div>
     </div>
      <div class="form-group">
        <div class='col-lg-6'>
             <legend><strong>Objetivos</strong></legend>
             <div class="form-group">
               <div class="col-lg-12">
                <textarea class="form-control" name="objetivos" rows="6" required><?=$proc->objetivos_t67?></textarea>
              </div>
             </div>
         </div>
         <div class='col-lg-6'>
             <legend><strong>Conducta</strong></legend>
             <div class="form-group">
               <div class="col-lg-12">
                <textarea class="form-control" name="conducta" rows="6" required><?=$proc->conducta_t67?></textarea>
              </div>
             </div>
         </div>
         <div class='col-lg-6'>
             <legend><strong>Plan de Manejo</strong></legend>
             <div class="form-group">
               <div class="col-lg-12">
                <textarea class="form-control" name="planmanejo" rows="6" required><?=$proc->planmanejo_t67?></textarea>
              </div>
             </div>
         </div>
         <?php if ($this->db->database = "hms_ERGOVIDA"): ?>
           
         
         <div class='col-lg-6'>
             <legend><strong>Fecha</strong></legend>
             <div class="form-group">
               <div class="col-lg-12">
                <input type="text" class="form-control fechas_date" name="fechaO" readonly required>
              </div>
             </div>
         </div>
         <?php endif ?>
      </div>
    </div>
    <div class="col-lg-12">
      <legend>Actividades Realizadas</legend>
      <?=$this->load->view('Asistencial/Historia/f_historia_evolucorden_tera','',true);?>
    </div>
    <div class="row col-lg-10">  
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" name="formularioenviado" value="evlucorden" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
    </div>
  </fieldset>
</form>