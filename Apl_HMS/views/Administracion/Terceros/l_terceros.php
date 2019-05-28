  <form action="<?=site_url('/administracion/terceros/buscar')?>" class="col-lg-6 form-inine" method="post" >
      <div class="input-group">
        <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn bg-navy">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn bg-navy" href="<?=site_url('/administracion/terceros/registrar')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
            <span class="glyphicon glyphicon-file"></span>
          </a>
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
        Tipo
      </th>
      <th >
        Código
      </th>
      <th >
        Tercero
      </th>
      <th >
        TipoId
      </th>
      <th >
        Identificación
      </th>
      <th >
        Ciudad
      </th>
      <th >
        Dirección
      </th>
      <th >
        Teléfono
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($v_l_terceros_res)){
    foreach($v_l_terceros_res as $regterc){
      $arr_modelim=array(
        'fmodeliminar_id'=>'modelim_'.$regterc->idparam_terceros_t16,
        'fmodeliminar_titulo'=>'Eliminando Tercero',
        'fmodeliminar_contenido'=>'Esta seguro de eliminar el tercero <b>'.$regterc->cod_t16.' '.$regterc->desc_t16.'</b>',
        'fmodeliminar_ruta'=>site_url('/administracion/terceros/eliminar/'.$regterc->idparam_terceros_t16)
      );
      ?>
        <tr>
          <td>
            <a class="btn bg-navy btn-sm" href="<?=site_url('/administracion/terceros/registrar/'.$regterc->idparam_terceros_t16)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn bg-navy btn-sm" data-toggle="modal" data-target="#<?=$arr_modelim['fmodeliminar_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
            <?=$this->load->view('Genericas/f_modal_eliminar',$arr_modelim,true)?>
          </td>
          <td>
            <?=$regterc->tipoter_t16?>
          </td>
          <td>
            <?=$regterc->cod_t16?>
          </td>
          <td>
            <?=$regterc->desc_t16?>
          </td>
          <td>
            <?=$regterc->tipoident_t16?>
          </td>
          <td>
            <?=$regterc->ident_t16?>
          </td>
          <td>
            <?=$regterc->cuidad_t16?>
          </td>
          <td>
            <?=$regterc->direccion_t16?>
          </td>
          <td>
            <?=$regterc->telefono1_t16?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>