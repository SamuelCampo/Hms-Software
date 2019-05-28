<script>
	$('#clonar').click(function(event) {
	  var divclonado = $('#contain').clone(true);
      divclonado.find("input").attr("readonly",true);
      divclonado.find("select").attr("readonly",true);
      divclonado.find("*").removeAttr("id");
      divclonado.insertAfter("#plantrabajo");
      limpiaplantilla();
	});
</script>