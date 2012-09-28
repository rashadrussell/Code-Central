<?php session_start(); ?>
<?php
require_once(dirname(__DIR__) . '/' . '../' . '../' . 'config/' . 'connection.php');
require_once('../cdeC_functions.php');

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$country   = $_POST['country'];
$website   = $_POST['website'];
$bio       = $_POST['bio'];

$firstname = stripslashes($firstname);
$lastname  = stripslashes($lastname);
$country   = stripslashes($country);
$website   = stripslashes($website);
$bio       = stripslashes($bio);

$firstname = mysql_real_escape_string($firstname);
$lastname  = mysql_real_escape_string($lastname);
$country   = mysql_real_escape_string($country);
$website   = mysql_real_escape_string($website);
$bio       = mysql_real_escape_string($bio);


mysql_query("UPDATE users SET firstname='$firstname', lastname='$lastname', country='$country', website='$website', bio='$bio' WHERE email='$_SESSION[email]'") or die(mysql_error());
header('Location: ../../profile.php');
?>