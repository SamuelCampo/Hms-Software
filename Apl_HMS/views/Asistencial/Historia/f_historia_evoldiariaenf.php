  <fieldset>
    <legend><strong>Neurológico</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Estado de conciencia</label>
       <input type="text" class="form-control" name="evolenf[concep][estconciencia]" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Presencia de Dolor</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][precdolor]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Escala Analoga Del Dolor</label>
       <input type="text" class="form-control" name="evolenf[concep][escanalogdolor]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Glasgow (/15)</label>
       <input type="text" class="form-control" name="evolenf[concep][galsgow]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Pupilas</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
        <label for="evoldiaria">Derecha</label>
        <input type="text" class="form-control" name="evolenf[concep][pupder]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Izquierda</label>
       <input type="text" class="form-control" name="evolenf[concep][pupizq]" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Tamaño Derecha</label>
        <input type="text" class="form-control" name="evolenf[concep][puptamder]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tamaño Izquierda</label>
       <input type="text" class="form-control" name="evolenf[concep][puptamizq]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Hemodinámico</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Frecuencia Cardiaca Mayor (L/min)</label>
       <input type="text" class="form-control" name="evolenf[concep][freccardmayor]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Frecuencia Cardiaca Menor (L/min)</label>
       <input type="text" class="form-control" name="evolenf[concep][freccardmenor]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tensión Arterial Mayor (mmHg)</label>
       <input type="text" class="form-control" name="evolenf[concep][tensartmayor]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tensión Arterial Menor (mmHg)</label>
       <input type="text" class="form-control" name="evolenf[concep][tensartmenor]" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
        <label for="evoldiaria">Vasoactivo</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][vasoactiv]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Cual?</label>
       <input type="text" class="form-control" name="evolenf[concep][vasoactcual]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Ritmo</label>
       <input type="text" class="form-control" name="evolenf[concep][ritmo]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Observaciones</label>
       <input type="text" class="form-control" name="evolenf[concep][obs]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Eliminación</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Tipo de Eliminación</label>
       <input type="text" class="form-control" name="evolenf[concep][elimtipo]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Cual?</label>
       <input type="text" class="form-control" name="evolenf[concep][elimcual]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Caracteristicas de la orina</label>
       <input type="text" class="form-control" name="evolenf[concep][orinacarac]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Gasto Urinario cc/kg/h</label>
       <input type="text" class="form-control" name="evolenf[concep][urinariogasto]" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
        <label for="evoldiaria">Diuretico</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][diuretic]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Deposición</label>
        <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][deposic]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Características</label>
       <input type="text" class="form-control" name="evolenf[concep][deposcarac]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Nutricional</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Mucosa Oral</label>
       <input type="text" class="form-control" name="evolenf[concep][nutricmucosoral]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Comportamiento Glicemia</label>
       <input type="text" class="form-control" name="evolenf[concep][nutcompglicemia]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Intervención</label>
       <input type="text" class="form-control" name="evolenf[concep][nutinterv]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Alteración de la Deglución</label>
       <input type="text" class="form-control" name="evolenf[concep][nutaltdegluc]" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Electrolitos</label>
       <input type="text" class="form-control" name="evolenf[concep][nutelectrol]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Intervención</label>
       <input type="text" class="form-control" name="evolenf[concep][nutinterv]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">N.V.O</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][nutnvo]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Vía Oral</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][nutviaor]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Dieta</label>
       <input type="text" class="form-control" name="evolenf[concep][nutdieta]" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Enteral</label>
         <label class="checkbox-inline">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][nutenteral]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
          </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Formula</label>
       <input type="text" class="form-control" name="evolenf[concep][nutform]" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Parenteral</label>
         <label class="checkbox-inline">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][nutparentera]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
          </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Dosis</label>
       <input type="text" class="form-control" name="evolenf[concep][nutdosis]"  required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Meta</label>
       <input type="text" class="form-control" name="evolenf[concep][nutmeta]" required />
      </div>
      <div class="col-lg-3">
        <label for="evoldiaria">Tolera</label>
         <label class="checkbox-inline">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][nuttolera]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
          </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Infeccioso</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Medida Aislamiento</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][infecmedaisl]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Tipo Aislamiento</label>
       <input type="text" class="form-control" name="evolenf[concep][infectipoaisl]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Temperatura</label>
       <input type="text" class="form-control" name="evolenf[concep][infectemp]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Antibiotico</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][infecantib]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Medios Ivasivos</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Acceso Venoso Periferico</label>
       <input type="text" class="form-control" name="evolenf[concep][medinvaccvenperif]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Localización</label>
       <input type="text" class="form-control" name="evolenf[concep][medinvlocaliz]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Días Inserción</label>
       <input type="number" class="form-control" name="evolenf[concep][medinvdiasinserc]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Estado</label>
       <input type="text" class="form-control" name="evolenf[concep][medinvestad]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Estado de la Piel</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Integra</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][estpielintegra]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Descripción</label>
       <input type="text" class="form-control" name="evolenf[concep][estpieldescrip]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">UPP</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][estpielupp]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Descripción</label>
       <input type="text" class="form-control" name="evolenf[concep][estpieldescrip]" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Herida Quirurgica</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][estpielherquir]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Descripción</label>
       <input type="text" class="form-control" name="evolenf[concep][estpieldescrip]" required />
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Objetivos Específicos</strong></legend>
    <div class="form-group">
      <div class="col-lg-4">
       <label for="evoldiaria">TAM</label>
       <input type="text" class="form-control" name="evolenf[concep][objespecif]" required />
      </div>
      <div class="col-lg-4">
       <label for="evoldiaria">Aporte de LEV en 24H</label>
       <input type="text" class="form-control" name="evolenf[concep][objesplev]" required />
      </div>
      <div class="col-lg-4">
       <label for="evoldiaria">Glucometria (Rango)</label>
       <label class="checkbox-inline">
          <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolenf[concep][objespglucom]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Gestión de Riesgo</strong></legend>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Riesgo No. 1</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg1]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Plan Riesgo No. 1</label>
       <input type="text" class="form-control" name="evolenf[concep][gestiriesg1plan]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Riesgo No. 2</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg2]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Plan Riesgo No. 2</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg2plan]" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3">
       <label for="evoldiaria">Riesgo No. 3</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg3]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Plan Riesgo No. 3</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg3plan]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Riesgo No. 4</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg4]" required />
      </div>
      <div class="col-lg-3">
       <label for="evoldiaria">Plan Riesgo No. 4</label>
       <input type="text" class="form-control" name="evolenf[concep][gestriesg4plan]" required />
      </div>
    </div>
  </fieldset>
  <fieldset id="seccobjplan">
    <legend><strong>Objetivos y Planes</strong></legend>
    <?
      if(is_array($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj)){
        $i=0;
        foreach($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj as $idobj=>$regobj){
          $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobj',array("idobj"=>$i,'cabecera'=>false,"datobj"=>$regobj[0],"planes"=>$regobj,"evolenf"=>true,"tipevolucion"=>'ENFERMERÍA'),"Refresh");
          $i++;
        }
      }
    ?>
  </fieldset>
  <fieldset>
    <legend><strong>Pendientes</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="evoldiaria">Actividades</label>
        <textarea class="form-control" name="evolenf[concep][pendientes]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><strong>Observaciones</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">
       <textarea class="form-control" name="evolenf[concep][obs]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
  <div class="form-group">
    <div class="row text-center">
      <input type="hidden" name='tipoevolucion' value='ENFERMERÍA'>
      <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>


