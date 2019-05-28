    <?
      //var_dump($dathistoria);
      //var_dump($datpaciente);
      //var_dump($evolodon[0]datantfam);
      //exit;
    ?>
    <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingID">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseID" aria-expanded="false" aria-controls="collapseID">
             <i class="glyphicon glyphicon-record"></i>Impresion Diagnostica
           </a>
         </h4>
       </div>
       <div id="collapseID" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingID">
         <div class="panel-body">
           <?$this->load->view('Asistencial/Historia/odon/f_historia_impre_diagnostica_odon','','refresh');?>
         </div>
       </div>
     </div>
      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingPM">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePM" aria-expanded="false" aria-controls="collapsePM">
             <i class="glyphicon glyphicon-record"></i> Evolucion
           </a>
         </h4>
       </div>
       <div id="collapsePM" class="panel-collapse active" role="tabpanel" aria-labelledby="headingGO">
         <div class="panel-body">
           <input type="hidden" name="tipoevol" value="MEDICA" />
           <div class='col-lg-12'>
             <fieldset>
               <legend><strong>PLAN DE MANEJO Y TRATAMIENTO</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="planmanejo" rows="6" required><?=$evolodon[0]["planmanejo_t68"]?></textarea>
                </div>
               </div>
             </fieldset>
           </div>
         </div>
       </div>
     </div>
    </div>
