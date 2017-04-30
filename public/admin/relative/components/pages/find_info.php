<?php
  $body_id=42;
  $deadbody = Deadbody::find_by_id($body_id);

  if ($deadbody) {
    //if the body_id provides a body
    $deadbody->compartment = array_shift(Compartment::find_all(" WHERE dead_no='$body_id' LIMIT 1"));
    $services = RequestedService::find_by_sql("SELECT * FROM requested_service WHERE dead_no='{$body_id}'");
    $payments = Payment::find_all(" WHERE paid_for='$body_id'");
?>
    <?php
        if (isset($_GET["stat"])) {
        //if user came to page from registration page
    ?>
      <div class="row">
        <div class="col-md-offset-2 col-md-10">
          <?php output_message("Body Registration Successfull", "success"); ?>
        </div>
      </div>
    <?php } ?>
    <!-- including page to display body information -->
    <?php include(GENERAL_PAGES.DS."body_info.php");?>

    <?php if ($role != "accountant") { ?>
      <!-- including page to display service information -->
      <?php include(GENERAL_PAGES.DS."service_info.php"); ?>
    <?php } ?>

    <?php if ($role != "attendant") { ?>
      <!-- including page to display payment information -->
      <?php include(GENERAL_PAGES.DS."payment_info.php"); ?>
    <?php } ?>
<?php } else {  //if the body_id doesnot exist ?>
    <div class="row">
      <div class="col-md-offset-2 col-md-10">
        <?php output_message("No record found", "fail"); ?>
      </div>
    </div>
<?php } ?>
