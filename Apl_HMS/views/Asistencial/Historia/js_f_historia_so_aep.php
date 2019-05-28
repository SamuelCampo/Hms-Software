<script type="text/javascript">
  $(".form_date").daterangepicker({
    locale: {
      format: 'YYYY-MM-DD'
    },
    showDropdowns: true,
    timePicker: false,
    singleDatePicker:true
  });
  
  
  $("#btnagregaraep").click(function(){
    var divclonado = $('#cont_filaaep').clone(true);
    divclonado.find("*").removeAttr("id");
    divclonado.insertAfter("#cont_filaaep");
    $('#cont_filaaep').find('input').val('');
  });
</script>