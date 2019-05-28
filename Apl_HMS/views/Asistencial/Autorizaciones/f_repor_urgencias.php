<meta charset="utf-8">
<?$edad=calculoedad($datpaciente->fnacim_t3);?>
<?php //var_dump($datpaciente); ?>
<legend> CONSENTIMIENTO INFORMADO Y/O AUTORIZACION QUIRURGICA CIRUGIA                                                                              
</legend>

<form action="<?= site_url('pacientes/autorizaciones_agenda/autorizaciones/'.$this->uri->segment(4)."/guardar") ?>" name="form1" method="post">
<div class="col-lg-12">
            <label for="xxx" >TIPO DE CONSENTIMIENTO Y/O CIRUGIA:</label>
            <select class="form-control input-sm" name="titulo_consentimiento" >
              <option value="EXTRACCION DE CATARATA – IMPLANTE DE LENTE INTRAOCULAR.">EXTRACCION DE CATARATA – IMPLANTE DE LENTE INTRAOCULAR.</option>
              <option value="EXTRACCION DE CATARATA – IMPLANTE DE LENTE INTRAOCULAR – IRIDECTOMIA.">EXTRACCION DE CATARATA – IMPLANTE DE LENTE INTRAOCULAR – IRIDECTOMIA.</option>
              <option value="CORRECCION DE EXTRABISMO.">CORRECCION DE EXTRABISMO.</option>
              <option value="RESECCION DE PTERIGION">RESECCION DE PTERIGION.</option>
              <option value="ASPIRACION DIAGNOSTICA DE VITREO CON INYECCION DE MEDICAMENTOS INTRAVITREOS">ASPIRACION DIAGNOSTICA DE VITREO CON INYECCION DE MEDICAMENTOS INTRAVITREOS.</option>
              </select>
            <br>
        </div>
      </div> 

<div class="form-group row">
      <label for="identiftipo" class="col-lg-2 control-label">Tipo de Identificacion</label>
      <div class="col-lg-4">
        <select class="form-control input-sm" name="identiftipo" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_tiposident,"idtipo","tipo",$datpaciente->identiftipo_t3))?>
        </select>
      </div>
      <label for="identificacion" class="col-lg-2 control-label">N° de Identificacion</label>
      <div class="col-lg-4">
        <input <?=$readonly?> name="identificacion" type="text" class="form-control input-sm" id="identificacion" placeholder="No de Identificación" value="<?=$datpaciente->identificacion_t3?>">
      </div>
</div>
<div class="form-group row">
    <label for="prinombre" class="col-lg-2 control-label">Primer Nombre</label>
    <div class="col-lg-4">
      <input  name="nombre1" type="text" class="form-control input-sm" id="nombre1" placeholder="Primer Nombre" value="<?=$datpaciente->nombre1_t3?>">
    </div>
    <label for="senombre" class="col-lg-2 control-label">Segundo Nombre</label>
    <div class="col-lg-4">
      <input  name="nombre2" type="text" class="form-control input-sm" id="nombre2_t1" placeholder="Segundo Nombre" value="<?=$datpaciente->nombre2_t3?>">
    </div>
</div>
     
<div class="form-group row">
      <label for="apellido1" class="col-lg-2 control-label">Primer Apellido</label>
      <div class="col-lg-4">
        <input  name="apellido1" type="text" class="form-control input-sm" id="apellido1" placeholder="Primer Apellido" value="<?=$datpaciente->apellido1_t3?>">
      </div>
      <label for="apellido2" class="col-lg-2 control-label">Segundo Apellido</label>
      <div class="col-lg-4">
        <input  name="apellido2" type="text" class="form-control input-sm" id="apellido2" placeholder="Segundo Apellido" value="<?=$datpaciente->apellido2_t3?>">
      </div>
</div>
<div class="form-group row">
      <label for="edad" class="col-lg-2 control-label">Edad</label>
      <div class="col-lg-4">
        <input name="edad" type="text" class="form-control input-sm"id="ident" placeholder="Edad" value="<?=substr($edad,0,2)?>">
      </div>
      <label for="fnacim" class="col-lg-2 control-label">Fecha de Nacimiento</label>
      <div class="col-lg-4">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
          <input name="fnacim" type="text" class="form-control form_date" id="fnacim" placeholder="Fecha Nacimiento" value="<?=$datpaciente->fnacim_t3?>">
        </div>
      </div>

<div class="form-group row">
       <label for="telefono" class="col-lg-2 control-label">Telefono</label>
      <div class="col-lg-4">
        <input  name="telefono" type="text" class="form-control input-sm" id="telefono" placeholder="Telefono" value="<?=$datpaciente->telefono_t3?>">
      </div>
</div>

     
   </div>
    <div class="form-group row">
      <div class="col-lg-4">
      <label for="administradora" class="col-lg-1 control-label">Administradora</label>
        <select class="form-control input-sm" name="administradora" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_admin,"admin","admin",$datpaciente->rh_t3))?>
        </select>
      </div> 
      <div class="col-lg-3">
      <label for="convenio" class="col-lg-1 control-label">Convenio</label>  
        <select class="form-control input-sm" name="convenio" >
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_convenio,"convenio","convenio",$datpaciente->convenio_t3))?>
        </select>
      </div>
      <div class="col-md-4">
        <label for="altura" class="control-label">FECHA DEL CONSENTIMIENTO</label>
        <input name="fechainf" type="text" readonly class="form-control input-sm fechas_date" id="altura"  value="">
      </div>
    </div> 
    

      <div class="panel panel-default">
       <div class="panel-heading" role="tab" id="headingCM">
         <h4 class="panel-title">
           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCM" aria-expanded="false" aria-controls="collapseCM">
             <i class="glyphicon glyphicon-record"></i> OBJETIVOS - RIEGOS - CARACTERISTICAS DE LA CIRUGIA
           </a>
         </h4>
       </div>    
      <div id="collapseCM" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCM">
         <div class="panel-body">
                     <div class="col-lg-12">
             <ul style="list-style: none">
              <li class="name-list">
                <input type="radio" name="recomendacion-list" style="margin:5px;">La cirugía programada le permitirá disminuir o eliminar las molestias por las cuales usted ha consultado. Existen alternativas médicas de
