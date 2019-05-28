<?
  //var_dump($datconsulta->vacunas);
?>
<div class="form-group">
  <div class="col-lg-4">
    <label for="" >BCG:</label>
    <select class="form-control input-sm" name="vacunas[BCG]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["BCG"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >DPT MENORES DE 5 AÑOS:</label>
    <select class="form-control input-sm" name="vacunas[DPT]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["DPT"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >FIEBRE AMARILLA NIÑOS DE 1 AÑO:</label>
    <select class="form-control input-sm" name="vacunas[FAMARILLAN]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["FAMARILLAN"]->valorcod_t106))?>
     </select>
  </div>
</div>
<div class="form-group">
  <div class="col-lg-4">
    <label for="" >HEPATITIS A:</label>
    <select class="form-control input-sm" name="vacunas[HEPATITA]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["HEPATITA"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >HEPATITIS B MENORES DE 1 AÑO:</label>
    <select class="form-control input-sm" name="vacunas[HEPATITB]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["HEPATITB"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >INFLUENZA NIÑOS:</label>
    <select class="form-control input-sm" name="vacunas[INFLUEZN]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["INFLUEZN"]->valorcod_t106))?>
     </select>
  </div>
</div>
<div class="form-group">
  <div class="col-lg-4">
    <label for="" >NEUMOCOCO:</label>
    <select class="form-control input-sm" name="vacunas[NEUMOCOCO]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["NEUMOCOCO"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >PENTAVALENTE:</label>
    <select class="form-control input-sm" name="vacunas[PENTAVALENTE]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["PENTAVALENTE"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >POLIO:</label>
    <select class="form-control input-sm" name="vacunas[POLIO]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["POLIO"]->valorcod_t106))?>
     </select>
  </div>
</div>
<div class="form-group">
  <div class="col-lg-4">
    <label for="" >ROTAVIRUS:</label>
    <select class="form-control input-sm" name="vacunas[ROTAVIRUS]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["ROTAVIRUS"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >TD O TT MUJERES EN EDAD FÉRTIL 15 A 49 AÑOS:</label>
    <select class="form-control input-sm" name="vacunas[TDTT]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["TDTT"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >TRIPLE VIRAL NIÑOS:</label>
    <select class="form-control input-sm" name="vacunas[TRIPVIRAL]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["TRIPVIRAL"]->valorcod_t106))?>
     </select>
  </div>
</div>
<div class="form-group">
  <div class="col-lg-4">
    <label for="" >VIRUS DEL PAPILOMA HUMANO (VPH):</label>
    <select class="form-control input-sm" name="vacunas[VPH]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_vacvalor,"codigo","valor",$datconsulta->vacunas["VPH"]->valorcod_t106))?>
     </select>
  </div>
  <div class="col-lg-4">
    <label for="" >ESQUEMA ADEACUADO PARA LA EDAD:</label>
    <select class="form-control input-sm" name="vacunas[ESQAD]"  id="rh" >
       <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_sino,"vaccod","sino",$datconsulta->vacunas["ESQAD"]->valorcod_t106))?>
     </select>
  </div>
</div>