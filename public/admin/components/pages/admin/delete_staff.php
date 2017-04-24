<?php
  $staff_id = $_GET["worker_id"];
  $staff = Worker::find_by_id($staff_id);
  $staff->set_status("inactive");

  if ($staff && $staff->save()){
      $worker = Worker::find_by_id($session->worker_id);
      $worker_name = $worker->get_full_name();
      $staff_name = $staff->get_full_name();
      Log::log_action("Released", "{$worker_name} released staff {$staff_name}");
      $message = "Staff released successfully";
      $class = "success";
  }else{
    $message = "Failed to release staff";
    $class = "fail";
  }
?>

<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
