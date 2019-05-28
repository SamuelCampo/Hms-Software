<script type="text/javascript">
  $( "#form_personal" ).submit(function(){
    if($('#crea_acceso').prop("checked")){
      if($('#firma').val()!=''){
        var ext = $('#firma').val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['png']) == -1) {
            alert('La firma de be ser un archivo con transparencias, de extención png.');
        }
      }
    }
  });
</script>