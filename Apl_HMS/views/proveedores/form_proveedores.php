       <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="" class="col-lg-2 control-label">Nombre</label>
             <div class="col-lg-3">
               <input type="text" name="nombre_pro" placeholder="Nombre" class="form-control" value="<?= $this->input->post('nombre_pro')  ?>">
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">NIT</label>
             <div class="col-lg-3">
               <input type="text" name="nit" placeholder="NIT" class="form-control" value="<?= $this->input->post('nit')  ?>">
             </div>
             <div class="col-lg-1">
             </div>
           </div>

           <div class="form-group row">
             <label for="identiftipo" class="col-lg-3 control-label">Contacto</label>
             <div class="col-lg-3">
               <input type="text" name="contacto" placeholder="Nombre" class="form-control" value="<?= $this->input->post('contacto')  ?>">
             </div> 
             <label for="" class="col-lg-2 control-label">Telefono</label>
             <div class="col-lg-3">
               <input name="telefono" type="number" class="form-control input-sm" id="identificacion" placeholder="Telefono" value="<?= $this->input->post('telefono') ?>" required>
             </div>
           </div>

           <div class="form-group row">
             <label for="identiftipo" class="col-lg-3 control-label">Correo</label>
             <div class="col-lg-3">
               <input name="correo" type="email" class="form-control input-sm" id="identificacion" placeholder="Correo" value="<?= $this->input->post('correo') ?>" required>
             </div> 
             <label for="" class="col-lg-2 control-label">Direccion</label>
             <div class="col-lg-3">
            <textarea name="direccion" id="" cols="30" rows="1" class="form-control" placeholder="Direccion"><?=$this->input->post('direccion'); ?></textarea>
             </div>
           </div>

          <div class="form-group row">
             <div class="col-lg-1">
             </div>
             <label for="identiftipo" class="col-lg-2 control-label">Plaso de Pago</label>
             <div class="col-lg-3">
              <input type="text" name="plaso_pago" placeholder="Plaso de Pago" class="form-control" value="<?= $this->input->post('plaso_pago') ?>">
             </div>
             <label for="" class="col-lg-2 control-label">Forma de Pago</label>
             <div class="col-lg-3">
               <input type="text" name="forma_pago" placeholder="Forma de Pago" class="form-control" value="<?= $this->input->post('forma_pago'); ?>">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-10">
             </div>
             <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
           </div>