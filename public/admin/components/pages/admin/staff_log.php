<?php
//if the clear logs button is clicked
 if(isset($_GET['clear'])){
   $message="The log file was cleared";
   Log::clear_log($message);

 }
 //reading the logs
 $log_details=Log::display_log();
?>
<form action="index.php" method="get">
  <input type="text" name="page" value="staff_log" hidden>
  <input type="text" name="clear" value="true" hidden>
  <div class="row">
    <input type="submit" class="col-sm-4 col-sm-offset-7 btn btn-primary col-sm-4" name="submit" value="Clear logs">
  </div>
</form>
<?php
echo nl2br($log_details);
?>
