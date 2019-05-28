<legend>GINECOLÓGICOS</legend>
<div class="form-group">

      <div class="col-lg-3">
          <label for="menarca">Menarca:</label>
          <input name="menarca_gineco" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["menarca_gineco"]?>">
      <br>
      </div>

     
        <div class="col-lg-3"> 
          <label for="xxx" >INICIO VIDA SEXUAL:</label>
          <input name="inicvs_gineco" type="text" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["inicvs_gineco"]?>">
        </div>
        <div class="col-lg-4">    
                <label for="xxx" >NUMERO DE COMPA&Ntilde;EROS SEXUALES:</label>
                <input name="num_cs" type="text" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["num_cs"]?>">        
           <br>
          </div>

        <div class="col-lg-3">
          <label for="xxx" >FUM:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="fum_gineco" type="date" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["fum_gineco"]?>">
          </div>
          <br>
        </div>
</div>

<div class="form-group">
        <div class="col-lg-3">
          <label for="xxx" >ETS:</label>
          <input name="ets_gineco" type="text" class="form-control" id="xxx" placeholder="Tipo de Enfermedad" value="<?=$datgineco[0]["ets_gineco"]?>">
        </div>

        <div class="col-lg-3">
          <label for="xxx" >F.U. CITOLOGIA:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input name="fu_citologia_gineco" type="date" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["fu_citologia_gineco"]?>">
          </div>
        </div>

        <div class="col-lg-3 "> 
          <label for="xxx" >RESULTADO:</label>

          <div class="input-group">
            <input name="result_gineco" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["result_gineco"]?>">
          </div>
        </div>    
</div>
<br>

<legend>PLANIFICACION FAMILIAR</legend>
<div class="form-group">

  <div class="col-lg-3" > 
      <label for="xxx" >CITA DE CONTROL:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"cita_control","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['cita_control']),true)?>
      </label>
  </div>
  <div class="col-lg-3" > 
      <label for="xxx" >PRIMERA VEZ:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"cita_primera","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['cita_primera']),true)?>
      </label>
  </div>
    <div class="col-lg-3" > 
      <label for="xxx" >ANTICONCEPCION:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"cita_anticoncepcion","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['cita_anticoncepcion']),true)?>
      </label>
  </div>
  <div class="col-lg-3" > 
      <label for="xxx" >INYECCION HORMONAL:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"cita_hormonal","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['cita_hormonal']),true)?>
      </label>
  </div>
 </div>


<div class="form-group">
  <div class="col-lg-3" > 
      <label for="xxx" >INYECCION TRIMESTRAL:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"inyeccion_trimestral","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['inyeccion_trimestral']),true)?>
      </label>
  </div>
  <div class="col-lg-3" > 
      <label for="xxx" >METODO ORAL:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"metodo_oral","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['metodo_oral']),true)?>
      </label>
  </div>
  <div class="col-lg-3" > 
      <label for="xxx" >ORDEN JADELLE:</label>
      <label class="checkbox-inline" style="margin-top:-9px"><!--PREGUNTAR SANTIAGO-->
        <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"orden_jadelle","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['orden_jadelle']),true)?>
      </label>
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >SUSPENSIÓN:</label>
    <label class="checkbox-inline" style="margin-top:-9px">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"suspension","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['suspension']),true)?>
    </label>
  </div>
 </div>
 <div class="form-group">
   <div class="col-lg-3"> 
    <label for="xxx" >CIRUGIA DE CUELLO UTERINO:</label>
    <label class="checkbox-inline" style="margin-top:-9px">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"cirugia_de_cuello","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['cirugia_de_cuello']),true)?>
    </label>
  </div>
 </div> 
</div>
<br>
<div class="form-group">
  <div class="col-lg-3">
      <label for="xxx" >INICIO:</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="inicio_gineco" type="text" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["inicio_gineco"]?>">
      </div>
    </div>
  <div class="col-lg-3"> 
    <label for="xxx" >FECHA SUSPENCIÓN:</label>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input name="fecha_su_gineco" type="date" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["fecha_su_gineco"]?>">
    </div>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >CITA DE :</label>
    <input name="concep_gineco" type="text" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["concep_gineco"]?>">
    </div>
    <div class="col-lg-3">
      <label for="xxx" >TIPO:</label>
      <select class="form-control input-sm" name="tipooption" >
        <?if(!empty($datgineco[0]["tipooption_gienco"])){?>
        <option select value="<?=$datgineco[0]["tipooption_gienco"]?>"><?=$datgineco[0]["tipooption_gienco"]?></option>
        <?}?>
        <option value="NINGUNO ">NINGUNO</option>
        <option value="LIGADURA DE TROMPAS ">LIGADURA DE TROMPAS</option>
        <option value="VASECTOMIA ">VASECTOMIA</option>
        <option value="DISPOSITIVO INTRAUTERINO HORMONAL">DISPOSITIVO INTRAUTERINO HORMONAL</option>
      <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_metpreserv,"metodo","metodo",$datpaciente->xxx_t3))?>
      </select>
    </div>
    
    
