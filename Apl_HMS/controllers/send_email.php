<?php
class contacto extends CI_Controller {
    
   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('email');
    }
     
   public function enviar(){
       //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'smtp.gmail.com';
       //Nuestro usuario
        $config["smtp_user"] = 'saludhms@gmail.com';
       //Nuestra contraseña
        $config["smtp_pass"] = 'aldana2016';    
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '587';
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
       //El email debe ser valido  
       $config['validate'] = true;
      //Establecemos esta configuración
        $this->email->initialize($config);

      //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('saludhms@gmail.com', 'Salud HMS');
      /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
       
        $iduser = $this->Modulo->usr->idusr;
        $consulta = $this->db->query("SELECT email_t0 AS email FROM ps_usuarios_t0 WHERE idps_usuarios_t0 = '$iduser'");
        $correo = $consulta->result_array();
        $correofinal = $correo[0]['email'];
    
        $this->email->to($correofinal, $iduser);
         
      //Definimos el asunto del mensaje
        $this->email->subject('Informacion sobre Cargue de RIPS IMPORTANTE!');
         
      //Definimos el mensaje a enviar
        $this->email->message(
                " Mensaje: "."El proceso esta completo! Usted puede revisar su digitacion!"
                );
         
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
        }else{
            $this->session->set_flashdata('envio', 'No se a enviado el email');
        }
         
        /*redirect(base_url("contacto"));*/
   }    
}