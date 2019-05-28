<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>COVER TEST</legend>

<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[cover_prisma_con_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">OJO DERECHO</label>
                </div>
<div class="col-lg-12">
<legend align="left">CC.</legend>
</div> 
</div> 
<div class="col-lg-3 ">
<legend align="left">PRISMA</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cover_prisma_vl_ojo_derecho]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->cover_prisma_vl_ojo_derecho?>">
    <br>
  </div>
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[cover_prisma_vl_ojo_izquierdo]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->cover_prisma_vl_ojo_izquierdo?>">
  </div>
<div class="col-lg-1 ">
<legend align="left">KRIMSKY</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cover_krimsky_vl_ojo_derecho]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->cover_krismky_vl_ojo_derecho?>">
    <br>
  </div>
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[cover_krimsky_vl_ojo_izquierdo]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->cover_krismky_vl_ojo_izquierdo?>">
  </div>
<div class="col-lg-1 ">
<legend align="left">ADD. + 3.00 DPTS</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cover_add_vl_ojo_derecho];" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->cover_add_vl_ojo_derecho?>">
    <br>
  </div>
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="     revision[cover_add_vl_ojo_izquierdo];" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->cover_add_vl_ojo_izquierdo?>">
  </div>

<div class="col-lg-12 ">
<legend align="left">SC.</legend>
</div> 
</div> 
<div class="col-lg-3 ">
<legend align="left">PRISMA</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[sc_prisma_vl_ojo_derecho]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->sc_prisma_vl_ojo_derecho?>">
    <br>
  </div>
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[sc_prisma_vl_ojo_izquierdo]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->sc_prisma_vl_ojo_izquierdo?>">
  </div>
<div class="col-lg-1 ">
<legend align="left">KRIMSKY</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[sc_krismy_vl_ojo_derecho]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->sc_krismky_vl_ojo_derecho?>">
    <br>
  </div>
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[sc_krismy_vl_ojo_izquierdo]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->sc_krismky_vl_ojo_izquierdo?>">
  </div>
  <div class="col-lg-1 ">
<legend align="left">ADD. + 3.00 DPTS</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[sc_add_vl_ojo_derecho]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->sc_add_vl_ojo_derecho?>">
    <br>
  </div>
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[sc_add_vl_ojo_izquierdo]" type="text" class="form-control" id="xxx" placeholder="" value="<?= $datoconsulta[0]->sc_add_vl_ojo_izquierdo?>">
  </div> 
   <div class="form-group">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="col-lg-6" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
            </div>
          </div>      

  