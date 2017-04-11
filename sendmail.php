<?php
		//form data
		$naam = $_POST['naam'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$bericht = $_POST['bericht'];
		
		//email subject
		$subject = "Interesse rijles";
		
		//send email to
		$sendTo = "d.changur@live.nl, info@rijschoolroch.nl, rijschool_roch@live.nl";
		
		//email message
		$email_message .= "<p><h3>Gegevens contactpersoon</h3></p>";
		
		function clean_string($string) {
 
		  $bad = array("content-type","bcc:","to:","cc:","href");
	 
		  return str_replace($bad,"",$string);
 
		}
  
		$email_message .= "<p><b>Naam:</b> ".clean_string($naam)."<br>\n";
	 
		$email_message .= "<b>Email:</b> ".clean_string($email)."<br>\n";
	 
		$email_message .= "<b>Tel:</b> ".clean_string($tel)."<br><br>\n\n";
	 
		$email_message .= "<b>Vraag/opmerking:</b> <br>".clean_string($bericht)."</p>\n";
		
		
		//create email headers
		$headers = "From: ".$email."\r\n"."Reply-To: ".$email."\r\n" ."X-Mailer: PHP/" . "\r\n" . phpversion();
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		
		//send the mail	
		mail($sendTo, $subject, $email_message, $headers);
?>