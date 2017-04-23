<?php
require_once(LIB_PATH.DS.'database.php');

class Payment extends DatabaseObject {
  //this class interacts with the payment table in the database
  //NOTE::for very large tables, you can use mysqli's show_fields_from(TABLE_NAME)
  //get a list of attributes to be used
  protected static $table_name="payment";
  protected static $db_fields=array('id', 'amount', 'paid_by',
    'paid_for', 'date_paid', 'description');
  public $id;
  protected $amount;
  protected $paid_by;
  protected $paid_for;
  protected $date_paid;
  protected $description;

}
?>
