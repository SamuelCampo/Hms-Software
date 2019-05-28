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
    <label for="descripcion" class="col-lg-4 control-label">Servicio</label>  
    <div class="col-lg-6">
     <select name="descripcion" class="form-control input-sm" id="descripcion" required>
       <option></option>
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_servicios,"destino","destino",$servicio->descripcion_t74),true)?>
     </select>
    </div>
  </div>
  <div class="form-group">
    <label for="codigo" class="col-lg-4 control-label">Código</label>  
    <div class="col-lg-6">
     <input name="codigo" type="text" class="form-control input-sm" id="codigo" placeholder="Código" value="<?=$servicio->codigo_t74?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="censo" class="col-lg-4 control-label">Descripción Censo</label>  
    <div class="col-lg-6">
     <input name="censo" type="text" class="form-control input-sm" id="censo" placeholder="Descripción Censo" value="<?=$servicio->censo_t74?>" required>
    </div>
  </div>
  <div class="form-group">
     <div class="row text-center">
      <br/>
       <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
     </div>
  </div>
</form>
</div>
  </div>
</div>
    