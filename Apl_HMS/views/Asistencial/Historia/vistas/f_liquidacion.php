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
        <legend>Liquidación</legend>
        <div class="form-group">
          <label for="empleado" class="col-lg-3 control-label">Por:</label>
          <div class="col-lg-5">
                  <select name="por" class="form-control" id="por">
                     <option id="EMPLEADO">EMPLEADO</option>                  
                      <option id="EMPRESA">EMPRESA</option>                  
                      
                  </select>
          </div>
        </div>
        <div class="form-group">
          <label for="empleado" class="col-lg-3 control-label">Nombre del Empleado</label>
          <div class="col-lg-5">
                <select class="form-control" name="empleado">
                  <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Empleado->listar(),"identificacion_t1","nomcomp_t1"),true)?>
                </select>  
          </div>
        </div>
        <div class="form-group">
            <label for="empleado" class="col-lg-4 control-label">Preliquidación</label>
            <div class="col-lg-1">
            <div class="radio">
               <input type="radio" name="opciones" id="preliquid" value="si" checked>
            </div>
            </div>    
            <label for="empleado" class="col-lg-2 control-label">Liquidación Definitiva</label>
            <div class="col-lg-1">
            <div class="radio">
               <input type="radio" name="opciones" id="definitiva" value="definitiva">
            </div>
            </div> 
        </div>
        <br>
        <div class="form-group">
          <div class="row text-center">
            <button type="submit" class="btn bg-navy">Ejecutar</button>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60"
               aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
            <span class="sr-only">60% completado</span>
          </div>
        </div>
        <span class="glyphicon glyphicon-cloud-download"></span>
       
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