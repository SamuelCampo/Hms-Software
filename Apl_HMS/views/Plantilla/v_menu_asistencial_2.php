        <?if($this->Modulo->verifacceso("ASIST")){?>             
            <li class="treeview ps">
              <a href="#">
                <i class="fa fa-medkit"></i>
                <span>Asistencial</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?if($this->Modulo->verifacceso("ADMS")){
                  ?><li><a href="<?=site_url('pacientes/admisiones')?>"><i class="fa fa-angle-double-right"></i> Admisiones</a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("ASAGE")){
                  ?><li><a href="<?=site_url('pacientes/agenda')?>"><i class="fa fa-angle-double-right"></i> Agenda</a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("CENSO")){
                  ?><li><a href="<?=site_url('pacientes/censo')?>"><i class="fa fa-angle-double-right"></i> Censo</a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("AYDX")){?>
                  <li><a href="<?=site_url('pacientes/censo')?>"><i class="fa fa-angle-double-right"></i> Ayudas Diagnósticas</a></li><?
                }?>
                <?if($this->Modulo->verifacceso("LABO")){?>
                  <li><a href="<?=site_url('pacientes/censo')?>"><i class="fa fa-angle-double-right"></i> Laboratorios</a></li><?
                }?>
                <?if($this->Modulo->verifacceso("QUIR")){?>
                  <li><a href="<?=site_url('pacientes/censo')?>"><i class="fa fa-angle-double-right"></i> Prog Cirugías</a></li><?
                }?>
                <?if($this->Modulo->verifacceso("SUMIN")){
                  ?><li><a href="<?=site_url('inicio')?>"><i class="fa fa-angle-double-right"></i> Suministros</a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("FACTU")){
                  ?><li><a href="<?=site_url('inventarios/stock')?>"><i class="fa fa-angle-double-right"></i> Inventarios</a></li><?
                }?>
                <?if($this->Modulo->verifacceso("FACTU")){?>
                  <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Facturación</span>
                  </a>
                  <ul class="treeview-menu">
                    <?if($this->Modulo->verifacceso("FACTU")){?>
                      <li><a href="<?=site_url('facturacion/rips')?>"><i class="fa fa-angle-double-right"></i>RIPS</a></li>
                      <?if($this->Modulo->usr->su_t0=='SI'){?>
                      <li><a href="<?=site_url('facturacion/rips/validar')?>"><i class="fa fa-angle-double-right"></i>Validar RIPS</a></li>
                      <?}?>
                      <li><a href="<?=site_url('facturacion/preliqord')?>"><i class="fa fa-angle-double-right"></i>Pre - Liquidación Ordenes</a></li><?
                    }?>
                  </ul>
                 </li>
                  <?}?>
                 <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Informes</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url('informes/porconsulta')?>"><i class="fa fa-angle-double-right"></i>Por Consulta</a></li>
                    <li><a href="<?=site_url('informes/porordenes')?>"><i class="fa fa-angle-double-right"></i>Por Ordenes</a></li>
                  </ul>
                 </li>
              </ul>
            </li>
           <?}?>