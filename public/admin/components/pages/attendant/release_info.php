<?php
  //fetching details from $_GET variable
  $service_no = $_GET['service_no'];
  $dead_no = $_GET['body_id'];

  //retreiving the service record for the given details
  $with_condition = " WHERE service_no='$service_no' AND dead_no='$dead_no'";
  $service = array_shift(RequestedService::find_all($with_condition));

  $service->status = "DONE";
  $service->worker_no = $session->worker_id;
  if ($service->save()) {
    $status = 1;
  } else {
    $status = 2;
  }


 switch ($status) {
   case 1:
     $message = "Record Save Successfully";
     $class = "success";
     break;

   case 2:
     $message = "Failed To Update Service";
     $class = "fail";
     break;

   default:
     $message = "Attend To A Body";
     $class = "info";
     break;
 }
?>
<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
