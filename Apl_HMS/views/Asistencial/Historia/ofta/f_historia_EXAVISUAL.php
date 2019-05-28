<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>AGUDEZA VISUAL</legend>

          <div class="col-lg-12">
            <legend align="left">AV VL</legend>
          </div> 
          <div class="col-lg-12 ">
            <legend align="left">VL</legend>
          </div>
          <div class="col-lg-12">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[agudeza_sin_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
            <label for="emergencia" class="control-label">SIN CORRECCION</label>
          </div>
          <div class="col-lg-6">
            <legen>Agudeza Visual OD:</legen>
            <select class="form-control input-sm" name="revision[agudeOD]" >

              <?if(!empty($datoconsulta[0]->agudeOD) || !empty($datoconsulta[0]->agudeOD)){?>
            <option select value="<?=$datoconsulta[0]->agudeOD.$datoconsulta[0]->agudeOD?>">
              <?=$datoconsulta[0]->agudeOD?></option>
            <?}?>
              <option></option>
              <option value="20/20">20/20</option>
              <option value="20/25">20/25</option>
              <option value="20/30">20/30</option>
              <option value="20/40">20/40</option>
              <option value="20/50">20/50</option>
              <option value="20/60">20/60</option>
              <option value="20/80">20/80</option>
              <option value="20/100">20/100</option>
              <option value="20/150">20/150</option>
              <option value="20/200">20/200</option>
              <option value="20/300">20/300</option>
              <option value="20/400">20/400</option>
              <option value="CD">CD</option>
              <option value="MM">MM</option>
              <option value="PPL">PPL</option>
              <option value="NPL">NPL</option>
              <option value="NO VALORABLE">NO VALORABLE</option>
             </select> 
         </div>
              <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_texto_con_correccion_OD]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_texto_con_correccion_OD?></textarea>
                </div>
              </div>
          <div class="col-lg-6">
            <legen>Agudeza Visual OI:</legen>
            <select class="form-control input-sm" name="revision[agudeD]" >

              <?if(!empty($datoconsulta[0]->agudeD) || !empty($datoconsulta[0]->agudeD)){?>
            <option select value="<?=$datoconsulta[0]->agudeD.$datoconsulta[0]->agudeD?>">
              <?=$datoconsulta[0]->agudeD?></option>
            <?}?>
              <option></option>
              <option value="20/20">20/20</option>
              <option value="20/25">20/25</option>
              <option value="20/30">20/30</option>
              <option value="20/40">20/40</option>
              <option value="20/50">20/50</option>
              <option value="20/60">20/60</option>
              <option value="20/80">20/80</option>
              <option value="20/100">20/100</option>
              <option value="20/150">20/150</option>
              <option value="20/200">20/200</option>
              <option value="20/300">20/300</option>
              <option value="20/400">20/400</option>
              <option value="CD">CD</option>
              <option value="MM">MM</option>
              <option value="PPL">PPL</option>
              <option value="NPL">NPL</option>
              <option value="NO VALORABLE">NO VALORABLE</option>
             </select> 
         </div>
              <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_texto_con_correccion]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_texto_con_correccion?></textarea>
                </div>
              </div>
              <!-- Ojo derecho  -->
          
            <div class="col-lg-12">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[agudeza_con_correccion]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
            <label for="emergencia" class="control-label">CON CORRECCION</label>
            </div>
            <!-- Ojo derecho  -->
              <div class="col-lg-6">
            <legen>Agudeza Visual OD:</legen>
            <select class="form-control input-sm" name="revision[agudeza_s_OD]" >

              <?if(!empty($datoconsulta[0]->agudeza_s_OD) || !empty($datoconsulta[0]->agudeza_s_OD)){?>
            <option select value="<?=$datoconsulta[0]->agudeza_s_OD.$datoconsulta[0]->agudeza_s_OD?>">
              <?=$datoconsulta[0]->agudeza_s_OD?></option>
            <?}?>
              <option></option>
              <option value="20/20">20/20</option>
              <option value="20/25">20/25</option>
              <option value="20/30">20/30</option>
              <option value="20/40">20/40</option>
              <option value="20/50">20/50</option>
              <option value="20/60">20/60</option>
              <option value="20/80">20/80</option>
              <option value="20/100">20/100</option>
              <option value="20/150">20/150</option>
              <option value="20/200">20/200</option>
              <option value="20/300">20/300</option>
              <option value="20/400">20/400</option>
              <option value="CD">CD</option>
              <option value="MM">MM</option>
              <option value="PPL">PPL</option>
              <option value="NPL">NPL</option>
              <option value="NO VALORABLE">NO VALORABLE</option>
             </select> 
         </div>
              <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_texto_con_correccion_s_OD]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_texto_con_correccion_s_OD?></textarea>
                </div>
              </div>
               <!-- Ojo Izquierdo  -->
              <div class="col-lg-6">
            <legen>Agudeza Visual OI:</legen>
            <select class="form-control input-sm" name="revision[agudeOI]" >

              <?if(!empty($datoconsulta[0]->agudeOI) || !empty($datoconsulta[0]->agudeOI)){?>
            <option select value="<?=$datoconsulta[0]->agudeOI.$datoconsulta[0]->agudeOI?>">
              <?=$datoconsulta[0]->agudeOI?></option>
            <?}?>
              <option></option>
              <option value="20/20">20/20</option>
              <option value="20/25">20/25</option>
              <option value="20/30">20/30</option>
              <option value="20/40">20/40</option>
              <option value="20/50">20/50</option>
              <option value="20/60">20/60</option>
              <option value="20/80">20/80</option>
              <option value="20/100">20/100</option>
              <option value="20/150">20/150</option>
              <option value="20/200">20/200</option>
              <option value="20/300">20/300</option>
              <option value="20/400">20/400</option>
              <option value="CD">CD</option>
              <option value="MM">MM</option>
              <option value="PPL">PPL</option>
              <option value="NPL">NPL</option>
              <option value="NO VALORABLE">NO VALORABLE</option>
             </select> 
         </div>
              <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_texto_con_correccion_OI]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_texto_con_correccion_OI?></textarea>
                </div>
              </div>
               
