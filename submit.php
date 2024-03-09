<?php 
    ini_set( 'display_errors', 1);
    error_reporting(E_ALL);
    
    $data1 = $_POST;
	sendEmail($data1);
	/*header('location: gracias.html');*/
    function sendEmail($data1){
		/*$emailCC = $_POST['email'];*/
		$to = "ev_mendoza@outlook.com";
		$subject = 'Mailer HTML';
		$message = "Este código ha funcionado. Datos: <b>MASTER, CONTROL
        & HARMONIZE DATA</b>";
		$message .= "<ul>";
		$fields = array("formName", "formMail", "formSubject", "formMessage");
		foreach ($fields as $value) {
			$message .= "<li>$value: $data1[$value]</li>";
		}
		$message .= "</ul>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Paola Sofia <noreply@gmail.com>' . "\r\n";
		/*$headers .= "Cc: $emailCC" . "\r\n";*/
		mail($to,$subject,$message,$headers);
    }
?>
