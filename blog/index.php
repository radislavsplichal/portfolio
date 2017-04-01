<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<?php
//session_start();
include 'classes/Article.php';
include 'classes/Page.php';




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

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand glyphicon glyphicon-home" href="../index.php"></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="http://radislavsplichal.cz/portfolio">About me</a></li>
            <li><a href="http://radislavsplichal.cz/website">Shopping List</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
          <li id="login">
            <form method="POST" action="login.php" class="navbar-form navbar-left" >
            <div class="form-group">
              <input name="username" type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
          </form>
        </li>
          <li id="logout">
            <form action="unlogin.php" class="navbar-form navbar-left">
              <div class="form-group">
                <button type="submit" class="btn btn-default">Logout</button>
              </div>
            </form>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


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

</div>
</body>
</html>
