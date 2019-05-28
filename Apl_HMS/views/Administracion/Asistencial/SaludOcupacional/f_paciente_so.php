<?
  //var_dump($dathistoria);
  //var_dump($this->Constante->tipoaseguradora);
  //var_dump($datpaciente);
  $datpacdef = (object)array(
    tipoadmin=>'EPS',
    administradoracod=>'ESS024'
  );
  $causaext='ENFERMEDAD GENERAL';
  if(!empty($dathistoria->causaext_t4)){
    $causaext = $dathistoria->causaext_t4;
  }
  
  $ubicacion='CONSULTA EXTERNA';
  if(!empty($dathistoria->ubicacion_t4)){
    $ubicacion = $dathistoria->ubicacion_t4;
  }
  
  $viaing='CONSULTA EXTERNA';
  if(!empty($dathistoria->viaing_t4)){
    $viaing = $dathistoria->viaing_t4;
  }
  
  if(!empty($datpaciente->tipoadmin_t3)){
    $datpacdef->tipoadmin = $datpaciente->tipoadmin_t3;
    $datpacdef->administradoracod = $datpaciente->administradoracod_t3;
  }
  $readonly="";
  if(!empty($datpaciente->identificacion_t3)){
    $readonly = "readonly";
    $disabled = "disabled";
  }
  $ingreso = $dathistoria->fingreso_t4;
  if(empty($ingreso)){
    $ingreso = date('Y-m-d H:i');
  }
  $estado = $datpaciente->estado_t3;
  if(is_null($estado)){
    $estado = 'ACTIVO';
  }
  if(strtotime($datpaciente->fnacim_t3)!=false){
    $fechanacim["Y"]=date("Y",strtotime($datpaciente->fnacim_t3));
    $fechanacim["m"]=date("m",strtotime($datpaciente->fnacim_t3));
    $fechanacim["d"]=date("d",strtotime($datpaciente->fnacim_t3));
  }
