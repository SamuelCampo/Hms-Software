<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<style type="text/css">
    input[type=checkbox] {
        /* Doble-tamaño Checkboxes 
Autor: Ing Mauricio Garibello R
Fecha: 11/01/2018
Nota: Se personaliza css para la visualizacion de checkbox

  */
        -ms-transform: scale(2);
        /* IE */
        -moz-transform: scale(2);
        /* FF */
        -webkit-transform: scale(2);
        /* Safari y Chrome */
        -o-transform: scale(2);
        /* Opera */
        padding: 10px;
    }

    /* Tal vez desee envolver un espacio alrededor de su texto de casilla de verificación */

    .checkboxtexto {
        /* Checkbox texto */
        font-size: 110%;
        display: inline;

        input[type=checkbox] {
            /* Doble-tamaño Checkboxes */
            -ms-transform: scale(2);
            /* IE */
            -moz-transform: scale(2);
            /* FF */
            -webkit-transform: scale(2);
            /* Safari y Chrome */
            -o-transform: scale(2);
            /* Opera */
            padding: 10px;
        }

        /* Tal vez desee envolver un espacio alrededor de su texto de casilla de verificación */
        .checkboxtexto {
            /* Checkbox texto */
            font-size: 110%;
            display: inline;
        }
</style>





<div class="col-lg-12 no-margin no-padding">



    <div class="col-lg-4">
        <h4 class="text-center">Tipo Examen</h4>
        <div class="ing">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Ingreso</label>
                <label class="col-lg-4">
                <div id="ing"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[tipoexa_ingreso]","valor"=>"SI","actual"=>$datconsultaso->tipoexa_ingreso_t99),true)?>
              </div>
                </label>
            </div>

        </div>

        <div class="peri">
            <div class="form-group">

                <label for="hospitalizacion" class="control-label col-lg-8">Periodico</label>
                <label class="col-lg-4">
                    <div id="peri"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[tipoexa_periodico]","valor"=>"SI","actual"=>$datconsultaso->tipoexa_periodico_t99),true)?>
                    </div>
                 </label>
            </div>

        </div>

        <div class="reti">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Retiro</label>
                <label class="col-lg-4">
                  <div id="reti"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[tipoexa_retir]","valor"=>"SI","actual"=>$datconsultaso->tipoexa_retir_t99),true)?>
                  </div>
                </label>
            </div>
        </div>
        <div class="ocupa">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Cambio Ocupación </label>
                <label class="col-lg-4">
                  <div id="ocupa"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[tipoexa_camocupa]","valor"=>"SI","actual"=>$datconsultaso->tipoexa_camocupa_t99),true)?>
                    </div>
                </label>
            </div>
        </div>
        <div class="reubica">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Reubicación</label>
                <label class="col-lg-4">
                  <div id="reubica"> 
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[tipoexa_reubica]","valor"=>"SI","actual"=>$datconsultaso->tipoexa_reubica_t99),true)?>
                  </div>
                </label>
            </div>
        </div>

        <div class="hab">
            <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Habilitar Opciones</label>
                <label class="col-lg-4">
                  <div id="hab"> 
                  <input type="checkbox" name="hab">
                  </div>
                </label>
            </div>
        </div>





    </div>
    <div class="col-lg-3">
        <h4 class="text-center">Enfasis en</h4>
        <div class="form-group">
            <label for="cronicas" class="control-label col-lg-6">Alturas</label>
            <div class="col-lg-6">
                <select class="form-control no-margin no-padding" name="consultaso[cmexeg_altur]">
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->cmexeg_altur_t99))?>
                  </select>
            </div>
        </div>
        <div class="form-group">
            <label for="cronicas" class="control-label col-lg-6">Confinado </label>
            <div class="col-lg-6">
                <select class="form-control no-margin no-padding" name="consultaso[cmexeg_confina]">
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->cmexeg_confina_t99))?>
                  </select>
            </div>
        </div>
        <div class="form-group">
            <label for="hospitalizacion" class="control-label col-lg-6">Manipulación de Alimentos</label>
            <div class="col-lg-6">
                <select class="form-control no-margin no-padding" name="consultaso[tipoexa_manipulalim]">
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->tipoexa_manipulalim_t99))?>
                  </select>
            </div>
        </div>
        <div class="form-group">
            <label for="cronicas" class="control-label col-lg-6">Ostomuscular </label>
            <div class="col-lg-6">
                <select class="form-control no-margin no-padding" name="consultaso[cmexeg_ostomus]">
                    <option></option>
                    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->listaAptitudExamenSaludOcupacional,"aptitud","aptitud",$datconsultaso->cmexeg_ostomus_t99))?>
                  </select>
            </div>
        </div>
    </div>
