<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>REVISION POR SISTEMAS</legend>

<div class="col-lg-12">
<legend align="left">OFTALMOSCOPIA</legend>
</div> 

<div class="col-lg-12">
<legend align="left">OJO DERECHO</legend>
</div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Fondo de Ojo</label>
        <select class="form-control input-sm" name="fondo_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsultas[0]->fondo_ojo_derecho))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Catarata senil</label>
        <select class="form-control input-sm" name="catarata_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->catarata_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Opacidad de medios refringentes</label>
        <select class="form-control input-sm" name="opacidad_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->opacidad_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Excavacion Papilar Aumentada</label>
        <select class="form-control input-sm" name="excavacion_ojo_derecho" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->excavacion_ojo_derecho))?>
              </select>
    </div>
  

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Conjuntivitis Aguda</label>
        <select class="form-control input-sm" name="conjuntivitis_aguda_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->conjuntivitis_aguda_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Conjuntivitis Cronica</label>
        <select class="form-control input-sm" name="conjuntivitis_cronica_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->conjuntivitis_cronica_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Blefaroconjuntivitis</label>
        <select class="form-control input-sm" name="Blefaroconjuntivitis_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->Blefaroconjuntivitis_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Pterigio Nasal</label>
        <select class="form-control input-sm" name="pterigio_nasal_ojo_derecho" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->pterigio_nasal_ojo_derecho))?>
              </select>
    </div>
  
  
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Pterigio Temporal</label>
              <select class="form-control input-sm" name="pterigio_temporal_ojo_derecho" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->pterigio_temporal_ojo_derecho))?>
              </select>
    </div>
     <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Leucoma</label>
        <select class="form-control input-sm" name="leucoma_ojo_derecho" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->leucoma_ojo_derecho))?>
              </select>
     </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Anisocoria</label>
              <select class="form-control input-sm" name="anisocoria_ojo_derecho" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->anisocoria_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Catarata Incipiente</label>
        <select class="form-control input-sm" name="catarata_incipiente_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->catarata_incipiente_ojo_derecho))?>
              </select>
    </div>
  
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Catarata Madura</label>
        <select class="form-control input-sm" name="catarata_madura_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->catarata_madura_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Queratitis</label>
        <select class="form-control input-sm" name="queratitis_ojo_derecho">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->queratitis_ojo_derecho))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Pinguecula</label>
        <select class="form-control input-sm" name="pinguecula_ojo_derecho" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->pinguecula_ojo_derecho))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Lente Intraocular</label>
              <select class="form-control input-sm" name="intraocular_ojo_derecho" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->intraocular_ojo_derecho))?>
              </select>
    </div>
   
    <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">DESCRIPCION</label>
                <div class="col-lg-10">
                  <textarea name="texto_ojo_derecho" class="form-control" rows="4" id="descripcion1"><?= $datoconsulta[0]->texto_ojo_derecho  ?></textarea>
                </div>
              </div>
 <div class="col-lg-12">
<legend align="left">OJO IZQUIERDO</legend>
</div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Fondo de Ojo</label>
        <select class="form-control input-sm" name="fondo_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->fondo_ojo_izquierdo))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Catarata senil</label>
        <select class="form-control input-sm" name="catarata_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->catarata_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Opacidad de medios refringentes</label>
        <select class="form-control input-sm" name="opacidad_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->opacidad_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Excavacion Papilar Aumentada</label>
        <select class="form-control input-sm" name="excavacion_ojo_izquierdo" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->excavacion_ojo_izquierdo))?>
              </select>
    </div>
  

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Conjuntivitis Aguda</label>
        <select class="form-control input-sm" name="conjuntivitis_aguda_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->conjuntivitis_aguda_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Conjuntivitis Cronica</label>
        <select class="form-control input-sm" name="conjuntivitis_cronica_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->conjuntivitis_cronica_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Blefaroconjuntivitis</label>
        <select class="form-control input-sm" name="Blefaroconjuntivitis_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->Blefaroconjuntivitis_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Pterigio Nasal</label>
        <select class="form-control input-sm" name="pterigio_nasal_ojo_izquierdo" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->pterigio_nasal_ojo_izquierdo))?>
              </select>
    </div>
  
  
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Pterigio Temporal</label>
              <select class="form-control input-sm" name="pterigio_temporal_ojo_izquierdo" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->pterigio_temporal_ojo_izquierdo))?>
              </select>
    </div>
     <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Leucoma</label>
        <select class="form-control input-sm" name="leucoma_ojo_izquierdo" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->leucoma_ojo_izquierdo))?>
              </select>
     </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Anisocoria</label>
              <select class="form-control input-sm" name="anisocoria_ojo_izquierdo" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->anisocoria_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Catarata Incipiente</label>
        <select class="form-control input-sm" name="catarata_incipiente_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->catarata_incipiente_ojo_izquierdo))?>
              </select>
    </div>
  
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Catarata Madura</label>
        <select class="form-control input-sm" name="catarata_madura_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->catarata_madura_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Queratitis</label>
        <select class="form-control input-sm" name="queratitis_ojo_izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->queratitis_ojo_izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Pinguecula</label>
        <select class="form-control input-sm" name="pinguecula_ojo_izquierdo" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->pinguecula_ojo_izquierdo))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Lente Intraocular</label>
              <select class="form-control input-sm" name="intraocular_ojo_izquierdo" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->intraocular_ojo_izquierdo))?>
              </select>
    </div>
   
    <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">DESCRIPCION</label>
                <div class="col-lg-10">
                  <textarea name="texto_ojo_izquierdo" class="form-control" rows="4" id="descripcion1"><?= $datoconsulta[0]->texto_ojo_izquierdo  ?></textarea>
                </div>
              </div>


