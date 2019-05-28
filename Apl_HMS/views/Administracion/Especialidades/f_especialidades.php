<?
if(!empty($especialidades->idps_especialidades_t9)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
    
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form  class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" >
    <div class="form-group">
    <label for="especialidades" class="col-lg-4 control-label">Especialidad</label>
    <div class="col-lg-8">
      <input name="especialidades" type="text" class="form-control input-sm" id="Especialidades" placeholder="Especialidad"  value="<?=$especialidades->especialidades_t9?>" required>
    </div>
    </div>
    <div class="form-group">
    <div class="row text-center">
    <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" onclick="return validacion()">Guardar</button>
    </div>
    </div>
</form>
</div>
  </div>
</div>
    <script type="text/javascript">

function validacion() {
  valor = document.getElementById("Especialidades").value;
 if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) 
 {
    alert('[ERROR] Ingrese una Especialidad');
    return false;

  }
  }
</script>
