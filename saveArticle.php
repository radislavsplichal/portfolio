<?php
include 'classes/loadComponents.php';



  $title = $_GET["title"];
  $text = $_GET["text"];

  $newArticle = new Article;
  $newArticle->insertArticle($title, $text);

  header("Location:"."index.php");
  exit();
 ?>