<div class="col-lg-12">
<legend align="left">VISION CROMATICA</legend>
</div>
    <div class="col-lg-6">
                  <label for="emergencia" class="control-label">OJO DERECHO</label>
                </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Deuteranomalia</label>
        <select class="form-control input-sm" name="vision_deuteranomalia">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_deuteranomalia))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Estrabismo Convergente</label>
        <select class="form-control input-sm" name="vision_estrabismo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_estrabismo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">70 seg /arc</label>
        <select class="form-control input-sm" name="vision_seg_70">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_70))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">100 seg/arc</label>
        <select class="form-control input-sm" name="vision_seg_100" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_100))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">200 seg/ arc</label>
              <select class="form-control input-sm" name="vision_seg_200" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_200))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">400 seg/arc</label>
        <select class="form-control input-sm" name="vision_seg_400">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_400))?>
              </select>
    </div>
         <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="vision_descripcion_derecha" class="form-control" rows="4" id="descripcion1"><?= $datoconsulta[0]->vision_descripcion_derecha  ?></textarea>
                </div>
         </div>
<div class="col-lg-6">
                  <label for="emergencia" class="control-label">OJO IZQUIERDO</label>
                </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Deuteranomalia</label>
        <select class="form-control input-sm" name="vision_deuteranomaliaizquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_deuteranomaliaizquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">Estrabismo Convergente</label>
        <select class="form-control input-sm" name="vision_estrabismoizquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_estrabismoizquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">70 seg /arc</label>
        <select class="form-control input-sm" name="vision_seg_70izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_70izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">100 seg/arc</label>
        <select class="form-control input-sm" name="vision_seg_100izquierdo" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_100izquierdo))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">200 seg/ arc</label>
              <select class="form-control input-sm" name="vision_seg_200izquierdo" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_200izquierdo))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-10">400 seg/arc</label>
        <select class="form-control input-sm" name="vision_seg_400izquierdo">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datoconsulta[0]->vision_seg_400izquierdo))?>
              </select>
    </div>
         <div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="vision_descripcion_izquierdo" class="form-control" rows="4" id="descripcion1"> <?= $datoconsulta[0]->vision_descripcion_derechaizquierdo ?> </textarea>
                </div>
         </div>


<div class="col-lg-12">
  <legend for="xxx" align="left" >IDENTIFICACION DEL ORIGEN DE LA ENFERMEDAD:</legend>
</div> 

<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
              <div class="form-group">
                  <div class="col-lg-6">
                  <label for="alergias" class="control-label col-lg-10">PACIENTE SANO</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[sano]","valor"=>"SI","actual"=>$datoconsulta[0]->sano,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-6">
                  <label for="hipertension" class="control-label col-lg-10">ENFERMEDAD GENERAL O COMUN</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[enfermedad]","valor"=>"SI","actual"=>$datoconsulta[0]->enfermedad,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                 
                  <div class="col-lg-6">
                  <label for="asma" class="control-label col-lg-10">ENFERMEDAD PROFESIONAL U OCUPACIONAL</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[enfermedad_profesional]","valor"=>"SI","actual"=>$datoconsulta[0]->enfermedad_profesional,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-6">
                  <label for="cancer" class="control-label col-lg-10">ACCIDENTE DE TRABAJO O FUERA DEL TRABAJO</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[accidente]" ,"valor"=>"SI","actual"=>$datoconsulta[0]->accidente,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                </div> 
                
<div class="form-group">
                <label for="descripcion1" class="col-lg-6 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="identificacion_enfermedad" class="form-control" rows="4" id="descripcion1"><?= $datoconsulta[0]->identificacion_enfermedad  ?></textarea>
                </div>
         </div>
       </div>
      </div>