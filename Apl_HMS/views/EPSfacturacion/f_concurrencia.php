  <div class="row">
    
    <div class="col-lg-12">
      <div class="form-group no-marign no-padding">
        <div class="col-lg-2">
          <label>TIPO</label>
        </div>
        <div class="col-lg-5">
          <label>DESCRIP</label>
        </div>
        <div class="col-lg-1">
          <label>CANT</label>
        </div>
        <div class="col-lg-2">
          <label>V Unit</label>
        </div>
        <div class="col-lg-2">
          <label>V Total</label>
        </div>
      </div>
    </div>
    <div clas="col-lg-12">
       <form method="post" action="<?=site_url('/epsfact/guardar_concurrencia')?>">
         <? if(!empty($usuario)){ ?>
         <? foreach($usuario as $user){?>
         <!-- valores del paciente ocultos -->
         <input type="hidden" name="valorrad" value="value="<?=number_format($datfac->valor_t96)?>"">
         <input type="hidden" name="fechaeg" value="value="<?=$datfac->fegreso_t96?>"">
         <input type="hidden" name="fechaing" value="value="<?=$datfac->fingreso_t96?>"">
         <input type="hidden" name="idpaciente" value="<?= $user['pacid_t96'] ?>">
         <input type="hidden" name="pacientenombre" value="<?= $user['pacnom_t96'] ?>">
         <input type="hidden" name="tercerid" value="<?= $user['tercid_t96'] ?>">
         <input type="hidden" name="factura" value="<?= $user['factnum_t96'] ?>">
         
                 <?
                              }
                            }
                       ?>
         
             <? if(!empty($registro)){  ?>
                <? foreach($registro as $regis){?>

            <div class="form-group no-margin no-padding" style="font-size:.8em">
              <div class="col-lg-1 no-margin no-padding"><label>GLOSA:</label></div>
              <div class="col-lg-3 no-margin no-padding">
                <input name="tipo" type="text" class="form-control tglosa" value="" placeholder="TIPO">
              </div>
              <div class="col-lg-3 no-margin no-padding">
                <input type="text" value="TRANSITORIO" readonly name="caracter" class="form-control">
              </div>
              <div class="col-lg-1 no-margin no-padding">
                <input name="cant" type="text" class="form-control" value="1" style="text-align:right" placeholder="1" value="1" readonly>
              </div>
              <div class="col-lg-2 no-margin no-padding">
                <input name="valorunit" type="text" class="form-control" value="<?= $regis['valor'] ?>$" style="text-align:right" placeholder="$" readonly>
              </div>
              <div class="col-lg-2 no-margin no-padding">
                <input name="valortotal" type="text" class="form-control" value="<?= $regis['valor'] ?>$" style="text-align:right" placeholder="$" readonly>
              </div>
            </div>
            <div class="form-group no-margin no-padding" style="font-size:.8em">
              <div class="col-lg-1 no-margin no-padding"></div>
              <div class="col-lg-11 no-margin no-padding">
                <input name="observacion" type="text" class="form-control" value="<?= $regis['descrip_glosa']?>" placeholder="<?= $regis['descrip_glosa']?>" readonly>
              </div>
            </div><br><br>
            <div class="form-group no-margin no-padding">
              <br><br>
             <center><input type="submit" value="Aceptar Glosa" class="btn btn-sm bg-navy"></center> 
            </div><br><br>
            
                        <?
                              }
                            }
                       ?>
          </form>
          
    </div>
    
  </div>

   
        
          
       
 