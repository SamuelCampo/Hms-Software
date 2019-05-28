<?php //var_dump($inventario); ?>
          <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">Grupo</label>
             <div class="col-lg-3">
               <select name="grupo" id="" class="form-control">
                 <?php if(!empty($inventario['sums'][0]->tipo_t91)){echo "<option value='".$inventario['sums'][0]->tipo_t91."'>".$inventario['sums'][0]->tipo_t91."</option>";}else if(!empty($inventario['cums'][0]->tipo_t73)){echo "<option value='".$inventario['cums'][0]->tipo_t73."'>".$inventario['cums'][0]->tipo_t73."</option>";} ?>
                 <option value="INV">INV</option>
               </select>
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">Codigo del producto</label>
             <div class="col-lg-3">
               <input type="text" name="cod" placeholder="Nombre" value="<?= $this->uri->segment(4)  ?>" class="form-control">
             </div>
             <div class="col-lg-1">
             </div>
           </div>

           <div class="form-group row">
             <label for="identiftipo" class="col-lg-3 control-label">Descripcion del producto</label>
             <div class="col-lg-3">
               <textarea name="desc_s" id="" cols="30" rows="1" class="form-control" placeholder="Descripcion del producto"><?=$inventario['cums'][0]->nombreatc_t73?> <?=$inventario['cums'][0]->principioact_t73?> <?=$inventario['cums'][0]->farmaceutica_t73?> <?=$inventario['cums'][0]->concentracion_t73?><?=$inventario['sums'][0]->nombreatc_t91?> <?=$inventario['sums'][0]->nombreatc_t91?> <?=$inventario['sums'][0]->principioact_t91?> <?=$inventario['sums'][0]->farmaceutica_t91?> <?=$inventario['sums'][0]->concentracion_t91?></textarea>
             </div> 
             <label for="identificacion" class="col-lg-2 control-label">Presentacion del producto</label>
             <div class="col-lg-3">
               <textarea name="pres_s" id="" cols="30" rows="1" class="form-control" placeholder="Presentacion del producto"></textarea>
             </div>
           </div>

           <div class="form-group row">
             <label for="identiftipo" class="col-lg-3 control-label">Cantidad de producto</label>
             <div class="col-lg-3">
               <input name="cantidad" type="number" class="form-control input-sm" id="identificacion" placeholder="Cantidad" value="<?= $inventario['cums'][0]->stock_t73.$inventario['sums'][0]->stock_t91  ?>" required>
             </div> 
             <label for="" class="col-lg-2 control-label">Seleccione</label>
             <div class="col-lg-3">
               <select name="" id="" class="form-control">
                 <option value=""></option>
                 <option value="POS">POS</option>
                 <option value="NO POS">No POS</option>
               </select>
             </div>
           </div>
          <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">Ubicacion</label>
             <div class="col-lg-3">
                <select name="ubicacion" id="" class="form-control">
                 <option value="BODEGA PRINCIPAL">Bodega Principal</option>
                 <option value="RESERVAS">Reservas</option>
                 <option value="CARRO DE PARO">Carro de Paro</option>
               </select>
             </div>
             <label for="identificacion" class="col-lg-2 control-label">Tarifa 1 Precio de Venta</label>
             <div class="col-lg-3">
               <input name="precio2" type="number" class="form-control input-sm" id="identificacion" placeholder="Costo de venta" value="<?= $inventario['cums'][0]->tarifa1_t73.$inventario['sums'][0]->tarifa1_t91  ?>" required>
             </div>
           </div>

           <div class="form-group row">
             <div class="col-lg-1">
             </div>
              <label for="identificacion" class="col-lg-2 control-label">Tarifa 2 Precio compra</label>
              <div class="col-lg-3">
               <input name="precio1" type="number" class="form-control input-sm" id="identificacion" placeholder="" value="<?= $inventario['cums'][0]->tarifa2_t73.$inventario['sums'][0]->tarifa2_t91  ?>" required>
           </div>
           <label for="identificacion" class="col-lg-2 control-label">Procentaje de Ganancia</label>
              <div class="col-lg-3">
               <input name="" type="number" class="form-control input-sm" id="identificacion" placeholder="Cantidad" value="" required>
           </div>
         </div>
         <div class="form-group row">
             <div class="col-lg-1">
             </div>
              <label for="identificacion" class="col-lg-2 control-label">Fecha de Vencimiento</label>
              <div class="col-lg-3">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
               <input type="text" name="fechav" id="fechav" placeholder="F. Vencimiento" value="<?= $inventario['cums'][0]->fecha_v_t73.$inventario['sums'][0]->fecha_v_t91  ?>" class="form-control form_date">
             </div>
           </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-1">
             </div>
           <label for="identificacion" class="col-lg-2 control-label">Stock Minimo</label>
              <div class="col-lg-3">
               <input name="min" type="number" class="form-control input-sm" id="identificacion" placeholder="Cantidad" value="<?=$inventario['cums'][0]->stock_min_t73.$inventario['sums'][0]->stock_min_t91 ?>" required>
              </div>
            </div>
            <div class="form-group row">
             <div class="col-lg-1">
             </div>
           <label for="identificacion" class="col-lg-2 control-label">Laboratorio</label>
              <div class="col-lg-3">
               <input name="labo" type="text" class="form-control input-sm" id="identificacion" placeholder="PROVEEDOR" value="" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-1"> </div>
              <label for="atributos" class="col-lg-2 control-label">Atributos <i class="fa fa-question-circle" data-toggle="tooltipb" data-placement="bottom" title="Colocar los valores separados por coma"></i></label>
              <div class="col-lg-3">
                <input type="text" name="atributos" class="form-control" value="">
              </div>
            </div>

           <div class="form-group row">
             <div class="col-lg-10">
             </div>
             <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
           </div>