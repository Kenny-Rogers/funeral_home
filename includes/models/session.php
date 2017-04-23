<?php
//session class manages the worker login and logout pages
//NOTE:: never store db-related objects in sessions since they can be
//inconsistent with the db on update of the db by another worker
class Session{
  //stores the state of a worker as logged in or not
  private $logged_in=false;
  //stores the worker_id of the logged in worker
  public $worker_id;
  //stores the messages sent in the $_SESSION[] variable
  //set from outside this class
  public $message;

  function __construct(){
    session_start();
    $this->check_message();
    $this->check_login();
  }

  public function is_logged_in(){
    //checks if the worker is logged in from outside this class
    return $this->logged_in;
  }

  public function login($worker){
    //logs the worker in based on the recieved object worker
    if($worker){
      $this->worker_id=$_SESSION['worker_id']=$worker->id;
      $this->logged_in=true;
    }
  }

  public function message($msg=""){
    //used to set and get the message
    if(!empty($msg)){
      //setting message
      $_SESSION['message']=$msg;
    }else{
      //get message
      return $this->message;
    }
  }

  public function logout(){
    //logs out a worker
    unset($_SESSION['worker_id']);
    unset($this->worker_id);
    $this->logged_in=false;
  }

  private function check_login(){
    if(isset($_SESSION['worker_id'])){
      //if the session variable is set then log in the worker
      $this->worker_id=$_SESSION['worker_id'];
      $this->logged_in=true;
    }else{
      //else log the worker out
      unset($this->worker_id);
      $this->logged_in=false;
    }
  }

  private function check_message(){
    //any message stored in the session?
    if(isset($_SESSION['message'])){
      //add it an attribute and erase the stored version
      $this->message=$_SESSION['message'];
      unset($_SESSION['message']);
    }else{
      $this->message="";
    }
  }
}

$session=new Session();
//getting the $_SESSION['message'] value
$message=$session->message();
?>
