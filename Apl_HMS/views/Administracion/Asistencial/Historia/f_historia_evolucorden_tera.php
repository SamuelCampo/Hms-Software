    <div class="form-group col-lg-12">
      <div class=" col-lg-2">
        <label  class="control-label">Articulaci�n</label>
        <div class="form-group">
          <label  class="control-label col-lg-8">Cuello</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"CUELLO","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Cabeza</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"CABEZA","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Hombro</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"HOMBRO","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Codo</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"CODO","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Mu�eca</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"MU�ECA","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Dedos</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"DEDOS","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Tronco</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"TRONCO","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Cadera</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"CADERA","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Rodilla</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"RODILLA","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Tobillo</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"TOBILLO","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Pie</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"PIE","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-8">Espalda</label>
          <label class="col-lg-4">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][articulacion][]","valor"=>"ESPALDA","actual"=>$datconsultaso->frfis_iludef_t99  ),true)?>
          </label>
        </div>
      </div>
      <div class=" col-lg-6">
        <center>
          <label  class="control-label">Movimientos</label>
        </center>
        
        <div class="form-group">
          <label  class="control-label col-lg-4">Inversi�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"INVERSI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Eversi�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"EVERSI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Inclinaci�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"INCLINACI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Flexi�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"FLEXI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Desviaci�n Radial</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"DESVIACI�N RADIAL","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Desviaci�n Ulnar</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"DESVIACI�N ULNAR","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Elevaci�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"ELEVACI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Extensi�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"EXTENSI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Supinaci�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"SUPINACI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Pronaci�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"PRONACI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Abducci�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"ABDUCCI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Rotaci�n Interna</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"ROTACI�N INTERNA","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Rotaci�n Externa</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"SI","ROTACI�N EXTERNA"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Plantiflexion</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][plantiflexion]","valor"=>"SI","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Dorsiflexion</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"DORSIFLEXI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
          <label  class="control-label col-lg-4">Aducci�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"ADUCCI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
        <div class="form-group">
          <label  class="control-label col-lg-4">Depresi�n</label>
          <label class="col-lg-2">
            <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][movimientos][]","valor"=>"DEPRESI�N","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
          </label>
        </div>
      </div>
      <div class=" col-lg-4">
        <div class="form-group">
          <label  class="control-label">Medios F�sicos</label>
          <div class="form-group">
            <label  class="control-label col-lg-8">Frio</label>
            <label class="col-lg-4">
              <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][mediosfisicos][]","valor"=>"FRIO","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
            </label>
          </div>
          <div class="form-group">
            <label  class="control-label col-lg-8">Calor</label>
            <label class="col-lg-4">
              <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][mediosfisicos][]","valor"=>"CALOR","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
            </label>
          </div>
          <div class="form-group">
            <label  class="control-label col-lg-8">Contraste</label>
            <label class="col-lg-4">
              <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"detalle[evolterapactiv][mediosfisicos][]","valor"=>"CONTRASTE","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
            </label>
          </div>
        </div>
          

        <div class="form-group">
          <label  class="control-label">Fortalecimiento en</label>
          <select class="form-control input-sm" name="detalle[evolterapactiv][fortalecimiento]" >
            <option>No Aplica</option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_actera["fortalec"],"activ","activ"))?>
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Tipo Corriente</label>
          <select class="form-control input-sm" name="detalle[evolterapactiv][tipocorriente]" >
            <option>No Aplica</option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_actera["tipocorriente"],"activ","activ"))?>
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Resistencia</label>
          <select class="form-control input-sm" name="detalle[evolterapactiv][resistencia]" >
            <option>No Aplica</option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_actera["resistencia"],"activ","activ"))?>
          </select>
        </div>
        <div class="form-group">
          <label  class="control-label">Actividades C.V.</label>
          <select class="form-control input-sm" name="detalle[evolterapactiv][actividadescv]" >
            <option>No Aplica</option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_actera["cardiovasc"],"activ","activ"))?>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group col-lg-12">
      <div class=" col-lg-4">
        <label  class="control-label">Bandas El�sticas</label>
          <select class="form-control input-sm" name="detalle[evolterapactiv][bandaselasticas]" >
            <option>No Aplica</option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_actera["bandaselasticas"],"activ","activ"))?>
          </select>
      </div>
      <div class=" col-lg-4">
        <label  class="control-label">Tiempo</label>
        <input type="number" class="form-control" name="detalle[evolterapactiv][tiempo]" placeholder="Minutos" />
      </div>
      <div class=" col-lg-4">
        <label  class="control-label">Peso</label>
        <input type="number" class="form-control" name="detalle[evolterapactiv][peso]" placeholder="Libras" />
      </div>
    </div>
    <div class="form-group col-lg-12">
      <div class=" col-lg-4">
        <label  class="control-label">Mancuernas</label>
        <select class="form-control input-sm" name="detalle[evolterapactiv][mancuernas]" >
          <option>No Aplica</option>
           <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_sino,"sino","sino"))?>
        </select>
      </div>
      <div class=" col-lg-4">
        <label  class="control-label">Series</label>
        <input type="number" class="form-control" name="detalle[evolterapactiv][series]" />
      </div>
      <div class=" col-lg-4">
        <label  class="control-label">Repeticiones</label>
        <input type="number" class="form-control" name="detalle[evolterapactiv][repeticiones]" />
      </div>
    </div>      