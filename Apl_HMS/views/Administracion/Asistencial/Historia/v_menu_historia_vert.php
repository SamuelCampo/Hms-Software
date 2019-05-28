    <?
      //VAR_DUMP($this->db->database);
      //var_dump($this->Modulo->usr->roles);exit;
    foreach ($this->Modulo->usr as $fila => $value) {
               foreach ($value->especialidades as $key) {
                  $especialidad =  $key->idps_especialidades_t9;
               }
             } 
    ?>
       <? //if(empty($v_menuadd_servicio)){  
              //    $v_menuadd_servicio="consexterna";
                //}?>
    <?if($this->Modulo->verifacceso("ASIST")){?>             
       <li class="treeview ps active">
         <a href="#">
           <i class="fa fa-medkit"></i>
           <span>Historia</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/resumingreso')?>"><i class="fa fa-angle-double-right"></i> Resumen Ingreso</a></li>
           <?if($v_menuadd_estado ='ADMITIDO' || $v_menuadd_estado='ATENCION MEDICA' || $this->Modulo->usr->su_t0=='SI'){?>
            <? if($this->Modulo->verifacceso("HISTCONSULTA")){?>
              <?php if ($especialidad == 4 || $especialidad == 20 ): ?>
              <?php else: ?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/consulta')?>"><i class="fa fa-angle-double-right"></i> Consulta</a></li>
            <?php if($especialidad == 8 || $this->Modulo->usr->su_t0=='SI'){ ?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolucion_psicologica')?>"><i class="fa fa-angle-double-right"></i> Evolucion Psicologica</a></li>
            <? } ?>
         <?php endif ?><?
            }?>
        <?php if ($this->db->database == "CLIOFTALMO") { ?>
       <li class="treeview ">
            <a href="#">
              <i class="fa fa-angle-double-right"></i>
              <span>Oftalmologia</span>
              <i class="fa fa-angle-left pull-right"></i>
           </a>
         <ul class="treeview-menu">
           <?if($v_menuadd_estado=='ADMITIDO' || $v_menuadd_estado=='ATENCIÓN MÉDICA' || $this->Modulo->usr->su_t0=='SI'){?>
            <?if($this->Modulo->verifacceso("HISTCONSULTA")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/oftalmologia/'.$v_menuadd_idhitoria.'/consulta')?>"><i class="fa fa-angle-double-right"></i> Consulta</a></li>
            <li><a href="<?=site_url('pacientes/quirurgico/'.$v_menuadd_idhitoria.'/crear')?>"><i class="fa fa-angle-double-right"></i> Desc. Quirugica</a></li><?
            }?>
            <?if($this->db->database=='hms_P900887466'){?>
            <li><a href="<?=site_url('consexterna/MED/gestionar/'.$v_menuadd_idhitoria.'/consultaso')?>"><i class="fa fa-angle-double-right"></i> Consulta S.S.T.</a></li><?
            }?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVOLMED")){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolmedica')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n M&eacute;dica</a></li>
            <?}?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("AUXENF") ){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolenfer')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Enfermer&iacute;a</a></li>
            <?}?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVTRP") ){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evoltrp')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Terapias</a></li>
            <?}?>
          <?}?>
         </ul>
       </li>
       <li class="treeview ">
           <a href="#">
           <i class="fa fa-angle-double-right"></i>
           <span>Optometria</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <?if($v_menuadd_estado=='ADMITIDO' || $v_menuadd_estado=='ATENCIÓN MÉDICA' || $this->Modulo->usr->su_t0=='SI'){?>
            <?if($this->Modulo->verifacceso("HISTCONSULTA")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/optometria/'.$v_menuadd_idhitoria.'/consulta')?>"><i class="fa fa-angle-double-right"></i> Consulta</a></li><?
            }?>
            <?if($this->db->database=='hms_P900887466'){?>
            <li><a href="<?=site_url('consexterna/MED/gestionar/'.$v_menuadd_idhitoria.'/consultaso')?>"><i class="fa fa-angle-double-right"></i> Consulta S.S.T.</a></li><?
            }?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVOLMED")){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolmedica')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n M&eacute;dica</a></li>
            <?}?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVENF") ){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolenfer')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Enfermer&iacute;a</a></li>
            <?}?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVTRP") ){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evoltrp')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Terapias</a></li>
            <?}?>
          <?}?>
         </ul>
       </li>
       <?php } ?>
          <li class="treeview ">
            <a href="#">
           <i class="fa fa-angle-double-right"></i>
           <span>Odontologia</span>
           <i class="fa fa-angle-left pull-right"></i>
         </a>
         <ul class="treeview-menu">
           <li><a href="<?=site_url($v_menuadd_servicio.'/odontograma/gestionar/'.$v_menuadd_idhitoria.'/resumingreso')?>"><i class="fa fa-angle-double-right"></i> Odontograma</a></li>

           <?if($v_menuadd_estado=='ADMITIDO' || $v_menuadd_estado=='ATENCION MEDICA' || $this->Modulo->usr->su_t0=='SI'){?>
            <?if($this->Modulo->verifacceso("HISTCONSULTA")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/odontologia/'.$v_menuadd_idhitoria.'/consulta')?>"><i class="fa fa-angle-double-right"></i> Consulta</a></li><?
            }?>
            <?if($this->db->database=='hms_P900887466'){?>
            <li><a href="<?=site_url('consexterna/MED/gestionar/'.$v_menuadd_idhitoria.'/consultaso')?>"><i class="fa fa-angle-double-right"></i> Consulta S.S.T.</a></li><?
            }?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/odontologia/evolmedica/'.$v_menuadd_idhitoria.'/evolmedica')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Odontologia</a></li>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/odontologia/evolhigi/'.$v_menuadd_idhitoria.'/evolenfer')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Higienista</a></li>      
            <?if($this->Modulo->verifacceso("HISTORDEN")){?>
            <!-- <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/ordenesres')?>"><i class="fa fa-angle-double-right"></i> Ordenes Resultados</a></li> --><?
            }?>
           
            <?if($this->Modulo->verifacceso("HISTCIERHT")){?>
            <!-- <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/cierre')?>"><i class="fa fa-angle-double-right"></i> Dx Egreso - Cierre</a></li> --><?
            }?>
          <?}?>
          <!-- <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/notaclarat')?>"><i class="fa fa-angle-double-right"></i> Nota Aclaratoria</a></li> -->
          <!--<li><a href="<?=site_url($v_menuadd_servicio.'/IMP/odontologia/'.$v_menuadd_idhitoria)?>"><i class="fa fa-angle-double-right"></i> <i class="fa fa-print"></i></a></li>-->
         </ul>
       </li>
       <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/incapacidad/'.$v_menuadd_idhitoria.'/consulta')?>"><i class="fa fa-angle-double-right"></i> Incapacidades</a></li>
       <li class="treeview">
                  <a href="#">
                    <i class="fa fa-angle-double-right"></i>
                    <span >Procedimientos</span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/citologia/'.$v_menuadd_idhitoria.'/consulta')?>"><i class="fa fa-angle-double-right"></i>Citologia</a></li>
                  </ul>
                 </li>
            <?if($this->db->database=='hms_P900887466'){?>
            <li><a href="<?=site_url('consexterna/MED/gestionar/'.$v_menuadd_idhitoria.'/consultaso')?>"><i class="fa fa-angle-double-right"></i> Consulta S.S.T.</a></li><?
            }?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVOLMED")){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolmedica')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n M&eacute;dica</a></li>
            <?}?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVENF") ){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evolenfer')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Enfermer&iacute;a</a></li>
            <?}?>
            <?if($v_menuadd_servicio!='consexterna' && $this->Modulo->verifacceso("EVTRP") ){?>
              <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/evoltrp')?>"><i class="fa fa-angle-double-right"></i> Evoluci&oacute;n Terapias</a></li>
            <?}?>
            <?if($this->Modulo->verifacceso("HISTORDEN")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/ordenesres')?>"><i class="fa fa-angle-double-right"></i> Ordenes Resultados</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTREMISION")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/remision')?>"><i class="fa fa-angle-double-right"></i> Remisi&oacute;n</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTSUMMED")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/meds')?>"><i class="fa fa-angle-double-right"></i> Medicamentos</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTSUMMED")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/suminis')?>"><i class="fa fa-angle-double-right"></i> Suministros</a></li><?
            }?>
            <?if($this->Modulo->verifacceso("HISTCIERHT")){?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/cierre')?>"><i class="fa fa-angle-double-right"></i> Dx Egreso - Cierre</a></li><?
            }?>
          <?}?>
          <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/notaclarat')?>"><i class="fa fa-angle-double-right"></i> Nota Aclaratorias</a></li>
          <?php if ( $especialidad == 4): ?>
            <li><a href="<?=site_url($v_menuadd_servicio.'/IMP/odontologia/'.$v_menuadd_idhitoria)?>"><i class="fa fa-angle-double-right"></i> <i class="fa fa-print"></i></a></li>
          <?php endif ?>
            <?php if ($especialidad != 4): ?>
             <li><a href="<?=site_url($v_menuadd_servicio.'/IMP/gestionar/'.$v_menuadd_idhitoria)?>"><i class="fa fa-angle-double-right"></i> <i class="fa fa-print"></i></a></li>
           <?php endif ?>
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
           <li><a href="<?=site_url($v_menuadd_servicio.'/'.$v_menuadd_rol.'/gestionar/'.$v_menuadd_idhitoria.'/resumingreso')?>"><i class="fa fa-angle-double-right"></i> Resumen Ingreso</a></li>
           <?php if ($especialidad != 4): ?>
             <li><a href="<?=site_url($v_menuadd_servicio.'/IMP/gestionar/'.$v_menuadd_idhitoria)?>"><i class="fa fa-angle-double-right"></i> <i class="fa fa-print"></i></a></li>
           <?php endif ?>
          </ul>
       </li>
      <? } ?>