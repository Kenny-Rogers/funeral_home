<?php
 $status = isset($_GET['stat'])?$_GET['stat']:1;

 switch ($status) {
   case 1:
     $message = "Registration successfull";
     $class = "success";
     break;

   case 2:
     $message = "Registration failed";
     $class = "fail";
     break;

   default:
     $message = "Please Complete Form";
     $class = "info";
     break;
 }
?>
<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
