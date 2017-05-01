<?php
  include("../../../includes/admin/initialize.php");

  if (!$session->is_logged_in()) {
      redirect_to('../../site1/index.php?page=login');
  } else {
      $relative_id = $session->worker_id;
      $relative = Relative::find_by_id($relative_id);
  }

  //including a page loader
  include("../../../includes/admin/loaders/relative_loader.php");

  //include html page head{<!DOCTYPE><head>-------</head>}
  include("components/head.php");

  //include navigation bar
  include("components/nav_bar.php");

  //include main content
  include("components/main_content.php");

  //include footer
  include("components/footer.php");

?>
