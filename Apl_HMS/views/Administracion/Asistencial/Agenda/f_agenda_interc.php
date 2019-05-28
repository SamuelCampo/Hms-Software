<form class="form-horizontal" role="form" action="<?=site_url("pacientes/agenda/nuevo/guardar")?>" method="post">
<?
  echo $this->load->view('Asistencial/Agenda/f_agenda_selpac_interc',"",true);
?>
</form>    

<script type="text/javascript">
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
</script>
