<?
 $fecha = explode("-",$paciente->fnacim_t3);
  $edad = date("Y-m-d ")-$fecha[0];
  $readonly="";
  if(!empty($paciente->identificacion_t3)){
    $readonly = "readonly";
    $disabled = "disabled";
  }
  
?>

<div class="row no-padding no-margin">
  <div class="row panel-heading">
    <legend class="no-margin no-padding">
      Historia Clinica No. <?=$dathistoria->idps_historia_t4?> <b><?=$dathistoria->identificacion_t3?> <?=$dathistoria->nomcomp_t3?></b> <?=$edad?> años
    </legend>
      <div class="form-group">
        <div class="col-lg-3">
          <label class="control-label">Administradora:</label>
          <?=$dathistoria->administradora_t3?>
        </div>
        <div class="col-lg-2">
          <label class="control-label">Servicio:</label>
          <?=$dathistoria->ubicacion_t4?>
        </div>
        <div class="col-lg-3">
          <label class="control-label">Ingreso:</label>
          <?=$dathistoria->fingreso_t4?>
        </div>
        <div class="col-lg-4">
          <label class="control-label">Dx Principal:</label>
          <?=$dathistoria->diagnostico?>
        </div>
      </div>
  </div>
</div>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_paciente" data-toggle="tab">Datos Personales</a></li>
      <li><a href="#tab_motivo_ingreso" data-toggle="tab">Motivo de <br> Ingreso</a></li>
      <li><a href="#tab_antecedentes" data-toggle="tab">Antecedentes</a></li>
      <li><a href="#tab_exam_fisico" data-toggle="tab">Exámen Físico</a></li>
      <li><a href="#tab_impre_diagnostica" data-toggle="tab">Impresión  <br> Diágnostica</a></li>
      <li><a href="#tab_evolucion_medica" data-toggle="tab">Evolución <br> Medica</a></li>
      <li><a href="#tab_laboratorios" data-toggle="tab">Ordenes, Laboratorios <br> e Imágenes diagnósticas</a></li>
      <li><a href="#tab_plan_tratamiento" data-toggle="tab">Plan de <br> Tratamiento</a></li>
    </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_paciente">
       <fieldset style="margin:0 1em;">
        <legend>Historia Clinica No.</legend>
         <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" onsubmit="">
          
              <div class="form-group row">
                <label for="identiftipo" class="col-lg-2 control-label">Tipo de Identificación</label>
                <div class="col-lg-3">
                  <select class="form-control input-sm" name="identiftipo" >
                    <option></option>
                  <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_tiposident,"idtipo","tipo",$paciente->identiftipo_t3))?>
                  </select>
                </div>
                <label for="identificacion" class="col-lg-2 control-label">N° de Identificación</label>
                <div class="col-lg-3">
                  <input <?=$readonly?> name="identificacion" type="text" class="form-control input-sm" id="identificacion" placeholder=" Identificacion" value="<?=$paciente->identificacion_t3?> ">
                </div>
              </div>
              <div class="form-group row">
                <label for="nombre1" class="col-lg-2 control-label">Primer nombre</label>
                <div class="col-lg-3">
                  <input name="nombre1" type="text" class="form-control input-sm" id="nombre1" placeholder=" 1er Nombre" value="<?=$paciente->nombre1_t3?>">
                </div>
                <label for="nombre2" class="col-lg-2 control-label">Segundo nombre</label>
                <div class="col-lg-3">
                  <input name="nombre2" type="text" class="form-control input-sm" id="nombre2" placeholder=" 2do Nombre" value="<?=$paciente->nombre2_t3?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="apellido1" class="col-lg-2 control-label">Primer apellido</label>
                <div class="col-lg-3">
                  <input name="apellido1" type="text" class="form-control input-sm" id="apellido1" placeholder=" 1er apellido" value="<?=$paciente->apellido1_t3?>">
                </div>
                <label for="apellido2" class="col-lg-2 control-label">Segundo nombre</label>
                <div class="col-lg-3">
                  <input name="apellido2" type="text" class="form-control input-sm" id="apellido2" placeholder=" 2do apellido" value="<?=$paciente->apellido2_t3?>">
                </div>
              </div>
          
           <div class="form-group row"> 
            <label for="genero" class="col-lg-2 control-label">Genero</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="genero" id="genero">
                <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_generos,"idgenero","genero",$paciente->genero_t3))?>
              </select>
            </div>  
            <label for="rh" class="col-lg-2 control-label">RH</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="rh"  id="rh"  >
               <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_rh,"idrh","rh",$paciente->rh_t3))?>
              </select>
            </div>
           </div>
           <div class="form-group row">
            <label for="fnacimi" class="col-lg-2 control-label">Fecha de Nacimiento</label>
            <div class="col-lg-3">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input name="fnacim" type="text" class="form-control form_date" id="fnacim" placeholder="Nacimiento" value="<?=$paciente->fnacim_t3?>">
              </div>
            </div>
            <label for="edad" class="col-lg-2 control-label">Edad</label>
                <div class="col-lg-3">
                 <input disabled name="edad" type="text" class="form-control input-sm" id="ident" placeholder="Edad" value="<?=$edad?>">
                </div>
           </div>
           <div class="form-group row">
            <label for="estadocivil" class="col-lg-2 control-label">Estado Civil</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="estadocivil"  id="estadocivil" >
                <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_estadocivil,"idestadocivil","estadocivil",$paciente->estadocivil_t3))?>
              </select>
            </div>
            <label for="municipio" class="col-lg-2 control-label">Municipio</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="municipio"  >
               <option value="">Seleccione Municipio</option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->listar_ciudades(),"codigo_dane_t13","ciudad_t13",$paciente->municipio_t3))?>
              </select>
            </div>
           </div>
           <div class="form-group row">
              <label for="direccion" class="col-lg-2 control-label">Dirección</label>
              <div class="col-lg-3">
                <input class="form-control input-sm" name="direccion" type="text"  id="direccion" placeholder=" Direccion" value="<?=$paciente->direccion_t3?>">
              </div>
              <label for="telefono" class="col-lg-2 control-label">N° de Telefono</label>
              <div class="col-lg-3">
                <input name="telefono" type="text" class="form-control input-sm" id="telefono" placeholder=" Telefono" value="<?=$paciente->telefono_t3?>">
              </div>
           </div>       

           <div class="form-group row">
              <label for="trabajo" class="col-lg-2 control-label">Info Trabajo</label>
              <div class="col-lg-3">
                <input name="trabajo" type="text" class="form-control input-sm" id="trabajo" placeholder=" Trabajo" value="<?=$paciente->trabajo_t3?>">
              </div>
              <label for="ocupacion" class="col-lg-2 control-label">Ocupación</label>
              <div class="col-lg-3">
                <input name="ocupacion" type="text" class="form-control" id="ocupacion" placeholder=" Ocupación" value="<?=$paciente->ocupacion_t3?>">
              </div>
           </div>     
           <div class="form-group row">
            <label for="administradora" class="col-lg-2 control-label">Administradora</label>
            <div class="col-lg-3">
              <select name="administradora" class="form-control input-sm" value="">
                <option></option> 
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_admin,"admin","admin",$paciente->administradora_t3))?>
              </select>
            </div> 
            <label for="convenio" class="col-lg-2 control-label">Convenio</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="convenio" id="convenio">
              <option></option> 
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_convenio,"convenio","convenio",$paciente->convenio_t3))?>
              </select>
            </div>
          </div>   

          <div class="form-group row">
            <label for="nivel" class="col-lg-2 control-label">Nivel </label>
            <div class="col-lg-3">
              <select name="nivel" class="form-control input-sm" value="<?=$paciente->nivel_t3?>" >
                <option></option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_nivel,"idnivel","nivel",$paciente->nivel_t3))?>
              </select>
            </div> 
            <label for="copago" class="col-lg-2 control-label">Copago</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="copago"  id="copago"  >
                <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_copago,"idcopago","copago",$paciente->copago_t3))?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <label for="emerg1" class="col-lg-2 control-label">Avisar a</label>
            <div class="col-lg-3">
               <input name="emerg1" type="text" class="form-control input-sm" id="emerg1" placeholder=" Avisar a" value="<?=$paciente->emerg1_t3?>">
            </div>
            <label for="emerg1tel" class="col-lg-2 control-label">Numero de telefono</label>
            <div class="col-lg-3">
               <input name="emerg1tel" type="text" class="form-control input-sm" id="emerg1tel" placeholder="Numero de telefono" value="<?=$paciente->emerg1tel_t3?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="emerg2" class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-3">
              <input  name="emerg2" type="text" class="form-control input-sm" id="emerg2" placeholder="Nombre" value="<?=$paciente->emerg2_t3?>">
            </div> 
            <label for="telefono" class="col-lg-2 control-label">Telefono</label>
            <div class="col-lg-3">
              <input  name="emerg2tel" type="text" class="form-control input-sm" id="emerg2tel" placeholder="Teléfono" value="<?=$paciente->emerg2tel_t3?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="causaext" class="col-lg-2 control-label">Causa Externa</label>
            <div class="col-lg-3">
              <select class="form-control input-sm" name="causaext" id="causaext" >
                <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_causaext,"causaext","causaext",""))?>
              </select>
            </div>
            <label for="ubicacion " class="col-lg-2 control-label">Destino</label>
            <div class="col-lg-3">
              <select name="ubicacion" class="form-control input-sm" id="ubicacion">
                <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_destino,"destino","destino",$historia->ubicacion_t4))?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="viaing" class="col-lg-2 control-label">Via Ingreso</label>
            <div class="col-lg-3">
              <select name="viaing" class="form-control input-sm" id="viaing" >
                <option></option>
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_viaing,"viaing","viaing",$historia->viaing_t4))?>
              </select>
            </div>
            <label for="estado" class="col-lg-2 control-label">Estado</label>
            <div class="col-lg-3">
            <select name="estado" class="form-control input-sm" id="estado">
              <option></option>
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_estados,"estado","estado",$paciente->estado_t3))?>
            </select>
            </div>
          </div>
          <div class="form-group row">
           <label for="fingreso" class="col-lg-2 control-label">Fecha de Ingreso</label>
            <div class="col-lg-3">
            <div class="input-group">
              <input disabled name="fingreso" type="text" size="32" id="fingreso"  value="<?=$historia->fingreso_t4 ?>">
            </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="obs" class="col-lg-2 control-label">Observaciones</label>
            <div class="col-lg-8">
              <textarea name="obs" cols="40" rows="3" class="form-control" id="obs" value="<?=$historia->obs_t4?>">
              </textarea> 
            </div>
          </div>
          <div class="form-group">
            <div class="row text-center">
             <br/>
              <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">  Guardar  </button>
              <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
                <span class = "glyphicon glyphicon-print"  aria-hidden = "true" > Imprimir</span>
              </a>
            </div>
          </div>
        </form>
      </fieldset>
    </div>
          
    
    <div class="tab-pane" id="tab_motivo_ingreso">
      <?=$this->load->view('Asistencial/Historia/f_motivo_ingreso',"",true);?>
    </div>
    <div class="tab-pane" id="tab_antecedentes">
      <?=$this->load->view('Asistencial/Historia/f_antecedentes',"",true);?>
    </div>
    <div class="tab-pane" id="tab_exam_fisico">
      <?=$this->load->view('Asistencial/Historia/f_exam_fisico',"",true);?>
    </div>
    <div class="tab-pane" id="tab_impre_diagnostica">
      <?=$this->load->view('Asistencial/Historia/f_impre_diagnostica',"",true);?>
    </div>
    <div class="tab-pane" id="tab_plan_tratamiento">
      <?=$this->load->view('Asistencial/Historia/f_plan_tratamiento',"",true);?>
    </div>
    <div class="tab-pane" id="tab_evolucion_medica">
     <?=$this->load->view('Asistencial/Historia/f_triage_evolucion_medica',"",true);?>
    </div>
    <div class="tab-pane" id="tab_laboratorios">
     <?=$this->load->view('Asistencial/Historia/f_laboratorios',"",true);?>
    </div>
    

  </div>
</div>

  
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

