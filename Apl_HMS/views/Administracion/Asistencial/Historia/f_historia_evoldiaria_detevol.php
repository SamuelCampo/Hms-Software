<? header('Content-Type: text/html; charset=iso-8859-1');?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalle Evoluci�n</h4>
      </div>
      <div class="modal-body">
        <?
        //var_dump($datevol);
        switch($datevol->tipo_t84){
          case "EVOLUCI�N M�DICA":
            $this->load->view('Asistencial/Historia/f_historia_evoldiaria_detevol_med',"",'refresh');
            break;
          case "ENFERMER�A":
            $this->load->view('Asistencial/Historia/f_historia_evoldiaria_detevol_enf',"",'refresh');
            break;
        }
        ?>
      </div>
      <div class="modal-footer">
              </div>
    </div>
  </div>