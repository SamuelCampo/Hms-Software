        <?if($this->Modulo->verifacceso("FINAN")){?>  
          <li class="treeview ps">
              <a href="#">
                <i class="fa  fa-dollar"></i>
                <span >Financiero</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?if($this->Modulo->verifacceso("INVEN")){?> 
                <li class="treeview">
                  <a href="#">
                    <i class="glyphicon glyphicon-th"></i>
                    <span >Inventario</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <?if($this->Modulo->verifacceso("BODEG")){?> 
                    <li><a href=" "><i class="fa fa-angle-double-right"></i>Bodegas</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("ARTIC")){?> 
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Artículos</a></li>
                    <?}?>
                  </ul>
                </li>
                <?}?>
                <?if($this->Modulo->verifacceso("TESOR")){?> 
                <li class="treeview">
                  <a href="#">
                    <i class="glyphicon glyphicon-usd"></i>
                    <span >Tesoreria</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <?if($this->Modulo->verifacceso("INGRE")){?> 
                    <li><a href=" "><i class="fa fa-angle-double-right"></i>Ingresos</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("EGRES")){?> 
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Egresos</a></li>
                    <?}?>
                  </ul>
                </li>
                <?}?>
                <?if($this->Modulo->verifacceso("CONTA")){?> 
                <li class="treeview">
                  <a href="#">
                    <i class="glyphicon glyphicon-briefcase"></i>
                    <span >Contabilidad</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <?if($this->Modulo->verifacceso("BANCO")){?> 
                    <li><a href=" "><i class="fa fa-angle-double-right"></i>Bancos</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("TECRS")){?> 
                    <li><a href="<?=site_url('financiero/terceros')?>"><i class="fa fa-angle-double-right"></i> Terceros</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("ASCON")){?> 
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Asientos Contables</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("ASREC")){?> 
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Asientos Recurrentes</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("CONBA")){?> 
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Conciliación Bancaria</a></li>
                    <?}?>
                    <?if($this->Modulo->verifacceso("IMPUE")){?> 
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Impuestos</span>
                      </a>
                      <ul class="treeview-menu">
                        <?if($this->Modulo->verifacceso("RETEN")){?> 
                        <li><a href="<?=site_url('financiero/retenciones')?>"><i class="fa fa-angle-double-right"></i>Retenciones</a></li>
                        <?}?>
                        <?if($this->Modulo->verifacceso("IVA")){?> 
                        <li><a href="<?=site_url('financiero/iva')?>"><i class="fa fa-angle-double-right"></i>IVA</a></li>
                        <?}?>
                      </ul>
                    </li>
                    <?}?>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Informes</span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Balance General</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Balance de Prueba</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Libro Mayor</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Libro Auxiliar</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>IVA</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RTE FTE</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>RTE ICA</a></li>
                      </ul>
                    </li>
                    <?if($this->Modulo->verifacceso("CCOST")){?> 
                    <li><a href=""><i class="fa fa-angle-double-right"></i> Centros de Costo</a></li>
                    <?}?>
                  </ul>
                </li>
                <?}?>
              </ul>        
            </li>
            <?}?>