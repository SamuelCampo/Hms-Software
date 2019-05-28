      <div class="row no-margin no-padding">
        <div class="form-group">
          <div class="col-lg-2 no-margin no-padding">
            <input name="orden[procs][idtipoproce]" id="idtipoproce_<?=$idtipoproc?>" type="hidden" value="<?=$idtipoproc?>">
            <input name="orden[procs][tipoproce]" id="tipoproce" type="text" class="form-control input-sm" placeholder="Procedimiento" readonly requiered value="<?=$tipoproc?>">
          </div>
          <div class="col-lg-5 no-margin no-padding">
            <input type="text" id="tercdesc" class="form-control input-sm" value="" placeholder="TERCERO">
            <input type="hidden" name="orden[procs][terceroid]" id="tercid" value="" >
          </div>
          <div class="col-lg-5 no-margin no-padding">
            <select class="form-control input-sm" name="orden[procs][especialidades]" id="especialidades" >
              <option value="">SELECCIONE ESPECIALIDAD</option>
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Especialidades->param_listar(),"idps_especialidades_t103","especialidades_t103"))?>
            </select>
          </div>
        </div>
        <div class="form-group no-padding no-marging">
          <div class="col-lg-6 text-center"><b>Procedimiento</b></div>
          <div class="col-lg-1 text-center"><b>Cantidad</b></div>
          <div class="col-lg-2 text-center"><b>Observación</b></div>
          <div class="col-lg-1 text-center"><b>Aplicado</b></div>
          <div class="col-lg-1 text-center"><b>Externo</b></div>
          <div class="col-lg-1 text-center">
            <a id="btnagregarordenprocs" class="btn bg-navy btn-xs" onclick="btnagregarordenprocs()"><span class="glyphicon glyphicon-plus"></span></a>
          </div>
        </div>
        <div class="form-group no-padding" id="plantordprocs_<?=$idtipoproc?>">
          <div class="col-lg-6 no-margin no-padding">
            <input name="orden[procs][procedimmiento][]" type="text" class="form-control input-sm cump_desc" id="cump_desc_<?=$idtipoproc?>" placeholder="Procedimiento" requiered onfocus="autocompcump('<?=$idtipoproc?>')">
            <input name="orden[procs][procedimmientocod][]" type="hidden" id="cupcodigo_<?=$idtipoproc?>" value="">
          </div>
          <div class="col-lg-1 no-margin no-padding">
            <input name="orden[procs][cantidad][]" type="text" class="form-control input-sm" id="proc_cantidad_<?=$idtipoproc?>" placeholder="Cantidad" value="" requiered>
          </div>
          <div class="col-lg-2 no-margin no-padding">
            <input name="orden[procs][observacion][]" type="text" class="form-control input-sm" id="proc_observ_<?=$idtipoproc?>" placeholder="Observación" >
          </div>
          <div class="col-lg-1 no-margin no-padding text-center">
            <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"orden[procs][aplicado][]","valor"=>"SI",""),true)?>
          </div>
          <div class="col-lg-1 no-margin no-padding text-center">
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