<?php
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => '6LdaJwoTAAAAANL6RHO8n9JNXfMW1o3A9fUkS8EX', 'response' => $_POST["g-recaptcha-response"]); 
// Edit the secret key-value pair in $data to the secret key given by recaptcha

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$json_s = json_decode($result, true);

if ($json_s["success"] == true) {
require_once('config.php');
require_once('functions.php');
$link=f_sqlConnect(DB_USER,DB_PASSWORD,DB_NAME);
$_POST=f_clean($_POST);
unset($_POST['g-recaptcha-response']);
$keys=implode(",",(array_keys($_POST)));//STORES KEY AS A STRING
$values=implode("', '", array_values($_POST));
$sql = 'SELECT * FROM users where email = "'.$_POST['email'].'"';
$res = mysql_query($sql);
if($res && mysql_num_rows($res)>0){
  die("This email id has already been registered") ;
} 
$sql="INSERT INTO users ($keys) VALUES('$values')";

if(!mysql_query($sql)){
	die('Error:'.mysql_error());
}
mysql_close();
$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$redirect = str_replace('demo_form.php', 'confirm.htm', $url);

header("Location: $redirect");
}
else{
	$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$redirect = str_replace('demo_form.php', 'error.html', $url);

header("Location: $redirect");
}
?>
