<?
  $numorden = $this->uri->segment(6);
  //var_dump($ord);
?>
<form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
  <input type="hidden" name="numorden" value="<?=$numorden?>" />
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
  <div class="col-lg-12">
    <div class="col-lg-4"><label>Descripción</label></div>
    <div class="col-lg-8"><label>Observación</label></div>
  </div>
  <div class="col-lg-12">
    <?
        // debug($proc);
      if(isset($proc)){
    
        // foreach($proc as $regord){
          ?>
          <div class="col-lg-4"><label><?=$proc->descripcion_t67?></label></div>
          <div class="col-lg-8">
            <textarea class="form-control" name="evoluord[<?=$proc->idhist_ordenes_t67?>]" rows="10" ><?=$proc->observacion_t67?></textarea>
          </div>
        <?
      // }
      }
    ?>
  </div>
  
  <div class="form-group">
    <div class="row text-center">
     <button type="submit" name="formularioenviado" value="evlucorden" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>
</form>