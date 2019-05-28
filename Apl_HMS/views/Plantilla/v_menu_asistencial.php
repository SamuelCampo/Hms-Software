        <?if($this->Modulo->verifacceso("ASIST")){?>             
            <li class="treeview ps">
              <a href="#">
                <i class="fa fa-medkit"></i>
                <span>Asistencial</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?if($this->Modulo->verifacceso("ASIST")){
                  ?><li><a href="<?=site_url('pacientes/admisiones')?>"><i class="fa fa-angle-double-right"></i> Admisiones</a></li>
                  <?
                  }?>
                <?if($this->Modulo->verifacceso("ASAGE")){
                  if(defined('HMSAgendaT')){
                    ?><li><a href="<?=site_url('pacientes/agendat')?>"><i class="fa fa-angle-double-right"></i> Agenda</a></li><?
                  }else{
                  ?><li class="treeview">
                    <a href="#">
                      <i class="fa fa-angle-double-right"></i>
                      <span >Agenda</span>
                    </a>
                      <ul class="treeview-menu">
                        <li><a href="<?=site_url('pacientes/agenda')?>"><i class="fa fa-angle-double-right"></i>Ver Agenda</a></li>
                        <?php if ($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6 == "ADM" || $this->Modulo->usr->su_t0=='SI'): ?>
                        <li><a href="<?=site_url('pacientes/agenda/bloquear')?>"><i class="fa fa-angle-double-right"></i>Bloquear Agenda</a></li>
                        <li><a href="<?=site_url('pacientes/agenda/desbloquear')?>"><i class="fa fa-angle-double-right"></i>Desbloquear Agenda</a></li>
                        <li><a href="<?=site_url('pacientes/agenda/transladar')?>"><i class="fa fa-angle-double-right"></i>Transladar Agenda</a></li>
                        <?php endif ?>
                      </ul>
                    </li><?
                  }
                }
                if(defined('HMSConsultaSaludOcupacional')){
                ?>
                  <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Salud Ocupacional</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url('asistencialsaludocupacional/admisiones')?>"><i class="fa fa-angle-double-right"></i> Trasabilidad </a></li>
                  </ul>
                <?}
                if($this->Modulo->verifacceso("ASAGE")){
                  ?><li><a href="<?=site_url('pacientes/ordpend')?>"><i class="fa fa-angle-double-right"></i> Ordenes Pendientes</a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("CENSO")){
                  ?><li><a href="<?=site_url('pacientes/censo')?>"><i class="fa fa-angle-double-right"></i> Censo</a></li><?
                  }?>
                <?if($this->Modulo->verifacceso("QUIR")){?>
                  <li><a href="<?=site_url('pacientes/quirurgico')?>"><i class="fa fa-angle-double-right"></i> Prog Cirugías</a></li><?
                }?>
                <?if($this->Modulo->verifacceso("FACTU")){
                  ?><li><a href="<?=site_url('inventarios/stock')?>"><i class="fa fa-angle-double-right"></i> Inventarios</a></li><?
                }?>
                
                  <li><a href="<?=site_url('pacientes/autorizaciones_agenda/crear')?>"><i class="fa fa-angle-double-right"></i>Cons. Informados</a></li>
                  <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Formato 3047</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=site_url('pacientes/autorizaciones_agenda/furips')?>"><i class="fa fa-angle-double-right"></i> Furips </a></li>
                    <li><a href="<?=site_url('pacientes/autorizaciones_agenda/furcen')?>"><i class="fa fa-angle-double-right"></i> Furcen </a></li>
                    <li><a href="<?=site_url('pacientes/autorizaciones_agenda/furpen')?>"><i class="fa fa-angle-double-right"></i> Furpen </a></li>
                    <li><a href="<?=site_url('pacientes/autorizaciones_agenda/autorizaciones')?>"><i class="fa fa-angle-double-right"></i> Autorizaciones </a></li>
                    <li><a href="<?=site_url('pacientes/autorizaciones_agenda/reportes_emergencias')?>"><i class="fa fa-angle-double-right"></i> Reportes Urgencias </a></li>
                  </ul>
                </li>
              </ul>
            </li>
           <?}?>