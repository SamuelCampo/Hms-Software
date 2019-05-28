    <?if($this->Modulo->verifacceso("ADMIN")){?>       
       <li class="treeview ps">
         <a href="#">
           <i class="fa fa-cogs"></i>
           <span >Cuentas Médicas</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?=site_url('epsfact/cuentas')?>"><i class="fa fa-angle-double-right"></i> Consulta</a></li>
           <li><a href="<?=site_url('epsfact/radicacionbd')?>"><i class="fa fa-angle-double-right"></i> Cargue por BD</a></li>
           <li><a href="<?=site_url('epsfact/digitacion')?>"><i class="fa fa-angle-double-right"></i> Digitaci�n</a></li>
           <li><a href="<?=site_url('epsfact/auditoria')?>"><i class="fa fa-angle-double-right"></i> Auditor�a</a></li>
           <li><a href="<?=site_url('epsfact/auditoriacc')?>"><i class="fa fa-angle-double-right"></i> Auditor�a Concurrente</a></li>
           <li><a href="<?=site_url('epsfact/conciliacion')?>"><i class="fa fa-angle-double-right"></i> Conciliaci�n</a></li>
           <li><a href="<?=site_url('epsfact/indicadores')?>"><i class="fa fa-angle-double-right"></i> Indicadores</a></li>
         </ul>
       </li>
     <?}?>