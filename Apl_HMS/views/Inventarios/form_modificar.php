<div class="container">
	<?
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
?>
  <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Nuevo Inventario</a></li>
      </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_paciente">
        <form class="form-horizontal" role="form" action="<?=site_url("inventarios/stock/modificar/".$this->uri->segment(4)."/guardar")?>" method="post">
         	<?= $this->load->view('Inventarios/form_producto',"", true); ?>
        </form>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
                $(document).ready(function(){
                    $(".form_date").daterangepicker({
                    locale: {
                      format: 'YYYY-MM-DD'
                    },
                    showDropdowns: true,
                    timePicker: false,
                    singleDatePicker:true
                  });
                });
</script>
</div>