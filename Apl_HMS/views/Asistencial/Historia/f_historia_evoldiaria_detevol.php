<? header('Content-Type: text/html; charset=iso-8859-1');?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalle Evolución</h4>
      </div>
      <div class="modal-body">
        <?
        //var_dump($datevol);
        switch($datevol->tipo_t84){
          case "EVOLUCIÓN MÉDICA":
            $this->load->view('Asistencial/Historia/f_historia_evoldiaria_detevol_med',"",'refresh');
            break;
          case "ENFERMERÍA":
            $this->load->view('Asistencial/Historia/f_historia_evoldiaria_detevol_enf',"",'refresh');
            break;
        }
        ?>
      </div>
      <div class="modal-footer">
              </div>
    </div>
  </div>