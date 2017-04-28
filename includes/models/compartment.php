<?php
require_once(LIB_PATH.DS.'database.php');

class Compartment extends DatabaseObject {
  //this class interacts with the compartment table in the database
  protected static $table_name="compartment";
  protected static $db_fields=array('id', 'description', 'suitable_for',
                                    'status', 'dead_no');
  public $id;
  public $suitable_for;
  public $description;
  public $status;
  public $dead_no;

}
?>
