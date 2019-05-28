<meta charset="utf-8">
<legend>REFERENCIA Y CONTRAREFERENCIA</legend>

<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>INFORMACION DE REFERENCIA Y CONTRAREFERENCIA</legend>
      </div>
  <div class="form-group row">
      <label for="altura" class="col-lg-1 control-label">FECHA DE REFERENCIA</label>
      <div class="col-lg-5">
        <input name="altura" type="text" class="form-control input-sm" id="altura"  value="<?=$datconsulta->altura_t64?>">
      </div>

      <label for="peso" class="col-lg-1 control-label">HORA DE REFERENCIA</label>
      <div class="col-lg-5">
        <input name="peso" type="text" class="form-control input-sm" id="peso"  value="<?=$datconsulta->peso_t64?>">
      </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-lg-12"><label for="temp" class="control-label">NOMBRE DEL REFERENTE</label><br></div>
        <div class="col-lg-12"><input name="temp" type="text" class="form-control input-sm" id="temp"  value="<?=$datconsulta->temp_t64?>"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-lg-12"><label for="temp" class="control-label">DOCUMENTO</label><br></div>
        <div class="col-lg-12"><input name="temp" type="text" class="form-control input-sm" id="temp"  value="<?=$datconsulta->temp_t64?>"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12"><label for="fc" class="control-label">QUIEN RECIBE LA REFERENCIA</label></div>
    <div class="col-md-12"><input name="fc" type="text" class="form-control input-sm" id="fc"  value="<?=$datconsulta->fc_t64?>"></div>
  </div>
  
  <div class="col-lg-12">
    <div class="row">
    <div class="col-lg-4">
    <div class="form-group">
      <label for="fr" class=" control-label">CARGO</label>
        <input name="fr" type="text" class="form-control input-sm" id=" fr"  value="<?=$datconsulta->fr_t64?>">
    </div>
    </div>
      <div class="col-lg-4">
            <label for="xxx" >TIPO DE PACIENETE:</label>
            <select class="form-control input-sm" name="motivo_inca" >
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["Tipo de Paciente"]?> </option>
              <option value="MEDICINA GENERAL">AMBULATORIO</option>
              <option value="MATERNIDAD">URGENCIA</option>
              <option value="ENFERMEDAD PROFESIONAL">HOSPITALIZACION</option>
              <option value="ENFERMEDAD LABORAL">UNIDAD DE CUIDADOS INTENSIVOS</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>

      <div class="col-lg-4">
            <label for="xxx" >TIPO DE ATENCION:</label>
            <select class="form-control input-sm" name="tipo_inca" >
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["tipo_inca"]?> </option>
              <option value="AMBULATORIA">ELECTIVA</option>
              <option value="DEFINITIVA">ELECTIVA PRIORITARIA</option>
              <option value="OTRO">URGENCIA</option>
            </select>
            <br>
        </div>
  </div>
</div>

<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>INFORMACION DE LA ENFERMEDAD</legend>
      </div>

      <div class="col-lg-12">
          <?php if (empty($datconsulta->dxprincipal_t64) || !empty($datinca[0]["diag_enfer_inca"] )) {?>
              <label for="xxx">DIAGNOSTICO DE LA ENFERMEDAD</label>
              <input type="text" name="diag_enfer_inca" class="form-control" id="dxprincipal" placeholder="" value="<? $datinca[0]["diag_enfer_inca"]?>">
        <?php }else{?>   
               <label for="xxx">DIAGNOSTICO DE LA ENFERMEDAD</label>
              <input type="text" name="diag_enfer_inca" class="form-control" id="dxprincipal" placeholder="" value="<? $datconsulta->dxprincipal_t64?>">
            <?php }?>   
          </div>

<div class="row">
            <div class="col-lg-6">
              <h4 class="text-center">Antecedentes</h4>
              <input type="hidden" name="antecedentes[PATOLOGICOS][tipo]" value="PATOLOGICOS" />
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][hospitalizacion]","valor"=>"SI","actual"=>$datconsulta->hospitalizacion_t66),true)?>
                  <label for="hospitalizacion" class="control-label">Hospitalizaciones</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][emergencia]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">Emergencias</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][cronicas]","valor"=>"SI","actual"=>$datconsulta->cronicas_t66),true)?>
                  <label for="cronicas" class="control-label">Enf.Crónicas</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][venerias]","valor"=>"SI","actual"=>$datconsulta->venerias_t66),true)?>
                  <label for="venerias" class="control-label">Enf.Venereas</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][cardiopatias]","valor"=>"SI","actual"=>$datconsulta->cardiopatias_t66),true)?>
                  <label for="cardiopatias" class="control-label">Cardiopatias</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][alergiaalim]","valor"=>"SI","actual"=>$datconsulta->alergiaalim_t66),true)?>
                  <label for="alergiaalim" class="control-label">Alergia Alimentaria</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][alergias]","valor"=>"SI","actual"=>$datconsulta->transfusion_t66),true)?>
                  <label for="alergias" class="control-label">Transfusiones</label>
                </div>
              </div>
              <br/>
            </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
                <label for="motconsulta" class="col-lg-12 control-label"><h5>Motivo de consulta:</h5></label>
            <div class="col-lg-12">
              <textarea name="motconsulta" class="form-control" id="motconsulta"><?=$datconsulta->motconsulta_t64?></textarea>
            </div>
      </div>
    </div>
        <div class="col-lg-12">
      <div class="row">
                <label for="motconsulta" class="col-lg-12 control-label"><h5>Descripción</h5></label>
            <div class="col-lg-12">
              <textarea name="motconsulta" class="form-control" id="motconsulta"><?=$datconsulta->motconsulta_t64?></textarea>
            </div>
      </div>
      <div class="row">
                <label for="motconsulta" class="col-lg-12 control-label"><h5>Enfermedad Actual</h5></label>
            <div class="col-lg-12">
              <textarea name="motconsulta" class="form-control" id="motconsulta"></textarea>
            </div>
      </div>   
      <div class="row">
                <label for="motconsulta" class="col-lg-12 control-label"><h5>Motivo de Referencia</h5></label>
            <div class="col-lg-12">
              <textarea name="motconsulta" class="form-control" id="motconsulta"></textarea>
            </div>
      </div>      
    </div>
    <div class="row">
      <div class="col-lg-12">
        <legend>INDICACIONES MEDICAS</legend>
      </div>  
      <div class="col-lg-6">
            <div class="col-lg-12 text-center" for="evoldiaria"><b>Indicaciones Medicas/Conducta:</b></div>
          <div class="col-lg-12">
            <textarea class="form-control" rows="6" name="conducta" value="<?=$this->Historia->conducta_t15?>"></textarea>
          </div>
      </div>
      <div class="col-lg-6">
            <div class="col-lg-12 text-center" for="evoldiaria"><b>Justificación:</b></div>
         <div class="col-lg-12">
           <textarea class="form-control" rows="6" name="justificacion" value="<?=$this->Historia->justificacion_t15?>"></textarea>
         </div>
      </div>
    </div>

<div class="col-lg-12">
    
<fieldset>
  <div class="form-group col-lg-6">

  </div>
   <div class="form-group col-lg-6">

  </div>
          <div class="col-lg-12">
              <label for="xxx">OBSERVACIONES</label>
              <input type="text" name="obser_inca" class="form-control" id="xxx" placeholder="" value="<? $datinca[0]["obser_inca"]?>">
          <br>
          </div>
        
  </div>
</div>
