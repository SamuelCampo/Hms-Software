      <div class="row paddingh">
        <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/odontologia/evol_med/".$dathistoria->idps_historia_t4)?>" method="post">
          <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
          <?
            $this->load->view('Asistencial/Historia/odon/f_historia_evolucion_content_odon',"",'refresh');
          ?>
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
        /*if(count($$evolodondatevoluciones["TERAPIAS"])>1){
          ?><center><b>EVOLUCIÓN TERAPIAS</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist_odon',array("arr_evol"=>$$evolodondatevoluciones["TERAPIAS"]),true);?>
            </div>
          <?
        }?>*/
          