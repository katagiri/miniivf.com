<?php

session_start();
if (!$_POST['first'] || !$_POST['last'] || !$_POST['email'] || !$_POST['phone']) {}
elseif ($_SESSION['from_site'] == 'yes') {
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$preferred = $_POST['preferred'];
	$comments = $_POST['comments'];
	
	if ($comments == 'Comments') { $comments = '';}

	$email[] = 'zach@nhfc.com';
	$email[] = 'jessicam@nhfc.com';
	require_once("../mail/class.phpmailer.php");
	
	$mail = new PHPMailer();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "zach.katagiri@nhfc.com";
	$mail->Password = "newhope123!";
	$mail->CharSet = 'UTF-8';
	
	$mail->SetFrom("webmaster@nhfc.com", "NHFC Staff Site"); 
	
	if(is_array($email)){
		foreach($email as $e){
			$mail->AddAddress($e);                   
		}
	}else{
		$mail->AddAddress($email);
	}
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = 'Contact from MIniIVF Site';
	
	//$body = stripslashes(nl2br($body));
	
	$email_body = $first." ".$last." just contacted us from miniivf.com.<br><br>

	Email: <strong>".$email_address."</strong><br>
	Phone: <strong>".$phone."</strong><br>
	Contact Preference: <strong>".$preference."</strong><br>
	Comments: <strong>".stripslashes(nl2br($comments))."</strong>";

	$mail->Body = $email_body; //HTML Body
	
	$mail->AltBody = $email_body; //Text Body
	
	$mail->Send();
	unset($mail);
}
?>