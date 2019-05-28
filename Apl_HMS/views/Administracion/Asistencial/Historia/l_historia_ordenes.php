<div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Orden No.</th>
            <th>Fecha</th>
            <th>Medicamento / Procedimiento</th>
            <th>Frecuencia</th>
            <th>Dosis</th>
            <th>Cant</th>
            <th>Vía</th>
            <th>Observación</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="listado">
        <?
        if(!empty($datconsulta->datordenes)){
          foreach($datconsulta->datordenes as $reg){
            ?>
              <tr>
                <td width="5%">
                  <?=$reg->orden_t67?>
                </td>
                <td width="5%">
                  <?=$reg->fmod_t67?>
                </td>
                <td width="40%">
                  <?=$reg->descripcion_t67?>
                </td>
                <td width="5%">
                  <?=$reg->frecuencia_t67?>
                </td>
                <td width="5%">
                  <?=$reg->dosis_t67?>
                </td>
                <td width="5%">
                  <?=$reg->cantidad_t67?>
                </td>
                <td width="10%">
                  <?=$reg->via_t67?>
                </td>
                <td width="20%">
                  <?=$reg->observacion_t67?>
                </td>
                <td width="20%">
                  <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4)?>"><i class="fa fa-print"></i></a>
                </td>
              </tr>
            <?
          }
        }
        ?>
        </tbody>
      </table>
    </div>