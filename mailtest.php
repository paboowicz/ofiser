<?php
$to = "tomek@appgo.pl, formularz@ofiser.pl";
$subject = "This is a test HTML email";

$message = "
<html>
<head>
<title>This is a test HTML email</title>
</head>
<body>
<p>Test email. Please ignore.</p>
</body>
</html>
";

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: <info@example.com>' . "\r\n";
$headers .= 'Cc: sales@example.com' . "\r\n";

try {
    if(mail($to,$subject,$message,$headers)) {
        echo 'success!';
    }
    else {
        echo 'cannot send :(';
    }
} catch (Exception $e) {
    echo 'error: '.$e;
}
?>