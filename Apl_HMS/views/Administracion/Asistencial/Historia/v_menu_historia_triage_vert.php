    <?if($this->Modulo->verifacceso("ASIST")){?>             
       <li class="treeview ps">
         <a href="#">
           <i class="fa fa-medkit"></i>
           <span>Triage</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <?if($this->Modulo->verifacceso("HISTMTING")){?>
           <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/resumingreso')?>"><i class="fa fa-angle-double-right"></i> Resumen Ingreso</a></li>
           <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/motingreso')?>"><i class="fa fa-angle-double-right"></i> Motivo de Ingreso</a></li>
           <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/signos')?>"><i class="fa fa-angle-double-right"></i> Signos Vitales</a></li><?
           }?>
         </ul>
       </li>
      <?}?>
