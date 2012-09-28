<?php

$q = $_GET["q"];

$email = $_POST['email'];
$email = stripslashes($email);
$email = mysql_real_escape_string($email);

$sql = mysql_query("SELECT firstname, lastname, country, website, bio FROM users WHERE email='$_SESSION[email]'");

$userInfo = mysql_fetch_array($sql);

?>