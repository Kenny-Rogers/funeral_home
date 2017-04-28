<?php
//contains methods for logging users activities
class Log{
  //logs actions
  static function log_action($action, $message=""){
    //log file location
    $logfile=SITE_ROOT.DS."logs".DS."logs.txt";
    //if the file exist, append to it
    if(file_exists($logfile)){
      $file_handler=fopen($logfile, "a+");
      self::record_log($action, $file_handler, $message);
    }else{
      //else create a now file and write to it
      $file=fopen($logfile, 'w+');
      self::record_log($action, $file_handler, $message);
    }
    fclose($file_handler);
  }

  //clear all recorded logs
  static function clear_log($message=""){
    //log file location
    $logfile=SITE_ROOT.DS."logs".DS."logs.txt";
    if(file_exists($logfile)){
      //
      $file_handler=fopen($logfile, "w+");
      self::record_log("Clear", $file_handler, $message);
    }
    fclose($file_handler);
  }

  //record_log stores log info in the log file
   static function record_log($action, $handler, $message){
     //date formatting
    $date=strftime('%Y-%m-%d %H:%M:%S', time());
    //log format::2013-01-02 01:02:03|Login: kenny logged in
    if($action=="Clear"){
      $logfile=SITE_ROOT.DS."logs".DS."logs.txt";
      file_put_contents($logfile, "{$date} |{$action}:{$message}\n");
    }else{
      $content="{$date} |{$action}:{$message}\n";
      //writing the content into a file
      $write_state=fwrite($handler, $content);
    }
  }

  //displays the logs in the log file 
  static function display_log(){
    //log file
    $logfile=SITE_ROOT.DS."logs".DS."logs.txt";
    if(file_exists($logfile)){
      //reading the log file
      $line="";
      $content="";
      if($handle=fopen($logfile, 'r')){
        while (!feof($handle)) {
          //reading the contents line by line
          $line=fgets($handle);
          $content.="<u>{$line}<u>";
        }
      }
      fclose($handle);
    }else{
      $content="No Logs found";
    }
    return $content;
  }

}
?>
