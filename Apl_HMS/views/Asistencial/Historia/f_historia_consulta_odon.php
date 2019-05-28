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
             <?=$this->load->view('Asistencial/Historia/odon/f_historia_motivoconsult_odon')?>
           </div>
         </div>
       </div>
  
          <!--
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingadmin">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseadmin" aria-expanded="false" aria-controls="collapseadmin">
                      <i class="glyphicon glyphicon-record"></i> Admision
                    </a>
                  </h4>
                </div>
                <div id="collapseadmin" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingadmin">
                  <div class="panel-body">
                    <?=$this->load->view('Asistencial/Historia/f_historia_admision','','refresh')?>
                  </div>
                 </div>
                </div>-->
         
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> Revision por Sistemas
               </a>
             </h4>
           </div>
           <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/odon/f_historia_rev_sist_odon','','refresh')?>
             </div>
           </div>
         </div> 


          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingID">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseID" aria-expanded="false" aria-controls="collapseID">
                 <i class="glyphicon glyphicon-record"></i> Impresion Diagnostica
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
                   <i class="glyphicon glyphicon-record"></i> Analisis
                 </a>
               </h4>
             </div>

             <div id="collapsePM" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPM">
               <div class="panel-body">
                 <input type="hidden" name="tipoevol" value="MEDICA" />

                 <div class='col-lg-12'>
                   <fieldset>
                     <legend><strong>Analisis</strong></legend>
                     <div class="form-group">
                       <div class="col-lg-12">
                        <textarea class="form-control" name="analisis[planmanejo]" rows="6" required><?=$datodon[0]["a_planmanejo_odon"]?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>

               </div>

             </div>

           </div> 
  


 </div>


    
  