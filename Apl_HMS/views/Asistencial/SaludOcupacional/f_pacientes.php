<?
  $fecha = explode("-",$paciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  $readonly="";
  if(!empty($paciente->identificacion_t3)){
    $readonly = "readonly";
  }
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_paciente" data-toggle="tab">Paciente</a></li>
      <li><a href="#tab_historia" data-toggle="tab">Historial</a></li>
      <li><a href="#tab_historia" data-toggle="tab">Programación de Citas</a></li>
    </ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_paciente">
<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
<div class="row">
   <div class="col-lg-2">
     <img src="<?=base_url('docs/admin/fotos/imagen_1.png');?>" alt="Pepito Perez" class="img-thumbnail">
   </div>
   <div class="col-lg-10">
     
<div class="form-group row">
    <label for="prinombre" class="col-lg-2 control-label">Primer Nombre</label>
    <div class="col-lg-4">
      <input  name="nombre1" type="text" class="form-control input-sm" id="nombre1" placeholder="Primer Nombre" value="<?=$paciente->nombre1_t3?>">
    </div>
    <label for="senombre" class="col-lg-2 control-label">Segundo Nombre</label>
    <div class="col-lg-4">
      <input  name="nombre2" type="text" class="form-control input-sm" id="nombre2_t1" placeholder="Segundo Nombre" value="<?=$paciente->nombre2_t3?>">
    </div>
</div>
     
<div class="form-group row">
      <label for="apellido1" class="col-lg-2 control-label">Primer Apellido</label>
      <div class="col-lg-4">
        <input  name="apellido1" type="text" class="form-control input-sm" id="apellido1" placeholder="Primer Apellido" value="<?=$paciente->apellido1_t3?>">
      </div>
      <label for="apellido2" class="col-lg-2 control-label">Segundo Apellido</label>
      <div class="col-lg-4">
        <input  name="apellido2" type="text" class="form-control input-sm" id="apellido2" placeholder="Segundo Apellido" value="<?=$paciente->apellido2_t3?>">
      </div>
</div>
<div class="form-group row">
      <label for="edad" class="col-lg-2 control-label">Edad</label>
      <div class="col-lg-4">
        <input name="edad" type="text" class="form-control input-sm"id="ident" placeholder="Edad" value="<?=$edad?>">
      </div>
      <label for="fnacim" class="col-lg-2 control-label">Fecha de Nacimiento</label>
      <div class="col-lg-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <input name="fnacim" type="text" class="form-control form_date" id="fnacim" placeholder="Fecha Nacimiento" value="<?=$paciente->fnacim_t3?>">
        </div>
      </div>
</div>
   </div>
</div>
<div class="form-group row">
      <label for="identiftipo" class="col-lg-2 control-label">Tipo de Identificación</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="identiftipo" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_tiposident,"idtipo","tipo",$paciente->identiftipo_t3))?>
        </select>
      </div>
      <label for="identificacion" class="col-lg-1 control-label">N° de Identificación</label>
      <div class="col-lg-3">
        <input <?=$readonly?> name="identificacion" type="text" class="form-control input-sm" id="identificacion" placeholder="No de Identificación" value="<?=$paciente->identificacion_t3?>">
      </div>
</div>
<div class="form-group row">
      <label for="genero" class="col-lg-2 control-label">Genero</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="genero">
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_generos,"genero","genero",$paciente->genero_t3))?>
        </select>
      </div> 
       <label for="telefono" class="col-lg-1 control-label">N° de Telefono</label>
      <div class="col-lg-3">
        <input  name="telefono" type="text" class="form-control input-sm" id="telefono" placeholder="Telefono" value="<?=$paciente->telefono_t3?>">
      </div>
</div>

<div class="form-group row">
      <label for="rh" class="col-lg-2 control-label">RH</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="rh" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_rh,"rh","rh",$paciente->rh_t3))?>
        </select>
      </div>
      <label for="estadocivil" class="col-lg-1 control-label">Estado Civil</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="estadocivil" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_estadocivil,"estadocivil","estadocivil",$paciente->estadocivil_t3))?>
        </select>
      </div>
</div>
<div class="form-group row">
      <label for="ocupacion" class="col-lg-2 control-label">Ocupacion</label>
      <div class="col-lg-3">
        <input  name="ocupacion" type="text" class="form-control input-sm" id="trabajo" placeholder="Ocupación" value="<?=$paciente->ocupacion_t3?>">
      </div> 
      <label for="trabajo" class="col-lg-1 control-label">Info Trabajo</label>
      <div class="col-lg-3">
        <input  name="trabajo" type="text" class="form-control input-sm" id="trabajo" placeholder="Info Trabajo" value="<?=$paciente->trabajo_t3?>">
      </div>
