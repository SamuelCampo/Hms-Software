<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<div class="col-lg-12">
<legend>LENSOMETRIA </legend>
</div>

<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">OJO DERECHO</label>
                </div>
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label">TIPO DE LENTE</label>
                <div class="col-lg-5">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              

<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">OJO IZQUIERDO</label>
                </div>
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label">TIPO DE LENTE</label>
                <div class="col-lg-5">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
            