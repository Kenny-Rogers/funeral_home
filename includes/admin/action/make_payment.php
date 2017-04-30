<?php
require_once("../initialize.php");
//register payment

$date = format_date(time());
//creates payment object
$payment = new Payment();
if(isset($_POST)){
  $payment->amount = $_POST["amount"];
  $payment->paid_by = $_POST["paid_by"];
  $payment->paid_for = $_POST["paid_for"];
  $payment->description = $_POST["description"];
  $payment->date_paid = $date;

  if ($payment && $payment->save()){
      //logging the payment action
      $worker = Worker::find_by_id($session->worker_id);
      $worker_name = $worker->get_full_name();
      $name = Deadbody::find_by_id($payment->paid_for)->get_full_name();
      Log::log_action("Accounts", "{$worker_name} recorded payment for {$name}");
      redirect_to("../../../public/admin/index.php?page=add_payment&stat=1");
  }else{
      redirect_to("../../../public/admin/index.php?page=add_payment&stat=2");
  }
}

?>
