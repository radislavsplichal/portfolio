<?php
include 'classes/loadComponents.php';


$id = $_POST['id'];

$article = new Article;
$article->destroyArticle($id);

header("Location:"."index.php");
exit();



 ?>
