<script type="text/javascript" >

    

    function mensaje(estatus){
        
        document.getElementById("carga").innerHTML ="<h4>*Si desea omitir alguna factura, haga click en el check.<br> *Si desea buscar alguna factura presione Ctrl+F y coloque el numero de la factura.</h4>";
        //document.getElementById("carga").style.display="none";
    }
   
    
    //alert("aqui esta el archivo");
   function validarcheck(valor,lote){
       
        console.log(valor,lote);
       var datas={"valor": valor,
                 "lote": lote
       };
       
         
            $.ajax({
                data:  datas, //datos que se envian a traves de ajax
                url:   '<?= site_url("json/validar")?>', //archivo que recibe la peticion
                type:  'post', //método de envio
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                      console.log(response); //var obj = JSON.parse(response);
                },
                error:function(response, status){
                     console.log(response);
                      console.log(status);
                }
        });

}
</script>