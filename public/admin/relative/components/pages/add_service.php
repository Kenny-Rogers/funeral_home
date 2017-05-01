<?php
  include("../../../../../includes/admin/initialize.php");

  $service = new RequestedService();
  $service->rel_no = $_POST["rel_no"];
  $service->service_no = $_POST["service_no"];
  $service->dead_no = $_POST["dead_no"];
  $service->status = "TODO";

  if ($service->save()) {
    redirect_to("../../index.php?page=request_service&stat=1");
  } else {
    redirect_to("../../index.php?page=request_service&stat=2");
  }
?>
