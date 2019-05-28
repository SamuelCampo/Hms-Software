<?if($cabecera==true){
  header('Content-Type: text/html; charset=iso-8859-1');
}
$sololectura='';
if(!empty($datobj->objetivo_t81)){
  $sololectura = 'readonly';
}
if($evolenf===true){
  $sololecevenf = 'readonly';
  $deshab = 'disabled';
}
?>
    <div id="seccobjplan" class="no-margin no-padding">
      <div class="form-group no-margin no-padding">
        <div class="col-lg-5 no-margin no-padding">
         <label for="evoldiaria">Objetivo</label>
         <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][objetivo]" value='<?=$datobj->objetivo_t81?>' <?=$sololectura?> required />
        </div>
        <div class="col-lg-4 no-margin no-padding">
         <label for="evoldiaria">Observación</label>
         <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][obs]" value='<?=$datobj->observacion_t81?>' <?=$sololecevenf?> required />
        </div>
        <div class="col-lg-2 no-margin no-padding">
         <label for="evoldiaria">Estado</label>
         <?if($evolenf===true){?>
         <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][estado]" value='<?=$datobj->estado_t81?>' readonly />
         <?}else{?>
           <select class="form-control" name="evolmed[obj][<?=$idobj?>][estado]" >
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_evmedestadoobj,"estado","estado",$datobj->estado_t81),true)?>
          </select>
         <?}?>
        </div>
        <?if(empty($datobj->objetivo_t81)){?>
        <div class="col-lg-1 no-margin no-padding">
          <a class="btn bg-navy btn-xs" onclick="$(this).parent().parent().parent().remove()"><span class="glyphicon glyphicon-trash"></span></a>
        </div>
        <?}?>
      </div>
      <fieldset class="seccobjplanagplan no-margin no-padding">
        <?if($evolenf==false ){?>
        <div class="row no-margin no-padding">
          <a class="col-lg-1 btn bg-navy btn-xs" onclick="btnagregarseccobjplanagplan($(this).parent().parent(),<?=$idobj?>)"><span class="glyphicon glyphicon-plus"></span> Plan</a>
        </div>
        <?}
          if(is_array($planes)){
            foreach($planes as $regplan){
              if(empty($tipevolucion) || $tipevolucion==$regplan->tipo_t82){
                $this->load->view('Asistencial/Historia/f_historia_evoldiariaplanobjnp',array("idobj"=>$idobj,'cabecera'=>false,'datregplan'=>$regplan,"evolenf"=>$evolenf,"tipevolucion"=>$tipevolucion),"Refresh");
              }
            }
          }?>
      </fieldset>
      <hr class="no-margin no-padding">
    </div>