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
  public $reciept;

  function print_receipt(){
    global $session;
    include_once(LIB_PATH.DS.'packages'.DS.'fpdf'.DS.'fpdf.php');
      		//fileName
    $file_name="invoice".$this->id.".pdf";
    $date = format_date(time());
    $deadbody = Deadbody::find_by_id($this->paid_for);
    $worker = Worker::find_by_id($session->worker_id);

  	$pdf = new FPDF();
  	$pdf->AddPage();
  	$pdf->SetFont('Arial','B',16);
  	$pdf->Cell(80);
  	$pdf->Cell(40,10,'CrossOver Limited', 'C');
  	$pdf->Ln();
    $pdf->SetFont('Times','',14);
  	$txt="Invoice Number :\t\t ".$this->id;
  	$pdf->Cell(40,10,"$txt");
    $pdf->Ln();
  	$pdf->SetFont('Times','',14);
  	$txt="Payment for :\t\t ".$deadbody->get_full_name();
  	$pdf->Cell(40,10,"$txt");
    $pdf->Ln();
    $pdf->SetFont('Times','',14);
    $txt="Payment by :\t\t ".$this->paid_by;
    $pdf->Cell(40,10,"$txt");
  	$pdf->Ln();
  	$txt="Description :\t\t $this->description";
  	$pdf->Cell(40,10,"$txt" );
  	$pdf->Ln();
  	$txt="Amount :\t\t $this->amount";
  	$pdf->Cell(40,10,"$txt" );
  	$pdf->Ln();
  	$txt="Date :\t\t $date";
  	$pdf->Cell(40,10,"$txt" );
  	$pdf->Ln();
  	$pdf->Ln(10);
  	$pdf->SetFont('Arial','',10);
  	$pdf->Ln();
  	$pdf->SetFont('Arial','B',14);
  	$txt="Record By :\t\t ".$worker->get_full_name();
  	$pdf->Cell(40,10,"$txt");
  	$pdf->Ln();
  	$content = $pdf->Output(RECIEPTS.DS."$file_name",'F');
    $this->reciept = "../reciepts/$file_name";

    if ($this->reciept) {
      return true;
    } else {
      return false;
    }
  }

}
?>
