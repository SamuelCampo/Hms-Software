<div class="col-lg-12">

    <!--Se cambia por solicitud de William
            <div class="col-lg-3">
              <h4 class="text-center">Énfasis en</h4>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-6">Alturas</label>
                <div class="col-lg-6">
                  <select class="form-control no-margin no-padding" name="consultaso[cmexeg_altur]" >
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->cmexeg_altur_t99))?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-6">Confinado </label>
                <div class="col-lg-6">
                  <select class="form-control no-margin no-padding" name="consultaso[cmexeg_confina]" >
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->cmexeg_confina_t99))?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-6">Manipulación de Alimentos</label>
                <div class="col-lg-6">
                  <select class="form-control no-margin no-padding" name="consultaso[tipoexa_manipulalim]" >
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->tipoexa_manipulalim_t99))?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-6">Ostomuscular </label>
                <div class="col-lg-6">
                  <select class="form-control no-margin no-padding" name="consultaso[cmexeg_ostomus]" >
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->cmexeg_ostomus_t99))?>
                  </select>
                </div>
              </div>
            </div>

          -->
    <div class="col-lg-3">
        <h4 class="text-center">Aptitud en el Exámen</h4>
        <div class="apto">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Apto</label>
                <label class="col-lg-4">
        <div id="apto"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[cmaptex_apto]","valor"=>"SI","actual"=>$datconsultaso->cmaptex_apto_t99),true)?>
          </div>
                </label>
            </div>
        </div>

        <div class="apres">
            <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Apto con Restricciones</label>
                <label class="col-lg-4">
              <div id="apres">  
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[cmaptex_aptorest]","valor"=>"SI","actual"=>$datconsultaso->cmaptex_aptorest_t99),true)?>
               </div>
                </label>
            </div>
        </div>

        <div class="noapto">
            <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">No Apto </label>
                <label class="col-lg-4">
                <div id="noapto">                     
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[cmaptex_noapto]","valor"=>"SI","actual"=>$datconsultaso->cmaptex_noapto_t99),true)?>
               </div>
                  </label>
            </div>
        </div>

        <div class="apla">
            <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Aplazado </label>
                <label class="col-lg-4">
    <div id="apla"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[cmaptex_difer]","valor"=>"SI","actual"=>$datconsultaso->cmaptex_difer_t99),true)?>
   </div>

                </label>
            </div>
        </div>

        <div class="habi">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Habilitar Opciones</label>
                <label class="col-lg-4">
                  <div id="habi"> 
                  <input type="checkbox" name="habi">
                  </div>
                </label>
            </div>
        </div>



    </div>
    <div class="col-lg-3">
        <h4 class="text-center">Condición del Exámen de Egreso</h4>

        <div class="satis">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Satisfactorio</label>
                <label class="col-lg-4">
<div id="satis">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[cmexeg_satis]","valor"=>"SI","actual"=>$datconsultaso->cmexeg_satis_t99),true)?>
</div>
                </label>
            </div>
        </div>
        <div class="nosas">
            <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">No Satisfactorio</label>
                <label class="col-lg-4">
<div id="nosas">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[cmexeg_nosatis]","valor"=>"SI","actual"=>$datconsultaso->cmexeg_nosatis_t99),true)?>
</div>
                </label>
            </div>

        </div>
    </div>
    <!--
  /*
+Autor: Ing Mauricio Garibello R
Add a comment to this line
+Fecha: 12/12/2017
+Nota: Se incluye EPP segun requerimiento
+  */
-->
    <div class="col-lg-3">

        <h4 class="text-center">EPP</h4>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">Uniforme</label>
            <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[epp_unifor]","valor"=>"SI","actual"=>$datconsultaso->epp_unifor_t99),true)?>
                </label>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">Guantes</label>
            <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[epp_guantes]","valor"=>"SI","actual"=>$datconsultaso->epp_guantes_t99),true)?>
                </label>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">P. Respiratoria</label>
            <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[epp_presp]","valor"=>"SI","actual"=>$datconsultaso->epp_presp_t99),true)?>
                </label>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">P. Auditiva</label>
            <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[epp_paudit]","valor"=>"SI","actual"=>$datconsultaso->epp_paudit_t99),true)?>
                </label>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">P. Visual</label>
            <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[epp_pvisual]","valor"=>"SI","actual"=>$datconsultaso->epp_pvisual_t99),true)?>
                </label>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">Botas</label>
            <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[epp_botas]","valor"=>"SI","actual"=>$datconsultaso->epp_botas_t99),true)?>
                </label>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-8">Otros</label>
            <label class="col-lg-4">
                  <input name="consultaso[epp_otros]" type="text" class="form-control" value="<?=$datconsultaso->epp_otros_t99?>" />
                </label>
        </div>


    </div>

