<?
  $arr_conf_flist=array(
    "flist_rutabuscar"=>site_url('financiero/ccosto/buscar'),
    "flist_rutaregistrar"=>site_url('financiero/ccosto/registrar'),
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
        Codigo
      </th>
      <th >
        Centro de Costo
      </th>
      <th >
        Tipo
      </th>
      <th >
        CC Mayor
      </th>
      <th >
        Activo
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($arr_ccosto)){
    foreach($arr_ccosto as $reg_cc){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$reg_cc->id_ccosto_t11,
        'fmodeliminar_titulo'=>'Eliminando Centro de Costo',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar el centro de costo <b>'.$reg_cc->cod_t11.'</b>',
        'fmodeliminar_ruta'=>site_url('/financiero/ccosto/eliminar/'.$reg_cc->id_ccosto_t11)
      );
      ?>
        <tr>
          <td nowrap>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/ccosto/registrar/'.$reg_cc->id_ccosto_t11)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$reg_cc->cod_t11?>
          </td>
          <td>
            <?=$reg_cc->desc_t11?>
          </td>
          <td>
            <?=$reg_cc->tipo_t11?>
          </td>
          <td>
            <?=$reg_cc->ccmayor_t11?>
          </td>
          <td>
            <?=$reg_cc->activo_t11?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>