</div>
  
<div class="form-group row">
      <label for="administradora" class="col-lg-2 control-label">Administradora</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="administradora" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_admin,"admin","admin",$paciente->rh_t3))?>
        </select>
      </div> 
      <label for="convenio" class="col-lg-1 control-label">Convenio</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="convenio" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_convenio,"convenio","convenio",$paciente->convenio_t3))?>
        </select>
      </div>
</div>
<div class="form-group row">
      <label for="municipio" class="col-lg-2 control-label">Municipio</label>
      <div class="col-lg-3">
        <input  name="municipio" type="text" class="form-control input-sm" id="municipio" placeholder="Municipio" value="<?=$paciente->municipio_t3?>">
      </div>
      <label for="direccion" class="col-lg-1 control-label">Dirección</label>
      <div class="col-lg-3">
        <input  name="direccion" type="text" class="form-control input-sm" id="direccion" placeholder="Dirección" value="<?=$paciente->direccion_t3?>">
      </div>
</div>

<div class="form-group row">
        <label for="emerg1" class="col-lg-2 control-label">Avisar a</label>
        <div class="col-lg-3">
          <input  name="emerg1" type="text" class="form-control input-sm" id="trabajo" placeholder="Nombre" value="<?=$paciente->emerg1_t3?>">
        </div>  
        <label for="telefono" class="col-lg-1 control-label">Numero de telefono</label>
        <div class="col-lg-3">
          <input  name="telefono" type="text" class="form-control input-sm" id="telefono" placeholder="Teléfono" value="<?=$paciente->emerg1tel_t3?>">
        </div>
</div>
<div class="form-group row">
        <label for="nombre" class="col-lg-2 control-label">Nombre</label>
       <div class="col-lg-3">
         <input  name="nombre" type="text" class="form-control input-sm" id="trabajo" placeholder="Nombre" value="<?=$paciente->emerg2_t3?>">
       </div>   
                   <label for="telefono" class="col-lg-1 control-label">Telefono</label>
       <div class="col-lg-3">
         <input  name="emerg2tel" type="text" class="form-control input-sm" id="trabajo" placeholder="Teléfono" value="<?=$paciente->emerg2tel_t3?>">
       </div>
</div>
  <fieldset>
<div class="form-group row">
        <label for="causaext" class="col-lg-2 control-label">Causa Externa</label>
        <div class="col-lg-3">
          <select class="form-control input-sm" name="causaext" >
            <option></option>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_causaext,"causaext","causaext",""))?>
          </select>
        </div>
        <label for="viaing" class="col-lg-1 control-label">Via Ingreso</label>
        <div class="col-lg-3">
          <select  class="form-control input-sm" name="viaing">
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_viaing,"viaing","viaing",""))?>
          </select>
        </div>
</div>
<div class="form-group row">
        <label for="destino" class="col-lg-2 control-label">Destino</label>
        <div class="col-lg-3">
          <select name="destino " class="form-control input-sm" >
            <option></option>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_destino,"destino","destino",""))?>
          </select>

        </div>
</div>
    
<div class="form-group row">
        <label for="viaing" class="col-lg-2 control-label">Observaciones</label>
        <div class="col-lg-10">
           <textarea name="obs" cols="40" rows="3" class="form-control"></textarea>
        </div>
</div>
  </fieldset>

<div class="form-group">
        <div class="row text-center">
          <br/>
          <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
</div>
</form>
</div>
  
<div class="tab-pane" id="tab_historia">
        <table class="table" style="margin:0;padding: 0;">
          <thead>
            <tr>
              <th >
                No. Historia
              </th>
              <th >
                Fecha Ingreso
              </th>
              <th >
                Vía Ingreso
              </th>
              <th >
                Motivo Ingreso
              </th>
              <th >
                Causa Externa
              </th>
              <th >
                Ubicación
              </th>
              <th >
                Fecha Salida
              </th>
            </tr>
        </thead>
        <tbody class="listado">
          <?
          if(!empty($historias)){
            foreach($historias as $historia){
              ?>
                <tr>
                  <td>
                    <?=$historia->idps_historia_t4?>
                  </td>
                  <td>
                    <?=$historia->fingreso_t4?>
                  </td>
                  <td>
                    <?=$historia->viaing_t4?>
                  </td>
                  <td>
                    <?=$historia->motivoing_t4?>
                  </td>
                  <td>
                    <?=$historia->causaext_t4?>
                  </td>
                  <td>
                    <?=$historia->ubicacion_t4?>
                  </td>
                  <td>
                    <?=$historia->fsalida_t4?>
                  </td>
                </tr>
              <?
            }
          }
          ?>
        </table>
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