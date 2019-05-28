         <?if($this->Modulo->verifacceso("ADMIN")){?>       
            <li class="treeview ps">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span >Administración</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <?if($this->Modulo->verifacceso("ENT")){?>     
                <li><a href="<?=site_url('administracion/entidad')?>"><i class="fa fa-angle-double-right"></i> Entidad / Institución</a></li>
                <?}?>
                <?if($this->Modulo->verifacceso("USUAR")){?>     
                <li><a href="<?=site_url('administracion/usuarios')?>"><i class="fa fa-angle-double-right"></i> Usuarios</a></li>
                <?}?>
                <?if($this->Modulo->verifacceso("ROLES")){?>     
                <li><a href="<?=site_url('administracion/roles')?>"><i class="fa fa-angle-double-right"></i> Roles</a></li>
                <?}?>
                <?if($this->Modulo->verifacceso("ESTRA")){?>     
                <li><a href="<?=site_url('administracion/estructura')?>"><i class="fa fa-angle-double-right"></i> Estructura</a></li>
                <?}?>
                <?if($this->Modulo->verifacceso("ESPEC")){?>     
                <li><a href="<?=site_url('administracion/especialidades')?>"><i class="fa fa-angle-double-right"></i> Especialidades</a></li>
                <?}?>
                <?if($this->Modulo->verifacceso("SERVH")){?>     
                <li><a href="<?=site_url('administracion/servicioshab')?>"><i class="fa fa-angle-double-right"></i> Servicios Habilitados</a></li>
                <?}?>
              </ul>
            </li>
          <?}?>