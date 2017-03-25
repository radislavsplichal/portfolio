<?php
//echo "hello world";
//include 'databaseConnection.php';

if (!isset($_SESSION['username'])){
session_start();
echo "Seesion started";
}

include 'classes/Article.php';
include 'classes/Page.php';

if (isset($_SESSION['username'])) {
  echo "You are logged in!";
  ?>
  <script>
    $ ( "#login" ).hide("slow");
  </script
  <?php
}


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>My Homepage</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>




  <div class="container">
  <div class="row">
  <header class="col-md-offset-3">
    <h1>Welcome to my blog!</h1>

    <p>This page is dedicated to my work and glorius statements. All Key supporters are super stoaked about the situation.</p>
  </header>
</div>
<div class="row">
  <?php

$website = new Page;
$website->showArticles($conn);

  ?>
</div>

  <div class="row">


    <div class="col-md-6 col-md-offset-3 col-xs-offset-1">
      <form action="saveArticle.php" method="get">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title">
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


<div id="login">
  <form method="POST" action="login.php" class="navbar-form navbar-left" >
  <h3>Administration</h3>
  <div class="form-group">
    <input name="username" type="text" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <input name="password" type="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
</div>
</div>
</body>
</html>
