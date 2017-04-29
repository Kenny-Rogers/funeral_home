<?php
require_once(LIB_PATH.DS.'database.php');

class RequestedService extends DatabaseObject {
  //this class interacts with the relative table in the database
  protected static $table_name="requested_service";
  protected static $db_fields=array('id','rel_no', 'dead_no',
    'service_no', 'worker_no', 'status');
  public $id;
  public $rel_no;
  public $dead_no;
  public $service_no;
  public $worker_no;
  public $status;

  // public function update(){
  //   parent::update();
  // }
}
?>
