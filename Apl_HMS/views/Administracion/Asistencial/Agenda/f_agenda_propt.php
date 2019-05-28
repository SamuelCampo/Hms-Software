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
      "idps_especialidades_t12"=>$tercero->idespec_t16,
      "especialidades_t12"=>$tercero->espec_t16,
      "numero_identificacion_t12"=>$tercero->ident_t16,
      "nomcompp_t12"=>$tercero->desc_t16,
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



<form class="form-horizontal" role="form" action="<?=site_url("pacientes/agendat/nuevo/guardar")?>" method="post">
  <?
  $fecha = explode("T",$fecha);
?>
  <div class="row contenedorsobreadonopd">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Paciente</a></li>
        <li><a href="#tab_cita" data-toggle="tab" id="pestcita" >Cita</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_paciente">
          <?=$this->load->view('Asistencial/Agenda/f_agenda_selpac',"",true);?>
        </div>
        <div class="tab-pane" id="tab_cita">
          <div  class="alert alert-danger fade in" style="display: none;" id="msjformagenda"></div>
          <div class="col-lg-12">
            <div class="form-group">
                <label for="personal" class="col-lg-2 control-label">IPS Remitente:</label>
                <div class="col-lg-8">
                  <input name="ipsremit" type="text" class="form-control ipsremit" id="ipsremit" placeholder="IPS" value="" >
                  <input name="ipsremitcod" type="hidden" value="" />
                </div>
             </div>
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
                 <input type="hidden" name="idpersonal" value="<?=$datagenda->numero_identificacion_t12?>" />
                 <input name="personal" type="text" class="form-control" id="personal" placeholder="Personal" value="<?=$datagenda->nomcompp_t12?>" readonly="readonly">
               </div>
            </div> 
            <div class="form-group">
              <label for="personal" class="col-lg-2 control-label">IPS Médico:</label>
              <div class="col-lg-8">
                <input name="ipsmed" type="text" class="form-control" id="personal" placeholder="Personal" value="<?=$tercero->tercerref_t16?>" readonly="readonly">
                <input type="hidden" name="ipsmedcod" value="<?=$tercero->tercerrefcod_t16?>" />
              </div>
           </div>
            <div class="form-group">
              <label for="personal" class="col-lg-2 control-label">Dir - Tel:</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" value="<?=$tercero->direccion_t16?> - <?=$tercero->telefono1_t16?> <?=$tercero->telefono2_t16?>" readonly="readonly">
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
              <label for="servicio" class="col-lg-2 control-label">Servicio:</label>
              <div class="col-lg-4">
                <select class="form-control input-sm" name="servicio"  id="servicio" placeholder="Servicio" required>
                  <option value="">Seleccionar</option>
                  <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Serviciohab->listar(),"descripcion_t74","descripcion_t74",$datagenda->servicio_t12))?>
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
                <label for="estado" class="col-lg-2 control-label">Cantidad:</label>
                <div class="col-lg-4">
                  <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad" />
                </div>
                <label for="estado" class="col-lg-1 control-label">Estado:</label>
                <div class="col-lg-3">
                  <select class="form-control input-sm" name="estado"  id="servicio" placeholder="Estado" required>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Agenda->arrestados,"estado","estado",$datagenda->estado_t12))?>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="observaciones" class="col-lg-2 control-label">Observación:</label>
                <div class="col-lg-8">
                  <textarea class="form-control" rows="3" name="observaciones" id="observacion"><?=$datagenda->observaciones_t12?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                  <div class="row text-center">
                    <?if(!empty($datagenda->idps_agenda_t12)){?>
                      <a href="<?=site_url('pacientes/agendat/imprimir/cita/'.$datagenda->idps_agenda_t12);?>" class="btn <?=$this->Planthtml->estilo->colorprinc?>"><i class="fa fa-print" aria-hidden="true"></i></a>
                    <?}?>
                    <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                  </div>
                </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>    

<script type="text/javascript">
  $(".form_date").datetimepicker({
    format: 'yyyy-mm-dd',
    language:  'es',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
  });
</script>







          