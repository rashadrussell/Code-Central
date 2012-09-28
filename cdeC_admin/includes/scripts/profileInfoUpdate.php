<?php session_start(); ?>
<?php
require_once(dirname(__DIR__) . '/' . '../' . '../' . 'config/' . 'connection.php');
require_once('../cdeC_functions.php');

$body = $_POST['body'];
$body = stripslashes($body);
$body = mysql_real_escape_string($body);

$pid = $_SESSION['pageId'];

mysql_query("UPDATE pages SET body='$body' WHERE id='$pid'") or die(mysql_error());
header("Location: ../../edit.php?pid=" . $pid);
?>