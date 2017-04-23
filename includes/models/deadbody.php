<?php
require_once(LIB_PATH.DS.'database.php');

class Worker extends DatabaseObject {
  //this class interacts with the worker table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="deadbody";
  protected static $db_fields=array('id', 'address', 'date_of_birth', 'religion',
    'full_name', 'gender', 'role', 'telephone', 'date_of_death', 'cause_of_death',
  'status');
  public $id;
  protected $full_name;
  protected $address;
  protected $gender;
  protected $date_of_birth;
  protected $date_of_death;
  protected $religion;
  protected $cause_of_death;
  protected $status;


  public function full_name(){
    return $full_name;
  }

}
?>
