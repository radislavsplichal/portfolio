<?php

if(isset($_SESSION['activePage']){
  switch ($_SESSION['activePage']) {
      case 'landingPage':
          include 'landingPage.php';
          break;
      case 'blog':
          include 'blog.php';
          break;
      case 'shoppingList':
          include 'website.php';
          break;
  }  
  else {
    echo "ERROR 404!";
  }


}

?>
