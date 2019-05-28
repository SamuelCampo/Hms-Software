<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]); 
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $dia=date("d");
  $mes=date("m");
  $ano=date("Y");
  $resultado=0;
  $accionmenu = $this->uri->segment(3);
  //$fecha = explode("-",$datpaciente->fnacim_t3);
  $edad=calculoedad($datpaciente->fnacim_t3);


  //var_dump($dathistoria->estado_t4);
?>

    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend class="no-margin">
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b><br> Edad: <?=$edad?>
        </legend>
        <div class="form-group no-margin no-padding">
          <div class="col-lg-5">
            <label class="control-label">Administradora:</label><br>
            <?=$dathistoria->administradora_t3?>
          </div>
          <div class="col-lg-3">
            <label class="control-label">Servicio:</label><br>
            <?=$dathistoria->ubicacion_t4?>
          </div>
          <div class="col-lg-2">
            <label class="control-label">Fecha Consulta:</label><br>
            <?=$dathistoria->fingreso_t4?>
          </div>
          <div class="col-lg-1">
            <label class="control-label">RH:</label><br>
            <?=$datpaciente->rh_t3?>
          </div>
        </div>
        <div class="form-group no-margin no-padding">
          <?if(!empty($datconsulta->dxprincipalcod_t64)){?>
            <div class="col-lg-10">
            <label class="control-label">DX Principal:</label>
            <?=$datconsulta->dxprincipal_t64?>
          </div>
          <?}?>
        </div>
      </div>
      <div class="row paddingh">
        <?
       // debug($fconsultaurgfrom);
        switch($fconsultaurgfrom){
          case "resumingreso":
            $this->load->view('Asistencial/Historia/f_historia_resum_ingreso',"",'refresh');
            break;
            case 'evolucion_psicologica':
            ?>
              <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/psicologia/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
                $this->load->view('Asistencial/Historia/f_historia_psicologia_evol',"",'refresh');
              ?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="evolucion_psicologica" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            </form>
             <?php
            break;
            case 'salud_ocupacional':
            ?>
              <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/salud_ocupacional/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
                $this->load->view('Asistencial/Historia/f_historia_salud_ocupacional',"",'refresh');
              ?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="evolucion_psicologica" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            </form>
             <?php
            break;
          case 'remision':
          ?>
              <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/remision/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
            $this->load->view('Asistencial/Historia/f_historia_remision',"",true);
            ?>
            <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="remision" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardaras</button>
                </div>
              </div>
              <br/>
            </form>
             <?php
            break;
          case "consulta":

          case "consultaext":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
                $this->load->view('Asistencial/Historia/f_historia_consulta',"",'refresh');
              ?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="consultaext" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            </form>
            <?
            break;
          case "consultaso":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
                $this->load->view('Asistencial/Historia/f_historia_consulta_so',"",'refresh');
              ?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="consultaso" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            </form>
            <?
            break;

          case "examingreso":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
              // debug('aca');
                $this->load->view('Asistencial/Historia/f_historia_antecedentes',"",'refresh');
              ?>
              <div class="form-group">
                <div class="row text-center">
                 <button name="formularioenviado" value="examingreso" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
                </div>
              </div>
              <br/>
            </form>
            <?
            break;
          case "evoldiaria":
            $this->load->view('Asistencial/Historia/f_historia_evoldiaria_med',"",'refresh');
            break;
          case "impdx":
            ?>
            <form id="form_historia_impdx" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?$this->load->view('Asistencial/Historia/f_historia_impre_diagnostica',array("btnguardarevolmedic"=>true),'refresh');?>
              <?//$this->load->view('Asistencial/Historia/medico/f_historia_evolucion_medica',array("btnguardarevolmedic"=>true),'refresh');?>
            </form>
            <?
            break;
          case "orden":
          case "ordenesres":
            $idorden = $this->uri->segment(4,'');

            // debug($idorden);
            if(!empty($idorden)){
              $arr_historden["datorden"] = $this->Historia->orden_obtener($idorden);
// debug($arr_historden["datorden"][0]->tipo_t67);
              switch($arr_historden["datorden"][0]->tipo_t67){
                case "QUIR":
                  $arr_historden["orden"] = $this->load->view('Asistencial/Historia/f_historia_evoldiaria_rqxanest',"",true);
                  break;
                case "LABO":

                  $this->load->view('Asistencial/Historia/f_historia_procedimientos_labo',"",'refresh');
                  break;
                case "AYDX":
                  $this->load->view('Asistencial/Historia/f_historia_procedimientos_aydx',"",'refresh');
                  break;
                case "PROC":
                  $this->load->view('Asistencial/Historia/f_historia_procedimientos_proc',"",'refresh');
                  break;
                default:
                // debug('adddd');

                  $this->load->view('Asistencial/Historia/f_historia_procedimientos_otros',"",'refresh');
                  break;
              }
            }

            $this->load->view('Asistencial/Historia/f_historia_ordenes',$arr_historden,'refresh');//revisado
            break;
          case "ordenesresap":
            $idorden = $this->uri->segment(6,'');
            $this->load->view('Asistencial/Historia/f_historia_ordenesap',$arr_historden,'refresh');//revisado
            break;
          case "meds":
            $this->load->view('Asistencial/Historia/f_historia_meds',"",'refresh');//REVISADO
            break;
          case "evolucorden":
            $idproc = $this->uri->segment(6,'');
            // debug($idproc,false);
            $arr_evolucord["proc"]=$this->Historia->ordenproc_obtener($idproc);
                        // debug($arr_evolucord["proc"],false);
            $arr_evolucord["cupsprod"]=$cupsprod = $this->Cups->obtener($arr_evolucord["proc"]->codigo_t67);

            $arr_evolucord["ord"]=$this->Historia->ordenproc_obtenerhistory($idproc);
            // debug( $arr_evolucord["ord"]);
            //     var_dump($cupsprod->tiposervicio_t63);
            // exit();
            switch($cupsprod->tiposervicio_t63){
              case "ICONS":
              case "TERA":
              case "PROC":

                $this->load->view('Asistencial/Historia/f_historia_evolucordena',$arr_evolucord,'refresh');//REVISADA
                break;
              default:
                $this->load->view('Asistencial/Historia/f_historia_evolucordenb',$arr_evolucord,'refresh');//revisada
                break;
            }
            break;
          case "suminis":
            $this->load->view('Asistencial/Historia/f_historia_sumins',"",'refresh');
            break;
          case "notaclarat":
            ?>
            <form id="form_historia_cierre" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
            <?
            $this->load->view('Asistencial/Historia/f_historia_notaclarat',"",'refresh');
            ?>
            </form>
            <?
            break;
          case "cierre":
            ?>
            <form id="form_historia_cierre" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
            <?
            $this->load->view('Asistencial/Historia/f_historia_cierre',"",'refresh');
            ?>
            </form>
            <?
            break;
          case "imprimir":
            $this->load->view('Asistencial/Historia/f_historia_imprimir',"",'refresh');
            break;
        }

        ?>
      </div> 
</div
