<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<?php
//session_start();
include 'classes/Article.php';
include 'classes/Page.php';
//include 'router.php';




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
  <title>Portfolio</title>

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
        <a class="navbar-brand glyphicon glyphicon-home" href="router.php?activePage=0"></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="router.php?activePage=1">About me</a></li>
            <li><a href="router.php?activePage=2">Blog</a></li>
            <li><a href="router.php?activePage=3">Shopping List</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
          <li id="login">
            <form method="POST" action="login.php" class="navbar-form navbar-left" >
            <div class="form-group">
              <input name="username" type="text" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control" placeholder="Password" required>
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
    <?php if(isset($_SESSION['activePage'])){
      switch ($_SESSION['activePage']) {
          case 0:
              include 'landingPage.php';
              break;
          case 1:
              include 'cv.php';
              break;
          case 2:
              include 'blog.php';
              break;
          case 3:
              include 'shoppingList.php';
              break;
      }



    }else {
      include 'landingPage.php';
    }
    ?>
</div>
<div class="panel  col-md-12 col-xs-12">

  <div class="panel-footer">Panel footer</div>
</div>
</body>
</html>
