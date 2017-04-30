<?php
//loads all the pages requested by the admin
$page = isset($_GET['page']) ? $_GET['page'] : 'current_service';

switch ($page) {
  case 'current_service':
    $display =  ATTENDANT_PAGES.DS."release.php";
    $class_ac = "active";
    $page_title = "Services To Do";
    $page_desc = "all services that are yet to be attended to";
    break;

  case 'find_info':
    $display =  GENERAL_PAGES.DS."find_info.php";
    $class_f = "active";
    $page_title = "Find Services";
    $page_desc = "all services for a specific body";
    break;

  case 'display_info':
    $display =  GENERAL_PAGES.DS."display_info.php";
    $class_f = "active";
    $page_title = "Find Services";
    $page_desc = "all services for a specific body";
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
    $page_title = "Services To Do";
    $page_desc = "all services that are yet to be attended to";
    break;
}
?>
