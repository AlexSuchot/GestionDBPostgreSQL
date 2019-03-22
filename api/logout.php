<?php
session_destroy();
setcookie("user", "", time() - 365*24*3600, "/");
setcookie("password", "", time() - 365*24*3600, "/");
if($_SESSION['user'] === null){
Header('Location: ../vue/login-page.php');
exit;
}
?>