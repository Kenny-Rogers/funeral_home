<?php
require_once(LIB_PATH.DS.'database.php');

class Compartment extends DatabaseObject {
  //this class interacts with the compartment table in the database
  protected static $table_name="compartment";
  protected static $db_fields=array('id', 'description', 'suitable_for');
  public $id;
  public $suitable_for;
  public $description;

}
?>
