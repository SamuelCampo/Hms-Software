<!-- Bootstrap Switch -->
<!--
  <script src="<?=$this->Modulo->base_url('Util/bootstrap-switch-master/docs/js/highlight.js')?>"></script>
  <script src="<?=$this->Modulo->base_url('Util/bootstrap-switch-master/dist/js/bootstrap-switch.js')?>"></script>
  <script src="<?=$this->Modulo->base_url('Util/bootstrap-switch-master/docs/js/main.js')?>"></script>
-->
  <script type="text/javascript">
      var numobj;
      var contenedorplanes;
      var idobj;

      numobj = <?=$numobj?>;

      $("#btnagregarseccobjplan").click(function () {
        numobj++;
        peticion = null;
        peticion = inicializa_xhr();
        if (peticion) {
          peticion.onreadystatechange = agregarseccobjplan;
          peticion.open("GET", Ps_Url+'/ajax/historia_evoldiariaplanobj/'+numobj, true);
          peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          peticion.setRequestHeader("Charset","ISO-8859-1");
          peticion.send();
        }
      });

      function agregarseccobjplan(){
        if (peticion.readyState == 4) {
          if (peticion.status == 200) {
            $( "#seccobjplan" ).append(peticion.responseText);
          }
        }
      }

      function btnagregarseccobjplanagplan(contenedor,obj){
        contenedorplanes = contenedor;
        idobj = obj;
        peticion = null;
        peticion = inicializa_xhr();
        if (peticion) {
          peticion.onreadystatechange = agregarseccobjplanagplan;
          peticion.open("GET", Ps_Url+'/ajax/historia_evoldiariaplanobjnp/'+idobj, true);
          peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          peticion.setRequestHeader("Charset","ISO-8859-1");
          peticion.send();
        }
      }

      function agregarseccobjplanagplan(){
        if (peticion.readyState == 4) {
          if (peticion.status == 200) {
            contenedorplanes.append(peticion.responseText);
          }
        }
      }



  </script>