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
        <input type="text" class="form-control"  placeholder="Enter Full Name" name="FullName">
      </div>
      <div class="form-group">
        <label for="">Gender</label>
        <select class="form-control" name="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Religion</label>
        <select class="form-control" name="Religion">
          <option value="Christian">Christian</option>
          <option value="Muslim">Muslim</option>
          <option value="Others">Others..</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Date of Birth</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="DateOfBirth">
      </div>
      <div class="form-group">
        <label for="">Date of Death</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="DateOfBirth">
      </div>
      <div class="form-group">
        <label for="">Address</label>
        <textarea class="form-control"  placeholder="Password" name="Address">
        </textarea>
      </div>
      <div class="form-group">
        <label for="">Cause Of Death</label>
        <input type="text" class="form-control"  placeholder="Short description of cause of death" name="CauseOfDeath">
      </div>
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
