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
  public $payments = array();
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

  public function set_days_spent($txt=0){
    $this->days_spent = $txt;
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
    $service->status="TODO";
    $this->requested_service[] = $service;

    //stores storage and service information
    if($this->compartment->save() && $service->save()){
      return true;
    } else {
      return false;
    }
  }

  public function get_relative(){
    //returns the name of the relative
    $this->relative = array_shift(Relative::find_all(" WHERE dead_no = '{$this->id}' LIMIT 1"));
    if ($this->relative) {
      return $this->relative->full_name();
    } else {
      return "Not Specified";
    }
  }

  public function get_services_cost(){
    //gets all the cost of requested services on the deadbody
    //find all the requested services on a deadbody
    $sql = "SELECT * FROM requested_service WHERE dead_no={$this->id}";
    $this->requested_services = RequestedService::find_by_sql($sql);
    $total_debit = 0;
    //for each requested service find price and add to total debit
    foreach ($this->requested_services as $requested_service) {
      $service = Service::find_by_id($requested_service->service_no);
      $total_debit += $service->price;
    }
    return $total_debit;
  }

  public function get_storage_cost(){
    //gets the cost of storage from the day the bosy was registered
    $number_of_days = $this->get_days_spent();
    $total_debit = 0;

    //cost for first week
    if ($number_of_days <= 7) {
      $total_debit += $number_of_days * 10.0;
    } else {
      $number_of_days = $number_of_days - 7;
      $total_debit += 7 * 10.0;

      //cost for second week
      if ($number_of_days <= 7) {
        $total_debit += $number_of_days * 20.0;
      }else {
        $number_of_days = $number_of_days - 7;
        $total_debit += 7 * 20.0;

        //for third week onwards
        $total_debit += $number_of_days * 30.0;
      }
    }
    return $total_debit;
  }

  public function get_total_debit(){
    //gets all the cost on the body
    return $this->get_storage_cost() + $this->get_services_cost();
  }

  public function get_total_credit(){
    //finds all the payments made on a body
    $sql = "SELECT * FROM payment WHERE paid_for={$this->id}";
    $payments = Payment::find_by_sql($sql);
    $total_credits = 0;
    foreach ($payments as $payment) {
      $total_credits += $payment->amount;
    }

    return $total_credits;
  }

  public function get_compartment(){
    //returns the storage compartment for a dead body
    $this->compartment = array_shift(Compartment::find_all(" WHERE dead_no = '{$this->id}' LIMIT 1"));
    if ($this->compartment) {
      return $this->compartment->description;
    } else {
      return "Not specified";
    }
  }

}
?>
