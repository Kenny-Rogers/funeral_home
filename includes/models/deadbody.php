<?php
require_once(LIB_PATH.DS.'database.php');

class Deadbody extends DatabaseObject {
  //this class interacts with the worker table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="deadbody";
  protected static $db_fields=array('id', 'address', 'date_of_birth', 'religion',
    'full_name', 'gender', 'date_of_death', 'cause_of_death', 'status');
  public $id;
  protected $full_name;
  protected $address;
  protected $gender;
  protected $date_of_birth;
  protected $date_of_death;
  protected $religion;
  protected $cause_of_death;
  protected $status;
  protected $relative;
  protected $storage;
  protected $requested_services = array();


  public function set_full_name($full_name=""){
    $this->full_name = $full_name;
  }

  public function set_address($txt=""){
    $this->address = $txt;
  }

  public function set_gender($txt=""){
    $this->gender = $txt;
  }

  public function set_date_of_birth($txt=""){
    $this->date_of_birth = $txt;
  }

  public function set_date_of_death($txt=""){
    $this->date_of_death = $txt;
  }

  public function set_religion($txt=""){
    $this->religion = $txt;
  }

  public function set_cause_of_death($txt=""){
    $this->cause_of_death = $txt;
  }

  public function set_status($txt=""){
    $this->status = $txt;
  }

  public function get_full_name(){
    return $this->full_name;
  }

  public function get_address(){
    return $this->address;
  }

  public function get_gender(){
    return $this->gender;
  }

  public function get_date_of_birth(){
    return $this->date_of_birth;
  }

  public function get_date_of_death(){
    return $this->date_of_death;
  }

  public function get_religion(){
    return $this->religion;
  }

  public function get_cause_of_death(){
    return $this->cause_of_death;
  }

  public function get_status(){
    return $this->status;
  }

  public function record(){
    $this->create();
    $this->storage = new Storage();
    $this->storage->find_next_compartment();
    $this->storage->set_dead_no($this->id);
    $this->storage->set_status("occupied");

    $service = new RequestedService();
    $service->rel_no = 'null';
    $service->service_no = 1;
    $service->dead_no = $this->id;
    $this->requested_service[] = $service;

    if($this->storage->save() && $service->save()){
      return true;
    } else {
      return false;
    }
  }
}
?>
