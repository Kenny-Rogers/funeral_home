<?php
require_once(LIB_PATH.DS.'database.php');

class Relative extends DatabaseObject {
  //this class interacts with the relative table in the database
  protected static $table_name="relative";
  protected static $db_fields=array('id', 'full_name', 'address', 'telephone',
    'email', 'dead_no', 'receipt_no');
  public $id;
  public $full_name;
  public $address;
  public $telephone;
  public $email;
  public $receipt_no;
  public $dead_no;


  public function full_name(){
    return $this->full_name;
  }

  public function contact(){
    return $this->telephone;
  }

}
?>
