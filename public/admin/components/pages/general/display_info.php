<?php
  $body_id=$_GET["body_id"];
  $deadbody = Deadbody::find_by_id($body_id);
  if ($deadbody) {
    $deadbody->compartment = array_shift(Compartment::find_all(" WHERE dead_no='$body_id' LIMIT 1"));
    $services = RequestedService ::find_by_sql("SELECT * FROM requested_service WHERE dead_no='{$body_id}'");
?>
    <!-- including page to display body information -->
    <?php include(GENERAL_PAGES.DS."body_info.php");?>

    <!-- including page to display service information -->
    <?php include(GENERAL_PAGES.DS."service_info.php"); ?>

    <!-- including page to display payment information -->
    <?php include(GENERAL_PAGES.DS."payment_info.php"); ?>
<?php
  } else {
      $message = "No record found";
      $class = "fail";
?>
    <div class="row">
      <div class="col-md-offset-2 col-md-10">
        <?php output_message($message, $class)?>
      </div>
    </div>
<?php } ?>
