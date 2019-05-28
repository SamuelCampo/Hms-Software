<?
  $fecha = explode("T",$fecha);
  //var_dump($historia);
?>
<div class="row contenedorsobreadonopd">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li><a href="#tab_paciente" data-toggle="tab">Paciente</a></li>
            <li class="active"><a href="#tab_cita" data-toggle="tab" id="pestcita" >Cita</a></li>
          </ul>
          <div class="tab-content">
            
            <div class="tab-pane" id="tab_paciente">
              <div class="form-group">
                 <label for="documento" class="col-lg-2 control-label">Documento</label>
                 <div class="col-lg-8">
                   <input name="paciente[documento]" type="text" class="form-control input-sm" id="documento" placeholder="Documento de identidad" value="<?=$historia->identificacion_t3?>" readonly>
                 </div>
              </div>
              <div class="form-group">
                <label for="nombre1" class="col-lg-2 control-label">Primer nombre</label>
                <div class="col-lg-8">
                 <input name="paciente[nombre1]" type="text" class="form-control input-sm" id="nombre1" placeholder="Primer nombre" value="<?=$historia->nombre1_t3?>" readonly>
                </div>
              </div>
              <div class="form-group">
                 <label for="nombre2" class="col-lg-2 control-label">Segundo nombre</label>
                 <div class="col-lg-8">
                   <input name="paciente[nombre2]" type="text" class="form-control input-sm" id="nombre2" placeholder="Segundo nombre" value="<?=$historia->nombre2_t3?>" readonly>
                 </div>
              </div> 
              <div class="form-group">
                 <label for="apellido1" class="col-lg-2 control-label">Primer apellido</label>
                 <div class="col-lg-8">
                   <input name="paciente[apellido1]" type="text" class="form-control input-sm" id="apellido1" placeholder="Primer apellido" value="<?=$historia->apellido1_t3?>" readonly>
                 </div>
              </div> 
              <div class="form-group">
                 <label for="apellido2" class="col-lg-2 control-label">Segundo apellido</label>
                 <div class="col-lg-8">
                   <input name="paciente[apellido2]" type="text" class="form-control input-sm" id="apellido2" placeholder="Segundo apellido" value="<?=$historia->apellido2_t3?>" readonly>
                 </div>
              </div> 
              <div class="form-group">
                 <label for="telefono_contacto" class="col-lg-2 control-label">Telefono de contacto</label>
                 <div class="col-lg-8">
                   <input name="paciente[telefono_contacto]" type="text" class="form-control input-sm" id="telefono_contacto" placeholder="Telefono contacto" value="<?=$historia->telefono_t3?>" readonly>
                 </div>
              </div>
              <div class="form-group">
                 <label for="correo" class="col-lg-2 control-label">Correo Electrónico</label>
                 <div class="col-lg-8">
                   <input name="paciente[correo]" type="text" class="form-control input-sm" id="correo" placeholder="correo@dominio.com" value="<?=$historia->correo_t3?>" readonly>
                 </div>
              </div>
            </div>
            
            <div class="tab-pane active" id="tab_cita">
              <?=$this->load->view('Asistencial/Agenda/f_agenda_prop',"",true);?>
            </div>
          </div>
        </div>
</div>

