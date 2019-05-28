<?
  //var_dump($datconsulta->datevoldiariaact["ENFERMERÍA"]->concep["pendientes"]->valor_t83);
?>
  <fieldset>
    <legend><strong>Impresión Diagnóstica</strong></legend>
    <div class="form-group">
      <div class="col-lg-6">        
        <label for="dxprincipalcod">DX Principal</label>
        <input name="evolmed[concep][dxprincipal]" type="text" class="form-control hmsdxdesc" placeholder="Dx Principal" value="<?=$datconsulta->dxprincipal_t64?>" required="">
        <input name="evolmed[concep][dxprincipalcod]" type="hidden" value="<?=$datconsulta->dxprincipalcod_t64?>">
      </div>
      <div class="col-lg-6">        
        <label for="dxrelprincipalcod">DX Relacionado con el Principal</label>
        <input name="evolmed[concep][dxrelprincipal]" type="text" class="form-control hmsdxdesc" placeholder="Dx Relacionado con ppal" value="<?=$datconsulta->dxrelprincipal_t64?>">
        <input name="evolmed[concep][dxrelprincipalcod]" type="hidden" id="dxrelprincipalcod" value="<?=$datconsulta->dxrelprincipalcod_t64?>">
      </div>
   </div>
    <legend><strong>Signos Vitales</strong></legend>
    <div class="form-group">
      <div class="col-lg-4">
       <label for="evoldiaria">Presión Arterial (mmHg):</label>
       <input type="text" class="form-control" name="evolmed[concep][presarterial]" required />
      </div>
      <div class="col-lg-4">
       <label for="evoldiaria">Presión Arterial Media (mmHg)</label>
       <input type="text" class="form-control" name="evolmed[concep][presarterialmed]" required />
      </div>
      <div class="col-lg-4">
       <label for="evoldiaria">Frecuencia cardiaca (L/min.)</label>
       <input type="text" class="form-control" name="evolmed[concep][freccardiaca]" required />
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-4">
       <label for="evoldiaria">Frecuencia Respiratoria (r/min)</label>
       <input type="text" class="form-control" name="evolmed[concep][frecresp]" required />
      </div>
      <div class="col-lg-4">
       <label for="evoldiaria">Temperatura (ºC)</label>
       <input type="text" class="form-control" name="evolmed[concep][temp]" required />
      </div>
      <div class="col-lg-4">
       <label for="evoldiaria">PVC</label>
       <input type="text" class="form-control" name="evolmed[concep][pvc]" required />
      </div>
    </div>
  </fieldset>
  <fieldset id="seccobjplan">
    <legend><strong>Objetivos y Planes</strong> <a id="btnagregarseccobjplan" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a> </legend>
    <?
      if(is_array($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj)){
        $i=0;
        foreach($datconsulta->datevoldiariaact["EVOLUCIÓN MÉDICA"]->obj as $idobj=>$regobj){
          $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobj',array("idobj"=>$i,'cabecera'=>false,"datobj"=>$regobj[0],"planes"=>$regobj),"Refresh");
          $i++;
        }
      }
    ?>
  </fieldset>
<div class='col-lg-6'>
  <fieldset>
    <legend><strong>Problemas y Planeación</strong></legend>
    <div class="form-group">
      <div class="col-lg-4">
       <label for="evoldiaria">Proeblemas nuevos?</label>
       <label class="checkbox-inline">
         <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"evolmed[concep][problemnuevos]","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
        </label>
      </div>
      <div class="col-lg-8">
       <textarea class="form-control" name="evolmed[concep][problemnuevosdesc]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
</div>
<div class='col-lg-6'>
  <fieldset>
    <legend><strong>Observaciones</strong></legend>
    <div class="form-group">
      <div class="col-lg-12">
       <textarea class="form-control" name="evolmed[concep][obs]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
     </div>
    </div>
  </fieldset>
</div>
<div class="row no-margin no-padding">
  <div class='col-lg-6'>
    <fieldset>
      <legend><strong>Evolución Enfermería</strong></legend>
      <div class="form-group">
        <label>Pendientes</label>
        <div class="col-lg-12">
          <textarea class="form-control" readonly rows="6" ><?=$datconsulta->datevoldiariaact["ENFERMERÍA"]->concep["pendientes"]->valor_t83?></textarea>
       </div>
      </div>
      <div class="form-group">
        <label>Observaciones</label>
        <div class="col-lg-12">
         <textarea class="form-control" readonly rows="6" ><?=$datconsulta->datevoldiariaact["ENFERMERÍA"]->concep["obs"]->valor_t83?></textarea>
       </div>
      </div>
    </fieldset>
  </div>
  <div class='col-lg-6'>
    <fieldset>
      <legend><strong>Evolución Terapias</strong></legend>
      <div class="form-group">
        <label>Análisis</label>
        <div class="col-lg-12">
          <textarea class="form-control" readonly name="evolmed[concep][obs]" rows="6" required><?=$datconsulta->datevoluciones[0]->evoldiaria_t68?></textarea>
       </div>
      </div>
    </fieldset>
  </div>
</div>
    
  
  
  <div class="form-group">
    <div class="row text-center">
      <input type="hidden" name='tipoevolucion' value='EVOLUCIÓN MÉDICA'>
     <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>