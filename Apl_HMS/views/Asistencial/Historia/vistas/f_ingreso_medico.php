<fieldset>
 <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" onsubmit="">
<div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_motivo" data-toggle="tab">Motivo de ingreso</a></li>
      <li><a href="#tab_antecedentes" data-toggle="tab">Antecedentes</a></li>
       <li><a href="#tab_examen_fisico" data-toggle="tab">Examén Físico</a></li>
       <li><a href="#tab_plan_tratamiento" data-toggle="tab">Plan de tratamiento</a></li>  
        <li><a href="#tab_impresion" data-toggle="tab">Impresión Diagnostica </a></li>
      </ul>
  
<div class="tab-content">
<div class="tab-pane active" id="tab_motivo">
    
      <div class="row">
      <label for="motivoconsulta" class="col-lg-2 control-label"><h5>Motivo de consulta:</h5></label>
      <div class="form-group">
      <div class="col-lg-6">
        <textarea name="motivoconsulta" class="form-control" rows="5" id="motivoconsulta" value="<?=$historia->motivoconsulta_t15?>"></textarea>
      </div>
      </div>
      </div>
      <div class="row">
      <label for="enfermedadactual" class="col-lg-2 control-label"><h5>Enfermedad actual:</h5></label>
      <div class="form-group">
      <div class="col-lg-6">
        <textarea name="enfermedadactual" class="form-control" rows="5" id="enfermedadactual" value="<?=$historia->enfermedadactual_t15?>"></textarea>
      </div>
      </div>
      </div>
      <div class="row">
        
    
</div>  

 

<div class="tab-pane" id="tab_examen_fisico">

  <div class="row">
    <div class="col-lg-12">
      <div class="form-group">
        <label for="altura" class="col-lg-1 control-label">Altura </label>
        <div class="col-lg-3">
          <input name="altura" type="number" class="form-control input-sm" placeholder="Cms" id="altura" <?=$deshabingmed?> value="<?=$datconsulta->altura_t64?>" required>
        </div>
        <label for="peso" class="col-lg-1 control-label">Peso</label>
        <div class="col-lg-3">
          <input name="peso" type="number" class="form-control input-sm" placeholder="Kg" id="peso" <?=$deshabingmed?> value="<?=$datconsulta->peso_t64?>" required>
        </div>
        <label for="imc" class="col-lg-1 control-label">IMC</label>
        <div class="col-lg-3">
          <input name="imc" type="number" class="form-control input-sm"  id="imc" <?=$deshabingmed?> value="<?=$datconsulta->imc_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">  
        <label for="fr" class="col-lg-1 control-label">Fr</label>
        <div class="col-lg-3">
          <input name="fr" type="number" class="form-control input-sm" placeholder="RPM" id="	fr" <?=$deshabingmed?> value="<?=$datconsulta->fr_t64?>" required>
        </div>
        <label for="fc" class="col-lg-1 control-label">Fc</label>
        <div class="col-lg-3">
          <input name="fc" type="number" class="form-control input-sm" placeholder="LPM" id="fc" <?=$deshabingmed?> value="<?=$datconsulta->fc_t64?>" required> 
        </div>
        <label for="ta" class="col-lg-1 control-label">TA</label>
        <div class="col-lg-3">
          <input name="ta" type="text" value="/" class="form-control input-sm" placeholder="mmHg" id="ta" <?=$deshabingmed?> value="<?=$datconsulta->ta_t64?>" required>
        </div>
      </div>
      <div class="form-group"> 
        <label for="sao2" class="col-lg-1 control-label">SPO2</label>
        <div class="col-lg-3">
          <input name="sao2" type="number" maxlength="100" min="1" max="100" placeholder="%" class="form-control input-sm" id="sao2" <?=$deshabingmed?> value="<?=$datconsulta->sao2_t64?>" required><br/>
        </div>
        <label for="temp" class="col-lg-1 control-label">T°</label>
        <div class="col-lg-3">
          <input name="temp" type="float" class="form-control input-sm" placeholder="ºC" id="temp" <?=$deshabingmed?> value="<?=$datconsulta->temp_t64?>" required>
        </div>
         <label for="glsgow" class="col-lg-1 control-label">Glasgow/15</label>
        <div class="col-lg-3">
          <input name="glsgow" type="number" class="form-control input-sm" placeholder="/15" id="glsgow" <?=$deshabingmed?> value="<?=$datconsulta->glsgow_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <label for="sao2" class="col-lg-1 control-label">Glasgow motora</label>
        <div class="col-lg-3">
          <input name="gmotora" type="number" maxlength="6" min="1" max="6" placeholder="/6" class="form-control input-sm" id="gocular"   required ><br/>
        </div>
        <label for="sao2" class="col-lg-1 control-label">Glasgow verbal</label>
        <div class="col-lg-3">
          <input name="gverb" type="number" maxlength="5" min="1" max="5" placeholder="/5" class="form-control input-sm" id="gverb" required><br/>
        </div>
        <label for="sao2" class="col-lg-1 control-label">Glasgow ocular</label>
        <div class="col-lg-3">
          <input name="gocular" type="number" maxlength="4" min="1" max="4" placeholder="/4" class="form-control input-sm" id="gocular"  required><br/>
        </div>
      </div>
      
    </div>
  </div>
       
       
     <div class="form-group">
     <label for="plantratamiento" class="col-lg-2 control-label"><h5>Nota de Enfermaria:</h5></label>
     <div class="col-lg-6">
       <textarea class="form-control" rows="5" name="plantratamiento" value="<?=$this->Historia->plantratamiento_t15?>"></textarea>
     </div>
     </div>
      
</div>
  
  
  
  
</div>
</div>
   <div class="form-group">
        <div class="row text-center">
          <br/>
          <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">  Guardar  </button>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
                <span class = "glyphicon glyphicon-print"  aria-hidden = "true" > Imprimir</span>
              </a>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
                <span class = "glyphicon glyphicon-file"  aria-hidden = "true" >Nuevo</span>
          </a>
        </div>
      </div>   
    
    
 </form>
</fieldset>