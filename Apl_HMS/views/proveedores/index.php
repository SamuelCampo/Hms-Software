<div class="container">
  <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Nuevo Proveedor</a></li>
      </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_paciente">
        <form class="form-horizontal" role="form" action="<?=site_url("proveedor/administracion/nuevo/guardar")?>" method="post">
         	<?= $this->load->view('proveedores/form_proveedores',"", true); ?>
        </form>
      </div>
    </div>
  </div>
<!-- <script type="text/javascript">
  $(".form_date").datetimepicker({
    format: 'yyyy-mm-dd',
    language:  'es',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
  });
</script> -->
</div>