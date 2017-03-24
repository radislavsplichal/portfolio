<?php echo "hello world";
include 'databaseConnection.php';

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
  <h1>Welcome to my blog!</h1>

  <p>This page is dedicated to my work and glorius statements. All Key supporters are super stoaked about the situation.</p>

  


  <div class="row">
    <div class="col-md-1 col-xs-1"></div>

    <div class="col-md-10 col-xs-10">
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
    <div class="col-md-1 col-xs-1"></div>
  </div>
  <script >

    CKEDITOR.replace('editor1');

  </script>
</body>
</html>
