<?
  $arrconfflist = array(
    "flist_rutabuscar"=>site_url('/financiero/impuestos/buscar'),
    "flist_rutaregistrar"=>site_url('/financiero/impuestos/registrar'),
    "flist_idformbuscar"=>"formbuscar",
    "flist_buscado"=>$buscado,
    "flist_mensaje"=>$mensaje);
?>  
<?=$this->load->view('Genericas/f_listado',$arrconfflist,true);?>
<div class="col-lg-12 table-responsive">
  <table class="table tablaresalt" style="margin:0;padding: 0;">
    <thead>
      <tr>
        <th></th>
        <th>
          Id
        </th>
        <th >
          Código
        </th>
        <th >
          Descripción
        </th>   
        <th >
          Tipo
        </th>
        <th >
          Documento
        </th>
        <th >
          Base
        </th>
        <th >
          Cuenta
        </th>
        <th>
          Estado
        </th>
      </tr>
  </thead>
  <tbody class="listado">
     <?
    if(!empty($datos)){
      foreach($datos as $reg){
        ?>
          <tr>
            <td nowrap>
               <a class="btn bg-navy btn-sm" href="<?=site_url('/financiero/impuestos/registrar/'.$reg->idparam_imptos_t400)?>" data-toggle="tooltip" data-placement="bottom" title="Modificar">
                  <span class="glyphicon glyphicon-edit"></span>
               </a>    
            </td>
            <td>
              <?=$reg->idparam_imptos_t400?>
            </td>
            <td>
               <?=$reg->codigo_t400?>
            </td>
            <td>
              <?=$reg->descripcion_t400?>
            </td>  
            <td>
               <?=$reg->tipoimp_t400?>
            </td>
            <td>
               <?=$reg->tipodoc_t400?>
            </td>
            <td>
               <?=$reg->base_t400?>
            </td>
            <td>
               <?=$reg->cta_t400?>
            </td>
            <td>
               <?=$reg->estado_t400?>
            </td>
          </tr>
        <?
      }
    }
    ?>  
  </table>
</div>