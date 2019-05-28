<script type="text/javascript">
  $( "#altura" ).blur(function() {
    masacorp();
  });
  $( "#peso" ).blur(function() {
    masacorp();
  });
  function masacorp(){
    var altura = parseInt($("#altura").val());
    var peso = parseInt($("#peso").val());
    if(!isNaN(altura) && !isNaN(peso)){
      altura = altura/100;
      var imc = peso/(altura*altura);
      $("#imc").val(imc.toFixed(2));
    }
  }
  
  $( "#gmotora" ).blur(function() {
    glasgow();
  });
  $( "#gverb" ).blur(function() {
    glasgow();
  });
  $( "#gocular" ).blur(function() {
    glasgow();
  });
  function glasgow(){
    var gmotora = parseInt($("#gmotora").val());
    var gverb = parseInt($("#gverb").val());
    var gocular = parseInt($("#gocular").val());
    if(!isNaN(gmotora) && !isNaN(gverb) && !isNaN(gocular) ){
      var glsgow = gmotora+gverb+gocular;
      $("#glsgow").val(glsgow.toFixed(0)+'/15');
    }
  }
</script>