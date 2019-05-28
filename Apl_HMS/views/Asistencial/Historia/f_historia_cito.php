<legend>TOMA DE CITOLOGIA</legend>

  
  <div class="col-lg-10">
      <div class="col-lg-4">
            <label for="xxx" >ESQUEMA:</label>
            <select class="form-control input-sm" name="esquema" >
              <option value="1 VEZ">1 VEZ</option>
              <option value="( 1 - 1 )">( 1 - 1 )</option>
              <option value="( 1 - 1 - 3 )">( 1 - 1 - 3 )</option>
              <option value="( 3 - 3 )">( 3 - 3 )</option>
              <option value="FUERA">FUERA</option>
              <option value="CONTROL">CONTROL</option>
              <option value="OTRO">OTRO</option>
            </select>
            <br>
        </div>
  </div>


<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>SIGNOS VITALES Y MEDIDAS</legend>
      </div>
         <div class="form-group">
           <label for="altura" class="col-lg-1 control-label">Altura </label>
            <div class="col-lg-3">
              <input name="altura" type="number" class="form-control input-sm" placeholder="Cms" id="altura" <?=$deshabingmed?> value="<?=$datconsulta->altura_t64?>" required>
            </div>
            <label for="peso" class="col-lg-1 control-label">Peso</label>
            <div class="col-lg-3">
              <input name="peso" type="number" step="0.01" class="form-control input-sm" placeholder="Kg" id="peso" <?=$deshabingmed?> value="<?=$datconsulta->peso_t64?>" required>
            </div>
            <label for="imc" class="col-lg-1 control-label">IMC</label>
            <div class="col-lg-3">
              <input name="imc" type="number" step="0.01" class="form-control input-sm"  id="imc" <?=$deshabingmed?> value="<?=$datconsulta->imc_t64?>" readonly="readonly">
            </div> 
         </div>
          <div class="form-group">
            <label for="temp" class="col-lg-1 control-label">M. CRANEO:</label>
            <div class="col-lg-3">
              <input name="mcraneo" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->mcraneo_t64?>">
            </div>
            <label for="temp" class="col-lg-1 control-label">M. MUÑECA:</label>
            <div class="col-lg-3">
              <input name="mmuneca" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->mmuneca_t64?>">
            </div>
         <div class="form-group">
            <label for="temp" class="col-lg-1 control-label">P. BRAZO:</label>
            <div class="col-lg-3">
              <input name="pbrazo" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->pbrazo_t64?>">
            </div>
          
            <label for="temp" class="col-lg-1 control-label">P. ABD:</label>
            <div class="col-lg-3">
              <input name="pabd" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->pabd_t64?>">
          </div>
         </div>  
        
        </div>
   </div>
</div>     




      <div class="col-lg-12">
            <label for="xxx">DESCRIPCION DEL PROCEDIMIENTO</label>
            <div class="col-lg-12">
              <input type="text" name="des_asp_gineco" class="form-control" id="xxx" placeholder="" value="">
          </div>

