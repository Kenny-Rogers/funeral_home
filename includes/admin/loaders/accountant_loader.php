<?php
//loads all the pages requested by the admin
$page = isset($_GET['page']) ? $_GET['page'] : 'add_payment';

switch ($page) {
  case 'add_payment':
    $display =  ACCOUNTANT_PAGES.DS."add_payment.php";
    $class_ac = "active";
    $page_title = "Add Payment";
    $page_desc = "record payment for a specific body";
    break;

  case 'record_payment':
    $display =  ACCOUNTANT_PAGES.DS."record_payment.php";
    $class_ac = "active";
    $page_title = "Record Payment";
    $page_desc = "record payment for a specific body";
    break;

  case 'find_payment':
    $display =  GENERAL_PAGES.DS."find_info.php";
    $class_f = "active";
    $page_title = "Find Payment";
    $page_desc = "find all payments for a specific body";
    break;

  case 'make_payment':
    $display =  LIB_PATH.DS."admin".DS."action".DS."make_payment.php";
    $class_ac = "active";
    $page_title = "Print Payment";
    $page_desc = "print reciept of last recorded payment";
    break;



  case 'display_info':
    $display =  GENERAL_PAGES.DS."display_info.php";
    $class_f = "active";
    $page_title = "Find Payment";
    $page_desc = "find all payments for a specific body";
    break;


  default:
    $display =  ACCOUNTANT_PAGES.DS."add_payment.php";
    $class_ac = "active";
    $page_title = "Find Payment";
    $page_desc = "find payment for a specific body";
    break;
}
?>
