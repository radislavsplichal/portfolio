<?php
include ('databaseConnection.php');
echo $servername;
class Article
{
  //properties

  public $id = null;
  public $dateCreated = null;
  public $dateUpdated = null;
  public $article = null;
  public $title = null;
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

}
 ?>
