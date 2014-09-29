<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

// multiple recipients
$to  = 'petter.ruud@gmail.com';


// message
$html = '
<html>
<head>
  <title>BACON</title>
</head>
<body>
	<h2>Beskjed fra www.petter.me</h2>
  <p>
  	'.$message.'
  </p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: hei@petter.me';
// Mail it
if (mail($to, $subject, $html, $headers)) { 
     echo "E-posten har blitt sendt"; 
} else { 
     echo "Arrgh, noe gikk feil."; 
}  
?>