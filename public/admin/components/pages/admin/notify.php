<div class="row">
<!-- left column -->
<div class="col-md-offset-2 col-md-8">
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Serve notice to relative of a deadbody</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="../../includes/admin/action/send_notice.php">
    <div class="box-body">
      <div class="form-group">
        <label for="">Body Name</label>
        <select class="form-control" name="body_id">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Choose Template</label>
        <select class="form-control" name="Religion">
          <option value="-1">Choose ........</option>
          <option value="1">Notice of debt in relation to corpse</option>
          <option value="2">Release of dead body</option>
          <option value="-2">Others..</option>
        </select>
      </div>
      <!--div class="form-group">
        <label for="">Date of Birth</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="DateOfBirth">
      </div>
      <div class="form-group">
        <label for="">Date of Death</label>
        <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="DateOfBirth">
      </div-->
      <div class="form-group">
        <label for="">*(If other is chosen in previous step then specify)</label>
        <textarea class="form-control"  placeholder="Password" name="other">
        </textarea>
      </div>
      <!--div class="form-group">
        <label for="">Cause Of Death</label>
        <input type="text" class="form-control"  placeholder="Short description of cause of death" name="CauseOfDeath">
      </div-->
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Send Notice</button>
    </div>
  </form>
</div>
<!-- /.box -->
</div>
</div>
