<section>
  <fieldset>
    <div class="panel panel-default col-lg-12">
      <div class="panel-body">
        <div class="row">
          <label for="" class="col-lg-1 control-label">Tipo</label>
          <label for="" class="col-lg-3 control-label">Código y Descripción</label>
          <label for="" class="col-lg-3 control-label">Resultado</label>
          <label for="" class="col-lg-3 control-label">Adjunto</label>
          <label for="" class="col-lg-2 control-label">
            <a id="btnagregar" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
          </label>
        </div>
        <div class="form-group no-padding" id="plantilla">
          <div class="col-lg-2">
            <select name="tipo" class="form-control" id="tipo">
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_tipolaboratorios,"tipo","tipo"),true)?>
            </select>
          </div>
          <div class="col-lg-4">
            <input name="cup_desc" type="text" class="form-control" id="cup_desc" placeholder="Descripción">
            <input name="codigo" type="hidden" id="codigo" value="">  
          </div>
          <div class="col-lg-3">
            <textarea class="form-control" rows="3" name="resultado" ></textarea>
          </div>
          <div class="col-lg-2">
            <div class="box box-default">
              <input name="adj" type="file" class="filestyle" id="adj" placeholder="Adjunto" data-buttonText="Adjunto" >
            </div>
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
<script type="text/javascript">
  $("#btnagregar").click(function () {
    $('#plantilla').clone(false).insertAfter("#plantilla");
  });
</script>
