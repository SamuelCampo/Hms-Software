<div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_liquidacion1" data-toggle="tab">Cargos Liquidación 1</a></li>
            <li><a href="#tab_liquidacion2" data-toggle="tab">Cargos Liquidación 2</a></li>
            <li><a href="#tab_ordenes" data-toggle="tab">Ordenes</a></li>
            <li><a href="#tab_ordenessin" data-toggle="tab">Ordenes sin cargos</a></li>
            <li><a href="#tab_total" data-toggle="tab">Totales</a></li>
          </ul>
<div class="tab-content">
  
 <div class="tab-pane active" id="tab_liquidacion1">
 <legend>Cargos Liquidación 1</legend>
  <table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th >
       Cargo
      </th>
      <th >
       Tipo
      </th>
      <th >
        Codigo
      </th>
      <th >
        Descripcion 
      </th>
      <th >
        Fecha Inicial
      </th>
      <th >
        No de Orden
      </th>
      <th >
        Cantidad
      </th>
      <th >
       Vr.Unidad
      </th>
      <th >
       Vr.Neto
      </th>
      <th >
        Saldo
      </th>
      <th >
        Liquidado
      </th>
      <th >
        Fecha Final
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
           <td>
          </td>
          
          
        </tr>
      <?
    }
  }
  ?>
</table>
 </div>
  
 <div class="tab-pane" id="tab_liquidacion2">
 <legend>Cargos Liquidación 2</legend>
  <table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th >
       Cargo
      </th>
      <th >
       Tipo
      </th>
      <th >
        Codigo
      </th>
      <th >
        Descripcion 
      </th>
      <th >
        Fecha Inicial
      </th>
      <th >
        No de Orden
      </th>
      <th >
        Cantidad
      </th>
      <th >
       Vr.Unidad
      </th>
      <th >
       Vr.Neto
      </th>
      <th >
        Saldo
      </th>
      <th >
        Liquidado
      </th>
      <th >
        Fecha Final
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
           <td>
          </td>
          
          
        </tr>
      <?
    }
  }
  ?>
</table>
 </div>
 
  <div class="tab-pane" id="tab_ordenes">
   <legend>Ordenes</legend>
   <table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      
      <th >
       Tipo
      </th>
      <th >
        Codigo
      </th>
      <th >
        Descripcion 
      </th>
      <th >
        Orden
      </th>
      <th >
       Fecha
      </th>
      <th >
        Saldo
      </th>
      <th >
       Solicita
      </th>
      <th >
       Cargado
      </th>
      <th >
        No cargado
      </th>
      <th >
        Devoluciones
      </th>
      <th >
        Observaciones de enfermeria y/o terapia
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
           <td>
          </td>
          
          
        </tr>
      <?
    }
  }
  ?>
</table>
 </div>

 <div class="tab-pane" id="tab_ordenessin">
   <legend>Ordenes sin Cargos </legend>
   <table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      
      <th >
       Tipo
      </th>
      <th >
        Codigo
      </th>
      <th >
        Descripcion 
      </th>
      <th >
        Orden
      </th>
      <th >
       Fecha
      </th>
      <th >
        Saldo
      </th>
      <th >
       Solicita
      </th>
      <th >
       Cargado
      </th>
      <th >
        No cargado
      </th>
      <th >
        Devoluciones
      </th>
      <th >
        Observaciones de enfermeria y/o terapia
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
           <td>
          </td>
          
          
        </tr>
      <?
    }
  }
  ?>
</table>
 </div>

 <div class="tab-pane" id="tab_total">
 <legend>Totales</legend>
  <table class="table" style="margin:0;padding: 0;">
  <thead>
    <tr>
      <th >
      Responsable
      </th>
      <th >
       Factura
      </th>
      <th >
       Valor a pagar
      </th>
      <th >
        Valor Total 
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
          
          
        </tr>
      <?
    }
  }
  ?>
</table>
 </div>
 
         
</div>
</div>
