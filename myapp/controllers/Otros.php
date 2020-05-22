<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otros extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('Usuarios_Model', 'UM_Users'); //Carga el modelo
			$this->load->model('Cursos_Model', 'UM_Cursos'); //Carga el modelo
		}

	public function nosotros() {
		$menu['activo']="nosotros";
		$title['title']="Nosotros";
		$this->load->view('head', $title);
		$this->load->view('cabecera', $menu);
    $this->load->view('nosotros');
		$this->load->view('footer');
	}

  public function contacto() {
		if ($this->input->post()) {

			$email_to = "rft00005@red.ujaen.es";
			$email_subject = "rft00005@gmail.com";
			$email_from = "rft00005@gmail.com";
			
			$nombre = $this->input->post('nombre');
			$email = $this->input->post('email');
			$msg = $this->input->post('mensaje');

			$email_message = "Detalles del formulario de contacto:\n\n";
			$email_message .= "Nombre: " . $nombre . "\n";
			$email_message .= "E-mail: " . $email . "\n";
			$email_message .= "Mensaje: " . $msg . "\n\n";

			// Ahora se envía el e-mail usando la función mail() de PHP
			$headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);

		}
		$menu['activo']="contacto";
		$title['title']="Contacto";
		$this->load->view('head', $title);
		$this->load->view('cabecera', $menu);
		$this->form_validation->set_rules('nombre', 'nombre','required|xss_clean');
		$this->form_validation->set_rules('email', 'email','trim|required|xss_clean');
		$this->form_validation->set_rules('mensaje', 'msg','trim|required|xss_clean');
    $this->load->view('contacto');
		$this->load->view('footer');
	}
}
