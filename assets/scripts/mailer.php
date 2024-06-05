<?php 
    $_post = json_decode(file_get_contents('php://input'),true);

    $data = $_post;
	sendEmail($data);
	/*header('location: gracias.html');*/
    function sendEmail($data){
		/*$emailCC = $_post['email'];*/
		$to = $data['eMail'];
		$subject = 'paosofiam.com Mailer PHP - Frontend Mentor Contact Form';
		$message = "¡Thanks for viewing my portfolio!. You submitted the next info: <b>MASTER, CONTROL
        & HARMONIZE DATA</b>";
		$message .= "<ul><li>Your full name: ";
		$message .= $data['firstName'];
		$message .= " ";
		$message .= $data['lastName'];
		$message .= "</li><li>Your email: ";
		$message .= $data['eMail'];
		$message .= "</li><li>Query Type: ";
		$message .= $data['queryType'];
		$message .= "</li><li>Consent to being contacted: ";
		$message .= $data['consentCheck'];
		$message .= "</li><li>Your message: ";
		$message .= $data['mMessage'];
		$message .= "</li></ul>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Paola Sofia Mendoza <noreply@gmail.com>' . "\r\n";
		/*$headers .= "Cc: $emailCC" . "\r\n";*/
		mail($to,$subject,$message,$headers);
    }
?>