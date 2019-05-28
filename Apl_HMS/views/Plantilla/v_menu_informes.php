      <li class="treeview ps">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span >Auditorias</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
         <?
           if($this->Usuario->pkaccesouser->Auditoria){?>  
           <li><a href="<?=site_url('epsfact/auditoria')?>"><i class="fa fa-angle-double-right"></i> Auditoria</a></li>
            <?
          }
          if($this->Usuario->pkaccesouser->Auditoria2){?>  
           <li><a href="<?=site_url('epsfact/auditoriacc')?>"><i class="fa fa-angle-double-right"></i> Auditoría Concurrente</a></li>
            <?
          } 
           if($this->Usuario->pkaccesouser->Conciliaciones){?>  
           <li><a href="<?=site_url('epsfact/conciliacion')?>"><i class="fa fa-angle-double-right"></i> Conciliacion</a></li>
            <?
          } ?>
           
         
    
         </ul>
       </li>
       <li class="treeview ps">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span >Informes</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
         <?
         if($this->Usuario->pkaccesouser->Infindi){?> 
           <li><a href="<?=site_url('informes/indicadores')?>"><i class="fa fa-angle-double-right"></i> Indicadores</a></li>
           <li><a href="<?=site_url('informes/informeporanalista')?>"><i class="fa fa-angle-double-right"></i>Analista & Institucio</a></li>
           <? } ?>
         </ul>
       </li>

       
