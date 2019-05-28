<div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Orden No.</th>
            <th>Fecha</th>
            <th>Suministro </th>
            <th>Cantidad</th>
            <th>Duracion</th>
            <th>Descrip</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="listado">
        <?
          //var_dump($datconsulta->datordenes);
        if(!empty($datconsulta->datordenes["SUM"])){
          foreach($datconsulta->datordenes["SUM"] as $orden=>$arr_orden){
            foreach($arr_orden as $reg){
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
                  <td width="5%">
                    <?=$reg->sum_tiempo_t67?>
                  </td>    
                  <td width="40%">
                    <?=$reg->sum_descr_t67?>
                  </td>      
                  <td width="5%">
                    <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>"><i class="fa fa-print"></i></a>
                  </td>
                </tr>
              <?
            }
          }
        }
        ?>
        </tbody>
      </table>
    </div>