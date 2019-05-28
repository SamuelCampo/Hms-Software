<fieldset>
  <h3><center>Radicación Cuentas Médicas por Base de Datos</center></h3>
  <?if(!empty($datlote[0]->lote_t96)){
    
    $sololec = 'disabled';
    $lote = $datlote[0]->lote_t96;
  }else{
    $lote="NA";
  }
?>
  <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/radicacionbd/lote/'.$lote.'/guardar')?>" enctype="multipart/form-data" >
    <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
    <div class="form-group">
      <div class="col-lg-4">
        <label ><strong>Entidad:</strong></label>
        <select name="tercero" class="form-control" <?=$sololec?> >
          <option></option> 
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Tercero->listar(),"ident_t16","desc_t16",$datlote[0]->tercid_t96))?>
        </select>
      </div>
      <div class="col-lg-3">
        <label ><strong>Fecha:</strong></label>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <input name="fecha" type="text" class="form-control form_date" id="fecha" placeholder="Fecha" value="<?=$datlote[0]->fradic_t96?>" <?=$sololec?> >
        </div>
      </div>
      <div class="col-lg-3">
        <label><strong># Lote:</strong></label>
        <input type="text" name="lote" id="lote" class="form-control" placeholder="#" readonly value="<?=$datlote[0]->lote_t96?>" >
      </div>
    </div>
    <div class="col-lg-10">
      <div class="form-group col-lg-10">
        <div class="col-lg-10">
          <label class="col-lg-2">CT</label>
          <input name="CT" id="CT" placeholder="CT" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AF</label>
          <input name="AF" id="CT" placeholder="AF" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">US</label>
          <input name="US" id="CT" placeholder="US" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AD</label>
          <input name="AD" id="AD" placeholder="AD" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AC</label>
          <input name="AC" id="AC" placeholder="AC" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AP</label>
          <input name="AP" id="AP" placeholder="AP" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AH</label>
          <input name="AH" id="AH" placeholder="AH" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AU</label>
          <input name="AU" id="AU" placeholder="AU" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AN</label>
          <input name="AN" id="AN" placeholder="AN" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AM</label>
          <input name="AM" id="AM" placeholder="AM" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <label class="col-lg-2">AT</label>
          <input name="AT" id="AT" placeholder="AT" type="file" class="form-file" >
        </div>
        <div class="col-lg-10">
          <center>
            <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</button>
          </center>
        </div>
      </div>
    </div>
  </form>
  
</fieldset>