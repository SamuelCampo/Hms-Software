<?
  class Exportar extends CI_Model {
    
    function __construct(){
      parent::__construct();
    }
    
    function prepdatos($arr_datos){
      if(is_array($arr_datos)){
        foreach($arr_datos as $arr_reg){
          $arr_cod[] = array_map('utf8_encode', $arr_reg);
        }
      }
      return $arr_cod;
    }
    
    function phpexcel($arr_export){
      $this->load->model('Gestexcel');
      $arr_export["datos"] = $this->Gestexcel->prepdatos($arr_export["datos"]);
      if(is_array($arr_export["datos"])){
        $objPHPExcel = $this->Gestexcel->cargarplantilla($arr_export["plantilla"]);
        $objPHPExcel = $this->Gestexcel->escribirdatos($objPHPExcel,0,$arr_export["celdainidatos"],$arr_export["datos"]);
        $this->Gestexcel->exportar($objPHPExcel,'Informe_Consultas_TIME.xlsx');
      }
    }
    
    function phpexcelprueba($arr_export){
      $this->load->model('Gestexcel');
      $objPHPExcel = $this->Gestexcel->cargarplantilla($arr_export["plantilla"]);
      $objPHPExcel = $this->Gestexcel->escribirdatos($objPHPExcel,0,$arr_export["celdainidatos"],$arr_export["datos"]);
      $this->Gestexcel->exportar($objPHPExcel,'Informe_Consultas_TIME.xlsx');
      exit;

      
      
      
      
      
      if(empty($arr_export["plantilla"])){
        $this->phpexcel->getProperties()->setCreator('HMS')
          ->setLastModifiedBy('HMS')
          ->setTitle($arr_export["desc"])
          ->setSubject($arr_export["desc"])
          ->setDescription($arr_export["desc"])
          ->setKeywords("HMS")
          ->setCategory("HMS");
        $objPHPExcel = $this->phpexcel;
        $objPHPExcel->getActiveSheet()->fromArray($arr_export["datos"]);
      }else{
        $objReader = PHPExcel_IOFactory::createReader('Excel2007');
        $objReader->setIncludeCharts(TRUE);
        $objPHPExcel = $objReader->load($arr_export["plantilla"]);
        /*
        $i=0;
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
          echo"<hr>Hoja $i";
          var_dump($worksheet->getTitle());
          echo"<hr>";
          $chartNames = $worksheet->getChartNames();
          if(is_array($chartNames)) {
            natsort($chartNames);
            foreach($chartNames as $i => $chartName) {
              $chart = $worksheet->getChartByName($chartName);
              echo"<hr>Grafico";
              var_dump($chart);
              echo"<hr>";
            }
          }
        }
        exit;
        */
        

        $objPHPExcel->setActiveSheetIndex(1);
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $chart = $chartplant = $objWorksheet->getChartByName('chart1');
        
        $objPHPExcel->setActiveSheetIndex(2);
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $objWorksheet->fromArray(
          array(
            array('',	'CONSULTAS'),
            array('MED A',   12),
            array('MED B',   40)
          ),null, 'B2'
        );

        //	Set the Labels for each data series we want to plot
        //		Datatype
        //		Cell reference for data
        //		Format Code
        //		Number of datapoints in series
        //		Data values
        //		Data Marker
        $dataseriesLabels = array(
          new PHPExcel_Chart_DataSeriesValues('String', 'INFORME!$C$2', NULL, 1)
        );
        //	Set the X-Axis Labels
        //		Datatype
        //		Cell reference for data
        //		Format Code
        //		Number of datapoints in series
        //		Data values
        //		Data Marker
        $xAxisTickValues = array(
          new PHPExcel_Chart_DataSeriesValues('String', 'INFORME!$B$3:$B$4', NULL, 2),	//	Q1 to Q4
        );
        //	Set the Data values for each data series we want to plot
        //		Datatype
        //		Cell reference for data
        //		Format Code
        //		Number of datapoints in series
        //		Data values
        //		Data Marker
        $dataSeriesValues = array(
          new PHPExcel_Chart_DataSeriesValues('Number', 'INFORME!$C$3', NULL, 1),
          new PHPExcel_Chart_DataSeriesValues('Number', 'INFORME!$C$4', NULL, 1)
        );

        //	Build the dataseries
        $series = new PHPExcel_Chart_DataSeries(
          PHPExcel_Chart_DataSeries::TYPE_PIECHART_3D,		// plotType
          PHPExcel_Chart_DataSeries::GROUPING_STANDARD,	// plotGrouping
          range(0, count($dataSeriesValues)-1),			// plotOrder
          $dataseriesLabels,								// plotLabel
          $xAxisTickValues,								// plotCategory
          $dataSeriesValues								// plotValues
        );
        
        //	Set up a layout object for the Pie chart
        $layout1 = new PHPExcel_Chart_Layout();
        $layout1->setShowVal(TRUE);
        $layout1->setShowPercent(TRUE);

        //	Set the position where the chart should appear in the worksheet
        $chart->setTopLeftPosition('G3');
        $chart->setBottomRightPosition('O18');

        //	Add the chart to the worksheet
        $objWorksheet->addChart($chart);
        
        
        
        
        
        
        
        
        
        $objPHPExcel->setActiveSheetIndex(0);
        if(is_array($arr_export["fmtoencab"])){
          //r52 g 104 b 220
          $default_border = array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb'=>'1006A3')
          );


          $style_header = array(
               'borders' => array(
                   'bottom' => $default_border,
                   'left' => $default_border,
                   'top' => $default_border,
                   'right' => $default_border,
               ),
               'fill' => array(
                   'type' => PHPExcel_Style_Fill::FILL_SOLID,
                   'color' => array('rgb'=>'E1E0F7'),
               ),
               'font' => array(
                   'bold' => true,
               )
           );
          $objPHPExcel->getActiveSheet()->getStyle($arr_export["fmtoencab"]["celdas"])->applyFromArray($style_header);
        }
        $objPHPExcel->getActiveSheet()->fromArray($arr_export["datos"], null, $arr_export["celdainidatos"]);
        
        //$objPHPExcel->getNamedRange('datinforme')->setRange('B16:C18');
      }
      switch ($arr_export["tipo"]){
        case "xls":
          header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
          header('Content-Disposition: attachment;filename="'.$arr_export["archivo"].'"');
          header('Cache-Control: max-age=0');
          $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
          $objWriter->setIncludeCharts(TRUE);
          $objWriter->save('php://output');
          break;
        case "pdf":
          header('Content-type: application/pdf');
          header('Content-Disposition: attachment;filename="'.$arr_export["archivo"].'"');
          header('Cache-Control: max-age=0');
          $objWriter = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
          $rendererLibrary = 'domPDF0.6.0beta3';
          $rendererLibraryPath = APPPATH."/libraries/dompdf";
          PHPExcel_Settings::setPdfRenderer($objWriter, $rendererLibraryPath);
          $objWriter = new PHPExcel_Writer_PDF($objPHPexcel);
          $objWriter->save('php://output');
          break;
      }
    }
    
  }
    
