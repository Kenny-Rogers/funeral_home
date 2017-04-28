<?php
require_once(LIB_PATH.DS.'database.php');

class Relative extends DatabaseObject {
  //this class interacts with the relative table in the database
  protected static $table_name="relative";
  protected static $db_fields=array('id', 'full_name', 'address', 'telephone',
    'email');
  public $id;
  protected $full_name;
  protected $address;
  protected $telephone;
  protected $email;


  public function full_name(){
    return $full_name;
  }

}
?>
