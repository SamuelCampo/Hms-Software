<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Informes extends CI_Controller {
  
  function __construct(){    
    parent::__construct();  
    $this->load->model('Informe');
    $this->load->model('Exportar');
    $this->load->model('modelo_universal');
    $this->load->model('tercero');
  }


    // Informes General por Hospitalizacion
          public function general(){
        if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por General";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo_general',array('urlform'=>'informes/general/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":

          $llamadas=$this->Informe->general();
          //debug($llamadas);
          if(count($llamadas) > 0){
        //Cargamos la librería de excel.
        //$this->load->model('excel');
            $this->load->library('excel');
        //$this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Informe General');
        //Contador de filas
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
         
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('U')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('V')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('X')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Y')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AA')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AC')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AD')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AE')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AF')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AG')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(30);
          $this->excel->getActiveSheet()->getColumnDimension('AK')->setWidth(30);
          $this->excel->getActiveSheet()->getColumnDimension('AL')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AO')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AP')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AR')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AS')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AT')->setWidth(30);
        //////edicion de celdas
        //Le aplicamos negrita a los títulos de la cabecera.
       /* $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        //Definimos los títulos de la cabecera.*/
        ////////////////////informacion del paciente
        $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'IdHistoria');
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'TipoIdentificacion');
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'NroIdentificacion');
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'PrimerNombre');
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'SegundoNombre');
        $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'PrimerApellido');
        $this->excel->getActiveSheet()->setCellValue("G{$contador}", 'SegundoApellido');
        $this->excel->getActiveSheet()->setCellValue("H{$contador}", 'FechaNacimiento');
        $this->excel->getActiveSheet()->setCellValue("I{$contador}", 'Edad');
       /* $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'UnidadMedidaEdad');
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'CiudadNacimiento');*/
        $this->excel->getActiveSheet()->setCellValue("J{$contador}", 'Sexo');
      /*  $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'GrupoSanguineo');
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'FactorRH');*/
        $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'EstadoCivil');
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'Direccion');
        $this->excel->getActiveSheet()->setCellValue("M{$contador}", 'Telefono1');
       // $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'Telefono2');
        $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'CiudadResidencia');
        //$this->excel->getActiveSheet()->setCellValue("V{$contador}", 'ZonaResidencia');
        ////////////////////informacion del paciente
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'FechaCita');
        $this->excel->getActiveSheet()->setCellValue("P{$contador}", 'Ingreso');
        $this->excel->getActiveSheet()->setCellValue("Q{$contador}", 'FechaAtencion');
        $this->excel->getActiveSheet()->setCellValue("R{$contador}", 'Motivo de Consulta');
        $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'ESTADO DE CONSULTAS');
        /*$this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'CodigoAseguradora');
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'DescAseguradora');*/

        $this->excel->getActiveSheet()->setCellValue("T{$contador}", 'CodigoServicio');
        $this->excel->getActiveSheet()->setCellValue("U{$contador}", 'Servicio');
        $this->excel->getActiveSheet()->setCellValue("V{$contador}", 'CodigoDiagnostico');
        $this->excel->getActiveSheet()->setCellValue("W{$contador}", 'DescripcionDiagnostico');

       /* $this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'TipoDiagnostico');
        $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'ClaseDiagnostico');

        $this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'PASist');
        $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'PADiast');*/
        $this->excel->getActiveSheet()->setCellValue("X{$contador}", 'FrecCardiaca');
        $this->excel->getActiveSheet()->setCellValue("Y{$contador}", 'FrecRespiratoria');
        $this->excel->getActiveSheet()->setCellValue("Z{$contador}", 'Temperatura');
        $this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'Peso');
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'Talla');
        $this->excel->getActiveSheet()->setCellValue("AC{$contador}", 'IMC');
        $this->excel->getActiveSheet()->setCellValue("AD{$contador}", 'PerimetroCefalico');
        $this->excel->getActiveSheet()->setCellValue("AE{$contador}", 'PerimetroAbdominal');
        $this->excel->getActiveSheet()->setCellValue("AF{$contador}", 'Medida de Muneca');
        //$this->excel->getActiveSheet()->setCellValue("AT{$contador}", 'CodigoCausaExterna');
         $this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'Sintomatico Respiratorio');
         $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'Sintomatico Piel');
         $this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'Sintomatico Febril');
         $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'Tesion Arterial');
          $this->excel->getActiveSheet()->setCellValue("AK{$contador}", 'Saturacion');
          $this->excel->getActiveSheet()->setCellValue("AL{$contador}", 'Perimetro de brazo');
        $this->excel->getActiveSheet()->setCellValue("AM{$contador}", 'Descripcion CausaExterna');
         $this->excel->getActiveSheet()->setCellValue("AN{$contador}", 'Via de Ingreso');
         $this->excel->getActiveSheet()->setCellValue("AO{$contador}", 'Finalidad de la Consulta');
         $this->excel->getActiveSheet()->setCellValue("AP{$contador}", 'Finalidad del Procedimiento');
        /////////////////7
       /* $this->excel->getActiveSheet()->setCellValue("AV{$contador}", 'CodigoFinalidad');
        $this->excel->getActiveSheet()->setCellValue("AW{$contador}", 'DescripcionFinalidad');*/
        $this->excel->getActiveSheet()->setCellValue("AQ{$contador}", 'TipoIdentificacionMedico');
        $this->excel->getActiveSheet()->setCellValue("AR{$contador}", 'NroIdentificacionMedico');
       /* $this->excel->getActiveSheet()->setCellValue("AZ{$contador}", 'PrimerNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BA{$contador}", 'SegundoNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BB{$contador}", 'PrimerApellidoMedico');
        $this->excel->getActiveSheet()->setCellValue("BC{$contador}", 'SegundoApellidoMedico');*/
        $this->excel->getActiveSheet()->setCellValue("AS{$contador}", 'Nombre Completo');
        $this->excel->getActiveSheet()->setCellValue("AT{$contador}", 'Especialidad');
        $this->excel->getActiveSheet()->setCellValue("AU{$contador}",  'Ubicacion');                 

        //Definimos la data del cuerpo.        
        foreach($llamadas as $l){
           //Incrementamos una fila más, para ir a la siguiente.
           $contador++;
          //debug($l);
           //Informacion de las filas de la consulta.
           ////////////////////informacion del paciente
            $edad=calculoedad($l->fnacim_t3,true);
           $this->excel->getActiveSheet()->setCellValue("A{$contador}", $l->idps_historia_t4);
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", $l->identiftipo_t3);
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->identificacion_t3);
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", utf8_encode($l->nombre1_t3));
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", utf8_encode($l->nombre2_t3));
        $this->excel->getActiveSheet()->setCellValue("F{$contador}", utf8_encode($l->apellido1_t3));
        $this->excel->getActiveSheet()->setCellValue("G{$contador}", utf8_encode($l->apellido2_t3));
        $this->excel->getActiveSheet()->setCellValue("H{$contador}", $l->fnacim_t3);
        $this->excel->getActiveSheet()->setCellValue("I{$contador}", $edad);
       // $this->excel->getActiveSheet()->setCellValue("K{$contador}",'UnidadMedidaEdad');
      //  $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'CiudadNacimiento');
        $this->excel->getActiveSheet()->setCellValue("J{$contador}", $l->genero_t3);
       // $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'GrupoSanguineo');
       // $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'FactorRH');
        $this->excel->getActiveSheet()->setCellValue("K{$contador}", $l->estadocivil_t3);
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", utf8_encode($l->direccion_t3));
        $this->excel->getActiveSheet()->setCellValue("M{$contador}", $l->telefono_t3);
       // $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'Telefono2');
        $this->excel->getActiveSheet()->setCellValue("N{$contador}", $l->municipio_t3);
       // $this->excel->getActiveSheet()->setCellValue("V{$contador}", 'ZonaResidencia');
        ////////////////////informacion del paciente
        ///////////////////informacion de la cita
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", $l->fingreso_t4);
        $this->excel->getActiveSheet()->setCellValue("P{$contador}", $l->estadoingreso_t64
);
        $this->excel->getActiveSheet()->setCellValue("Q{$contador}", $l->fmod_t4);
        $this->excel->getActiveSheet()->setCellValue("R{$contador}", utf8_encode($l->motconsulta_t64));
        $this->excel->getActiveSheet()->setCellValue("S{$contador}", $l->estado_t12);
        ////////////////////////informacion de la cita
       // $this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'CodigoAseguradora');
       // $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'DescAseguradora');

        $this->excel->getActiveSheet()->setCellValue("T{$contador}", $l->codproc_t12);
        $this->excel->getActiveSheet()->setCellValue("U{$contador}",  $l->procedimiento_t12);
        $this->excel->getActiveSheet()->setCellValue("V{$contador}", $l->dxprincipalcod_t64);
        if (!empty($l->dxprincipal_t64)) {
          $diagnostico = utf8_encode($l->dxprincipal_t64);
        }else{
          $diagnostico = utf8_encode($l->dxegreso_t64);
        }
        $this->excel->getActiveSheet()->setCellValue("W{$contador}", $diagnostico);

        //$this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'TipoDiagnostico');
       // $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'ClaseDiagnostico');
        /////////////////////////historia informacion 
        //$this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'PASist');
       //$this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'PADiast');
        $this->excel->getActiveSheet()->setCellValue("X{$contador}", $l->fc_t64  );
        $this->excel->getActiveSheet()->setCellValue("Y{$contador}", $l->fr_t64  );
        $this->excel->getActiveSheet()->setCellValue("Z{$contador}", $l->temp_t64  );
        $this->excel->getActiveSheet()->setCellValue("AA{$contador}", $l->peso_t64);
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", $l->altura_t64  );

        $this->excel->getActiveSheet()->setCellValue("AC{$contador}", $l->imc_t64  );

        $this->excel->getActiveSheet()->setCellValue("AD{$contador}", $l->mcraneo_t64  );

        $this->excel->getActiveSheet()->setCellValue("AE{$contador}", $l->pabd_t64  );

        $this->excel->getActiveSheet()->setCellValue("AF{$contador}", $l->mmuneca_t64
);
        ////////////falta letra, posicion////sintomatico respiratorio

           $this->excel->getActiveSheet()->setCellValue("AG{$contador}", $l->SINTR_t64
);
           ////////////falta letra, posicion////sintomatico de piel

           $this->excel->getActiveSheet()->setCellValue("AH{$contador}", $l->SINTP_t64

);
              ////////////falta letra, posicion////sintomatico febril

           $this->excel->getActiveSheet()->setCellValue("AI{$contador}", $l->SINTF_t64    
);
               ////////////falta letra, posicion////tension arterial
           $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", $l->ta_t64         
);
               ////////////falta letra, posicion////saturacion

           $this->excel->getActiveSheet()->setCellValue("AK{$contador}", $l->sao2_t64
       
);
       ////////////falta letra, posicion////Perimetro de brazo

           $this->excel->getActiveSheet()->setCellValue("AL{$contador}", $l->pbrazo_t64

       
);
        $this->excel->getActiveSheet()->setCellValue("AM{$contador}", $l->causaext_t64  );

////// via de ingreso
    $this->excel->getActiveSheet()->setCellValue("AN{$contador}", $l->viaing_t64
  );

////// FINALIDAD DE LA CONSULTA
    $this->excel->getActiveSheet()->setCellValue("AO{$contador}", $l->finalconsu_t64

  );

