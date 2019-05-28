<?
  
  if(empty($datagenda)){
    if(defined('HMSConfConsultorPorDef')){
      $cubicdef = HMSConfConsultorPorDef;
    }
    if(defined('HMSConfSitioAtenc')){
      $serviciodef = HMSConfSitioAtenc;
    }else{
      $serviciodef = "CONSULTA EXTERNA";
    }
    $fechap = explode("T",$fecha);
    $datagenda = (object)array(
      "idps_especialidades_t12"=>$especialidad->idps_especialidades_t9,
      "especialidades_t12"=>$especialidad->especialidades_t9,
      "numero_identificacion_t12"=>$medico->numero_identificacion_t10,
      "nomcompp_t12"=>$medico->nomcomp_t10,
      "servicio_t12"=>$serviciodef,
      "numcubic_t12"=>$cubicdef
      );
    if(!empty($orden)){
      $datagenda->procedimiento_t12=$orden->descripcion_t67;
      $datagenda->codproc_t12=$orden->codigo_t67;
    }
  }else{
    $fechap = explode(" ",$datagenda->fecha_programacion_t12);
    $fechae = explode(" ",$datagenda->fecha_ejecucion_t12);
  }
  //var_dump($fechap);exit;
?>
  <input type="hidden" name="interc[historia]" value="<?=$orden->idhistoria_t67?>"><input type="hidden" name="interc[orden]" value="<?=$orden->idhist_ordenes_t67?>">
  <div></div>
      <div  class="alert alert-danger fade in" style="display: none;" id="msjformagenda"></div>
      <div class="" id="ulltimasCitas"></div>
      <div class="col-lg-12">
        <div class="form-group">
          <label for="especialidades" class="col-lg-2 control-label">Especialidad:</label>
          <div class="col-lg-8">
            <input type="hidden" name="idespecialidad" id="idespecialidad" value="<?=$datagenda->idps_especialidades_t12?>" />
            <input name="especialidad" type="text" class="form-control" id="especialidad" placeholder="Especialidad" value="<?=$datagenda->especialidades_t12?>" readonly="readonly">
          </div>
        </div>
        <div class="form-group">
           <label for="personal" class="col-lg-2 control-label">Medico:</label>
           <div class="col-lg-8">
             <input type="hidden" name="idpersonal" id="idpersonal" value="<?=$datagenda->numero_identificacion_t12?>" />
             <input name="personal" type="text" class="form-control" id="personal" placeholder="Personal" value="<?=$datagenda->nomcompp_t12?>" readonly="readonly">
           </div>
        </div> 
        <div class="form-group">
          <label for="fecha_programacion" class="col-lg-2 control-label">Fecha de programación:</label>
          <div class="col-lg-4">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fecha_programacion" type="text" class="form-control" id="fecha_programacion" placeholder="Fecha de programación" value="<?=$this->Modulo->formatofecha($fechap[0])?>" readonly="readonly">
            </div>
          </div>
          <label for="hora_programacion" class="col-lg-1 control-label">Hora:</label>
          <div class="col-lg-3">
            <input name="hora_programacion" type="text" class="form-control" id="hora_programacion" placeholder="Hora" value="<?=substr($fechap[1],0,5)?>" readonly="readonly">
          </div>         
        </div>
        <div class="form-group">
          <label for="servicio" class="col-lg-2 control-label">Sitio Atención:</label>
          <div class="col-lg-4">
            <select class="form-control input-sm" name="servicio"  id="servicio" placeholder="Servicio" required>
              <option value="">Seleccionar</option>
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Estructura->obtener_agendable(),"descripcion_t8","descripcion_t8",$datagenda->servicio_t12))?>
            </select>
          </div>
           <label for="cubiculo" class="col-lg-1 control-label">Cubiculo: <span id="cubiculovalor"><?=$datagenda->numcubic_t12?></span></label>
           <div class="col-lg-3">
             <input name="cubiculo" type="range" class="form-control" id="cubiculo" placeholder="Cubiculo" value="<?=$datagenda->numcubic_t12?>" min="1" max="9" onchange="document.getElementById('cubiculovalor').innerHTML=this.value"  required>
           </div>            
        </div>
         <div class="form-group">
            <label for="procedimiento" class="col-lg-2 control-label">Procedimiento:</label>
            <div class="col-lg-8">
              <input name="proc_desc" type="text" class="form-control" id="proc_desc" placeholder="Procedimiento" value="<?=$datagenda->procedimiento_t12?>" required>
              <input name="procedimiento" type="hidden" id="procedimiento" value="<?=$datagenda->codproc_t12?>">
            </div>
        </div>
        <div class="form-group">
            <label for="observaciones" class="col-lg-2 control-label">Observación:</label>
            <div class="col-lg-8">
              <textarea class="form-control" rows="3" name="observaciones" id="observacion"><?=$datagenda->observaciones_t12?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="estado" class="col-lg-2 control-label">Estado:</label>
            <div class="col-lg-4">
              <select class="form-control input-sm" name="estado"  id="servicio" placeholder="Estado" required>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Agenda->arrestados,"estado","estado",$datagenda->estado_t12))?>
              </select>
            </div>
            <div class="form-group">
              <div class="row text-center">
                <label for="envsms" class=" control-label"></label>
                <div class="">
                  <input type="checkbox" name="envsms" id="envsms" class="" value="SMS" /> Enviar SMS.
                </div>
                <a href="<?=site_url('pacientes/agenda/imprimir/cita/'.$datagenda->idps_agenda_t12);?>" class="btn <?=$this->Planthtml->estilo->colorprinc?>"><i class="fa fa-print" aria-hidden="true"></i></a>
                <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
              </div>
            </div>
        </div>
      </div>
        