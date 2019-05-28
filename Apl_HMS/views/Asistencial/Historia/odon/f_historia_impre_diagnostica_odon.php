<fieldset>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dx[dxprincipal]" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datodon[0]["dx_dxprincipal_odon"]?>" required="">
            <input name="dx[dxprincipalcod]" type="hidden" id="dxprincipalcod" value="<?=$datodon[0]["dx_dxprincipalcod_odon"]?>">
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="dx[tipodx]" >
              <?if(!empty($datodon[0]["dx_tipodx_odon"])){?>
            <option select value="<?=$datodon[0]["dx_tipodx_odon"]?>"><?=$datodon[0]["dx_tipodx_odon"]?></option>
          <?}?>
              <option></option>
              <option value="Confirmado Nuevo">Confirmado Nuevo</option>
              <option value="Confirmado Repetido">Confirmado Repetido</option>
              <option value="Impresion Diagnostica">Impresion Diagnostica</option>
              </select> 
         </div>

         <div class="form-group">
          <div class="col-lg-10">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dx[dxtercero]" class="form-control input-sm" type="text"  value="<?=$datodon[0]["dx_dxtercero_odon"]?>">
          </div>
        </div>
      </div>
       <div class="form-group">
          <div class="col-lg-6">        
          <label for="dxsecundariocod">DX Secundario</label>
            <input name="dx[dxsecundario]" type="text" class="form-control" id="dxsecundario" placeholder="Dx Secundario" value="<?=$datodon[0]["dx_dxsecundario_odon"]?>">
            <input name="dx[dxsecundariocod]" type="hidden" id="dxsecundariocod" value="<?=$datodon[0]["dx_dxsecundariocod_odon"]?>">  
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="dx[tipodiag2]" >
               <?if(!empty($datodon[0]["dx_tipodiag2_odon"])){?>
            <option select value="<?=$datodon[0]["dx_tipodiag2_odon"]?>"><?=$datodon[0]["dx_tipodiag2_odon"]?></option>
          <?}?>
              <option></option>
              <option></option>
              <option value="Confirmado Nuevo">Confirmado Nuevo</option>
              <option value="Confirmado Repetido">Confirmado Repetido</option>
              <option value="Impresion Diagnostica">Impresion Diagnostica</option>
              </select> 
         </div>
        
        </div>
        <div class="form-group">
           <div class="col-lg-10">
            <label for="dxcuarto">Observacion de DX Secundario</label>
           
            <input class="form-control input-sm" name="dx[dxcuarto]" type="text"  value="<?=$datodon[0]["dx_dxcuarto_odon"]?>">        
          </div>
        </div>
         
         
          <div class="col-lg-6">        
            <label for="dxrelsecundario">DX Relacionado Primero</label>
            <input name="dx[dxrelprincipal]" type="text" class="form-control" id="dxrelsecundario" placeholder="Dx Relacionado con el secundario" value="<?=$datodon[0]["dx_dxrelprincipal_odon"]?>">
            <input name="dx[dxrelprincipalcod]" type="hidden" id="dxrelsecundariocod"  value="<?=$datodon[0]["dx_dxrelprincipalcod_odon"]?>">
          </div>
          <div class="col-lg-6">        
            <label for="dxrelprincipalcod">DX Relacionado Secundario</label>
            <input name="dx[dxrelsecundario]" type="text" class="form-control" id="dxrelprincipal" placeholder="Dx Relacionado con principal" value="<?=$datodon[0]["dx_dxrelsecundario_odon"]?>">
            <input name="dx[dxrelsecundariocod]" type="hidden" id="dxrelprincipalcod" value="<?=$datodon[0]["dx_dxrelsecundariocod_odon"]?>">  
          </div>
       </div>
          
        
      <div class="form-group">
        <div class="col-lg-3">
                  <legen>Causa Externa</legen>
                  <select class="form-control input-sm" name="dx[causaext]" id="" required >
                    <?if(!empty($datodon[0]["dx_causaext_odon"])){?>
                      <option select value="<?=$datodon[0]["dx_causaext_odon"]?>"><?=$datodon[0]["dx_causaext_odon"]?></option>
                    <?}?>
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_causaext,"causaext","causaext",$causaext))?>
                  </select>
        </div>
        <div class="col-lg-3">
                <legen>Via Ingreso</legen>   
                  <select name="dx[viaing]" class="form-control input-sm" id="" placeholder="" value="" >
                    <?if(!empty($datodon[0]["dx_viaing_odon"])){?>
                      <option select value="<?=$datodon[0]["dx_viaing_odon"]?>"><?=$datodon[0]["dx_viaing_odon"]?></option>
                    <?}?>
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_viaing,"viaing","viaing",$viaing))?>
                  </select>         
        </div>
           
        <div class="col-lg-3">
            <legen>FINALIDAD DE LA CONSULTA:</legen>
            <select class="form-control input-sm" name="dx[finalconsu]" >
              <?if(!empty($datodon[0]["dx_finalconsu_odon"])){?>
                      <option select value="<?=$datodon[0]["dx_finalconsu_odon"]?>"><?=$datodon[0]["dx_finalconsu_odon"]?></option>
                    <?}?>
              <option></option>
              <option value="Atencion del parto ">Atencion del parto</option>
              <option value="Atencion del recien nacido ">Atencion del recien nacido</option>
              <option value="Atencion en planificacion familiar ">Atencion en planificacion familiar</option>
              <option value="Deteccion de alteraciones de crecimiento y desarollo del menor de 10 a�os ">Deteccion de alteraciones de crecimiento y desarollo del menor de 10 a�os</option>
              <option value="Deteccion de alteraci�n del desarrollo joven"> Deteccion de alteracion del desarrollo joven</option>
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
              <?if(!empty($datodon[0]["dx_finalproc_odon"])){?>
                      <option select value="<?=$datodon[0]["dx_finalproc_odon"]?>"><?=$datodon[0]["dx_finalproc_odon"]?></option>
                    <?}?>
              <option></option>
              <option value="Diagnostico">Diagnostico</option>
              <option value="Terapeutico">Terapeutico</option>
              <option value="Proteccion Especifica">Proteccion Especifica</option>
              <option value="Detencion temprana de enfermedad general">Detencion temprana de enfermedad general</option>
              <option value="Detecci�n Temprana de enfermedad profesional">Detecci�n Temprana de enfermedad profesional</option>
              <option value="No aplica "> No aplica</option>
             </select>        
         </div>
        <br/><br/>
</fieldset>