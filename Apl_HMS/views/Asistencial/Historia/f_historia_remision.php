<meta charset="utf-8">
<legend>REFERENCIA Y CONTRAREFERENCIA</legend>

<div class="col-lg-12">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-lg-12"><label for="temp" class="control-label">NOMBRE DEL REFERENTE</label><br></div>
        <div class="col-lg-12"><input name="temp" type="text" class="form-control input-sm" id="temp"  value="<?=$this->Modulo->usr->nombre_t0?>"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-lg-12"><label for="temp" class="control-label">DOCUMENTO</label><br></div>
        <div class="col-lg-12"><input name="temp" type="text" class="form-control input-sm" id="temp"  value="<?=$this->Modulo->usr->identificacion_t0?>"></div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="altura" class="">FECHA DE REFERENCIA</label>
      <input name="altura" type="text" class="form-control input-sm form_date" id="altura"  value="<?=$datconsulta->altura_t64?>">
    </div>
    <div class="col-md-6">
      <label for="fc" class="">QUIEN RECIBE LA REFERENCIA</label>
      <input name="remismedico" type="text" class="form-control input-sm" id="fc"  value="">
    </div>
  </div>
    <br>
    <div class="row">
    <div class="col-lg-4">
      <label for="fr" class="">CARGO</label>
        <input name="remisespec" type="text" class="form-control input-sm" id=" fr"  value="<?php ?>">
    </div>
      <div class="col-lg-4">
            <label for="xxx" >TIPO DE PACIENETE:</label>
            <select class="form-control input-sm" name="remisdestino" >
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
<?php  //var_dump($datconsulta); ?>
<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>INFORMACION DE LA ENFERMEDAD</legend>
      <div class="col-lg-12">
          <?php if (empty($datconsulta->dxprincipal_t64) || !empty($datinca[0]["diag_enfer_inca"] )) {?>
              <label for="xxx">DIAGNOSTICO DE LA ENFERMEDAD</label>
              <input type="text" name="diag_enfer_inca" class="form-control" id="dxrelprincipal" placeholder="" value="<? $datinca[0]["diag_enfer_inca"]?>">
        <?php }else{?>   
               <label for="xxx">DIAGNOSTICO DE LA ENFERMEDAD</label>
              <input type="text" name="diag_enfer_inca" class="form-control" id="dxrelprincipal" placeholder="" value="<? $datconsulta->dxprincipal_t64?>">
            <?php }?>   
          </div>
  <div class="row">
        <div class="col-lg-12">
      <div class="row">
            <div class="col-lg-6">
              <label for="motconsulta" class="col-lg-12 control-label"><h5>Enfermedad Actual</h5></label>
              <textarea name="motconsulta" class="form-control" rows="6" id="motconsulta"><?= $datconsulta->enfermactual_t64 ?></textarea>
            </div>
            <div class="col-lg-6">
              <label for="motconsulta" class="col-lg-12 control-label"><h5>Motivo de Referencia</h5></label>
              <textarea name="motconsulta" class="form-control" rows="6" id="motconsulta"></textarea>
            </div>
      </div>   
      <div class="row">

      </div>      
    </div>
    <div class="row">
      <div class="col-lg-12">
        <legend>INDICACIONES MEDICAS</legend>
      </div>  
      <div class="col-lg-6">
            <div class="col-lg-12 text-center" for="evoldiaria"><b>Indicaciones Medicas/Conducta:</b></div>
          <div class="col-lg-12">
            <textarea class="form-control" rows="6" name="remismotivo" value="<?=$this->Historia->conducta_t15?>"></textarea>
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
