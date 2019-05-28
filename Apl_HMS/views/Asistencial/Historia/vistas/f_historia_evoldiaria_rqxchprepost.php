<?
  //var_dump($datconsulta->datevoldiaria);
  //exit;
?>
  <fieldset>
    <div class="row">
      <div class="col-lg-6">
        <legend>PRE-OPERATORIO:</legend>
        <div class="form-group">
          <div class="col-lg-3">
            <label>Compresas <br>Iniciales:</label>
            <input type="number" id="comp_iniciales" name="compr_iniciales" class="form-control">
          </div>
          <div class="col-lg-3">
            <label>Gasas <br>Iniciales:</label>
            <input type="number" id="gas_iniciales" name="gasas_iniciales" class="form-control">
          </div>
          <div class="col-lg-3">
              <label>Rollos <br>Iniciales:</label>
              <input type="number" id="rollos_iniciales" name="rollosiniciales" class="form-control">
          </div>
          <div class="col-lg-3">
              <label>Paquete <br>Instrumentacion:</label>
              <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"instrumentacion","valor"=>"Si","btswitchini"=>true,"size"=>"normal","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <legend>POST-OPERATORIO:</legend>
        <div class="form-group">
            <div class="col-lg-3">
              <label>Compresas <br>Finales:</label>
              <input type="number" id="comp_finales" name="compr_finales" class="form-control">
            </div>
            <div class="col-lg-3">
              <label>Gasas <br>Iniciales:</label>
              <input type="number" id="gas_finales" name="gasas_finales" class="form-control">
            </div>
            <div class="col-lg-3">
              <label>Rollos <br>Finales:</label>
              <input type="number" id="rollos_finales" name="rollosfinales" class="form-control">
            </div>
            <div class="col-lg-3">
              <label>Paquete <br>Instrumentacion:</label>
              <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"instrumentacionf","valor"=>"Si","btswitchini"=>true,"size"=>"normal","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
            </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <br/>
      <div class="row text-center">
        <input type="hidden" name='tipoevolucion' value='EVOLUCIÓN MÉDICA'>
       <button type="submit" name="formularioenviado" value="evoldiar" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
      </div>
    </div>
  </fieldset>