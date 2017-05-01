<?php
include("init_vars.php");
//checks the requested page and set the display to the requested page
//and makes that link active
// USED if-else shortcut :: (condition) ? true case : false case
$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
  case 'home':
    $display = WEBSITE_PAGES.DS."home.php";
    $class_h = "active";
    break;

  case 'services':
    $display = WEBSITE_PAGES.DS."service.php";
    $class_s = "active";
    break;

  case 'obituaries':
    $display = WEBSITE_PAGES.DS."obituary.php";
    $class_o = "active";
    break;

  case 'about_us':
    $display = WEBSITE_PAGES.DS."about_us.php";
    $class_a = "active";
    break;

  case 'login':
    $display = WEBSITE_PAGES.DS."register1.php";
    $class_l = "active";
    break;

  case 'confirm_register':
    $display = WEBSITE_PAGES.DS."confirm_register.php";
    $class_l = "active";
    break;

  case 'register_status':
    $display = WEBSITE_PAGES.DS."register_status.php";
    $class_l = "active";
    break;

  default:
    $display = WEBSITE_PAGES.DS."home.php";
    $class_h = "active";
    break;
}
?>
