<?if($this->Modulo->verifacceso("CENSO")){?>
  <div class="col-lg-row">
      <div class="box box-primary">
        <div class="panel-heading <?=$this->Planthtml->estilo->colorprinc?> cajapanelprinctit">
          <h3 class="panel-title "><a href="<?=site_url('/pacientes/censo')?>">Censo</a></h3>
        </div>
          <div class="box-body no-padding">
              <?=$censo?>
          </div><!-- /.box-body -->
      </div><!-- /. box -->
  </div><!-- /.col -->
<?}?>
<?
if($this->Modulo->infoentidad->tipo_t75=='CONSULTORIO'){
  $this->load->view('Plantilla/v_panel_indicadores_consultorio',"","Refresh");
}
if($this->Modulo->infoentidad->tipo_t75=='IPS'){
  $this->load->view('Plantilla/v_panel_indicadores_ips',"","Refresh");
}
?>