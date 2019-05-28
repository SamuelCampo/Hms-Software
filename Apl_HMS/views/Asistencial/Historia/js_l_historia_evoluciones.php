<script type="text/javascript">
    function evoldiariverdetalle(idevolucion){
      peticion = null;
      peticion = inicializa_xhr();
      $( "#detevoldiaria").html('Cargando...');
      $( "#detevoldiaria").modal();
      if (peticion) {
        peticion.onreadystatechange = agregarevoldiariverdetalle;
        peticion.open("GET", Ps_Url+'/ajax/historia_evoldiariadetalle/'+idevolucion, true);
        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        peticion.setRequestHeader("Charset","ISO-8859-1");
        peticion.send();
      }
    }
    
    function agregarevoldiariverdetalle(){
      if (peticion.readyState == 4) {
        if (peticion.status == 200) {
          $( "#detevoldiaria").append(peticion.responseText);
        }
      }
    }
      
    
    
</script>