tratamiento a esta cirugía que me han sido explicadas y he decidido en conjunto con mi médico que en mi caso es recomendable el
tratamiento quirúrgico.
              </li>
              <li class="name-list">
                <input type="radio" name="recomendacion-list" style="margin:5px;">me ha realizado valoración preanestésica, me ha informado y he comprendido claramente la naturaleza y propósito del procedimiento anestésico a realizarse, los riesgos, efectos secundarios y posibles complicaciones anestésicas y perioperatorias tales como:

Nauseas y/o vómito  Traumatismos  Déficit neurológico Convulsiones
Trombosis venosa profunda Dolor postoperatorio  Lesión  vascular y flebitis Trombosis o embolia cerebral
Neumotórax  Estreñimiento Hipotermia/frío Reacciones idiosincráticas
Arritmia, infarto del miocardio, paro cardíaco  Reacciones medicamentosas Tromboembolismo Pulmonar  Lesión dental, de labios, de cornea
Quemaduras  Globo vesical Sangrado, transfusión Dolor de garganta
Laringoespasmo, broncoespasmo Depresión respiratoria  Reacción a cuerpo extraño Muerte
Lesión de cuerdas vocales, tráquea, bronquios, ronquera Neumonitis aspirativa, atelectasias, derrame pleural
              </li>
              
             </ul>
           </div>
          <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">OBJETIVOS</h4>
              <textarea class="form-control" id="recomendaciones" name="objetivos" rows="10"><?=$datconsultaso->cm_recomend_t99?></textarea>
            </div>
          </div>

          <div class="col-lg-12">
            <ul style="list-style: none;">
              <li class="name-lists">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Declaro que se me ha explicado en detalle y que conozco y he comprendido la intervención a la cual seré sometido, sus fines, riesgos que
involucra, las posibles complicaciones, efectos colaterales y daños que puedan producirme.
Se requiere del uso de anestesia, la que será determinada por el médico anestesista atendida las características, beneficios y riesgos para el
datpaciente. Durante la intervención se podrán tomar biopsias (muestra de los tejidos para su examen).
Eventualmente, puede suceder que por complicaciones que se presenten durante la intervención ésta se extienda o deban realizarse
procedimientos adicionales no explicados con anterioridad.
El tiempo de duración del postoperatorio y la hospitalización dependerá de las características particulares de cada datpaciente y de la
intervención quirúrgica. Es también importante que usted sepa que en ocasiones, es posible que durante o después de la intervención sea
necesaria la utilización de sangre y/o hemoderivados (derivados de la sangre).

              </li>
               <li class="name-lists">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Doy fe de que he podido hacer preguntas y he recibido respuestas claras y satisfactorias, soy consciente de que no se me puede garantizar el resultado con respecto a la anestesia que se me aplique ya que las intervenciones de anestesia son de medios y no de resultados. Entiendo que se pueden presentar situaciones imprevistas que requieran procedimientos adicionales, cambio en el tipo de anestesia, traslado a otra institución con mayor nivel de complejidad, hospitalización, etc.  Certifico que la información que he brindado es verídica y se ajusta a la realidad.
              </li>
              </ul>
          </div>
           <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">CARACTERISTICAS</h4>
              <textarea class="form-control" id="recomendacioness" name="caracteristica" rows="10"><?=$datconsultaso->cm_recomend_t99?></textarea>
            </div>
          </div>
          <div class="col-lg-12">
             <ul style="list-style: none">
               <li class="name-listas">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Se considera no presenta restricciones para desempeñar la ocupación
              </li>
              <li class="name-listas">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Presenta restricciones
              </li>
              <li class="name-listas">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Sin cambios desfavorables en su estado de salud
              </li>
              <li class="name-listas">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Satisfactorio
              </li>
              <li class="name-listas">
                <input type="radio" name="recomendacion-list" style="margin:5px;">No satisfactorio
              </li>
              <li class="name-listas">
                <input type="radio" name="recomendacion-list" style="margin:5px;">Puede continuar desempeñando su labor
              </li>
             </ul>
           </div>
          <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">CONSECUENCIAS DE LA CIRUG&iacute;A: </h4>
              <textarea class="form-control" id="recomendacionesa" name="conclusion" rows="10"></textarea>
            </div>
          
      </div>
      <div class="col-lg-12">
            <div class="form-group">
              <h4 class="text-center">RIESGOS PERSONALIZADOS Y OTRAS CIRCUNSTANCIAS:</h4>
              <textarea class="form-control" id="recomendacionesa" name="riesgos_cir" rows="10"></textarea>
            </div>
          
      </div>
        
  </div>
</div>
  <button class="btn <?= $this->estilo->colorprinc ?>">Guardar</button>
</form>
