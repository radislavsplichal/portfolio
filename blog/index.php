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
</head>
<body>
  <div class="row">
    <div class="col-md-1 col-xs-1">.col-md-1</div>

    <div class="col-md-10 col-xs-10">
      <form action="saveArticle.php" method="get">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>

        <textarea name="text" class="form-control" rows="3"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
    <div class="col-md-1 col-xs-1">.col-md-1</div>
  </div>
</body>
</html>
