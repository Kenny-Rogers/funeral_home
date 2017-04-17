<?php
//loads all the pages requested by the admin
$page = isset($_GET['page']) ? $_GET['page'] : 'add_payment';

switch ($page) {
  case 'add_payment':
    $display =  ACCOUNTANT_PAGES.DS."add_payment.php";
    $class_ac = "active";
    break;

  case 'record_payment':
    $display =  ACCOUNTANT_PAGES.DS."record_payment.php";
    $class_ac = "active";
    break;

  case 'find_payment':
    $display =  ACCOUNTANT_PAGES.DS."find_payment.php";
    $class_f = "active";
    break;


  default:
    $display =  ACCOUNTANT_PAGES.DS."add_payment.php";
    $class_ac = "active";
    break;
}
?>
