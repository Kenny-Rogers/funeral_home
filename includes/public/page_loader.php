<?php
include("init_vars.php");
//checks the requested page and set the display to the requested page
// USED if-else shortcut :: (condition) ? true case : false case
$page = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($page) {
  case 'home':
    $display = "";
    $class_h = "active";
    break;

  case 'services':
    $display = "";
    $class_s = "active";
    break;

  case 'obitruaries':
    $display = "";
    $class_o = "active";
    break;

  case 'about_us':
    $display = "";
    $class_a = "active";
    break;

  case 'login':
    $display = "";
    $class_l = "active";
    break;
  default:
    $display = "";
    $class_h = "active";
    break;
}
?>
