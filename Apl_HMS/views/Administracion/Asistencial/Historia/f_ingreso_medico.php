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
      </div>
      <div class="row">
      <label for="revisionsistemas" class="col-lg-2 control-label"><h5>Revision por sistemas:</h5></label>
      <div class="form-group">
      <div class="col-lg-6">
        <textarea name="revisionsistemas"class="form-control" rows="5" id="revisionsistemas" value="<?=$historia->revisionsistemas_t15?>" ></textarea>
      </div>
      </div>
      </div>
  
    
</div>  

 
<div class="tab-pane" id="tab_antecedentes">
  
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="glyphicon glyphicon-user"></i> Antecedentes personales
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row">
        <div class="col-md-6">
        <label>
        Antecedentes Personales
        </label>
       <div>
          <?=$this->load->view('Genericas/gen_lista_check',$this->Modulo->confmenucheck($this->Historia->arr_antecedentes,"idantecedentes","antecedentes","30","antecedentes", $historia->atcpersonal_t15 ))?>
        </div>
           <div class="form-group">
        <label for="despersonales" class="col-lg-2 control-label"><h5>Descripción</h5></label>
        <div class="col-lg-10">
          <textarea name="despersonales" class="form-control" rows="4" id="despersonales" value="<?=$Historia->despersonales_t15?>"></textarea><br/>
        </div>
          </div>
         <label for="otropersonal" class="col-lg-2 control-label"><h5>Otros</h5></label>
        <div class="col-lg-10">
        <input name="otropersonal" type="text" class="form-control" id="otropersonal" placeholder="" value="<?=$this->otropersonal_t15?>">   <br/><br/><br/> 
        </div>
      </div>
        </div>
     
        </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="glyphicon glyphicon-home"></i> Antecedentes Familiares
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        
       <div class="row">
       <div class="col-md-6">
        <label>
        Antecedentes Familiares
        </label>
        <div>
          <?=$this->load->view('Genericas/gen_lista_check',$this->Modulo->confmenucheck($this->Historia->arr_antecedentes,"idantecedentes","antecedentes","30","antecedentes", $historia->atcfamiliar_t15 ))?>
        </div>
         <div class="form-group"> 
        <label for="desfamiliar" class="col-lg-2 control-label"><h5>Descripción</h5></label>
        <div class="col-lg-10">
          <textarea  name="desfamiliar" class="form-control" rows="4" id="desfamiliar" value="<?=$this->Historia->desfamiliar_t15?>"></textarea><br/>
        </div></div>
         <label for="otrofamiliar" class="col-lg-2 control-label"><h5>Otros</h5></label>
        <div class="col-lg-10">
        <input name="otrofamiliar" type="text" class="form-control" id="otrofamiliar" placeholder="" value="<?=$this->Historia->otrofamiliar_t15?>">   <br/><br/><br/> 
        </div>
      </div>
    </div>
     
     
     </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="glyphicon glyphicon-list-alt"></i> Antecedentes Patológicos y Hábitos psicobiologicos 
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
         <div class="row">
      <div class="col-md-6">
        <label>
        Antecedentes Patológicos
        </label>
       <div>
          <?=$this->load->view('Genericas/gen_lista_check',$this->Modulo->confmenucheck($this->Historia->arr_antecedentesp,"idantecedentesp","antecedentesp","13","antecedentesp", $historia->atcpatologico_t15 ))?>
        </div>
       <div class="form-group">
       <label for="despatologico" class="col-lg-2 control-label"><h5>Descripción</h5></label>
        <div class="col-lg-10">
          <textarea  name="despatologico" class="form-control" rows="4" id="despatologico" value="<?=$this->Historia->despatologico_t15?>"></textarea><br/>
        </div></div>
         <label for="otropatologico" class="col-lg-2 control-label"><h5>Otros</h5></label>
        <div class="col-lg-10">
        <input name="otropatologico" type="text" class="form-control" id="otropatologico" placeholder="" value="<?=$this->Historia->otropatologico_t15?>">   <br/><br/><br/> 
        </div>
      </div>
     <div class="col-md-6"> <label>
        Hábitos psicobiologicos
        </label>
        <div>
          <?=$this->load->view('Genericas/gen_lista_check',$this->Modulo->confmenucheck($this->Historia->arr_habitos,"idhabitos","habitos","13","habitos", $historia->habtpsicologico_t15 ))?>
        </div>
      <label for="despsicologico" class="col-lg-2 control-label"><h5>Descripción</h5></label>
        <div class="col-lg-10">
          <textarea  name="despsicologico" class="form-control" rows="4" id="despsicologico" value="<?=$this->Historia->despsicologico_t15?>"></textarea><br/>
        </div>
         <label for="otropsicologico" class="col-lg-2 control-label"><h5>Otros</h5></label>
        <div class="col-lg-10">
        <input name="otropsicologico" type="text" class="form-control" id="otropsicologico" placeholder="" value="<?=$this->Historia->otropsicologico_t15?>">   <br/><br/><br/> 
        </div>
      </div>
         </div>
   
        

     </div>
    </div>
  </div>
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
      
       <label for="glasglow" class="col-lg-1 control-label">Glasgow</label>
      <div class="col-lg-1">
        <input name="glasglow" type="text" class="form-control input-sm" id="glasglow_t15"  value="<?=$this->Historia->glasglow_t15?>">°c
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
       
       
       
    
    <div class="form-group">
      <label for="neurologico" class="col-lg-2 control-label">Neurologico:</label>
      <div class="col-lg-5">
      <input name="neurologico" type="text" class="form-control input-sm" id="neurologico"  value="<?=$this->Historia->neurologico_t15?>">
      </div>
    </div>
     <div class="form-group">
      <label for="respiratorio" class="col-lg-2 control-label">Respiratorio:</label>
      <div class="col-lg-5">
      <input name="respiratorio" type="text" class="form-control input-sm" id="respiratorio"  value="<?=$this->Historia->respiratorio_t15?>">
      </div>
    </div>
     <div class="form-group">
      <label for="cardiovascular" class="col-lg-2 control-label">Cardiovascular:</label>
      <div class="col-lg-5">
      <input name="cardiovascular" type="text" class="form-control input-sm" id="cardiovascular"  value="<?=$this->Historia->cardiovascular_t15?>">
      </div>
    </div>
     <div class="form-group">
      <label for="abdomen" class="col-lg-2 control-label">Abdomen:</label>
      <div class="col-lg-5">
      <input name="abdomen" type="text" class="form-control input-sm" id="abdomen"  value="<?=$this->Historia->abdomen_t15?>">
      </div>
    </div>
     <div class="form-group">
      <label for="genito_urinario" class="col-lg-2 control-label">Genito-Urinario:</label>
      <div class="col-lg-5">
      <input name="genito_urinario" type="text" class="form-control input-sm" id="genito_urinario"  value="<?=$this->Historia->genito_urinario_t15?>">
      </div>
    </div>

     <div class="form-group">
      <label for="extremidades" class="col-lg-2 control-label">Extremidades:</label>
      <div class="col-lg-5">
      <input name="extremidades" type="text" class="form-control input-sm" id="extremidades"  value="<?=$this->Historia->extremidades_t15?>">
      </div>
    </div>

     <div class="form-group">
      <label for="otros" class="col-lg-2 control-label">Otros:</label>
      <div class="col-lg-5">
      <input name="otros" type="text" class="form-control input-sm" id="otros"  value="<?=$this->Historia->otros_t15?>">
      <br/><br/><br/> <br/>
      </div>
    </div>


  
