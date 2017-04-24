<?php
require_once(LIB_PATH.DS.'database.php');

class Storage extends DatabaseObject {
  //this class interacts with the payment table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name = "storage";
  protected static $db_fields = array('id', 'comp_no', 'dead_no', 'status');
  public $id;
  protected $comp_no;
  protected $dead_no;
  protected $status;



  public function find_next_compartment(){
    $compartment = Compartment::find_by_sql("SELECT * FROM compartment ".
      " WHERE id IN (SELECT comp_no FROM storage WHERE Status='free')  ORDER BY id desc");
    $this->comp_no = $compartment[0]->id;
  }

  public function set_dead_no($dead_no=0){
    $this->dead_no = $dead_no;
  }

  public function get_dead_no(){
    return $dead_no;
  }

  public function set_status($status=""){
    $this->status = $status;
  }

  public function get_status(){
    return $status;
  }

  public function get_comp_no(){
    return $comp_no;
  }
}
?>
