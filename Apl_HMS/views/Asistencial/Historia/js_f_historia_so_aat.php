<script type="text/javascript">
  $(".form_date").daterangepicker({
    locale: {
      format: 'YYYY-MM-DD'
    },
    showDropdowns: true,
    timePicker: false,
    singleDatePicker:true
  });
  
  
  $("#btnagregaraat").click(function(){
    var divclonado = $('#cont_filaaat').clone(true);
    divclonado.find("*").removeAttr("id");
    divclonado.insertAfter("#cont_filaaat");
    $('#cont_filaaat').find('input').val('');
  });
</script>