<li class="treeview ps">
	<a href="#">
        <i class="fa fa-medkit"></i>
            <span>Financiero</span>
    	<i class="fa fa-angle-left pull-right"></i>
   </a>
   <ul class="treeview-menu">
   	<?if($this->Modulo->verifacceso("FACTU")){?>
                  <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Facturaci&oacute;n</span>
                  </a>
                  <ul class="treeview-menu">
                    <?if($this->Modulo->verifacceso("FACTU")){?>
                      <li><a href="<?=site_url('administracion/terceros')?>"><i class="fa fa-angle-double-right"></i> Terceros</a></li>
                      <li><a href="<?=site_url('administracion/convenios')?>"><i class="fa fa-angle-double-right"></i> Convenios</a></li>
                      <li><a href="<?=site_url('administracion/tarifas')?>"><i class="fa fa-angle-double-right"></i> Tarifas</a></li>
                      <li><a href="<?=site_url('facturacion/facturas')?>"><i class="fa fa-angle-double-right"></i>Facturas</a></li>
                      <li><a href="<?=site_url('facturacion/Factura/masiva')?>"><i class="fa fa-angle-double-right"></i>Facturacion Masiva</a></li>
                      <li><a href="<?=site_url('facturacion/rips')?>"><i class="fa fa-angle-double-right"></i>RIPS</a></li>
                      <li><a href="<?=site_url('facturacion/pruebas')?>"><i class="fa fa-angle-double-right"></i>Pruebas</a></li>
                      <?if($this->Modulo->usr->su_t0=='SI'){?>
                      <li><a href="<?=site_url('facturacion/rips/validar')?>"><i class="fa fa-angle-double-right"></i>Validar RIPS</a></li>
                      <?}?>
                      <li><a href="<?=site_url('facturacion/preliqord')?>"><i class="fa fa-angle-double-right"></i>Pre - Liquidación Ordenes</a></li>
                      <?

                    }?>
                  </ul>
                 </li>
                  <?}?>
   </ul>
</li>
<li class="treeview ps">
  <a href="#">
        <i class="fa fa-medkit"></i>
            <span>Informes</span>
      <i class="fa fa-angle-left pull-right"></i>
   </a>
   <ul class="treeview-menu">
                 <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Informes</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url('informes/porconsulta')?>"><i class="fa fa-angle-double-right"></i>Por Consulta</a></li>
                    <li><a href="<?=site_url('informes/porfactura')?>"><i class="fa fa-angle-double-right"></i>Por Factura</a></li>
                    <li><a href="<?=site_url('informes/general')?>"><i class="fa fa-angle-double-right"></i>General</a></li>
                    <li><a href="<?=site_url('informes/informe_256')?>"><i class="fa fa-angle-double-right"></i>Informe 256</a></li>
                    <li><a href="<?=site_url('informes/planificacion_familiar')?>"><i class="fa fa-angle-double-right"></i>Ginecologia</a></li>
                    <li><a href="<?=site_url('informes/hospitalizacion')?>"><i class="fa fa-angle-double-right"></i>Por Hospitalizaci&oacute;n</a></li>
                    <li><a href="<?=site_url('informes/ocupacional')?>"><i class="fa fa-angle-double-right"></i>Por Ocupacional</a></li>
                    <?if($this->Modulo->usr->su_t0=='SI'){?>
                    <li><a href="<?=site_url('graficas')  ?>"><i class="fa fa-angle-double-right"></i>Graficas</a></li>
                    <?php } ?>
                  </ul>
                 </li>
   </ul>
</li>