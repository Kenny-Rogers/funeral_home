<?php
  require_once("../initialize.php");
  //register staff

  $staff = new Worker();
  if(isset($_POST)){
    $staff->set_full_name($_POST["full_name"]);
    $staff->set_gender($_POST["gender"]);
    $staff->set_role($_POST["role"]);
    $staff->set_email($_POST["email"]);
    $staff->set_telephone($_POST["telephone"]);
    $staff->set_password();
    $staff->set_status();

    if ($staff && $staff->save()){
        $worker = Worker::find_by_id($session->worker_id);
        $worker_name = $worker->get_full_name();
        $staff_name = $staff->get_full_name();
        Log::log_action("Registration", "{$worker_name} registered staff {$staff_name}");
        redirect_to("../../../public/admin/index.php?page=add_staff&stat=1");
    }else{
        redirect_to("../../../public/admin/index.php?page=add_staff&stat=2");
    }
  }
?>
