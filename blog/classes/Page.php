<?php
session_start();
class Page {

public $articleCount;
public $articles = array();

public function showArticles ($conn){
  $sql = "SELECT * FROM articles ORDER BY dateCreated";

  $result = $conn->query($sql);
  //$articles = array();
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
      //$article->displayArticle();

      $this->articles[$row["id"]] = $article;
      $i++;

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

public function displayEditMode($id) {

$articleToEdit = $this->articles[$id];
//var_dump($this->articles[$id]);
  echo '
  <div id="editArticleForm" class="col-md-6 col-md-offset-3 col-xs-offset-1">
    <form action="editArticle.php" method="POST">
      <input name="id" type="hidden" value="'.$id.'"></input>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="'.$articleToEdit->title.'" >
      </div>

      <textarea id="editor1" name="article" class="form-control" rows="3" >'.$articleToEdit->article.'</textarea>



      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>
<script >

  CKEDITOR.replace("editor1");

</script>
';

 if (isset($_SESSION['state']) && $_SESSION['state'] == 'edit') {
    //echo "You are logged in!";
    echo '  <script>
    $(document).ready(function(){
      $("#editArticleForm").show();
      $("#newArticleForm").hide();
    });


    </script>';

  } else {
    echo '  <script>
    $(document).ready(function(){
      $("#editArticleForm").hide();
      $("#newArticleForm").show();
    });


    </script>';

  }

}

}


?>
