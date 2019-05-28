<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>

<div class="row">
    <div class="form-group">
      <label class="col-lg-3">Nombre institucion</label>
      <div class="col-lg-7">
      <select name="administradoracod" class="form-control" value="" required>
             <option></option> 
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->administradoras_listar(),"codministerio_t70","nombre_t70",$datpaciente->administradoracod_t3))?>
           </select>
        </div>
    </div>
</div><br>     
  <div class="row">
   <input type="hidden" name="urldestino"/>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingOne">
         <h4 class="panel-title">
           <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             <i class="glyphicon glyphicon-picture"></i> Ayudas DX
           </a>
         </h4>
       </div>
       <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="issaydx" id="issaydx" placeholder="Porcentaje %" value="<?=$datpaciente->issaydx_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soataydx" id="soataydx" placeholder="Porcentaje %" value="<?=$datpaciente->soataydx_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partaydx" id="partaydx" placeholder="Porcentaje %" value="<?=$datpaciente->partaydx_t10?>" required >
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarpaydx" id="tarpaydx" placeholder="Porcentaje %" value="<?=$datpaciente->tarpaydx_t10?>" required>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingTwo">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             <i class="glyphicon glyphicon-gift	Try it"></i> Procesamiento
           </a>
         </h4>
       </div>
       <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="issproces" id="issproces" placeholder="Porcentaje %" value="<?=$datpaciente->issproces_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soatproces" id="soatproces" placeholder="Porcentaje %" value="<?=$datpaciente->soatproces_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partproces" id="partproces" placeholder="Porcentaje %" value="<?=$datpaciente->partproces_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarpproces" id="tarpproces" placeholder="Porcentaje %" value="<?=$datpaciente->tarpproces_t10?>" required>
             </div>
           </div>
         </div>
        </div>
       </div>

     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingThree">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
             <i class="glyphicon glyphicon-briefcase"></i> Consulta
           </a>
         </h4>
       </div>
       <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="issconsul" id="issconsul" placeholder="Porcentaje %" value="<?=$datpaciente->issconsul_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soatconsul" id="soatconsul" placeholder="Porcentaje %" value="<?=$datpaciente->issconsul_t10?>" required>
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partconsul" id="partconsul" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarpconsul" id="tarpconsul" placeholder="Porcentaje %">
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingFour">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
             <i class="glyphicon glyphicon-bed"></i> Hospitalizacion
           </a>
         </h4>
       </div>
       <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="isshosp" id="isshosp" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soathosp" id="soathosp" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="parthosp" id="parthosp" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarphosp" id="tarhosp" placeholder="Porcentaje %">
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingSix">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
             <i class="glyphicon glyphicon-tint	Try it"></i> Laboratorio
           </a>
         </h4>
       </div>
       <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="isslab" id="isslab" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soatlab" id="soatlab" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partlab" id="partlab" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarplab" id="tarlab" placeholder="Porcentaje %">
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingSeven">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
             <i class="glyphicon glyphicon-ice-lolly-tasted	Try it"></i> Odontologia
           </a>
         </h4>
       </div>
       <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="issodont" id="issdont" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soatdont" id="soatdont" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partdont" id="partdont" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarpdont" id="tarpdont" placeholder="Porcentaje %">
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingEight">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
             <i class="glyphicon glyphicon-hand-right	Try it"></i> Procedimientos
           </a>
         </h4>
       </div>
       <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="issproced" id="issproced" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soatproced" id="soatproced" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partproced" id="partproced" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarpproced" id="tarpproced" placeholder="Porcentaje %">
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingNine">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
             <i class="glyphicon glyphicon-scissors	Try it"></i> Quirurgicos
           </a>
         </h4>
       </div>
       <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
         <div class="panel-body">
           <div class="form-horizontal">
             <div class="col-sm-1">
               <label class="text-center" for="iss">ISS</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="issquir" id="issquir" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="soat">SOAT</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="soatquir" id="soatquir" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="part">PARTICULAR</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="partquir" id="partquir" placeholder="Porcentaje %">
             </div>
             <div class="col-sm-1">
               <label class="text-center" for="tarifp">T PROPIA</label>
             </div>
             <div class="col-sm-2">
               <input type="number" class="form-control" name="tarpquir" id="tarpquir" placeholder="Porcentaje %">
             </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
                                    
<div class="form-group">
         <div class="row text-center">
          <br/>
          <?if($dathistoria->estado_t4!=='CERRADA'){?>
           <button name="formularioenviado" value="convenio" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
          <?}?>
         </div>
       </div>
    


 
  