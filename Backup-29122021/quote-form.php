<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'mail@runourcode.com';  

	// prepare message 
	$body = "Sie haben eine neue Magento Anfrage über Magento6Partner.de :
	
	Name:  $_POST[name]
	Phone Number:  $_POST[number]
	Email:  $_POST[email]
	Subject:  $_POST[subject]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Neue Magento 6 Anfrage', $body, $headers );

}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Vielen Dank für die Anfrage</title>
</head>
<body>
<p> Wir melden uns zeitnah bei Ihnen.</p>
</body>
</html>