<script type="text/javascript" >
   
    function activar(){
        var a=document.getElementById("option").value ;
        
                if(a=='Cambiar'){
                    document.getElementById("mostrado").style.display="block";
                    document.getElementById("mostrado2").style.display="block";
                     document.getElementById("mostrado3").style.display="none";
                     document.getElementById("mostrado4").style.display="none";
                }else if(a =='Asignar'){
                    document.getElementById("mostrado3").style.display="block";
                     document.getElementById("mostrado4").style.display="block";
                      document.getElementById("mostrado").style.display="none";
                    document.getElementById("mostrado2").style.display="none";
                }
    }
    
</script>