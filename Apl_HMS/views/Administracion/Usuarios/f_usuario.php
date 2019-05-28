        <div class="form-group">
          <label for="idusr" class="col-lg-2 control-label">Id Usuario</label>
          <div class="col-lg-4">
            <input  name="id_usuarios" type="text" class="form-control input-sm" id="id_usuarios" placeholder="Idusr" value="<?=$usuario->idps_usuarios_t0?>" required>
          </div>
          <label for="cnt" class="col-lg-1 control-label">Contraseña:</label>
          <div class="col-lg-3">
           <input name="cnt" type="password" class="form-control input-sm" id="cnt" placeholder="Contraseña" value="">
          </div>
        </div>
      <div class="form-group">
          <label for="roles" class="col-lg-3 control-label">
            Roles \<br/>Servicios Habilitados</label>
          <div class="col-lg-9">
            <?=$this->load->view('Administracion/Usuarios/f_usuario_rol',"",true);?>
          </div>
      </div>
      <div class="form-group">
        <label for="especialidades" class="col-lg-2 control-label">Especialidad:</label>
        <div class="col-lg-8">
          <?=$this->load->view('Genericas/gen_lista_check',$this->Modulo->confmenucheck($this->Especialidades->listar(),"idps_especialidades_t9","especialidades_t9","20","especialidades", $personal->especialidades ))?>
        </div>
       </div>
      <div class="form-group">
       <label for="firma" class="col-lg-2 control-label"></label>
       <div class="row col-lg-4">
          <div class="box box-default">
            <input name="firma" type="file" class="filestyle" id="firma" placeholder="Firma" data-buttonText=" Subir Firma" >
          </div>
        </div>
      </div>