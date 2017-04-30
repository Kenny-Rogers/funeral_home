<?php
require_once(LIB_PATH.DS.'database.php');

class Service extends DatabaseObject {
  //this class interacts with the service table in the database
  protected static $table_name="service";
  protected static $db_fields=array('id', 'name', 'description', 'price');
  public $id;
  public $name;
  public $description;
  public $price;

}
?>
