<?php
session_start();

if(isset($_POST['user']) && isset($_POST['password'])){
    $user = $_POST['user']; 
    $password = $_POST['password'];
    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;
}

$user = $_SESSION['user'];
$password = $_SESSION['password'];
$dbname = 'cours';
$localhost = 'localhost';
$port = 5432;


try{
$conn = pg_connect("host=$localhost port=$port dbname=$dbname user=$user password=$password") or die('Connexion impossible : ' . pg_last_error());
if($user === 'admin' or $user === 'postgres'){
    header('Location: ../vue/select-page.php');
} else{

}
}catch(Exception $e){
    header('Location: ../vue/login-page.php');

}

?>