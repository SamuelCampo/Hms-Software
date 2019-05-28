<?
//var_dump($datconsulta->datordenessum)
?>
  <div class="col-lg-12 no-padding no-margin table-responsive">
  <table class="table condensed no-padding no-margin">
  <thead>
    <tr>
      <th >
        Medicamento
      </th>
      <th >
        Dosis 
      </th>
      <th >
        Observación
      </th>
      <th >
        Fecha / Hora Aplicación
      </th>
      <th >
        Aplicada
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datconsulta->datordenessum)){
    foreach($datconsulta->datordenessum as $med){
      ?>
        <tr>
          <td>
            <?=$med->descripcion_t80?>
          </td>
          <td>
            <?=$med->dosis_t80?>
          </td>
          <td>
            <?=$med->observacion_t80?>
          </td>
          <td>
            <?=$med->aplicar_t80?>
          </td>
          <td>
            <a href="<?=site_url()."/pacientes/historia/gestionar/$med->idhistoria_t80/summedica"?>"><?=$reg->empresa_t10?>Aplicar</a>
          </td>
        </tr>
        
      <?
      }
    }
  
  ?> 
</table>
  
</div>