</div>
<br>
<legend>ANTECEDENTES GINECOLOGICOS</legend>
<div class="form-group">
    <div class="col-lg-3">
      <label for="xxx">GESTAS</label>
      <input type="text" name="gestas_gineco" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["gestas_gineco"]?>">
    <br>
    </div>
    <div class="col-lg-3">
      <label for="xxx">PARTOS</label>
      <input type="text" name="partos_gineco" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["partos_gineco"]?>">
    </div>
    <div class="col-lg-3">
      <label for="xxx">VIVOS</label>
      <input type="text" name="vivos_gineco" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["vivos_gineco"]?>">
    </div>
    <div class="col-lg-3">
      <label for="xxx">ABORTOS</label>
      <input type="text" name="abortos_gineco" class="form-control" placeholder="" id="xxx" placeholder="" value="<?=$datgineco[0]["abortos_gineco"]?>">
    <br>
    </div>
    <div class="col-lg-3">
      <label for="xxx">MORTINATOS</label>
      <input type="text" name="mortinatos_gineco" value="<?=$datgineco[0]["mortinatos_gineco"]?>" class="form-control" id="xxx"  placeholder="">
    <br>
    </div>
    <div class="col-lg-3">
      <label for="xxx">CESAREAS</label>
      <input type="text" name="especiales_gineco"  class="form-control" placeholder="" id="xxx" placeholder="" value="<?=$datgineco[0]["especiales_gineco"]?>">
    <br>
    </div>
      <div class="col-lg-10" style="margin-left:-12px">
      <div class="col-lg-6">
            <label for="xxx" >PROCEDIMIENTOS ANTERIORES EN EL CUELLO UTERINO:</label>
            <select class="form-control input-sm" name="proc_cuello_gineco" >
              <?if(!empty($datgineco[0]["proc_cuello_gineco"])){?>
                <option select value="<?=$datgineco[0]["proc_cuello_gineco"]?> "><?=$datgineco[0]["proc_cuello_gineco"]?></option>
              <?}?>
              <option value="NINGUNO ">NINGUNO</option>
              <option value="CAUTERIZACION ">CAUTERIZACION</option>
              <option value="HISTERECTOMIA ">HISTERECTOMIA</option>
              <option value="CONIZACION">CONIZACION</option>
              <option value="RADIOTERAPIA">RADIOTERAPIA</option>
              <option value="BIOPSIA">BIOPSIA</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
        <div class="col-lg-3">
            <label for="xxx">DESCRIPCION</label>
            <input type="text" name="descrip_proc_gineco" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["descrip_proc_gineco"]?>">
         <br>
        </div> 
        <br>

    </div> 
     <div class="col-lg-10" style="margin-left:-12px">
      <div class="col-lg-4">
            <label for="xxx" >ASPECTO DEL CUELLO UTERINO:</label>
            <select class="form-control input-sm" name="asp_cuello_gineco" >
               <?if(!empty($datgineco[0]["asp_cuello_gineco"])){?>
                <option select value="<?=$datgineco[0]["asp_cuello_gineco"]?> "><?=$datgineco[0]["asp_cuello_gineco"]?></option>
              <?}?>
              <option value="AUSENTE">AUSENTE</option>
              <option value="SANO">SANO</option>
              <option value="ATROFICO">ATROFICO</option>
              <option value="CONGESTIVO">CONGESTIVO</option>
              <option value="ULCERADO">ULCERADO</option>
              <option value="POLIPO">POLIPO</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
          <div class="col-lg-3">
            <label for="xxx">DESCRIPCION</label>
              <input type="text" name="des_asp_gineco" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["des_asp_gineco"]?>">
          </div>
          <div class="col-lg-3">
              <label for="xxx">OBSERVACIONES</label>
              <input type="text" name="obser_gineco" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["obser_gineco"]?>">
          <br>
          </div>
        
  </div> 
