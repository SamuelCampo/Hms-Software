<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url('financiero/terceros/registrar/guardar/'.$v_f_terceros_reg->idparam_terceros_t16)?>"  method="post"  enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-10">
      <div class="form-group row">
        <div class="form-group row row text-center">
          <legend class="text-left">Terceros</legend>
        </div>
        <div class="form-group row">
          <label for="codtercero" class="col-lg-3 control-label">C�digo</label>
          <div class="col-lg-5">
            <input name="codtercero" type="text" class="form-control" id="codtercero" placeholder="C�digo" value="<?=$v_f_terceros_reg->cod_t16?>">
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
          <label for="tipoident" class="col-lg-3 control-label">Tipo Identificaci�n</label>
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
          <label for="identtercero" class="col-lg-3 control-label">No. Identificaci�n</label>
          <div class="col-lg-4 ">
            <input name="identtercero" type="text" class="form-control" id="identtercero" placeholder="Identificaci�n" value="<?=$v_f_terceros_reg->ident_t16?>">
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
            <input name="segapellterc" type="text" class="form-control" id="segapellterc" placeholder="Segundo Apellidos" value="<?=$v_f_terceros_reg->apellidos2_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="direcciontercero" class="col-lg-3 control-label">Direcci�n</label>
          <div class="col-lg-5">
            <input name="direcciontercero" type="text" class="form-control" id="direcciontercero" placeholder="Direcci�n" value="<?=$v_f_terceros_reg->direccion_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="telefono1tercero" class="col-lg-3 control-label">Tel�fono </label>
          <div class="col-lg-5">
            <input name="telefono1tercero" type="text" class="form-control" id="telefono1tercero" placeholder="Tel�fono " value="<?=$v_f_terceros_reg->telefono1_t16?>">
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
          <label for="dcomercialtercero" class="col-lg-3 control-label">Direcci�n Comercial</label>
          <div class="col-lg-5">
            <input name="dcomercialtercero" type="text" class="form-control" id="dcomercialtercero" placeholder="Direcci�n Comercial" value="<?=$v_f_terceros_reg->direccion_com_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctaclientetercero" class="col-lg-3 control-label">Cta Clientes</label>
          <div class="col-lg-5">
            <input name="ctaclientetercero" type="text" class="form-control cuentacont" id="ctaclientetercero" placeholder="Cta Cliente" value="<?=$v_f_terceros_reg->ctl_cliente_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctaproveedortercero" class="col-lg-3 control-label">Cta Proveedores</label>
          <div class="col-lg-5">
            <input name="ctaproveedortercero" type="text" class="form-control cuentacont" id="ctaproveedortercero" placeholder="Cta Proveedores" value="<?=$v_f_terceros_reg->ctl_prov_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctaempleadotercero" class="col-lg-3 control-label">Cta Empleados</label>
          <div class="col-lg-5">
            <input name="ctaempleadotercero" type="text" class="form-control cuentacont" id="ctaempleadotercero" placeholder="Cta Empleados" value="<?=$v_f_terceros_reg->ctl_empl_t16?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctaanticipotercero" class="col-lg-3 control-label">Cta Anticipos</label>
          <div class="col-lg-5">
            <input name="ctaanticipotercero" type="text" class="form-control cuentacont" id="ctaanticipotercero" placeholder="Cta Anticipos" value="<?=$v_f_terceros_reg->ctl_ant_t16?>">
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


  