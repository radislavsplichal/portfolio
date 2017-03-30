<?php
include ('databaseConnection.php');
//echo $servername;
class Article
{
  //properties

  public $id;
  public $dateCreated;
  public $dateUpdated;
  public $article;
  public $title;
  public $querry;

public function insertArticle ($conn,$title, $text) {
  $date = date('d.m.Y');
  $author = "Admin";
  $sql = "INSERT INTO articles (author, article, dateCreated, title) VALUES ('$author', '$text', '$date', '$title');";

  if ($conn->query($sql) === TRUE){
                        echo "Success!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                  }


public function displayArticle () {
  echo '<div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="panel panel-default">
        <div class="panel-heading"><b>'.$this->title.'</b> '.$this->dateCreated.' <i>'.$this->author.'</i></div>
        <div class="panel-body">
        '.$this->article.'
        </div>
        </div>
        </div>
        <div class="col-md-1"></div>
        </div>';
}





}
?>
