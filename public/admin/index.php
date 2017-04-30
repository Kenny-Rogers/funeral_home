<?php include("../../includes/admin/initialize.php");?>
<!-- Index file for application side  -->

<!--Php code which is uded to initialize all variables present  -->

<?php
      if(!$session->is_logged_in()){
          redirect_to('login.php');
      }else{
          $worker_id = $session->worker_id;
          $worker = Worker::find_by_id($worker_id);
    }
?>

<!-- including a php file which enables pages of specific users of the application to be loaded   -->
<?php include("../../includes/admin/user_loader.php");?>

<!--  including a php file which contains the  head of the html file  -->
<?php include("components/head.php"); ?>

<!--  including a php file which contains the  navigation bar  -->
<?php include("components/header.php"); ?>

<!--  including a php file which contains a variable to select the different users and their specified page -->
<?php //include("components/menu.php");
      include("{$menu}");
?>

<!--  including a php file which contains the main content   -->
<?php include("components/main_page.php"); ?>

<!--  including a php file which contains the footer  -->
<?php include("components/footer.php"); ?>
