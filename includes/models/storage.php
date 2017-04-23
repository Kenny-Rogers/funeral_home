<?php
require_once(LIB_PATH.DS.'database.php');

class Storage extends DatabaseObject {
  //this class interacts with the payment table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="storage";
  protected static $db_fields=array('comp_no', 'dead_no', 'status');
  protected $comp_no;
  protected $dead_no;
  protected $status;

}
?>
