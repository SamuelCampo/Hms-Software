      <div class="row paddingh">
        <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
          <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
          <?
            $this->load->view('Asistencial/Historia/f_historia_evolucion',"",'refresh');
            
          ?>
          <div class="form-group">
            <div class="row text-center">
             <button name="formularioenviado" value="evolmed" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
            </div>
          </div>
          <br/>
        </form>
      </div>
      <?
        if(count($datconsulta->datevoluciones["ENFERMERIA"])>0){
            ?><center><b>EVOLUCIÓN ENFERMERÍA</b></center>
              <div style="border:1px solid #000; text-align: left">
              <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$datconsulta->datevoluciones["ENFERMERIA"]),true);?>
              </div>
            <?
        }
        if(count($datconsulta->datevoluciones["MEDICA"])>1){
          ?><center><b>EVOLUCIÓN MÉDICA</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$datconsulta->datevoluciones["MEDICA"]),true);?>
            </div>
          <?
        }
        if(count($datconsulta->datevoluciones["TERAPIAS"])>1){
          ?><center><b>EVOLUCIÓN TERAPIAS</b></center>
            <div style="border:1px solid #000; text-align: left">
            <?=$this->load->view('Asistencial/Historia/f_historia_evolucion_hist',array("arr_evol"=>$datconsulta->datevoluciones["TERAPIAS"]),true);?>
            </div>
          <?
        }?>
          