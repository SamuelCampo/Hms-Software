<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
//var_dump($v_f_terceros_reg->convenios); exit;
?>
<form class="form-horizontal" role="form" action="<?=site_url('administracion/terceros/registrar/guardar/'.$v_f_terceros_reg->idparam_terceros_t16)?>"  method="post"  enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-10">
      <div class="form-group row">
        <div class="form-group row row text-center">
          <legend class="text-left">Terceros</legend>
        </div>
        <div class="form-group row">
          <label for="codtercero" class="col-lg-3 control-label">Código</label>
          <div class="col-lg-5">
            <input name="codtercero" type="text" class="form-control" id="codtercero" placeholder="Código" value="<?=$v_f_terceros_reg->cod_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tipotercero" class="col-lg-3 control-label">Tipo Tercero</label>
          <div class="col-lg-5">
            <select class="form-control" name="tipotercero"  id="tipopersona">
              <option></option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Tercero->arr_tipoter,"tipo","tipo",$v_f_terceros_reg->tipoter_t16))?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="tipopersona" class="col-lg-3 control-label">Tipo Persona</label>
          <div class="col-lg-5">
            <div class="col-lg-5">
              <select class="form-control" name="tipopersona"  id="tipopersona">
                <option></option>
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Tercero->arr_tipopers,"idtipo","tipo",$v_f_terceros_reg->tipoperscod_t16))?>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="tipoident" class="col-lg-3 control-label">Tipo Identificación</label>
          <div class="col-lg-5">
            <div class="col-lg-5">
              <select class="form-control" name="tipoident"  id="tipoident">
                <option></option>
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Tercero->arr_tipoident,"tipo","tipo",$v_f_terceros_reg->tipoident_t16))?>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="identtercero" class="col-lg-3 control-label">No. Identificación</label>
          <div class="col-lg-4 ">
            <input name="identtercero" type="text" class="form-control" id="identtercero" placeholder="Identificación" value="<?=$v_f_terceros_reg->ident_t16?>">
          </div>
          <div class="col-lg-1 no-margin no-padding">
            <input name="dvterc" type="text" class="form-control" id="dvterc" placeholder="DV" value="<?=$v_f_terceros_reg->dv_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="descterc" class="col-lg-3 control-label">Raz Social / Nom Comercial</label>
          <div class="col-lg-5">
            <input name="descterc" type="text" class="form-control" id="descterc" placeholder="Raz Social / Nom Comercial" value="<?=$v_f_terceros_reg->desc_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nomtercero" class="col-lg-3 control-label">Nombres</label>
          <div class="col-lg-5">
            <input name="nomtercero" type="text" class="form-control" id="nomtercero" placeholder="Nombres" value="<?=$v_f_terceros_reg->nombre_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="primapellterc" class="col-lg-3 control-label">Primer Apellido</label>
          <div class="col-lg-5">
            <input name="primapellterc" type="text" class="form-control" id="primapellterc" placeholder="Primer Apellidos" value="<?=$v_f_terceros_reg->apellidos1_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="segapellterc" class="col-lg-3 control-label">Segundo Apellido</label>
          <div class="col-lg-5">
            <input name="segapellterc" type="text" class="form-control" id="segapellterc" placeholder="Primer Apellidos" value="<?=$v_f_terceros_reg->apellidos2_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="direcciontercero" class="col-lg-3 control-label">Dirección</label>
          <div class="col-lg-5">
            <input name="direcciontercero" type="text" class="form-control" id="direcciontercero" placeholder="Dirección" value="<?=$v_f_terceros_reg->direccion_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="telefono1tercero" class="col-lg-3 control-label">Teléfono </label>
          <div class="col-lg-5">
            <input name="telefono1tercero" type="text" class="form-control" id="telefono1tercero" placeholder="Teléfono " value="<?=$v_f_terceros_reg->telefono1_t16?>">
          </div>
        </div>

        <div class="form-group row">
          <label for="cuidadtercero" class="col-lg-3 control-label">Ciudad</label>
          <div class="col-lg-5">
            <input name="cuidadtercero" type="text" class="form-control" id="cuidadtercero" placeholder="Ciudad" value="<?=$v_f_terceros_reg->cuidad_t16?>">
          </div>
        </div>
         <div class="form-group row">
          <label for="emailtercero" class="col-lg-3 control-label">Email</label>
          <div class="col-lg-5">
            <input name="emailtercero" type="text" class="form-control" id="emailtercero" placeholder="Email" value="<?=$v_f_terceros_reg->correo_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tercerrefcod" class="col-lg-3 control-label">Tercero Relacionado</label>
          <div class="col-lg-5">
            <input type="text" name="tercerref" id="tercerref" class="form-control" value="<?=$v_f_terceros_reg->tercerref_t16?>" placeholder="TERCERO">
            <input type="hidden" name="tercerrefcod" id="tercerrefcod" value="<?=$v_f_terceros_reg->tercerrefcod_t16?>" >
          </div>
        </div>
        <div class="form-group row">
          <label for="espec" class="col-lg-3 control-label">Especialidad</label>
          <div class="col-lg-5">
            <select class="form-control" name="espec"  id="espec">
              <option></option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->param_listar(),"idps_especialidades_t103","especialidades_t103",$v_f_terceros_reg->idespec_t16))?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row text-center">
          <button type="submit" class="btn bg-navy">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
  <?if(is_array($v_f_terceros_reg->convenios)){?>
  <div class="col-lg-10">
    <fieldset>
      <legend>Convenios</legend>
      <?foreach($v_f_terceros_reg->convenios as $conv){?>
    <div class="col-lg-4">
      <i class="fa fa-check-circle"></i> <a href="<?=site_url('/administracion/convenios/gestionar/'.$conv->codigo_t95)?>" ><?=$conv->codigo_t95?> <?=$conv->vigdesde_t95?> - <?=$conv->vighasta_t95?></a>
    </div>
      <?}?>
    </fieldset>
  </div>
  <br><br><br><br>
  <?}?>


  