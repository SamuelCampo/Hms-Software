
<script type="text/javascript">
<!--
function confirmation() {
    if(confirm("Realmente desea eliminar?"))
    {
        return true;
    }
    return false;
}
//-->
</script>


<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-6" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<legend>Ordenes Solicitadas</legend>
<table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th >
       Ingreso
      </th>
      <th >
        Fecha de ingreso 
      </th>
      <th >
        Servicio
      </th>
      <th >
        Paciente
      </th>
      <th >
        Estado
      </th>
    </tr>
</thead>
<tbody class="listado">
  <?
  if(!empty($datespecialidades)){
    foreach($datespecialidades as $reg){
      ?>
        <tr>
          <td>
          </td>
          <td>
          </td>
          <td>
          </td>
           <td>
          </td>
          <td>
          </td>
           <td>
          </td>
          <td>
          </td>
          
          
          
        </tr>
      <?
    }
  }
  ?>
</table>