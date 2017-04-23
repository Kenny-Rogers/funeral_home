<?php
require_once(LIB_PATH.DS.'database.php');

class Relative extends DatabaseObject {
  //this class interacts with the worker table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
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