////// FINALIDAD DEL PROCEDIMIENTO
    $this->excel->getActiveSheet()->setCellValue("AP{$contador}", $l->finalproc_t64


  );

        /////////////////historia informacion 
        //$this->excel->getActiveSheet()->setCellValue("AV{$contador}", 'CodigoFinalidad');
        //$this->excel->getActiveSheet()->setCellValue("AW{$contador}", 'DescripcionFinalidad');
        $this->excel->getActiveSheet()->setCellValue("AQ{$contador}", $l->medidentif_t64);
        $this->excel->getActiveSheet()->setCellValue("AR{$contador}",  $l->medident);
       /* $this->excel->getActiveSheet()->setCellValue("AZ{$contador}", 'PrimerNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BA{$contador}", 'SegundoNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BB{$contador}", 'PrimerApellidoMedico');
        $this->excel->getActiveSheet()->setCellValue("BC{$contador}", 'SegundoApellidoMedico');*/
        $this->excel->getActiveSheet()->setCellValue("AS{$contador}",  utf8_encode($l->mednomcomp_t64));
        $this->excel->getActiveSheet()->setCellValue("AT{$contador}",  utf8_encode($l->especialidades_t12));
        $this->excel->getActiveSheet()->setCellValue("AU{$contador}",  utf8_encode($l->ubicacion_t4));
        }
        //Le ponemos un nombre al archivo que se va a generar.
        $date=date("Y-m-d H:i:s");
        $archivo = "informe_general_{$date}.xls";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$archivo.'"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //Hacemos una salida al navegador con el archivo Excel.
        $objWriter->save('php://output');
     }else{
        echo 'No se han encontrado llamadas';
        exit;        
     }
          break;
        }
      }
    }
    

    // Informes General por Hospitalizacion
          public function hospitalizacion(){
        if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por General";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo_general',array('urlform'=>'informes/hospitalizacion/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":
          $llamadas=$this->Informe->generalHospi();
          //debug($llamadas);
          if(count($llamadas) > 0){
        //Cargamos la librería de excel.
        //$this->load->model('excel');
            $this->load->library('excel');
        //$this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Informe General');
        //Contador de filas
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
         
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('U')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('V')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('X')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Y')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AA')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AC')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AD')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AE')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AF')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AG')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(30);
          $this->excel->getActiveSheet()->getColumnDimension('AK')->setWidth(30);
          $this->excel->getActiveSheet()->getColumnDimension('AL')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AO')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AP')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AR')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AS')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AT')->setWidth(30);
        //////edicion de celdas
        //Le aplicamos negrita a los títulos de la cabecera.
       /* $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        //Definimos los títulos de la cabecera.*/
        ////////////////////informacion del paciente
        $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'IdHistoria');
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'TipoIdentificacion');
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'NroIdentificacion');
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'PrimerNombre');
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'SegundoNombre');
        $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'PrimerApellido');
        $this->excel->getActiveSheet()->setCellValue("G{$contador}", 'SegundoApellido');
        $this->excel->getActiveSheet()->setCellValue("H{$contador}", 'FechaNacimiento');
        $this->excel->getActiveSheet()->setCellValue("I{$contador}", 'Edad');
       /* $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'UnidadMedidaEdad');
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'CiudadNacimiento');*/
        $this->excel->getActiveSheet()->setCellValue("J{$contador}", 'Sexo');
      /*  $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'GrupoSanguineo');
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'FactorRH');*/
        $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'EstadoCivil');
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'Direccion');
        $this->excel->getActiveSheet()->setCellValue("M{$contador}", 'Telefono1');
       // $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'Telefono2');
        $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'CiudadResidencia');
        //$this->excel->getActiveSheet()->setCellValue("V{$contador}", 'ZonaResidencia');
        ////////////////////informacion del paciente
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'FechaCita');
        $this->excel->getActiveSheet()->setCellValue("P{$contador}", 'Ingreso');
        $this->excel->getActiveSheet()->setCellValue("Q{$contador}", 'FechaAtencion');
        $this->excel->getActiveSheet()->setCellValue("R{$contador}", 'Motivo de Consulta');
        $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'ESTADO DE CONSULTAS');
        /*$this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'CodigoAseguradora');
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'DescAseguradora');*/

        $this->excel->getActiveSheet()->setCellValue("T{$contador}", 'CodigoServicio');
        $this->excel->getActiveSheet()->setCellValue("U{$contador}", 'Servicio');
        $this->excel->getActiveSheet()->setCellValue("V{$contador}", 'CodigoDiagnostico');
        $this->excel->getActiveSheet()->setCellValue("W{$contador}", 'DescripcionDiagnostico');

       /* $this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'TipoDiagnostico');
        $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'ClaseDiagnostico');

        $this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'PASist');
        $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'PADiast');*/
        $this->excel->getActiveSheet()->setCellValue("X{$contador}", 'FrecCardiaca');
        $this->excel->getActiveSheet()->setCellValue("Y{$contador}", 'FrecRespiratoria');
        $this->excel->getActiveSheet()->setCellValue("Z{$contador}", 'Temperatura');
        $this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'Peso');
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'Talla');
        $this->excel->getActiveSheet()->setCellValue("AC{$contador}", 'IMC');
        $this->excel->getActiveSheet()->setCellValue("AD{$contador}", 'PerimetroCefalico');
        $this->excel->getActiveSheet()->setCellValue("AE{$contador}", 'PerimetroAbdominal');
        $this->excel->getActiveSheet()->setCellValue("AF{$contador}", 'Medida de Muneca');
        //$this->excel->getActiveSheet()->setCellValue("AT{$contador}", 'CodigoCausaExterna');
         $this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'Sintomatico Respiratorio');
         $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'Sintomatico Piel');
         $this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'Sintomatico Febril');
         $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'Tesion Arterial');
          $this->excel->getActiveSheet()->setCellValue("AK{$contador}", 'Saturacion');
          $this->excel->getActiveSheet()->setCellValue("AL{$contador}", 'Perimetro de brazo');
        $this->excel->getActiveSheet()->setCellValue("AM{$contador}", 'Descripcion CausaExterna');
         $this->excel->getActiveSheet()->setCellValue("AN{$contador}", 'Via de Ingreso');
         $this->excel->getActiveSheet()->setCellValue("AO{$contador}", 'Finalidad de la Consulta');
         $this->excel->getActiveSheet()->setCellValue("AP{$contador}", 'Finalidad del Procedimiento');
        /////////////////7
       /* $this->excel->getActiveSheet()->setCellValue("AV{$contador}", 'CodigoFinalidad');
        $this->excel->getActiveSheet()->setCellValue("AW{$contador}", 'DescripcionFinalidad');*/
        $this->excel->getActiveSheet()->setCellValue("AQ{$contador}", 'TipoIdentificacionMedico');
        $this->excel->getActiveSheet()->setCellValue("AR{$contador}", 'NroIdentificacionMedico');
       /* $this->excel->getActiveSheet()->setCellValue("AZ{$contador}", 'PrimerNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BA{$contador}", 'SegundoNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BB{$contador}", 'PrimerApellidoMedico');
        $this->excel->getActiveSheet()->setCellValue("BC{$contador}", 'SegundoApellidoMedico');*/
        $this->excel->getActiveSheet()->setCellValue("AS{$contador}", 'Nombre Completo');
        $this->excel->getActiveSheet()->setCellValue("AT{$contador}", 'Especialidad');
        $this->excel->getActiveSheet()->setCellValue("AU{$contador}",  'Ubicacion');                 

        //Definimos la data del cuerpo.        
        foreach($llamadas as $l){
           //Incrementamos una fila más, para ir a la siguiente.
           $contador++;
          //debug($l);
           //Informacion de las filas de la consulta.
           ////////////////////informacion del paciente
            $edad=calculoedad($l->fnacim_t3,true);
           $this->excel->getActiveSheet()->setCellValue("A{$contador}", $l->idps_historia_t4);
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", $l->identiftipo_t3);
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->identificacion_t3);
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", utf8_encode($l->nombre1_t3));
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", utf8_encode($l->nombre2_t3));
        $this->excel->getActiveSheet()->setCellValue("F{$contador}", utf8_encode($l->apellido1_t3));
        $this->excel->getActiveSheet()->setCellValue("G{$contador}", utf8_encode($l->apellido2_t3));
        $this->excel->getActiveSheet()->setCellValue("H{$contador}", $l->fnacim_t3);
        $this->excel->getActiveSheet()->setCellValue("I{$contador}", $edad);
       // $this->excel->getActiveSheet()->setCellValue("K{$contador}",'UnidadMedidaEdad');
      //  $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'CiudadNacimiento');
        $this->excel->getActiveSheet()->setCellValue("J{$contador}", $l->genero_t3);
       // $this->excel->getActiveSheet()->setCellValue("N{$contador}", 'GrupoSanguineo');
       // $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'FactorRH');
        $this->excel->getActiveSheet()->setCellValue("K{$contador}", $l->estadocivil_t3);
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", utf8_encode($l->direccion_t3));
        $this->excel->getActiveSheet()->setCellValue("M{$contador}", $l->telefono_t3);
       // $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'Telefono2');
        $this->excel->getActiveSheet()->setCellValue("N{$contador}", $l->municipio_t3);
       // $this->excel->getActiveSheet()->setCellValue("V{$contador}", 'ZonaResidencia');
        ////////////////////informacion del paciente
        ///////////////////informacion de la cita
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", $l->fingreso_t4);
        $this->excel->getActiveSheet()->setCellValue("P{$contador}", $l->estadoingreso_t64
);
        $this->excel->getActiveSheet()->setCellValue("Q{$contador}", $l->fmod_t4);
        $this->excel->getActiveSheet()->setCellValue("R{$contador}", utf8_encode($l->motconsulta_t64));
        $this->excel->getActiveSheet()->setCellValue("S{$contador}", $l->estado_t12);
        ////////////////////////informacion de la cita
       // $this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'CodigoAseguradora');
       // $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'DescAseguradora');

        $this->excel->getActiveSheet()->setCellValue("T{$contador}", $l->codproc_t12);
        $this->excel->getActiveSheet()->setCellValue("U{$contador}",  $l->procedimiento_t12);
        $this->excel->getActiveSheet()->setCellValue("V{$contador}", $l->dxprincipalcod_t64);
        if (!empty($l->dxprincipal_t64)) {
          $diagnostico = utf8_encode($l->dxprincipal_t64);
        }else{
          $diagnostico = utf8_encode($l->dxegreso_t64);
        }
        $this->excel->getActiveSheet()->setCellValue("W{$contador}", $diagnostico);

        //$this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'TipoDiagnostico');
       // $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'ClaseDiagnostico');
        /////////////////////////historia informacion 
        //$this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'PASist');
       //$this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'PADiast');
        $this->excel->getActiveSheet()->setCellValue("X{$contador}", $l->fc_t64  );
        $this->excel->getActiveSheet()->setCellValue("Y{$contador}", $l->fr_t64  );
        $this->excel->getActiveSheet()->setCellValue("Z{$contador}", $l->temp_t64  );
        $this->excel->getActiveSheet()->setCellValue("AA{$contador}", $l->peso_t64);
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", $l->altura_t64  );

        $this->excel->getActiveSheet()->setCellValue("AC{$contador}", $l->imc_t64  );

        $this->excel->getActiveSheet()->setCellValue("AD{$contador}", $l->mcraneo_t64  );

        $this->excel->getActiveSheet()->setCellValue("AE{$contador}", $l->pabd_t64  );

        $this->excel->getActiveSheet()->setCellValue("AF{$contador}", $l->mmuneca_t64
);
        ////////////falta letra, posicion////sintomatico respiratorio

           $this->excel->getActiveSheet()->setCellValue("AG{$contador}", $l->SINTR_t64
);
           ////////////falta letra, posicion////sintomatico de piel

           $this->excel->getActiveSheet()->setCellValue("AH{$contador}", $l->SINTP_t64

);
              ////////////falta letra, posicion////sintomatico febril

           $this->excel->getActiveSheet()->setCellValue("AI{$contador}", $l->SINTF_t64    
);
               ////////////falta letra, posicion////tension arterial
           $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", $l->ta_t64         
);
               ////////////falta letra, posicion////saturacion

           $this->excel->getActiveSheet()->setCellValue("AK{$contador}", $l->sao2_t64
       
);
       ////////////falta letra, posicion////Perimetro de brazo

           $this->excel->getActiveSheet()->setCellValue("AL{$contador}", $l->pbrazo_t64

       
);
        $this->excel->getActiveSheet()->setCellValue("AM{$contador}", $l->causaext_t64  );

////// via de ingreso
    $this->excel->getActiveSheet()->setCellValue("AN{$contador}", $l->viaing_t64
  );

////// FINALIDAD DE LA CONSULTA
    $this->excel->getActiveSheet()->setCellValue("AO{$contador}", $l->finalconsu_t64

  );

////// FINALIDAD DEL PROCEDIMIENTO
    $this->excel->getActiveSheet()->setCellValue("AP{$contador}", $l->finalproc_t64


  );

        /////////////////historia informacion 
        //$this->excel->getActiveSheet()->setCellValue("AV{$contador}", 'CodigoFinalidad');
        //$this->excel->getActiveSheet()->setCellValue("AW{$contador}", 'DescripcionFinalidad');
        $this->excel->getActiveSheet()->setCellValue("AQ{$contador}", $l->medidentif_t64);
        $this->excel->getActiveSheet()->setCellValue("AR{$contador}",  $l->medident);
       /* $this->excel->getActiveSheet()->setCellValue("AZ{$contador}", 'PrimerNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BA{$contador}", 'SegundoNombreMedico');
        $this->excel->getActiveSheet()->setCellValue("BB{$contador}", 'PrimerApellidoMedico');
        $this->excel->getActiveSheet()->setCellValue("BC{$contador}", 'SegundoApellidoMedico');*/
        $this->excel->getActiveSheet()->setCellValue("AS{$contador}",  utf8_encode($l->mednomcomp_t64));
        $this->excel->getActiveSheet()->setCellValue("AT{$contador}",  utf8_encode($l->especialidades_t12));
        $this->excel->getActiveSheet()->setCellValue("AU{$contador}",  utf8_encode($l->ubicacion_t4));
        }
        //Le ponemos un nombre al archivo que se va a generar.
        $date=date("Y-m-d H:i:s");
        $archivo = "informe_general_{$date}.xls";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$archivo.'"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //Hacemos una salida al navegador con el archivo Excel.
        $objWriter->save('php://output');
     }else{
        echo 'No se han encontrado llamadas';
        exit;        
     }
          break;
        }
      }
    }
    // Fin del Informe

