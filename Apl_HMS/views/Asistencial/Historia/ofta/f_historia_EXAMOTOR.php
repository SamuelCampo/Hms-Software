<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>EXAMEN MOTOR</legend>


<div class="col-lg-12">
<legend align="left">VERSIONES</legend>
</div>

<div class="col-lg-12">
<legend align="left">SC</legend>
</div> 

<div class="col-lg-6">
<legend align="left">CERCA</legend>
</div>

<div class="col-lg-12">
<legend align="left">OJO DERECHO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-8 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>

<div class="col-lg-12">
<legend align="left">OJO IZQUIERDO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-8 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
               </div> 

<legend align="left">LEJOS</legend>
</div>
<div class="col-lg-12">
<legend align="left">OJO DERECHO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-8 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
    </div> 
<div class="col-lg-12">
<legend align="left">OJO IZQUIERDO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-8 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>