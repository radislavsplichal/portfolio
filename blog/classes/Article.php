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
  echo '<div id="'.$this->id.'" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div class="panel panel-default">
        <div class="panel-heading"><b>'.$this->title.'</b>
        <div class="btn-group" role="group" aria-label="...">
        <form method="POST" action="editArticle.php">
          <input type="hidden" name="id" value='.$this->id.'></input>
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </form>
        <input type="hidden" name="id" value='.$this->id.'></input>
          <span onClick="this.parentNode.submit();" type="submit" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </form>
        </div>
        </br>
        Author: <i>'.$this->author.'</i></br>
        Created: '.$this->dateCreated.'
          <div class="administration">
          <form method="POST" action="deleteArticle.php">
<<<<<<< HEAD
            <input type="hidden" name="id" value='.$this->id.'></input>
            <span onClick="this.parentNode.submit();" type="submit" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </form>
          <form method="POST" action="editArticle.php">
            <input type="hidden" name="id" value='.$this->id.'></input>
            <span onClick="this.parentNode.submit();" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
          </form>
=======
>>>>>>> origin/master
          </div>
          </div>
        <div class="panel-body">
        '.$this->article.'
        </div>
        </div>
        </div>
        <div class="col-md-1"></div>
        </div>';
}

public function destroyArticle($conn, $id){
 $sql = "DELETE FROM articles WHERE id ='$id' ";
  if ($conn->query($sql) === TRUE){
                        echo "Success! Article Deleted!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                  }


public function editArticle($conn, $id, $article, $title){
$date = date('d.m.Y');
$sql = "UPDATE articles
SET article='$article', dateUpdated='$date', title ='$title' WHERE id ='$id'";

if ($conn->query($sql) === TRUE){
                      echo "Success! Article Updated!";
                  } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                  }

                }


}



<<<<<<< HEAD

=======
>>>>>>> origin/master
?>
