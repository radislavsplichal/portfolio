<?php
//this is an experimental approach to unify the site management processes

//Lilly can do stuff and all she needs is just a call.

//She is not an object. She is a woman. She might behave the same but it is a
//great insult to think of her as an object.

//to instatiate her just create an bot-> new Lilly; and use one of her trics


class Lilly {

	private $conn;

	private function establishConnection(){

		// configuration of the database
		$servername = "89.239.10.163";
		$username = "blogger";
		$password = "pJOToXed0MzjySW7";
		$dbname = "radislavsplichal";

		// Create connection
		$this->conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			echo '<div class="alert alert-danger" role="alert">'."Error: " . $sql . "<br>" . $conn->error;
		}

	}
	private function executeQuerry($sql){
		if ($this->conn->query($sql) === TRUE){
			echo "Success!";
			$response = ['OK'];
			return $response;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			$response = ['Connection Error',$conn->error];
			return $response;
		}
	}


	public function saveObject ($type,$arguments,$values) {
		$this->establishConnection();
		// values need to be separated by "','" and concatanated by .
		$sql= "INSERT INTO $type ($arguments) VALUES ('$values');";

		$this->executeQuerry($sql);


	}

	public function deleteObject($id,$type){

		$this->establishConnection();

		$sql = "DELETE FROM $type WHERE id ='$id' ";

		$this->executeQuerry($sql);
	}

	public function editObject($id,$type){
		//to be added
	}

}


?>
