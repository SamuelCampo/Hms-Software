      <div class="row paddingh">
        <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/odontologia/evol_med/".$dathistoria->idps_historia_t4)?>" method="post">
          <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
          
          <input type="hidden" name="tipoevol" value="ENFERMERIA" />
           <div class='col-lg-6'>
             <fieldset>
               <legend><strong>Conducta</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="conducta" rows="6" required><?=$evolodon[0]["conducta_t68"]?></textarea>
                </div>
               </div>
             </fieldset>
           </div>
           <div class='col-lg-6'>
             <fieldset>
               <legend><strong>Plan de Manejo</strong></legend>
               <div class="form-group">
                 <div class="col-lg-12">
                  <textarea class="form-control" name="planmanejo" rows="6" required><?=$evolodon[0]["planmanejo_t68"]?></textarea>
                </div>
               </div>
             </fieldset>
           </div>
          
          
          
          
          <div class="form-group">
            <div class="row text-center">
             <button name="formularioenviado" value="evolodon" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
            </div>
          </div>
          <br/>
        </form>
      </div>
      <?
        //var_dump($evolodon);
        if(count($evolodon["ENFERMERIA"])>0){
            ?><center><b>EVOLUCIÓN ENFERMERÍA</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?=$this->load->view('Asistencial/Historia/odon/f_historia_evolucion_hist_odon',array("arr_evol"=>$evolodon["ENFERMERERIA"]),true);?>
              </div>
            <?
        }
        if(count($evolodon["MEDICA"])>1){
          ?><center><b>EVOLUCIÓN MÉDICA</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?=$this->load->view('Asistencial/Historia/odon/f_historia_evolucion_hist_odon',array("arr_evol"=>$evolodon["MEDICA"]),true);?>
            </div>
          <?
        }
       /* if(count($evolodon[0]datevoluciones["TERAPIAS"])>1){
          ?><center><b>EVOLUCIÓN TERAPIAS</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$evolodon[0]datevoluciones["TERAPIAS"]),true);?>
            </div>
          <?
        }*/
        ?>