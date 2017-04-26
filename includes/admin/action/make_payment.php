<?php
require_once("../initialize.php");
//register payment

$payment = new Payment();
$date = strftime('%Y-%m-%d %H:%M:%S', time());
if(isset($_POST)){
  $payment->amount = $_POST["amount"];
  $payment->paid_by = $_POST["paid_by"];
  $payment->paid_for = $_POST["paid_for"];
  $payment->date_paid = $date;
  $payment->description = $_POST["description"];

  if ($payment && $payment->save()){
      $worker = Worker::find_by_id($session->worker_id);
      $worker_name = $worker->get_full_name();
      $name = Deadbody::find_by_id($payment->paid_for)->get_full_name();
      Log::log_action("Accounts", "{$worker_name} recorded payment {$name}");
      redirect_to("../../../public/admin/index.php?page=add_payment&stat=1");
  }else{
      redirect_to("../../../public/admin/index.php?page=add_payment&stat=2");
  }
}

?>
