<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
  <div class="row contenedorsobreadoadvert alert advertencia">
    <?=$mensaje?>. <b>Desea continuar?</b>
    <br/><br/><button type="submit" class="btn bg-navy">Continuar</button>
  </div>
</form>