// Funcion de informe 4505

    function informe_4505(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por Consulta";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo',array('urlform'=>'informes/informe_4505/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":
          $llamada = 1;//$this->informe->acronico();
            if (count($llamada) > 0) {
              $this->load->library('excel');
              $styleArray = array(
              'font'  => array(
                  'bold'  => true,
                  'color' => array('rgb' => 'e8f5e9'),
                  'size'  => 8,
                  'name'  => 'Arial' 
              ),
              'fill' => array( 
                        'type' => PHPExcel_Style_Fill::FILL_SOLID, 
                        'color' => array('rgb'=>'66BB6A')
                    )
              );
              $this->excel->getActiveSheet()->setTitle('Informe 4505');
              $this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AU')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AW')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AX')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AY')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AZ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BA')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BB')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BC')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BD')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BE')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BF')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BG')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BH')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BI')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BJ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BK')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BL')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BM')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BN')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BO')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BP')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BQ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BR')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BS')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BT')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BU')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BV')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BW')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BX')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BY')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('BZ')->setAutoSize(true);

              $this->excel->getActiveSheet()->getColumnDimension('CA')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CB')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CC')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CD')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CE')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CF')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CG')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CH')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CI')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CJ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CK')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CL')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CM')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CN')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CO')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CP')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CQ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CR')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CS')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CT')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CU')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CV')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CW')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CX')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CY')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('CZ')->setAutoSize(true);

              $this->excel->getActiveSheet()->getColumnDimension('DA')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DB')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DC')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DD')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DE')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DF')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DG')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DH')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DI')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DJ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DK')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DL')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DM')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DN')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('DO')->setAutoSize(true);
              //
              $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
              $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'A4:DO4');
              $this->excel->getActiveSheet()->setCellValue('A1',$this->Modulo->infoentidad->nombre_t75);
              $this->excel->getActiveSheet()->setCellValue('A2',"NIT: ".$this->Modulo->infoentidad->nit_t75);
              $this->excel->getActiveSheet()->setCellValue('A3',utf8_encode($this->Modulo->infoentidad->direccion_t75));
              //
              $this->excel->getActiveSheet()->setCellValue('A4',"Tipo de Registro");
              $this->excel->getActiveSheet()->setCellValue('B4',"codigo de Habilitacion IPS primaria");
              $this->excel->getActiveSheet()->setCellValue('C4',"Tipo de Identificacion del usurio");
              $this->excel->getActiveSheet()->setCellValue('D4',"Tipo de identificacion");
              $this->excel->getActiveSheet()->setCellValue('E4',"Numero de identificacion del usuario");
              $this->excel->getActiveSheet()->setCellValue('F4',"Primer Apellido");
              $this->excel->getActiveSheet()->setCellValue('G4',"Segundo apellido del usuario");
              $this->excel->getActiveSheet()->setCellValue('H4',"Primer nombre del usurio");
              $this->excel->getActiveSheet()->setCellValue('I4',"Segundo nombre del usuario");
              $this->excel->getActiveSheet()->setCellValue('J4',"Fecha de Nacimiento");
              $this->excel->getActiveSheet()->setCellValue('K4',"Sexo");
              $this->excel->getActiveSheet()->setCellValue('L4',"Codigo pertenecia etnica");
              $this->excel->getActiveSheet()->setCellValue('M4',"Codigo de Ocupacion");
              $this->excel->getActiveSheet()->setCellValue('N4',"Codigo de nivel educativo");
              $this->excel->getActiveSheet()->setCellValue('O4',"Gestacion");
              $this->excel->getActiveSheet()->setCellValue('P4',"Sifilis Gestacion al o congenita");
              $this->excel->getActiveSheet()->setCellValue('Q4',"Hipertension inducida por la gestacion");
              $this->excel->getActiveSheet()->setCellValue('R4',"Hipotiroidismo Congenito");
              $this->excel->getActiveSheet()->setCellValue('S4',"Sintomatico o respiratorio");
              $this->excel->getActiveSheet()->setCellValue('T4',"Tuberculosis Multidrogoresistente");
              $this->excel->getActiveSheet()->setCellValue('U4',utf8_decode("Lepra"));
              $this->excel->getActiveSheet()->setCellValue('V4',"Obesidad o Desnutricion");
              $this->excel->getActiveSheet()->setCellValue('W4',"Victima de Maltrato");
              $this->excel->getActiveSheet()->setCellValue('X4',"Victima de Violencia Sexual");
              $this->excel->getActiveSheet()->setCellValue('Y4',"Infecciones de Transmision sexual");
              $this->excel->getActiveSheet()->setCellValue('Z4',"Enfermedad Mental");
              $this->excel->getActiveSheet()->setCellValue('AA4',"Cancer de Cervix");
              $this->excel->getActiveSheet()->setCellValue('AB4',"Cancer de Seno");
              $this->excel->getActiveSheet()->setCellValue('AC4',"Flurosis Dental");
              $this->excel->getActiveSheet()->setCellValue('AD4',"Fecha de Peso");
              $this->excel->getActiveSheet()->setCellValue('AE4',"Peso en Kilogrmos");
              $this->excel->getActiveSheet()->setCellValue('AF4',"Fecha de la talla");
              $this->excel->getActiveSheet()->setCellValue('AG4',utf8_decode("Talla en centimetro"));
              $this->excel->getActiveSheet()->setCellValue('AH4',"Fecha Probblemente de Parto");
              $this->excel->getActiveSheet()->setCellValue('AI4',"Edad Gestacion al Nacer");
              $this->excel->getActiveSheet()->setCellValue('AJ4',"BCG");
              $this->excel->getActiveSheet()->setCellValue('AK4',"Hepatitis B menores de 1 aNo");
              $this->excel->getActiveSheet()->setCellValue('AL4',"Pentavalente");
              $this->excel->getActiveSheet()->setCellValue('AM4',"Polio");
              $this->excel->getActiveSheet()->setCellValue('AN4',"DPT Menores de 5 Anos");
              $this->excel->getActiveSheet()->setCellValue('AO4',"Rotavirus");
              $this->excel->getActiveSheet()->setCellValue('AP4',utf8_decode("Neumococo"));
              $this->excel->getActiveSheet()->setCellValue('AQ4',"Influenza de NiNos");
              $this->excel->getActiveSheet()->setCellValue('AR4',"Fiebre Amarilla niNos de 1 aNo");
              $this->excel->getActiveSheet()->setCellValue('AS4',"Hepatitis A");
              $this->excel->getActiveSheet()->setCellValue('AT4',"Triple Viral niNos");
              $this->excel->getActiveSheet()->setCellValue('AU4',"Virus del Ppiloma Humano");
              $this->excel->getActiveSheet()->setCellValue('AV4',"TD o TT Mujeres en Edad Fertil 15 a 49");
              $this->excel->getActiveSheet()->setCellValue('AW4',"Control de Placa Bacteriana");
              $this->excel->getActiveSheet()->setCellValue('AX4',"fecha de Atencion parto o Cesarea");
              $this->excel->getActiveSheet()->setCellValue('AY4',"Fecha de Salida de la atencion del parto o cesaria");
              $this->excel->getActiveSheet()->setCellValue('AZ4',"Fecha de conserjeria en Lactancia");
              $this->excel->getActiveSheet()->setCellValue('BA4',"Control de Recien Nacido");
              $this->excel->getActiveSheet()->setCellValue('BB4',"planificacion Familiar primera Vez");
              $this->excel->getActiveSheet()->setCellValue('BC4',"Suministro de Metodo nticonceptivo");
              $this->excel->getActiveSheet()->setCellValue('BD4',"Fecha Suministro de Metodo nticonceptivo");
              $this->excel->getActiveSheet()->setCellValue('BE4',"Control Prenatal de Primera Vez");
              $this->excel->getActiveSheet()->setCellValue('BF4',"Control Prenatal");
              $this->excel->getActiveSheet()->setCellValue('BG4',"Ultimo Control Prenatal");
              $this->excel->getActiveSheet()->setCellValue('BH4',"Suministro de Acido Folico en el Ultimo Control");
              $this->excel->getActiveSheet()->setCellValue('BI4',"Suministro de Sulfato Ferroso en el Ultimo Control");
              $this->excel->getActiveSheet()->setCellValue('BJ4',"Suministro de Carbonato de Calcio en el ultimo Control");
              $this->excel->getActiveSheet()->setCellValue('BK4',"Valoracion de la Agudeza Visual");
              $this->excel->getActiveSheet()->setCellValue('BL4',"Consulta por Oftalmologia");
              $this->excel->getActiveSheet()->setCellValue('BM4',"Fecha Diagnostico o Desnutricion");
              $this->excel->getActiveSheet()->setCellValue('BN4',"Consulta Mujer o Menor Victima");
              $this->excel->getActiveSheet()->setCellValue('BO4',"Violencia Sexual");
              $this->excel->getActiveSheet()->setCellValue('BP4',"Consulta a Nutricion");
              $this->excel->getActiveSheet()->setCellValue('BQ4',"Consult de Psicologia");
              $this->excel->getActiveSheet()->setCellValue('BR4',"Consulta de Crecimiento Desarrollo Primera vez");
              $this->excel->getActiveSheet()->setCellValue('BS4',"Suministro de Sulfato Ferroso en la Ultima Consulta del Menor de 10 aNos");
              $this->excel->getActiveSheet()->setCellValue('BT4'," Suministro de Vitamina A en la Ultima Consulta del Menor de 10 aNos");
              $this->excel->getActiveSheet()->setCellValue('BU4'," Consulta de Joven Primera Vez");
              $this->excel->getActiveSheet()->setCellValue('BV4',"Consulta de Adulto por Primera Vez");
              $this->excel->getActiveSheet()->setCellValue('BW4',"Preservativos entregado a Pacientes con ITS");
              $this->excel->getActiveSheet()->setCellValue('BX4',"Asesoria Pre Test Elisa para VIH");
              $this->excel->getActiveSheet()->setCellValue('BY4',"Asesoria Post Test Elisa Para VIH");
              $this->excel->getActiveSheet()->setCellValue('BZ4',utf8_encode("Paciente con Diagnóstico de: Ansiedad. Depresión. Esquizofrenia. déficit de atención. consumo SPA y Bipolaridad recibió Atención en los últimos 6 meses por Equipo Interdisciplinario Completo"));
              $this->excel->getActiveSheet()->setCellValue('CA4',"Fecha Antigeno de Superficie Hepatitis B en Gestantes");
              $this->excel->getActiveSheet()->setCellValue('CB4',"Resultado Antigeno de Superficie Hepatitis B en Gestantes");
              $this->excel->getActiveSheet()->setCellValue('CC4',"Fecha Serologia para Sifilis");
              $this->excel->getActiveSheet()->setCellValue('CD4',"Resultado Serologia Para Sifilis");
              $this->excel->getActiveSheet()->setCellValue('CE4',"fecha de Toma de Elisa para VIH");
              $this->excel->getActiveSheet()->setCellValue('CF4',"Resultado Elisa Para VIH");
              $this->excel->getActiveSheet()->setCellValue('CG4',"Fecha TSH Neonatal");
              $this->excel->getActiveSheet()->setCellValue('CH4',"Resultado de TSH Neonatal");
              $this->excel->getActiveSheet()->setCellValue('CI4',"Tamizaje Cancer de Cuello Uterino");
              $this->excel->getActiveSheet()->setCellValue('CJ4',"Citologia Cervico Uterina");
              $this->excel->getActiveSheet()->setCellValue('CK4',"Citologia Cervico Uterina Resultado según Bethesda");
              $this->excel->getActiveSheet()->setCellValue('CL4',"Calidad en muestra de Citologia Cervicouterina");
              $this->excel->getActiveSheet()->setCellValue('CM4',"Codigo de habilitacion IPS donde se toma la citologia Cervicouterina");
              $this->excel->getActiveSheet()->setCellValue('CN4',"Fecha Colposcopia");
              $this->excel->getActiveSheet()->setCellValue('CO4',"Codigo de habilitacion IPS donde se toma Colposcopia");
              $this->excel->getActiveSheet()->setCellValue('CP4',"Fecha Biopsia Cervical");
              $this->excel->getActiveSheet()->setCellValue('CQ4',"resultado de Biopsia Cervical");
              $this->excel->getActiveSheet()->setCellValue('CR4',"Codigo de Habilitacion IPS donde se toma Biopsia Cervical");
              $this->excel->getActiveSheet()->setCellValue('CS4',"Fecha Mamografia");
              $this->excel->getActiveSheet()->setCellValue('CT4',"Resultado Mamografia");
              $this->excel->getActiveSheet()->setCellValue('CU4',"Codigo de Habilitacion IPs donde se toma la mamografia");
              $this->excel->getActiveSheet()->setCellValue('CV4',"Fecha Toma Biopsia seno por BACAF");
              $this->excel->getActiveSheet()->setCellValue('CW4',"Fecha resultado Biopsia seno por BACAF");
              $this->excel->getActiveSheet()->setCellValue('CX4',"Biopsia Seno por BACAF");
              $this->excel->getActiveSheet()->setCellValue('CY4',utf8_encode("Código de habilitación IPS donde se toma Biopsia Seno por BACAF"));
              $this->excel->getActiveSheet()->setCellValue('CZ4',"Fecha Toma de Hemoglobina");
              $this->excel->getActiveSheet()->setCellValue('DA4',"Hemoglobina");
              $this->excel->getActiveSheet()->setCellValue('DB4',"Fecha de la Toma de Glicemia Basal");
              $this->excel->getActiveSheet()->setCellValue('DC4',"Fecha Creatinina");
              $this->excel->getActiveSheet()->setCellValue('DD4',"Creatinina");
              $this->excel->getActiveSheet()->setCellValue('DE4',"Fecha Hemoglobina Glicosilad");
              $this->excel->getActiveSheet()->setCellValue('DF4',"Hemoglobina Glicosilada");
              $this->excel->getActiveSheet()->setCellValue('DG4',"Fecha de Toma de MICROALBUMINURIA");
              $this->excel->getActiveSheet()->setCellValue('DH4',"Fecha de Toma de HDL");
              $this->excel->getActiveSheet()->setCellValue('DI4',"Fecha Toma de Baciloscopia de Diagnostico");
              $this->excel->getActiveSheet()->setCellValue('DJ4',"Basiloscopia de Diagnostico");
              $this->excel->getActiveSheet()->setCellValue('DK4',"Tratamiento par Hiportiroidismo Congenito");
              $this->excel->getActiveSheet()->setCellValue('DL4',"Tratamiento para Sifilis gestacional");
              $this->excel->getActiveSheet()->setCellValue('DM4',"Tratamiento para sifilis congenita");
              $this->excel->getActiveSheet()->setCellValue('DN4',"Tratamiento para Lepra");
              $this->excel->getActiveSheet()->setCellValue('DO4',"Fecha de terminacion tratamiento para Leishmaniasis");
              //      
              $date=date("Y-m-d H:i:s");
              $archivo = "informe_4505_{$date}.xls";
              header('Content-Type: application/vnd.ms-excel');
              header('Content-Disposition: attachment;filename="'.$archivo.'"');
              header('Cache-Control: max-age=0');
              $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
              //Hacemos una salida al navegador con el archivo Excel.
              $objWriter->save('php://output');
            }else{
              echo "No se encontro resultado";
            }
          break;
        }
      }
  }

   function Cyd()
  {
      if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por General";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo_general',array('urlform'=>'informes/Cyd/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
          case 'generar':
            $llamada = $this->Informe->Cyd();
            if (count($llamada) > 0) {
              $this->load->library('excel');
              $styleArray = array(
              'font'  => array(
                  'bold'  => true,
                  'color' => array('rgb' => 'e8f5e9'),
                  'size'  => 8,
                  'name'  => 'Arial' 
              ),
              'fill' => array( 
                        'type' => PHPExcel_Style_Fill::FILL_SOLID, 
                        'color' => array('rgb'=>'66BB6A')
                    )
              );
              $this->excel->getActiveSheet()->setTitle('Informe de Cyd');
              $this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
              $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
              $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'B1:AV1');
              $this->excel->getActiveSheet()->setCellValue('A1',"ITEM");
              $this->excel->getActiveSheet()->setCellValue('B1',utf8_encode("FECHA INSCRIPCIÓN"));
              $this->excel->getActiveSheet()->setCellValue('C1',"IPS");
              $this->excel->getActiveSheet()->setCellValue('D1',"PRIMER NOMBRE");
              $this->excel->getActiveSheet()->setCellValue('E1',"SEGUNDO NOMBRE");
              $this->excel->getActiveSheet()->setCellValue('F1',"PRIMER APELLIDO");
              $this->excel->getActiveSheet()->setCellValue('G1',"SEGUNDO APELLIDO");
              $this->excel->getActiveSheet()->setCellValue('H1',utf8_encode("TIPO INDETIFICACIÓN"));
              $this->excel->getActiveSheet()->setCellValue('I1',utf8_encode("NUMERO INDETIFICACIÓN"));
              $this->excel->getActiveSheet()->setCellValue('J1',"FECHA NACIMIENTO (AAAA-MM-DD)");
              $this->excel->getActiveSheet()->setCellValue('K1',"GENERO");
              $this->excel->getActiveSheet()->setCellValue('L1',"EDAD DE INGRESO AL PROGRAMA ");
              $this->excel->getActiveSheet()->setCellValue('M1',"EDAD");
              $this->excel->getActiveSheet()->setCellValue('N1',"ETNIA");
              $this->excel->getActiveSheet()->setCellValue('O1',utf8_encode("DIRECCIÓN RESIDENCIA"));
              $this->excel->getActiveSheet()->setCellValue('P1',"ZONA");
              $this->excel->getActiveSheet()->setCellValue('Q1',"TELEFONO CELULAR");
              $this->excel->getActiveSheet()->setCellValue('R1',"PRIMERA VEZ EN EL PROGRAMA");
              $this->excel->getActiveSheet()->setCellValue('S1',"LACTANCIA");
              $this->excel->getActiveSheet()->setCellValue('T1',utf8_encode("EDAD (MESES) INICIO ALIMENTACIÓN"));
              $this->excel->getActiveSheet()->setCellValue('U1',"CASOS CENTINELAS");
              $this->excel->getActiveSheet()->setCellValue('V1',"EVENTO DE VIGILANCIA EN SALUD PUBLICA");
              $this->excel->getActiveSheet()->setCellValue('W1',"FECHA EVENTO DE VIGILANCIA(AAAA-MM-DD)");
              $this->excel->getActiveSheet()->setCellValue('X1',"PESO");
              $this->excel->getActiveSheet()->setCellValue('Y1',"TALLA");

              $num= 2;
              //var_dump($llamada[0]);
              //exit();
              foreach ($llamada as $file => $reg ) {
              $this->excel->getActiveSheet()->setCellValue("A{$num}",$reg->idps_paciente_t3);
              $this->excel->getActiveSheet()->setCellValue("B{$num}",$reg->fmod_t3);
              $this->excel->getActiveSheet()->setCellValue("C{$num}","");
              $this->excel->getActiveSheet()->setCellValue("D{$num}",$reg->nombre1_t3);
              $this->excel->getActiveSheet()->setCellValue("E{$num}",$reg->nombre2_t3);
              $this->excel->getActiveSheet()->setCellValue("F{$num}",$reg->apellido1_t3);
              $this->excel->getActiveSheet()->setCellValue("G{$num}",$reg->apellido2_t3);
              $this->excel->getActiveSheet()->setCellValue("H{$num}",$reg->identiftipo_t3);
              $this->excel->getActiveSheet()->setCellValue("I{$num}",$reg->identificacion_t3);
              $this->excel->getActiveSheet()->setCellValue("J{$num}",$reg->fnacim_t3);
              $this->excel->getActiveSheet()->setCellValue("K{$num}",$reg->genero_t3);
              $this->excel->getActiveSheet()->setCellValue("L{$num}","");
              $this->excel->getActiveSheet()->setCellValue("M{$num}","");
              $this->excel->getActiveSheet()->setCellValue("N{$num}","");
              $this->excel->getActiveSheet()->setCellValue("O{$num}",$reg->direccion_t3);
              $this->excel->getActiveSheet()->setCellValue("P{$num}","");
              $this->excel->getActiveSheet()->setCellValue("Q{$num}",$reg->telefono_t3);
              $this->excel->getActiveSheet()->setCellValue("R{$num}","");
              $this->excel->getActiveSheet()->setCellValue("S{$num}","");
              $this->excel->getActiveSheet()->setCellValue("T{$num}","");
              $this->excel->getActiveSheet()->setCellValue("U{$num}","");
              $this->excel->getActiveSheet()->setCellValue("V{$num}","");
              $this->excel->getActiveSheet()->setCellValue("W{$num}","");
              $this->excel->getActiveSheet()->setCellValue("X{$num}","");
              $this->excel->getActiveSheet()->setCellValue("Y{$num}","");
              $num++;
              }
              //      
              $date=date("Y-m-d H:i:s");
              $archivo = "informe_Cyd_{$date}.xls";
              header('Content-Type: application/vnd.ms-excel');
              header('Content-Disposition: attachment;filename="'.$archivo.'"');
              header('Cache-Control: max-age=0');
              $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
              //Hacemos una salida al navegador con el archivo Excel.
              $objWriter->save('php://output');
            }else{
              echo "No se encontro resultado";
            }
            break;
        }
      }
    }

  function cronicos()
  {
      if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por General";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo_general',array('urlform'=>'informes/cronicos/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
          case 'generar':
            $llamada = 1;//$this->informe->acronico();
            if (count($llamada) > 0) {
              $this->load->library('excel');
              $styleArray = array(
              'font'  => array(
                  'bold'  => true,
                  'color' => array('rgb' => 'e8f5e9'),
                  'size'  => 8,
                  'name'  => 'Arial' 
              ),
              'fill' => array( 
                        'type' => PHPExcel_Style_Fill::FILL_SOLID, 
                        'color' => array('rgb'=>'66BB6A')
                    )
              );
              $this->excel->getActiveSheet()->setTitle('Informe de Cronicos');
              $this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AI')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AJ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AK')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AM')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AO')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AP')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AQ')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AR')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AS')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AT')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AU')->setAutoSize(true);
              $this->excel->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true);
              $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
              $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'A4:AV4');
              $this->excel->getActiveSheet()->setCellValue('A1',$this->Modulo->infoentidad->nombre_t75);
              $this->excel->getActiveSheet()->setCellValue('A2',"NIT: ".$this->Modulo->infoentidad->nit_t75);
              $this->excel->getActiveSheet()->setCellValue('A3',utf8_encode($this->Modulo->infoentidad->direccion_t75));
              //
              $this->excel->getActiveSheet()->setCellValue('A4',"NRO PTE");
              $this->excel->getActiveSheet()->setCellValue('B4',"PRIMERO NOMBRE DEL USUARIO");
              $this->excel->getActiveSheet()->setCellValue('C4',"SEGUNDO NOMBRE DEL USUARIO");
              $this->excel->getActiveSheet()->setCellValue('D4',"PRIMER APELLIDO DEL USUARIO");
              $this->excel->getActiveSheet()->setCellValue('E4',"SEGUNDO APELLIDO DEL USUARIO");
              $this->excel->getActiveSheet()->setCellValue('F4',"TIPO DE IDENTIFICACION DEL USUARIO");
              $this->excel->getActiveSheet()->setCellValue('G4',"IDENTIFICACION DEL USUARIO");
              $this->excel->getActiveSheet()->setCellValue('H4',"IPS DE ATENCION");
              $this->excel->getActiveSheet()->setCellValue('I4',"DATOS ANTIGUOS CREATININA");
              $this->excel->getActiveSheet()->setCellValue('J4',"FECHA CREATININA");
              $this->excel->getActiveSheet()->setCellValue('K4',"CREATININA (mg-dl)");
              $this->excel->getActiveSheet()->setCellValue('L4',"FECHA DE CREATININA");
              $this->excel->getActiveSheet()->setCellValue('M4',"TENSION ARTERIAL SISTOLICA (MM DE HG)");
              $this->excel->getActiveSheet()->setCellValue('N4',"TENSION ARTERIAL DIASTOLICA (MM DE HG)");
              $this->excel->getActiveSheet()->setCellValue('O4',"DATOS ANTIGUOS ALBUMINURIA");
              $this->excel->getActiveSheet()->setCellValue('P4',"FECHA ALBUMINURIA");
              $this->excel->getActiveSheet()->setCellValue('Q4',"ALBUMINURIA (MICROALBUMINURIA)");
              $this->excel->getActiveSheet()->setCellValue('R4',"FECHA DE LA ULTIMA ALBUMINURIA");
              $this->excel->getActiveSheet()->setCellValue('S4',"DATOS ANTIGUOS FOSFORO");
              $this->excel->getActiveSheet()->setCellValue('T4',"FECHA DE FOSFORO");
              $this->excel->getActiveSheet()->setCellValue('U4',utf8_decode("FÓSFORO (P) (APLICA SOLO CUANDO EL USUARIO ESTÁ EN DIÁLISIS),EL FOSFORO DEBE SER DEL ÚLTIMO TRIMESTRE Y SU TOMA DEBIÓ SER PREDIÁLISIS EN PERSONAS EN HEMODIÁLISIS"));
              $this->excel->getActiveSheet()->setCellValue('V4',"FECHA DE FOSFORO");
              $this->excel->getActiveSheet()->setCellValue('W4',"DATOS ANTIGUOS HDL");
              $this->excel->getActiveSheet()->setCellValue('X4',"FECHA HDL");
              $this->excel->getActiveSheet()->setCellValue('Y4',"HDL");
              $this->excel->getActiveSheet()->setCellValue('Z4',"FECHA DEL ULTIMO HDL");
              $this->excel->getActiveSheet()->setCellValue('AA4',"DATOS ANTIGUOS HEMOGLOBINA GLOCOSILADA");
              $this->excel->getActiveSheet()->setCellValue('AB4',"FECHA HEMOGLOBINA GLOCOSILADA");
              $this->excel->getActiveSheet()->setCellValue('AC4',"HEMOGLOBINA GLICOSILADA");
              $this->excel->getActiveSheet()->setCellValue('AD4',"FECHA DE ULTIMA HEMOGLOBINA GLICOSILADA");
              $this->excel->getActiveSheet()->setCellValue('AE4',"DATOS ANTIGUOS FILTRACION GLOMERULAR");
              $this->excel->getActiveSheet()->setCellValue('AF4',"FECHA FILTRACION GLOMERULAR");
              $this->excel->getActiveSheet()->setCellValue('AG4',utf8_decode("TASA DE FILTRACIÓN GLOMERULAR (TFG) SEGÚN 
COCKROFT-GAULT (KDQI) Y SWHARTZ (DE 0 A 17 AÑOS) ACLARACION: SIN ENFERMEDAD RENAL Y CON ENFERMEDAD RENAL ESTADIOS 1 Y 2 LA CREATININA DEBE TENER MÁXIMO UN AÑO DE VIGENCIA A LA FECHA DE CORTE. CON ENFERMEDAD RENAL ESTADIOS 3, 4 O MÁS SE ACEPTAN CREATININAS HASTA DE LOS ÚLTIMOS TRES MESES ANTES DE LA FECHA DE CORTE."));
              $this->excel->getActiveSheet()->setCellValue('AH4',"DATOS ANTIGUOS ESTADIO DE ERC (ENFERMEDAD RENAL)");
              $this->excel->getActiveSheet()->setCellValue('AI4',"FECHA ESTADIO DE ERC (ENFERMEDAD RENAL)");
              $this->excel->getActiveSheet()->setCellValue('AJ4',"ESTADIO DE ERC (ENFERMEDAD RENAL: VER LAS NOTAS FINALES NUMERAL V)");
              $this->excel->getActiveSheet()->setCellValue('AK4',"FECHA CONTROL ULTIMO MEDICO");
              $this->excel->getActiveSheet()->setCellValue('AL4',"MES DE INGRESO A MATRIZ");
              $this->excel->getActiveSheet()->setCellValue('AM4',"IMC");
              $this->excel->getActiveSheet()->setCellValue('AN4',"DATOS ANTIGUOS HEMOGLOBINA");
              $this->excel->getActiveSheet()->setCellValue('AO4',"FECHA HEMOGLOBINA");
              $this->excel->getActiveSheet()->setCellValue('AP4',utf8_decode("Hemoglobina, (aplica solo cuando el usuario está en diálisis),  La hemoglobina debe ser realizada cada mes contado a partir de la fecha de corte y su toma debió ser pre-diálisis en personas en hemodiálisis,"));
              $this->excel->getActiveSheet()->setCellValue('AQ4',"FECHA HEMOGLOBINA BASAL");
              $this->excel->getActiveSheet()->setCellValue('AR4',"EL USUARIO TIENE DIAGNOSTICO CONFIRMADO DE HIPERTENSION ARTERIAL - HTA (CIE-10 CON CODIGOS ENTRE | 10-|159)");
              $this->excel->getActiveSheet()->setCellValue('AS4',"FECHA DE DIAGNOSTICO DE LA HIPERTENSION ARTERIAL");
              $this->excel->getActiveSheet()->setCellValue('AT4',"EL USUARIO TIENE DIAGNOSTICO CONFIRMADO DE DIABETES MELLITUS - DM (CIE-10 CON CODIGOS ENTRE E10-E149; O24-0249; P702)");
              $this->excel->getActiveSheet()->setCellValue('AU4',"FECHA DE DIAGNOSTICO DE LA DIABETES MELLITUS");
              $this->excel->getActiveSheet()->setCellValue('AV4',"PERIMETRO ABDOMINAL (CM)");
              //      
              $date=date("Y-m-d H:i:s");
              $archivo = "informe_CRONICOS_{$date}.xls";
              header('Content-Type: application/vnd.ms-excel');
              header('Content-Disposition: attachment;filename="'.$archivo.'"');
              header('Cache-Control: max-age=0');
              $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
              //Hacemos una salida al navegador con el archivo Excel.
              $objWriter->save('php://output');
            }else{
              echo "No se encontro resultado";
            }
            break;
        }
      }
    }
 
   function planificacion_familiar()
  {
    if($this->Modulo->error == false){
    $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / planificacion famiiar";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo',array('urlform'=>'informes/planificacion_familiar/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":
          $llamada = $this->Informe->planificacion_familiar();
          //var_dump($llamada);
          //debug($llamada);
          if (count($llamada) > 0) {
          $this->load->library('excel');
          $this->excel->getDefaultStyle()->getFont()->setName('Arial');
          $this->excel->getActiveSheet()->setTitle('Informe 256');
          $this->excel->setActiveSheetIndex(0);
          $styleArray = array(
          'font'  => array(
              'bold'  => true,
              'color' => array('rgb' => 'e8f5e9'),
              'size'  => 8,
              'name'  => 'Arial' 
          ),
          'fill' => array( 
                    'type' => PHPExcel_Style_Fill::FILL_SOLID, 
                    'color' => array('rgb'=>'66BB6A')
                )
          );
          $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);
          $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
          $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'A4:Z4');
          $this->excel->getActiveSheet()->setCellValue('A1',$this->Modulo->infoentidad->nombre_t75);
          $this->excel->getActiveSheet()->setCellValue('A2',"NIT: ".$this->Modulo->infoentidad->nit_t75);
          $this->excel->getActiveSheet()->setCellValue('A3',utf8_encode($this->Modulo->infoentidad->direccion_t75));
          $this->excel->getActiveSheet()->setCellValue('A4','FECHA');
          $this->excel->getActiveSheet()->setCellValue('B4','APELLIDO 1');
          $this->excel->getActiveSheet()->setCellValue('C4','APELLIDO 2');
          $this->excel->getActiveSheet()->setCellValue('D4','NOMBRE 1');
          $this->excel->getActiveSheet()->setCellValue('E4','NOMBRE 2');
          $this->excel->getActiveSheet()->setCellValue('F4','EDAD');
          $this->excel->getActiveSheet()->setCellValue('G4','PESO');
          $this->excel->getActiveSheet()->setCellValue('H4','TALLA');
          $this->excel->getActiveSheet()->setCellValue('I4','CC');
          $this->excel->getActiveSheet()->setCellValue('J4','IDENTIFICACION');
          $this->excel->getActiveSheet()->setCellValue('K4','FECHA / NACIMIENTO');
          $this->excel->getActiveSheet()->setCellValue('L4','DIRECCION');
          $this->excel->getActiveSheet()->setCellValue('M4','MUNICIPIO');
          $this->excel->getActiveSheet()->setCellValue('N4','NUMERO DE TELEFONO');
          $this->excel->getActiveSheet()->setCellValue('O4','CONTROL');
          $this->excel->getActiveSheet()->setCellValue('P4','PRIMERA VEZ');
          $this->excel->getActiveSheet()->setCellValue('Q4','INYECCION HORMONAL');
          $this->excel->getActiveSheet()->setCellValue('R4','INYECCION TRIMESTRAL');
          $this->excel->getActiveSheet()->setCellValue('S4','METODO ORAL');
          $this->excel->getActiveSheet()->setCellValue('T4','ORDEN JADELLE');
          $this->excel->getActiveSheet()->setCellValue('U4','CIRUGIA');
          $this->excel->getActiveSheet()->setCellValue('V4','CONTROL JADELLE');
          $this->excel->getActiveSheet()->setCellValue('W4','PROXIMO CONTROL');
          $this->excel->getActiveSheet()->setCellValue('X4','VASECTOMIA');
          $this->excel->getActiveSheet()->setCellValue('Y4','ORDEN DE DIU');
          $this->excel->getActiveSheet()->setCellValue('Z4','RETIRO DE DIU');
          $num = 5;
          foreach ($llamada as $fila) {
          $this->excel->getActiveSheet()->setCellValue("A{$num}",$fila->fingreso_t4);
          $this->excel->getActiveSheet()->setCellValue("B{$num}",$fila->apellido1_t3);
          $this->excel->getActiveSheet()->setCellValue("C{$num}",$fila->apellido2_t3);
          $this->excel->getActiveSheet()->setCellValue("D{$num}",$fila->nombre1_t3);
          $this->excel->getActiveSheet()->setCellValue("E{$num}",$fila->nombre2_t3);
          $this->excel->getActiveSheet()->setCellValue("F{$num}","");
          $this->excel->getActiveSheet()->setCellValue("G{$num}",$fila->peso_t64);
          $this->excel->getActiveSheet()->setCellValue("H{$num}",$fila->altura_t64);
          $this->excel->getActiveSheet()->setCellValue("I{$num}",$fila->identiftipo_t3);
          $this->excel->getActiveSheet()->setCellValue("J{$num}",$fila->identificacion_t3);
          $this->excel->getActiveSheet()->setCellValue("K{$num}",$fila->fnacim_t3);
          $this->excel->getActiveSheet()->setCellValue("L{$num}",$fila->direccion_t3);
          $this->excel->getActiveSheet()->setCellValue("M{$num}",$llamada[0]->municipio_t3);
          $this->excel->getActiveSheet()->setCellValue("N{$num}",$fila->telefono_t3);
          $this->excel->getActiveSheet()->setCellValue("O{$num}","");
          $this->excel->getActiveSheet()->setCellValue("P{$num}","");
          $this->excel->getActiveSheet()->setCellValue("Q{$num}","");
          $this->excel->getActiveSheet()->setCellValue("R{$num}","");
          $this->excel->getActiveSheet()->setCellValue("S{$num}","");
          $this->excel->getActiveSheet()->setCellValue("T{$num}","");
          $this->excel->getActiveSheet()->setCellValue("U{$num}","");
          $this->excel->getActiveSheet()->setCellValue("V{$num}","");
          $this->excel->getActiveSheet()->setCellValue("W{$num}","");
          $this->excel->getActiveSheet()->setCellValue("X{$num}","");
          $this->excel->getActiveSheet()->setCellValue("Y{$num}","");
          $this->excel->getActiveSheet()->setCellValue("Z{$num}","");
          $num++;
          }
          $date=date("Y-m-d H:i:s");
          $archivo = "Informe_256_{$date}.xls";
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="'.$archivo.'"');
          header('Cache-Control: max-age=0');
          $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
          //Hacemos una salida al navegador con el archivo Excel.
          $objWriter->save('php://output');
          }else{
            echo "error";
          }
          break;
        }
      }
  }
  
  public function porconsulta(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por Consulta";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo',array('urlform'=>'informes/porconsulta/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":
          $this->Informe->porconsulta();
          break;
        }
      }
    }


