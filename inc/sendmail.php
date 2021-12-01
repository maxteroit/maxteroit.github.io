<?php 
if (isset($_POST['contactName']) && isset($_POST['contactEmail'])){
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_post['contactSubject'];
$message = $_POST['contactMessage'];
$to = 'root@maxteroit.com';

mail($to,$subject,$message,$email);
?>