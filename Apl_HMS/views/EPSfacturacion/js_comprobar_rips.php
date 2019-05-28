<script type="text/javascript" >


  var data = new Array();
  var contenido = new Array();
   function leerArchivo(e) {
      
       
  var archivo = e.target.files[0];
  
  if (!archivo) {
    return;
  }
  
      var lector = new FileReader();
      lector.onload = function(e) {
        // salto de linea= /\n/
        // remplazo replace(/\n/,';')
          
        var contenido= e.target.result;
       var contenido2 = contenido.filter(Boolean); ;
        //.split(/\n/)  replace("",';')
       console.log(contenido);
     
    
       data[contenido.length];
       
       var cont=0;
            for(var i=0;i<contenido.length;i++){
             
                    if(contenido[i]!=""){
                  // alert(contenido[i]+"no tiene nada");
                     //data[cont]=contenido[i];
                    
                     // cont++;
                    }
            }
             //console.log(data);
      };
      lector.readAsText(archivo);
   
   }

function mostrarContenido(contenido) {
  var elemento = document.getElementById('contenido-archivo');
  elemento.innerHTML = contenido;
}

document.getElementById('file-input')
 .addEventListener('change', leerArchivo, false);
    
    /*ABRIR TODOS LOS ARCHIVOS, 
        VERIFICAR AL ESTRUCTURA EL NUMERO, VERIFICAR EL TIPO DE DATOS CON EL EXCEL, COMPROBAR EL NUMERO DE FILAS
    
    */
</script>