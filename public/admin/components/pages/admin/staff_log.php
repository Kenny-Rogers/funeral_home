<?php
//if the clear logs button is clicked
 if(isset($_GET['clear'])){
   $message="The log file was cleared";
   Log::clear_log($message);
   
 }
 //reading the logs
 $log_details=Log::display_log();
?>
<h2>LOGS</h2>
<form action="index.php" method="get">
  <input type="text" name="page" value="staff_log" hidden>
  <input type="text" name="clear" value="true" hidden>
  <input type="submit" name="submit" value="Clear logs">
</form>
<?php
echo nl2br($log_details);
?>
