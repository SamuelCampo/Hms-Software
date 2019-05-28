<form class="form-horizontal" role="form" action="<?=site_url($urlform)?>" method="post">
  <div class="form-group">
    <label for="fechad" class="col-lg-2 control-label">Periodo</label>
    <div class="col-lg-2">
     <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
       <input name="fechad" type="text" class="form-control form_date" id="fechad" placeholder="Desde" value="">
     </div>
    </div>
    <div class="col-lg-2">
      <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
       <input name="fechah" type="text" class="form-control form_date" id="fechah" placeholder="Hasta" value="">
     </div>
    </div>
    <div class="col-lg-2">
      <div class="input-group">
       <select name="administradoracod" class="form-control input-sm" value="">
            <?php if ($datpaciente->administradora_t3 != ""): ?>
              <?php $this->load->model('tercero'); ?>
              <option value="<?= $datpaciente->administradoracod_t3  ?>"><?= $datpaciente->administradora_t3  ?></option>
            <?php endif ?>
             <option></option> 
             <option value="830080573 PINEDA Y ASOCIADOS ADMINISTRACIONES S.A.S">830080573 PINEDA Y ASOCIADOS ADMINISTRACIONES S.A.S</option>
             <option value="900317686 O & G CONSTRUCCIONES S A S">900317686 O & G CONSTRUCCIONES S A S</option>
             <option value="900592116 CALISAND S.A.S / Franquicia Sandwich Qbano ">900592116 CALISAND S.A.S / Franquicia Sandwich Qbano </option>
           </select>
     </div>
    </div>
    <div class="col-lg-4">
      <p>Campos para imprimir</p>
      <div class="row">
      <?php 
          $fields = $this->db->list_fields('ps_hist_consulta_so_t99');
          $letra='A';
          $num = 1;
          foreach ($fields as $field)
          {
                if ($num == 3 || $num == 5 || $num == 6 || $num == 7 || $num == 4  || $num == 13 || $num == 24 || $num == 26 || $num == 27 || $num == 28 || $num == 29|| $num == 61 || $num == 62 || $num == 63 || $num == 64 || $num == 65 || $num == 66 || $num == 77 || $num == 79 || $num == 80 || $num == 81 || $num == 82 || $num == 82 || $num == 144 || $num == 145 || $num == 146 || $num == 147 || $num == 148 || $num == 149 || $num == 150 || $num == 158 || $num == 159 || $num == 160 || $num == 161 || $num == 162 || $num == 163 || $num == 164 || $num == 165 || $num == 166 || $num == 167 || $num == 168 || $num == 169 || $num == 170 || $num == 171 || $num == 172 || $num == 173 || $num == 174 || $num == 175 || $num == 176 || $num == 177 || $num == 178 || $num == 181 || $num == 182 || $num == 168) {
                  ?><div class="col-md-6 checin"><input type="checkbox" class="checin" name="ocupacional[<?=$field?>]" value="<?= $field ?>" ><?= $field ?></div><?php
                }
                $num++;
          } 
          $fields = $this->db->list_fields('ps_paciente_t3');
          $letra='A';
          $num = 1;
          foreach ($fields as $field)
          {
                if ($num == 2 || $num == 3 || $num == 4 || $num == 5 || $num == 6 || $num == 7 || $num == 8 || $num == 9 || $num == 10 || $num == 11 || $num == 19 || $num == 37 || $num == 38 || $num == 44 ) {
                  ?><div class="col-md-6"><input type="checkbox" class="checin" value="<?= $field ?>" ><?= $field ?></div><?php
                }
                $num++;
          }
          $fields = $this->db->list_fields('ps_hist_consulta_t64');
          $letra='A';
          $num = 1;
          foreach ($fields as $field)
          {
                if ( $num == 5 || $num == 6 || $num == 10 || $num == 13 || $num == 14 || $num == 37 || $num == 42 || $num == 64 || $num == 66 || $num == 68 || $num == 72 || $num == 74 || $num == 76 || $num == 78 || $num == 86 ) {
                  ?><div class="col-md-6"><input type="checkbox" class="checin" value="<?= $field ?>" ><?= $field ?></div> <?php
                }
                $num++;
          }  
       ?>
       </div>
    </div>
    <div class="col-md-6" id="graf">
  </div>
  
    
  </div>
  <div class="form-group">
    <div class="row text-center">
     <br/>
     <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Generar</button>
    </div>
  </div>
</form>
<button id="ver">Graficar</button>