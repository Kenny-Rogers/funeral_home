<?php
//loads all the pages requested by the admin
$page = isset($_GET['page']) ? $_GET['page'] : 'add_corpse';

switch ($page) {
  case 'add_corpse':
    $class_ac = "active";
    $display =  ADMIN_PAGES.DS."";
    break;

  case 'find_info':
    $display =  ADMIN_PAGES.DS."";
    $class_f = "active";
    break;

  case 'release':
    $display =  ADMIN_PAGES.DS."";
    $class_r = "active";
    break;

  case 'notify':
    $display =  ADMIN_PAGES.DS."";
    $class_n = "active";
    break;


  case 'add_staff':
    $display =  ADMIN_PAGES.DS."";
    $class_as = "active";
    break;

  case 'remove_staff':
    $display =  ADMIN_PAGES.DS."";
    $class_rs = "active";
    break;

  default:
    $display =  ADMIN_PAGES.DS."";
    $class_ac = "active";
    break;
}
?>
