<?php
include 'classes/Page.php';
include 'databaseConnection.php';
include 'classes/User.php';
//session_start();

$userName = $_POST["username"];
$pass = $_POST["password"];

// echo $user;
// echo $pass;

$user = new User;
$user->login($conn, $userName, $pass);


header("Location:"."index.php");
exit();
?>
