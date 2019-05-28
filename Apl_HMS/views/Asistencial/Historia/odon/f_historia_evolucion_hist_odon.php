<? foreach($arr_evol as $regev){ 
      if(!empty($regev)){
  ?>
  
    <div style="border-bottom: 1px dotted #000; text-align: left">
      <div style="padding: 0 0 0 1em;margin:0;"><?=$regev["fmod_t68"]?> Hecho Por: <?= $regev["mednomcomp_t68"] ?><h5>Plan de Manejo: </h5></div>
      <div style="padding: 0 0 0 2em;margin:0;">
    <?
    if(!empty($regev["objetivos_t68"])){
      echo '<h5>Objetivos :</h5> '.$regev["objetivos_t68"].'&nbsp;';
    }
    if(!empty($regev["laboratorios_t68"])){
      echo '<h5>Laboratorios :</h5> '.$regev["laboratorios_t68"].'&nbsp;';
    }
    echo '<h5>Conducta :</h5> '.$regev["conducta_t68"].'&nbsp;';
    echo '<h5>Plan de Manejo: </h5> '.$regev["planmanejo_t68"].'&nbsp; <br>';?>
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
      
  
  }
    }?>