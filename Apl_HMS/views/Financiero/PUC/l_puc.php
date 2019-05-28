<?
  $arr_conf_flist=array(
    "flist_rutabuscar"=>site_url('/financiero/puc/buscar'),
    "flist_rutaregistrar"=>site_url('/financiero/puc/registrar/nuevo'),
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
        Cuenta
      </th>
      <th >
        Nombre de la cuenta
      </th>
      <th >
        Nivel
      </th>
      <th >
        Clase de cuenta
      </th>
      <th >
        Cuenta padre
      </th>
      <th >
        Activo Fijo
      </th>
      <th >
        Requiere Tercero
      </th>
      <th >
        Saldo Actual
      </th>
      <th >
        Cuenta Espejo (NIIF)
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($pucs)){
    foreach($pucs as $reg_puc){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$reg_puc->id_puc_t4,
        'fmodeliminar_titulo'=>'Eliminando Cuenta',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar la cuenta <b>'.$reg_puc->cod_t4.'</b>',
        'fmodeliminar_ruta'=>site_url('/financiero/puc/eliminar/'.$reg_puc->id_puc_t4)
      );
      ?>
        <tr>
          <td nowrap>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/puc/registrar/'.$reg_puc->id_puc_t4)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$reg_puc->cod_t4?>
          </td>
          <td>
            <?=$reg_puc->desc_t4?>
          </td>
          <td>
            <?=$reg_puc->nivel_t4?>
          </td>
          <td>
            <?=$reg_puc->clasecta_t4?>
          </td>
          <td>
            <?=$reg_puc->ctamayor_t4?>
          </td>
          <td>
            <?=$reg_puc->activof_t4?>
          </td>
          <td>
            <?=$reg_puc->tercero_t4?>
          </td>
          <td>
            <?=$reg_puc->saldo_t4?>
          </td>
          <td>
            <?=$reg_puc->ctaniif_t4?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>