<?php


session_start();

$valid_username = 'aswin';
$valid_password = 'Password';

$username = $_REQUEST['username'];
$_SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($username == $valid_username && $password == $valid_password){
  header('Location: /index.php');
  echo "Login successful";
}else {
  if(!isset($_SESSION['login_attempts'])){
    $_SESSION['login_attempts'] = 1;
  }else{
    $_SESSION['login_attempts'] = $_SESSION['login_attempts'] + 1;;
  }
  echo "Login failed. Attempts: " . $_SESSION['login_attempts'];
  
}
    

?>