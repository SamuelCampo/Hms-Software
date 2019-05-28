<?
  //var_dump($datconsulta->datantgineco);
?>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <div class="col-lg-2">
                <label for="antecedentes[PERSONALES]patologicos" class="control-label col-lg-8">Patológicos</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PERSONALES][patologias]" id="patologias" value="<?=$datconsulta->datantpers->patologias_t65 ?: "NO REFIERE"?>" >
                </label>
            </div>
            <div class="col-lg-3">
                <label for="quirurgicos" class="control-label col-lg-8">Qirúrgicos</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PERSONALES][quirurgicos]" id="quirur" value="<?=$datconsulta->datantpers->quirurgicos_t65 ?: "NO REFIERE"?>">
                </label>
            </div>
            <div class="col-lg-3">
                <label for="traumaticos" class="control-label col-lg-8">Traumáticos</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PERSONALES][traumat]" id="traumat" value="<?=$datconsulta->datantpers->traumat_t65 ?: "NO REFIERE"?>">
                </label>
            </div>
            <div class="col-lg-3">
                <label for="alergicos" class="control-label col-lg-8">Toxicos Alérgicos</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PERSONALES][alergias]" id="alerg" value="<?=$datconsulta->datantpers->alergias_t65 ?: "NO REFIERE"?>">
                </label>
            </div>
        </div><br>
        <div class="form-group">
            <div class="col-lg-2">
                <label for="inmunologicos" class="control-label col-lg-8">Inmunológicos</label>
                <label class="col-lg-4">
                  <input type="text" name="antecedentes[PERSONALES][inmunologicos]" id="inmun" value="<?=$datconsulta->datantpers->inmunologicos_t65 ?: "NO REFIERE"?>">
                </label>
            </div>
            <div class="col-lg-3">
                <label for="Medicamentoso" class="control-label col-lg-8">Farmacos</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PERSONALES][farmacologicos]" id="medic" value="<?=$datconsulta->datantpers->farmacologicos_t65 ?: "NO REFIERE"?>">
                </label>
            </div>
            <div class="col-lg-3">
                <label for="otros" class="control-label col-lg-8">Otros</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PERSONALES][otros]" id="otros" value="<?=$datconsulta->datantpers->otros_t65 ?: "NO REFIERE"?>">
                </label>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <legend>Hábitos</legend>
        <div class="form-group">
            <div class="col-lg-2">
                <label for="FUMA" class="control-label col-lg-8">Fuma</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PATOLOGICOS][tabaco]" id="fuma" value="<?=$datconsulta->datantpatol->tabaco_t66 ?: "NO REFIERE"?>" />
                </label>
            </div>
            <div class="col-lg-3">
                <label for="alcohol" class="control-label col-lg-8">Alcohol</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PATOLOGICOS][alcohol]" id="alcohol" value="<?=$datconsulta->datantpatol->alcohol_t66 ?: "NO REFIERE"?>">
                </label>
            </div>
            <div class="col-lg-3">
                <label for="actividad" class="control-label col-lg-8">Act. Física</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PATOLOGICOS][actfisica]" id="actividad" value="<?=$datconsulta->datantpatol->actfisica_t66 ?: "NO REFIERE"?>">
                </label>
            </div>
            <div class="col-lg-3">
                <label for="otros" class="control-label col-lg-8">Otros</label>
                <label class="col-lg-4">
                    <input type="text" name="antecedentes[PATOLOGICOS][otros]" id="otros" value="<?=$datconsulta->datantpatol->otros_t66 ?: "NO REFIERE"?>">
                </label>
            </div>
        </div>
    </div>
    <? if ($dathistoria->genero_t3 == 'FEMENINO') { ?>
    <div class="col-lg-12">
        <legend>Gineco-obstétricos</legend>
        <div class="form-group">
            <div class="col-lg-1">
                <label for="menarca" >Gestas:</label>
                <input name="antecedentes[GINECO][gestas]" type="number" class="form-control" id="gestas" placeholder="" value="<?=$datconsulta->datantgineco->gestas_t77?>">
            </div>
            <div class="col-lg-1">
                <label for="menarca" >Partos:</label>
                <input name="antecedentes[GINECO][partos]" type="number" class="form-control" id="partos" placeholder="" value="<?=$datconsulta->datantgineco->partos_t77?>">
            </div>
            <div class="col-lg-1">
                <label for="menarca" >Cesareas:</label>
                <input name="antecedentes[GINECO][cesareas]" type="number" class="form-control" id="cesareas" placeholder="" value="<?=$datconsulta->datantgineco->cesareas_t77?>">
            </div>
            <div class="col-lg-1">
                <label for="menarca" >Abortos:</label>
                <input name="antecedentes[GINECO][abortos]" type="number" class="form-control" id="abortos" placeholder="" value="<?=$datconsulta->datantgineco->abortos_t77?>">
            </div>
            <div class="col-lg-2">
                <label for="menarca" >Menaquia:</label>
                <input name="antecedentes[GINECO][menaquia]" type="text" class="form-control" id="menaquia" placeholder="Año" value="<?=$datconsulta->datantgineco->menaquia_t77?>">
            </div>
            <div class="col-lg-3">
                <label for="fum" >FUM:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="antecedentes[GINECO][fum]" type="text" class="form-control form_date" id="fum" placeholder="Fecha" value="<?=$datconsulta->datantgineco->fum_t77?>">
                </div>
            </div>
            <div class="col-lg-3">
                <label for="fpp" >FPP:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="antecedentes[GINECO][fpp]" type="text" class="form-control form_date" id="fpp" placeholder="Fecha" value="<?=$datconsulta->datantgineco->fpp_t77?>">
                </div>
            </div>
        </div><br>
        <div class="form-group">
            <div class="col-lg-1">
                <label for="sexarca" >Sexarca:</label>
                <input name="antecedentes[GINECO][sexarca]" type="text" class="form-control form_date" id="sexarca" placeholder="Años" value="<?=$datconsulta->datantgineco->sexarca_t77?>">
            </div>
            <div class="col-lg-2">
                <label for="ets" >ETS:</label>
                <input name="antecedentes[GINECO][ets]" type="text" class="form-control" id="ets" placeholder="Tipo Enfermedad" value="<?=$datconsulta->datantgineco->ets_t77?>">
            </div>
            <div class="col-lg-2">
                <label for="anticoncep" >ANTICONCEPCION:</label>
                <label class="checkbox-inline">
                    <?= $this->load->view('Genericas/gen_radio_check', array("tipo" => "checkbox", "nombre" => "antecedentes[GINECO][anticoncep]", "valor" => "Si", "btswitchini" => true, "size" => "mini", "toff" => 'No', "ton" => 'Si', "anim" => false,"actual"=>$datconsulta->datantgineco->anticoncep_t77), true) ?>
                </label>
            </div>
            <div class="col-lg-3">
                <label for="anticonceptip" >TIPO:</label>
                <select class="form-control input-sm" name="antecedentes[GINECO][anticonceptip]" >
                    <option></option>
                    <?= $this->load->view('Genericas/gen_menu', $this->Modulo->confmenu($this->Constante->arr_metpreserv, "metodo", "metodo",$datconsulta->datantgineco->anticonceptip_t77)) ?>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="anticoncepini" >INICIO:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="antecedentes[GINECO][anticoncepini]" type="text" class="form-control form_date" id="anticoncepini" placeholder="Fecha" value="<?=$datconsulta->datantgineco->anticoncepini_t77?>">
                </div>
            </div>
            <div class="col-lg-2">
                <label for="anticoncepultsum" >ULTIMO SUMINISTRO:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="antecedentes[GINECO][anticoncepultsum]" type="text" class="form-control form_date" id="xxx" placeholder="Fecha" value="<?=$datconsulta->datantgineco->anticoncepultsum_t77?>">
                </div>
            </div>
        </div>
    </div>
    <?}?>
</div>