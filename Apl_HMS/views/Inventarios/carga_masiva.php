  <form action="<?=site_url('/inventarios/stock/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a href="<?=site_url('/inventarios/stock/despacho')?>" class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-inbox"></span>
            <a href="<?=site_url('/inventarios/stock/cargar_factura')?>" class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-cloud-upload"></span>
          </a>
        </div>
      </div>
   </form>


<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("Realmente desea eliminar?"))
    {
        return true;
    }
    return false;
}
//-->
</script>

<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<form action="" name="" method="">
  <div class="row">
    <div class="col-md-3">
      <label for="#">Codigo</label>
      <input type="text" name="" class="form-control">
    </div>
    <div class="col-md-6">
      <label for="#">Descripción</label>
      <input type="text" name="" class="form-control">
    </div>
    <div class="col-md-1">
      <label for="#">Cantidad</label>
      <input type="number" name="" class="form-control">
    </div>
    <div class="col-md-1">
      <label for="#">Precio</label>
      <input type="text" name="" class="form-control">
    </div>
  </div>
</form>