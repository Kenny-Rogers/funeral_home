<?php
//loads all the pages requested by the admin
$page = isset($_GET['page']) ? $_GET['page'] : 'current_service';

switch ($page) {
  case 'current_service':
    $display =  ATTENDANT_PAGES.DS."release.php";
    $class_ac = "active";
    break;

  case 'find_info':
    $display =  ADMIN_PAGES.DS."find_info.php";
    $class_f = "active";
    break;

  case 'display_info':
    $display =  ADMIN_PAGES.DS."display_info.php";
    $class_f = "active";
    break;

  case 'release':
    $display =  ATTENDANT_PAGES.DS."release.php";
    $class_r = "active";
    break;


  case 'release_info':
    $display =  ATTENDANT_PAGES.DS."release_info.php";
    $class_r = "active";
    break;

  default:
    $display =  ATTENDANT_PAGES.DS."current_services.php";
    $class_ac = "active";
    break;
}
?>
