<?php
  require_once("../initialize.php");
  $email = $_POST["email"];
  $password = $_POST["password"];

  //checking the db to find the username and the password
  $worker = Worker::authenticate($email, $password);

  if($worker){
    //if user exit login user and redirect to index.php
    $full_name = $worker->full_name();
    
    $session->login($worker);
    //logging the user login action
    Log::log_action("Login", "{$full_name} logged in");
    redirect_to("../../../public/admin/index.php");
  }else{
    //else display error message
    $message="Username/password combination incorrect";
  }
?>
