<fieldset>
  <h3><center>Radicación Cuentas Médicas</center></h3>
  <?if(!empty($datlote[0]->lote_t96)){
    
    $sololec = 'disabled';
    $lote = $datlote[0]->lote_t96;
  }else{
    $lote="NA";
  }
?>
  <form class="form-horizontal" method="post" action="<?=site_url('/epsfact/radicacion/lote/'.$lote.'/guardar')?>" >
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
      <div class="form-group">
        <div class="col-lg-4">
          <label># FACTURA</label>
        </div>
        <div class="col-lg-4">
          <label>VALOR</label>
        </div>
        <div class="col-lg-4">
          <label>RADICAR</label>
        </div>
      </div>
      <div class="row" id="cont_facts">
        <div class="form-group">
          <div class="col-lg-4">
            <input type="text" name="facnum" class="form-control" placeholder="# FACT">
          </div>
          <div class="col-lg-4">
            <input type="text" name="facvalor" class="form-control" id="valor" placeholder="$" >
          </div>
          <div class="col-lg-4">
            <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>" >Continuar</button>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10" id="cont_facts"><div class="form-group"><input type="checkbox" name="cerrarlote" value="SI" > Cerrar lote</div></div>
      </div>
    </div>
  </form>
<?if(is_array($datlote)){?>
  <div class="row" id="cont_facts">
    <div class="form-group col-lg-10">
      <div class="col-lg-4">
        <label># FACTURA</label>
      </div>
      <div class="col-lg-4">
        <label>VALOR</label>
      </div>
      <div class="col-lg-4">
        <label>RADICADO</label>
      </div>
    </div>
  </div>
  <?foreach($datlote as $regfac){
    ?>
      <div class="row" id="cont_facts">
        <div class="form-group col-lg-10">
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled value="<?=$regfac->factnum_t96?>" >
          </div>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled value="<?=number_format($regfac->valor_t96)?>" style="text-align: right" >
          </div>
          <div class="col-lg-4">
            <input type="text" class="form-control" disabled value="<?=$regfac->radicado_t96?>" >
          </div>
        </div>
      </div>
    
    <?
  }
}?>  
  
</fieldset>