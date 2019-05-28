<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <legend class="no-padding no-margin">Asistente de Facturación</legend>
  <?
    if(!empty($mensaje)){
      echo '<div class="row no-padding no-margin"><div class="well alert msjlista">'.$mensaje.'</div></div>';
    }
  ?>
<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
  <div class="row">
  <div class="col-lg-8">
  <div class="form-group">
    <label for="fecha" class="col-lg-3 control-label">Fecha</label>
    <div class="col-lg-4">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="fdesde" type="text" class="form-control form_date" id="fdesde" placeholder="Desde" value="" required>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="fhasta" type="text" class="form-control form_date" id="fhasta" placeholder="Hasta" value="<?=$fechasol?>" required>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="convenio" class="col-lg-3 control-label">Convenio o Aseguradora</label>
    <div class="col-lg-8">
      <select name="administradoracod" class="form-control input-sm" value="" required>
       <option></option> 
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->administradoras_listar(),"codministerio_t70","nombre_t70",$datpaciente->administradoracod_t3))?>
     </select>
    </div>
  </div>
  <div class="form-group">
    <label for="historia" class="col-lg-3 control-label">Por Historia:</label>
    <div class="col-lg-8">
     <input name="historia" type="text" class="form-control input-sm" id="historia" placeholder="Por Historia" value="<?=$servicio->censo_t74?>">
    </div>
  </div>
  
  </div>
  <div class="col-lg-4">
    <div class="form-group">
    <label for="ctacobro" class="col-lg-5 control-label">Cuenta de Cobro:</label>
     <div class="col-lg-1">
      <label class="checkbox-inline">
          <input type="checkbox" name="ctacobro" value="SI">
      </label>
     </div>
  </div>
  <div class="form-group">
    <label for="fconsolidada" class="col-lg-5 control-label">Facturación Consolidada:</label>
     <div class="col-lg-1">
      <label class="checkbox-inline">
          <input type="checkbox" name="fconsolidada" value="SI">
      </label>
     </div>
  </div> 
  <div class="form-group">              
    <label for="findividual" class="col-lg-5 control-label">Facturación Individual:</label>
     <div class="col-lg-1">
      <label class="checkbox-inline">
          <input type="checkbox" name="findividual" value="SI">
      </label>
     </div>
  </div> 
  </div>
  </div>  
  <div class="form-group">
    <div class="row text-center">        
      <button type="submit" class="btn bg-navy">
        <span class="glyphicon glyphicon-filter"></span>
         Filtrar
      </button>
    </div>
  </div>
  
</form>
</div>
</div>
</div>

  


