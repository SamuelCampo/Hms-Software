<?
  $arr_conf_flist=array(
    "flist_rutabuscar"=>site_url('financiero/gruposarticulos/buscar'),
    "flist_rutaregistrar"=>site_url('financiero/gruposarticulos/registrar'),
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
        Cuenta de Gastos
      </th>
      <th >
        Cuenta de Ingresos
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($v_l_gruposarticulos_res)){
    foreach($v_l_gruposarticulos_res as $reggrupart){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$reggrupart->id_garticulos_t8,
        'fmodeliminar_titulo'=>'Eliminando Grupo de Artículos',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar grupo <b>'.$reggrupart->cod_t8.' '.$reggrupart->desc_t8.'</b>',
        'fmodeliminar_ruta'=>site_url('/financiero/gruposarticulos/eliminar/'.$reggrupart->id_garticulos_t8)
      );
      ?>
        <tr>
          <td nowrap>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/gruposarticulos/registrar/'.$reggrupart->id_garticulos_t8)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$reggrupart->cod_t8?>
          </td>
          <td>
            <?=$reggrupart->desc_t8?>
          </td>
          <td>
            <?=$reggrupart->grupo_t8?>
          </td>
          <td>
            <?=$reggrupart->ctagasto_t8?>
          </td>
          <td>
            <?=$reggrupart->ctaingreso_t8?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>