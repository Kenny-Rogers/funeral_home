<?php
  require_once("../initialize.php");

  if(isset($_POST)){
    $body_id = $_POST['body_id'];
    $message_code = $_POST['message'];
  }

  $deadbody = Deadbody::find_by_id($body_id);

  function decode_message($code=0, $deadbody){
    global $_POST;
    $full_name = $deadbody->get_full_name();
    switch ($code) {
      case 1:
        $message = "This is a notice to you to remind you of your debt in ".
                    "relation to THE LATE {$full_name} being worked on by CrossOver Limited. ".
                    "Failure to settle debt would result in sanctions including ".
                    "legal actions.";
        break;

      case 2:
        $message = "This is a notice to you to inform you of the release of your ".
                    "relative, THE LATE {$full_name}. Please visit our website to ".
                    "review our services so that we can serve you better. https://www.crossover.com";
        break;

      case -2:
        $message = $_POST['other'];
        break;

      default:
        # code...
        break;
    }
    return $message;
  }
  $number = "233554598026";

  $message = decode_message($message_code, $deadbody);

  if (Message::send_message( $number, $message)){
      $worker = Worker::find_by_id($session->worker_id);
      $worker_name = $worker->get_full_name();
      $deadbody_name = $deadbody->get_full_name();
      Log::log_action("Notification", "{$worker_name} notified  relative of {$deadbody_name}");
      redirect_to("../../../public/admin/index.php?page=notify&stat=1");
  }else{
      redirect_to("../../../public/admin/index.php?page=notify&stat=2");
  }
?>
