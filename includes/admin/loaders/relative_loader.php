<?php
  $page = isset($_GET['page'])?$_GET['page']:'find_info';
  $role = "relative";

  switch ($page) {
    case 'find_info':
      $page_title = "Find Information on Relative";
      $display = RELATIVE_PAGES.DS."find_info.php";
      break;

    case 'request_service':
      $page_title = "Request Service";
      $display = RELATIVE_PAGES.DS."request_service.php";
      break;

    default:
      # code...
      break;
  }
?>
