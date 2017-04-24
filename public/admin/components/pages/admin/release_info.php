<?php
  $deadbody_id = $_GET["body_id"];
  $deadbody = Deadbody::find_by_id($deadbody_id);
  $deadbody->set_status("released");

  if ($deadbody && $deadbody->save()){
      $worker = Worker::find_by_id($session->worker_id);
      $worker_name = $worker->get_full_name();
      $deadbody_name = $deadbody->get_full_name();
      Log::log_action("Released", "{$worker_name} released Deadbody {$deadbody_name}");
      $message = "Deadbody released successfull";
      $class = "success";
  }else{
    $message = "Failed to release deadbody";
    $class = "fail";
  }
?>

<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
