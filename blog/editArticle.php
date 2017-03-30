<?php
include 'classes/Article.php';


$id = $_POST['id'];
$article = $_POST['article'];
$article = $_POST['title'];

$article = new Article;
$article->editArticle($conn, $id, $article, $title);

header("Location:"."index.php");
exit();



 ?>
