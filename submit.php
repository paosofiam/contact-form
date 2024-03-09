<?php 
    $datos = $_POST;
	sendEmail($data);
	/*header('location: gracias.html');*/

    function sendEmail($data){
		$emailCC = $_POST['email'];
		$to ="eva.mendoza1525@gmail.com;";
		$subject = 'Mailer HTML';
		$message = "Este código ha funcionado. Datos: <b>MASTER, CONTROL
        & HARMONIZE DATA</b>";
		$message .= "<ul>";
		$fields = array("formName", "formMail", "formSubject", "formMessage");
		foreach ($fields as $value) {
			$message .= "<li>$value: $data[$value]</li>";
		}
		$mensaje .= "</ul>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: Paola Sofia <noreply@gmail.com>' . "\r\n";
		$headers .= "Cc: $emailCC" . "\r\n";
		mail($to,$subject,$mensaje,$headers);
    }
?>
