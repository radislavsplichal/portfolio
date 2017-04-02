<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<?php
//session_start();





$website = new Page;
$website->displayLogin();
$website->showArticles($conn);
//echo "hello world";
//include 'databaseConnection.php';

// if (isset($_SESSION['username'])){
//
// echo $_SESSION['username'];
// }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My Blog</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
  <!-- <script>
  $(document).ready(function(){
    $("#login").remove();

  });

  </script> -->



  <div class="container">
  <div class="row">
  <header class="col-xs-12 col-sm-12 col-md-12 text-center">
    <h1>Welcome to my blog!</h1>

    <p>This page is dedicated to my work and glorius statements. All Key supporters are super stoaked about the situation.</p>
  </header>
</div>
<div class="row">

  <?php

  if (isset($_SESSION['state']) && $_SESSION['state']=='edit') {
    $website->displayEditMode($_SESSION['focus']);

  } else {
  //$website->showArticles($conn);
  foreach ($website->articles as $value) {
    //var_dump ($value);
    $value->displayArticle();
  }
  }
  ?>

</div>

  <div class="row">


    <div id="newArticleForm" class="col-md-6 col-md-offset-2 col-xs-offset-1">
      <form action="saveArticle.php" method="get">
        <div class="form-group">
          <label for="title">Add a new article</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
        </div>

        <textarea id="editor1" name="text" class="form-control" rows="3"></textarea>



        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

  </div>
  <script >

    CKEDITOR.replace('editor1');

  </script>

</div>

</body>
</html>
