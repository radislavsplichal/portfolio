<?php
session_start();
$_SESSION['activePage'] = $_GET['activePage'];
echo $_SESSION['activePage'];
header("Location:"."index.php");
exit();



?>
