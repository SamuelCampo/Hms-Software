    <div class="form-group">
      <label for="especialidades" class="col-lg-1 control-label">Especialidades</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="especialidades" onchange="med_ret(this.options[this.selectedIndex].value)" id="especialidades" >
          <option value="">SELECCIONE ESPECIALIDAD</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico(),"idps_especialidades_t11","especialidades_t9",$agendaunimed->idps_especialidades_t11))?>
        </select>
      </div>
      <label for="medico" class="col-lg-1 control-label">MEDICO</label>
      <div class="col-lg-3" id="menumedicosxespec">
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
              <label for="horario" class="col-lg-1">Fecha</label>
        <div class="col-lg-2">
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