//informe salud ocupacional//

    public function Ocupacional(){
        if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
        //este es el titulo del informe de salud ocupacional (cinpro)//
          $this->Planthtml->cont["tit_seccion"]="Informes / Por General";
        //este es el contenido de la vusta principal//  
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo_general',array('urlform'=>'informes/Ocupacional/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case 'json':
          # code...
          break;
        case "generar":
          $llamadas=$this->Informe->Ocupacional();
          //debug($llamadas);
          if(count($llamadas) > 0){
        //Cargamos la librería de excel.
        //$this->load->model('excel');
        //$this->excel->setActiveSheetIndex(0);
         $this->load->model('gestexcel');
        $objPHPExcel = $this->gestexcel->cargarplantilla(FCPATH.'docs/Plantillas_Informes/plant_ocupacional.xlsx');
        //Contador de filas
        $contador = 4;
        foreach ($this->input->post('ocupacional') as $field)
          {
                $objPHPExcel->getActiveSheet()->setCellValue("AT{$contador}", $field);
                $letra++;
          }

          
        //Definimos la data del cuerpo.        
        foreach($llamadas as $l){
           //Incrementamos una fila más, para ir a la siguiente.
           $contador++;
          //debug($l);
           //Informacion de las filas de la consulta.
           
           ////////////////////informacion del paciente
         $edad=calculoedad($l->fnacim_t3,true);
          $letra='A';
          $fields = $this->db->list_fields('ps_paciente_t3');
          foreach ($fields as $field)
          {
                $objPHPExcel->getActiveSheet()->setCellValue("{$letra}{$contador}",utf8_encode($l->$field));
                $letra++;
          }
          $fields = $this->db->list_fields('ps_hist_consulta_so_t99');
          
          foreach ($this->input->post('ocupacional') as $field)
          {
                $objPHPExcel->getActiveSheet()->setCellValue("{$letra}{$contador}", utf8_encode($l->$field));
                $letra++;
          }
         
        }
        $this->gestexcel->exportar($objPHPExcel,'Nuevo_Informe_Vehicular.xlsx');
     }else{
        echo 'No se han encontrado llamadas';
        exit;        
     }
          break;
        }
      }
    }


    //fin de informe ocupacional//


  public function Informe_256(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Informe_256";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo',array('urlform'=>'informes/Informe_256/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":
          $llamadas=$this->Informe->consultaAgenda();
          //debug($llamadas);
          if(count($llamadas) > 0){
          $this->load->library('excel');
          // Prime Modulo 
          $this->excel->getDefaultStyle()->getFont()->setName('Arial');
          $this->excel->getActiveSheet()->setTitle('Informe 256');
          $this->excel->setActiveSheetIndex(0);
          $styleArray = array(
          'font'  => array(
              'bold'  => true,
              'color' => array('rgb' => 'e8f5e9'),
              'size'  => 8,
              'name'  => 'Arial' 
          ),
          'fill' => array( 
                    'type' => PHPExcel_Style_Fill::FILL_SOLID, 
                    'color' => array('rgb'=>'66BB6A')
                )
          );
          $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
          $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
          $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'A4:P4');
          $this->excel->getActiveSheet()->setCellValue('A1',$this->Modulo->infoentidad->nombre_t75);
          $this->excel->getActiveSheet()->setCellValue('A2',"NIT: ".$this->Modulo->infoentidad->nit_t75);
          $this->excel->getActiveSheet()->setCellValue('A3',utf8_encode($this->Modulo->infoentidad->direccion_t75));
          $this->excel->getActiveSheet()->setCellValue("A4", 'TIPO DE REGISTRO');
          $this->excel->getActiveSheet()->setCellValue("B4", 'CONSECUTIVO DE REGISTRO');
          $this->excel->getActiveSheet()->setCellValue("C4", 'TIPO DE IDENTIFICACION DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("D4", 'NUMERO DE IDENTIFICACION DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("E4", 'FECHA DE NACIMIENTO DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("F4", 'SEXO DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("G4", 'PRIMER APELLIDO DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("H4", 'SEGUNDO APELLIDO DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("I4", 'PRIMER NOMBRE DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("J4", 'SEGUNDO NOMBRE DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("K4", 'CODIGO DE LA EAPB DEL USUARIO');
          $this->excel->getActiveSheet()->setCellValue("L4", 'IDENTIFICACION DEL TIPO DE CITA O PROCEDIMIENTO NO QUIRURGICO');
          $this->excel->getActiveSheet()->setCellValue("M4", 'FECHA DE LA SOLICITUD DE LA CITA');
          $this->excel->getActiveSheet()->setCellValue("N4", 'LA CITA FUE ASIGNADA');
          $this->excel->getActiveSheet()->setCellValue("O4", 'FECHA DE LA ASIGNACION DE LA CITA');
          $this->excel->getActiveSheet()->setCellValue("P4", 'FECHA PARA LA CUAL EL USUARIO SOLICITO QUE LE FUERA ASIGANADA  LA CITA');
          $val = 5;
          foreach ($llamadas as $fila) {
          $this->excel->getActiveSheet()->setCellValue("A{$val}", "");
          $this->excel->getActiveSheet()->setCellValue("B{$val}", $fila->idps_paciente_t3);
          $this->excel->getActiveSheet()->setCellValue("C{$val}", $fila->identiftipo_t3);
          $this->excel->getActiveSheet()->setCellValue("D{$val}", $fila->identificacion_t3);
          $this->excel->getActiveSheet()->setCellValue("E{$val}", $fila->fnacim_t3);
          $this->excel->getActiveSheet()->setCellValue("F{$val}", $fila->genero_t3);
          $this->excel->getActiveSheet()->setCellValue("G{$val}", $fila->apellido1_t3);
          $this->excel->getActiveSheet()->setCellValue("H{$val}", $fila->apellido2_t3);
          $this->excel->getActiveSheet()->setCellValue("I{$val}", $fila->nombre1_t3);
          $this->excel->getActiveSheet()->setCellValue("J{$val}", $fila->nombre2_t3);
          $this->excel->getActiveSheet()->setCellValue("K{$val}", $fila->administradoracod_t3);
          $this->excel->getActiveSheet()->setCellValue("L{$val}", $fila->codproc_t12);
          $this->excel->getActiveSheet()->setCellValue("M{$val}", $fila->fecha_atencion);
          $this->excel->getActiveSheet()->setCellValue("N{$val}", $fila->fecha_programacion_t12);
          $this->excel->getActiveSheet()->setCellValue("O{$val}", $fila->fecha_atencion);
          $this->excel->getActiveSheet()->setCellValue("P{$val}", $fila->fecha_programacion_t12);
          $val++;
          }
          $this->excel->createSheet();
          $this->excel->setActiveSheetIndex(1);
          $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
          $this->excel->getActiveSheet()->setTitle('Nuevo Informe');
          $this->excel->getActiveSheet()->setCellValue('A1','Esto es otro valor a generar');
          $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
          $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'A4:N4');
          $this->excel->getActiveSheet()->setCellValue('A1',$this->Modulo->infoentidad->nombre_t75);
          $this->excel->getActiveSheet()->setCellValue('A2',"NIT: ".$this->Modulo->infoentidad->nit_t75);
          $this->excel->getActiveSheet()->setCellValue('A3',utf8_encode($this->Modulo->infoentidad->direccion_t75));
          $this->excel->getActiveSheet()->setCellValue("A4", 'TIPO DE REGISTRO');
          $this->excel->getActiveSheet()->setCellValue("B4", 'CONSECUTIVO DE REGISTRO');
          $this->excel->getActiveSheet()->setCellValue("C4", 'TIPO DE IDENTIFICACION DE LA ENTIDAD REPORTADORA');
          $this->excel->getActiveSheet()->setCellValue("D4", 'NUMERO DE IDENTIFICACION DE LA ENTIDAD REPORTADORA');
          $this->excel->getActiveSheet()->setCellValue("E4", 'NUMERO DE USUARIOS QUE RESPONDIERON "MUY BUENA"');
          $this->excel->getActiveSheet()->setCellValue("F4", 'NUMERO DE USUARIOS QUE RESPONDIERON " BUENA"');
          $this->excel->getActiveSheet()->setCellValue("G4", 'NUMERO DE USUARIOS QUE RESPONDIERON "REGULAR"');
          $this->excel->getActiveSheet()->setCellValue("H4", 'NUMERO DE USUARIOS QUE RESPONDIERON "MALA"');
          $this->excel->getActiveSheet()->setCellValue("I4", 'NUMERO DE USUARIOS QUE NO RESPONDIERON A LA PREGUNTA');
          $this->excel->getActiveSheet()->setCellValue("J4", utf8_decode('NUMERO DE USUARIOS QUE RESPONDIERON "DEFINITIVAMENTE SI A LA PREGUNTA: ¿RECOMENDARIA A SUS FAMILIARES Y AMIGOS ESTA IPS?"'));
          $this->excel->getActiveSheet()->setCellValue("K4", utf8_decode('NUMERO DE USUARIOS QUE RESPONDIERON "PROBABLEMENTE SI A LA PREGUNTA: ¿RECOMENDARIA A SUS FAMILIARES Y AMIGOS ESTA IPS?"'));
          $this->excel->getActiveSheet()->setCellValue("L4", utf8_decode('NUMERO DE USUARIOS QUE RESPONDIERON "DEFINITIVAMENTE NO A LA PREGUNTA: ¿RECOMENDARIA A SUS FAMILIARES Y AMIGOS ESTA IPS?"'));
          $this->excel->getActiveSheet()->setCellValue("M4", utf8_decode('NUMERO DE USUARIOS QUE RESPONDIERON "PROBABLEMENTE NO A LA PREGUNTA: ¿RECOMENDARIA A SUS FAMILIARES Y AMIGOS ESTA IPS?"'));
          $this->excel->getActiveSheet()->setCellValue("N4", utf8_decode('NUMERO DE USUARIOS QUE NO RESPONDIERON LA PREGUNTA: "¿RECOMENDARIA A SUS FAMILIARES Y AMIGOS ESTA IPS?"'));
          $this->excel->createSheet();
          $this->excel->setActiveSheetIndex(2);
          $this->excel->getActiveSheet()->setTitle('Registro tipo 3');
          $this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
          $this->excel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
          $this->excel->getActiveSheet()->setCellValue('A1','Esto es otro valor a generar');
          $this->excel->getActiveSheet()->getStyleByColumnAndRow("A1")->applyFromArray($styleArray);
          $this->excel->getActiveSheet()->duplicateStyle($this->excel->getActiveSheet()->getStyle('A1'),'A4:N4');
          $this->excel->getActiveSheet()->setCellValue('A1',$this->Modulo->infoentidad->nombre_t75);
          $this->excel->getActiveSheet()->setCellValue('A2',"NIT: ".$this->Modulo->infoentidad->nit_t75);
          $this->excel->getActiveSheet()->setCellValue('A3',utf8_encode($this->Modulo->infoentidad->direccion_t75));
          $date=date("Y-m-d H:i:s");
          $archivo = "Informe_256_{$date}.xls";
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="'.$archivo.'"');
          header('Cache-Control: max-age=0');
          $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
          //Hacemos una salida al navegador con el archivo Excel.
          $objWriter->save('php://output');
        }else{
          echo "No se encontro llamada";
        }
          break;
        }
      }
    }

  public function porfactura(){
      if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "0":
          $this->Planthtml->cont["tit_seccion"]="Informes / Por Factura";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_factura',array('urlform'=>'informes/porfactura/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case "generar":
          $this->Informe->porfactura();
          break;
        }
      }
    }
  
  public function rips(){
    if($this->Modulo->error == false){
      $this->load->model('Rips');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "0":
        if(empty($arr_datos["buscado"])){
          $arr_lista["buscado"]="";
        }else{
          $arr_lista["buscado"]=$arr_datos["buscado"];
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        $arr_lista["datrips"]=$this->Rips->listar($arr_lista["buscado"]);
        $this->Planthtml->cont["tit_seccion"]="Facturación / RIPS";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_rips',$arr_lista,true);
        $this->Planthtml->generar();
        break;
        
        case "validar":
          $this->Planthtml->cont["tit_seccion"]="Facturación / RIPS / Correcion CUPS Res 4678";
          if($this->uri->segment(4)=="generar"){
            $arr_vform["detres"] = $this->Rips->validar();
            $arr_vform["mensaje"]="Corrección realizada satisfactoriamente";
          }
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_ripsval',$arr_vform,true);
          $this->Planthtml->generar();
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Facturación / RIPS / Nuevo";
          if($this->uri->segment(4)=="generar"){
            $numrem = $this->Rips->generar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$numrem;
            redirect(site_url()."/facturacion/rips/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_rips','',true);
            $this->Planthtml->cont["js"] = $this->load->view('Asistencial/Facturacion/js_f_rips','',true);
            $this->Planthtml->generar();
          }
          break;
        
        case "gestionar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
  }
  
  
  public function planestarifarios(){
    if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "0":
        if(empty($arr_datos["buscado"])){
          $arr_lista["buscado"]="";
        }else{
          $arr_lista["buscado"]=$arr_datos["buscado"];
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        $arr_lista["datplanestar"]=$this->Tarifa->planes_listar();
        $this->Planthtml->cont["tit_seccion"]="Facturación / Planes Tarifarios";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_planestarifarios',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',"",true);
            $this->Planthtml->generar();
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
  }
  
  public function parametrizacion(){
    if($this->Modulo->error == false){
      $this->load->model('Tarifa');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "0":
        if(empty($arr_datos["buscado"])){
          $arr_lista["buscado"]="";
        }else{
          $arr_lista["buscado"]=$arr_datos["buscado"];
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        //$arr_lista["datestructura"]=$this->Estructura->listar();
        $this->Planthtml->cont["tit_seccion"]="Facturación / Parametrización";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_param_facturacion',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',"",true);
            $this->Planthtml->generar();
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_param_facturacion',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
  }
  
  public function asistente(){
    if($this->Modulo->error == false){
      $this->load->model('Estructura');
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
    switch($accion){
      case "buscar":
        $arr_datos["buscado"]=$this->input->post("buscado");
      case "mensaje":
      case "0":
        if(empty($arr_datos["buscado"])){
          $arr_lista["buscado"]="";
        }else{
          $arr_lista["buscado"]=$arr_datos["buscado"];
        }
        if(empty($arr_datos["mensaje"])){
          $arr_lista["mensaje"]="";
        }else{
          $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
        }
        //$arr_lista["datestructura"]=$this->Estructura->listar();
        $this->Planthtml->cont["tit_seccion"]="Facturación / Parametrización";
        $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_asistente_facturacion',$arr_lista,true);
        $this->Planthtml->generar();
        break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $this->Estructura->registrar();
            $mensaje=urlencode(base64_encode("Registro realizado satisfactoriamente"))."/buscado/".$this->db->insert_id();
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/f_estructura',"",true);
            $this->Planthtml->generar();
          }
          break;
        
        case "modificar":
          $this->Planthtml->cont["tit_seccion"]="Administraci&oacute;n / Estructura / Modificar";
          if($this->uri->segment(5)=="guardar"){
            $this->Estructura->registrar($this->uri->segment(4));
            $mensaje=urlencode(base64_encode("Registro modificado satisfactoriamente"))."/buscado/".$this->uri->segment(4);
            redirect(site_url()."/administracion/estructura/mensaje/".$mensaje);
          }else{
            $id = $this->uri->segment(4);
            $arr_modificar["estructura"]=$this->Estructura->obtener($id,true);
            $this->Planthtml->cont["contenido"] = $this->load->view('Administracion/Estructura/f_estructura',$arr_modificar,true);
            $this->Planthtml->generar();
          }
          break;
      }
    }
  }
  
  public function convenios(){
     if($this->Modulo->error == false){
      $accion = $this->uri->segment(3, "0");
      $arr_datos = $this->uri->uri_to_assoc(3);
      switch($accion){
        case "buscar":
          $arr_datos["buscado"]=$this->input->post("buscado");
        case "mensaje":
        case "0":
          if(empty($arr_datos["buscado"])){
            $arr_lista["buscado"]="";
          }else{
            $arr_lista["buscado"]=$arr_datos["buscado"];
          }
          if(empty($arr_datos["mensaje"])){
            $arr_lista["mensaje"]="";
          }else{
            $arr_lista["mensaje"]=base64_decode(urldecode($arr_datos["mensaje"]));
          }
          $arr_lista["datconvenios"]=$this->Historia->listar($arr_lista["buscado"]);
          $this->Planthtml->cont["tit_seccion"]="convenios/Historia";
          $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/l_convenios',$arr_lista,true);
          $this->Planthtml->generar();
          break;
          
        case "nuevo":
          $this->Planthtml->cont["tit_seccion"]="Facturacion / Nuevo";
          if($this->uri->segment(4)=="guardar"){
            $id = $this->convenios->registrar();
            $this->convenios->registrar();
            $mensaje=urlencode(base64_encode("convenio registrado satisfactoriamente"))."/buscado/".$id;
            redirect(site_url()."/facturacion/convenios/mensaje/".$mensaje);
          }else{
            if($this->uri->segment(4)=="convenio"){
              $arr_modificar["datconvenios"]=$this->convenio->obtener($this->uri->segment(5));
            }
            $this->Planthtml->cont["tit_seccion"]="Admisiones / Nuevo";
            $this->Planthtml->cont["contenido"] = $this->load->view('Asistencial/Facturacion/f_convenios',$arr_modificar,true);
            $this->Planthtml->generar();
          }
        }
      }
  }
    public function ginecologia(){
      $accion = $this->uri->segment(3,'0');
      switch ($accion) {
        case '0':
          $this->Planthtml->cont["tit_seccion"]="Informes / Ginecologia";
          $this->Planthtml->cont["contenido"] = $this->load->view('Informes/f_periodo_general',array('urlform'=>'informes/ginecologia/generar'),true);
          $this->Planthtml->cont["js"] = $this->load->view('Informes/js_f_periodo','',true);
          $this->Planthtml->generar();
          break;
        case 'generar':
          $this->Informe->ginecologia_m();
        /*   //count($llamadas);
          if(count($llamadas) > 0){
        //Cargamos la librería de excel.
        //$this->load->model('excel');
            $this->load->library('excel');
        //$this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Informe De Ginecologia');
        //Contador de filas
        $contador = 1;
        //Le aplicamos ancho las columnas.
        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
         
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('U')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('V')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('X')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Y')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AA')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AC')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AD')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AE')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AF')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AG')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AH')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AI')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(30);
          $this->excel->getActiveSheet()->getColumnDimension('AK')->setWidth(30);
          $this->excel->getActiveSheet()->getColumnDimension('AL')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AM')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AN')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AO')->setWidth(30);
         $this->excel->getActiveSheet()->getColumnDimension('AP')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AR')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AS')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension('AT')->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("AU")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("AV")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("AW")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("AX")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("AY")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("AZ")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BA")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BB")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BC")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BD")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BE")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BF")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BG")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BH")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BI")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BJ")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BK")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BL")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BM")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BN")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BO")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BP")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BQ")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BR")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BS")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BT")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BU")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BV")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BW")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BX")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BY")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("BZ")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CA")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CB")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CC")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CD")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CE")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CF")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CG")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CH")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CI")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CJ")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CK")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CL")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CM")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CN")->setWidth(30);
        $this->excel->getActiveSheet()->getColumnDimension("CO")->setWidth(30);
        //////edicion de celdas
        //Le aplicamos negrita a los títulos de la cabecera.
       /* $this->excel->getActiveSheet()->getStyle("A{$contador}")->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle("B{$contador}")->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle("C{$contador}")->getFont()->setBold(true);
        //Definimos los títulos de la cabecera.*/
        ////////////////////informacion del paciente
       /* $this->excel->getActiveSheet()->setCellValue("A{$contador}", 'Numero de Historia');
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", 'Identificacion');
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", 'Tipo de Identificacion');
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", 'Identificacion');
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", 'Primer Apellido');
        $this->excel->getActiveSheet()->setCellValue("F{$contador}", 'Segundo Apellido');
        $this->excel->getActiveSheet()->setCellValue("G{$contador}", 'Primer Nombre');
        $this->excel->getActiveSheet()->setCellValue("H{$contador}", 'Nombre Completo');
        $this->excel->getActiveSheet()->setCellValue("I{$contador}", 'Genero');
        $this->excel->getActiveSheet()->setCellValue("J{$contador}", 'Fecha de Nacimiento');
        $this->excel->getActiveSheet()->setCellValue("K{$contador}", 'Estado Civil');
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", 'Grupo Etnico');
        $this->excel->getActiveSheet()->setCellValue("M{$contador}", '');
        $this->excel->getActiveSheet()->setCellValue("N{$contador}", '');
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", 'Zonares');
        $this->excel->getActiveSheet()->setCellValue("P{$contador}", 'Direccion');
        $this->excel->getActiveSheet()->setCellValue("Q{$contador}", 'Telefono');
        $this->excel->getActiveSheet()->setCellValue("R{$contador}", 'Correo');
        $this->excel->getActiveSheet()->setCellValue("S{$contador}", 'Municipio');
        $this->excel->getActiveSheet()->setCellValue("T{$contador}", 'Codigo del Municipio');
        $this->excel->getActiveSheet()->setCellValue("U{$contador}", 'Codigo de Administracion');
        $this->excel->getActiveSheet()->setCellValue("V{$contador}", 'Ing Activo');
        $this->excel->getActiveSheet()->setCellValue("W{$contador}", 'Estado');
        $this->excel->getActiveSheet()->setCellValue("X{$contador}", 'RH');
        $this->excel->getActiveSheet()->setCellValue("Y{$contador}", 'Grupo Especial');
        $this->excel->getActiveSheet()->setCellValue("Z{$contador}", 'Discapacidades');
        $this->excel->getActiveSheet()->setCellValue("AA{$contador}", 'Nivel');
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", 'Copago');
        $this->excel->getActiveSheet()->setCellValue("AC{$contador}", 'Administradora');
        $this->excel->getActiveSheet()->setCellValue("AD{$contador}", 'Tipo de Administradora');
        $this->excel->getActiveSheet()->setCellValue("AE{$contador}", 'Cuota Moderada');
        $this->excel->getActiveSheet()->setCellValue("AF{$contador}", 'Tipo AF');
        $this->excel->getActiveSheet()->setCellValue("AG{$contador}", 'Usuario');
        $this->excel->getActiveSheet()->setCellValue("AH{$contador}", 'Fecha de Modificacion');
        $this->excel->getActiveSheet()->setCellValue("AI{$contador}", 'Numero de la Historia');
        $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", 'fecha de Ingreso');
        $this->excel->getActiveSheet()->setCellValue("AK{$contador}", 'Fecha de Salida');
        $this->excel->getActiveSheet()->setCellValue("AL{$contador}", 'Ubicacion');
        $this->excel->getActiveSheet()->setCellValue("AM{$contador}", 'Motivo de Ingreso');
        $this->excel->getActiveSheet()->setCellValue("AN{$contador}", 'Via de Ingreso');
        $this->excel->getActiveSheet()->setCellValue("AO{$contador}", 'Causa Externa');
        $this->excel->getActiveSheet()->setCellValue("AP{$contador}", 'Tipo de cuenta');
        $this->excel->getActiveSheet()->setCellValue("AQ{$contador}", 'Estado de la cuenta');
        $this->excel->getActiveSheet()->setCellValue("AR{$contador}", 'Observacion');
        $this->excel->getActiveSheet()->setCellValue("AS{$contador}", 'Fecha de modificacion de la cuenta');
        $this->excel->getActiveSheet()->setCellValue("AT{$contador}", 'Historia de la ginecologia');
        $this->excel->getActiveSheet()->setCellValue("AU{$contador}", 'Menarca');
        $this->excel->getActiveSheet()->setCellValue("AV{$contador}", 'inicvs');
        $this->excel->getActiveSheet()->setCellValue("AW{$contador}", 'Fum');
        $this->excel->getActiveSheet()->setCellValue("AX{$contador}", 'ETS');
        $this->excel->getActiveSheet()->setCellValue("AY{$contador}", 'Sus');
        $this->excel->getActiveSheet()->setCellValue("AZ{$contador}", 'Resultado');
        $this->excel->getActiveSheet()->setCellValue("BA{$contador}", 'Anti');
        $this->excel->getActiveSheet()->setCellValue("BB{$contador}", 'Tipo opcion');
        $this->excel->getActiveSheet()->setCellValue("BC{$contador}", 'Inicio');
        $this->excel->getActiveSheet()->setCellValue("BD{$contador}", 'Fu Citologia');
        $this->excel->getActiveSheet()->setCellValue("BE{$contador}", 'Fecha su ginecologo');
        $this->excel->getActiveSheet()->setCellValue("BF{$contador}", 'Concepto de Ginecologia');
        $this->excel->getActiveSheet()->setCellValue("BG{$contador}", 'Cuello uterino');
        $this->excel->getActiveSheet()->setCellValue("BH{$contador}", 'gestas');
        $this->excel->getActiveSheet()->setCellValue("BI{$contador}", 'Partos');
        $this->excel->getActiveSheet()->setCellValue("BJ{$contador}", 'Vivos');
        $this->excel->getActiveSheet()->setCellValue("BK{$contador}", 'Abortos');
        $this->excel->getActiveSheet()->setCellValue("BL{$contador}", 'Mortinatos');
        $this->excel->getActiveSheet()->setCellValue("BM{$contador}", 'Especiales');
        $this->excel->getActiveSheet()->setCellValue("BN{$contador}", 'Tipo de em');
        $this->excel->getActiveSheet()->setCellValue("BO{$contador}", 'HTA');
        $this->excel->getActiveSheet()->setCellValue("BP{$contador}", 'infeccion');
        $this->excel->getActiveSheet()->setCellValue("BQ{$contador}", 'Iso');
        $this->excel->getActiveSheet()->setCellValue("BR{$contador}", 'Descripcion Ginecologica');
        $this->excel->getActiveSheet()->setCellValue("BS{$contador}", 'Atencion Pre');
        $this->excel->getActiveSheet()->setCellValue("BT{$contador}", 'N Consulta');
        $this->excel->getActiveSheet()->setCellValue("BU{$contador}", 'Ex Com');
        $this->excel->getActiveSheet()->setCellValue("BV{$contador}", 'Alte');
        $this->excel->getActiveSheet()->setCellValue("BW{$contador}", 'Vacuna');
        $this->excel->getActiveSheet()->setCellValue("BX{$contador}", 'Influencia');
        $this->excel->getActiveSheet()->setCellValue("BY{$contador}", 'Hay B');
        $this->excel->getActiveSheet()->setCellValue("BZ{$contador}", 'F ama');
        $this->excel->getActiveSheet()->setCellValue("CA{$contador}", 'Varicela');
        $this->excel->getActiveSheet()->setCellValue("CB{$contador}", 'Rabia');
        $this->excel->getActiveSheet()->setCellValue("CC{$contador}", 'FPP');
        $this->excel->getActiveSheet()->setCellValue("CD{$contador}", 'Ultimo parto');
        $this->excel->getActiveSheet()->setCellValue("CE{$contador}", 'Ultima Cesaria');
        $this->excel->getActiveSheet()->setCellValue("CF{$contador}", 'Mal formaciones');
        $this->excel->getActiveSheet()->setCellValue("CG{$contador}", 'Prematuros');
        $this->excel->getActiveSheet()->setCellValue("CH{$contador}", 'Edad Gestacion');
        $this->excel->getActiveSheet()->setCellValue("CI{$contador}", 'Num CS');
        $this->excel->getActiveSheet()->setCellValue("CJ{$contador}", 'Proc Cuello');
        $this->excel->getActiveSheet()->setCellValue("CK{$contador}", 'Descripcion proceso');
        $this->excel->getActiveSheet()->setCellValue("CL{$contador}", 'Asp Cuello');
        $this->excel->getActiveSheet()->setCellValue("CM{$contador}", 'Descripcion de ASP');
        $this->excel->getActiveSheet()->setCellValue("CN{$contador}", 'Observaciones');
        $this->excel->getActiveSheet()->setCellValue("CO{$contador}", 'Fmod');
        //Definimos la data del cuerpo.        
        foreach($llamadas as $l){
           //Incrementamos una fila más, para ir a la siguiente.
           $contador++;
          //debug($l);
           //Informacion de las filas de la consulta.
           ////////////////////informacion del paciente
        $this->excel->getActiveSheet()->setCellValue("A{$contador}", $l->historia_t12);
        $this->excel->getActiveSheet()->setCellValue("B{$contador}", $l->paciente_t4);
        $this->excel->getActiveSheet()->setCellValue("C{$contador}", $l->identiftipo_t3);
        $this->excel->getActiveSheet()->setCellValue("D{$contador}", $l->apellido1_t3);
        $this->excel->getActiveSheet()->setCellValue("E{$contador}", $l->apellido2_t3);
        $this->excel->getActiveSheet()->setCellValue("F{$contador}", $l->nombre1_t3);
        $this->excel->getActiveSheet()->setCellValue("G{$contador}", $l->nombre2_t3);
        $this->excel->getActiveSheet()->setCellValue("H{$contador}", $l->apellido1_t3." ".$l->apellido2_t3." ".$l->nombre1_t3." ".$l->nombre2_t3);
        $this->excel->getActiveSheet()->setCellValue("I{$contador}", $l->genero_t3);
        $this->excel->getActiveSheet()->setCellValue("J{$contador}", $l->fnacim_t3);
        $this->excel->getActiveSheet()->setCellValue("K{$contador}", $l->estadocivil_t3);
        $this->excel->getActiveSheet()->setCellValue("L{$contador}", $l->grupoetnic_t3);
        $this->excel->getActiveSheet()->setCellValue("M{$contador}", $l->tipoblacesp_13);
        $this->excel->getActiveSheet()->setCellValue("N{$contador}", '');
        $this->excel->getActiveSheet()->setCellValue("O{$contador}", $l->zonares_t3);
        $this->excel->getActiveSheet()->setCellValue("P{$contador}", $l->direccion_t3);
        $this->excel->getActiveSheet()->setCellValue("Q{$contador}", $l->telefono_t3);
        $this->excel->getActiveSheet()->setCellValue("R{$contador}", $l->correo_t3);
        $this->excel->getActiveSheet()->setCellValue("S{$contador}", $l->municipio_t3);
        $this->excel->getActiveSheet()->setCellValue("T{$contador}", $l->municipiocod_t3);
        $this->excel->getActiveSheet()->setCellValue("U{$contador}", $l->administradoracod_t3);
        $this->excel->getActiveSheet()->setCellValue("V{$contador}", $l->ingactivo_t3);
        $this->excel->getActiveSheet()->setCellValue("W{$contador}", $l->estado_t3);
        $this->excel->getActiveSheet()->setCellValue("X{$contador}", $l->rh_t3);
        $this->excel->getActiveSheet()->setCellValue("Y{$contador}", $l->grupoespec_t3);
        $this->excel->getActiveSheet()->setCellValue("Z{$contador}", $l->discap_t3);
        $this->excel->getActiveSheet()->setCellValue("AA{$contador}", $l->nivel_t3);
        $this->excel->getActiveSheet()->setCellValue("AB{$contador}", $l->copago_t3);
        $this->excel->getActiveSheet()->setCellValue("AC{$contador}", $l->administradoracod_t3);
        $this->excel->getActiveSheet()->setCellValue("AD{$contador}", $l->tipoadmin_t3);
        $this->excel->getActiveSheet()->setCellValue("AE{$contador}", $l->cuotamoderadora_t3);
        $this->excel->getActiveSheet()->setCellValue("AF{$contador}", $l->tipoaf_t3);
        $this->excel->getActiveSheet()->setCellValue("AG{$contador}", $l->usrmod_t3);
        $this->excel->getActiveSheet()->setCellValue("AH{$contador}", $l->fmod_t3);
        $this->excel->getActiveSheet()->setCellValue("AI{$contador}", $l->idps_historia_t4);
        $this->excel->getActiveSheet()->setCellValue("AJ{$contador}", $l->fingreso_t4);
        $this->excel->getActiveSheet()->setCellValue("AK{$contador}", $l->fsalida_t4);
        $this->excel->getActiveSheet()->setCellValue("AL{$contador}", $l->ubitacion_t4);
        $this->excel->getActiveSheet()->setCellValue("AM{$contador}", $l->motivoing_t4);
        $this->excel->getActiveSheet()->setCellValue("AN{$contador}", $l->viaing_t4);
        $this->excel->getActiveSheet()->setCellValue("AO{$contador}", $l->causaext_t64);
        $this->excel->getActiveSheet()->setCellValue("AP{$contador}", $l->tipocta_t4);
        $this->excel->getActiveSheet()->setCellValue("AQ{$contador}", $l->estado_t4);
        $this->excel->getActiveSheet()->setCellValue("AR{$contador}", $l->obs_t4);
        $this->excel->getActiveSheet()->setCellValue("AS{$contador}", $l->fmod_t4);
        $this->excel->getActiveSheet()->setCellValue("AT{$contador}", $l->id_gineco);
        $this->excel->getActiveSheet()->setCellValue("AU{$contador}", $l->menarca_gineco);
        $this->excel->getActiveSheet()->setCellValue("AV{$contador}", $l->inicvs_gineco);
        $this->excel->getActiveSheet()->setCellValue("AW{$contador}", $l->fum_gineco);
        $this->excel->getActiveSheet()->setCellValue("AX{$contador}", $l->ets_gineco);
        $this->excel->getActiveSheet()->setCellValue("AY{$contador}", $l->sus_gineco);
        $this->excel->getActiveSheet()->setCellValue("AZ{$contador}", $l->result_gineco);
        $this->excel->getActiveSheet()->setCellValue("BA{$contador}", $l->anti_gineco);
        $this->excel->getActiveSheet()->setCellValue("BB{$contador}", $l->tipooption_gineco);
        $this->excel->getActiveSheet()->setCellValue("BC{$contador}", $l->inicio_gineco);
        $this->excel->getActiveSheet()->setCellValue("BD{$contador}", $l->fu_citologia);
        $this->excel->getActiveSheet()->setCellValue("BE{$contador}", $l->fecha_su_gineco);
        $this->excel->getActiveSheet()->setCellValue("BF{$contador}", $l->concep_gineco);
        $this->excel->getActiveSheet()->setCellValue("BG{$contador}", $l->cuello_u_gineco);
        $this->excel->getActiveSheet()->setCellValue("BH{$contador}", $l->gestas_gineco);
        $this->excel->getActiveSheet()->setCellValue("BI{$contador}", $l->partos_gineco);
        $this->excel->getActiveSheet()->setCellValue("BJ{$contador}", $l->vivos_gineco);
        $this->excel->getActiveSheet()->setCellValue("BK{$contador}", $l->abortos_gineco);
        $this->excel->getActiveSheet()->setCellValue("BL{$contador}", $l->mortinatos_gineco);
        $this->excel->getActiveSheet()->setCellValue("BM{$contador}", $l->especiales_gineco);
        $this->excel->getActiveSheet()->setCellValue("BN{$contador}", $l->tipoem_gineco);
        $this->excel->getActiveSheet()->setCellValue("BO{$contador}", $l->hta_gineco);
        $this->excel->getActiveSheet()->setCellValue("BP{$contador}", $l->infecc_gineco);
        $this->excel->getActiveSheet()->setCellValue("BQ{$contador}", $l->iso_gineco);
        $this->excel->getActiveSheet()->setCellValue("BR{$contador}", $l->descrip_gineco);
        $this->excel->getActiveSheet()->setCellValue("BS{$contador}", $l->aten_pre_gineco);
        $this->excel->getActiveSheet()->setCellValue("BT{$contador}", $l->n_consult_gineco);
        $this->excel->getActiveSheet()->setCellValue("BU{$contador}", $l->ex_com_gineco);
        $this->excel->getActiveSheet()->setCellValue("BV{$contador}", $l->alte_gineco);
        $this->excel->getActiveSheet()->setCellValue("BW{$contador}", $l->vacuna_gineco);
        $this->excel->getActiveSheet()->setCellValue("BX{$contador}", $l->influe_gineco);
        $this->excel->getActiveSheet()->setCellValue("BY{$contador}", $l->hayb_gineco);
        $this->excel->getActiveSheet()->setCellValue("BZ{$contador}", $l->f_ama_gineco);
        $this->excel->getActiveSheet()->setCellValue("CA{$contador}", $l->varicela_gineco);
        $this->excel->getActiveSheet()->setCellValue("CB{$contador}", $l->rabia_gineco);
        $this->excel->getActiveSheet()->setCellValue("CC{$contador}", $l->fpp_gineco);
        $this->excel->getActiveSheet()->setCellValue("CD{$contador}", $l->ultimo_parto_gineco);
        $this->excel->getActiveSheet()->setCellValue("CE{$contador}", $l->ultima_cesarea_gineco);
        $this->excel->getActiveSheet()->setCellValue("CF{$contador}", $l->malformacion_gineco);
        $this->excel->getActiveSheet()->setCellValue("CG{$contador}", $l->prematuros_gineco);
        $this->excel->getActiveSheet()->setCellValue("CH{$contador}", $l->edadgest_gineco);
        $this->excel->getActiveSheet()->setCellValue("CI{$contador}", $l->num_cs_gineco);
        $this->excel->getActiveSheet()->setCellValue("CJ{$contador}", $l->proc_cuello_gineco);
        $this->excel->getActiveSheet()->setCellValue("CK{$contador}", $l->descrip_proc_gineco);
        $this->excel->getActiveSheet()->setCellValue("CL{$contador}", $l->asp_cuello_gineco);
        $this->excel->getActiveSheet()->setCellValue("CM{$contador}", $l->des_asp_gineco);
        $this->excel->getActiveSheet()->setCellValue("CN{$contador}", $l->obser_gineco);
        $this->excel->getActiveSheet()->setCellValue("CO{$contador}", $l->fmod_gineco);
       //generamos mos un nombre al archivo que se va a generar.
        $date =date("Y-m-d H:i:s");
        $archivo = "informe_ginecologia_{$date}.xls";
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$archivo.'"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //Hacemos una salida al navegador con el archivo Excel.
        $objWriter->save('php://output');
              }
            }else{
              echo "Tuvimos un error";
            }*/
          break;
        
        default:
          echo "Regrese a la pagina anterior";
          break;
      }
          }
}
