<?php
require_once(LIB_PATH.DS.'database.php');

class Worker extends DatabaseObject {
  //this class interacts with the worker table in the database
  protected static $table_name="worker";
  protected static $db_fields=array('id', 'email', 'password',
    'full_name', 'gender', 'role', 'telephone', 'status');
  public $id;
  protected $full_name;
  protected $password;
  protected $gender;
  protected $role;
  protected $email;
  protected $telephone;
  protected $status;

  public static function authenticate($email="", $password=""){
    //validates email and password
    global $database;
    $email=$database->escape_value($email);
    $password=$database->escape_value($password);
    $sql="SELECT * FROM worker WHERE email='{$email}'
          AND password='{$password}' LIMIT 1";
    $result_array=self::find_by_sql($sql);
    //returns the first element in the array
    return !empty($result_array)?array_shift($result_array):false;
  }


  //setters and getters for protected feilds
  public function set_full_name($full_name=""){
    $this->full_name = $full_name;
  }

  public function set_role($txt=""){
    $this->role = $txt;
  }

  public function set_gender($txt=""){
    $this->gender = $txt;
  }

  public function set_password($txt="crossOver"){
    $this->password = $txt;
  }

  public function set_email($txt=""){
    $this->email = $txt;
  }

  public function set_telephone($txt=""){
    $this->telephone = $txt;
  }

  public function set_status($txt="active"){
    $this->status = $txt;
  }

  public function get_full_name(){
    return $this->full_name;
  }

  public function get_role(){
    return $this->role;
  }

  public function get_email(){
    return $this->email;
  }

  public function get_telephone(){
    return $this->telephone;
  }

  public function get_password(){
    return $this->password;
  }

  public function get_gender(){
    return $this->gender;
  }

  public function get_status(){
    return $this->status;
  }
}
?>
