         <?if($this->Modulo->verifacceso("RRHH")){?> 
          <li class="treeview ps">
              <a href="#">
                <i class="fa fa-group"></i>
                <span >Recursos Humanos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?if($this->Modulo->verifacceso("PERSO")){
                  ?><li><a href="<?=site_url('rrhh/personal')?>"><i class="fa fa-angle-double-right"></i> Personal </a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("NOMIN")){
                  ?>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-angle-double-right"></i>
                        <span>Nómina</span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?=site_url('nomina/conceptos')?>"><i class="fa fa-angle-double-right"></i>Conceptos</a></li>
                        <li class="treeview">
                          <a href="#">
                            <i class="fa fa-angle-double-right"></i>
                            <span>Novedades</span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="<?=site_url('nomina/novedades')?>"><i class="fa fa-angle-double-right"></i>Novedades</a></li>
                            <li><a href="<?=site_url('nomina/noveperiodica')?>"><i class="fa fa-angle-double-right"></i>Novedades Periodicas</a></li>
                          </ul>
                        </li>
                        <li><a href="<?=site_url('nomina/liquidacion')?>"><i class="fa fa-angle-double-right"></i>Liquidación</a></li>
                        <li class="treeview">
                          <a href="#">
                            <i class="fa fa-angle-double-right"></i>
                            <span>Informes</span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="nomina_infomes/histsalarios"><i class="fa fa-angle-double-right"></i>Historico de Salarios</a></li>
                            <li><a href="nomina_infomes/desprendible"><i class="fa fa-angle-double-right"></i>Desprendibles de Nómina</a></li>
                          </ul>
                        </li>
                      </ul>
                   </li>
                    
                    <?
                  }?>
                
                
            </ul>
          </li>
           <?}?>