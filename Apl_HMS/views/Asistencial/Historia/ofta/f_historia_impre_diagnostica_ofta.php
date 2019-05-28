<fieldset>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dx[dxprincipal]" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?= $datconsulta->dxprincipal_t64?>" >
            <input name="dx[dxprincipalcod]" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="dx[tipodx]" >

              <?if(!empty($datoconsulta[0]->dx_tipodx_ofta) || !empty($datoconsulta[0]->dx_tipodx_opto)){?>
            <option select value="<?=$datoconsulta[0]->dx_tipodx_ofta.$datoconsulta[0]->dx_tipodx_opto?>"><?=$datoconsulta[0]->dx_tipodx_ofta.$datoconsulta[0]->dx_tipodx_opto?></option>
          <?}?>
              <option></option>
              <option value="Confirmado Nuevo">Confirmado Nuevo</option>
              <option value="Confirmado Repetido">Confirmado Repetido</option>
              <option value="Impresion Diagnostica">Impresion Diagnostica</option>
              </select> 
         </div>
<div class="col-lg-3">
            <legen>OJO COMPROMETIDO:</legen>
            <select class="form-control input-sm" name="dx[ojo_comprometido]" >
              <?if(!empty($datoconsulta[0]->dxojocomprometido)){?>
            <option select value="<?=$datoconsulta[0]->dxojocomprometido?>"><?=$datoconsulta[0]->dxojocomprometido?></option>
          <?}?>
              <option></option>
              <option value="OJO DERECHO">OJO DERECHO</option>
              <option value="OJO IZQUIERDO">OJO IZQUIERDO</option>
              <option value="AMBOS OJOS">AMBOS OJOS</option>
              </select> 
         </div>



         <div class="form-group">
          <div class="col-lg-10">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dx[dxtercero]" class="form-control input-sm" type="text"  value="<?= $datoconsulta[0]->dx_dxtercerocod_ofta?>">
          </div>
        </div>
      </div>
       <div class="form-group">
          <div class="col-lg-6">        
          <label for="dxsecundariocod">DX Secundario</label>
            <input name="dx[dxsecundario]" type="text" class="form-control" id="dxsecundario" placeholder="Dx Secundario" value="<?= $datconsulta->dxsecundario_t64?>">
            <input name="dx[dxsecundariocod]" type="hidden" id="dxsecundariocod" value="<?=$revision[0]["dx_dxsecundariocod_ofta"]?>">  
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="dx[tipodiag2]" >
               <?if(!empty($datoconsulta[0]->dx_tipodiag2_ofta) || !empty($datoconsulta[0]->dx_tipodiag2_opto)){?>
            <option select value="<?=$datoconsulta[0]->dx_tipodiag2_ofta.$datoconsulta[0]->dx_tipodiag2_opto?>"><?=$datoconsulta[0]->dx_tipodiag2_ofta.$datoconsulta[0]->dx_tipodiag2_opto?></option>
          <?}?>
              <option></option>
              <option value="Confirmado Nuevo">Confirmado Nuevo</option>
              <option value="Confirmado Repetido">Confirmado Repetido</option>
              <option value="Impresion Diagnostica">Impresion Diagnostica</option>
              </select> 
         </div>
