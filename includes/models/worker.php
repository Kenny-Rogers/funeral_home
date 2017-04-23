<?php
require_once(LIB_PATH.DS.'database.php');

class Worker extends DatabaseObject {
  //this class interacts with the user table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="worker";
  protected static $db_fields=array('id', 'email', 'password',
    'full_name', 'gender', 'role', 'telephone');
  public $id;
  public $full_name;
  public $password;
  public $gender;
  public $role;
  public $email;
  public $telephone;

  public static function authenticate($email="", $password=""){
    //validates email and password
    global $database;
    $email=$database->escape_value($email);
    $password=$database->escape_value($password);
    $sql="SELECT * FROM users WHERE email='{$email}'
          AND password='{$password}' LIMIT 1";
    $result_array=self::find_by_sql($sql);
    //returns the first element in the array
    return !empty($result_array)?array_shift($result_array):false;
  }

  public function full_name(){
    return $full_name;
  }

}
?>
