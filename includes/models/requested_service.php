<?php
require_once(LIB_PATH.DS.'database.php');

class RequestedService extends DatabaseObject {
  //this class interacts with the payment table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="requested_service";
  protected static $db_fields=array('rel_no', 'dead_no',
    'service_no', 'worker_no');
  public $id;
  protected $rel_no;
  protected $dead_no;
  protected $service_no;
  protected $worker_no;
}
?>
