<script src="<?=$this->Modulo->base_url('Util/amcharts/amcharts/amcharts.js')?>" type="text/javascript"></script>
<script src="<?=$this->Modulo->base_url('Util/amcharts/amcharts/serial.js')?>" type="text/javascript"></script>
<?=$this->load->view('Informes/Indicadores/v_indhseq_js',"",true)?>
<?if(is_array($indicador)){?>
    <div id="chartdiv" class="col-lg-10" style="width: 600px; height: 400px;"></div>
<?}?>