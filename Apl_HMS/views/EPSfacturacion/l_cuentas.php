  <form action="<?=site_url('/epsfact/cuentas/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
   </form>

<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
         Fecha
      </th>
      <th >
         Lote
      </th>
      <th >
         Radicado
      </th>
      <th >
         Tercero
      </th>
      <th >
        Paciente
      </th>
      <th >
        V Rad
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datctas)){
    foreach($datctas as $reg){
      //var_dump($reg);
      ?>
        <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/epsfact/digitacion/factura/'.$reg->radicado_t96)?>" data-toggle="tooltip" data-placement="bottom" title="Digitar">
              <span class="fa fa-cog"></span>D
            </a>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/epsfact/auditoria/factura/'.$reg->radicado_t96)?>" data-toggle="tooltip" data-placement="bottom" title="Auditar">
              <span class="fa fa-cog"></span>A
            </a>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('/epsfact/conciliacion/factura/'.$reg->radicado_t96)?>" data-toggle="tooltip" data-placement="bottom" title="Conciliar">
              <span class="fa fa-cog"></span>C
            </a>
          </td>
          <td>
             <?=$reg->fradic_t96?>
          </td>
          <td>
             <?=$reg->lote_t96?>
          </td>
          <td>
             <?=$reg->radicado_t96?>
          </td>
          <td>
             <?=$reg->tercid_t96?> <?=$reg->tercdesc_t96?>
          </td>
          <td>
             <?=$reg->pacid_t96?> <?=$reg->pacnom_t96?>
          </td>
          <td>
             <?=$reg->valor_t96?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>