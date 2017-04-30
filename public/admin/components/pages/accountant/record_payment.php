<?php $body_id=$_GET["body_id"];?>
<div class="row">
<!-- left column -->
<div class="col-md-offset-2 col-md-8">
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Make Payment</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="../../includes/admin/action/make_payment.php">
    <div class="box-body">
      <div class="form-group">
        <input type="text" name="paid_for" value="<?php echo $body_id; ?>" hidden>
      </div>
      <!--div class="form-group">
        <label for="">Full Name</label>
        <input type="text" class="form-control"  placeholder="Enter Full Name" name="full_name">
      </div-->
      <div class="form-group">
        <label for="">Paid By</label>
        <input type="text" class="form-control"  placeholder="Name Of The Person Paying" name="paid_by">
      </div>
      <div class="form-group">
        <label for="">Amount</label>
        <input type="text" class="form-control"  placeholder="Amount Paid" name="amount">
      </div>
      <div class="form-group">
        <label for="">Description</label>
        <textarea class="form-control"  placeholder="Purpose Of Payment" name="description">
        </textarea>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Record</button>
    </div>
  </form>
</div>
<!-- /.box -->
</div>
</div>
