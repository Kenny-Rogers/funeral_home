<?php
//loads all the content specific to a user{Administrator, Attendant, Accountant}
$user = "";

switch ($user) {
  case 'admin':
    $page_loader = LIB_PATH.DS."loaders".DS."admin_loader.php";
    $menu = SITE_ROOT.DS."public".DS."components".DS."menu"."admin_menu.php";
    break;

  case 'attendant':
    $page_loader = LIB_PATH.DS."loaders".DS."attendant_loader.php";
    $menu = SITE_ROOT.DS."public".DS."components".DS."menu"."admin_menu.php";
    break;

  case 'accountant':
    $page_loader = LIB_PATH.DS."loaders".DS."accountant_loader.php";
    $menu = SITE_ROOT.DS."public".DS."components".DS."menu"."admin_menu.php";
    break;

  default:
    $page_loader = LIB_PATH.DS."loaders".DS."attendant_loader.php";
    $menu = SITE_ROOT.DS."public".DS."components".DS."menu"."admin_menu.php";
    break;
}
?>
