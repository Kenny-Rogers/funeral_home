<?php
require_once(LIB_PATH.DS.'database.php');

class Deadbody extends DatabaseObject {
  //this class interacts with the deadbody table in the database

  protected static $table_name="deadbody";
  protected static $db_fields=array('id', 'address', 'date_of_birth', 'religion',
    'full_name', 'gender', 'date_of_death', 'cause_of_death', 'status', 'days_spent');
  public $id;
  protected $full_name;
  protected $address;
  protected $gender;
  protected $date_of_birth;
  protected $date_of_death;
  protected $religion;
  protected $cause_of_death;
  protected $status;
  protected $days_spent;
  public $relative;
  public $requested_services = array();
  public $compartment;

  //setters and getters for protected fields
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
    if ( $txt == "released" ) {
      //releasing a body
      $this->status = $txt;
      //finding the compartment containing the deadbody
      $this->compartment = array_shift(Compartment::find_all(" WHERE dead_no='$this->id' LIMIT 1"));
      //freeing the compartment
      $this->compartment->status = "free";
      //storing the information
      $this->compartment->save();
    } elseif ($txt == "admitted") {
      //admitting a body
      $this->status = $txt;
    }
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

  public function get_days_spent(){
    return abs($this->days_spent);
  }
  //custom method for storing object's info in db
  public function record(){
    //store deadbody object first
    $this->create();

    //creates storage information for the deadbody
    // $this->storage = new Storage();
    // $this->storage->find_next_compartment();
    // $this->storage->set_dead_no($this->id);
    // $this->storage->set_status("occupied");

    //stores new deadbody in compartment
    $sql = "SELECT * FROM compartment WHERE status='free' LIMIT 1";
    $this->compartment = array_shift(Compartment::find_by_sql($sql));
    $this->compartment->status = "occupied";
    $this->compartment->dead_no = $this->id;

    //create basic service object related to this object
    $service = new RequestedService();
    $service->rel_no = 'null';
    $service->service_no = 1;
    $service->dead_no = $this->id;
    $this->requested_service[] = $service;

    //stores storage and service information
    if($this->compartment->save() && $service->save()){
      return true;
    } else {
      return false;
    }
  }

  public function get_relative(){
    return $this->relative->full_name();
  }
}
?>
