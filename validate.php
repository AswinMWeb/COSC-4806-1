
<?php
session_start();

$valid_username = 'Aswin';
$valid_password = '12345';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['authenticated'] = 1;
    $_SESSION['username'] = $username;
    header('Location: /index.php');
    exit();
} else {
    if(!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 1;
    } else {
        $_SESSION['login_attempts']++;
    }
    header('Location: /login.php');
    exit();
}
?>
