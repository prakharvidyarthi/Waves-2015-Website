<?php
require_once('config.php');
require_once('functions.php');
$link=f_sqlConnect(DB_USER,DB_PASSWORD,DB_NAME);
$_POST=f_clean($_POST);
if(!$_POST){
	$cookie_value=1;
	setcookie("login",$cookie_value,time()-3600);
	die("Please Login");
}
$email=$_POST['email'];
$password=$_POST['password'];
$result="SELECT * FROM users WHERE email='".$email."'";
$check=mysql_query($result);

if (!$check) {
		$cookie_value=1;
		setcookie("login",$cookie_value,time()-3600);
		die('Sorry, that username does not exist!');
		
	}

$check=mysql_fetch_assoc($check);

if(!($email==$check['email'] and $password==$check['password'])){
	$cookie_value=1;
	setcookie("login",$cookie_value,time()-3600);
	die("Check email or password");
}

if(!(isset($_COOKIE["login"]))) {
	die("Kindly enter email id and password");
} 
?>
<html>
	<head>
		<title>Members Area</title>
		<style type="text/css">
			body { background: #c7c7c7;}
		</style>
	</head>

	<body>
		<div style="width: 960px; background: #fff; border: 1px solid #e4e4e4; padding: 20px; margin: 10px auto;">
			<h3>Welcome <?php echo $check['name']; ?> </h3>
			<h4>Thank you For registering for Waves-2015.</h4>
			<p>Events registered for: <p>
			<?php $events_reg=check_events($check);
				$length=sizeof($events_reg);
				for($i=0;$i<$length;$i++){
					echo "<p>".$events_reg[$i]."</p><br>";
				}
			?>
			<p>This is the members only area. Only logged in users can view this page. Please <a href="logout.php">click here to logout</a></p>
			
			
		</div>
	</body>
</html>