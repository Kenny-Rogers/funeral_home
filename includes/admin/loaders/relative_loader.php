<?php
  $page = isset($_GET['page'])?$_GET['page']:'find_info';
  $role = "relative";

  switch ($page) {
    case 'find_info':
      $page_title = "Find Information on Relative";
      break;

    case 'request_service':
      $page_title = "Request Service";
      break;

    default:
      # code...
      break;
  }
?>
