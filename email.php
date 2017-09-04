<?php
$to     = "your-mail-id";
$from   = $_POST['email'];
$name   = $_POST['name'];
$phone  = $_POST['phone'];
$message= $_POST['comment'];
$subject = "Inquiry From fuisz.com";
$mail_body='<html>
<body bgcolor="#FFFFFF" topmargin="25">
<p> Hi, </p>
<p>Name: ' . $name . '</p>
<p>Email: ' . $from . '</p>
<p>Phone: ' . $phone . '</p>
<p>Message: ' . $message . '</p>
<p></p>
</body>
</html>';
//$headers  = "From: jfuisz@fuisz.com";
//$headers .= "Content-type: text/html";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'. $from .'>' . "\r\n";
$headers .= "Cc:cc-mail-id \r\n";
mail($to, $subject, $mail_body, $headers);
// redirect link for submission
header("Location: thankyou.html");
?>