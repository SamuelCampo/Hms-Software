<?
  class Gestexcel extends CI_Model {
    
    function __construct(){
      parent::__construct();
      $this->load->library('Phpexcel/PHPExcel.php');
    }
    
    function prepdatos($arr_datos,$arr_confconsol=false,$arr_campos=false){
      if(is_array($arr_datos)){
        foreach($arr_datos as $arr_reg){
          
          if(is_object($arr_reg)){
            $arr_reg = (array)$arr_reg;
          }
          $arr_filacod = array_map('utf8_encode', $arr_reg);
          if(is_array($arr_campos)){
            foreach($arr_campos as $campo){
              $arr_filacodcamp[$campo]=$arr_filacod[$campo];
            }
            $arr_filacod = $arr_filacodcamp;
          }
          $arr_cod[] = $arr_filacod;
          
          if(is_array($arr_confconsol)){
            foreach($arr_confconsol as $arrdefcons){
              //var_dump($arrdefcons);
              switch($arrdefcons["consol"]){
                case "conteo":
                  $arr_datcons[$arrdefcons["desc"]]["datos"][$arr_filacod[$arrdefcons["campo"]]]++;
                  break;
                case "suma":
                  $arr_datcons[$arrdefcons["desc"]]["datos"][$arr_filacod[$arrdefcons["campo"]]]+=$arr_filacod[$arrdefcons["camposuma"]];
                  break;
              }
            }
          }
        }
        if(is_array($arr_datcons)){
          foreach($arr_datcons as $cons=>$datcons){
            if(is_array($datcons["datos"])){
              foreach($datcons["datos"] as $descreg=>$datreg){
                $arr_datcons[$cons]["tabla"][]=array($descreg,$datreg);
              }
            }
          }
        }
      }
      /*
      $arr_cod=array(
        array('=1+1','=HIPERVINCULO("www.google.com","enlace")','=HYPERLINK("http://www.google.com","abc@def.com")')
      );
      */
      return array("datos"=>$arr_cod,"datoscons"=>$arr_datcons);
    }
    
    function cargarplantilla($rutaplant){
      $objReader = PHPExcel_IOFactory::createReader('Excel2007');
      $objReader->setIncludeCharts(TRUE);
      $objPHPExcel = $objReader->load($rutaplant);
      return $objPHPExcel;
    }
    
    function estiloencabezado($objPHPExcel,$idhoja){
      $objPHPExcel->setActiveSheetIndex($idhoja);
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
     return $objPHPExcel;
    }
      
    
    function escribirdatos($objPHPExcel,$idhoja,$celdaini,$datos){
      $objPHPExcel->setActiveSheetIndex($idhoja);
      if(is_array($datos)){
        $objPHPExcel->getActiveSheet()->fromArray($datos, null, $celdaini);
      }else{
        $objPHPExcel->getActiveSheet()->setCellValue($celdaini,utf8_encode($datos));
      }
    }
    
    function exportar($objPHPExcel,$nomarchivo){
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename="'.$nomarchivo.'"');
      header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      $objWriter->setIncludeCharts(TRUE);
      $objWriter->save('php://output');
    }
    
    function graftorta3d($objPHPExcel,$arr_defgraf){
      $objPHPExcel->setActiveSheetIndex($arr_defgraf->idhoja);
      $objWorksheet = $objPHPExcel->getActiveSheet();
      
      $dataseriesLabels1 = array(
        new PHPExcel_Chart_DataSeriesValues('String', $arr_defgraf->hoja.'!'.$arr_defgraf->etiqcol, NULL, 1),	//	2011
      );
      
      $xAxisTickValues1 = array(
        new PHPExcel_Chart_DataSeriesValues('String', $arr_defgraf->hoja.'!'.$arr_defgraf->etiqfil, NULL, $arr_defgraf->numfil),	//	Q1 to Q4
      );
      
      $dataSeriesValues1 = array(
        new PHPExcel_Chart_DataSeriesValues('Number', $arr_defgraf->hoja.'!'.$arr_defgraf->datfil, NULL, $arr_defgraf->numfil),
      );

      $series1 = new PHPExcel_Chart_DataSeries(
        PHPExcel_Chart_DataSeries::TYPE_PIECHART_3D,				// plotType
        PHPExcel_Chart_DataSeries::GROUPING_STANDARD,			// plotGrouping
        range(0, count($dataSeriesValues1)-1),					// plotOrder
        $dataseriesLabels1,										// plotLabel
        $xAxisTickValues1,										// plotCategory
        $dataSeriesValues1										// plotValues
      );

      $layout1 = new PHPExcel_Chart_Layout();
      $layout1->setShowVal(TRUE);
      $layout1->setShowPercent(FALSE);

      //	Set the series in the plot area
      $plotarea1 = new PHPExcel_Chart_PlotArea($layout1, array($series1));
      //	Set the chart legend
      $legend1 = new PHPExcel_Chart_Legend(PHPExcel_Chart_Legend::POSITION_RIGHT, NULL, false);

      $title1 = new PHPExcel_Chart_Title($arr_defgraf->titulo);


      //	Create the chart
      $chart1 = new PHPExcel_Chart(
        $arr_defgraf->gnom,		// name
        $title1,		// title
        $legend1,		// legend
        $plotarea1,		// plotArea
        true,			// plotVisibleOnly
        0,				// displayBlanksAs
        NULL,			// xAxisLabel
        NULL			// yAxisLabel		- Pie charts don't have a Y-Axis
      );

      //	Set the position where the chart should appear in the worksheet
      $chart1->setTopLeftPosition($arr_defgraf->posizq);
      $chart1->setBottomRightPosition($arr_defgraf->posder);

      //	Add the chart to the worksheet
      $objWorksheet->addChart($chart1);
      return $objPHPExcel;
      
    }
    
  }
    
