<?php
session_start();
//include 'classes/Page.php';
include 'classes/Article.php';
$id = $_POST['id'];
if (isset($_SESSION['state']) && $_SESSION['state'] == 'edit')
{
$articleText = $_POST['article'];
$articleTitle = $_POST['title'];

$article = new Article;
$article->editArticle($conn, $id, $articleText, $articleTitle);

$_SESSION['state'] = 'view';}
else {

  $_SESSION['state'] = 'edit';
  $_SESSION['focus'] = $id;
}

header("Location:"."index.php");
exit();



 ?>
