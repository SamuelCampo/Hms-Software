<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Anular Factura N. <span id="idfact"></span></h4>
      </div>
      <div class="modal-body">
          <label for="#">Motivo por Anulaci&oacute;n</label>
          <textarea class="form-control" name="motivo" id="motivo" cols="30" rows="10"></textarea>
          <input type="hidden" id="cnfac" value="">
          <button class="btn <?= $this->Planthtml->estilo->colorprinc ?>" id="enviar_anulacion">Anular</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <form action="<?=site_url('/facturacion/facturas/buscar')?>" class="col-lg-11 form-inine" method="post" >
    <div class="form-group col-lg-3 no-margin no-padding">
      <div class="form-group col-lg-6 no-margin no-padding">
        <div class="input-group no-margin no-padding">
          <input name="fdesde" type="text" class="form-control form_date" id="fdesde" placeholder="Desde" value="<?=$buscadobj->fdesde?>" >
        </div>
      </div>
      <div class="form-group col-lg-6 no-margin no-padding">
        <div class="input-group no-margin no-padding">
          <input name="fhasta" type="text" class="form-control form_date" id="fhasta" placeholder="Hasta" value="<?=$buscadobj->fdesde?>" >
        </div>
      </div>
    </div>
      <div class="form-group col-lg-1 no-margin no-padding">
        <select name="estado" class="form-control" id="estado">
          <option value="" disabled selected>Estado...</option>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_estados,"estado","estado",$estado))?>
        </select>
      </div>
      <div class="form-group col-lg-1 no-margin no-padding">
        <input type="Search" placeholder="Fact..." class="form-control" value="" name="factura" id="factura" />
      </div>
      <div class="form-group col-lg-3 no-margin no-padding">
        <input type="Search" placeholder="Entidad..." class="form-control" value="" name="tercdesc" id="tercdesc" />
        <input type="hidden" id="tercid" name="tercid" value="" />
      </div>
      <div class="form-group col-lg-3 no-margin no-padding">
        <input type="Search" placeholder="Paciente..." class="form-control" value="" name="paciente" id="paciente" />
        <input type="hidden" id="idpaciente" name="idpaciente" value="" />
      </div>
      <div class="input-group col-lg-1">
        <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
          <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('facturacion/factura_nueva/registrar')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
          <span class="glyphicon glyphicon-file"></span>
        </a>
        </div>
        
      </div>
   </form>

<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-12" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th></th>
      <th >
        Identificacion
      </th>
      <th >
        Historia
      </th>
      <th >
        Serie
      </th>
      <th >
        Factura
      </th>
      <th >
        Nombre
      </th>
      <th >
        Servicio
      </th>
      <th >
        Estado
      </th>
      <th >
        Ingreso
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datpaciente)){
    foreach($datpaciente as $reg){
      ?>
        <tr>
          <td>
            <a class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm" href="<?=site_url('facturacion/factura/registrar/'.$reg->idps_historia_t4."/".$reg->factnum_t96."/".$reg->idserie_t96)?>" data-toggle="tooltip" data-placement="bottom" title="Gestionar">
              <span class="fa fa-cog"></span>
            </a>
            <?php if (!empty($reg->descripcion_t97)): ?>
              <button class="btn <?=$this->Planthtml->estilo->colorprinc?> btn-sm anular_fac" type="button" class="btn btn-primary btn-lg" data-toggle="modal" id="<?= $reg->factnum_t96 ?>" data-target="#myModal"title="Anular Factura">
              <span class="fa fa-stop"></span>
            </button>
            <?php endif ?>
          </td>
          <td>
             <?=$reg->identificacion_t3?>
          </td>
          <td>
            <?=$reg->idps_historia_t4?>
          </td>
          <td>
            <?=$reg->descripcion_t97?>
          </td>
          <td>
            <?if($datfac->validado_t96=='SI'){?>
              <a href="<?=site_url('facturacion/facturas/ver/'.$reg->factnum_t96.'/'.$reg->historia_t96)?>"><?=$reg->factnum_t96?></a>
            <?}else{?>
              <?=$reg->factnum_t96?>
            <?}?>
          </td>
          <td>
            <?=ucwords(strtolower($reg->nomcomp_t3))?>
          </td>
          <td>
            <?=$reg->ubicacion_t4?>
          </td>
          <td>
            <?php if (!empty($reg->factnum_t96)): ?>
              <?=$reg->estado_t96?>
              <?php else: ?>
               <?=$reg->estado_t4?> 
            <?php endif ?>
          </td>
          <td>
            <?=$reg->fingreso_t4?>
          </td>
        </tr>
      <?
    }
  }
  ?>
</table>