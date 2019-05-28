<script>
      var chart;

      var chartData = [
          <?
          $numindic=0;
          foreach($indicador as $indic){
            if($numindic>0){?>,<?}
            ?>
          {
              "item": "<?=$indic->descripcion_t95?>",
              "<?=$indic->identificador_t95?>": <?=$indic->valor?>
          }
          <?
            $numindic++;
            $arr_valores[]=$indic->valor;
            $max = max($arr_valores)+10;
          }?>
      ];

      AmCharts.ready(function () {
          // SERIAL CHART
          chart = new AmCharts.AmSerialChart();
          chart.dataProvider = chartData;
          chart.categoryField = "item";
          chart.startDuration = 1;
          chart.depth3D = 50;
          chart.angle = 30;
          chart.marginRight = -30;
          chart.rotate = true;

          // AXES
          // category
          var categoryAxis = chart.categoryAxis;
          categoryAxis.gridAlpha = 0;
          categoryAxis.axisAlpha = 0;
          categoryAxis.gridPosition = "start";

           // value
          var valueAxis = new AmCharts.ValueAxis();
          valueAxis.stackType = "regular";
          valueAxis.gridAlpha = 0.1;
          valueAxis.axisAlpha = 0;
          valueAxis.maximum = "<?=$max?>";
          valueAxis.unit = "";
          chart.addValueAxis(valueAxis);
          
           // LEGEND
          var legend = new AmCharts.AmLegend();
          legend.borderAlpha = 0.2;
          legend.horizontalGap = 10;
          legend.autoMargins = false;
          legend.marginLeft = 20;
          legend.marginRight = 20;
          chart.addLegend(legend);

        // GRAPH
         //  first graph 
        <?foreach($indicador as $indic){?>
          var graph = new AmCharts.AmGraph();
          graph.title = "<?=$indic->descripcion_t95?>";
          graph.valueField = "<?=$indic->identificador_t95?>";
          graph.labelText = "[[<?=$indic->identificador_t95?>]]";
          graph.balloonText = "<b>[[category]]: [[value]]</b>";
          graph.type = "column";
          graph.lineAlpha = 0.5;
          graph.lineColor = "<?=$indic->color_t95?>";
          graph.topRadius = 1;
          graph.fillAlphas = 2.9;
          chart.addGraph(graph);
        <?}?>
          // WRITE
          chart.write("chartdiv");
      });

  </script>