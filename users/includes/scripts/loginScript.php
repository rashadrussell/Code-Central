<?php session_start(); ?>
<?php
require_once('../classes/user.php');
$user = new User();

$login = $user->login($_POST['email'], $_POST['password']);

if ($login) {
    header('Location: ../../cdeC_admin.php');
} else {
    echo 'login failure';
}

?>