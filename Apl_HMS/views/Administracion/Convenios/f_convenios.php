<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
//var_dump($datconvenios);
?>
<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" onsubmit="" enctype="multipart/form-data" id="form_personal">
  <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
  <div class="col-lg-11">
      <div class="form-group">
        <div class="col-lg-12">
          <label>Nombre institucion</label>
          <input type="text" name="tercdesc" id="tercdesc" class="form-control" value="<?=$datconvenios["convenio"]->desc_t16?>" placeholder="TERCERO">
          <input type="hidden" name="tercero" id="tercid" value="<?=$datconvenios["convenio"]->tercero_t95?>" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-4">
          <label ><strong>Descripción:</strong></label>
          <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripción" value="<?=$datconvenios["convenio"]->descripcion_t95?>" >
        </div>
        <div class="col-lg-2">
          <label ><strong>Periodo Pago (Días):</strong></label>
          <div class="input-group">
            <input name="periodopago" type="number" class="form-control" id="periodopago" placeholder="Días" value="<?=$datconvenios["convenio"]->periodopago_t95?>" >
          </div>
        </div>
        <div class="col-lg-3">
          <label ><strong>Vigencia:</strong></label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="vigdesde" type="text" class="form-control form_date" id="vigdesde" placeholder="Desde" value="<?=$datconvenios["convenio"]->vigdesde_t95?>" >
          </div>
        </div>
        <div class="col-lg-3">
          <label ><strong>Hasta:</strong></label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="vighasta" type="text" class="form-control form_date" id="vighasta" placeholder="Hasta" value="<?=$datconvenios["convenio"]->vighasta_t95?>" >
          </div>
        </div>
      </div>
  </div><br>     
    <div class="col-lg-11">
     <input type="hidden" name="urldestino"/>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingAMBU">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseAMBU" aria-expanded="true" aria-controls="collapseAMBU">
               <i class="glyphicon glyphicon-picture"></i> Tranporte
             </a>
           </h4>
         </div>
         <div id="collapseAMBU" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAMBU">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[AMBU][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["AMBU"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
       <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingAYDX">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseAYDX" aria-expanded="true" aria-controls="collapseAYDX">
               <i class="glyphicon glyphicon-picture"></i> Ayudas DX
             </a>
           </h4>
         </div>
         <div id="collapseAYDX" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAYDX">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[AYDX][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["AYDX"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingBASA">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseBASA" aria-expanded="true" aria-controls="collapseBASA">
               <i class="glyphicon glyphicon-picture"></i> Hemoderivados y Sangre
             </a>
           </h4>
         </div>
         <div id="collapseBASA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBASA">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[BASA][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["BASA"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingCONS">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseCONS" aria-expanded="true" aria-controls="collapseCONS">
               <i class="glyphicon glyphicon-picture"></i> Consulta
             </a>
           </h4>
         </div>
         <div id="collapseCONS" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCONS">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[CONS][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["CONS"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingHOSP">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseHOSP" aria-expanded="true" aria-controls="collapseHOSP">
               <i class="glyphicon glyphicon-picture"></i> Hospitalización
             </a>
           </h4>
         </div>
         <div id="collapseHOSP" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHOSP">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[HOSP][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["HOSP"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingLABO">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseLABO" aria-expanded="true" aria-controls="collapseLABO">
               <i class="glyphicon glyphicon-picture"></i> Laboratorio
             </a>
           </h4>
         </div>
         <div id="collapseLABO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLABO">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[LABO][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["LABO"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingODON">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseODON" aria-expanded="true" aria-controls="collapseODON">
               <i class="glyphicon glyphicon-picture"></i> Odontología
             </a>
           </h4>
         </div>
         <div id="collapseODON" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingODON">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[ODON][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["ODON"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingPATO">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapsePATO" aria-expanded="true" aria-controls="collapsePATO">
               <i class="glyphicon glyphicon-picture"></i> Patologías
             </a>
           </h4>
         </div>
         <div id="collapsePATO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPATO">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[PATO][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["PATO"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingPROC">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapsePROC" aria-expanded="true" aria-controls="collapsePROC">
               <i class="glyphicon glyphicon-picture"></i> Procedimientos
             </a>
           </h4>
         </div>
         <div id="collapsePROC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPROC">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[PROC][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["PROC"][$regplan->codplan_t63]?>">
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingQUIR">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseQUIR" aria-expanded="true" aria-controls="collapseQUIR">
               <i class="glyphicon glyphicon-picture"></i> Quirurgicos
             </a>
           </h4>
         </div>
         <div id="collapseQUIR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingQUIR">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[QUIR][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["QUIR"][$regplan->codplan_t63]?>" >
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
        
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingTERA">
           <h4 class="panel-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseTERA" aria-expanded="true" aria-controls="collapseTERA">
               <i class="glyphicon glyphicon-picture"></i> Terapias
             </a>
           </h4>
         </div>
         <div id="collapseTERA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTERA">
           <div class="panel-body">
             <div class="form-horizontal">
               <?
                foreach($this->Convenio->arr_planes as $regplan){?>
                  <div class="col-lg-2">
                    <label class="text-center" for="<?=$regplan->codplan_t63?>"><?=$regplan->codplan_t63?></label>
                    <input type="text" class="form-control" name="TARIFAS[TERA][<?=$regplan->codplan_t63?>]" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["TERA"][$regplan->codplan_t63]?>" >
                  </div>
                <?}?>
             </div>
           </div>
         </div>
       </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingMED">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseMED" aria-expanded="true" aria-controls="collapseMED">
              <i class="glyphicon glyphicon-picture"></i> Medicamentos
            </a>
          </h4>
        </div>
        <div id="collapseMED" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMED">
          <div class="panel-body">
            <div class="form-horizontal">
              <div class="col-sm-1">
                <label class="text-center" for="iss">TARIFA</label>
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="TARIFAS[MED][VAL]" id="MEDISS" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["MED"]["VAL"]?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingMED">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSUM" aria-expanded="true" aria-controls="collapseSUM">
              <i class="glyphicon glyphicon-picture"></i> Suministros
            </a>
          </h4>
        </div>
        <div id="collapseSUM" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSUM">
          <div class="panel-body">
            <div class="form-horizontal">
              <div class="col-sm-1">
                <label class="text-center" for="iss">TARIFA</label>
              </div>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="TARIFAS[SUM][VAL]" id="SUMISS" placeholder="Porcentaje %" value="<?=$datconvenios["tarifas"]["SUM"]["VAL"]?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

  <div class="form-group">
    <div class="col-lg-11 text-center">
     <br/>
     <button name="formularioenviado" value="convenio" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
    </div>
  </div>
</form>



