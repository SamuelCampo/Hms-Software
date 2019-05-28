<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
        <fieldset style="margin:0 1em;">
          
         <legend>Convenios</legend>
          
          <div class="form-group">
            <label for="eps" class="col-lg-2 control-label">Nombre eps:</label>
            <div class="col-lg-5">
              <input name="eps" type="text" class="form-control" id="eps" placeholder="Nombre Eps" value="">
            </div>
          </div>
          <legend>Tarifas</legend>
           
          <div class="form-group">
            <label for="estancia" class="col-lg-2 control-label">Estancia</label>
            <div class="col-lg-2">
              Descuento %<input name="descuento" type="text" class="form-control" id="descuento" placeholder="Descuento" value="">
            </div>
            <label for="laboratorio" class="col-lg-2 control-label">Laboratorios</label>
            <div class="col-lg-2">
              Descuento %<input name="laboratorio" type="text" class="form-control" id="laboratorio" placeholder="Laboratorios" value="">
            </div>
          </div>
        
          <div class="form-group">
            <label for="medicamentos" class="col-lg-2 control-label">Medicamentos</label>
            <div class="col-lg-2">
              Descuento %<input name="medicamentos" type="text" class="form-control" id="medicamentos" placeholder="Medicamentos" value="">
            </div>
            <label for="insumos" class="col-lg-2 control-label">Insumos</label>
            <div class="col-lg-2">
              Descuento %<input name="insumos" type="text" class="form-control" id="insumos" placeholder="Insumos" value="">
            </div>
          </div>
          
           <div class="form-group">
            <label for="ayudas_diagnosticas" class="col-lg-2 control-label">Ayudas Diagnosticas</label>
            <div class="col-lg-2">
              Descuento %<input name="ayudas_diagnosticas" type="text" class="form-control" id="ayudas_diagnosticas" placeholder="Insumos" value="">
            </div>
             <label for="ayudas_terapeuticas" class="col-lg-2 control-label">Ayudas Terapeuticas</label>
            <div class="col-lg-2">
              Descuento %<input name="ayudas_terapeuticas" type="text" class="form-control" id="ayudas_terapeuticas" placeholder="Insumos" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label for="pronto_pago" class="col-lg-2 control-label">Pronto Pago</label>
            <div class="col-lg-2">
              Descuento %<input name="pronto_pago" type="text" class="form-control" id="pronto_apago" placeholder="Pronto Pago" value="">
            </div>
            <label for="cirugias" class="col-lg-2 control-label">Cirugías</label>
            <div class="col-lg-2">
              Descuento %<input name="cirugias" type="text" class="form-control" id="cirugias" placeholder="Cirugías" value="">
            </div>
          </div>
          
          <div class="form-group">
            <label for="paquetes" class="col-lg-2 control-label">Paquetes</label>
            <div class="col-lg-2">
              Descuento %<input name="paquetes" type="text" class="form-control" id="paquetes" placeholder="paquetes" value="">
            </div>
             <label for="procedimientos" class="col-lg-2 control-label">Procedimientos</label>
            <div class="col-lg-2">
              Descuento %<input name="procedimientos" type="text" class="form-control" id="procedimientos" placeholder="Procedimientos" value="">
            </div>
          </div>
                   
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
    


 
  