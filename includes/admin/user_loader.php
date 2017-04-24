<?php
//loads all the content specific to a user{Administrator, Attendant, Accountant}
$role = $worker->get_role();


switch ($role) {
  case 'admin':
    $page_loader = LIB_PATH.DS."admin".DS."loaders".DS."admin_loader.php";
    $menu = MENU_COMPONENT.DS."admin_menu.php";
    break;

  case 'attendant':
    $page_loader = LIB_PATH.DS."admin".DS."loaders".DS."attendant_loader.php";
    $menu = MENU_COMPONENT.DS."attendant_menu.php";
    break;

  case 'accountant':
    $page_loader = LIB_PATH.DS."admin".DS."loaders".DS."accountant_loader.php";
    $menu = MENU_COMPONENT.DS."accountant_menu.php";
    break;

  default:
    $page_loader = LIB_PATH.DS."admin".DS."loaders".DS."attendant_loader.php";
    $menu = MENU_COMPONENT.DS."attendant_menu.php";
    break;
}

require_once($page_loader);
?>
