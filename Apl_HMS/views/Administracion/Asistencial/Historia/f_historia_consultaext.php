    <?
      //var_dump($dathistoria);
      //var_dump($datpaciente);
      //var_dump($datconsulta->datantfam);
      //exit;
    ?>

    <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingFour">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
             <i class="glyphicon glyphicon-list-alt"></i> Motivo de Consulta
           </a>
         </h4>
       </div>
       <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_motivoconsulta')?>
         </div>
       </div>
     </div>
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
       <div class="panel-heading" role="tab" id="headingSix">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
             <i class="glyphicon glyphicon-record"></i> Revisión por Sistemas
           </a>
         </h4>
       </div>
       <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_rev_sist')?>
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
      <div class="panel-heading" role="tab" id="headingVacuns">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseVacuns" aria-expanded="false" aria-controls="collapseVacuns">
            <i class="glyphicon glyphicon-asterisk"></i> Vacunas
          </a>
        </h4>
      </div>
      <div id="collapseVacuns" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingVacuns">
        <div class="panel-body">
          <?=$this->load->view('Asistencial/Historia/f_historia_vacunas','',true)?>
        </div>
       </div>
      </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingSix">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
             <i class="glyphicon glyphicon-record"></i> Revisión por Sistemas
           </a>
         </h4>
       </div>
       <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_rev_sist')?>
         </div>
       </div>
     </div>

      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingSev">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSev" aria-expanded="false" aria-controls="collapseSev">
             <i class="glyphicon glyphicon-record"></i> Examen Fisico
           </a>
         </h4>
       </div>
       <div id="collapseSev" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSev">
         <div class="panel-body">
           <?$this->load->view('Asistencial/Historia/f_historia_ingreso_medico_exam_fisico_consext','','refresh');?>
           <?=$this->load->view('Asistencial/Historia/f_historia_exam_fisico')?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingID">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseID" aria-expanded="false" aria-controls="collapseID">
             <i class="glyphicon glyphicon-record"></i> Impresión Diagnóstica
           </a>
         </h4>
       </div>
       <div id="collapseID" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingID">
         <div class="panel-body">
           <?$this->load->view('Asistencial/Historia/f_historia_impre_diagnostica','','refresh');?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingPM">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePM" aria-expanded="false" aria-controls="collapsePM">
             <i class="glyphicon glyphicon-record"></i> Plan de Manejo
           </a>
         </h4>
       </div>
       <div id="collapsePM" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingGO">
         <div class="panel-body">
           <div class='col-lg-6'>
             <fieldset>
               <legend><strong>Resultados de Laboratorios</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="laboratorios" rows="6" required><?=$datconsulta->laboratorios_t64?></textarea>
                </div>
               </div>
             </fieldset>
           </div>
           <div class='col-lg-6'>
             <fieldset>
               <legend><strong>Conducta</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="conducta" rows="6" required><?=$datconsulta->conducta_t64?></textarea>
                </div>
               </div>
             </fieldset>
           </div>
           <div class='col-lg-6'>
             <fieldset>
               <legend><strong>Plan de Manejo</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="planmanejo" rows="6" required><?=$datconsulta->planmanejo_t64?></textarea>
                </div>
               </div>
             </fieldset>
           </div>
         </div>
       </div>
     </div>
    <?if($datpaciente->genero_t3=='FEMENINO'){?>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingGO">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseGO" aria-expanded="false" aria-controls="collapseGO">
             <i class="glyphicon glyphicon-record"></i> Gineco - Obstetricia
           </a>
         </h4>
       </div>
       <div id="collapseGO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingGO">
         <div class="panel-body">
           <?$this->load->view('Asistencial/Historia/f_historia_gineco','','refresh');?>
         </div>
       </div>
     </div>
    <?}?>
    </div>
  