<?php
//loads all the pages requested by the admin
$page = isset($_GET['page']) ? $_GET['page'] : 'add_corpse';

switch ($page) {
  case 'add_corpse':
    $display =  ADMIN_PAGES.DS."add_body.php";
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
    $display =  ADMIN_PAGES.DS."release.php";
    $class_r = "active";
    break;


  case 'release_info':
    $display =  ADMIN_PAGES.DS."release_info.php";
    $class_r = "active";
    break;

  case 'notify':
    $display =  ADMIN_PAGES.DS."notify.php";
    $class_n = "active";
    break;


  case 'add_staff':
    $display =  ADMIN_PAGES.DS."add_staff.php";
    $class_as = "active";
    break;

  case 'remove_staff':
    $display =  ADMIN_PAGES.DS."remove_staff.php";
    $class_rs = "active";
    break;

  default:
    $display =  ADMIN_PAGES.DS."add_body.php";
    $class_ac = "active";
    break;
}
?>
