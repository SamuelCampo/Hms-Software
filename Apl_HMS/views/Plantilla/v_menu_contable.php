              <?if($this->Modulo->verifacceso("CONTA")){?> 
                <li class="treeview ps">
                  <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    <span >Contabilidad</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url('financiero/puc')?>"><i class="fa fa-angle-double-right"></i> PUC</a></li>
                    <li><a href="<?=site_url('financiero/impuestos')?>"><i class="fa fa-angle-double-right"></i> Impuestos</a></li>
                    <li><a href="<?=site_url('financiero/terceros')?>"><i class="fa fa-angle-double-right"></i> Terceros</a></li>
                    <li><a href="<?=site_url('financiero/gruposarticulos')?>"><i class="fa fa-angle-double-right"></i>Grupos de Artículos</a></li>
                    <li><a href="<?=site_url('financiero/articulos')?>"><i class="fa fa-angle-double-right"></i> Artículos Servicios</a></li>
                    <li><a href="<?=site_url('financiero/ccosto')?>"><i class="fa fa-angle-double-right"></i> Centros de Costo</a></li>
                    <li><a href="<?=site_url('financiero/compras')?>"><i class="fa fa-angle-double-right"></i> Compras</a></li>
                    <li><a href="<?=site_url('financiero/ventas')?>"><i class="fa fa-angle-double-right"></i> Ventas</a></li>
                    <li><a href="<?=site_url('financiero/asientos')?>"><i class="fa fa-angle-double-right"></i> Asientos Contables</a></li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Informes</span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?=site_url('financieroinforme/balanceprueba')?>"><i class="fa fa-angle-double-right"></i> Balance de Prueba</a></li>
                        <li><a href="<?=site_url('financieroinforme/libroauxiliar')?>"><i class="fa fa-angle-double-right"></i> Libro Auxiliar</a></li>
                        <li><a href="<?=site_url('financieroinforme/libromayor')?>"><i class="fa fa-angle-double-right"></i> Libro Mayor</a></li>
                      </ul>
                    </li>
                    <?if($this->Modulo->verifacceso("CCOST")){?> 
                    
                    <?}?>
                  </ul>
                </li>
                <?}?>