</div>
<div class="col-lg-12">
<legend align="left">VP</legend>
</div> 

<div class="col-lg-12">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">SIN CORRECCION</label>
                </div>
              
<div class="col-lg-6">
            <legen>Agudeza Visual OD:</legen>
            <select class="form-control input-sm" name="revision[agudeLOD]" >

              <?if(!empty($datoconsulta[0]->agudeL) || !empty($datoconsulta[0]->agudeLOD)){?>
            <option select value="<?=$datoconsulta[0]->agudeLOD?>">
              <?=$datoconsulta[0]->agudeLOD?></option>
          <?}?>
              <option></option>
              <option value="J1">J1</option>
              <option value="J2">J2</option>
              <option value="J3">J3</option>
              <option value="J4">J4</option>
              <option value="J5">J5</option>
              <option value="J6">J6</option>
            </select> 
         </div>                
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_vp_con_correccion_OD]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_vp_con_correccion_OD?></textarea>
                </div>
              </div>
<div class="col-lg-6">
            <legen>Agudeza Visual OI:</legen>
            <select class="form-control input-sm" name="revision[agudeL]" >

              <?if(!empty($datoconsulta[0]->agudeL) || !empty($datoconsulta[0]->agudeL)){?>
            <option select value="<?=$datoconsulta[0]->agudeL?>">
              <?=$datoconsulta[0]->agudeL?></option>
          <?}?>
              <option></option>
              <option value="J1">J1</option>
              <option value="J2">J2</option>
              <option value="J3">J3</option>
              <option value="J4">J4</option>
              <option value="J5">J5</option>
              <option value="J6">J6</option>
            </select> 
         </div>                
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_vp_con_correccion]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_vp_con_correccion?></textarea>
                </div>
              </div>



<div class="col-lg-12">
  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"revision[]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
    <label for="emergencia" class="control-label">CON CORRECCION</label>
</div>



<div class="col-lg-6">
            <legen>Agudeza Visual OD:</legen>
            <select class="form-control input-sm" name="revision[agudeODs]" >

              <?if(!empty($datoconsulta[0]->agudeODs) || !empty($datoconsulta[0]->agudeODs)){?>
            <option select value="<?=$datoconsulta[0]->agudeODs?>">
              <?=$datoconsulta[0]->agudeODs?></option>
          <?}?>
              <option></option>
              <option value="J1">J1</option>
              <option value="J2">J2</option>
              <option value="J3">J3</option>
              <option value="J4">J4</option>
              <option value="J5">J5</option>
              <option value="J6">J6</option>
            </select> 
         </div>                
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_vp_sin_correccion_ODs]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_vp_sin_correccion_ODs?></textarea>
                </div>
              </div>
<div class="col-lg-6">
            <legen>Agudeza Visual OI:</legen>
            <select class="form-control input-sm" name="revision[agudeLs]" >

              <?if(!empty($datoconsulta[0]->agudeLs) || !empty($datoconsulta[0]->agudeLs)){?>
            <option select value="<?=$datoconsulta[0]->agudeLs?>">
              <?=$datoconsulta[0]->agudeLs?></option>
          <?}?>
              <option></option>
              <option value="J1">J1</option>
              <option value="J2">J2</option>
              <option value="J3">J3</option>
              <option value="J4">J4</option>
              <option value="J5">J5</option>
              <option value="J6">J6</option>
            </select> 
         </div>                
     <div class="form-group">
                <label for="descripcion1" class="col-lg-3 control-label"></label>
                <div class="col-lg-5">
                  <textarea name="revision[agudeza_vp_con_correccion_s]" class="form-control" rows="4" id="descripcion1"><?=$datoconsulta[0]->agudeza_vp_con_correccion_s?></textarea>
                </div>
              </div>