</div>
<br>
<legend>OBSTETRICOS</legend>

<div class="form-group">
  <!--<div class="col-lg-3"> 
    <label for="xxx" >CESAREA:</label>
    <input name="xxx" type="text" class="form-control" id="xxx" placeholder="" value="">
  </div>-->
  <div class="col-lg-3"> 
    <label for="fm" >TIPO DE EMBARAZO:</label>
    <input name="tipoem_gineco" type="text" class="form-control form_date" id="xxx" placeholder="" value="<?=$datgineco[0]["tipoem_gineco"]?>"> 
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">       
    <label for="xxx" >HTA:</label>
    <!-- <label class="checkbox-inline">
      <?php /* $this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"xxx","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false),true) */ ?>
    </label> -->
    <select class="form-control" id="xxx" name="hta_gineco">
      <?if(!empty($datgineco[0]["hta_gineco"])){?>
      <option select value="<?=$datgineco[0]["hta_gineco"]?>"><?=$datgineco[0]["hta_gineco"]?></option>
      <?}?>
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
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"infecc_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual" => $datgineco[0]['infecc_gineco']),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >ISOINMUNIZACION:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"iso_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual" => $datgineco[0]['iso_gineco']),true)?>
    </label>
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >DESCRIPCION:</label>
    <input name="descrip_gineco" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["descrip_gineco"]?>">
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3"> 
    <label for="xxx" >ATENCION PRENATAL:</label>
    <input name="aten_pre_gineco" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["aten_pre_gineco"]?>">
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >N° DE CONSULTAS:</label>
    <input name="n_consult_gineco" type="number" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["n_consult_gineco"]?>">
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >EXAMENES COMPLEMENTARIOS:</label>
    <input name="ex_com_gineco" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["ex_com_gineco"]?>">
  </div>
  <div class="col-lg-3"> 
    <label for="xxx" >ALTERADOS:</label>
    <input name="alte_gineco" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["alte_gineco"]?>">
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="xxx" >E. VACUNACION T-D:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"vacuna_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['vacuna_gineco']),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >INFLUENZA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"influe_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['influe_gineco']),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >H. AYB:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"hayb_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['hayb_gineco']),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >F. AMARILLA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"f_ama_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual"=>$datgineco[0]['f_ama_gineco']),true)?>
    </label>
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="xxx" >VARICELA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"varicela_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual" => $datgineco[0]['varicela_gineco']),true)?>
    </label>
  </div>
  <div class="col-lg-3">
    <label for="xxx" >RABIA:</label>
    <label class="checkbox-inline">
      <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"rabia_gineco","valor"=>"Si","btswitchini"=>true,"size"=>"mini","toff"=>'No',"ton"=>'Si',"anim"=>false,"actual" => $datgineco[0]['rabia_gineco']),true)?>
    </label>
  </div>
  <br><br><br>
  <!-- para las tablas que se agregaran complemento aun no funcional -->
  <legend>ANTECEDENTES OBSTETRICOS</legend>
  

  <div class="col-lg-3">
    <label for="xxx" >FPP:</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input name="fpp_gineco" type="date" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["fpp_gineco"]?>">
    </div>
   </div>

<div class="col-lg-3">
      <label for="xxx">Fecha Ultimo Parto</label>
      <input type="date" name="ultimo_parto" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["ultimo_parto_gineco"]?>">
    </div>
    <div class="col-lg-3">
      <label for="xxx">Fecha Ultima Cesarea</label>
      <input type="date" name="ultima_cesarea" class="form-control" id="xxx" placeholder="" value="<?=$datgineco[0]["ultima_cesarea_gineco"]?>">
    </div>
    <div class="col-lg-3">
      <label for="xxx">Malformaciones en el Feto</label>
      <input type="text" name="malformaciones" placeholder="cual" id="xxx" placeholder="" value="<?=$datgineco[0]["malformaciones_gineco"]?>">
      <label for="xxx">Prematuros</label>
      <input type="text" name="prematuros" value="<?=$datgineco[0]["prematuros_gineco"]?>" placeholder="cual">
    </div>
    <div class="col-lg-3">
      <label for="xxx">Edad Gestacional (Semanas)</label>
      <input type="text" name="edadgest" placeholder="Edad Gestacional" id="xxx" placeholder="" value="<?=$datgineco[0]["edadgest_gineco"]?>">
    </div>
</div>


