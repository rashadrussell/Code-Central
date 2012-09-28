<?php session_start(); ?>
<?php
include '../../config/connection.php';

$bio = $_POST['bio'];
$bio = stripslashes($bio);
$bio = mysql_real_escape_string($bio);

mysql_query("UPDATE users SET bio='$bio' WHERE email='$_SESSION[email]'") or die(mysql_error());
header('Location: ../../profile.php');
?>