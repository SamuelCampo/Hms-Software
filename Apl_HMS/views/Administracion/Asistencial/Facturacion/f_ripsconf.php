<?
?>
<form class="form-horizontal" role="form" action="<?=site_url("facturacion/rips/nuevo/generar")?>" method="post">
  <div class="alert alert-warning">
    Confirme la cuentas que serán generadas.
  </div>
  
  <table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
        No. Ingreso
      </th>
      <th >
        Paciente
      </th>
      <th >
        Serie
      </th>
      <th >
        Factura
      </th>
      <th >
        Entidad
      </th>
      <th >
        Convenio
      </th>
      <th >
        Valor
      </th>
      
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datconf)){
    foreach($datconf as $reg){
      //var_dump($reg->radicado_t96);
      if(empty($reg->radicado_t96)){
        
      ?>
        <tr>
          <td>
            <input type="checkbox" name="rpsconf[<?=$reg->idcm_cuentas_t96?>]" value="S" checked >
          </td>
          <td>
            <?=$reg->historia_t96?>
          </td>
          <td>
             <?=$reg->pacnom_t96?>
          </td>
          <td>
            <?=$reg->descripcion_t97?>
          </td>
          <td>
            <?=$reg->factnum_t96?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->tercdesc_t96))?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->conveniodesc_t96))?>
          </td>
          <td>
            <?=number_format($reg->valor_t96)?>
          </td>
        </tr>
      <?
      }
    }
  }
  ?>
</table>
  
  <div class="form-group">
    <div class="row text-center">
     <br/>
     <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Generar</button>
    </div>
  </div>
</form>