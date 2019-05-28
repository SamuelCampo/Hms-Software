<script type="text/javascript">
function validacion() {
  
  valor = document.getElementById("descripcion").value;
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ){
    alert('[ERROR]  Ingrese una Descripcion');
    return false;
  }
    valor = document.getElementById("edificio").value;
   if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ){
    alert('[ERROR]  Ingrese Edificio');
    return false;
  }
    valor = document.getElementById("piso").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ){
    alert('[ERROR]  Ingrese Piso');
    return false;
  }
  indice = document.getElementById("servicio").selectedIndex;
  if( indice == null || indice == 0 ) {
     alert('[ERROR]  Seleccione un Estado ');
   return false;
   }
    valor = document.getElementById("piso").value;
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ){
    alert('[ERROR]  Ingrese Piso');
    return false;
  }
  valor = document.getElementById("numcubic").value;
  if( isNaN(valor) ) {
    alert('[ERROR]  Ingrese valor numerico para Cubiculo');
   return false;
  }
       
  }
</script>

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">

<div class="form-group">
   <label for="descripcion" class="col-lg-4 control-label">Descripción</label>
   <div class="col-lg-8">
     <input <?=$readonly?> name="descripcion" type="text" class="form-control input-sm" id="descripcion" placeholder="Descripcion" value="<?=$estructura->descripcion_t8?>" required>
   </div>
</div>

<div class="form-group">
    <label for="edificio" class="col-lg-4 control-label">Edificio</label>
    <div class="col-lg-8">
      <input name="edificio" type="text" class="form-control input-sm" id="edificio" placeholder="Edificio" value="<?=$estructura->edificio_t8?>" required>
    </div>
</div>
        
<div class="form-group">
     <label for="piso" class="col-lg-4 control-label">Piso</label>
     <div class="col-lg-8">
        <input name="piso" type="text" class="form-control input-sm" id="piso" placeholder="Piso" value="<?=$estructura->piso_t8?>" required>
     </div>
</div>

<div class="form-group">
      <label for="servicio" class="col-lg-4 control-label">Servicio</label>
      <div class="col-lg-8">
        <select class="form-control input-sm" name="servicio"  id="servicio" placeholder="Servicio" required>
          <option value="">Seleccione un Servicio</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_servicios,"destino","destino",$estructura->servicio_t8))?>
        </select>
       </div>
</div>
        
<div class="form-group">
     <label for="numcubic" class="col-lg-4 control-label">Cubiculos</label>
     <div class="col-lg-8">
       <input name="numcubic" type="text" class="form-control input-sm" id="numcubic" placeholder="Cubiculos" value="<?=$estructura->numcubic_t8?>" required>
     </div>
</div>
<div class="form-group">
     <label for="piso" class="col-lg-4 control-label">Camas</label>
     <div class="col-lg-8">
        <input name="camas" type="number" min="0" class="form-control input-sm" id="piso" placeholder="Piso" value="<?=$estructura->piso_t8?>" required>
     </div>
</div>
  <div class="form-group">
     <label for="dispagenda" class="col-lg-4 control-label">Disponible para Agenda</label>
     <div class="col-lg-8">
       <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"dispagenda","valor"=>"1","actual"=>$estructura->dispagenda_t8),true)?>
     </div>
</div>
<div class="form-group">
     <div class="row text-center">
        <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?> "onclick="return validacion()" >Guardar</button>
     </div>
</div>
  
</form>
</div>
</div>
</div>