</div>

<!--
              /*
            +Autor: Ing Mauricio Garibello R
            +Fecha: 10/12/2017
            +Nota: Se traslada este codigo para que aparezca independiente
            en el formulario de consulta de salud ocupacional
+  */
          
          <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">Recomendaciones</h4>
              <textarea class="form-control" name="consultaso[cm_recomend]" rows="10"><?=$datconsultaso->cm_recomend_t99?></textarea>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">Restricciones</h4>
              <textarea class="form-control" name="consultaso[cm_restricc]" rows="10"><?=$datconsultaso->cm_restricc_t99?></textarea>
            </div>
          </div>
          -->

<script>
    /*
    +Autor: Ing Mauricio Garibello R
    Add a comment to this line
    +Fecha: 12/12/2017
    +Nota: Se adiciona codigo para lograr seleccionar una sola 
    +  */
    $(".satis").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.nosas').hide(3000);

            $("#nosas :checkbox").attr('checked', false);
        } else {

            $("#satis :checkbox").attr('checked', false);
        }

    });

    $(".nosas").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.satis').hide(3000);

            $("#satis :checkbox").attr('checked', false);
        } else {

            $("#nosas :checkbox").attr('checked', false);
        }

    });




    $(".apto").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.apres').hide(3000);
            $('.noapto').hide(2000);
            $('.apla').hide(1000);
            $('.habi').show(3000);

            $("#apres :checkbox").attr('checked', false);
            $("#noapto :checkbox").attr('checked', false);
            $("#apla :checkbox").attr('checked', false);
        } else {

            $("#apto :checkbox").attr('checked', false);
        }

    });

    $(".apres").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.apto').hide(3000);
            $('.noapto').hide(2000);
            $('.apla').hide(1000);
            $('.habi').show(3000);


            $("#apto :checkbox").attr('checked', false);
            $("#noapto :checkbox").attr('checked', false);
            $("#apla :checkbox").attr('checked', false);

        } else {
            $("#apres :checkbox").attr('checked', false);
        }
    });




    $(".noapto").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.apto').hide(3000);
            $('.apres').hide(2000);
            $('.apla').hide(1000);
            $('.habi').show(3000);


            $("#apto :checkbox").attr('checked', false);
            $("#apres :checkbox").attr('checked', false);
            $("#apla :checkbox").attr('checked', false);



        } else {

            $("#noapto :checkbox").attr('checked', false);
        }
    });




    $(".apla").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.apto').hide(3000);
            $('.apres').hide(2000);
            $('.noapto').hide(1000);
            $('.habi').show(3000);


            $("#apto :checkbox").attr('checked', false);
            $("#apres :checkbox").attr('checked', false);
            $("#noapto :checkbox").attr('checked', false);




        } else {

            $("#apla :checkbox").attr('checked', false);
        }
    });

    $(document).ready(function() {
        $('.habi').hide();
        //lo que se desee hacer al recibir un clic el checkbox
    });

    $(".habi").click(function() {
        var opcion = confirm("Desea Habilitar o limpiar las opciones ?");
        if (opcion == true) {
            $('.apto').show();
            $('.apres').show(2000);
            $('.noapto').show(1000);
            $('.apla').show(500);
            $('.habi').hide();
            $("#apto :checkbox").attr('checked', false);
            $("#apres :checkbox").attr('checked', false);
            $("#noapto :checkbox").attr('checked', false);
            $("#apla :checkbox").attr('checked', false);
            $("#habi :checkbox").attr('checked', false);

        } else {
            $("#habi :checkbox").attr('checked', false);
        }

    });
</script>