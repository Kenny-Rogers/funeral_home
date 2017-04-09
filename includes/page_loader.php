<?php
//this file loads the requested page
//fetching the value of the page variable from the $_GET[] global array
$page = $_GET['page'];

//variable to hold the link to the main content.
$display = "";
  switch ($page) {
      case 'home':
        $display = "pages/home.php";
      break;

      case 'contact':
        $display = "pages/contacts.php";
      break;

      case 'solution':
        $display = "pages/solution.php";
      break;

      case 'service':
        $display = "pages/service.php";
      break;

      case 'company':
        $display = "pages/content.php";
      break;

    default:
      # code...
      break;
  }

?>
