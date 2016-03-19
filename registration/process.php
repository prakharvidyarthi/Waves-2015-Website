<?php
require_once('config.php');
require_once('functions.php');
//open connection using info from config file
f_sqlConnect(DB_USER,DB_PASSWORD,DB_NAME);
//to prevent from database injection attacks
$_POST=f_clean($_POST);
//setting main variable in the form

$table=$_POST['participation_detail'];
$keys=implode(",",(array_keys($_POST)));//STORES KEY AS A STRING
$values=implode("', '", array_values($_POST));
foreach ($_POST as $key => $value) {
	$column=mysql_real_escape_string($key);
	$alter=f_fieldExists($table,$column,$column_attr="VARCHAR(255) NULL");

	if(!$alter){
		echo "Unable to add column:".$column;
	}
}
//insert out value in database
$sql="INSERT INTO $table ($keys) VALUES('$values')";

if(!mysql_query($sql)){
	die('Error:'.mysql_error());
}
$check="SELECT * FROM  $table WHERE email="$_POST['email']"";
echo $check;
$results=mysql_query($check);
echo $results;
if($results){
	die('This email id is already in use');
}
mysql_close();
?>