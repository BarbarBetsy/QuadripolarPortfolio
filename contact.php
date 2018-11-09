<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['input_text'];

$email_from = 'hallo@julia-cam.com';

$email_subject = "Neue Anfrage von Deiner Webseite";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $input_text.\n";

                $to = "barbarbetsy@googlemail.com";

                $headers = "From: $email \r\n";
                
                $headers .= "Reply to: $visitor_email\r\n";

                mail($to, $email_subject,$email_body,$headers);
                header('Location: index.html');
?>