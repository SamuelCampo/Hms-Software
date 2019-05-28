    <div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Orden No.</th>
            <th>Fecha</th>
            <th>Medicamento </th>
            <th>Cantidad</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="listado">
        <?
        //VAR_DUMP($datconsulta->datordenes["MED"]); EXIT;
         
        if(!empty($datconsulta->datordenes["MED"])){

          foreach($datconsulta->datordenes["MED"] as $orden=>$arr_orden){
            foreach($arr_orden as $reg){
              if($reg->pos_t67!='HPNP'){
              ?>
                <tr>
                  <td width="5%">
                    <?=$reg->orden_t67?>
                  </td>
                  <td width="10%">
                    <?=$reg->fmod_t67?>
                  </td>
                  <td width="40%">
                    <?=$reg->descripcion_t67?>
                  </td>                  
                  <td width="5%">
                    <?=$reg->cantidad_t67?>
                  </td>
                  <?if($reg->pos_t67=='NO POS'){?>
                  <td width="5%">
                    <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>"><i class="fa fa-print"></i></a> 
                    <a href="<?=site_url("pacientes/historia/imprimir/formulamnp/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>"><i class="fa fa-print"></i> FNP</a>
                  </td>
                  <?}else{?>
                  <td width="5%">
                    <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>"><i class="fa fa-print"></i></a>
                    <a href="<?=site_url("pacientes/historia/eliminar/formula/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                  <?}?>
                </tr>
              <?
              }
            }
          }
        }
        ?>
        </tbody>
      </table>
    </div>