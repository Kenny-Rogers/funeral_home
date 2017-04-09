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

      case 'services':
        $display = "pages/services.php";
      break;

      case 'obituaries':
        $display = "pages/obituaries.php";
      break;

      case 'about_us':
        $display = "pages/about_us.php";
      break;

      case 'register':
        $display = "pages/register.php";
      break;

    default:
        $display = "pages/home.php";
      break;
  }

?>
