<?php
class Page {

public $articleCount;

public function showArticles ($conn){
  $sql = "SELECT * FROM articles ORDER BY dateCreated";

  $result = $conn->query($sql);

  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      //print_r($row);
      $article = new Article;
      $article->id = $row["id"];
      $article->author = $row["author"];
      $article->article = $row["article"];
      $article->dateCreated = $row["dateCreated"];
      $article->dateUpdated = $row["dateUpdated"];
      $article->title = $row["title"];
      $article->displayArticle();
    }

  } else {

    echo "No Articles in the database";
  }
}
}
?>
