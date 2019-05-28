<form action="<?= site_url($url)  ?>" name="formulario" method="post">
    <div class="row contenedorsobreadonopd">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Bloquear Fechas</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_paciente">
          <?= $this->load->view('Asistencial/Agenda/form_bloque_a',"",true);?>
          <?= $this->load->view('Asistencial/Agenda/form_bloqueo_h',"",true) ?>
        </div>
      </div>
    </div>
  </div>
</form>