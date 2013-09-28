<?php

	header("Content-Type: text/javascript; charset=utf-8");

	$recipient = "yourhomeinflorence@gmail.com";

	$messages = array (
		"errore_sicurezza" => array(
			"it" => "Qualcosa è andato storto durante l'invio di e-mail, si prega di riprovare.",
			"en" => "Something went wrong during sending email, please try again.",
			"es" => "Algo salió mal durante el envío de correo electrónico, por favor intente de nuevo.",
			"de" => "Etwas ist schiefgelaufen beim Senden mail versenden, bitte versuchen Sie es erneut.",
			"fr" => "Quelque chose s'est mal passé lors de l'envoi de courriel, veuillez réessayer.",
			),
		"errore_invio" => array(
			"it" => "Qualcosa è andato storto durante l'invio di e-mail, si prega di riprovare.",
			"en" => "Something went wrong during sending email, please try again.",
			"es" => "Algo salió mal durante el envío de correo electrónico, por favor intente de nuevo.",
			"de" => "Etwas ist schiefgelaufen beim Senden mail versenden, bitte versuchen Sie es erneut.",
			"fr" => "Quelque chose s'est mal passé lors de l'envoi de courriel, veuillez réessayer.",
			),
		"errore_campo_email" => array(
			"it" => "Assicurati di aver inserito un indirizzo email valido.",
			"en" => "Please ensure you have entered a valid email address.",
			"es" => "Por favor, asegúrese de que ha introducido una dirección de email válida.",
			"de" => "Bitte achten Sie eine gültige E-Mail-Adresse eingegeben.",
			"fr" => "Veuillez vous assurer que vous avez entré une adresse email valide.",
			),
		"errore_mancanza_campi_obbligatori" => array(
			"it" => "Assicurati di aver compilato tutti i campi obbligatori.",
			"en" => "Please ensure you have completed all required fields.",
			"es" => "Por favor, asegúrese de que ha completado todos los campos obligatorios.",
			"de" => "Bitte stellen Sie sicher, dass alle Pflichtfelder ausgefüllt.",
			"fr" => "Veuillez vous assurer que vous avez rempli tous les champs requis.",
			),
		"ok_invio" => array(
			"it" => "Grazie! Il tuo messaggio è stato inviato.",
			"en" => "Thank You! Your message has been sent.",
			"es" => "¡Gracias! Tu mensaje ha sido enviado.",
			"de" => "Vielen Dank! Ihre Nachricht wurde gesendet.",
			"fr" => "Merci! Votre message a été envoyé.",
			),
	);

	//$provenienza = array ('yourhomesinflorence.it','www.yourhomesinflorence.it');
    
	$json_response = "";
	$status = true;

	function getMessage($messageType, $lang) {
		global $messages;
		return $messages[$messageType][$lang];
	}

	function check_referer($provenienza) {
	   if (count($provenienza)) {
	      $found = false;
	      $temp = explode("/",getenv("HTTP_REFERER"));
	      $referer = $temp[2];
	      for ($x=0; $x < count($provenienza); $x++) {
	         if (eregi ($provenienza[$x], $referer)) {
	            $found = true;
	         }
	      }
	      if (!getenv("HTTP_REFERER"))
	         $found = false;

	      if (!$found){
	         error_log("[FormMail.php] Illegal Referer. (".getenv("HTTP_REFERER").")", 0);
	      }
	      return $found;
	   } else {
	   	return true;
	   }
	}

	if ($provenienza){
	   if (!check_referer($provenienza) ){	   
		   $json_response = array (
				"status" => "1", //0 == ok , 1== Errore
				"messaggio" => "Errore di sicurezza. Dominio di provenienza errato",
			);
		   $status = false;
		}
	}


	include("EmailAddressValidator.php"); // external class to verify email address
	$validator = new EmailAddressValidator;
     
  	if(isset($_GET['contactFormSubmitted']) and ($status)) {
	    // Form submission. Feel free to add more , make sure you add validation and add them to the mail line.
		$name = $_GET['nome'];
		$email = $_GET['email'];
		$type = $_GET['oggetto'];
		$message = $_GET['corpo'];
		empty($_GET['lang'])? $lang = 'it' : $lang = $_GET['lang'];

		// check length of name, email and message
		if (strlen($name) < 3 || strlen($message) < 20) {
  			// exit(getMessage("errore_mancanza_campi_obbligatori", $lang)); // exit program, return message
  			$json_response = array (
				"status" => "1", //0 == ok , 1== Errore
				"messaggio" => getMessage("errore_mancanza_campi_obbligatori", $lang),
			);
	   		$status = false;
  		}

		// validate email address
  		if (!($validator->check_email_address($email)) and ($status)) { // if function returns false
  			//exit(getMessage("errore_campo_email", $lang)); // exit program with error message
  			$json_response = array (
				"status" => "1", //0 == ok , 1== Errore
				"messaggio" => getMessage("errore_campo_email", $lang),
			);
	   		$status = false;
        } // otherwise carry on
		
		if($status){
			// mail header
			$headers = "From: " . strip_tags($email) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "X-Mailer: DT_formmail\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			// Enter a subject, only you will see this so make it useful
			$subject = "$name for $type";

			// Build form content
			$mailbody = '<html><body>';

			$mailbody .= '<p>';
			$mailbody .= '<span><b>Ti è arrivato un nuovo messaggio</b></span><br/>';
			$mailbody .= '<span>via: www.yourhomesinflorence.com</span>';

			$mailbody .= '<p>';
			$mailbody .= '<span><b>Dettaglio del messaggio</b></span><br/>';
			$mailbody .= '<span>Da: '. $name .'</span><br/>';
			$mailbody .= '<span>Email: '. $email .'</span><br/>';
			$mailbody .= '<span>Data: '. date("j F Y H:i:s") .'</span><br/>';
			$mailbody .= '<span>Lingua: '. $lang .'</span><br/>';
			$mailbody .= '<span>Oggetto: '. $type .'</span><br/>';
			$mailbody .= '</p>';

			$mailbody .= '<p>';
			$mailbody .= '<span><b>Messaggio</b></span><br/>';
			$mailbody .= '<span>'. $message .'</span><br/>';
			$mailbody .= '</p>';

			$mailbody .= '</body></html>';

			// Send email, if something goes wrong, kill programm and return error message
			if(mail($recipient, $subject, $mailbody, $headers)){
				// If all's well, return success message
				//echo getMessage("ok_invio", $lang);
				$json_response = array (
					"status" => "0", //0 == ok , 1== Errore
					"messaggio" => getMessage("ok_invio", $lang),
				);
			} 
			else {
				//or die(getMessage("errore_invio", $lang));
				$json_response = array (
					"status" => "1", //0 == ok , 1== Errore
					"messaggio" => getMessage("errore_invio", $lang),
				);
				$status = false;
			}
		}
  	}
  	else {
  		if($status){
		   $json_response = array (
				"status" => "1", //0 == ok , 1== Errore
				"messaggio" => "Errore di sicurezza. Non impostato valore di controllo",
		   );
		   $status = false;
		}
  	}
  	echo json_encode($json_response)
?>