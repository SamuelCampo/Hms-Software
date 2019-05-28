<?
  $arr_conf_flist=array(
    "flist_rutabuscar"=>site_url('/financiero/compras/buscar'),
    "flist_rutaregistrar"=>site_url('/financiero/compras/registrar/nuevo'),
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
        Fecha
      </th>
      <th >
        No
      </th>
      <th >
        Proveedor
      </th>
      <th >
        Valor
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($regsast)){
    foreach($regsast as $reg_doc){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$reg_doc->id_ascontenc_t402,
        'fmodeliminar_titulo'=>'Eliminando Documento',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar el documento <b>'.$reg_doc->docnum_t402.'</b>',
        'fmodeliminar_ruta'=>site_url('/financiero/compras/eliminar/'.$reg_doc->id_ascontenc_t402)
      );
      ?>
        <tr>
          <td nowrap>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/compras/registrar/'.$reg_doc->id_ascontenc_t402)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$reg_doc->fcont_t402?>
          </td>
          <td>
            <?=$reg_doc->docnum_t402?>
          </td>
          <td>
            <?=$reg_doc->tercerdesc_t402?>
          </td>
          <td>
            <?=$reg_doc->vtotal_t402?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>