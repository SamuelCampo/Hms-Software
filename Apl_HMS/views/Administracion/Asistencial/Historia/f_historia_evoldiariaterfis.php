  <fieldset>
    <legend><strong>Exploración Física</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Deglucion</label>
       <input type="text" class="form-control" name="evolterfis[concep][expfisdegluc]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Edema</label>
        <input type="text" class="form-control" name="evolterfis[concep][expfisedem]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Arcos De movimiento Normal</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][expfisarcmovnorm]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Arcos de Movimiento Disminuido</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][expfisarcmovdism]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Grados</label>
       <input type="text" class="form-control" name="evolterfis[concep][expfisgrad]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Fuerza Muscular</label>
        <input type="number" class="form-control" name="evolterfis[concep][expfisfmusc]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tono Muscular</label>
       <input type="number" class="form-control" name="evolterfis[concep][expfistonmusc]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Escala de Aswhort</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][expfisescaswho]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Retracciones Musculares</label>
       <input type="text" class="form-control" name="evolterfis[concep][expfisretacmusc]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Movilidad</label>
        <input type="text" class="form-control" name="evolterfis[concep][expfismovil]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Pie Caido</label>
       <input type="number" class="form-control" name="evolterfis[concep][expfispiecai]" id="evoldiaria" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Exploración Neurológica</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">RASS</label>
       <input type="text" class="form-control" name="evolterfis[concep][explneurrass]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Glasgow (/15)</label>
        <input type="text" class="form-control" name="evolterfis[concep][explneurglasg]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Pares Craneales</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][explneurparcran]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Cual?</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][explneurparcrancual]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Reflejos</label>
       <input type="text" class="form-control" name="evolterfis[concep][explneurreflej]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Cual?</label>
        <input type="text" class="form-control" name="evolterfis[concep][explneurreflejcual]" id="evoldiaria" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Deficiencia Muscular</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][explneurdefmusc]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Nivel Motor</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("nombre"=>"evolterfis[concep][explneurnivmot]","tipo"=>"checkbox","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset id="seccobjplan">
    <legend><strong>Objetivos y Planes</strong></legend>
    <?
      if(is_array($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj)){
        $i=0;
        foreach($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj as $idobj=>$regobj){
          $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobj',array("idobj"=>$i,'cabecera'=>false,"datobj"=>$regobj[0],"planes"=>$regobj,"evolenf"=>true,"tipevolucion"=>'TERAPIA FÍSICA'),"Refresh");
          $i++;
        }
      }
    ?>
  </fieldset>
  <fieldset>
    <legend><strong>Observaciones</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">
       <textarea class="form-control" name="evolterfis[concep][obs]" id="evoldiaria" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <div class="form-group">
    <div class="row text-center">
      <input type="hidden" name='tipoevolucion' value='TERAPIA FÍSICA'>
      <button type="submit" name="formularioenviado" value="evolmed" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>


