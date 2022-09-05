<?php  
session_start();
$_SESSION['PAGE'] = "LOGIN";

if (!isset($_SESSION['PAGE'])) {
    header('Location: index');
    die();
}

if (empty($_SESSION['PAGE'])) {
    $_SESSION['PAGE'] = "LOGIN";
}

if (isset($_POST['creat-account'])) {
    $_SESSION['PAGE'] = "REGISTER";
}

if (isset($_POST['auth-to-account'])) {
    $_SESSION['PAGE'] = "LOGIN";
}

if (isset($_POST['reset-my-account'])) {
    $_SESSION['PAGE'] = "RESET";
}

if ($_SESSION['PAGE'] == "LOGIN") {

    include 'auth/login.php';

} if ($_SESSION['PAGE'] == "REGISTER") {
 
    include 'auth/register.php';

} if ($_SESSION['PAGE'] == "RESET") {
    include 'auth/reset.php';
}
?>