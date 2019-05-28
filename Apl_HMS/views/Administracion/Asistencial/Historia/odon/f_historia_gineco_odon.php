<legen>GINECOLOGIA</legen>

<div class="form-group">
  <div class="col-lg-3">
    <label for="menarca" >Menarca:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>
  <div class="col-lg-3">
    <label for="xxx" >FUM:</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
    </div>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >FPP:</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3"> 
    <label for="xxx" >INICIO VIDA SEXUAL:</label>
    <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value="">
  </div>
  <div class="col-lg-3">
    <label for="xxx" >ETS:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="Tipo de Enfermedad" value="">
  </div>
  <div class="col-lg-3">
    <label for="xxx" >F.U. CITOLOGIA:</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value="">
    </div>
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >RESULTADO:</label>
    <div class="input-group">
      <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3"> 
      <label for="xxx" >ANTICONCEPCION:</label>
      <label class="checkbox-inline"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
      </label>
  </div>
    <div class="col-lg-3">
      <label for="xxx" >TIPO:</label>
      <select class="form-control input-sm" name="tipooption" >
        <option value="NINGUNO ">NINGUNO</option>
        <option value="LIGADURA DE TROMPAS ">LIGADURA DE TROMPAS</option>
        <option value="VASECTOMIA ">VASECTOMIA</option>
        <option value="DISPOSITIVO INTRAUTERINO HORMONAL">DISPOSITIVO INTRAUTERINO HORMONAL</option>
      <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_metpreserv,"metodo","metodo",$datpaciente->xxx_t3))?>
      </select>
    </div>
    <div class="col-lg-3">
      <label for="xxx" >INICIO:</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value="">
      </div>
    </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="xxx" >FECHA SUSPENCIÓN:</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value="">
    </div>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >ANTICONCEPCION TIEMPO:</label>
    <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value="">
    <label for="xxx" >SUSPENSIÓN:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
    </div>
    <div class="col-lg-3"> 
    <label for="xxx" >CIRUGIA DE CUELLO UTERINO:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div> 
</div>

<legend>ANTECEDENTES GINECOLOGICOS</legend>
<div class="form-group">

  <br>
    <div class="col-lg-3">
      <label for="xxx">GESTAS</label>
      <input type="text" name="ultimo_parto" class="form-control" id="xxx" placeholder="" value="">
    </div>
    <div class="col-lg-3">
      <label for="xxx">PARTOS</label>
      <input type="text" name="ultima_cesarea" class="form-control" id="xxx" placeholder="" value="">
    </div>
    <div class="col-lg-3">
      <label for="xxx">ABORTOS</label>
      <input type="text" name="malformaciones" class="form-control" placeholder="" id="xxx" placeholder="" value="">
    </div>
    <div class="col-lg-3">
      <label for="xxx">MORTINATOS</label>
      <input type="text" name="prematuros" class="form-control" id="xxx"  placeholder="">
    </div>
    <div class="col-lg-3">
      <label for="xxx">ESPECIALES</label>
      <input type="text" name="edadgest"  class="form-control" placeholder="" id="xxx" placeholder="" value="">
    </div>  
</div>

<legen>OBSTETRICOS</legen>

<div class="form-group">
  <!--<div class="col-lg-3"> 
    <label for="xxx" >CESAREA:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>-->
  <div class="col-lg-3"> 
    <label for="fm" >TIPO DE EMBARAZO:</label>
    <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value=""> 
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="xxx" >ABORTO:</label>
    <input name="xxx" type="text" class="form-control form_date" id="xxx" placeholder="" value="">
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">       
    <label for="xxx" >HTA:</label>
    <!-- <label class="checkbox-inline">
      <?php /* $this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true) */ ?>
    </label> -->
    <select class="form-control" id="xxx" name="xxx">
      <option value="NINGUNO">NINGUNO</option>
      <option value="CRONICA">CRONICA</option>
      <option value="PRECLAPSIA">PRECLAPSIA</option>
      <option value="HELP GESTACIONAL">HELP GESTACIONAL</option>
      <option value="HIPERTENSION CON PRECLAPSIA SOBRE AGREGADA">HIPERTENSION CON PRECLAPSIA SOBRE AGREGADA</option>
    </select>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >INFECCION:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >ISOINMUNIZACION:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >DESCRIPCION:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3"> 
    <label for="xxx" >ATENCION PRENATAL:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >N° DE CONSULTAS:</label>
    <input name="xxx" type="number" class="form-control" id="xxx" placeholder="" value="">
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >EXAMENES COMPLEMENTARIOS:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >ALTERADOS:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="xxx" >E. VACUNACION T-D:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >INFLUENZA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >H. AYB:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >F. AMARILLA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="xxx" >VARICELA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >RABIA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true)?>
    </label>
  </div>
  <br><br><br>
  <!-- para las tablas que se agregaran complemento aun no funcional -->
  <legend>ANTECEDENTES OBSTETRICOS</legend>
  
    <div class="col-lg-3">
      <label for="xxx">Fecha Ultimo Parto</label>
      <input type="date" name="ultimo_parto" class="form-control" id="xxx" placeholder="" value="">
    </div>
    <div class="col-lg-3">
      <label for="xxx">Fecha Ultima Cesarea</label>
      <input type="date" name="ultima_cesarea" class="form-control" id="xxx" placeholder="" value="">
    </div>
    <div class="col-lg-3">
      <label for="xxx">Malformaciones en el Feto</label>
      <input type="text" name="malformaciones" placeholder="cual" id="xxx" placeholder="" value="">
      <label for="xxx">Prematuros</label>
      <input type="text" name="prematuros" placeholder="cual">
    </div>
    <div class="col-lg-3">
      <label for="xxx">Edad Gestacional (Semanas)</label>
      <input type="text" name="edadgest" placeholder="Edad Gestacional" id="xxx" placeholder="" value="">
    </div>
</div>


