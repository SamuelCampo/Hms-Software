    
    <?if($this->Modulo->verifacceso("ASIST")){?>             
       <li class="treeview ps">
         <a href="#">
           <i class="fa fa-medkit"></i>
           <span>Historia</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/resumingreso')?>"><i class="fa fa-angle-double-right"></i> Resumen Ingreso</a></li>
           <?if($v_menuadd_estado=='ADMITIDO' || $v_menuadd_estado=='ATENCIÓN MÉDICA'){?>
            <?if($this->Modulo->verifacceso("HISTMTING")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/examingreso')?>"><i class="fa fa-angle-double-right"></i> Exámen de Ingreso</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTIMDX")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/impdx')?>"><i class="fa fa-angle-double-right"></i> Impresión Diágnostica</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("EVMEDDI")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evoldiaria')?>"><i class="fa fa-angle-double-right"></i> Evolución Médica</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTORDEN")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/ordenesres')?>"><i class="fa fa-angle-double-right"></i> Ordenes Resultados</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTSUMMED")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/meds')?>"><i class="fa fa-angle-double-right"></i> Medicamentos</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTSUMMED")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/suminis')?>"><i class="fa fa-angle-double-right"></i> Suministros</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTCIERHT")){?>
            <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/cierre')?>"><i class="fa fa-angle-double-right"></i> Traslado Cierre</a></li><?
            }?>
          <?}?>
          <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/IMP/gestionar/'.$v_menuadd_idhitoria)?>"><i class="fa fa-angle-double-right"></i> <i class="fa fa-print"></i></a></li>
         </ul>
       </li>
      <?}elseif($this->Modulo->usr->roles["rolprinc"]->codrol_t2=='ADM'){?>
       <li class="treeview ps">
         <a href="#">
           <i class="fa fa-medkit"></i>
           <span>Historia</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/resumingreso')?>"><i class="fa fa-angle-double-right"></i> Resumen Ingreso</a></li>
           <li><a href="<?=site_url('/'.$v_menuadd_servicio.'/IMP/gestionar/'.$v_menuadd_idhitoria)?>"><i class="fa fa-angle-double-right"></i> <i class="fa fa-print"></i></a></li>
          </ul>
       </li>
      <? } ?>

