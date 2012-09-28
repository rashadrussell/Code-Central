<?php

$q = $_GET["q"];

$email = $_POST['email'];
$email = stripslashes($email);
$email = mysql_real_escape_string($email);

$pid = $_GET['pid'];

$sql = mysql_query("SELECT * FROM pages WHERE id='$pid'") or die(mysql_error());

$userInfo = mysql_fetch_array($sql);

?>