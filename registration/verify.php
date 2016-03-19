<?php

$cookie_value=1;
setcookie("login",$cookie_value,time()+365*24*60*60);
$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$redirect = str_replace('verify.php', 'index_test.php', $url);

// redirects back to the login page

header("Location: $redirect");
?>