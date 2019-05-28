<section>
  <fieldset>
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active text-center"><a href="#tab_medicamentos" data-toggle="tab">Medicamentos</a></li>
        <li class="text-center"><a href="#tab_procedimientos" data-toggle="tab">Procedimientos</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_medicamentos">
          <?=$this->load->view('Asistencial/Historia/f_medicamentos',"",true);?>
        </div>
        <div class="tab-pane" id="tab_procedimientos">
          <?=$this->load->view('Asistencial/Historia/f_procedimientos',"",true);?>
        </div>
      </div>
    </div>
  </fieldset>
</section>