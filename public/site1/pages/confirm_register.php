<?php
  $number = $_POST["telephone"];
  $address = $_POST["address"];
  $email = $_POST["email"];
  $full_name = $_POST["full_name"];
  $reciept_no = $_POST["receipt_no"];

  $payment = Payment::find_by_id($reciept_no);
  //$deadbody = 1;
  if ($payment) {
      $pin =  mt_rand(100000,999999);
      $dead_no = $payment->paid_for;
      $_SESSION["confirm_code"] = $pin;
      $message = "Thank you for choosing CROSSOVER. ".
                  "Your confirmation code is {$pin}. ".
                  "Please enter the code on the confirmation page".
                  " to confirm your phone number.";
        if (Message::send_message($number, $message)) {
      //if(1){
  ?>
    <div class="container">
        <div class="divPanel page-content">
          <div class="row-fluid">
        <!--Edit Main Content Area here-->
                  <div class="span8" id="divMain">

                      <font color ="violet" size ="8"> Confirmation  </font>
            <hr> <br></br>
            <form method="post" action="pages/register_status.php">
                <input type="hidden" name="telephone" value="<?php echo $number; ?>" >
                <input type="hidden" name="address" value="<?php echo $address; ?>" >
                <input type="hidden" name="email" value="<?php echo $email; ?>" >
                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>" >
                <input type="hidden" name="reciept_no" value="<?php echo $reciept_no; ?>" >
                <input type="hidden" name="dead_no" value="<?php echo $dead_no; ?>" >

                      <font color ="violet" size = "6">Enter Confirmation Code:</font><br></br>
                      <input type ="text" class="form-control" name="confirm_code" required><br>
                      <input type="submit"  value="Continue" class="btn btn-default">

        <div class="row-fluid">
              <div class="span2">
                     </div>

              </div>
  </form>
        <hr>
        </div>
      </div>
        </div>
    </div>

<?php    }
  } else {
    redirect_to("index.php?page=login&stat=1");
  }
?>
