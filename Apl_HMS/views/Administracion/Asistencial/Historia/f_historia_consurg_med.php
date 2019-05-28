<?
  //var_dump($this->Modulo->usr->roles[$dathistoria->ubicacion_t4]);
  //var_dump($dathistoria);
  //exit;
  //var_dump($this->Modulo->verifacceso("EVMEDDI"));exit;
  $accionmenu = $this->uri->segment(3);
  $fecha = explode("-",$datpaciente->fnacim_t3);
  if($fecha[0]*1>0){
    $edad = "Edad ".(date("Y")-$fecha[0])." años";
  }else{
    $edad='';
  }

  //var_dump($dathistoria->estado_t4);
?>

    <?
      if(!empty($mensaje)){
        echo '<div class="row no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
      }
    ?>
  <div class="row contenedorsobreadonopd">
      <div class="row panel-heading">
        <legend>
           &nbsp;&nbsp;&nbsp;Ingreso: <?=$dathistoria->idps_historia_t4?> Historia Clinica: <b><?=$dathistoria->identificacion_t3?></b> Nombre: <b><?=$dathistoria->nomcomp_t3?></b> <?=$edad?>
        </legend>
        <div class="form-group">
          <div class="col-lg-2">
            <label class="control-label">Administradora:</label><br>
            <?=$dathistoria->administradora_t3?>
          </div>
          <div class="col-lg-2">
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
        <div class="form-group">
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
        //var_dump($fconsultaurgfrom);
        //exit;
        $fconsultaurgfrom = $this->uri->segment(5);
          switch($fconsultaurgfrom){
          case "notaclarat":
            //$idorden = $this->uri->segment(6,'');
            $this->load->view('Asistencial/Historia/f_historia_contnotacl',$arr_historden,'refresh');
            break;
          case "remision":
            //$idorden = $this->uri->segment(6,'');
            $this->load->view('Asistencial/Historia/f_historia_contremis',$arr_historden,'refresh');
            break;
          case "resumingreso":
            $this->load->view('Asistencial/Historia/f_historia_resum_ingreso',"",'refresh');
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
          case "examingreso":
            ?>
            <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?
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
                    case 'evolucion_psicologica':
            ?>
              <form id="form_historia_exam_fisico" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
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
          case "evoltrp":
            $this->load->view('Asistencial/Historia/f_historia_evolucion_trp',"",'refresh');
            break;
          case "evolenfer":
            $this->load->view('Asistencial/Historia/f_historia_evolucion_enf',"",'refresh');
            break;
          case "evolmedica":
            $this->load->view('Asistencial/Historia/f_historia_evolucion_medica',"",'refresh');
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
            $idorden = $this->uri->segment(6,'');
            if(!empty($idorden)){
              $arr_historden["datorden"] = $this->Historia->orden_obtener($idorden);
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
                  $this->load->view('Asistencial/Historia/f_historia_procedimientos_otros',"",'refresh');
                  break;
              }
            }
            $this->load->view('Asistencial/Historia/f_historia_ordenes',$arr_historden,'refresh');
            break;
          case "ordenesresap":
            $idorden = $this->uri->segment(6,'');
            $this->load->view('Asistencial/Historia/f_historia_ordenesap',$arr_historden,'refresh');
            break;
          case "meds":
            $this->load->view('Asistencial/Historia/f_historia_meds',"",'refresh');
            break;
          case "evolucorden":
            $idproc = $this->uri->segment(6,'');
            $arr_evolucord["proc"]=$this->Historia->ordenproc_obtener($idproc);
            $arr_evolucord["ord"]=$this->Historia->orden_obtener($arr_evolucord["proc"]->orden_t67);
            //var_dump($arr_evolucord["ord"]);
            //exit;
            $cupsprod = $this->Cups->obtener($arr_evolucord["proc"]->codigo_t67);
            switch($cupsprod->tiposervicio_t63){
              case "ICONS":
              case "TERA":
              case "PROC":
                $this->load->view('Asistencial/Historia/f_historia_evolucordena',$arr_evolucord,'refresh');
                break;
              default:
                $this->load->view('Asistencial/Historia/f_historia_evolucordenb',$arr_evolucord,'refresh');
                break;
            }
            break;
          case "suminis":
            $this->load->view('Asistencial/Historia/f_historia_sumins',"",'refresh');
            break;
          case "cierre":
            ?>
            <form id="form_historia_cierre" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
            <?=$this->load->view('Asistencial/Historia/f_historia_cierre',"",true);?>
            </form>
            <?
            break;
          case "imprimir":
            $this->load->view('Asistencial/Historia/f_historia_imprimir',"",'refresh');
            break;
        }
        ?>
      </div>
</div>