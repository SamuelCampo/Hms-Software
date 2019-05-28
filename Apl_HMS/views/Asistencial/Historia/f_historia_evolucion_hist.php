<?foreach($arr_evol as $regev){?>
  <?php     $query = $this->db->where('numero_identificacion_t10', $regev->medidentif_t68)->get('ps_personal_t10', 1)->result(); ?>
    <div style="border-bottom: 1px dotted #000; text-align: left">
      <div style="padding: 0 0 0 1em;margin:0;"><a href="<?= site_url('pacientes/evol_delete/'.$regev->idhist_evolucion_t68.'/'.$this->uri->segment(4)); ?>">X</a> <?=$regev->fmod_t68?> <?=$regev->mednomcomp_t68?> RM: <?= $query[0]->registromedico_t10 ?><img src="<?=FCPATH."/img/frm/".md5($regev->medidentif_t68).".png"?>" alt="<?=$entidad->nombre_t75?>" style="width: 70px; height: 40px;margin-top: 30px;margin-left: 10px;"></div>
      <div style="padding: 0 0 0 2em;margin:0;">
    <?
    if(!empty($regev->objetivos_t68)){
      echo '<h5>Objetivos :</h5> '.$regev->objetivos_t68.'&nbsp;';
    }
    if(!empty($regev->laboratorios_t68)){
      echo '<h5>Laboratorios :</h5> '.$regev->laboratorios_t68.'&nbsp;';
    }
    echo '<h5>Conducta :</h5> '.$regev->conducta_t68.'&nbsp;';
    echo '<h5>Plan de Manejo: </h5> '.$regev->planmanejo_t68.'&nbsp; <br>';?>
      </div>
      <?
        if(is_array($regev->detalle)){
          echo '<hr>';
          foreach($regev->detalle as $tipo=>$arr_tipo){
            echo '<h5>'.$arr_tipo["desc"].' :</h5> ';
            if(is_array($arr_tipo["det"])){
              foreach ($arr_tipo["det"] as $categ=>$arr_categ){
                echo '<b>'.$arr_categ["desc"].' :</b> ';
                if(is_array($arr_categ["det"])){
                  foreach($arr_categ["det"] as $valor){
                    echo " $valor ";
                  }
                }
              }
            }
          }
        }
      ?>
      
  </div>
  <?
      
  
  
    }?>