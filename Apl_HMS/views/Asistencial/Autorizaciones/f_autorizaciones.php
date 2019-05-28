<meta charset="utf-8">
<legend> SOLICITUD DE AUTORIZACIONES PROCEDIMIENTOS Y CIRUGIAS                                                                                                      
</legend>

<div class="form-group row">
      <label for="identiftipo" class="col-lg-2 control-label">Tipo de IdentificaciOn</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="identiftipo" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_tiposident,"idtipo","tipo",$paciente->identiftipo_t3))?>
        </select>
      </div>
      <label for="identificacion" class="col-lg-1 control-label">Identificacion</label>
      <div class="col-lg-3">
        <input <?=$readonly?> name="identificacion" type="text" class="form-control input-sm" id="identificacion" placeholder="No de Identificacion" value="<?=$paciente->identificacion_t3?>">
      </div>
</div>
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

<div class="form-group row">
      <label for="genero" class="col-lg-2 control-label">Genero</label>
      <div class="col-lg-3">
        <select class="form-control input-sm" name="genero">
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_generos,"genero","genero",$paciente->genero_t3))?>
        </select>
      </div> 
       <label for="telefono" class="col-lg-1 control-label">Telefono</label>
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
     <div class="col-md-4">
      <label for="altura" class="">FECHA DE LA SOLICITUD</label>
      <input name="altura" type="text" class="form-control input-sm form_date" id="altura"  value="<?=$datconsulta->altura_t64?>">
    </div>
   </div>
    <div class="form-group row">
      <label for="administradora" class="col-lg-1 control-label">Administradora</label>
      <div class="col-lg-4">
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
          
      <div class="col-lg-4">
            <label for="xxx" >TIPO DE PACIENETE:</label>
            <select class="form-control input-sm" name="motivo_inca" >
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["Tipo de Paciente"]?> </option>
              <option value="MEDICINA GENERAL">AMBULATORIO</option>
              <option value="MATERNIDAD">URGENCIA</option>
              <option value="ENFERMEDAD PROFESIONAL">HOSPITALIZACION</option>
              <option value="ENFERMEDAD LABORAL">UNIDAD DE CUIDADOS INTENSIVOS</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>

      <div class="col-lg-4">
            <label for="xxx" >TIPO DE ATENCION:</label>
            <select class="form-control input-sm" name="tipo_inca" >
              <option selected value="MEDICINA GENERAL"><? $datinca[0]["tipo_inca"]?> </option>
              <option value="AMBULATORIA">ELECTIVA</option>
              <option value="DEFINITIVA">ELECTIVA PRIORITARIA</option>
              <option value="OTRO">URGENCIA</option>
            </select>
            <br>
        </div>
      </div> 

    <fieldset>
<div class="form-group row">
        <label for="causaext" class="col-lg-1 control-label">Causa Externa</label>
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
      <label for="municipio" class="col-lg-1 control-label">Municipio</label>
      <div class="col-lg-3">
        <input  name="municipio" type="text" class="form-control input-sm" id="municipio" placeholder="Municipio" value="<?=$paciente->municipio_t3?>">
      </div>
      <div class="form-group row">
        <label for="destino" class="col-lg-1 control-label">Destino</label>
        <div class="col-lg-3">
          <select name="destino " class="form-control input-sm" >
            <option></option>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_destino,"destino","destino",""))?>
          </select>
        </div>
  </div>
<?php  //var_dump($datconsulta); ?>
<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>PROCEDIMIENTOS O EXAMENES SOLITADOS</legend>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
            <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="tipooption" >
              <option></option>
              <option value="01">01-Confirmado Nuevo</option>
              <option value="02">02-Confirmado Repetido</option>
              <option value="03">03-Impresion Diagnostica</option>
              </select> 
         </div>

         <div class="form-group">
          <div class="col-lg-12">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dxtercero" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
            <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
          </div>
        </div> 
 <section>
  <fieldset>
    <div class="panel panel-default col-lg-12">
      <div class="panel-body">
        <div class="row no-padding no-marging">
          <div class="col-lg-5 text-center"><b>Procedimiento</b></div>
          <div class="col-lg-1 text-center"><b>Cantidad</b></div>
          <div class="col-lg-2 text-center"><b>Justificacion</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding" id="plantordprocs">
          <div class="col-lg-5">
            <input name="orden[procs][procedimmiento]" type="text" class="form-control" id="cump_desc" placeholder="Procedimiento" required>
            <input name="orden[procs][procedimmientocod]" type="hidden" id="cupcodigo" value="">
          </div>
          <div class="col-lg-1">
            <input name="orden[procs][cantidad]" type="text" class="form-control" id="proc_cantidad" placeholder="Cantidad" value="" required>
          </div>
          <div class="col-lg-6">
            <input name="orden[procs][justificacion]" type="text" class="form-control" id="proc_observ" placeholder="Justificacion" >
          </div>
          <div class="col-lg-1" onclick="$(this).parent().remove();">
            <eliminar class="btn bg-navy btn-xs">
              <span class="glyphicon glyphicon-trash btneliminar"></span>
            </eliminar>
          </div>
        </div>
      </div>
  </div>
  <div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Resultado</th>
            <th>Adjunto</th>
          </tr>
        </thead>
        <tbody class="listado">
        <?
        if(!empty($datos)){
          foreach($datos as $reg){
            ?>
              <tr>
                <td width="20%">
                  <?=$reg->tipo_t67?>
                </td>
                <td width="15%">
                  <?=$reg->codigo_t67?>
                </td>
                <td width="25%">
                  <?=$reg->descripcion_t67?>
                </td>
                <td width="25%">
                  <?=$reg->resultado_t67?>
                </td>
                <td width="15%">
                  <?=$reg->adj_t67?>
                </td>
              </tr>
            <?
          }
        }
        ?>
        </tbody>
      </table>
    </div>
 </fieldset>
</section>