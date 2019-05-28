<legend>1 - COMPOSICION FAMILIAR QUE CONVIVEN CON EL REFERENTE FAMILIAR - SOCIAL</legend>
<div id="contain">
      <div class="form-group">
          <div class="col-lg-6">
          <label for="dxtercero">Nombre del Familiar</label>
            <input name="nombre_f[]" type="text" class="form-control "  placeholder="Nombre Familiar" value="<?=$datconsulta->dxtercero_t64?>">
          </div>

          <div class="col-lg-2">
            <legen>GENERO:</legen>
            <select class="form-control input-sm" name="genero[]" >
              <?php if (!empty($datconsulta->tipooption_t64)): ?>
                <option value="<?= $datconsulta->tipooption_t64 ?>"><?= $datconsulta->tipooption_t64 ?></option>
              <?php endif ?>
              <option></option>
              <option value="Masculino">01-Masculino</option>
              <option value="Femenino">02-Femenino</option>
              <option value="Otro">03-Otro</option>
              </select> 
         </div>
        <div class="col-lg-2">
            <legen>ESTADO CIVIL:</legen>
            <select class="form-control input-sm" name="estado_civil[]" >
              <?php if (!empty($datconsulta->tipooption_t64)): ?>
                <option value="<?= $datconsulta->tipooption_t64 ?>"><?= $datconsulta->tipooption_t64 ?></option>
              <?php endif ?>
              <option></option>
              <option value="Casado">01-Casado</option>
              <option value="Separado">02-Separado</option>
              <option value="Viudo">03-Viudo</option>
              <option value="Union_Libre">04-Union Libre</option>
              <option value="Otro">05-Otro</option>
              </select> 
         </div>
         <div class="col-lg-2">
          <br>
           <button class="btn <?= $this->estilo->colorprinc ?>" id="clonar" type="button">+</button>
         </div>
       </div>
      
        <div class="form-group">
          <div class="col-lg-2">
          <label for="dxtercero">Parentesco</label>
            <input name="parentesco[]" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
          </div>
          <div class="col-lg-2">
          <label for="">Escolaridad</label>
            <input name="escolaridad[]" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
            <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
          </div>
          <div class="col-lg-2">
          <label for="">Ocupacion</label>
            <input name="ocupacion[]" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
          </div>
        </div>
       </div>
<div id="plantrabajo"></div>  
<div class="col-lg-12">
<legend>2 - ESTRUCTURA Y FUNCIONAMIENTO DEL SITEMA FAMILIAR</legend>
<div class="form-group">


<div class="col-lg-3">
    <label for="xxx" >NUCLEAR:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"nuclear","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
<div class="col-lg-3">
    <label for="xxx" >EXTENSA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"extensa","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>  
<div class="col-lg-3">
    <label for="xxx" >RECOMPUESTA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"recompuesta","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
<div class="col-lg-3">
    <label for="xxx" >MUJER CABEZA DE HOGAR:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"m_cabeza_hogar","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
<div class="col-lg-3">
    <label for="xxx" >PADRE CABEZA DE HOGAR:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"p_cabeza_hogar","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
<div class="col-lg-3">
    <label for="xxx" >FAMILIA EN ASCENSO (o progenitores solteros):</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"f_ascenso","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
<div class="col-lg-3">
    <label for="xxx" >FAMILIAS HOMOSEXUALES:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"f_homo","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
<div class="col-lg-3">
    <label for="xxx" >FAMILIAS O GRUPOS FRATERNOS:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"g_paternnos","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
 </div>
</div>

<div class="col-lg-12">
<legend>3 - GENOGRAMA</legend>
<div class="form-group">


<div class="col-lg-12">
<legend>4 - PLAN DE INTERVENCION</legend>
<div class="form-group">

      <div class="col-lg-12">
          <div class="form-group col-lg-12">
            <legend>Plan de Intervencion</legend>
            <textarea class="form-control" name="plan_intervencion" rows="15" placeholder=""><?=$datconsulta->motconsulta_t64?></textarea>
          </div>
          <div class="form-group col-lg-12">
            <legend>Observaciones</legend>
            <textarea class="form-control" placeholder="" rows="15" name="observaciones"><?=$datconsulta->enfermactual_t64?></textarea>
          </div>
          <div class="form-group col-lg-12">
            <legend>Seguimientos</legend>
            <textarea class="form-control" placeholder="" rows="15" name="seguimientos"><?=$datconsulta->enfermactual_t64?></textarea>
          </div>
        </div>
