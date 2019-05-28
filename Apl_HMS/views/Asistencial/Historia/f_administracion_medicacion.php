<section>
  <fieldset>
    <div class="panel panel-default col-lg-12">
      <div class="panel-body">
        <legend class="no-margin no-padding">
          Historia Clinica No. <?=$dathistoria->idps_historia_t4?> <b><?=$dathistoria->identificacion_t3?> <?=$dathistoria->nomcomp_t3?></b>  <?=$edad?> años
        </legend>
          <div class="form-group">
            <div class="col-lg-3">
              <label class="control-label">Administradora:</label>
              <?=$dathistoria->administradora_t3?>
            </div>
            <div class="col-lg-3">
              <label class="control-label">Servicio:</label>
              <?=$dathistoria->servicio_t4?>URGENCIAS
            </div>
            <div class="col-lg-6">
              <label class="control-label">Dx Principal:</label>
              <?=$dathistoria->diagnostico?>P740 ACIDOSIS METABOLICA TARDIA DEL RECIEN NACIDO
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-3">
              <label class="control-label">F. Ingreso:</label>
              <?=$dathistoria->fingreso_t4?>
            </div>
            <div class="col-lg-3">
              <label class="control-label">Unidad:</label>
              <?=$dathistoria->unidad_t4?>URGENCIAS
            </div>
            <div class="col-lg-3">
              <label class="control-label">Cama:</label>
              <?=$dathistoria->cama_t4?>234
            </div>
            <div class="col-lg-3">
              <label class="control-label">Alergia:</label>
              <?=$dathistoria->alergia?>NO
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              
            </div>
          </div>
        </div>
    </div>
    <div class="row no-padding no-margin">
      <div class="row panel-heading">
          <div class="form-group col-lg-12">
            <p class="text-center">MEDICACIÓN</p>
          </div>
          <div class="col-lg-10">
            <div class="form-group row">
              <label for="nombre1" class="col-lg-2 control-label">Medicamento:</label>
              <div class="col-lg-4">
                <input readonly="" name="nombre1" type="text" class="form-control" id="nombre1" placeholder="Medicamento" value="<?=$empleado->nombre1_t1?>" required>
              </div>
              <label for="nombre2" class="col-lg-2 control-label">Dosis:</label>
              <div class="col-lg-4">
                <input readonly="" name="nombre2" type="text" class="form-control" id="nombre2" placeholder="Dosis" value="<?=$empleado->nombre2_t1?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nombre1" class="col-lg-2 control-label">Frecuencia:</label>
              <div class="col-lg-4">
                <input readonly="" name="nombre1" type="text" class="form-control" id="nombre1" placeholder="Frecuencia" value="<?=$empleado->nombre1_t1?>" required>
              </div>
              <label for="nombre2" class="col-lg-2 control-label">Vía:</label>
              <div class="col-lg-4">
                <input  readonly="" name="nombre2" type="text" class="form-control" id="nombre2" placeholder="Vía" value="<?=$empleado->nombre2_t1?>" required>
              </div>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="form-group row">
              <label for="formula" class="col-lg-2 control-label">Fecha:</label>
              <div class="col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="fecha" type="text" class="form-control form_date" id="fecha" placeholder="Fecha" value="<?=$novedad->finicio_t55?>">
                </div>
              </div>
              <label for="hora" class="col-lg-2 control-label">Hora:</label>
              <div class="col-lg-4">
                <input name="hora" type="text" class="form-control" id="hora" placeholder="Hora" value="<?=$concepto->concepto_t53?>">
              </div>
            </div>
            <div class="form-group row">
               <label for="salario" class="col-lg-2 control-label">¿Administrado?</label>
                <label for="si" class="col-lg-1 control-label">SI</label>
                <div class="col-lg-1">
                  <div class="radio">
                     <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"radio","nombre"=>"constsalario","valor"=>"SI","actual"=>$concepto->constsalario_t53),true)?>
                  </div>
                </div>    
                <label for="no" class="col-lg-1 control-label">NO</label>
                <div class="col-lg-1">
                  <div class="radio">
                     <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"radio","nombre"=>"constsalario","valor"=>"NO","actual"=>$concepto->constsalario_t53),true)?>
                  </div>
                </div> 
           </div>
             </div>
          </div>
             <div class="form-group">
              <div class="row text-center">
                <button type="submit" class="btn bg-navy">Guardar</button>
              </div>
             </div>
           
            </div>
          </div>
      </div>
 </fieldset>
</section>
<script type="text/javascript">
  $("#btnagregar").click(function () {
    $('#plantilla').clone(false).insertAfter("#plantilla");
  });
</script>
