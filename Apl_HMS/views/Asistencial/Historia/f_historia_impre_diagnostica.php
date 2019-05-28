<fieldset>
      <div class="form-group">
          <div class="col-lg-6">        
            <label for="dxprincipalcod">DX Principal</label>
            <input name="dxprincipal" type="text" class="form-control" id="dxprincipal" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
            <input name="dxprincipalcod" type="hidden" id="dxprincipalcod" value="<?=$datconsulta->dxprincipalcod_t64?>">
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="tipooption" >
              <?php if (!empty($datconsulta->tipooption_t64)): ?>
                <option value="<?= $datconsulta->tipooption_t64 ?>"><?= $datconsulta->tipooption_t64 ?></option>
              <?php endif ?>
              <option></option>
              <option value="01-Confirmado Nuevo">01-Confirmado Nuevo</option>
              <option value="02-Confirmado Repetido">02-Confirmado Repetido</option>
              <option value="03-Impresion Diagnostica">03-Impresion Diagnostica</option>
              </select> 
         </div>

         <div class="form-group">
          <div class="col-lg-12">
          <label for="dxtercero">Observacion de DX Principal</label>
            <input name="dxtercero" type="text" class="form-control "  placeholder="Observacion de DX Principal" value="<?=$datconsulta->dxtercero_t64?>">
            <input name="dxtercerocod" type="hidden" id="dxtercerocod" value="<?=$datconsulta->dxtercerocod_t64?>">
          </div>
        </div>
      </div>
       <div class="form-group">
          <div class="col-lg-6">        
          <label for="dxsecundariocod">DX Secundario</label>
            <input name="dxsecundario" type="text" class="form-control" id="dxsecundario" placeholder="Dx Secundario" value="<?=$datconsulta->dxsecundario_t64?>">
            <input name="dxsecundariocod" type="hidden" id="dxsecundariocod" value="<?=$datconsulta->dxsecundariocod_t64?>">  
          </div>

          <div class="col-lg-3">
            <legen>TIPO DE DIAGNOSTICO:</legen>
            <select class="form-control input-sm" name="tipooptions" >
              <option></option>
              <option value="01">01-Confirmado Nuevo</option>
              <option value="02">02-Confirmado Repetido</option>
              <option value="03">03-Impresion Diagnostica</option>
              </select> 
         </div>
        </div>
         <div class="col-lg-12">
            <label for="dxcuarto">Observacion de DX Secundario</label>
            <input name="dxcuarto" type="text" class="form-control "  placeholder="Observacion de DX Secundario" value="<?=$datconsulta->dxcuarto_t64?>">
            <input name="dxcuartocod" type="hidden" id="dxcuartocod"  value="<?=$datconsulta->dxcuartocod_t64?>">        
          </div>
         
          <div class="col-lg-6">        
            <label for="dxrelsecundario">DX Relacionado Tercero</label>
            <input name="dxrelsecundario" type="text" class="form-control" id="dxrelsecundario" placeholder="Dx Relacionado con el secundario" value="<?=$datconsulta->dxrelsecundario_t64?>">
            <input name="dxrelsecundariocod" type="hidden" id="dxrelsecundariocod"  value="<?=$datconsulta->dxrelsecundariocod_t64?>">
          </div>
          <div class="col-lg-6">        
            <label for="dxrelprincipalcod">DX Relacionado Cuarto</label>
            <input name="dxrelprincipal" type="text" class="form-control" id="dxrelprincipal" placeholder="Dx Relacionado con principal" value="<?=$datconsulta->dxrelprincipal_t64?>">
            <input name="dxrelprincipalcod" type="hidden" id="dxrelprincipalcod" value="<?=$datconsulta->dxrelprincipalcod_t64?>">  
          </div>
       </div>
          
        
      <div class="form-group">
        <div class="col-lg-3">
                  <legen>Causa Externa</legen>
                  <select class="form-control input-sm" name="causaext" id="causaext" required >
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_causaext,"causaext","causaext",$datconsulta->causaext_t64))?>
                  </select>
        </div>
        <div class="col-lg-3">
                <legen>Via Ingreso</legen>   
                  <select name="viaing" class="form-control input-sm" id="viaing" placeholder="" value="" >
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_viaing,"viaing","viaing",$datconsulta->viaing_t64))?>
                  </select>         
        </div>
           
        <div class="col-lg-3">
            <legen>FINALIDAD DE LA CONSULTA:</legen>
            <select class="form-control input-sm" name="finalconsu" >
              <?php if (!empty($datconsulta->finalconsu_t64)): ?>
                <option value="<?= $datconsulta->finalconsu_t64 ?>"><?= $datconsulta->finalconsu_t64 ?></option>
              <?php endif ?>
              <option></option>
              <option value="01-Atencion del parto">01-Atencion del parto</option>
              <option value="02-Atencion del recien nacido">02-Atencion del recien nacido</option>
              <option value="03-Atencion en planificacion familiar">03-Atencion en planificacion familiar</option>
              <option value="04-Deteccion de alteraciones de crecimiento y desarollo del menor de 10 años">04-Deteccion de alteraciones de crecimiento y desarollo del menor de 10 a�os</option>
              <option value="05-Deteccion de alteracion del desarrollo joven">05-Deteccion de alteracion del desarrollo joven</option>
              <option value="06-Deteccion de alteraciones el embarazo">06-Deteccion de alteraciones el embarazo</option>
              <option value="07-Deteccion de alteraciones el adulto">07-Deteccion de alteraciones el adulto</</option>
              <option value="08-Deteccion de alteraciones de agudeza visual">08-Deteccion de alteraciones de agudeza visual</option>
              <option value="09-Deteccion de enfermedad profesional">09-Deteccion de enfermedad profesional</option>
              <option value="10-No aplica">10-No aplica</option> 
              </select> 
         </div>   

        <div class="col-lg-3">
            <legen>FINALIDAD DEL PROCEDIMIENTO:</legen>
            <select class="form-control input-sm" name="finalproc" >
              <?php if (!empty($datconsulta->finalproc_t64)): ?>
                <option value="<?= $datconsulta->finalproc_t64 ?>"><?= $datconsulta->finalproc_t64 ?></option>
              <?php endif ?>
              <option></option>
              <option value="01-Diagnostico">01-Diagnostico</option>
              <option value="02-Terapeutico">02-Terapeutico</option>
              <option value="03">03-Proteccion Especifica</option>
              <option value="04-Detencion temprana de enfermedad general">04-Detencion temprana de enfermedad general</option>
              <option value="05-Deteccion Temprana de enfermedad profesional">05-Deteccion Temprana de enfermedad profesional</option>
              <option value="06-No aplica">06-No aplica</option>
             </select>        
         </div>
        <br/><br/>
</fieldset>