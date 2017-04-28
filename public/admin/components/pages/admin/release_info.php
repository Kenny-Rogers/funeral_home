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

<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Body Information</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
        <form>
        <div class="form-group">
          <label >Full Name:</label>
          <input class="form-control" id="pwd" value="<?php echo $deadbody->get_full_name();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Gender:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_gender();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Religion:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_religion();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Date of Birth:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_date_of_birth();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Date of Death:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_date_of_death();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Address:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_address();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Cause of Death:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_cause_of_death();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Relative:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->get_cause_of_death();?>" disabled>
        </div>
        <div class="form-group">
          <label for="pwd">Compartment Number:</label>
          <input type="text" class="form-control" id="pwd" value="<?php echo $deadbody->compartment->id; ?>" disabled>
        </div>
        </form>
        </div>
      </div>
</div>
