<?
class Agenda extends CI_Model {
  
  var $estadoscolor;
  var $arrestados;
  
  function __construct(){
    parent::__construct();
    $this->estadoscolor = array(
      "PROGRAMADO"=>"#C8C9CB","ADMITIDO"=>"#33FF5E","ATENCIÓN MÉDICA"=>"#EE6D02","REMITIDO"=>"#6633FF","CERRADA"=>"#025429","NO ASISTIE"=>"#FF0000","BLOQUEADO"=>"#f44336"
    );
    $this->arrestados = $this->Paciente->arr_estados;
  }
  
  function obtener($id){
    $this->db->from("ps_agenda_t12");
    $this->db->where("historia_t12",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  public function agendardesbloquear()
  {
    $arr_bloqueo = (object)$this->input->post();
    //var_dump($arr_bloqueo);
    $especialidad = $arr_bloqueo->especialidades;
    $medicos = $arr_bloqueo->medicos;
    //var_dump($arr_bloqueo->fecha_programacion['horarios']);
    $fecha = explode("/", $arr_bloqueo->fecha_programacion);
    $new = $fecha[2]."-".$fecha[1]."-".$fecha[0];
    foreach ($arr_bloqueo->horario as $fila){
     $this->db->select('idps_agenda_t12,historia_t12');
     $this->db->where('numero_identificacion_t12',$medicos);
     $this->db->where('fecha_programacion_t12 >="' .$new." ".$fila.'"');
     $this->db->where('estado_t12', "BLOQUEADO");
     $query[] = $this->db->get('ps_agenda_t12')->result();
    }
    $num = count($query);
    //var_dump($query[0]);
    foreach ($query[0] as $fila => $value) {
      $this->db->where('idps_agenda_t12',$value->idps_agenda_t12)->delete('ps_agenda_t12');
      $this->db->where('idps_historia_t4',$value->historia_t12)->delete('ps_historia_t4');
    }
    return true;
  }

  function agendarTransaladar(){
      $medicos = (object)$this->input->post();
      $fecha = explode("/", $medicos->fecha_programacion);
      $new = $fecha[2]."-".$fecha[1]."-".$fecha[0];
      $this->db->where('numero_identificacion_t12',$medicos->medicos);
      $this->db->where('fecha_programacion_t12 >= "'.$new.'"');
      $this->db->where('fecha_programacion_t12 <= "'.$new.' 23:59"');
      $query = $this->db->get('ps_agenda_t12')->result();
      
      //Medico a transladar

      $this->db->where('identificacion_t0', $medicos->medicosa);
      $datos = $this->db->get('ps_usuarios_t0')->result();

      echo $datos[0]->identificacion_t0." ".$datos[0]->nombre_t0;
      foreach ($query as $cambio) {
        $data = array(
          "numero_identificacion_t12" => $datos[0]->identificacion_t0,
          "nomcompp_t12" => $datos[0]->nombre_t0
        );
        $this->db->where('idps_agenda_t12', $cambio->idps_agenda_t12)->update('ps_agenda_t12',$data);
      }
      return 1;

  }

public function agendarBloquear()
  {
    $arr_bloqueo = (object)$this->input->post();
    var_dump($arr_bloqueo);
    echo $especialidad = $arr_bloqueo->especialidades;
    echo $medicos = $arr_bloqueo->medicos;
    var_dump($arr_bloqueo->fecha_programacion['horarios']);
    foreach ($arr_bloqueo->horario as $fila){
     // echo $especialidad." ".$medicos." ".." ".$fila."<br>";
    $this->db->select_max('idps_historia_t4');
    $query = $this->db->get('ps_historia_t4')->result();
    $idhistoria = $query[0]->idps_historia_t4+1;
    $dathist = (object)array(
        'idps_historia_t4' => $idhistoria,
        "estado_t4"=> 'BLOQUEADO'
      );
    $this->db->insert('ps_historia_t4', $dathist);
   $fecha = explode("/", $arr_bloqueo->fecha_programacion);
   echo $new = $fecha[2]."-".$fecha[1]."-".$fecha[0];
   $time = explode(":", $fila);
   $ffin = mktime($time[0],$time[1]+10,0,$time[1],$time[2],$time[0]);
   $this->db->select_max('idps_agenda_t12');
    $query = $this->db->get('ps_agenda_t12')->result();
    $num = $query[0]->idps_agenda_t12+1;
    $data = array(
        'idps_agenda_t12' => $num,
        'historia_t12' => $idhistoria,
        'nomcomp_t12' => "BLOQUEO DE AGENDA",
        'numero_identificacion_t12' => $medicos,
        'idps_especialidades_t12' => $especialidad,
        'fecha_programacion_t12' =>  $new." ".$fila,
        'fecha_fin_t12' => $new." ".date("H:i:s",$ffin),
        'usrmod_t12' => $this->Modulo->usr->idusr,
        'procedimiento_t12' => "0000000",
        'estado_t12' => "BLOQUEADO",
        'fecha_atencion' => date('Y-m-d')
      );
    $this->db->insert('ps_agenda_t12', $data);
    }
  }

  function consultaFecha($especialidad,$programacion,$medico){
    $fecha = explode('T', $programacion);
    $fechas = $fecha[0].' '.$fecha[1];
    $this->db->from('ps_agenda_t12');
    $this->db->where('fecha_programacion_t12', $fechas);
    $this->db->where('idps_especialidades_t12',$especialidad);
    $this->db->where('numero_identificacion_t12',$medico);
    $this->db->where('estado_t12 != "CANCELADO"');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
    
  }
  
  function obtenercita($id){
    $this->db->from("ps_agenda_t12");
    $this->db->where("idps_agenda_t12",$id);
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
  function obtenercitapacespec($consulta){
    $this->db->from("ps_agenda_t12");
    $this->db->where("identificacion_t12",$consulta["identpaciente"]);
    $this->db->like("fecha_programacion_t12",$consulta["fecha_programacion"]);
    $this->db->where("idps_especialidades_t12",$consulta["idespec"]);
    $this->db->where("estado_t12 <>",'CANCELADO');
    $this->db->order_by("fecha_programacion_t12",'DESC');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
  }
  
    // Función para buscar las ultimas fechas de cita del pacienta asignar cita

  function ultimaCita($id){
    $this->db->from('ps_agenda_t12');
    $this->db->where('identificacion_t12', $id);
    $this->db->select_max('fecha_programacion_t12');
    $this->db->limit(2);
    $this->db->order_by('fecha_programacion_t12', 'desc');
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      //var_dump($query); exit;
      if($id==true){
        $resul =  $query->row();
      }else{
        $resul = $query->result();
      }
    }
    return $resul;
  }

  function obtenerdia($medico,$dia){
    $this->db->from("ps_agenda_t12");
    $this->db->join("ps_paciente_t3"," identificacion_t12=identificacion_t3","inner");
    $this->db->like("fecha_programacion_t12",$dia);
    $this->db->where("numero_identificacion_t12",$medico);
    $this->db->where("estado_t12 <>",'CANCELADO');
    $this->db->order_by("fecha_programacion_t12");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->result();
    }
  }
  
  function listar($filtro){
    $this->db->from("ps_agenda_t12");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $arr_datos;
    }
  }
  
