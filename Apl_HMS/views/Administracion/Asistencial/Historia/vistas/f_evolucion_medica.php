 <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_agregar_evolucion" data-toggle="tab">Agregar evoluci�n medica</a></li>
      <li><a href="#tab_evolucion" data-toggle="tab">Evoluci�n Medica</a></li>
      <li><a href="#tab_procedimientos" data-toggle="tab">Procedimientos Quir�rgicos </a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_agregar_evolucion">
         <?=$this->load->view('Asistencial/Historia/f_evolucion_medica_agregar',"",true)?>
      </div>
      <div class="tab-pane" id="tab_evolucion">
         <?=$this->load->view('Asistencial/Historia/f_evolucion_medica_ver',"",true)?>
      </div>
      <div class="tab-pane" id="tab_procedimientos">
         <?=$this->load->view('Asistencial/Historia/f_evolucion_medica_procedimientos',"",true)?>
      </div>
    </div>
 </div>
