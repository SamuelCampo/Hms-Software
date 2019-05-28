<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>AGUDEZA VISUAL</legend>

<div class="col-lg-12">
<legend align="left">AV VL</legend>
</div> 

<div class="col-lg-12 ">
<legend align="left">VL</legend>
</div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[agudeza_sin_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">SIN CORRECCION</label>
                </div>
  <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_texto_sin_correccion]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_texto_sin_correccion?></textarea>
                </div>
              </div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[agudeza_con_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">CON CORRECCION</label>
                </div>
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_texto_con_correccion]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_texto_con_correccion?></textarea>
                </div>
              </div>
</div>
<div class="col-lg-12">
<legend align="left">VP</legend>
</div> 

<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[agudeza_vp_sin_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">SIN CORRECCION</label>
                </div>
  <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza__texto_vp_sin_correccion]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza__texto_vp_sin_correccion?></textarea>
                </div>
              </div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[agudeza_vp_con_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">CON CORRECCION</label>
                </div>
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_vp_con_correccion]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_vp_con_correccion?></textarea>
                </div>
              </div>
            