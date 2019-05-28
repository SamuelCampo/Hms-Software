<?
if(!empty($especialidades->idps_especialidades_t9)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
    
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<legend class="no-padding no-margin">Parametrización</legend>
<form  class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" >
 <div class="form-group">
    <label for="administradoracod" class="col-lg-3 control-label">Convenio o Aseguradora</label>
    <div class="col-lg-5">
      <select name="administradoracod" class="form-control input-sm" value="" required>
         <option></option> 
         <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->administradoras_listar(),"codministerio_t70","nombre_t70",$datpaciente->administradoracod_t3))?>
       </select>
    </div>
  </div>
  <div class="form-group">              
    <label for="tipo" class="col-lg-5 control-label">Plan Tarifario:</label>
     <div class="col-lg-1">
      <label class="checkbox-inline">ISS
          <input type="radio" name="plantarifario" value="ISS">
      </label>
     </div>
     <div class="col-lg-1">
      <label class="checkbox-inline">SOAT
          <input type="radio" name="plantarifario" value="SOAT">
      </label>
     </div>
  </div> 
  <div class="form-group">
    <label for="gruposervicio" class="col-lg-5 control-label">Grupo de Servicio</label>
    <label for="porcentaje" class="col-lg-1 control-label">%</label>
  </div>
  <div class="form-group">
    <label for="quirurgico" class="col-lg-5 control-label">QUIRURGICO</label>
    <div class="col-lg-2">
      <input name="pquirurgico" type="text" class="form-control input-sm" id="pquirurgico" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="procedimiento" class="col-lg-5 control-label">PROCEDIMIENTO</label>
    <div class="col-lg-2">
      <input name="pprocedimiento" type="text" class="form-control input-sm" id="pprocedimiento" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="ayudiagnostica" class="col-lg-5 control-label">AYUDA DIAGNÓSTICA</label>
    <div class="col-lg-2">
      <input name="payudiagnostica" type="text" class="form-control input-sm" id="payudiagnostica" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="laboratorio" class="col-lg-5 control-label">LABORATORIO</label>
    <div class="col-lg-2">
      <input name="plaboratorio" type="text" class="form-control input-sm" id="plaboratorio" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="bancosangre" class="col-lg-5 control-label">BANCO DE SANGRE</label>
    <div class="col-lg-2">
      <input name="pbancosangre" type="text" class="form-control input-sm" id="pbancosangre" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="odontologia" class="col-lg-5 control-label">ODONTOLOGÍA</label>
    <div class="col-lg-2">
      <input name="pdontologia" type="text" class="form-control input-sm" id="podontologia" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="consultoria" class="col-lg-5 control-label">CONSULTORÍA</label>
    <div class="col-lg-2">
      <input name="pconsultoria" type="text" class="form-control input-sm" id="pconsultoria" placeholder="%" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="hospitalizacion" class="col-lg-5 control-label">HOSPITALZACIÓN</label>
    <div class="col-lg-2">
      <input name="phospitalizacion" type="text" class="form-control input-sm" id="phospitalizacion" placeholder="%" value="" required>
    </div>
  </div>
  </div>
  <div class="form-group">
     <div class="row text-center">
      <br/>
       <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
     </div>
  </div>
</form>
</div>
</div>
</div>
    

