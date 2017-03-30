<?php
session_start();
class Page {

public $articleCount;

public function showArticles ($conn){
  $sql = "SELECT * FROM articles ORDER BY dateCreated";

  $result = $conn->query($sql);
  $articles = array();
  $i = 0;
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
      $articles[i]= $article;
      i++;

    }

  } else {

    echo "No Articles in the database";
  }
}

public function login ($conn, $user, $pass){

  if ($user == "admin" && $pass == "mirus"){
                 $_SESSION['valid'] = true;
                 $_SESSION['timeout'] = time();
                 $_SESSION['username'] = 'admin';

                 echo 'You have entered valid use name and password';
              }else {
                 $msg = 'Wrong username or password';
              }
  }

  public function displayLogin () {

    if (isset($_SESSION['username'])) {
      //echo "You are logged in!";
      echo '  <script>
      $(document).ready(function(){
        $("#login").hide();
        $("#newArticleForm").show();
        $("#logout").show();
        $(".administration").show();
      });


      </script>';



    } else {
      echo '  <script>
      $(document).ready(function(){
        $("#login").show();
        $("#newArticleForm").hide();
        $("#logout").hide();
        $(".administration").hide();
      });


      </script>';

    }


  }

}


?>
