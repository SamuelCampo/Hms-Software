<?if($cabecera==true){
  header('Content-Type: text/html; charset=iso-8859-1');
}
$sololectura='';
if(!empty($datregplan->objetivo_t81)){
  $sololectura = 'readonly';
  $deshab = 'disabled';
}
if($evolenf===true){
  $sololecevenf = 'readonly';
  $deshabenf = 'disabled';
}
?>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-6 no-margin no-padding">
           <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][planes][plan][]" required placeholder="PLAN" <?=$sololectura?> value='<?=$datregplan->plan_t82?>' />
          </div>
          <div class="col-lg-3 no-margin no-padding">
            <?if($evolenf===true || !empty($datregplan->objetivo_t81)){?>
            <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][planes][tipo][]" value='<?=$datregplan->tipo_t82?>' readonly />
            <?}else{?>
            <select class="form-control" name="evolmed[obj][<?=$idobj?>][planes][tipo][]" >
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_tipoejecplan,"tipo","tipo",$datregplan->tipo_t82),true)?>
            </select>
            <?}?>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <?if($evolenf===true){?>
            <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][planes][estado][]" value='<?=$datregplan->estado_t82?>' readonly />
            <?}else{?>
            <select class="form-control" name="evolmed[obj][<?=$idobj?>][planes][estado][]" <?=$deshabenf?> >
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_evmedesatdoplan,"estado","estado",$datregplan->estado_t82),true)?>
            </select>
            <?}?>
           </div>
        <?if(empty($datregplan->objetivo_t81)){?>
          <div class="col-lg-1 no-margin no-padding">
            <a class="btn bg-navy btn-xs" onclick="$(this).parent().parent().remove()"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
        <?}?>
        </div>
        <?if($evolenf===true){?>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-11 no-margin no-padding">
           <input type="text" class="form-control" name="evolmed[obj][<?=$idobj?>][planes][actividad][]" required placeholder="ACTIVIDAD" value='<?=$datregplan->actividad_t82?>' />
          </div>
        </div>
        <?}?>
