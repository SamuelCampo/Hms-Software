  <fieldset>
    <legend><strong>Indices Respiratorios</strong></legend>
    <div class="form-group">
      <div class="col-lg-10">
       <textarea class="form-control" name="evolterresp[concep][indicresp]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Patron Respiratorio</strong></legend>
    <div class="form-group">
      <div class="col-lg-10">
       <textarea class="form-control" name="evolterresp[concep][patrrep]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Signos Dificultad Respiratoria</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Tiraje subcostal</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][tirajsubcos]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tiraje Supraclaviculares</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][tirajsupracla]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tirajes Universales</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][tirajunivers]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Polipnea</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][polipnea]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Cianosis Generalizada</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][cianosgener]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Cianosis Periferica</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][cianosperif]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Estridor laringeo</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][estiralaring]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Soporte Ventilatorio</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Soporte</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][sopventil]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">TOT No.</label>
       <input type="text" class="form-control" name="evolterresp[concep][sopventiltot]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Acoplado</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][sopventilacopl]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Oxígeno Suplementario</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Dispositivo de Administracion</label>
        <input type="text" class="form-control" name="evolterresp[concep][oxigsupldispo]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">FIO2 (%)</label>
       <input type="number" class="form-control" name="evolterresp[concep][oxigsuplfio2]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Kinesioterapia Respiratoria</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Drenaje Postural</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioterdrenpostur]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Percusion</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioterpercus]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Vibración</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosiotervibra]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">MAF</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosiotermaf]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Tos Asistida</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosiotertosasis]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Ejercicio Respiratorio</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioterejercresp]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Aspiracion De secreciones</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioteraspirsecre]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Reclutamiento Alveolar</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioterreclutalveol]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Rehabilitación Diafragmatica</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioterrehabdiafrag]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Incentivo Respirastorio</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][kinosioterincent]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Secreciones</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Adherentes</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][secreadherent]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Caracteristicas</label>
        <input type="text" class="form-control" name="evolterresp[concep][secrecaract]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Cantidad</label>
        <input type="text" class="form-control" name="evolterresp[concep][secrecant]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Gases Arteriales</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterresp[concep][secregasart]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Observaciones</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="evoldiaria">Análisis</label>
       <textarea class="form-control" name="evolterresp[concep][obsanalis]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
      <div class="col-lg-6">
        <label for="evoldiaria">Observaciones Cardiorespiratorias</label>
       <textarea class="form-control" name="evolterresp[concep][obscardioresp]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <fieldset id="seccobjplan">
    <legend><strong>Objetivos y Planes</strong></legend>
    <?
      if(is_array($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj)){
        $i=0;
        foreach($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj as $idobj=>$regobj){
          $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobj',array("idobj"=>$i,'cabecera'=>false,"datobj"=>$regobj[0],"planes"=>$regobj,"evolenf"=>true,"tipevolucion"=>'TERAPIA RESPIRATORIA'),"Refresh");
          $i++;
        }
      }
    ?>
  </fieldset>
  <div class="form-group">
    <div class="row text-center">
      <input type="hidden" name='tipoevolucion' value='TERAPIA RESPIRATORIA'>
      <button type="submit" name="formularioenviado" value="evolmed" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>