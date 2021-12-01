<?php
$to = "adittya@maxteroit.com"; // Your Brand Mail ID
$from = "root@maxteroit.com"; // Replace it with your From Mail ID

$headers = "From: " . $from . "rn";

$subject = "New subscription";
$body = "New user subscription: " . $_POST['EMAIL'];
if( filter_var($_POST['EMAIL'], FILTER_VALIDATE_EMAIL) )
{
if (mail($to, $subject, $body, $headers, "-f " . $from))
{
echo 'Your e-mail (' . $_POST['EMAIL'] . ') has been added to our mailing list!';
}
else
{
echo 'There was a problem with your e-mail (' . $_POST['EMAIL'] . ')';
}
}
?>