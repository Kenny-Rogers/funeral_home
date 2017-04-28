<?php include("../../includes/admin/initialize.php");?>

<?php
      if(!$session->is_logged_in()){
          redirect_to('login.php');
      }else{
          $worker_id = $session->worker_id;
          $worker = Worker::find_by_id($worker_id);
    }
?>

<?php include("../../includes/admin/user_loader.php");?>

<?php include("components/head.php"); ?>

<?php include("components/header.php"); ?>

<?php //include("components/menu.php");
      include("{$menu}");
?>

<?php include("components/main_page.php"); ?>

<?php include("components/footer.php"); ?>