  function validunicomed(){
    $this->db->from("ps_personal_espec_t11");
    $query = $this->db->get();
    $arr_datos = $query->result();
    if (count($arr_datos) > 0){
      return $query->row();
    }
    return false;
  }
  
  function admimitir($idhistoria,$ident){
    $dathist = (object)$this->input->post();
    $dathist->estado="ADMITIDO";
    //var_dump($dathist->estado); exit;
    $this->Historia->registrar($idhistoria,$dathist);
    $arr_agenda["estado_t12"]="ADMITIDO";
    $this->db->where("historia_t12",$idhistoria);
    $this->db->update("ps_agenda_t12",$arr_agenda);
  }
  
  function modificar($id){
      $cita = $this->obtener($id);
      $arr_fprog = explode("-",$this->input->post("fecha_programacion"));
      $arr_hprog = explode(":",$this->input->post("hora_programacion"));
      $fprog = $this->input->post("fecha_programacion")." ".$this->input->post("hora_programacion");
      $ffin = mktime($arr_hprog[0],$arr_hprog[1]+10,0,$arr_fprog[1],$arr_fprog[2],$arr_fprog[0]);
      $dpaciente = $this->Paciente->obtener($cita->identificacion_t12);
      $personal = $this->Personal->obtener($this->input->post("idpersonal"));
      $cups = $this->Cups->obtener($this->input->post("procedimiento"));
      $arr_nuevo["estado_t12"]=$this->input->post("estado");
      $arr_nuevo["nomcomp_t12"]=$dpaciente->nomcomp_t3;
      $arr_nuevo["nombre1_t12"]=$dpaciente->nombre1_t3;
      $arr_nuevo["nombre2_t12"]=$dpaciente->nombre2_t3;
      $arr_nuevo["apellido1_t12"]=$dpaciente->apellido1_t3;
      $arr_nuevo["apellido2_t12"]=$dpaciente->apellido2_t3;
      $arr_nuevo["identificacion_t12"]=$dpaciente->identificacion_t3;
      $arr_nuevo["nomcompp_t12"]=$personal->nomcomp_t10;
      $arr_nuevo["numero_identificacion_t12"]=$personal->numero_identificacion_t10;
      $arr_nuevo["idps_especialidades_t12"]=$this->input->post("idespecialidad");
      $arr_nuevo["especialidades_t12"]=$this->input->post("especialidad");
      $arr_nuevo["observaciones_t12"]=$this->input->post("observaciones");
      $arr_nuevo["fecha_programacion_t12"]=$fprog;
      $arr_nuevo["fecha_fin_t12"]=date("Y-m-d H:i",$ffin);
      $arr_nuevo["idps_estructura_t12"]=$this->input->post("id_estructura");
      $arr_nuevo["servicio_t12"]=$this->input->post("servicio");
      $arr_nuevo["numcubic_t12"]=$this->input->post("cubiculo");
      $arr_nuevo["codproc_t12"]=$cups->codplantarifa_t63;
      $arr_nuevo["procedimiento_t12"]=$cups->descripcion_t63;
      $arr_nuevo["procvalor_t12"]=$cups->valor_t63;
      $arr_nuevo["usrmod_t12"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t12"]=$this->Modulo->ahora();
      $this->db->where("historia_t12",$id);
      $this->db->update("ps_agenda_t12",$arr_nuevo);
      $dathist = (object)array(
        "estado_t4"=>$arr_nuevo["estado_t12"]
      );
      $this->Historia->registrar($cita->historia_t12,$dathist);
      return $arr_nuevo["numero_identificacion_t12"];
    }
  
  function registrar($id=""){
      $idhistoria = "";
      $dpaciente = (object)$this->input->post("paciente");
      $arr_fprog = explode("-",$this->input->post("fecha_programacion"));
      $arr_hprog = explode(":",$this->input->post("hora_programacion"));
      $fprog = $this->input->post("fecha_programacion")." ".$this->input->post("hora_programacion");
      $ffin = mktime($arr_hprog[0],$arr_hprog[1]+10,0,$arr_fprog[1],$arr_fprog[2],$arr_fprog[0]);
      $dathist = (object)array(
          "identificacion"=>$dpaciente->documento,
          "fingreso"=>$fprog,
          "ubicacion"=>"CONSULTA EXTERNA",
          "estado"=>$this->input->post("estado"),
          "ubicaciondet"=>$this->input->post("cubiculo"),
          "obs"=>$this->input->post("observaciones")
        );
      $dinterc = (object)$this->input->post("interc");
      if(!empty($dinterc->historia)){
        $idhistoria = $dinterc->historia;
      }
      if(!empty($dinterc->orden)){
        $arr_nuevo["ref1_t12"]=$dinterc->orden;
      }
      $idhist = $this->Historia->registrar($idhistoria,$dathist);
      $datpac = (object)array(
          "identificacion"=>$dpaciente->documento,
          "nombre1"=>$dpaciente->nombre1,
          "nombre2"=>$dpaciente->nombre2,
          "apellido1"=>$dpaciente->apellido1,
          "apellido2"=>$dpaciente->apellido2,
          "telefono"=>$dpaciente->telefono_contacto,
          "correo"=>$dpaciente->correo,
          "municipio"=>$dpaciente->municipio,
          "municipiocod"=>$dpaciente->municipiocod,
        );
      
      $cups = $this->Cups->obtener($this->input->post("procedimiento"));
  
      if(empty($dinterc->orden)){
        $idorden = $this->Historia->orden_siguiente();
        $arr_orden['tipo_t67'] = $cups->tiposervicio_t63;
        $arr_orden['codigo_t67']=$cups->codplantarifa_t63;
        $arr_orden['descripcion_t67']=$cups->descripcion_t63;
        $arr_orden['cantidad_t67']=1;
        $arr_orden['valor_t67']=$cups->valor_t63;
        $arr_orden["usrmod_t67"]=$this->Modulo->usr->idusr;
        $arr_orden["fmod_t67"]=$this->Modulo->ahora();
        $arr_orden['orden_t67']=$idorden;
        $arr_orden['idpaciente_t67']=$dpaciente->documento;
        $arr_orden['idhistoria_t67']=$idhist;
        $this->db->insert("ps_hist_ordenes_t67",$arr_orden);
        $dinterc =  (object)array("orden"=>$this->db->insert_id());
        $arr_nuevo["ref1_t12"]=$dinterc->orden;
      }
      
      $this->Paciente->registrar($idhist,$datpac);
      $dpaciente = $this->Paciente->obtener($dpaciente->documento);
      $personal = $this->Personal->obtener($this->input->post("idpersonal"));
      
      //var_dump($this->input->post("estado"));
      //exit;
      $arr_nuevo["fecha_atencion"]= date('Y-m-d');
      $arr_nuevo["historia_t12"]=$idhist;
      $arr_nuevo["estado_t12"]=$this->input->post("estado");
      $arr_nuevo["nomcomp_t12"]=$dpaciente->nomcomp_t3;
      $arr_nuevo["nombre1_t12"]=$dpaciente->nombre1_t3;
      $arr_nuevo["nombre2_t12"]=$dpaciente->nombre2_t3;
      $arr_nuevo["apellido1_t12"]=$dpaciente->apellido1_t3;
      $arr_nuevo["apellido2_t12"]=$dpaciente->apellido2_t3;
      $arr_nuevo["identificacion_t12"]=$dpaciente->identificacion_t3;
      $arr_nuevo["nomcompp_t12"]=$personal->nomcomp_t10;
      $arr_nuevo["numero_identificacion_t12"]=$personal->numero_identificacion_t10;
      $arr_nuevo["idps_especialidades_t12"]=$this->input->post("idespecialidad");
      $arr_nuevo["especialidades_t12"]=$this->input->post("especialidad");
      $arr_nuevo["observaciones_t12"]=$this->input->post("observaciones");
      $arr_nuevo["fecha_programacion_t12"]=$this->input->post("fecha_programacion")." ".$this->input->post("hora_programacion");
      $arr_nuevo["fecha_fin_t12"]=date("Y-m-d H:i",$ffin);
      $arr_nuevo["idps_estructura_t12"]=$this->input->post("id_estructura");
      $arr_nuevo["servicio_t12"]=$this->input->post("servicio");
      $arr_nuevo["numcubic_t12"]=$this->input->post("cubiculo");
      $arr_nuevo["codproc_t12"]=$cups->codplantarifa_t63;
      $arr_nuevo["procedimiento_t12"]=$cups->descripcion_t63;
      $arr_nuevo["procvalor_t12"]=$cups->valor_t63;
      $arr_nuevo["grupoprod_t12"]=$cups->tiposervicio_t63;
      $arr_nuevo["usrmod_t12"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t12"]=$this->Modulo->ahora();
      
      if(empty($id)){
        $this->db->insert("ps_agenda_t12",$arr_nuevo);
        $idagenda = $this->db->insert_id();
      }else{
        $this->db->where("idps_agenda_t12",$id);
        $this->db->update("ps_agenda_t12",$arr_nuevo);
      }
      if(!empty($dinterc->orden)){
        $this->db->where("idhist_ordenes_t67",$dinterc->orden);
        $this->db->update("ps_hist_ordenes_t67",array('ref1_t67'=>$idagenda));
      }
if($this->input->post("envsms")=='SMS'){
        $paciente = $this->Paciente->obtener($dpaciente->identificacion_t3);
        if(!empty($paciente->telefono_t3)){
          $fcita = strtotime($arr_nuevo["fecha_programacion_t12"]);
          $mensaje = "CLINICA DE TENJO ";
          $mensaje.= "CITA PROGRAMADA: ".date("d",$fcita)." de ".$this->Constante->fecha->meses[date("n",$fcita)-1]." de ".date("Y",$fcita)." a las ".date("H",$fcita)." y ".date("i",$fcita)."  con  \n";
          $mensaje.= $personal->nomcomp_t10;
          //$mensaje.= " DOCUMENTOS QUE DEBE LLEVAR EL DÍA DE LA CITA: . \n";
          //$mensaje.= "ESTADO DE CUENTA, HISTORIA DEL DIA DEL ACCIDENTE, FURIPS, ORDEN DE SERVICIO, HISTORIA CONSULTA, POLIZA SOAT, CEDULA, TARJETA DE PROPIEDAD. \n";
          $mensaje.= " GRACIAS POR PREFERIRNOS.";
          echo strlen($mensaje);
          if(strlen($mensaje)>158){
            //var_dump(strlen($mensaje));
            $numsj = ceil(strlen($mensaje)/150);
            //var_dump($numsj);
            $largomensaje =  floor(strlen($mensaje)/$numsj);
            $largomensaje1 =  strlen($mensaje)-($numsj-1)*150;
            //var_dump($largomensaje);
            //var_dump($largomensaje1);
            $limite = strrpos(substr($mensaje, 0,$largomensaje1)," ");
            $sms = trim(substr($mensaje, 0,$limite));
            $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$paciente->telefono_t3]);
            if($res["resultado"]<=0){
              $errorsms = true;
            }else{
              echo "<sript>alert('Hola')</script>";
            }
            
            $mensaje = trim(substr($mensaje,$limite));
            for($i=1;$i<$numsj;$i++){
              $limite = strrpos(substr($mensaje, 0,$largomensaje-$numsj-$i)," ");
              $sms = trim(substr($mensaje, 0,$limite));
              $mensaje = trim(substr($mensaje,$limite));
              
              $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$paciente->telefono_t3]);
              if($res["resultado"]<=0){
                $errorsms = true;
              }else{
                echo "Error al enviar mensaje";
              }
            }
            
            if(strlen($arr_mensaje[count($arr_mensaje)-1])>strlen($mensaje)){
              $guiones = str_pad("-", strlen($arr_mensaje[count($arr_mensaje)-1])>strlen($mensaje));
              //var_dump($guiones);
              //var_dump(strlen($mensaje));
              //var_dump(strlen($arr_mensaje[count($arr_mensaje)-1]));
            }
            $sms = trim($mensaje)." ".$guiones;
            $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$paciente->telefono_t3]);
            if($res["resultado"]<=0){
              $errorsms = true;
            }
          }else{
            echo $dpaciente->telefono;
            $sms = $mensaje;
            $res = $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$paciente->telefono_t3]);
            if($res["resultado"]<=0){
              $errorsms = true;
            }
          }
          
          
          
          /*
          if(is_array($arr_mensaje)){
            foreach($arr_mensaje as $mensaje){
              $res = $this->Util->enviarsms(["texto"=>utf8_encode($mensaje),"destino"=>"57".$paciente->telefono_t3]);
              if($res["resultado"]<=0){
                $errorsms = true;
              }
            }
          }
          */
          
          
        }
        $sms = "Le invitamos a escribirnos a clinicadetenjo@hotmail.com";
        var_dump($errorsms);
        //exit;
        $this->Util->enviarsms(["texto"=>utf8_encode($sms),"destino"=>"57".$paciente->telefono_t3]);
      }
    }
    
    function registrart($id=""){
      $idhistoria = "";
      $dpaciente = (object)$this->input->post("paciente");
      $arr_fprog = explode("-",$this->input->post("fecha_programacion"));
      $arr_hprog = explode(":",$this->input->post("hora_programacion"));
      $fprog = $this->input->post("fecha_programacion")." ".$this->input->post("hora_programacion");
      $ffin = mktime($arr_hprog[0],$arr_hprog[1]+10,0,$arr_fprog[1],$arr_fprog[2],$arr_fprog[0]);
      $dathist = (object)array(
          "identificacion"=>$dpaciente->documento,
          "fingreso"=>$fprog,
          "ubicacion"=>"CONSULTA EXTERNA",
          "estado"=>$this->input->post("estado"),
          "ubicaciondet"=>$this->input->post("cubiculo"),
          "obs"=>$this->input->post("observaciones")
        );
      $dinterc = (object)$this->input->post("interc");
      if(!empty($dinterc->historia)){
        $idhistoria = $dinterc->historia;
      }
      if(!empty($dinterc->orden)){
        $arr_nuevo["ref1_t12"]=$dinterc->orden;
      }
      $idhist = $this->Historia->registrar($idhistoria,$dathist);
      $datpac = (object)array(
          "identificacion"=>$dpaciente->documento,
          "nombre1"=>$dpaciente->nombre1,
          "nombre2"=>$dpaciente->nombre2,
          "apellido1"=>$dpaciente->apellido1,
          "apellido2"=>$dpaciente->apellido2,
          "telefono"=>$dpaciente->telefono_contacto,
          "correo"=>$dpaciente->correo,
          "municipio"=>$dpaciente->municipio,
          "municipiocod"=>$dpaciente->municipiocod,
        );
      
      $cups = $this->Cups->obtener($this->input->post("procedimiento"));
      
      $this->Paciente->registrar($idhist,$datpac);
      $dpaciente = $this->Paciente->obtener($dpaciente->documento);
      $personal = $this->Tercero->obtener(null, null,$this->input->post("idpersonal"));
      
      //var_dump($this->input->post("estado"));
      //exit;
      $arr_nuevo["historia_t12"]=$idhist;
      $arr_nuevo["estado_t12"]=$this->input->post("estado");
      $arr_nuevo["nomcomp_t12"]=$dpaciente->nomcomp_t3;
      $arr_nuevo["nombre1_t12"]=$dpaciente->nombre1_t3;
      $arr_nuevo["nombre2_t12"]=$dpaciente->nombre2_t3;
      $arr_nuevo["apellido1_t12"]=$dpaciente->apellido1_t3;
      $arr_nuevo["apellido2_t12"]=$dpaciente->apellido2_t3;
      $arr_nuevo["identificacion_t12"]=$dpaciente->identificacion_t3;
      $arr_nuevo["nomcompp_t12"]=$personal->desc_t16;
      $arr_nuevo["numero_identificacion_t12"]=$personal->ident_t16;
      $arr_nuevo["idps_especialidades_t12"]=$personal->idespec_t16;
      $arr_nuevo["especialidades_t12"]=$personal->espec_t16;
      $arr_nuevo["observaciones_t12"]=$this->input->post("observaciones");
      $arr_nuevo["fecha_programacion_t12"]=$this->input->post("fecha_programacion")." ".$this->input->post("hora_programacion");
      $arr_nuevo["fecha_fin_t12"]=date("Y-m-d H:i",$ffin);
      $arr_nuevo["idps_estructura_t12"]=$this->input->post("id_estructura");
      $arr_nuevo["servicio_t12"]=$this->input->post("servicio");
      $arr_nuevo["numcubic_t12"]=$this->input->post("cubiculo");
      $arr_nuevo["codproc_t12"]=$cups->codplantarifa_t63;
      $arr_nuevo["procedimiento_t12"]=$cups->descripcion_t63;
      $arr_nuevo["procvalor_t12"]=$cups->valor_t63;
      $arr_nuevo["grupoprod_t12"]=$cups->tiposervicio_t63;
      $arr_nuevo["terrefcod_t12"]=$this->input->post("ipsremitcod");
      $arr_nuevo["terref_t12"]=$this->input->post("ipsremit");
      $arr_nuevo["cantidad_t12"]=$this->input->post("cantidad");
      $arr_nuevo["usrmod_t12"]=$this->Modulo->usr->idusr;
      $arr_nuevo["fmod_t12"]=$this->Modulo->ahora();
      
      if(empty($id)){
        $this->db->insert("ps_agenda_t12",$arr_nuevo);
        $idagenda = $this->db->insert_id();
      }else{
        $this->db->where("idps_agenda_t12",$id);
        $this->db->update("ps_agenda_t12",$arr_nuevo);
      }
      return $arr_nuevo["numero_identificacion_t12"];
    }
    
    function listarjson($consulta="",$fecha = ""){
      if(!empty($consulta["medico"])){
        $this->db->from("ps_agenda_t12");
        $this->db->join("ps_historia_t4","historia_t12=idps_historia_t4","inner");
        $this->db->where("estado_t12 <> 'CANCELADO'");
        $this->db->where("numero_identificacion_t12",$consulta["medico"]);
        $date = new Datetime(date('Y-m-d'));
        $date->modify('-30 day');
        $this->db->where('fecha_programacion_t12 >= ', $date->format('Y-m-d'));
        $this->db->order_by("fecha_programacion_t12",'asc');
        $query = $this->db->get();
        $res = $query->result_array();
        if (count($res) > 0){
          foreach($res as $evento){
            
            /*
            switch ($evento["grupoprod_t12"]){
              case "CONS":
                $url = site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$evento["historia_t12"].'/resumingreso');
                break;
              default:
                $url = site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$evento["historia_t12"].'/evolucorden/'.$evento["ref1_t12"]);
                break;
            }
            */
            
            if(!empty($evento["ref1_t12"])){
              $url = site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$evento["historia_t12"].'/evolucorden/'.$evento["ref1_t12"]);
            }else{
              $url = site_url('consexterna/'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6.'/gestionar/'.$evento["historia_t12"].'/resumingreso');
            }
            
            $json[] = array(
              "title"=>utf8_encode($evento["identificacion_t12"]." ".$evento["nomcomp_t12"]." ".$evento["codproc_t12"]),
              "start" => date("c",strtotime($evento["fecha_programacion_t12"])),
              "end" => date("c",strtotime($evento["fecha_fin_t12"])),
              "url" => $url,
              "color" =>$this->estadoscolor[$evento["estado_t4"]]
            );

          }
        $array=array("1"=>["01","08"],"3"=>["19","29","30"],"5"=>["01","14"],"6"=>["04","11"],"7"=>["02","20"],"8"=>["07","20"],"10"=>["15"],"11"=>["05","12"],"12"=>["08","25"]);
          foreach($array as $moment=>$mes){
            
            foreach ($mes as  $i=>$dias) {
              

              $json[]= array(

              "title"=>utf8_encode("Feriado"),
              "start" => date("c",strtotime("2018-".$moment."-".$array[$moment][$i]."T06:00:00")),
              "end" => date("c",strtotime("2018-".$moment."-".$array[$moment][$i]."T19:00:00")),
              "rendering"=> 'background',
              "color"=> '#aee2d9'
           
              );
            }   
               
        }
          //$week = date("W")-1;
          for($week=0;$week<43;$week++){
            for($i=0; $i<7; $i++){
                $fecha=date('Y-m-d', strtotime('01/01 +' . $week . ' weeks first day +' . $i . ' day'));

                $dia= date("N",strtotime($fecha));
                if($dia==7){
                  $feriado_don=$fecha;
                      $json[]= array(

                  "title"=>utf8_encode("Feriado"),
                  "start" => date("c",strtotime($feriado_don."T06:00:00")),
                  "end" => date("c",strtotime($feriado_don."T19:00:00")),
                  "rendering"=> 'background',
                  "color"=> '#aee2d9'
               
                  );
                }
                
            } 
          }
          
           
          return json_encode($json);
        }
      }
    }
  } 
?>