<?php
include 'classes/loadComponents.php';


$id = $_POST['id'];

$article = new Article;
$article->deleteArticle($id);

header("Location:"."index.php");
exit();

//Joe the handler

//$object = new $type;
//$object->$action(args);

 ?>
