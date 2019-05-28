       
       <li class="treeview ps">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span >Cuentas Medicas</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
         <?if($this->Usuario->pkaccesouser->Consulta){?>  
           <li><a href="<?=site_url('epsfact/cuentas')?>"><i class="fa fa-angle-double-right"></i>Trasabilidad</a></li>
           <?
          }
           if($this->Usuario->pkaccesouser->Radicacion){?>  
           <li><a href="<?=site_url('epsfact/radicacion')?>"><i class="fa fa-angle-double-right"></i> Radicacion</a></li>
            <?
          }
           if($this->Usuario->pkaccesouser->Radicacion2){?>  
           <li><a href="<?=site_url('epsfact/radicacionbd')?>"><i class="fa fa-angle-double-right"></i> Radicacion por RIPS</a></li>
            <?
          }
           if($this->Usuario->pkaccesouser->Digitacion){?>  
           <li><a href="<?=site_url('epsfact/digitacion')?>"><i class="fa fa-angle-double-right"></i> Digitacion</a></li>
            <?
          }
           if($this->Usuario->pkaccesouser->Auditoria){?>  
           <li><a href="<?=site_url('epsfact/auditoria')?>"><i class="fa fa-angle-double-right"></i> Auditoria</a></li>
            <?
          }
           if($this->Usuario->pkaccesouser->Conciliacion){?>  
           <li><a href="<?=site_url('epsfact/conciliacion')?>"><i class="fa fa-angle-double-right"></i> Conciliacion</a></li>
            <?
          }
           ?>
         </ul>
       </li>
