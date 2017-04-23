<?php
require_once(LIB_PATH.DS.'database.php');

class Service extends DatabaseObject {
  //this class interacts with the payment table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="service";
  protected static $db_fields=array('id', 'name', 'description');
  public $id;
  protected $name;
  protected $description;

}
?>
