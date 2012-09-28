<?php session_start(); ?>
<?php
require_once('../classes/user.php');
$user = new User();

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];
$password  = $_POST['password'];
$country   = $_POST['country'];
$website   = $_POST['website'];

$signup = $user->signup($firstname, $lastname, $email, $password, $country, $website);

if($signup) {
    header("Location: ../../users/profile.php");
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
header("Location: ../../profile.php");

?>