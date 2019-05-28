<?
  $arr_conf_flist=array(
    "flist_rutabuscar"=>site_url('/financiero/asientos/buscar'),
    "flist_rutaregistrar"=>site_url('/financiero/asientos/registrar/nuevo'),
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
        Tipo
      </th>
      <th >
        Tercero
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($regsast)){
    foreach($regsast as $reg_doc){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$reg_doc->docnum_t401,
        'fmodeliminar_titulo'=>'Eliminando Asiento',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar el asiento <b>'.$reg_doc->docnum_t401.'</b>',
        'fmodeliminar_ruta'=>site_url('/financiero/asientos/eliminar/'.$reg_doc->docnum_t401."/".$reg_doc->doctip_t401)
      );
      ?>
        <tr>
          <td nowrap>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/asientos/registrar/'.$reg_doc->docnum_t401."/".$reg_doc->doctip_t401)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$reg_doc->fcont_t401?>
          </td>
          <td>
            <?=$reg_doc->docnum_t401?>
          </td>
          <td>
            <?=$reg_doc->doctip_t401?>
          </td>
          <td>
            <?=$reg_doc->tercerdesc_t401?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>