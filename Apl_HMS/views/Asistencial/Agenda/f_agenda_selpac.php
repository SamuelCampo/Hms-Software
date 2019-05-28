    <div class="form-group">
        <label for="documento" class="col-lg-2 control-label">Documento</label>
        <div class="col-lg-8">
         <input name="paciente[documento]" type="text" class="form-control input-sm" id="documento" placeholder="Documento de identidad" value="<?=$historia->identificacion_t3?>" required>
        </div>
     </div>
     <div class="form-group">
       <label for="nombre1" class="col-lg-2 control-label">Primer nombre</label>
       <div class="col-lg-8">
        <input name="paciente[nombre1]" type="text" class="form-control input-sm" id="nombre1" placeholder="Primer nombre" value="<?=$historia->nombre1_t3?>" required>
       </div>
     </div>
     <div class="form-group">
        <label for="nombre2" class="col-lg-2 control-label">Segundo nombre</label>
        <div class="col-lg-8">
          <input name="paciente[nombre2]" type="text" class="form-control input-sm" id="nombre2" placeholder="Segundo nombre" value="<?=$historia->nombre2_t3?>">
        </div>
     </div> 
     <div class="form-group">
        <label for="apellido1" class="col-lg-2 control-label">Primer apellido</label>
        <div class="col-lg-8">
          <input name="paciente[apellido1]" type="text" class="form-control input-sm" id="apellido1" placeholder="Primer apellido" value="<?=$historia->apellido1_t3?>" required>
        </div>
     </div> 
     <div class="form-group">
        <label for="apellido2" class="col-lg-2 control-label">Segundo apellido</label>
        <div class="col-lg-8">
          <input name="paciente[apellido2]" type="text" class="form-control input-sm" id="apellido2" placeholder="Segundo apellido" value="<?=$historia->apellido2_t3?>">
        </div>
     </div> 
     <div class="form-group">
        <label for="telefono_contacto" class="col-lg-2 control-label">Telefono de contacto</label>
        <div class="col-lg-8">
          <input name="paciente[telefono_contacto]" type="text" class="form-control input-sm" id="telefono_contacto" placeholder="Telefono contacto" value="<?=$historia->telefono_t3?>" required>
        </div>
     </div>
     <div class="form-group">
        <label for="municipio" class="col-lg-2 control-label">Municipio</label>
        <div class="col-lg-8">
          <input name="paciente[municipio]" type="text" class="form-control input-sm" id="municipio" placeholder="Municipio" value="<?=$historia->municipio_t3?>">
          <input name="paciente[municipiocod]" type="hidden" id="municipiocod" value="<?=$historia->municipiocod_t3?>">
        </div>
     </div>
     <div class="form-group">
        <label for="correo" class="col-lg-2 control-label">Correo Electrónico</label>
        <div class="col-lg-8">
          <input name="paciente[correo]" type="text" class="form-control input-sm" id="correo" placeholder="correo@dominio.com" value="<?=$historia->correo_t3?>">
        </div>
     </div>