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
                    <?if($this->Modulo->verifacceso("ASISF")){
                      ?><li><a href="<?=site_url('facturacion/asistente')?>"><i class="fa fa-angle-double-right"></i>Asistente de facturación</a></li><?
                    }?>
                    <?if($this->Modulo->verifacceso("ASISF")){
                      ?><li><a href="<?=site_url('facturacion/asistente')?>"><i class="fa fa-angle-double-right"></i>Asistente de facturación</a></li><?
                    }?>
                    <?if($this->Modulo->verifacceso("ASISF")){
                      ?><li><a href="<?=site_url('facturacion/prefactura')?>"><i class="fa fa-angle-double-right"></i>Prefactura</a></li><?
                    }?>
                    <?if($this->Modulo->verifacceso("PARAF")){
                      ?><li><a href="<?=site_url('facturacion/convenios')?>"><i class="fa fa-angle-double-right"></i>Convenios</a></li><?
                      }?>
                    <?if($this->Modulo->verifacceso("PLANT")){
                      ?><li><a href="<?=site_url('facturacion/planestarifarios')?>"><i class="fa fa-angle-double-right"></i>Plan tarifario</a></li><?
                    }?>
                    <?if($this->Modulo->verifacceso("PLANT")){
                      ?><li><a href="#"><i class="fa fa-angle-double-right"></i>Glosas</a></li><?
                    }?>
                    <?if($this->Modulo->verifacceso("PLANT")){
                      ?><li><a href="<?=site_url('facturacion/planestarifarios')?>"><i class="fa fa-angle-double-right"></i>Conciliación</a></li><?
                    }?>
                      
                  </ul>
                 </li>
                  <?}?>
              </ul>
            </li>
           <?}?>