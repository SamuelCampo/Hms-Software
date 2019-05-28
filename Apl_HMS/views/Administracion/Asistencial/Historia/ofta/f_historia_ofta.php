    <?
      //var_dump($dathistoria);
      //var_dump($datpaciente);
      //var_dump($datconsulta->datantfam);
      //var_dump($datoconsulta);
      //exit;
    ?>

    <input type="hidden" name="urldestino" value="<?= $this->uri->uri_string()?>" />
    
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
         <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <i class="glyphicon glyphicon-home"></i> MOTIVO DE CONSULTA
              </a>
            </h4>
          </div>
          <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <?= $this->load->view('Asistencial/Historia/ofta/f_historia_motivoconsult_ofta')?>
            </div>
           </div>
          </div>
</div>
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="glyphicon glyphicon-user"></i> ANTECEDENTES PERSONALES
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?= $this->load->view('Asistencial/Historia/ofta/f_historia_ANTECPERSONALES',array("tipoantec"=>"PERSONALES"))?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="glyphicon glyphicon-home"></i> ANTECEDENTES FAMILIARES
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?= $this->load->view('Asistencial/Historia/ofta/f_historia_ANTECPERSONALES',array("tipoantec"=>"FAMILIARES"))?>
      </div>
     </div>
    </div>
  </div>
 </div> 
<?if($btnguardarantecedentes==true){?>
<div class="form-group">
  <div class="row text-center">
   <button type="submit" class="btn <? // $this->Planthtml->estilo->colorprinc?>">Guardar</button>
  </div>
</div>
<?}?> 

</fieldset>
  
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
                    <? // $this->load->view('Asistencial/Historia/f_historia_admision','','refresh')?>
                  </div>
                 </div>
                </div>-->

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixe" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> EXAMEN VISUAL
               </a>
             </h4>
           </div>
           <div id="collapseSixe" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
             <?= $this->load->view('Asistencial/Historia/ofta/f_historia_EXAVISUAL','','refresh')?>
             </div>
           </div>
         </div> 

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
         <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixe10" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> REFRACCION
               </a>
             </h4>
           </div>
           <div id="collapseSixe10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
             <?= $this->load->view('Asistencial/Historia/ofta/f_historia_EXAREFRACCION','','refresh')?>
             </div>
           </div>
         </div>  

<!--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          

         <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixe9" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> COVERT TEST
               </a>
             </h4>
           </div>
           <div id="collapseSixe9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
              <?= $this->load->view('Asistencial/Historia/ofta/f_historia_EXACOVERTE','','refresh')?>
             </div>
           </div>
         </div> -->

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixAQ" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> EXAMEN OFTALMOLOGIA
               </a>
             </h4>
           </div>
           <div id="collapseSixAQ" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/ofta/f_historia_rev_sist_ofta2','','refresh')?>
             </div>
           </div>
         </div> 


          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingID">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseID" aria-expanded="false" aria-controls="collapseID">
                 <i class="glyphicon glyphicon-record"></i> IMPRESION DIAGNOSTICA
               </a>
             </h4>
           </div>
           <div id="collapseID" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingID">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/ofta/f_historia_impre_diagnostica_ofta','','refresh');?>
             </div>
             <input type="hidden" name="dx[documento]" value="<?= $datpaciente->identificacion_t3 ?>" id="documento">
           </div> 
         </div>   



          <div class="panel panel-default">
             <div class="panel-heading" role="tab" id="headingPM">
               <h4 class="panel-title">
                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePM" aria-expanded="false" aria-controls="collapsePM">
                   <i class="glyphicon glyphicon-record"></i> EVOLUCION
                 </a>
               </h4>
             </div>

             <div id="collapsePM" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPM">
               <div class="panel-body">
                 <input type="hidden" name="tipoevol" value="MEDICA" />

                 <div class='col-lg-6'>
                   <fieldset>
                     <legend><strong>Resultados Laboratorios, Ayudas Dx</strong></legend>
                     <div class="form-group">
                       <div class="col-lg-12">
                        <textarea class="form-control" name="analisis[laboratorios]" rows="6" ><? // $datofta[0]["a_laboratorios_ofta"]?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>

                 <div class='col-lg-6'>
                   <fieldset>
                     <legend><strong>Analisis</strong></legend>
                     <div class="form-group">
                       <div class="col-lg-12">
                        <textarea class="form-control" name="analisis[conducta]" rows="6" ><? // $datofta[0]["a_conducta_ofta"]?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>

                 <div class='col-lg-6'>
                   <fieldset>
                     <legend><strong>Conducta o Plan</strong></legend>
                     <div class="form-group">
                       <div class="col-lg-12">
                        <textarea class="form-control" name="analisis[planmanejo]" rows="6" ><? // $datofta[0]["a_planmanejo_ofta"]?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>

               </div>

             </div>

           </div> 
        </div>  


 </div>


    
  