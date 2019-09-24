<?php 

date_default_timezone_set('Asia/Kolkata');
ini_set('max_execution_time', 300);
require 'PHPMailerAutoload.php';
ignore_user_abort(true); 
set_time_limit(0); 



class Smtp_ultimate{



	function __construct() {
    }
	function config()
	{
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = false;
	$mail->do_debug = 2;
	$mail->SMTPAuth = TRUE;
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPSecure = 'tsl';
	$mail->Port = 587;
	$mail->Username = "basukiitsolutionspvtltd@gmail.com";
	$mail->Password = "Bits_123";
	//$mail->setFrom('tset.mail89@gmail.com', 'Office Assistant');
	return $mail;
	}
}

//$obj=new smtp_ultimate('abhik214@gmail.com','1.png');  
//$obj->mail_function();
//$obj->do_mail();


//mail($email, 'PHP Background Processing', "This took 2 minutes to process, but the browser didn't hang during that time. Pretty cool!");