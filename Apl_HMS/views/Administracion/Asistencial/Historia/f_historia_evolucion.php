    <?
      //var_dump($dathistoria);
      //var_dump($datpaciente);
      //var_dump($datconsulta->datantfam);
      //exit;
    ?>

    <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
             <i class="glyphicon glyphicon-record"></i> Evolución
           </a>
         </h4>
       </div>
       <div id="collapsePM" class="panel-collapse active" role="tabpanel" aria-labelledby="headingGO">
         <div class="panel-body">
           <input type="hidden" name="tipoevol" value="MEDICA" />
           <div class='col-lg-6'>
             <fieldset>
               <legend><strong>Resultados Laboratorios, Ayudas Dx</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="laboratorios" rows="6" ><?=$datconsulta->laboratorios_t64?></textarea>
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
    </div>
