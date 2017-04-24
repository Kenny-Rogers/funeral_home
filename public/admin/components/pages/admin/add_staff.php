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
    <h3 class="box-title">Staff Registration</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="../../includes/admin/action/register_staff.php">
    <div class="box-body">
      <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" class="form-control"  placeholder="Enter Full Name" name="full_name">
      </div>
      <div class="form-group">
        <label for="">Role</label>
        <select class="form-control" name="role">
          <option value="attendant">Attendant</option>
          <option value="accountant">Accountant</option>
          <option value="admin">Administrator</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Gender</label>
        <select class="form-control" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control"  placeholder="Enter Email" name="email">
      </div>
      <div class="form-group">
        <label for="">Telephone</label>
        <input type="telephone" class="form-control"  placeholder="Telephone" name="telephone">
      </div>
      <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
</div>
<!-- /.box -->
</div>
</div>
