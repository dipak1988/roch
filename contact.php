

<?php
header( "refresh:3;url=http://www.rijschoolroch.nl" ); 


if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
	
	$email_from ="info@rijschoolroch.nl";
 
    $email_to = "info@rijschoolroch.nl, rijschool_roch@live.nl, d.changur@live.nl";
 
    $email_subject = "Interesse rijles";
 
     
	$firstName = $_POST['naam']; // required
 
    $email = $_POST['email']; // required
 
    $tel = $_POST['tel']; // required
 
    $bericht = $_POST['bericht']; // not required
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Sorry, er is helaas iets misgegaan bij het versturen van het formulier.";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Probeer het asltublieft opnieuw.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['naam']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['tel']) ||
 
        !isset($_POST['bericht']) ) 
    {
 
        died('Sorry, er is helaas iets misgegaan bij het versturen van het formulier.');       
 
    }
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'U heeft een ongeldige e-mail adres ingevuld.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$firstName)) {
 
    $error_message .= 'Voer een naam in<br />';
 
  }
 
 
  if(strlen($bericht) < 2) {
 
    $error_message .= 'Uw bericht is niet lang genoeg.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
  $message = "<html><head>
	<style type='text/css'>
	body {font-family: Arial, Helvetica, sans-serif !important;}
	</style>
	</head><body>";
    $email_message .= "<p><h3>Gegevens contactpersoon</h3></p>";
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "<p><b>Naam:</b> ".clean_string($firstName)."<br>\n";
 
    $email_message .= "<b>Email:</b> ".clean_string($email)."<br>\n";
 
    $email_message .= "<b>Tel:</b> ".clean_string($tel)."<br><br>\n\n";
 
    $email_message .= "<b>Vraag/opmerking:</b> <br>".clean_string($bericht)."</p>\n";
	
	$message .= "</body></html>";
 
 
// create email headers
 
$headers = "From: ".$email."\r\n"."Reply-To: ".$email."\r\n" ."X-Mailer: PHP/" . "\r\n" . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
Email verzonden
 

 
<?php


 
}
 
?>





