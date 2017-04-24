<?php
  require_once("../initialize.php");
  //register deadbody

  $deadbody = new Deadbody();
  if(isset($_POST)){
    $deadbody->set_full_name($_POST["full_name"]);
    $deadbody->set_gender($_POST["gender"]);
    $deadbody->set_address($_POST["address"]);
    $deadbody->set_religion($_POST["religion"]);
    $date=format_date(strtotime($_POST["date_of_birth"]));
    $deadbody->set_date_of_birth($date);
    $date=format_date(strtotime($_POST["date_of_death"]));
    $deadbody->set_date_of_death($date);
    $deadbody->set_cause_of_death($_POST["cause_of_death"]);
    $deadbody->set_status("admitted");

    if ($deadbody && $deadbody->record()){
        $worker = Worker::find_by_id($session->worker_id);
        $worker_name = $worker->get_full_name();
        $deadbody_name = $deadbody->get_full_name();
        Log::log_action("Registration", "{$worker_name} registered Deadbody {$deadbody_name}");
        redirect_to("../../../public/admin/index.php?page=add_corpse&stat=1");
    }else{
        redirect_to("../../../public/admin/index.php?page=add_corpse&stat=2");
    }
  }
?>
