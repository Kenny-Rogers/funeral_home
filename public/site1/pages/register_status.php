<?php
    include("../../../includes/admin/initialize.php");
  if ($_SESSION["confirm_code"] == $_POST["confirm_code"]) {
    $relative = new Relative();
    $relative->telephone = $_POST["telephone"];
    $relative->address = $_POST["address"];
    $relative->email = $_POST["email"];
    $relative->full_name = $_POST["full_name"];
    $relative->dead_no = $_POST["dead_no"];
    $relative->receipt_no = $_POST["reciept_no"];

    if ($relative->save()){
      $full_name = $relative->full_name();

      $session->login($relative);
      //logging the user login action
      Log::log_action("Relative Login", "{$full_name} logged in");
      redirect_to("../../admin/relative/index.php");
    } else {
      redirect_to("index.php?page=login&stat=2");
    }

  }
?>
