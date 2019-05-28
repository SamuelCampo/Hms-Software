    <div class="row no-margin no-padding">
        <div class="form-group col-lg-12">
          <label>Tipo</label>
          <?if($idtipoproc=='OTROSPROC'){?>
            <select name="orden[procs][idtipoproce]" class="form-control" id="idtipoproce_OTROSPROC">
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->tiposerviciootros,"idservicio","tipo_servicio",""))?>
            </select>
          <?}else{?>
            <input name="orden[procs][idtipoproce]" id="idtipoproce_<?=$idtipoproc?>" type="hidden" value="<?=$idtipoproc?>">
            <input name="orden[procs][tipoproce]" id="tipoproce" type="text" class="form-control" placeholder="Procedimiento" readonly requiered value="<?=$tipoproc?>">
          <?}?>
        </div>
        <div class="form-group no-padding no-marging">
          <div class="col-lg-6 text-center"><b>Procedimiento</b></div>
          <div class="col-lg-2 text-center"><b>Cantidad</b></div>
          <div class="col-lg-2 text-center"><b>Observación</b></div>
          <div class="col-lg-1 text-center"><b>Externo</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" onclick="btnagregarordenprocs()"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding" id="plantordprocs_<?=$idtipoproc?>">
          <div class="col-lg-6">
            <input name="orden[procs][procedimmiento][]" type="text" class="form-control cump_desc" id="cump_desc_<?=$idtipoproc?>" placeholder="Procedimiento" requiered onfocus="autocompcump('<?=$idtipoproc?>')">
            <input name="orden[procs][procedimmientocod][]" type="hidden" id="cupcodigo_<?=$idtipoproc?>" value="">
          </div>
          <div class="col-lg-2">
            <input name="orden[procs][cantidad][]" type="text" class="form-control" id="proc_cantidad_<?=$idtipoproc?>" placeholder="Cantidad" value="" requiered>
          </div>
          <div class="col-lg-2">
            <input name="orden[procs][observacion][]" type="text" class="form-control" id="proc_observ_<?=$idtipoproc?>" placeholder="Observación" >
          </div>
          <div class="col-lg-1">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"orden[procs][externo][]","valor"=>"SI",""),true)?>
          </div>
          <div class="col-lg-1" onclick="$(this).parent().remove();">
            <eliminar class="btn bg-navy btn-xs">
              <span class="glyphicon glyphicon-trash btneliminar"></span>
            </eliminar>
          </div>
        </div>
        <div class="form-group">
          <div class="row text-center">
           <button type="submit" name="formularioenviado" value="ordenprocs" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
          </div>
        </div>
    </div>