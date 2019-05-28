<section>
  <fieldset>
    <div class="panel panel-default col-lg-12">
      <div class="panel-body">
        <div class="row no-padding no-marging">
          <div class="col-lg-5 text-center"><b>Procedimiento</b></div>
          <div class="col-lg-3 text-center"><b>Cantidad</b></div>
          <div class="col-lg-3 text-center"><b>Observación</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding" id="plantordprocs">
          <div class="col-lg-5">
            <input name="orden[procs][procedimmiento]" type="text" class="form-control" id="cump_desc" placeholder="Procedimiento" required>
            <input name="orden[procs][procedimmientocod]" type="hidden" id="cupcodigo" value="">
          </div>
          <div class="col-lg-3">
            <input name="orden[procs][cantidad]" type="text" class="form-control" id="proc_cantidad" placeholder="Cantidad" value="" required>
          </div>
          <div class="col-lg-3">
            <input name="orden[procs][observacion]" type="text" class="form-control" id="proc_observ" placeholder="Observación" >
          </div>
          <div class="col-lg-1" onclick="$(this).parent().remove();">
            <eliminar class="btn bg-navy btn-xs">
              <span class="glyphicon glyphicon-trash btneliminar"></span>
            </eliminar>
          </div>
        </div>
      </div>
  </div>
  <div class="table-responsive col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Resultado</th>
            <th>Adjunto</th>
          </tr>
        </thead>
        <tbody class="listado">
        <?
        if(!empty($datos)){
          foreach($datos as $reg){
            ?>
              <tr>
                <td width="20%">
                  <?=$reg->tipo_t67?>
                </td>
                <td width="15%">
                  <?=$reg->codigo_t67?>
                </td>
                <td width="25%">
                  <?=$reg->descripcion_t67?>
                </td>
                <td width="25%">
                  <?=$reg->resultado_t67?>
                </td>
                <td width="15%">
                  <?=$reg->adj_t67?>
                </td>
              </tr>
            <?
          }
        }
        ?>
        </tbody>
      </table>
    </div>
 </fieldset>
</section>