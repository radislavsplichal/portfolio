<?php
// config file with database setup
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Prague" );

define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );



$servername = "89.239.10.163";
$username = "blogger";
$password = "pJOToXed0MzjySW7";
$dbname = "radislavsplichal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo '<div class="alert alert-danger" role="alert">'."Error: " . $sql . "<br>" . $conn->error;
}
 //echo '<div class="alert alert-success" role="alert">Spojení s databází bylo navázáno.</div>';

//$conn->close();

//require(CLASS_PATH.'/Article.php');
?>
