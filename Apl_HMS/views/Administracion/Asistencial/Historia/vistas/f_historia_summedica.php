<div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Orden No.</th>
            <th>Fecha</th>
            <th>Frec<br>Horas</th>
            <th>Dosis</th>
            <th>Cant</th>
            <th># Aplic</th>
            <th>Sig Aplic</th>
            <th>Ult Aplic</th>
            <th>Aplic Pend</th>
            <th>Vía</th>
            <th>Observación</th>
            <?if($summeds){?><th></th><?}?>
          </tr>
        </thead>
        <tbody class="listado">
        <?
        if(!empty($datconsulta->datordenes["MED"])){
          foreach($datconsulta->datordenes["MED"] as $orden=>$arr_orden){
            foreach($arr_orden as $reg){
            
            ?>
              <tr>
                <td width="5%">
                  <?=$reg->orden_t67?>
                </td>
                <td width="10%" nowrap>
                  <?=$this->Modulo->formatofecha($reg->fmod_t67)?>
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
                <td width="5%">
                  <?=$reg->aplicnum_t67?>
                </td>
                <td width="5%" nowrap>
                  <?=$this->Modulo->formatofechahora($reg->aplicsig_t67)?>
                </td>
                <td width="5%" nowrap>
                  <?=$this->Modulo->formatofechahora($reg->aplicult_t67)?>
                </td>
                <td width="5%">
                  <?=$reg->aplicpend_t67?>
                </td>
                <td width="10%">
                  <?=$reg->via_t67?>
                </td>
                <td width="15%">
                  <?=$reg->observacion_t67?>
                </td>
                <?if($summeds){?>
                  <td width="5%">
                    <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>">Aplicar</a>
                    <br/>
                    <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4."/".$reg->orden_t67)?>">Devolución</a>
                  </td>
                <?}?>
                
              </tr>
              <tr>
                <td colspan="100%" style="text-align:right">
                  <b><?=$reg->descripcion_t67?></b>
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