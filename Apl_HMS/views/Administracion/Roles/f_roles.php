<script type="text/javascript">

function validacion() {
  valor = document.getElementById("rol").value;
 if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) 
 {
    alert('[ERROR] Ingrese un Rol');
    return false;

  }
    valor = document.getElementById("codrol").value;
 if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) 
 {
    alert('[ERROR] Ingrese un Codigo');
    return false;

  }
  }
</script>

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
  <div class="form-group">
    <label for="rol" class="col-lg-4 control-label">Rol</label>
    <div class="col-lg-8">
      <input name="rol" type="text" class="form-control input-sm" id="rol" placeholder="Rol" value="<?=$datrol->rol_t2?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <label for="codigo" class="col-lg-4 control-label">Codigo</label>
    <div class="col-lg-8">
      <input name="codrol" type="text" class="form-control input-sm" id="codrol" placeholder="Rol" value="<?=$datrol->codrol_t2?>" required>
    </div>
  </div>
  
  <div class="form-group">
    <div class="row text-center">
      <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" onclick="return validacion()">Guardar</button>
    </div>
  </div>
  
</form>
</div>
<div class="row"></div>
</div>
</div>