<?
if(!empty($datos->idsgi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
        <fieldset style="margin:0 1em;">
        <legend>Agregar Novedad</legend>
        <div class="form-group">
          <label for="empleado" class="col-lg-3 control-label">Nombre del Empleado</label>
          <div class="col-lg-5">
            <select class="form-control" name="idempleado">
              <?=$this->load->view('gen_menu',$this->Modulo->confmenu($this->Empleado->listar(),"identificacion_t1","nomcomp_t1",$novedad->idempleado_t55),true)?>
            </select>  
          </div>
        </div>
        <div class="form-group">
          <label for="concepto" class="col-lg-3 control-label">Concepto</label>
          <div class="col-lg-5">
            <select class="form-control" name="idnom_conceptos">
              <?=$this->load->view('gen_menu',$this->Modulo->confmenu($this->Nomconcepto->listar(),"idnom_conceptos_t53","concepto_t53",$novedad->idnom_conceptos_t55),true)?>
            </select>  
          </div>
        </div>
        <div class="form-group">
          <label for="periodo" class="col-lg-3 control-label">Periodo</label>
          <div class="col-lg-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="periodo" type="text" class="form-control form_date" id="finicio" placeholder="Periodo" value="<?=$novedad->periodo_t55?>">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="desde" class="col-lg-3 control-label">Desde:</label>
           <div class="col-lg-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="finicio" type="text" class="form-control form_date" id="finicio" placeholder="Desde" value="<?=$novedad->finicio_t55?>">
            </div>
           </div>
          <label for="fsol" class="col-lg-1 control-label">Hasta:</label>
           <div class="col-lg-2">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="ffinal" type="text" class="form-control form_date" id="ffinal" placeholder="Hasta" value="<?=$novedad->ffinal_t55?>">
            </div>
           </div>
        </div>
        <div class="form-group">
          <label for="nhoras" class="col-lg-3 control-label">Cantidad</label>
          <div class="col-lg-5">
            <input name="cantidad" type="text" class="form-control" id="cantidad" placeholder="" value="<?=$novedad->cantidad_t55?>">
          </div>
        </div>
        <div class="form-group">
          <label for="valor" class="col-lg-3 control-label">Valor</label>
          <div class="col-lg-5">
            <input name="valor" type="text" class="form-control" id="valor" placeholder="valor" value="<?=$novedad->valor_t55?>">
          </div>
        </div>
        
        <br>
        <div class="form-group">
          <div class="row text-center">
            <button type="submit" class="btn bg-navy">Guardar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="row"></div>
  </div>
</div>
<script type="text/javascript">
    $(".form_date").datetimepicker({
      format: 'yyyy-mm-dd',
      language:  'es',
      weekStart: 1,
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
</script>