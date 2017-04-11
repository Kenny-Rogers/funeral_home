<?php
include("init_vars.php");
//checks the requested page and set the display to the requested page
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
  case 'home':
    $display = "";
    $class_h = "class='active'";
    break;

  case 'services':
    $display = "";
    $class_s = "class='active'";
    break;

  case 'obitruaries':
    $display = "";
    $class_o = "class='active'";
    break;

  case 'about_us':
    $display = "";
    $class_a = "class='active'";
    break;

  case 'login':
    $display = "";
    $class_l = "class='active'";
    break;
  default:
    $display = "";
    break;
}
?>
