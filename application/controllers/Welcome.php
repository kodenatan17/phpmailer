<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function kirim(){
		$this->load->view('kirim');
	}
	public function kirim_proses(){
		if(isset($_POST['submit'])){
			$mail = new PHPMailer(true);
			$email_penerima = $this->input->post('email_penerima');
			$subject = $this->input->post('subject');
			$isi_pesan = $this->input->post('isi_pesan');


			$mail->isSMTP();
			$mail->Host ="smtp.gmail.com";
			$mail->SMTPAuth = true;
			$mail->Username = 'kodenatan17@gmail.com';
			$mail->Password = 'Pandawa55@';
			$mail->Port = 587;

			$mail->setFrom('kodenatan17@gmail.com');
			$mail->addAddress($email_penerima, 'kodenatan17@gmail.com');

			$mail->addReplyTo('kodenatan17@gmail.com');
			$mail->isHTML(true);
			$mail->Subject = 'Anda dapat email baru dari localhost dengan codeigniter';
			$mail->Body = '<h1>Halo, Admin</h1> <p> Ada pesan baru dengan subject '.$subject.' </p>';

			if($mail->send()){
				echo'Pengiriman Pesan berhasil';
			} else {
				echo"Pesan gagal. Mailer Error {$mail->ErrorInfo}";
			}
		} else {
			echo 'Tekan dulu!';
		}
	}
}
