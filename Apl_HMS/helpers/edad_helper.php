<?php

function calculoedad($fecha_nacimiento,$estatus=false){
        $fecha_actual = date ("Y-m-d"); 
      //$fecha_actual = date ("2006-03-05"); //para pruebas 



      // separamos en partes las fechas 
      $array_nacimiento = explode ( "-", $fecha_nacimiento); 
      $array_actual = explode ( "-", $fecha_actual ); 

      $anos =  $array_actual[0] - $array_nacimiento[0]; // calculamos años 
      $meses = $array_actual[1] - $array_nacimiento[1]; // calculamos meses 
      $dias =  $array_actual[2] - $array_nacimiento[2]; // calculamos días 

      //ajuste de posible negativo en $días 
      if ($dias < 0) 
      { 
          --$meses; 

          //ahora hay que sumar a $dias los dias que tiene el mes anterior de la fecha actual 
          switch ($array_actual[1]) { 
                 case 1:     $dias_mes_anterior=31; break; 
                 case 2:     $dias_mes_anterior=31; break; 
                 case 3:  
                      if (bisiesto($array_actual[0])) 
                      { 
                          $dias_mes_anterior=29; break; 
                      } else { 
                          $dias_mes_anterior=28; break; 
                      } 
                 case 4:     $dias_mes_anterior=31; break; 
                 case 5:     $dias_mes_anterior=30; break; 
                 case 6:     $dias_mes_anterior=31; break; 
                 case 7:     $dias_mes_anterior=30; break; 
                 case 8:     $dias_mes_anterior=31; break; 
                 case 9:     $dias_mes_anterior=31; break; 
                 case 10:     $dias_mes_anterior=30; break; 
                 case 11:     $dias_mes_anterior=31; break; 
                 case 12:     $dias_mes_anterior=30; break; 
          } 

          $dias=$dias + $dias_mes_anterior; 
      } 

      //ajuste de posible negativo en $meses 
      if ($meses < 0) 
      { 
          --$anos; 
          $meses=$meses + 12; 
      } 

      
     if($estatus==false){
        $resultado= $anos." a&ntilde;os con ". $meses." meses y ".$dias." d&iacute;as";
     }else{
        $resultado= $anos;//." años con ". $meses." meses y ".$dias." días";
     }
      
      
      return $resultado;
}

 function bisiesto($anio_actual){ 
          $bisiesto=false; 
          //probamos si el mes de febrero del año actual tiene 29 días 
            if (checkdate(2,29,$anio_actual)) 
            { 
              $bisiesto=true; 
          } 
          return $bisiesto; 
      }

?>