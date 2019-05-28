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
<div class="col-md-12"></div>
<form action="" name="form" method="post">
  <div class="container-fluid" style="padding-top: 50px;">
    <div class="col-md-4">
      <button type="button" id="add_button" class="btn <?=$this->Planthtml->estilo->colorprinc?>">+ Agregar</button>
    </div>
    <div class="col-md-4">
      <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Pedido Completado</button>
    </div>
    <div class="row" id="add_muestra" style="">
      <div class="col-md-7">
        <label for="#">Descripci&oacute;n</label>
        <input type="text" name="descripcion[]" class="form-control cum_desc" id="desc_pro">
        <input type="hidden" name="codigo[]">
      </div>
      <div class="col-md-3">
        <label for="#">Proveedores</label>
        <input type="text" name="prov" id="proveedores" class="form-control">
      </div>
      <div class="col-md-1">
        <label for="#">Cantidad</label>
        <input type="number" name="cantidad[]" class="form-control" id="cantidad">
      </div>
      <div class="col-md-1">
        <label for="#">Precio</label>
        <input type="text" name="precio[]" class="form-control" id="precio">
      </div>
    </div> 
    <div class="agregados">
      
    </div>  
  </div>
</form>