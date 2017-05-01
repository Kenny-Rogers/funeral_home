<?php
    include("../../../includes/admin/initialize.php");
    $receipt_no = $_POST["receipt_no"];
    $sql = "SELECT * FROM relative WHERE receipt_no='$receipt_no'";
    $relative = array_shift(Relative::find_by_sql($sql));

    if ($relative){
      $full_name = $relative->full_name();

      $session->login($relative);
      //logging the user login action
      Log::log_action("Relative Login", "{$full_name} logged in");
      redirect_to("../../admin/relative/index.php");
    } else {
      redirect_to("../index.php?page=login&stat=2");
    }
?>
