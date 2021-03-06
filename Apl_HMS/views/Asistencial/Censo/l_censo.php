<?
  if(!empty($mensaje)){
    echo '<div class="col-lg-12 no-margin no-padding"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<div class="nav-tabs-custom no-padding no-margin">
  <ul class="nav nav-tabs">
    <?php if ($this->db->database == "hms_FUNSABIAM"): ?>
   <li class="active"><a href="#tab_urgencias" data-toggle="tab">Urgencias <span class="badge bg-navy"><?=$numcensourg?></span></a></li>
    <li><a href="#tab_observacion" data-toggle="tab">Observación <span class="badge bg-navy"><?=$numcensoobs?></span></a></li>
    <li><a href="#tab_hospit" data-toggle="tab">Hospitalización <span class="badge bg-navy"><?=$numcensohos?></span></a></li>
    <li><a href="#tab_salas" data-toggle="tab">Salas Cx <span class="badge bg-navy"><?=$numcensosal?></span></a></li>
    <li><a href="#tab_uci" data-toggle="tab">UCI <span class="badge bg-navy"><?=$numcensouci?></span></a></li>
    <li><a href="#tab_inter" data-toggle="tab">Intermedios <span class="badge bg-navy"><?=$numcensouci?></span></a></li>
    <li><a href="#tab_fac" data-toggle="tab">Facturación y Glosa <span class="badge bg-navy"><?=$numcensofac?></span></a></li>
    <?php else: ?>
    <li class="active"><a href="#tab_uci" data-toggle="tab">UCI <span class="badge bg-navy"><?=$numcensouci?></span></a></li>
    <li><a href="#tab_inter" data-toggle="tab">Intermedios <span class="badge bg-navy"><?=$numcensouci?></span></a></li>
    <li><a href="#tab_fac" data-toggle="tab">Facturación y Glosa <span class="badge bg-navy"><?=$numcensofac?></span></a></li> 
    <li><a href="#sala_cirugia" data-toggle="tab">Sala de CX<span class="badge bg-navy"><?=$numcensofac?></span></a></li> 
    <?php endif ?>
   
    <!--<li><a href="#tab_cex" data-toggle="tab">Consulta Externa</a></li>-->
  </ul>
  <div class="tab-content">
    <div id="tab_urgencias" class="tab-pane active no-padding no-margin">
      <?=$censourg?>
    </div>
    <div id="tab_observacion" class="tab-pane no-padding no-margin">
      <?=$censoobs?>
    </div>
    <div id="tab_hospit" class="tab-pane no-padding no-margin">
      <?=$censohos?>
    </div>
    <div id="tab_salas" class="tab-pane no-padding no-margin">
      <?=$censosal?>
    </div>
    <div id="tab_uci" class="tab-pane no-padding no-margin">
      <?=$censouci?>
    </div>
    <div id="tab_inter" class="tab-pane no-padding no-margin">
      <?=$censouci?>
    </div>
    <div id="tab_fac" class="tab-pane no-padding no-margin">
      <?=$censofac?>
    </div>
    <div id="tab_cex" class="tab-pane no-padding no-margin">
      <?=$censocex?>
    </div>
    <div id="sala_cirugia" class="tab-pane no-padding no-margin">
      <?=$censocex?>
    </div>
  </div>
</div>