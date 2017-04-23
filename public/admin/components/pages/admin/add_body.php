<?php
 $status = isset($_GET['stat'])?$_GET['stat']:0;

 switch ($status) {
   case 1:
     $message = "Registration successfull";
     $class = "success";
     break;

   case 2:
     $message = "Registration failed";
     $class = "fail";
     break;

   default:
     $message = "Please Complete Form";
     $class = "info";
     break;
 }
?>
<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
<div class="row">
<!-- left column -->
<div class="col-md-offset-2 col-md-8">
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Body Registration</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="../../includes/admin/action/register_body.php">
    <div class="box-body">
      <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" class="form-control"  placeholder="Enter Full Name" name="full_name" required>
      </div>
      <div class="form-group">
        <label for="">Gender</label>
        <select class="form-control" name="gender" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Religion</label>
        <select class="form-control" name="religion" required>
          <option value="Christian">Christian</option>
          <option value="Muslim">Muslim</option>
          <option value="Others">Others..</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Date of Birth</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="date_of_birth" required>
      </div>
      <div class="form-group">
        <label for="">Date of Death</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="date_of_death" required>
      </div>
      <div class="form-group">
        <label for="">Address</label>
        <textarea class="form-control"  placeholder="Password" name="address" required >
        </textarea>
      </div>
      <div class="form-group">
        <label for="">Cause Of Death</label>
        <input type="text" class="form-control"  placeholder="Short description of cause of death"
              name="cause_of_death" required>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Register</button>
      <button type="reset" class="btn btn-info">Reset Form</button>
    </div>
  </form>
</div>
<!-- /.box -->
</div>
</div>