<div class="col-lg-3">
            <legen>OJO COMPROMETIDO:</legen>
            <select class="form-control input-sm" name="dx[ojo_comprometido2]" >
              <?if(!empty($datoconsulta[0]->dxojocomprometido2)){?>
            <option select value="<?=$datoconsulta[0]->dxojocomprometido2?>"><?=$datoconsulta[0]->dxojocomprometido2?></option>
          <?}?>
              <option></option>
              <option value="OJO DERECHO">OJO DERECHO</option>
              <option value="OJO IZQUIERDO">OJO IZQUIERDO</option>
              <option value="AMBOS OJOS">AMBOS OJOS</option>
              </select> 
         </div>

        </div>
        <div class="form-group">
           <div class="col-lg-10">
            <label for="dxcuarto">Observacion de DX Secundario</label>
           
            <input class="form-control input-sm" name="dx[dxcuarto]" type="text"  value="<?=$datoconsulta[0]->dx_dxcuarto_ofta?>">        
          </div>
        </div>
         
         
          <div class="col-lg-6">        
            <label for="dxrelsecundario">DX Relacionado Primero</label>
            <input name="dx[dxrelprincipal]" type="text" class="form-control" id="dxrelsecundario" placeholder="Dx Relacionado con el secundario" value="<?=$datoconsulta[0]->dx_dxrelprincipal_ofta?>">
            <input name="dx[dxrelprincipalcod]" type="hidden" id="dxrelsecundariocod"  value="<?=$revision[0]["dx_dxrelprincipal_ofta"]?>">
          </div>
          <div class="col-lg-6">        
            <label for="dxrelprincipalcod">DX Relacionado Secundario</label>
            <input name="dx[dxrelsecundario]" type="text" class="form-control" id="dxrelprincipal" placeholder="Dx Relacionado con principal" value="<?=$datoconsulta[0]->dx_dxrelsecundario_ofta?>">
            <input name="dx[dxrelsecundariocod]" type="hidden" id="dxrelprincipalcod" value="<?=$revision[0]["dx_dxrelsecundariocod_ofta"]?>">  
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
      </div>
        
      <div class="form-group">
        <div class="col-lg-3">
                  <legen>Causa Externa</legen>
                  <select class="form-control input-sm" name="dx[causaext]" id=""  >
                    <?if(!empty($datoconsulta[0]->causaext_t64)){?>
                      <option select value="<?=$datoconsulta[0]->causaext_t64?>"><?=$datoconsulta[0]->causaext_t64?></option>
                    <?}?>
                    <?if(!empty($datoconsulta[0]->causaext)){?>
                      <option value="<?=$datoconsulta[0]->causaext?>"><?=$datoconsulta[0]->causaext?></option>
                    <?}?>
                    
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_causaext,"causaext","causaext",$causaext))?>
                  </select>
        </div>
        <div class="col-lg-3">
                <legen>Via Ingreso</legen>   
                  <select name="dx[viaing]" class="form-control input-sm" id="" placeholder="" value="" >
                    <?if(!empty($datoconsulta[0]->viaing_t64)){?>
                      <option select value="<?=$datoconsulta[0]->viaing_t64?>"><?=$datoconsulta[0]->viaing_t64?></option>
                    <?}?>
                    <?if(!empty($datoconsulta[0]->dx_viaing_ofta)){?>
                      <option select value="<?=$datoconsulta[0]->dx_viaing_ofta?>"><?=$datoconsulta[0]->dx_viaing_ofta?></option>
                    <?}?>
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_viaing,"viaing","viaing",$viaing))?>
                  </select>         
        </div>
           
        <div class="col-lg-3">
            <legen>FINALIDAD DE LA CONSULTA:</legen>
            <select class="form-control input-sm" name="dx[finalconsu]" >
              <?if(!empty($datoconsulta[0]->dx_finalconsu_ofta)){?>
                      <option select value="<?=$datoconsulta[0]->dx_finalconsu_ofta?>"><?=$datoconsulta[0]->dx_finalconsu_ofta?></option>
                    <?}?>
              <?if(!empty($datoconsulta[0]->finalconsu_t64)){?>
                      <option select value="<?=$datoconsulta[0]->finalconsu_t64?>"><?=$datoconsulta[0]->finalconsu_t64?></option>
                    <?}?>
              <option></option>
              <option value="Atencion del parto ">Atencion del parto</option>
              <option value="Atencion del recien nacido ">Atencion del recien nacido</option>
              <option value="Atencion en planificacion familiar ">Atencion en planificacion familiar</option>
              <option value="Deteccion de alteraciones de crecimiento y desarollo del menor de 10 aoos ">Deteccion de alteraciones de crecimiento y desarollo del menor de 10 aoos</option>
              <option value="Deteccion de alteracion del desarrollo joven"> Deteccion de alteracion del desarrollo joven</option>
              <option value="Deteccion de alteraciones el embarazo"> Deteccion de alteraciones el embarazo</option>
              <option value="Deteccin de alteraciones el adulto"> Deteccin de alteraciones el adulto</</option>
              <option value="Deteccion de alteraciones de agudeza visual"> Deteccion de alteraciones de agudeza visual</option>
              <option value="Deteccion de enfermedad profesional"> Deteccion de enfermedad profesional</option>
              <option value="No aplica "> No aplica</option> 
              </select> 
         </div>   

        <div class="col-lg-3">
            <legen>FINALIDAD DEL PROCEDIMIENTO:</legen>
            <select class="form-control input-sm" name="dx[finalproc]" >
              <?if(!empty($datoconsulta[0]->dx_finalproc_ofta)){?>
                      <option select value="<?=$datoconsulta[0]->dx_finalproc_ofta?>"><?=$datoconsulta[0]->dx_finalproc_ofta?></option>
                    <?}?>
              <?if(!empty($datoconsulta[0]->dx_finalproc_t64)){?>
                      <option select value="<?=$datoconsulta[0]->dx_finalproc_t64?>"><?=$datoconsulta[0]->dx_finalproc_t64?></option>
                    <?}?>
              <option></option>
              <option value="Diagnostico">Diagnostico</option>
              <option value="Terapeutico">Terapeutico</option>
              <option value="Proteccion Especifica">Proteccion Especifica</option>
              <option value="Detencion temprana de enfermedad general">Detencion temprana de enfermedad general</option>
              <option value="Deteccion Temprana de enfermedad profesional">Deteccion Temprana de enfermedad profesional</option>
              <option value="No aplica "> No aplica</option>
             </select>        
         </div>
        <br/><br/>
</fieldset>