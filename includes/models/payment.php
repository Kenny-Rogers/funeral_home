<?php
require_once(LIB_PATH.DS.'database.php');

class Payment extends DatabaseObject {
  //this class interacts with the payment table in the database
  protected static $table_name="payment";
  protected static $db_fields=array('id', 'amount', 'paid_by',
    'paid_for', 'date_paid', 'description');
  public $id;
  public $amount;
  public $paid_by;
  public $paid_for;
  public $date_paid;
  public $description;


}
?>
