<?php
//this is an experimental approach to unify the site management processes
//Lilly can do stuff and all it needs is just a call.

//To be added and removed from all the classes
//include ('databaseConnection.php');

class Lilly {

	//private $name = Lilly;

	public function saveObject ($type,$arguments,$values,$conn) {

		$sql= "INSERT INTO $type ($arguments) VALUES ('$values');";
		echo $sql;
		if ($conn->query($sql) === TRUE){
                        echo "Success!";
						$response = ['OK'];
						return $response;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
						$response = ['Connection Error',$conn->error];
						return $response;
                    }

                  }

	}




?>
