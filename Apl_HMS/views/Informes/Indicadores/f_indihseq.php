<?
  if(!empty($datos->idsgi_usuarios)){
    $readonly = "readonly";
    $disabled = "disabled";
    //var_dump($indicador);
  }
?>
<section class="modal-content">
  <fieldset>
    <legend>Indicadores HSEQ</legend>
    <form class="form-inline" role="form" action="<?=site_url('informes/indhseq/continuar')?>" method="post">
      <div class="form-group">
        <label for="periodo" class="col-lg-2 control-label">Periodo </label>
         <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="fechinicio" type="text" class="form-control form_date" id="perinicio" placeholder="Desde" value="<?=$perinicio?>">
          </div>
         </div>
         <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="fechfin" type="text" class="form-control form_date" id="perinicio" placeholder="Hasta" value="<?=$perfin?>">
          </div>
         </div>
        <div class="col-lg-2">
        <div class="input-group">
          <button type="submit" class="btn bg-navy">Continuar</button>
        </div>
        </div>
      </div>
    </form>
  </fieldset>
<script type="text/javascript">
    $(".form_date").daterangepicker({
        locale: {
          format: 'YYYY-MM-DD'
        },
        showDropdowns: true,
        timePicker: false,
        singleDatePicker:true
    });
</script>
</section>
<section>
  <?if(is_array($indicador)){?>
    <div class="col-lg-4 no-padding no-margin">
        <br><br><br><br><br>
      <?
      if(!empty($indicador)){
        foreach($indicador as $ind){
        ?>        
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:<?=$ind->color_t95?>;color:#FFF"><?=$ind->descripcion_t95?></div>
            <div class="panel-body"><?=$ind->codigo?>    <strong>Total  </strong>  <?=$ind->valor?></div>
        </div>
        <?
      }}
      ?> 
    </table>
    </div>
    <div class="col-lg-8 no-padding no-margin">
        <?=$this->load->view('Informes/Indicadores/v_indhseq','',true);?>
    </div>
  <?}?>
</section>