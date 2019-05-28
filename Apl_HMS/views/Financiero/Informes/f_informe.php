<?if(!empty($mensaje)){
    echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
    }?>
<br><br>

<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/generar" method="post">
<div class="form-group">
    <label for="fechad" class="col-lg-2 control-label">Periodo</label>
    <div class="col-lg-4">
        <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
           <input name="fechad" type="text" class="form-control form_date" id="fechad" placeholder="Desde" value="">
        </div>
    </div>
    <div class="col-lg-4">
        <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
           <input name="fechah" type="text" class="form-control form_date" id="fechah" placeholder="Hasta" value="">
        </div>
    </div>
</div>
<div class="form-group">
    <label for="cuenta" class="col-lg-2 control-label">Cuenta Contable</label>
    <div class="col-lg-8">
           <input name="cuentadesc" type="text" class="form-control cuentacont" id="cuentacontdesc" placeholder="Cuenta Contable" value="" >
           <input name="cuenta" type="hidden" id="cuentacont" value="" >
    </div>
</div>
<div class="form-group">
    <div class="row text-center">
        <br/>
        <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Generar</button>
    </div>
</div>
</form>