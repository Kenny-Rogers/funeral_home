<?php
//contains utility functions
function strip_zeros_from_date($date=""){
  //removes marked zeros
  $no_zeros=str_replace('*0', '', $date);
  //removes any remaining marks
  $cleaned_string=str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

//redirects to a different html page
function redirect_to($location=NULL){
  //redirects to a given page
  if($location!=NULL){
    header("Location:{$location}");
    exit;
  }
}


//displays a style alert message
function output_message($message="", $class=""){
  //displays a paragraphed text
  if(!empty($message)&& $class == "success"){
    echo "<div class='col-sm-offset-2 col-sm-6 alert alert-success'>
            {$message}</div>";
  } elseif(!empty($message)&& $class == "fail"){
      echo "<div class='col-sm-offset-2 col-sm-6 alert alert-danger'>
              {$message}</div>";
  }elseif(!empty($message)&& $class == "info"){
      echo "<div class='col-sm-offset-2 col-sm-6 alert alert-info'>
              {$message}</div>";
  } else {
    echo "";
  }
}

function __autoload($class_name){
    //this function handles classes that haven't being included
    $class_name=strtolower($class_name);
    $path=LIB_PATH.DS."{$class_name}.php";
    if(file_exists($path)){
      require_once($path);
    }else{
      die("The file {$class_name}.php could not be found");
    }
  }

  function include_layout_template($template=""){
    //includes any html header or footer template sent as arguments
    include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
  }

  function datetime_to_text($datetime=""){
    //displays the date in a different format
    $unixdatetime=strtotime($datetime);
    return strftime("%B %d, %Y", $unixdatetime);
  }

  //makes a date acceptable to mysql database
  function format_date($dt=""){
  	//$dt=time();
  	$mysql_date=strftime("%Y-%m-%d", $dt);
  	return  $mysql_date;
  }

?>
