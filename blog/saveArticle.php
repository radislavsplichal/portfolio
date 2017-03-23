<?php
include 'classes/Article.php';


  $title = $_GET["title"];
  $text = $_GET["text"];

  $newArticle = new Article;
  $newArticle->insertArticle($conn,$title, $text);

  header("Location:"."index.php");
  exit();
 ?>