?>
           <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
           <input type="hidden" name="tipocta" value="SALUD OCUPACIONAL" />
           <input type="hidden" name="ubicacion" value="CONSULTA EXTERNA" />
           <input type="hidden" name="viaing" value="CONSULTA EXTERNA" />
           <input type="hidden" name="estado" value="ADMITIDO" />
           <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">Tipo de Identificación</label>
             <div class="col-lg-3">
               <select class="form-control input-sm" name="identiftipo" required>
                 <option></option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_tiposident,"idtipo","tipo",$datpaciente->identiftipo_t3))?>
               </select>
             </div>
             <label for="identificacion" class="col-lg-2 control-label">N° de Identificación</label>
             <div class="col-lg-3">
               <input <?=$readonly?> name="identificacion" type="number" class="form-control input-sm" id="identificacion" placeholder="Identificacion" value="<?=$datpaciente->identificacion_t3?>" required>
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="apellido1" class="col-lg-2 control-label">Primer Apellido</label>
             <div class="col-lg-3">
               <input name="apellido1" type="text" class="form-control input-sm" id="apellido1" placeholder=" 1er apellido" value="<?=$datpaciente->apellido1_t3?>" required>
             </div>
             <label for="apellido2" class="col-lg-2 control-label">Segundo Apellido</label>
             <div class="col-lg-3">
               <input name="apellido2" type="text" class="form-control input-sm" id="apellido2" placeholder=" 2do apellido" value="<?=$datpaciente->apellido2_t3?>">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="nombre1" class="col-lg-2 control-label">Primer Nombre</label>
             <div class="col-lg-3">
               <input name="nombre1" type="text" class="form-control input-sm" id="nombre1" placeholder=" 1er Nombre" value="<?=$datpaciente->nombre1_t3?>" required>
             </div>
             <label for="nombre2" class="col-lg-2 control-label">Segundo Nombre</label>
             <div class="col-lg-3">
               <input name="nombre2" type="text" class="form-control input-sm" id="nombre2" placeholder=" 2do Nombre" value="<?=$datpaciente->nombre2_t3?>">
             </div>
           </div>
           

        <div class="form-group row"> 
          <div class="col-lg-1">
          </div>
         <label for="genero" class="col-lg-2 control-label">Genero</label>
         <div class="col-lg-3">
           <select class="form-control input-sm" name="genero" id="genero" required>
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_generos,"idgenero","genero",$datpaciente->genero_t3))?>
           </select>
         </div>  
         <label for="fnacimi" class="col-lg-2 control-label">Fecha de Nacimiento</label>
         <div class="col-lg-3">
           <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             <div class="form-control no-padding no-margin">
               <div class="no-padding no-margin col-lg-4">
                  <input name="fnacim[dia]" type="text" class="form-control" id="fnacim_dia" placeholder="DD" value="<?=$fechanacim["d"]?>"  size="3" required onblur="calculaedad()">
                </div>
                <div class="no-padding no-margin col-lg-4">
                  <input name="fnacim[mes]" type="text" class="form-control" id="fnacim_mes" placeholder="MM" value="<?=$fechanacim["m"]?>" size="3" required onblur="calculaedad()">
                </div>
                <div class="no-padding no-margin col-lg-4">
                  <input name="fnacim[ano]" type="text" class="form-control" id="fnacim_ano" placeholder="YYYY" value="<?=$fechanacim["Y"]?>" size="5" required onblur="calculaedad()" >
                </div>
             </div>
           </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
             </div>
          <label for="fingreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
          <div class="col-lg-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fingreso" type="text" class="form-control form_date" id="fingreso" placeholder="Fecha" value="<?=$ingreso?>" >
            </div>
            
          </div>
          <label for="edad" class="col-lg-2 control-label">Edad</label>
          <div class="col-lg-3">
           <input disabled name="edad" type="text" class="form-control input-sm" id="edad" placeholder="Edad" value="<?=$datpaciente->edad["a"]?>">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
         <label for="estadocivil" class="col-lg-2 control-label">Estado Civil</label>
         <div class="col-lg-3">
           <select class="form-control input-sm" name="estadocivil"  id="estadocivil" >
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_estadocivil,"idestadocivil","estadocivil",$datpaciente->estadocivil_t3))?>
           </select>
         </div>
         <label for="municipio" class="col-lg-2 control-label">Municipio</label>
         <div class="col-lg-3">
           <input class="form-control input-sm" name="municipio" type="text" id="municipio" placeholder="Municipio" value="<?=$datpaciente->municipio_t3?>" required>
           <input name="municipiocod" type="hidden" id="municipiocod" value="<?=$datpaciente->municipiocod_t3?>">
         </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
         <label for="niveduccod" class="col-lg-2 control-label">Nivel Educativo</label>
          <div class="col-lg-3">
            <select class="form-control input-sm" name="niveduccod" id="niveduccod" required>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->niveduc(),"codniveduc_t104","niveduc_t104",$datpaciente->niveduccod_t3))?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
           <label for="direccion" class="col-lg-2 control-label">Residencia</label>
           <div class="col-lg-3">
             <input class="form-control input-sm" name="direccion" type="text"  id="direccion" placeholder=" Direccion" value="<?=$datpaciente->direccion_t3?>" required>
           </div>
           <label for="telefono" class="col-lg-2 control-label">N° de Telefono</label>
           <div class="col-lg-3">
             <input name="telefono" type="text" class="form-control input-sm" id="telefono" placeholder=" Telefono" value="<?=$datpaciente->telefono_t3?>" required>
           </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
          <label for="tipoaseg" class="col-lg-2 control-label">Tipo Administradora</label>
          <div class="col-lg-3">
            <select class="form-control input-sm" name="tipoaseg" id="tipoaseg" required>
             <option></option> 
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->tipoaseguradora,"tipo","tipo",$datpacdef->tipoadmin))?>
            </select>
          </div>
         <label for="administradora" class="col-lg-2 control-label">Administradora</label>
         <div class="col-lg-3">
           
           
           <select name="administradoracod" class="form-control input-sm" value="" required>
             <option></option> 
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->administradoras_listar(),"codministerio_t70","nombre_t70",$datpacdef->administradoracod))?>
           </select>
         </div> 
       </div>
           
       
       <div class="form-group">
         <div class="row text-center">
          <br/>
          <?if($dathistoria->estado_t4!=='CERRADA'){?>
           <button name="formularioenviado" value="paciente" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
          <?}?>
         </div>
       </div>
