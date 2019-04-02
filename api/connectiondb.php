<?php
session_start();
$dbname = 'cours';
$localhost = 'localhost';

if (isset($_POST['submit'])) {
    try {
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];

    } catch (PDOException $e) {
        echo 'Veuillez vous reconnectez';die();

    }
}


$username = $_SESSION['user'];
$password = $_SESSION['password'];
$dsn = "pgsql:host=$localhost;port=5432;dbname=$dbname;user=$username;password=$password";
// create a PostgreSQL database connection
$conn = new PDO($dsn);

// display a message if connected to the PostgreSQL successfully
if ($conn) {

    // echo "Connected to the <strong>$db louloulfx </strong>  database successfully!";
}