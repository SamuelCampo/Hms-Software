<?
  $arr_conf_flist=array(
    "flist_rutabuscar"=>site_url('/financiero/articulos/buscar'),
    "flist_rutaregistrar"=>site_url('/financiero/articulos/registrar'),
    "flist_idformbuscar"=>"formbuscar",
    "flist_buscado"=>$buscado,
    "flist_mensaje"=>$mensaje)
?>
<?=$this->load->view('Genericas/f_listado',$arr_conf_flist,true);?>
<table class="table tablaresalt" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
        Código
      </th>
      <th >
        Descripción 
      </th>
      <th >
        Grupo
      </th>
      <th >
        IVA
      </th>
      <th >
        Tipo
      </th>
      <th >
        Compra
      </th>
      <th >
        Venta
      </th>
      <th >
        Cantidad
      </th>
      <th >
        Valor1
      </th>
      <th >
        Valor2
      </th>
      <th >
        Activo Fijo
      </th>
      <th >
        Bodega Def
      </th>
      <th >
        Bodegas Perm
      </th>
      <th >
        Cuenta de Gastos
      </th>
      <th >
        Cuenta de Ingresos
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($v_l_articulos_res)){
    foreach($v_l_articulos_res as $regart){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$regart->id_articulos_t9,
        'fmodeliminar_titulo'=>'Eliminando Artículo',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar el artículo <b>'.$regart->cod_t9.' '.$regart->desc_t9.'</b>',
        'fmodeliminar_ruta'=>site_url('/financiero/articulos/eliminar/'.$regart->id_articulos_t9)
      );
      ?>
        <tr>
          <td nowrap>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/articulos/registrar/'.$regart->id_articulos_t9)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$regart->cod_t9?>
          </td>
          <td>
            <?=$regart->desc_t9?>
          </td>
          <td>
            <?=$regart->grupo_t9?>
          </td>
          <td>
            <?=$regart->iva_t9?>
          </td>
          <td>
            <?=$regart->tipo_t9?>
          </td>
          <td>
            <?=$regart->compra_t9?>
          </td>
          <td>
            <?=$regart->venta_t9?>
          </td>
          <td style="text-align: right;">
            <?=$regart->cantidad_t9?>
          </td>
          <td style="text-align: right;">
            <?=number_format($regart->valor1_t9)?>
          </td>
          <td style="text-align: right;">
            <?=number_format($regart->valor2_t9)?>
          </td>
          <td>
            <?=$regart->actfijo_t9?>
          </td>
          <td>
            <?=$regart->boddef_t9?>
          </td>
          <td>
            <?=$regart->bodperm_t9?>
          </td>
          <td>
            <?=$regart->ctagasto_t9?>
          </td>
          <td>
            <?=$regart->ctaingreso_t9?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>