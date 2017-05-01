<?php
  $body_no = $relative->dead_no;
  $status = isset($_GET['stat'])?$_GET['stat']:0;

 switch ($status) {
   case 1:
     $message = "Service Request Successfull";
     $class = "success";
     break;

   case 2:
     $message = "Service Request Failed";
     $class = "fail";
     break;

   default:
     $message = "Please Select a Service to Request";
     $class = "info";
     break;
 }
?>
<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
<div class="row">
<!-- left column -->
<div class="col-md-offset-2 col-md-8">
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Apply </h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="components/pages/add_service.php">
      <input type="hidden" name="rel_no" value="<?php echo $relative->id; ?>">
      <input type="hidden" name="dead_no" value="<?php echo $relative->dead_no; ?>">
      <div class="form-group">
        <label for="">Apply For Service</label>
        <select class="form-control" name="service_no">
        <?php
          $with = " WHERE id NOT IN (SELECT service_no FROM requested_service WHERE dead_no={$body_no})";
          $services = Service::find_all($with);
          foreach ($services as $service) { ?>
            <option value="<?php echo $service->id; ?>"><?php echo $service->name; ?></option>
        <?php } ?>
        </select>
      </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Request</button>
    </div>
  </form>
</div>
<!-- /.box -->
</div>
</div>