<div class="col-lg-12">
      <div class="col-lg-12">
            <legend>ANTECEDENTES</legend>
      </div>
      <div class="col-lg-12">
          <div class="col-lg-3">
            <label for="xxx" >FUM:</label>
            <div class="input-group" style="display:none">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             </div>
              <input name="fum_gineco" type="date" class="form-control" id="xxx" placeholder="FUM" value="">
            
          
          </div>
          <div class="col-lg-3">
            <label for="xxx" >FPP:</label>
            <div class="input-group" style="display:none">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             </div>
              <input name="fpp_gineco" type="date" class="form-control" id="xxx" placeholder="FPP" value="">
            
          </div>
          
          <div class="col-lg-3">
              <label for="xxx">GESTAS</label>
              <input type="text" name="gestas_gineco" class="form-control" id="xxx" placeholder="Gestas" value="">
            </div>
          <div class="col-lg-3">
              <label for="xxx">CESAREAS</label>
              <input type="text" name="num_cs_gineco" class="form-control" id="xxx" placeholder="Gestas" value="">
            </div>  
            <div class="col-lg-3">
              <label for="xxx">PARTOS</label>
              <input type="text" name="partos_gineco" class="form-control" id="xxx" placeholder="Partos" value="">
            <br>
            </div>
             
      </div>
  <div class="col-lg-12">
          <div class="col-lg-3">
              <label for="xxx">Fecha Ultimo Parto</label>
              <input type="date" name="ultimo_parto" class="form-control" id="xxx" placeholder="Fecha Ultimo Parto" value="">
              <br>
          </div>
          <div class="col-lg-3">
              <label for="xxx">Fecha Ultima Cesarea</label>
              <input type="date" name="ultima_cesarea" class="form-control" id="xxx" placeholder="Fecha Ultima Cesarea" value="">
          </div>
          <div class="col-lg-3">
              <label for="xxx">ABORTOS</label>
              <input type="text" name="abortos_gineco" class="form-control" placeholder="Abortos" id="xxx" placeholder="ABORTOS" value="">
          </div>
           
          <div class="col-lg-3"> 
            <label for="xxx" >INICIO VIDA SEXUAL:</label>
            <input name="inicvs_gineco" type="text" class="form-control form_date" id="xxx" placeholder="Inicio de Vida Sexual" value="">
            <br>
          </div>
          <div class="col-lg-4">    
                <label for="xxx" >NUMERO DE COMPA&Ntilde;EROS SEXUALES:</label>
                <input name="num_cs" type="text" class="form-control form_date" id="xxx" placeholder="Compa&ntilde;eros Sexuales" value="">        
           <br>
          </div>
  </div>

   </div><!--cierre primer grupo-->


  
   <div class="col-lg-12 align-items-center" >
      <div class="col-lg-12">
          <legend>METODOS DE PLANIFICACION</legend>
      </div>
      <div class="row" style="margin-left:20px">
              <div class="col-lg-2"> 
                  <label for="xxx" >ANTICONCEPCION:</label>
               </div>   
               <div class="col-lg-3 "></div>
                <div class="col-lg-2" >
                  <label for="xxx" >TIPO:</label>
                </div>
                  <div class="col-lg-3" style="margin-top: -8px; margin-left: -70px;">
                  <select class="form-control input-sm" name="tipooption" >
                    <option value="NINGUNO ">NINGUNO</option>
                    <option value="LIGADURA DE TROMPAS ">LIGADURA DE TROMPAS</option>
                    <option value="VASECTOMIA ">VASECTOMIA</option>
                    <option value="DISPOSITIVO INTRAUTERINO HORMONAL">DISPOSITIVO INTRAUTERINO HORMONAL</option>
                  <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_metpreserv,"metodo","metodo",$datpaciente->xxx_t3))?>
                  </select>
                  <br>
              </div> 
             <div class="col-lg-3"></div>
                <div class="col-lg-2" >
                  <label for="xxx" >CITA DE:</label>
                </div>
                  <div class="col-lg-3" style="margin-top: -8px; margin-left: -70px;">
                  <select class="form-control input-sm" name="tipooption" >
                    <option value="CONTROL ">CONTROL</option>
                    <option value="1A VEZ">1A VEZ</option>
                    </select>
                  <br>
              </div>   
         </DIV>          
</div>

<div class="col-lg-12">
      <div class="col-lg-12">
        <legend>CITOLOGIA ANTERIOR</legend>
      </div>
      <div class="col-lg-8">
          <div class="col-lg-4">
            <label for="xxx" >F.U. CITOLOGIA:</label>
            <div class="input-group" style="display:none">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div> 
              <input name="fu_citologia_gineco" type="date" class="form-control form_date" id="xxx" placeholder="" value="">
         
            <br>
          </div>
          <div class="col-lg-4"> 
            <label for="xxx" >RESULTADO:</label>
              <select class="form-control input-sm" name="result_gineco" >
                <option value="NORMAL">NORMAL</option>
                <option value="ANORMAL">ANORMAL</option>
                <option value="NO SABE">NO SABE</option>
                </select>
                <br>
            </div>
      </div>
</div>


<div class="col-lg-12">
    <div class="col-log-12">
    <legend>PROCEDIMIENTOS ANTERIORES EN EL CUELLO UTERINO</legend>
    </div>
    <div class="col-lg-10">
      <div class="col-lg-6">
            <label for="xxx" >PROCEDIMIENTOS ANTERIORES EN EL CUELLO UTERINO:</label>
            <select class="form-control input-sm" name="proc_cuello_gineco" >
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
            <input type="text" name="descrip_proc_gineco" class="form-control" id="xxx" placeholder="" value="">
         <br>
        </div> 
    </div>
</div>






<div class="col-lg-12">
  <div class="col-lg-12">
  <legend>ASPECTO DEL CUELLO UTERINO</legend>
  </div>
  <div class="col-lg-10">
      <div class="col-lg-4">
            <label for="xxx" >ASPECTO DEL CUELLO UTERINO:</label>
            <select class="form-control input-sm" name="asp_cuello_gineco" >
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
              <input type="text" name="des_asp_gineco" class="form-control" id="xxx" placeholder="" value="">
          </div>
          <div class="col-lg-12">
              <label for="xxx">OBSERVACIONES</label>
              <input type="text" name="obser_gineco" class="form-control" id="xxx" placeholder="" value="">
          <br>
          </div>
        
  </div>
</div>