</div>

<script>
    /*
    Autor: Ing Mauricio Garibello R
    Fecha: 11/01/2018
    Nota: Se inhabilitan elementos del DOM para evitar que se
    puedan marcar mas de un tipo de examen
    */
    $(".ing").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");

        if (opcion == true) {
            $('.peri').hide(3000);
            $('.reti').hide(2000);
            $('.ocupa').hide(1000);
            $('.reubica').hide(500);
            $('.hab').show(3000);

            $("#peri :checkbox").attr('checked', false);
            $("#reti :checkbox").attr('checked', false);
            $("#ocupa :checkbox").attr('checked', false);
            $("#reubica :checkbox").attr('checked', false);

        } else {
            $("#ing :checkbox").attr('checked', false);
        }

    });


    $(".peri").click(function() {

        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");
        if (opcion == true) {
            $('.ing').hide(3000);
            $('.reti').hide(2000);
            $('.ocupa').hide(1000);
            $('.reubica').hide(500);
            $('.hab').show(3000);

            $("#ing :checkbox").attr('checked', false);
            $("#reti :checkbox").attr('checked', false);
            $("#ocupa :checkbox").attr('checked', false);
            $("#reubica :checkbox").attr('checked', false);


        } else {
            $("#peri :checkbox").attr('checked', false);
        }
    });


    $(".reti").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");
        if (opcion == true) {
            $('.ing').hide(3000);
            $('.peri').hide(2000);
            $('.ocupa').hide(1000);
            $('.reubica').hide(500);
            $('.hab').show(3000);

            $("#ing :checkbox").attr('checked', false);
            $("#peri :checkbox").attr('checked', false);
            $("#ocupa :checkbox").attr('checked', false);
            $("#reubica :checkbox").attr('checked', false);

        } else {
            $("#reti :checkbox").attr('checked', false);
        }

    });

    $(".ocupa").click(function() {
        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");
        if (opcion == true) {
            $('.ing').hide(3000);
            $('.peri').hide(2000);
            $('.reti').hide(1000);
            $('.reubica').hide(500);
            $('.hab').show(3000);

            $("#ing :checkbox").attr('checked', false);
            $("#peri :checkbox").attr('checked', false);
            $("#reti :checkbox").attr('checked', false);
            $("#reubica :checkbox").attr('checked', false);

        } else {
            $("#ocupa :checkbox").attr('checked', false);
        }

    });

    $(".reubica").click(function() {

        var opcion = confirm("Esta seguro de seleccionar esta opcion ?");
        if (opcion == true) {
            $('.ing').hide(3000);
            $('.peri').hide(2000);
            $('.reti').hide(1000);
            $('.ocupa').hide(500);
            $('.hab').show(3000);

            $("#ing :checkbox").attr('checked', false);
            $("#peri :checkbox").attr('checked', false);
            $("#reti :checkbox").attr('checked', false);
            $("#ocupa :checkbox").attr('checked', false);

        } else {
            $("#reubica :checkbox").attr('checked', false);
        }

    });

    $(document).ready(function() {
        $('.hab').hide();
        //lo que se desee hacer al recibir un clic el checkbox
    });

    $(".hab").click(function() {

        var opcion = confirm("Desea Habilitar o limpiar las opciones ?");
        if (opcion == true) {
            $('.ing').show();
            $('.peri').show(2000);
            $('.reti').show(1000);
            $('.ocupa').show(500);
            $('.reubica').show(500);
            $('.hab').hide();
            $("#ing :checkbox").attr('checked', false);
            $("#peri :checkbox").attr('checked', false);
            $("#reti :checkbox").attr('checked', false);
            $("#ocupa :checkbox").attr('checked', false);
            $("#reubica :checkbox").attr('checked', false);

            $("#hab :checkbox").attr('checked', false);

        } else {
            $("#hab :checkbox").attr('checked', false);
        }

    });
</script>