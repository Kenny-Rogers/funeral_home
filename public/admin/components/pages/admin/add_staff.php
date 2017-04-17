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
        <input type="text" class="form-control"  placeholder="Enter Full Name" name="FullName">
      </div>
      <div class="form-group">
        <label for="">Role</label>
        <select class="form-control" name="Role">
          <option value="Attendant">Attendant</option>
          <option value="Accountant">Accountant</option>
          <option value="Administrator">Administrator</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Gender</label>
        <select class="form-control" name="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control"  placeholder="Enter Email" name="Email">
      </div>
      <div class="form-group">
        <label for="">Telephone</label>
        <input type="telephone" class="form-control"  placeholder="Telephone" name="Telephone">
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
