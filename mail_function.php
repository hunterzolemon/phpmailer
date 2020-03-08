<?php	
use PHPMailer\PHPMailer\PHPMailer;	
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




	function sendOTP($email,$otp) {

require 'C:\Users\sheik\Downloads\Compressed\php-login-with-otp-authentication\php-login-with-otp-authentication\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\Users\sheik\Downloads\Compressed\php-login-with-otp-authentication\php-login-with-otp-authentication\vendor\phpmailer\phpmailer\src\SMTP.php';
require 'C:\Users\sheik\Downloads\Compressed\php-login-with-otp-authentication\php-login-with-otp-authentication\vendor\phpmailer\phpmailer\src\EXCEPTION.php';



require 'vendor/autoload.php';


	
		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();
		$mail->IsSMTP( );
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->requirername = "hzoolemon@gmail.com";
		$mail->Password = "Loll2727";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "admin";
		$mail->SetFrom("hzoolemon@gmail.com", "admin");
		$mail->AddAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$mail->setLanguage('utf-8');

		$result = $mail->Send();
		
		return $result;
	}
?>