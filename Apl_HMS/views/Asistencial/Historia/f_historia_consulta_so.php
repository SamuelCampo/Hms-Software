    <?
      //var_dump($dathistoria);
      //var_dump($datpaciente);
      //var_dump($datconsulta->datantfam);
      //exit;
    ?>

    <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingTEPP">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTEPP" aria-expanded="false" aria-controls="collapseTEPP">
             <i class="glyphicon glyphicon-record"></i> Tipo Exámen
           </a>
         </h4>
       </div>
       <div id="collapseTEPP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTEPP">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_teep','',true);?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingEMP">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEMP" aria-expanded="false" aria-controls="collapseEMP">
             <i class="glyphicon glyphicon-record"></i> Empleo
           </a>
         </h4>
       </div>
       <div id="collapseEMP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEMP">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_empleo','',true);?>
         </div>
       </div>
     </div>
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
           <?=$this->load->view('Asistencial/Historia/f_historia_motivoconsulta',"",true)?>
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
           <?=$this->load->view('Asistencial/Historia/f_historia_antecedentes_tipo',array("tipoantec"=>"PERSONALES","datantec"=>$datconsulta->datantpers),true)?>
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
          <?=$this->load->view('Asistencial/Historia/f_historia_antecedentes_tipo',array("tipoantec"=>"FAMILIARES","datantec"=>$datconsulta->datantfam),true)?>
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
          <?=$this->load->view('Asistencial/Historia/f_historia_vacunas_so','',true)?>
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
           <?=$this->load->view('Asistencial/Historia/f_historia_rev_sist',"",true)?>
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
           <?=$this->load->view('Asistencial/Historia/f_historia_ingreso_medico_exam_fisico_consext','',true);?>
           <?=$this->load->view('Asistencial/Historia/f_historia_exam_fisico',"",true)?>
         </div>
       </div>
     </div>
      
      
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingFR">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFR" aria-expanded="false" aria-controls="collapseFR">
             <i class="glyphicon glyphicon-record"></i>Factores de Riesgo
           </a>
         </h4>
       </div>
       <div id="collapseFR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFR">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_factriesg','',true);?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingAAT">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseAAT" aria-expanded="false" aria-controls="collapseAAT">
             <i class="glyphicon glyphicon-record"></i> Antecedentes de Accidentes de Trabajo 
           </a>
         </h4>
       </div>
       <div id="collapseAAT" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAAT">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_aat','',true);?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingAEP">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseAEP" aria-expanded="false" aria-controls="collapseAEP">
             <i class="glyphicon glyphicon-record"></i> Antecedentes Enfermedad Profesional 
           </a>
         </h4>
       </div>
       <div id="collapseAEP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAEP">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_aep','',true);?>
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
       <div class="panel-heading" role="tab" id="headingPSRA">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePSRA" aria-expanded="false" aria-controls="collapsePSRA">
             <i class="glyphicon glyphicon-record"></i> Paraclínicos Soportes y Referidos por Antecedentes
           </a>
         </h4>
       </div>
       <div id="collapsePSRA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPSRA">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_paracantec','',true);?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingHAB">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseHAB" aria-expanded="false" aria-controls="collapseHAB">
             <i class="glyphicon glyphicon-record"></i> Hábitos
           </a>
         </h4>
       </div>
       <div id="collapseHAB" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHAB">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_hab','',true);?>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingEVOLU">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEVOL" aria-expanded="false" aria-controls="collapseEVOL">
             <i class="glyphicon glyphicon-record"></i> Evolucion Medica
           </a>
         </h4>
       </div>
       <!--
          /*
+Autor: Ing Mauricio Garibello R
+Fecha: 12/01/2017
+Nota: Se adiciona campo de evolucion medica
+  */
       -->
       <div id="collapseEVOL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEVOLU">
         <div class="panel-body">
           
          <fieldset>
               <legend><strong>Evolucion Laboral</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="conducta" rows="6" required><?=$datconsulta->conducta_t64?></textarea>
                </div>
               </div>
             </fieldset>



         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingCMR">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCMR" aria-expanded="false" aria-controls="collapseCMR">
             <i class="glyphicon glyphicon-record"></i> Concepto Médico 
           </a>
         </h4>
       </div>
       <div id="collapseCMR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCMR">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_cmedrec','',true);?>
         </div>
       </div>
     </div>
 <!--
          /*
+Autor: Ing Mauricio Garibello R
+Fecha: 12/01/2017
+Nota: Se adiciona campo de recomendaciones y restricciones independiente
+  */
       -->
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingCM">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCM" aria-expanded="false" aria-controls="collapseCM">
             <i class="glyphicon glyphicon-record"></i> Recomendaciones / Restricciones
           </a>
         </h4>
       </div>
       <div id="collapseCM" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCM">
         <div class="panel-body">
           <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">Recomendaciones</h4>
              <textarea class="form-control" name="consultaso[cm_recomend]" rows="10"><?=$datconsultaso->cm_recomend_t99?></textarea>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">Restricciones</h4>
              <textarea class="form-control" name="consultaso[cm_restricc]" rows="10"><?=$datconsultaso->cm_restricc_t99?></textarea>
            </div>
          </div>
         </div>
       </div>
     </div>

      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingPVE">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePVE" aria-expanded="false" aria-controls="collapsePVE">
             <i class="glyphicon glyphicon-record"></i> Programas Vigilancia Epidemiológica
           </a>
         </h4>
       </div>
       <div id="collapsePVE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPVE">
         <div class="panel-body">
           <?=$this->load->view('Asistencial/Historia/f_historia_so_pve','',true);?>
         </div>
       </div>
     </div>
    </div>