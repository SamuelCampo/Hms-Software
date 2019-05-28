<?
  if(!empty($datpaciente->fnacim_t3)){
    $fechanacim = explode("-",$datpaciente->fnacim_t3);
    $edad = date("Y-m-d")-$fechanacim[0];
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
?>
    
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <legend class="no-padding no-margin">Datos Entidad / Institución </legend>
  <?
    if(!empty($mensaje)){
      echo '<div class="row no-padding no-margin"><div class="well alert msjlista">'.$mensaje.'</div></div>';
    }
  ?>
  <form class="form-horizontal" role="form" action="<?=site_url("administracion/entidad/guardar")?>" method="post" enctype="multipart/form-data" id="form_entidad">
    <div class="row">
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <div class="col-lg-3"> 
        <div class="box box-default">
          <img src="<?=base_url('/img/'.$entidad->logo_t75)?>" alt="<?=$entidad->nombre_t75?>" class="img-thumbnail">
          <br/>
          <input name="logo" type="file" class="filestyle" id="logo" placeholder="Logo" data-buttonText="Logo" >
        </div>
      </div>
      <div class="col-lg-9">
         <div class="form-group">
           <label for="tipo" class="col-lg-2 control-label">Tipo</label>
           <div class="col-lg-4">
             <select class="form-control input-sm" name="tipo" required>
               <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Entidad->arr_tipo_entidad,"tipo","tipo",$entidad->tipo_t75))?>
             </select>
           </div>
           <label for="codigo" class="col-lg-1 control-label">Código</label>
           <div class="col-lg-4">
             <input name="codigo" type="text" class="form-control input-sm" id="codigo" placeholder="Código" value="<?=$entidad->codigo_t75?>" required>
           </div>
         </div>
             <div class="form-group row">
               <label for="nit" class="col-lg-2 control-label">Nit</label>
               <div class="col-lg-4">
                 <input name="nit" type="text" class="form-control input-sm" id="nit" placeholder="Nit" value="<?=$entidad->nit_t75?>" required>
               </div>
               <label for="nombre" class="col-lg-1 control-label">Nombre</label>
               <div class="col-lg-4">
                 <input name="nombre" type="text" class="form-control input-sm" id="nombre" placeholder=" Nombre o Razón Social" value="<?=$entidad->nombre_t75?>" required>
               </div>
             </div>
             <div class="form-group row">
               <label for="direccion" class="col-lg-2 control-label">Dirección</label>
               <div class="col-lg-4">
                 <input name="direccion" type="text" class="form-control input-sm" id="direccion" placeholder="Dirección" value="<?=$entidad->direccion_t75?>" required>
               </div>
               <label for="telefono" class="col-lg-1 control-label">Teléfono</label>
               <div class="col-lg-4">
                 <input name="telefono" type="text" class="form-control input-sm" id="telefono" placeholder="Teléfono" value="<?=$entidad->telefono_t75?>" required>
               </div>
             </div>
           </div>    
      </div>
      <div class="row">
           <legend class="no-padding no-margin">Representante Legal</legend>
          <div class="form-group row"> 
           <label for="nombrereplegal" class="col-lg-2 control-label">Nombre</label>
           <div class="col-lg-4">
             <input name="nombrereplegal" type="text" class="form-control input-sm" id="nombrereplegal" placeholder="Nombre Representante Legal" value="<?=$entidad->nombrereplegal_t75?>" required>
           </div>  
           <label for="ccreplegal" class="col-lg-1 control-label">Identificación</label>
           <div class="col-lg-4">
             <input name="ccreplegal" type="text" class="form-control input-sm" id="ccreplegal" placeholder=" CC. del Representante Legal" value="<?=$entidad->ccreplegal_t75?>" required>
           </div>
          </div>
          <div class="form-group row">
           <label for="telreplegal" class="col-lg-2 control-label">Teléfono</label>
           <div class="col-lg-4">
             <input name="telreplegal" type="text" class="form-control input-sm" id="telreplegal" placeholder=" Teléfono Representante Legal" value="<?=$entidad->telreplegal_t75?>" required>
           </div>
          </div>


         <div class="form-group">
           <div class="row text-center">
            <br/>
             <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
           </div>
         </div>
    </div>
    </form>
</div>
</div>
</div>
<script>
  var imagenAChequear;
  imagenAChequear = new image;
  imagenAChequear.src= document.formulario.logo.value;
  if(imagenAChequear.width>150){
  alert("Has excedido el ancho posible");return false;}
  if(imagenAChequear.height>100){
  alert("Has excedido el alto posible");return false;}
</script>
