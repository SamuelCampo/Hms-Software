<?
 
  
?>
    <fieldset>
       <div class="form-group">
         <div class="col-lg-1"></div>
         <label for="fejecucion" class="col-lg-1 control-label">Rango Fecha</label>
         <div class="col-lg-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fecha_desde" type="text" class="form-control form_date" id="fecha_programacion" placeholder="Desde" value="<?=$fechap[0]?>" required>
            </div>
          </div>
         <div class="col-lg-5">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fecha_hasta" type="text" class="form-control form_date" id="fecha_programacion" placeholder="Hasta" value="<?=$fechap[0]?>" required>
            </div>
          </div>
       </div>
      <br/><br/>
      <div class="form-group">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
          <a href="<?=site_url("pacientes/historia/imprimir/historia/".$dathistoria->idps_historia_t4)?>">Historia Clinica</a>
        </div>
        <div class="col-lg-3">
         <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
         <a href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>">Epicrisis</a>
        </div>
        <div class="col-lg-3">
         <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
         <a href="<?=site_url("pacientes/historia/imprimir/remision/".$dathistoria->idps_historia_t4)?>">Remisión</a>
        </div>
        <div class="col-lg-3">
         <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
         <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4)?>">Fórmula</a>
        </div>
       
      </div>
        <div class="form-group">
          <div class="col-lg-1"></div>
          <div class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
            <a href="<?=site_url("pacientes/historia/imprimir/examenes/".$dathistoria->idps_historia_t4)?>">Exámenes</a>
          </div>
          <div class="col-lg-3">
           <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
           <a href="<?=site_url("pacientes/historia/imprimir/incapacidad/".$dathistoria->idps_historia_t4)?>">Incapacidad</a>
          </div>
          <div class="col-lg-3">
           <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
           
          </div>
          <div class="col-lg-3">
           <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>""),true)?>
           
          </div>
          
        </div>
      <br/>       
        <br/><br/>
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" name="formularioenviado" value="imprimir" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Imprimir</button>
        </div>
      </div>
  </fieldset>

<script type="text/javascript">
  
    $(".form_date").datetimepicker({
      format: 'yyyy-mm-dd',
      language:  'es',
      weekStart: 1,

      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
</script>