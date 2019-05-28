<div class="form-group col-lg-12">
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">AUDIOMETRIA</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">ESPIROMETRIA</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">OPTOMETRIA</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">GLICEMIA</label>
        <!--
    /*
+Autor: Ing Mauricio Garibello R
+Fecha: 10/12/2017
+Nota: Se cambia por campos tipo texto
+  */
  <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
-->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_glicemia_t99?>" name="consultaso[psra_glicemia]" />
    </div>





    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">COLESTEROL TOT</label>
        <!--
                +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto

              <select class="form-control input-sm" name="consultaso[psra_colesteroltotal]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_colesteroltotal_t99))?>
              </select>
                -->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_colesteroltotal_t99?>" name="consultaso[psra_colesteroltotal]" />


    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">TRIGLICELIDOS TOT</label>

        <!--
                +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto
              <select class="form-control input-sm" name="consultaso[psra_triguicelidostotales]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_triguicelidostotales_t99))?>
              </select>
            -->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_triguicelidostotales_t99?>" name="consultaso[psra_triguicelidostotales]" />

    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">TSH</label>
        <!--
              +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto
              <select class="form-control input-sm" name="consultaso[psra_tsh]" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_tsh_t99))?>
              </select>
            -->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_tsh_t99?>" name="consultaso[psra_tsh]" />

    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">KOH</label>
        <!--
              +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto
            
              <select class="form-control input-sm" name="consultaso[psra_koh]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_koh_t99))?>
              </select>
        -->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_koh_t99?>" name="consultaso[psra_koh]" />

    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">FROTIS FARINGEO</label>
        <select class="form-control input-sm" name="consultaso[psra_frotisfaringeo]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_frotisfaringeo_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">COPROLÓGICO</label>
        <select class="form-control input-sm" name="consultaso[psra_coprologico]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_coprologico_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">RX LUMBOSACRA</label>
        <select class="form-control input-sm" name="consultaso[psra_rxlumbosacra]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_rxlumbosacra_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">PARCIAL ORINA</label>
        <select class="form-control input-sm" name="consultaso[psra_parcialorina]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_parcialorina_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">HEMOGRAMA</label>
        <!--

              +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto
            
              <select class="form-control input-sm" name="consultaso[psra_hemograma]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_hemograma_t99))?>
              </select>
-->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_hemograma_t99?>" name="consultaso[psra_hemograma]" />

    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">SEROLOGIA</label>
        <!--

              +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto
    
              <select class="form-control input-sm" name="consultaso[psra_serologia]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_serologia_t99))?>
              </select>
-->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_serologia_t99?>" name="consultaso[psra_serologia]" />


    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">SEROLOGÍA 2</label>
        <!--
              +Autor: Ing Mauricio Garibello R
                +Fecha: 10/12/2017
                +Nota: Se cambia por campos tipo texto
    
              <select class="form-control input-sm" name="consultaso[psra_serologia2]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_serologia2_t99))?>
              </select>
-->
        <input type="text" class="form-control" value="<?=$datconsultaso->psra_serologia2_t99?>" name="consultaso[psra_serologia2]" />

    </div>

</div>