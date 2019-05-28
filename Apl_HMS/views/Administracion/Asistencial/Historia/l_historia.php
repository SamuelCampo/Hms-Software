<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>

    <table class="table" style="margin:0;padding: 0;">
      <thead>
        <tr>
          <th >
            Numero de Historia
          </th>
        <th >
            Fecha Ingreso
          </th>
          <th >
            Vía Ingreso
          </th>
          <th >
           Destino 
          </th>
          <th >
            Motivo de colsulta
          </th>
          <th >
            Procedimiento
          </th>
          <th >
            Fecha de programación 
          </th>
          <th >
            Seguro 
          </th>
          <th >
            Fecha Egreso 
          </th>
          </tr>
    </thead>
    <tbody class="listado">
      <?
      if(!empty($datpaciente)){
        foreach($datpaciente as $reg){
          ?>
           <tr>
          <td>
          <a href="<?=site_url('pacientes/historia/nuevo_ingreso_medico')?>"> <?=$reg->	idps_historia_t4?> </a>
          </td>
          <td>
           <?=$reg->fingreso_t4?>
          </td>
           <td>
           <?=$reg->viaing_t4?>
          </td>
          <td>
           <?=$reg->ubicacion_t4?>
          </td>
          <td>
           <?=$reg->motivoing_t4?>
          </td>
          <td >
            <?=$reg->obs_t4?>

          </td>
          <td>

          </td>
          <td>
             <?=$reg->administradora_t3	?> 
          </td>

          <td> 
           <?=$reg->fsalida_t4	?> 
          </td>
        </tr>
          <?
        }
      }
      ?>
    </table>
    <div class="form-group">
      <div class="row text-center">
            <br/>
            <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Imprimir </button>
     </div>
    </div> </form>