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
        <legend>Agregar Fondos (ARP, ARL, EPS...)</legend>
        <div class="form-group">
          <label for="codigo" class="col-lg-3 control-label">Código</label>
          <div class="col-lg-5">
            <input name="codigo" type="text" class="form-control" id="cantidad" placeholder="" value="<?=$idfondo->codigo_t58?>">
          </div>
        </div>
        <div class="form-group">
          <label for="nit" class="col-lg-3 control-label">NIT</label>
          <div class="col-lg-5">
            <input name="nit" type="text" class="form-control" id="cantidad" placeholder="" value="<?=$idfondo->nit_t58?>">
          </div>
        </div>
        <div class="form-group">
          <label for="administradora" class="col-lg-3 control-label">Nombre Administradora</label>
          <div class="col-lg-5">
            <input name="administradora" type="text" class="form-control" id="cantidad" placeholder="" value="<?=$idfondo->administradora_t58?>">
          </div>
        </div>
        <div class="form-group">
          <label for="nombre" class="col-lg-3 control-label">Nombre para Aportes</label>
          <div class="col-lg-5">
            <input name="nombre" type="text" class="form-control" id="cantidad" placeholder="" value="<?=$idfondo->nombre_t58?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tipo" class="col-lg-3 control-label">Tipo</label>
          <div class="col-lg-5">
            <select class="form-control input-sm" name="tipo">
              <?=$this->load->view('gen_menu',$this->Modulo->confmenu($this->Nomfondo->tipofondo,"tipo","tipo",$idfondo->tipo_t58))?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="iderp" class="col-lg-3 control-label">Id ERP</label>
          <div class="col-lg-5">
            <input name="iderp" type="text" class="form-control" id="cantidad" placeholder="" value="<?=$idfondo->iderp_t58?>">
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="row text-center">
            <button type="submit" class="btn bg-navy">Guardar</button>
          </div>
        </div>
        </fieldset>
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