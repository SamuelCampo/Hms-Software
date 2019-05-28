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
        <legend>Agregar Novedad Periodica</legend>
         <div class="form-group">
              <label for="valor" class="col-lg-3 control-label">Rango de Fechas en que será aplicada:</label>
              <label for="fsol" class="col-lg-1 control-label">Desde:</label>
               <div class="col-lg-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="desde" type="text" class="form-control form_date" id="freali" placeholder="Desde" value="<?=$desde?>">
                </div>
               </div>
              <label for="fsol" class="col-lg-1 control-label">Hasta:</label>
               <div class="col-lg-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="hasta" type="text" class="form-control form_date" id="freali" placeholder="Hasta" value="<?=$hasta?>">
                </div>
               </div>
        </div>
        <br>
        <div class="form-group">
          <label for="empleado" class="col-lg-3 control-label">Nombre del Empleado</label>
          <div class="col-lg-5">
                <select class="form-control" name="idempleado">
                  <?=$this->load->view('gen_menu',$this->Modulo->confmenu($this->Empleado->listar(),"identificacion_t1","nomcomp_t1"),true)?>
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
              <label for="fsol" class="col-lg-3 control-label">Desde:</label>
               <div class="col-lg-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="finicio" type="text" class="form-control form_date" id="freali" placeholder="Desde" value="<?=$finicio?>">
                </div>
               </div>
              <label for="fsol" class="col-lg-1 control-label">Hasta:</label>
               <div class="col-lg-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="ffinal" type="text" class="form-control form_date" id="freali" placeholder="Hasta" value="<?=$ffinal?>">
                </div>
               </div>
        </div>
        <div class="form-group">
          <label for="nhoras" class="col-lg-3 control-label">Número de Horas</label>
          <div class="col-lg-5">
            <input name="horas" type="text" class="form-control" id="nhoras" placeholder="Número de Horas" value="<?=$datos->horas_t56?>">
          </div>
        </div>
        <div class="form-group">
          <label for="valor" class="col-lg-3 control-label">Valor</label>
          <div class="col-lg-5">
            <input name="valor" type="text" class="form-control" id="valor" placeholder="valor" value="<?=$datos->valor_t56?>">
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