</div>
  
<div class="tab-pane" id="tab_impresion">

   <div class="form-group row">
        <label for="tipodx" class="col-lg-3 control-label">Tipo Dx</label>
         <div class="col-lg-5">
          <input  name="tipodx" type="text" class="form-control input-sm" id="tipodx" placeholder=" Tipo Dx" value=" ">
        </div>
    </div>
    <div class="form-group row">
        <label for="descripcioncie" class="col-lg-3 control-label">Descripción CIE</label>
         <div class="col-lg-5">
           <select class="form-control input-sm" name="descripcioncie" id="descripcioncie" >
               <option value="">Seleccione Descripción CIE</option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->listar_cie10(),"codigo_t14","descripcion_t14",$historia->descripcioncie_t15))?>
              </select>
         </div>
    </div>
     <div class="form-group row">
        <label for="impresiondx" class="col-lg-3 control-label">Impresión DX</label>
         <div class="col-lg-5">
          <input  name="impresiondx" type="text" class="form-control input-sm" id="impresiondx" placeholder=" Impresión DX" value=" ">
        </div>
    </div>
 
</div>
  
<div class="tab-pane" id="tab_plan_tratamiento">
  
 
    <div class="row">
     
     <div class="form-group">
     <label for="plantratamiento" class="col-lg-2 control-label"><h5>Indicaciones Medicas/Conducta:</h5></label>
     <div class="col-lg-6">
       <textarea class="form-control" rows="5" name="plantratamiento" value="<?=$this->Historia->plantratamiento_t15?>"></textarea>
     </div>
     </div>
      <div class="form-group">
       <label for="justificacion" class="col-lg-2 control-label"><h5>Justificación:</h5></label>
     <div class="col-lg-6">
       <textarea class="form-control" rows="5" name="justificacion" value="<?=$this->Historia->plantratamiento_t15?>"></textarea>
     </div>
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