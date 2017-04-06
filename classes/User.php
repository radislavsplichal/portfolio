<?php

class User {
    public $rights;
    public $firstName;
    public $lastName;
    public $password;


    public function login($conn, $userName, $password){
      $sql = "SELECT * FROM users";
      if ($result = $conn->query($sql) && $result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          # code...


        } else {
          # code...
          echo "Ops. There is something wrong with the database!";
        }

      }

    }
    public function createUser() {

    }
    public function editUser() {

    }


}

?>
