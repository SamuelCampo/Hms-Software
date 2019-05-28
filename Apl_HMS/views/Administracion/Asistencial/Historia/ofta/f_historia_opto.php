    <?
      //var_dump($dathistoria);
      //var_dump($datpaciente);
      //var_dump($datconsulta->datantfam);
      //exit;
    ?>

    <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
       <fieldset>
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOnel">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOnel" aria-expanded="true" aria-controls="collapseOnel">
          <i class="glyphicon glyphicon-list-alt"></i> Motivo de Consulta
        </a>
      </h4>
    </div>
    <div id="collapseOnel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOnel">
      <div class="panel-body">
        <?=$this->load->view('Asistencial/Historia/ofta/f_historia_motivoconsult_ofta')?>
      </div>
    </div>
  </div>
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
        <?=$this->load->view('Asistencial/Historia/ofta/f_historia_ANTECPERSONALES',array("tipoantec"=>"PERSONALES"))?>
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
        <?=$this->load->view('Asistencial/Historia/ofta/f_historia_ANTECPERSONALES',array("tipoantec"=>"FAMILIARES"))?>
      </div>
     </div>
    </div>
  </div>
 </div> 
<?if($btnguardarantecedentes==true){?>
<div class="form-group">
  <div class="row text-center">
   <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
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
                    <?=$this->load->view('Asistencial/Historia/f_historia_admision','','refresh')?>
                  </div>
                 </div>
                </div>-->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> LENSOMETRIA
               </a>
             </h4>
           </div>
           <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/ofta/f_historia_LENSIOMETRIA','','refresh')?>
             </div>
           </div>
         </div>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixeawil1" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> EXAMEN POR SISTEMAS
               </a>
             </h4>
           </div>
           <div id="collapseSixeawil1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/ofta/f_historia_REVSISTEMAS','','refresh')?>
             </div>
           </div>
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
               <?$this->load->view('Asistencial/Historia/ofta/f_historia_impre_diagnostica_ofta','','refresh');?>
             </div>
           </div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixeOA" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> EDUCACION DEL PACIENTE
               </a>
             </h4>
           </div>
           <div id="collapseSixeOA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/ofta/f_historia_EDUPACIENTE','','refresh')?>
             </div>
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
                        <textarea class="form-control" name="analisis[laboratorios]" rows="6" required><?= $datoconsulta[0]->analisis?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>

                 <div class='col-lg-6'>
                   <fieldset>
                     <legend><strong>Analisis</strong></legend>
                     <div class="form-group">
                       <div class="col-lg-12">
                        <textarea class="form-control" name="analisis[conducta]" rows="6" required><?= $datoconsulta[0]->conducta?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>

                 <div class='col-lg-6'>
                   <fieldset>
                     <legend><strong>Conducta o Plan</strong></legend>
                     <div class="form-group">
                       <div class="col-lg-12">
                        <textarea class="form-control" name="analisis[planmanejo]" rows="6" required><?= $datoconsulta[0]->planmanejo?></textarea>
                      </div>
                     </div>
                   </fieldset>
                 </div>
               </div>
             </div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixeEA" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> PRESCRIPCION OPTICA
               </a>
             </h4>
           </div>
           <div id="collapseSixeEA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body">
               <?=$this->load->view('Asistencial/Historia/ofta/f_historia_PRESOPTICA','','refresh')?>
             </div>
           </div>
         </div> 



               </div>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
           <div class="panel-heading" role="tab" id="headingSix">
             <h4 class="panel-title">
               <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixeEAF" aria-expanded="false" aria-controls="collapseSix">
                 <i class="glyphicon glyphicon-record"></i> GRAFICA
               </a>
             </h4>
           </div>
           <div id="collapseSixeEAF" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
             <div class="panel-body" style="padding: 50px;">
               <div class="h" style="border-bottom: 1px solid #ccc">
               	<input type="text" style="position: relative;left: 200px">
                 <span style="left: 300px;padding: 50px;border-left: 1px solid #ccc; border-right: 1px solid #ccc; width: 50%; height: 100px; position: relative;"><input type="text"></span>
                 <span style="left: 300px;padding: 50px;width: 50%; height: 100px; position: relative;"><input type="text"></span>
               </div>
             </div>
           </div>
         </div> 



               </div>

             </div>

           </div> 
        </div>  


 </div>


    
  