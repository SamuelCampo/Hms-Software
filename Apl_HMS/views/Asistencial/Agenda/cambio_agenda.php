   <?php   if(!empty($mensaje)){
    echo '<div class="row col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  } ?>
<form action="<?= site_url('pacientes/agenda/transladar/guardar')  ?>" name="formulario" method="post">
    <div class="row contenedorsobreadonopd">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Bloquear Fechas</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_paciente">
              <div class="form-group">
      <div class="col-lg-3">
        Especialidades <br> 
        <select class="form-control input-sm" name="especialidades" onchange="med_ret(this.options[this.selectedIndex].value)" id="especialidades" >
          <option value="">SELECCIONE ESPECIALIDAD</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico(),"idps_especialidades_t11","especialidades_t9",$agendaunimed->idps_especialidades_t11))?>
        </select>
      </div>
      <div class="col-lg-3 medicos">
        MEDICO <br>
        <?
          if($agendaunimed!==false){
            ?>
        <select class="form-control input-sm" name="medicos" id="medicos">
          <option value="">SELECCIONE MEDICO</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico($agendaunimed->idps_especialidades_t11),"numero_identificacion_t10","nomcomp_t10",$agendaunimed->idps_personal_t11))?>
        </select>
            <?
          }
        ?>
      </div>
      <div class="col-lg-3 medicos">
        MEDICO <br> 
        <?
          if($agendaunimed!==false){
            ?>
        <select class="form-control input-sm" name="medicosa" id="medicosa">
          <option value="">SELECCIONE MEDICO</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico($agendaunimed->idps_especialidades_t11),"numero_identificacion_t10","nomcomp_t10",$agendaunimed->idps_personal_t11))?>
        </select>
            <?
          }
        ?>
      </div>
        <div class="col-lg-3">
          FECHA
          <input type="text" class="form-control input-sm" name="fecha_programacion" id="fecha_programacion">
        </div>
        <div class="col-lg-1">
          <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" title="Cargar">
            Enviar
          </button>
        </div>
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <div class="input-group">
          <div class="form_date" style="margin-left: -80px"></div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </div>
</form> 