<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
  <legend>AGREGAR PACIENTE</legend>       
  <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">

<div class="form-group">
   <label for="documento" class="col-lg-2 control-label">Documento</label>
   <div class="col-lg-8">
    <input name="documento" type="text" class="form-control input-sm" id="documento" placeholder="Documento de identidad" value="">
   </div>
</div>
        
<div class="form-group">
  <label for="nombre1" class="col-lg-2 control-label">Primer nombre</label>
  <div class="col-lg-8">
   <input name="nombre1" type="text" class="form-control input-sm" id="nombre1" placeholder="Primer nombre" value="">
  </div>
</div>
    
<div class="form-group">
   <label for="nombre2" class="col-lg-2 control-label">Segundo nombre</label>
   <div class="col-lg-8">
     <input name="nombre2" type="text" class="form-control input-sm" id="nombre2" placeholder="Segundo nombre" value="">
   </div>
</div> 
    
<div class="form-group">
   <label for="apellido1" class="col-lg-2 control-label">Primer apellido</label>
   <div class="col-lg-8">
     <input name="apellido1" type="text" class="form-control input-sm" id="apellido1" placeholder="Primer apellido" value="">
   </div>
</div> 
<div class="form-group">
   <label for="apellido2" class="col-lg-2 control-label">Segundo apellido</label>
   <div class="col-lg-8">
     <input name="apellido2" type="text" class="form-control input-sm" id="apellido2" placeholder="Segundo apellido" value="">
   </div>
</div> 
    
<div class="form-group">
   <label for="telefono_contacto" class="col-lg-2 control-label">Telefono de contacto</label>
   <div class="col-lg-8">
     <input name="telefono_contacto" type="text" class="form-control input-sm" id="telefono_contacto" placeholder="Telefono contacto" value="">
   </div>
</div> 
<div class="form-group">
   <label for="municipio" class="col-lg-2 control-label">Municipio</label>
   <div class="col-lg-8">
      <input class="form-control input-sm" name="municipio" type="text" id="municipio" placeholder="Municipio" value="<?=$datpaciente->municipio_t3?>" required>
      <input name="municipiocod" type="hidden" id="municipiocod" value="<?=$datpaciente->municipiocod_t3?>">
   </div>
</div> 
<div class="form-group">
   <label for="correo" class="col-lg-2 control-label">Correo electronico</label>
   <div class="col-lg-8">
     <input name="telefono_contacto" type="text" class="form-control input-sm" id="telefono_contacto" placeholder="Correo electronico" value="">
   </div>
</div> 
    
<div class="form-group">
    <div class="row text-center">
              <a href="<?=site_url('pacientes/agenda/nuevo_cita')?>" role="button" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</a>
    </div>
</div>
    
  </form>
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