<div class="container">
            <?php if ($this->uri->segment(5) != ""): ?>
            <?php echo "El paciente tu sus ultimas citas el:" ?><br>  
            <?php foreach ($citas as $cita): ?>
              <?php echo $cita->fecha_programacion_t12." en la especialidad de ".$cita->especialidades_t12 ?><br> 
            <?php endforeach ?>
          <?php endif ?>
          </div>
           <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
           <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">Tipo de Identificación</label>
             <div class="col-lg-3">
               <select class="form-control input-sm" name="identiftipo" id="idident" required>
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
         <label for="rh" class="col-lg-2 control-label" >RH</label>
         <div class="col-lg-3">
           <select class="form-control input-sm" name="rh"  id="rh" required>
            <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_rh,"idrh","rh",$datpaciente->rh_t3))?>
           </select>
         </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
         <label for="fnacimi" class="col-lg-2 control-label">Fecha de Nacimiento</label>
         <div class="col-lg-3">
          <?php  $fecha = explode("-", $datpaciente->fnacim_t3);
           ?>
           <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             <div class="form-control no-padding no-margin">
               <div class="no-padding no-margin col-lg-4">
                  <input name="fnacim[dia]" type="text" class="form-control" id="fnacim_dia" placeholder="DD" value="<?=$fecha[2]?>"  size="3" required onblur="calculaedad()">
                </div>
                <div class="no-padding no-margin col-lg-4">
                  <input name="fnacim[mes]" type="text" class="form-control" id="fnacim_mes" placeholder="MM" value="<?=$fecha[1]?>" size="3" required onblur="calculaedad()">
                </div>
                <div class="no-padding no-margin col-lg-4">
                  <input name="fnacim[ano]" type="text" class="form-control" id="fnacim_ano" placeholder="YYYY" value="<?=$fecha[0]?>" size="5" required onblur="calculaedad()" >
                </div>
             </div>
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
          <label for="fingreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
          <div class="col-lg-3">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
              <input name="fingreso" readonly="readonly" type="text" class="form-control form_date" id="fingreso" placeholder="Fecha" value="<?=$ingreso?>" >
            </div>
            
          </div>
          <label for="zonares" class="col-lg-2 control-label">Zona Residencia</label>
          <div class="col-lg-3">
            <select class="form-control input-sm" name="zonares" id="zonares" required>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->zonarural,"idzona","zona",$datpaciente->zonares_t3))?>
            </select>
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
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
         <label for="grupoetnico" class="col-lg-2 control-label">Población de Riesgo</label>
         <div class="col-lg-3">
           <select class="form-control input-sm" name="tipoblacesp" id="tipoblacesp" required="">
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->tipopoblacesp(),"codigo_t102","tipoblac_t102",$datpaciente->tipoblacespcod_t3))?>
           </select>
         </div>
         <label for="niveduccod" class="col-lg-2 control-label">Nivel Educativo</label>
          <div class="col-lg-3">
            <select class="form-control input-sm" name="niveduccod" id="niveduccod" required="">
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->niveduc(),"codniveduc_t104","niveduc_t104",$datpaciente->niveduccod_t3))?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
         
         
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
           <label for="direccion" class="col-lg-2 control-label">Residencia</label>
           <div class="col-lg-3">
             <input class="form-control input-sm" name="direccion" type="text"  id="direccion" placeholder=" Direccion" value="<?=$datpaciente->direccion_t3?>" required>
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
           <label for="ocupacion" class="col-lg-2 control-label">Ocupación</label>
           <div class="col-lg-3">
             <input class="form-control input-sm" name="ocupacion" type="text" id="ocupacion" placeholder="Ocupacion" value="<?=$datpaciente->ocupacion_t3?>">
             <input name="ocupacioncod" type="hidden" id="ocupacioncod" value="<?=$datpaciente->ocupacioncod_t3?>" required>
           </div>
           <label for="telefono" class="col-lg-2 control-label">N° de Telefono</label>
           <div class="col-lg-3">
             <input name="telacom" type="text" class="form-control input-sm" id="telacom" placeholder=" Telefono" value="<?=$datpaciente->telefono_t3?>" required>
           </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
           <label for="direccion" class="col-lg-2 control-label" style="display: none">Domicilio</label>
           <div class="col-lg-3" style="display: none">
             <input class="form-control input-sm" name="direccio" type="text"  id="direccion" placeholder=" Direccion" value="<?=$datpaciente->direccion_t3?>">
           </div>
           <label for="telefono" class="col-lg-2 control-label" style="display: none">N° de Telefono</label>
           <div class="col-lg-3" style="display: none">
             <input name="" type="text" class="form-control input-sm" id="" placeholder=" Telefono" value="<?=$datpaciente->telefono_t3?>">
           </div>
        </div>

        <div class="form-group row">
          <div class="col-lg-1">
          </div>
           <label for="trabajo" class="col-lg-2 control-label" style="display: none">Info Trabajo</label>
           <div class="col-lg-3" style="display: none">
             <input name="trabajo" type="text" class="form-control input-sm" id="trabajo" placeholder=" Trabajo" value="<?=$datpaciente->trabajo_t3?>">
           </div>
           <label for="ocupacion" class="col-lg-2 control-label" style="display: none">Ocupación</label>
           <div class="col-lg-3" style="display: none">
             <input class="form-control input-sm" name="" type="text" id="ocupacion" placeholder="Ocupacion" value="<?=$datpaciente->ocupacion_t3?>">
             <input name="" type="hidden" id="ocupacioncod" value="<?=$datpaciente->ocupacioncod_t3?>" required>
           </div>
        </div>     
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
          <label for="tipoaseg" class="col-lg-2 control-label">Tipo Administradora</label>
          <div class="col-lg-3">
            <select class="form-control input-sm" name="tipoaseg" id="tipoaseg">
              <?php if ($datpaciente->tipoadmin_t3 != ""): ?>
              <option value="<?= $datpaciente->tipoadmin_t3  ?>"><?= $datpaciente->tipoadmin_t3  ?></option>
            <?php endif ?>
             <option></option> 
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->tipoaseguradora,"tipo","tipo",$datpaciente->administradoracod_t3))?>
            </select>
          </div>
          <label for="administradora" class="col-lg-2 control-label">Administradoras</label>
         <div class="col-lg-3">
           <select name="administradoracod" class="form-control input-sm" value="" required>
            <?php if ($datpaciente->administradora_t3 != ""): ?>
              <option value="<?= $datpaciente->administradoracod_t3  ?>"><?= $datpaciente->administradora_t3  ?></option>
            <?php endif ?>
             <option></option> 
             <?= $this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->tercero->listar_ad(),"cod_t16","desc_t16",$datpaciente->administradora_t3))?>
           </select>
         </div> 
       </div>   
       <div class="form-group row">
         <div class="col-lg-1">
         </div>
         <label for="tipoafiliacion" class="col-lg-2 control-label">Tipo Afiliación</label>
         <div class="col-lg-3">
           <select class="form-control input-sm" name="tipoafiliacion"  id="tipoafiliacion">
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->tipoafiliacion,"tipo","tipo",$datpaciente->tipoaf_t3))?>
           </select>
         </div>
         <label for="nivel" class="col-lg-2 control-label">Nivel</label>
         <div class="col-lg-3">
           <select name="nivel" class="form-control input-sm" value="<?=$datpaciente->nivel_t3?>" id="nivel" required>
             <option></option>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_nivel,"idnivel","nivel",$datpaciente->nivel_t3))?>
           </select>
         </div> 
       </div> 
        <div class="form-group row">
          <div class="col-lg-1">
          </div>
          <label for="cuotamod" class="col-lg-2 control-label">Cuota Moderadora</label>
          <div class="col-lg-3">
            <input readonly="readonly" name="cuotamod" type="text" class="form-control input-sm" id="cuotamod" placeholder="Cuota Moderadora" value="<?=$datpaciente->cuotamoderadora_t3?>">
          </div>
         <label for="copago" class="col-lg-2 control-label">Copago</label>
         <div class="col-lg-3">
           <input readonly="readonly" name="copago" type="text" class="form-control input-sm" id="copago" placeholder="Copago" value="<?=$datpaciente->copago_t3?>">
         </div>
       </div> 
       <div class="form-group row">
         <div class="col-lg-1">
             </div>
         <label for="emerg1" class="col-lg-2 control-label" >Acompañante</label>
         <div class="col-lg-3">
           <input name="emerg1" type="text" class="form-control input-sm" id="emerg1" placeholder=" Avisar a" value="<?=$datpaciente->emerg1_t3?>">
         </div>
         <div class="col-lg-2">
             </div>
         <div class="col-lg-2" >
           <input name="emerg3" type="text" class="form-control input-sm" id="emerg3" placeholder=" Parentesco" value="<?=$datpaciente->emerg1_t3?>">
         </div>
         <label for="emerg1tel" class="col-lg-2 control-label" style="display: none">Telefono</label>
         <div class="col-lg-2" style="">
            <input name="emerg1tel" type="text" class="form-control input-sm" id="emerg1tel" placeholder="Teléfono" value="<?=$datpaciente->emerg1tel_t3?>">
         </div>
       </div>
        <div class="form-group row">
         <div class="col-lg-1">
             </div>
         <label for="emerg1" class="col-lg-2 control-label">Responsable</label>
         <div class="col-lg-3" >
           <input name="" type="text" class="form-control input-sm" id="respons1" placeholder=" Responsable" value="<?=$datpaciente->emerg1_t3?>">
         </div>
         
         <label for="emerg1tel" class="col-lg-2 control-label" style="">Telefono</label>
         <div class="col-lg-2" style="">
            <input name="emerg1tel" type="text" class="form-control input-sm" id="emerg2tel" placeholder="Teléfono" value="<?=$datpaciente->emerg1tel_t3?>">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-1">
             </div>
         <label for="emerg2" class="col-lg-2 control-label" style="">En caso de emergencia avisar a</label>
         <div class="col-lg-3" style="">
           <input  name="emerg2" type="text" class="form-control input-sm" id="emerg2" placeholder="Nombre" value="<?=$datpaciente->emerg2_t3?>">
         </div> 
         <label for="telefono" class="col-lg-2 control-label" style="">Telefono</label>
         <div class="col-lg-3" style="">
           <input  name="emerg2tel" type="text" class="form-control input-sm" id="emerg3tel" placeholder="Teléfono" value="<?=$datpaciente->emerg2tel_t3?>">
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-1"></div>          
         <label for="ubicacion " class="col-lg-2 control-label" >Destinos</label>
         <div class="col-lg-3" >
          <?php //var_dump($destino); ?>
           <select name="ubicacion" class="form-control input-sm" id="ubicacion">
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->serviciohab->listar(),"descripcion_t74","descripcion_t74",$dathistoria->ubicacion_t4))?>
           </select>
      
         </div>
      <div id="camas">         
         <label for="ubicacion " class="col-lg-2 control-label" >Numero De Camas</label>
         <div class="col-lg-3" >
          <?php //var_dump($destino); ?>
           <select name="numero_cama" class="form-control input-sm" id="numero_camas">
             <option></option>
           </select>
         </div>
      </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-1"></div>
         <label for="viaing" class="col-lg-2 control-label" style="">Sede de Atencion</label>
         <div class="col-lg-3" style="">
           <select name="sede" class="form-control input-sm" id="sede" required>
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Estructura->listar(),"descripcion_t8","descripcion_t8",$datpaciente->sede_t3))?>
           </select>
           <br>
         </div>
         <label for="estado" class="col-lg-2  control-label" >Estado</label>
         <div class="col-lg-3" >
         <select name="estado" class="form-control input-sm" id="estado">
           <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_estados,"estado","estado",$estado))?>
         </select>
         <br>
         </div>
        <div class="col-lg-2"></div>
         <label for="viaing" class="col-lg-1 control-label" >Tipo Cuenta</label>
         <div class="col-lg-3" >
           <select name="tipocta" class="form-control input-sm" id="tipocta" >
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->tiposctas(),"tipocta_t99","tipocta_t99",$dathistoria->tipocta_t4))?>
           </select>
           <br>
         </div>
         <div class="col-lg-1"></div>
         <label for="grupoetnico" class="col-lg-1 control-label" >Grupo Étnico</label>
         <div class="col-lg-3" >
           <select class="form-control input-sm" name="grupoetcod" id="grupoetcod" >
             <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->grupoetnic(),"codgrupoetnic_t105","grupoetnic_t105",$datpaciente->grupoetcod_t3))?>
           </select>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-lg-1"></div>          
         <label for="ubicacion " class="col-lg-2 control-label" >Autorizaci&oacute;n</label>
         <div class="col-lg-3" >
            <input type="text" name="autorizacion" class="form-control" id="autorizacion" placeholder="123456789"> 
         </div>
         <br>
    </div>
       <div class="form-group row">
         <div class="col-lg-1">
             </div>
         <label for="obs" class="col-lg-2 control-label">Observaciones</label>
         <div class="col-lg-8">
           <textarea name="obs" cols="40" rows="3" class="form-control" id="obs"><?=$dathistoria->obs_t4?></textarea>
         </div>
       </div>
       <div class="form-group">
         <div class="row text-center">
          <br/>
          <?if($dathistoria->estado_t4!=='CERRADA'){?>
           <button name="formularioenviado" value="paciente" type="submit" id="enviar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
          <?}?>
         </div>
       </div>