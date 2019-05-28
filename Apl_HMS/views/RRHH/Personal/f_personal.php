<?
  $fecha = explode("-",$personal->fecha_nac_t10);
  $edad = date("Y-m-d ")-$fecha[0];
  $readonly="";
  if(!empty($personal->idps_personal_t10)){
    $readonly = "readonly";
    $disabled = "disabled";
  }
  $acceso_sistema="";
  if(!empty($usuario->idps_usuarios_t0)){
    $acceso_sistema = 'SI';
  }
?>
      <div class="row">
        <div class="form-group row">
           <label for="primer_nombre" class="col-lg-2 control-label">Primer Nombre</label>
          <div class="col-lg-4">
            <input name="primer_nombre" type="text" class="form-control input-sm" required id="prim_nomb" placeholder="Primer Nombre" value="<?=$personal->prim_nomb_t10?>" required>
          </div>
           <label for="segundo_nombre" class="col-lg-1 control-label">Segundo Nombre</label>
          <div class="col-lg-4">
           <input name="segundo_nombre" type="text" class="form-control input-sm" id="nombre2" placeholder="Segundo Nombre" value="<?=$personal->seg_nomb_t10?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="primer_apellido" class="col-lg-2 control-label">Primer Apellido</label>
          <div class="col-lg-4">
           <input name="primer_apellido" type="text" class="form-control input-sm" required id="primer_apellido" placeholder="Primer Apellido" value="<?=$personal->prim_apell_t10?>" required>
          </div>
           <label for="segundo_apellido" class="col-lg-1 control-label">Segundo Apellido</label>
          <div class="col-lg-4">
           <input name="segundo_apellido" type="text" class="form-control input-sm" id="segundo_apellido" placeholder="Segundo Apellido" value="<?=$personal->seg_apell_t10?>">
          </div>
        </div>
        <div class="form-group row">
           <label for="identiftipo" class="col-lg-2 control-label">Tipo de Identificación</label>
          <div class="col-lg-3" >
           <select class="form-control input-sm" name="tipo_identificacion" required>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Personal->arr_tipo_identificacion,"idtipo","tipo",$personal->tipo_identificacion_t10))?>
           </select>
          </div>
           <label for="numero_identificacion" class="col-lg-2 control-label">N° de Identificación</label>
          <div class="col-lg-3">
           <input name="numero_identificacion" type="text" class="form-control input-sm required" id="numero_identificacion" placeholder="No de Identificación" value="<?=$personal->numero_identificacion_t10?>" required>
           </div>
        </div>
        <div class="form-group row">
          <label for="fecha_nacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
           <div class="col-lg-3">
            <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             <input name="fecha_nacimiento" type="text" class="form-control form_date" id="fecha_nacimiento" placeholder="Nacimiento" value="<?=$personal->fecha_nac_t10?>" required>
            </div>
           </div>
             <label for="edad" class="col-lg-2 control-label">Edad</label>
          <div class="col-lg-3">
           <input disabled name="edad" type="text" class="form-control input-sm" id="ident" placeholder="Edad" value="<?=$edad?>" required>
          </div>
        </div>
        <div class="form-group row">
           <label for="lugar_nacimiento" class="col-lg-2 control-label">Lugar de Nacimiento</label>
           <div class="col-lg-3">
              <select class="form-control input-sm" name="lugar_nacimiento">
                   <option value="" >Seleccione Lugar de nacimiento</option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->listar_ciudades(),"codigo_dane_t13","ciudad_t13",$personal->lugar_nac_t10))?>
               </select>
           </div>
            <label for="sexo" class="col-lg-2 control-label">Genero</label>
           <div class="col-lg-3">
            <select name="genero"  class="form-control input-sm" required>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Personal->arr_genero,"tipogenero","genero",$personal->genero_t10))?>                 
            </select>
           </div>  
        </div>
        <div class="form-group row">
          <label for="rh" class="col-lg-2 control-label">RH</label>
          <div class="col-lg-3">
           <select class="form-control input-sm" name="rh"  >
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Personal->arr_rh,"tipo_rh","rh",$paciente->rh_t3))?>
           </select>
          </div>
          <label for="email" class="col-lg-2 control-label">E-mail</label>
          <div class="col-lg-3">
           <input name="email" type="email" class="form-control input-sm" id="email" placeholder="E-mail" value="<?=$personal->email_t10?>">
          </div> 
        </div>
        <div class="form-group row">
          <label for="ciudad" class="col-lg-2 control-label">Ciudad</label>
                <div class="col-lg-3">
                <select class="form-control input-sm" name="ciudad" id="ciudad" required>
                 <option value="">Seleccione Municipio</option>
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->listar_ciudades(),"codigo_dane_t13","ciudad_t13",$personal->ciudad_t10))?>
                </select>
                </div>
            <label for="direccion" class="col-lg-2 control-label">Dirección</label>
            <div class="col-lg-3">
                <input name="direccion" type="text"  class="form-control input-sm" id="direccion" placeholder="Dirección" value="<?=$personal->direccion_t10?>" required>
            </div>    
        </div>
        <div class="form-group row">
              <label for="barrio" class="col-lg-2 control-label">Barrio</label>
              <div class="col-lg-3">
                <input name="barrio" type="text"  class="form-control input-sm" id="barrio" placeholder="Barrio" value="<?=$personal->barrio_t10?>">
              </div> 
              <label for="ntelefono" class="col-lg-2 control-label">N° de Telefono</label>
              <div class="col-lg-3">
                <input name="ntelefono" type="text" class="form-control input-sm" id="ntelefono" placeholder="Telefono" value="<?=$personal->ntelefono_t10?>">
               </div>
        </div>
        <div class="form-group row">
                <label for="numero_celular" class="col-lg-2 control-label">N° de Celular</label>
                <div class="col-lg-3">
                  <input name="ncelular" type="text" class="form-control input-sm" id="ncelular" placeholder="N° de Celular" value="<?=$personal->ncelular_t10?>" required>
                </div>
        
                  <label for="estado" class="col-lg-2 control-label">Estado </label>
                  <div class="col-lg-3">
                    <select class="form-control input-sm" name="estado"  required>
                      <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Personal->arr_estado,"estado","estado",$personal->estado_t10))?>
                    </select>
                  </div>
        </div>
        <div class="form-group row">
          <label for="cargo" class="col-lg-2 control-label">Cargo</label>
          <div class="col-lg-3">
          <select class="form-control input-sm" name="cargo" required>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Personal->arr_cargo,"tipo_cargo","cargo",$personal->cargo_t10))?>
          </select>
          </div>
          <label for="registromedico" class="col-lg-2 control-label">Registro Médico</label>
          <div class="col-lg-3">
            <input name="registromedico" type="text"  class="form-control input-sm" id="registromedico" placeholder="Registro Médico" value="<?=$personal->registromedico_t10?>" required>
          </div> 
        </div>
      </div>