<fieldset>
 <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" onsubmit="">

    
      <div class="row">
      <label for="estadoingreso" class="col-lg-2 control-label"><h5>Estado del ingreso:</h5></label>
      <div class="form-group">
      <div class="col-lg-6">
        <textarea name="estadoingreso"class="form-control" rows="5" id="estadoingreso" value="<?=$historia->estadoingreso_t15?>"></textarea>
      </div>
      </div>
      </div>
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
  
 


<div class="tab-pane" id="tab_examen_fisico">


    <div class="form-group">
      <label for="altura" class="col-lg-2 control-label">Altura </label>
      <div class="col-lg-1">
      <input name="altura" type="text" class="form-control input-sm" id="altura"  value="<?=$this->Historia->altura_t15?>">Cm
      </div>

      <label for="peso" class="col-lg-1 control-label">Peso</label>
      <div class="col-lg-1">
      <input name="peso" type="text" class="form-control input-sm" id="peso"  value="<?=$this->Historia->peso_t15?>">Kg
      </div>

      <label for="temp" class="col-lg-1 control-label">T°</label>
      <div class="col-lg-1">
      <input name="temp" type="text" class="form-control input-sm" id="temp"  value="<?=$this->Historia->temp_t15?>">°c
      </div>
    </div>
    <div class="form-group">
      <label for="fr" class="col-lg-2 control-label">Fr</label>
      <div class="col-lg-1">
      <input name="fr" type="text" class="form-control input-sm" id="	fr"  value="<?=$this->Historia->fr_t15?>">/min
      </div>

      <label for="fc" class="col-lg-1 control-label">Fc</label>
      <div class="col-lg-1">
      <input name="fc" type="text" class="form-control input-sm" id="fc"  value="<?=$this->Historia->fc_t15?>">/min 
      </div>

      <label for="ta" class="col-lg-1 control-label">TA</label>
      <div class="col-lg-1">
      <input name="ta" type="text" class="form-control input-sm" id="ta_t15"  value="<?=$this->Historia->ta_t15?>">°c
      </div>
    </div>
    <div class="form-group">
       <label for="pvc" class="col-lg-2 control-label">PVC</label>
      <div class="col-lg-1">
      <input name="pvc" type="text" class="form-control input-sm" id="pvc"  value="<?=$this->Historia->pvc_t15?>">°c
      </div>

      <label for="sao2" class="col-lg-1 control-label">SaO2</label>
      <div class="col-lg-1">
      <input name="sao2" type="text" class="form-control input-sm" id="sao2"  value="<?=$this->Historia->sao2_t15?>">°c
      </div>
      
      
    </div>
    
    
    <div class="form-group">
         <label for="tiss" class="col-lg-2 control-label">TISS</label>
      <div class="col-lg-1">
      <input name="tiss" type="text" class="form-control input-sm" id="tiss"  value="<?=$this->Historia->tiss_t15?>">°c
      </div>

      <label for="apache" class="col-lg-1 control-label">APACHE</label>
      <div class="col-lg-1">
      <input name="apache" type="text" class="form-control input-sm" id="apache"  value="<?=$this->Historia->apache_15?>">°c
      </div>
    </div>
   
</div>
  
<div class="tab-pane" id="tab_triage">

   <div class="form-group">
    <label for="triage" class="col-lg-4 control-label">Clasificación de Triage</label>
    <div class="col-lg-4">
      <select name="triage" class="form-control" id="triage">
        <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_clastriage,"tipo","tipo",""))?>
      </select>
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