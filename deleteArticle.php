<?php
include 'classes/Article.php';


$id = $_POST['id'];

$article = new Article;
$article->destroyArticle($conn, $id);

header("Location:"."index.php");
exit();



 ?>
