<?php
//this is an experimental approach to unify the site management processes

//Lilly can do stuff and all she needs is just a call.

//She is not an object. She is a woman. She might behave the same but it is a
//great insult to think of her as an object.

//to instatiate her just create an bot-> new Lilly; and use one of her trics

//To be added and removed from all the classes
//include ('databaseConnection.php');

class Lilly {

	//private $name = Lilly;
	public function makeSandwich($type) {
		echo "go F* yourself :D";

	}

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
