  <select class="form-control input-sm" name="medicos" id="medicos" >
    <option value="">SELECCIONE MEDICO</option>
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->obtener_especialidades_medico($idespec),"numero_identificacion_t10","nomcomp_t10",''))?>
  </select>