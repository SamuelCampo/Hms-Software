<fieldset>
   <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="glyphicon glyphicon-user"></i> Antecedentes patologicos 
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/f_historia_antecedentes_tipo',array("tipoantec"=>"PERSONALES","datantec"=>$datconsulta->datantpers))?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="glyphicon glyphicon-home"></i> Antecedentes Patologicos Familiares
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/f_historia_antecedentes_tipo',array("tipoantec"=>"FAMILIARES","datantec"=>$datconsulta->datantfam))?>
      </div>
     </div>
    </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <i class="glyphicon glyphicon-list-alt"></i> Antecedentes Hospitalarios y Hábitos Psicobiologicos
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/f_historia_antecedentes_pato')?>
      </div>
    </div>
  </div>
   
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <i class="glyphicon glyphicon-list-alt"></i> Antecedentes Farmacológicos y Quirúrgicos
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/f_historia_antecedentes_pato')?>
      </div>
    </div>
  </div>
   
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <i class="glyphicon glyphicon-saved	Try it"></i>Signos Vitales
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/f_historia_ingreso_medico_mot_ingreso',array("tipoantec"=>"FAMILIARES","datantec"=>$datconsulta->datantfam))?>
        <?=$this->load->view('Asistencial/Historia/f_historia_ingreso_medico_exam_fisico',array("tipoantec"=>"FAMILIARES","datantec"=>$datconsulta->datantfam))?>
      </div>
     </div>
    </div>
  
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <i class="glyphicon glyphicon-record"></i> Examen Fisico
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/f_historia_exam_fisico')?>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingGO">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseGO" aria-expanded="false" aria-controls="collapseGO">
          <i class="glyphicon glyphicon-record"></i> Gineco - Obstetricia
        </a>
      </h4>
    </div>
    <div id="collapseGO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
        
      </div>
    </div>
  </div>
 </div>
</fieldset>