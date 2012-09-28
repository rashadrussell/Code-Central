<?php
session_start();

if(file_exists(dirname(__DIR__) . '/' . 'cdeC_load.php')) {
require_once(dirname(__DIR__) . '/' . 'cdeC_load.php');
}

$toWhom  = $_POST['toWhom'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$toWhom  = stripslashes($toWhom);
$subject = stripslashes($subject);
$message = stripslashes($message);

$toWhom  = mysql_real_escape_string($toWhom);
$subject = mysql_real_escape_string($subject);
$message = mysql_real_escape_string($message);

mysql_query("INSERT INTO messages (toUserId, fromUserId, subject, message, date) VALUES ($toWhom, $_SESSION[id], '$subject', '$message', ' ')") or die(mysql_error());

?>