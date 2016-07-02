<?php 

    $suject = $_POST["suject"];
    $message_raw = $_POST["message"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    
    $to = "ecampbell@uigroupja.com, emeliocampbell@hotmail.co.uk";
$subject = "Message from home page, wwww.uigroupja.com";

$message = "
<html>
<head>
<title>Contact message</title>
</head>
<body style='text-align:center'>
<p>".$message_raw."</p>
<h3>contact</h3>
".$email." ".$contact."
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@uigroupja.com>' . "\r\n";

mail($to,$subject,$message,$headers);
		            
?>
		        