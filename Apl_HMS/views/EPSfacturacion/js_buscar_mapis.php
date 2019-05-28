<script type="text/javascript">
function buscarmapis(valor){
        var parametros = {
                "valor" : valor
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '<?= site_url("json/mapis")?>', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("<h4><span>Procesando, espere por favor...</span></h4>");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        //$("#entidad").val();
                        //console.log(response);
                        
                        var obj = JSON.parse(response);
                        if(obj==''){
                               $("#resultado").html("<h4><span>No se encontro el Mapis solicitado</span></h4>");
                        }else{
                            $("#resultado").html("");
                            
                              var nombre=obj[0].mapDescripcion;
                              //console.log(nombre);
                             //var id= obj[0].idparam_terceros_t16;
                             //$("input#entidad").placeholder(nombre);
                             $("input#valor").val(nombre);
                             //$("input#cod").val(id);
                        }
                }
        });
}
</script>