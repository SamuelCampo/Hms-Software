<?
if(!empty($concepto->idsgi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
        <fieldset style="margin:0 1em;">
          <legend>Agregar Concepto</legend>
          <div class="form-group">
            <label for="codigo" class="col-lg-3 control-label">Código</label>
            <div class="col-lg-5">
              <input name="codigo" type="text" class="form-control" id="codigo" placeholder="Codigo" value="<?=$concepto->codigo_t53?>">
            </div>
          </div>
          <div class="form-group">
            <label for="concepto" class="col-lg-3 control-label">Descripción</label>
            <div class="col-lg-5">
              <input name="concepto" type="text" class="form-control" id="descconcepto" placeholder="Descripción" value="<?=$concepto->concepto_t53?>">
            </div>
          </div>
          <div class="form-group">
            <label for="formula" class="col-lg-3 control-label">Fórmula</label>
            <div class="col-lg-5">
              <textarea name="formula" type="text" class="form-control" id="formconcepto" placeholder="Fórmula"><?=$concepto->formula_t53?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="tipoconcepto" class="col-lg-3 control-label">Tipo de Concepto</label>
            <div class="col-lg-5">
              <select name="tipoconcepto" class="form-control" id="tipoconcepto">
                 <?=$this->load->view('gen_menu',$this->Modulo->confmenu($this->Nomconcepto->tipoconcepto,"tipo","tipo",$concepto->tipoconcepto_t53),true)?>
              </select>
            </div>
          </div>
          <div class="form-group">
              <label for="salario" class="col-lg-3 control-label">¿Constituye salario?</label>
              <label for="si" class="col-lg-1 control-label">SI</label>
              <div class="col-lg-1">
              <div class="radio">
                 <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constsalario","valor"=>"SI","actual"=>$concepto->constsalario_t53),true)?>
              </div>
              </div>    
              <label for="no" class="col-lg-1 control-label">NO</label>
              <div class="col-lg-1">
              <div class="radio">
                 <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constsalario","valor"=>"NO","actual"=>$concepto->constsalario_t53),true)?>
              </div>
              </div> 
          </div>
          <div class="form-group">
            <label for="requierecc" class="col-lg-3 control-label">¿Requiere Centro de Costo?</label>
            <label for="si" class="col-lg-1 control-label">SI</label>
              <div class="col-lg-1">
              <div class="radio">
                <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constccosto","valor"=>"SI","actual"=>$concepto->constccosto_t53),true)?>
              </div>
              </div>    
              <label for="no" class="col-lg-1 control-label">NO</label>
              <div class="col-lg-1">
              <div class="radio">
                 <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constccosto","valor"=>"NO","actual"=>$concepto->constccosto_t53),true)?>
              </div>
              </div> 
          </div>
          <div class="form-group">
            <label for="terceroasociado" class="col-lg-3 control-label">¿Tercero asociado al gasto?</label>
              <label for="si" class="col-lg-1 control-label">SI</label>
              <div class="col-lg-1">
              <div class="radio">
                <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constercero","valor"=>"SI","actual"=>$concepto->constercero_t53),true)?>
              </div>
              </div>    
              <label for="no" class="col-lg-1 control-label">NO</label>
              <div class="col-lg-1">
              <div class="radio">
                 <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constercero","valor"=>"NO","actual"=>$concepto->constercero_t53),true)?>
              </div>
              </div>
          </div> 
          <div class="form-group">
            <label for="requierecc" class="col-lg-3 control-label">¿Se procesa automaticamente con la liquidación?</label>
            <label for="si" class="col-lg-1 control-label">SI</label>
              <div class="col-lg-1">
              <div class="radio">
                <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constliquidacion","valor"=>"SI","actual"=>$concepto->constliquidacion_t53),true)?>
              </div>
              </div>    
              <label for="no" class="col-lg-1 control-label">NO</label>
              <div class="col-lg-1">
              <div class="radio">
                 <?=$this->load->view('gen_radio_check',array("tipo"=>"radio","nombre"=>"constliquidacion","valor"=>"NO","actual"=>$concepto->constliquidacion_t53),true)?>
              </div>
              </div> 
          </div>
          <div class="form-group">
              <label for="cuentadeb" class="col-lg-3 control-label">Cuenta Debito</label>
              <div class="col-lg-5">
                  <input name="cuentadeb" type="text" class="form-control" id="cuentadeb" placeholder="Cuenta Debito" value="<?=$concepto->cuentadeb_t53?>">
              </div>
          </div>
          <div class="form-group">
              <label for="cuentacred" class="col-lg-3 control-label">Cuenta Crédito</label>
              <div class="col-lg-5">
                  <input name="cuentacred" type="text" class="form-control" id="cuentacred" placeholder="Cuenta Credito" value="<?=$concepto->cuentacred_t53?>">
              </div>
          </div>
          <div class="form-group">
          <div class="panel panel-default col-lg-12">
              <div class="panel-body">
                <div class="row">
                  <label for="" class="col-lg-4 control-label">Centro de Costo</label>
                  <label for="" class="col-lg-3 control-label">Cuenta Debito</label>
                  <label for="" class="col-lg-3 control-label">Cuenta Crédito</label>
                  <label for="" class="col-lg-2 control-label">
                    <a id="btnagregar" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
                  </label>
                </div>
                <div class="form-group no-padding" id="plantilla">
                  <div class="col-lg-4">
                    <select class="form-control" name="detalle[ccosto][]">
                      <?=$this->load->view('gen_menu',$this->Modulo->confmenu($this->Ccosto->listar(),"codigo_t17","ccosto_t17"),true)?>
                    </select>
                  </div>
                  <div class="col-lg-3">
                    <input name="detalle[cuentadeb][]" type="text" class="form-control" id="ctagral" placeholder="Cuenta" value="">
                  </div>
                  <div class="col-lg-3">
                    <input name="detalle[cuentacred][]" type="text" class="form-control" id="ctagral" placeholder="Cuenta" value="">
                  </div>
                  <div class="col-lg-2" onclick="$(this).parent().remove();">
                    <eliminar class="btn bg-navy btn-xs">
                      <span class="glyphicon glyphicon-trash btneliminar"></span>
                    </eliminar>
                  </div>
                </div>
                <?
                if(is_array($concepto->detalle)){
                  foreach($concepto->detalle as $detalle){
                    ?>
                    <div class="form-group no-padding" id="plantilla">
                      <div class="col-lg-4">
                        <input name="detalle[ccosto][]" type="text" class="form-control" id="ctagral" placeholder="Cuenta" value="<?=$detalle->ccosto_t54?>" readonly>
                      </div>
                      <div class="col-lg-3">
                        <input name="detalle[cuentadeb][]" type="text" class="form-control" id="ctagral" placeholder="Cuenta" value="<?=$detalle->cuentadeb_t54?>" readonly>
                      </div>
                      <div class="col-lg-3">
                        <input name="detalle[cuentacred][]" type="text" class="form-control" id="ctagral" placeholder="Cuenta" value="<?=$detalle->cuentacred_t54?>" readonly>
                      </div>
                      <div class="col-lg-2" onclick="$(this).parent().remove();">
                        <eliminar class="btn bg-navy btn-xs">
                          <span class="glyphicon glyphicon-trash btneliminar"></span>
                        </eliminar>
                      </div>
                    </div>
                    <?
                  }
                }
                ?>
              </div>
          </div>
          </div>
        </fieldset>
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
  $("#btnagregar").click(function () {
    $('#plantilla').clone(false).insertAfter("#plantilla");
  });
</script>