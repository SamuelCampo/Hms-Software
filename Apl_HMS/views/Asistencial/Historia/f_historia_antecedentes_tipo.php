<div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="alergias" class="control-label col-lg-8">Alergicos</label>
                  <label class="col-lg-4">
                  <? 
                   //debug($this->CI->data);
                  $actual=$this->CI->checked($this->CI->data,$tipoantec,'alergias'); 
                  // debug($actual);
                    if($actual ==false){
                        $actual=$datantec->alergias_t65;
                        // debug($actual);
                    }
                  ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="hipertension" class="control-label col-lg-8">Patologicos</label>
                  <label class="col-lg-4">
                  <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'hipertension'); 
                    if($actual ==false){
                        $actual=$datantec->hipertension_t65;
                    }
                    ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][hipertension]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="asma" class="control-label col-lg-8">Ocupacionales</label>
                  <label class="col-lg-4">
                  <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'asma'); 
            if($actual ==false){
                        $actual=$datantec->asma_t65;
                    }
                  ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][asma]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="alzaimer" class="control-label col-lg-8">Quirúrgicos</label>
                  <label class="col-lg-4">
                  <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'enfcronicas'); 
  if($actual ==false){
                        $actual=$datantec->enfcronicas_t65;
                    }
                  ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][enfcronicas]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="hepatitis" class="control-label col-lg-8">Farmacologicos</label>
                  <label class="col-lg-4">
                  <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'hepatitis');
  if($actual ==false){
                        $actual=$datantec->hepatitis_t65;
                    }
                   ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][hepatitis]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="lupus" class="control-label col-lg-8">Hospitalarios</label>
                  <label class="col-lg-4">
                  <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'enfvenereas'); 
  if($actual ==false){
                        $actual=$datantec->enfvenereas_t65;
                    }
                  ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][enfvenereas]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="lupus" class="control-label col-lg-8">Traumáticos</label>
                  <label class="col-lg-4">
                  <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'traumatismo'); 
  if($actual ==false){
                        $actual=$datantec->traumatismo_t65;
                    }
                  ?>
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][traumatismo]","valor"=>"SI","actual"=>$actual,"disabled"=>$deshabingmed),true);?>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                <div class="col-lg-8">
                <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'descripcion_t65');
  if($actual ==false){
                        $actual=$datantec->descripcion;
                    }
                 ?>
                  <textarea name="antecedentes[<?=$tipoantec;?>][descripcion]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?php $valor = json_decode( $this->data[0]['json203'], $assoc_array = false ); ECHO $valor->antecedentes->PERSONALES->descripcion; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <label for="otros" class="col-lg-2 control-label">Otros</label>
                <div class="col-lg-8">
                <? $actual=$this->CI->checked($this->CI->data,$tipoantec,'otros'); 
if($actual ==false){
                        $actual=$datantec->otros_t65;
                    }
                ?>
                  <input name="antecedentes[<?=$tipoantec;?>][otros];?>" type="text" class="form-control <?=$deshabingmed?>" id="otros" placeholder="" value="<?=$actual;?>"/>
                </div>
              </div>
            </div>
        </div>