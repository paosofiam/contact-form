<?php 
    $_post = json_decode(file_get_contents('php://input'),true);

    $theData = $_post;
	//var_dump($theData);
	sendEmail($theData);

    function sendEmail($theData){
		$to = $theData['eMail'];
		$subject = 'paosofiam.com Mailer PHP - Frontend Mentor Contact Form';
		$message = "¡Thanks for viewing my portfolio! You submitted the next info: <b>MASTER, CONTROL & HARMONIZE DATA</b>";
		$message .= "<ul><li>Your full name: ";
		$message .= $theData['firstName'];
		$message .= " ";
		$message .= $theData['lastName'];
		$message .= "</li><li>Your email: ";
		$message .= $theData['eMail'];
		$message .= "</li><li>Query Type: ";
		$message .= $theData['queryType'];
		$message .= "</li><li>Consent to being contacted: ";
		$message .= $theData['consentCheck'];
		$message .= "</li><li>Your message: ";
		$message .= $theData['mMessage'];
		$message .= "</li></ul>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Paola Sofia Mendoza <noreply@gmail.com>' . "\r\n";
		$headers .= "Cc: hello@paosofiam.com" . "\r\n";

		mail($to,$subject,$message,$headers);
		/*if($submitted){
			echo 'Email Submitted';
		}
		else{
			echo error_get_last()['message'];
		} */
    }
?>