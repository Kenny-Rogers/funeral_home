<?php
  $body_id=$_GET["body_id"];
  $deadbody = Deadbody::find_by_id($body_id);
  // $deadbody->storage = Storage::find_by_sql("SELECT * FROM storage WHERE dead_no='{$body_id}'");
  // $compartment = Compartment::find_by_id($deadbody->storage[1]->comp_on);
  $services = RequestedService ::find_by_sql("SELECT * FROM requested_service WHERE dead_no='{$body_id}'");

?>

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
          <input type="text" class="form-control" id="pwd" value="<?php echo "Fridge 1 Left" ;?>" disabled>
        </div>
        </form>
        </div>
      </div>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Service Information</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ol>
        <?php foreach ($services as $service) {
            $real_service = Service::find_by_id($service->service_no);
          ?>
          <div class="form-group">
            <li><label for="pwd">Service Name:</label></li>
            <input type="text" class="form-control" id="pwd" value="<?php echo $real_service->name; ?>" disabled>
          </div>
        <?php  } ?>
      </ol>
        </div>
      </div>
</div>

<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Payment Information</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
</div>
