<?php

// Error codes

switch $_SESSION['error']{

case 'badPswd':
  echo "The password you have entered is wrong!";
  break;
case 'dbNotConn':
  echo "The connecntion to the database is not working properly, check the service!";
  break;
case '404':
  echo "The file has not been found. Error 404!";
  break;
case 'blin':
  echo "Boris";
  break;

}

 ?>
