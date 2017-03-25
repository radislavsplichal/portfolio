<?php
include 'classes/Page.php';
include 'databaseConnection.php';
session_start();

$user = $_POST["username"];
$pass = $_POST["password"];
echo $user;
echo $pass;

$page = new Page;
$page->login($conn, $user, $pass);

header("Location:"."index.php");
exit();
?>
