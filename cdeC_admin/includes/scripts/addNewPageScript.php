<?php session_start(); ?>
<?php
require_once('../classes/pages.php');
$user = new Pages();

$title     = $_POST['title'];
$linkTitle = $_POST['linkTitle'];
$body      = $_POST['body'];

$newPage = $user->addNewPage($title, $linkTitle, $body);

if($newPage) {
    header("Location: ../../pages.php");
} else {
    echo 'Invalid Input';
}

/*
$firstname = addslashes($firstname);
$lastname  = addslashes($lastname);
$email     = addslashes($email);
$password  = addslashes($password);
$country   = addslashes($country);
$website   = addslashes($website);

$firstname = mysql_real_escape_string($firstname);
$lastname  = mysql_real_escape_string($lastname);
$email     = mysql_real_escape_string($email);
$password  = mysql_real_escape_string($password);
$country   = mysql_real_escape_string($country);
$website   = mysql_real_escape_string($website);


mysql_query("INSERT INTO users (firstname, lastname, email, password, country, website)
	     VALUES ('$firstname', '$lastname', '$email', '$password', '$country', '$website')");
*/

?>