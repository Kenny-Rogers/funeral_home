<?php
  $deadbodies = Deadbody::find_all(" WHERE NOT status='released'");

  $status = isset($_GET['stat'])?$_GET['stat']:0;

  switch ($status) {
    case 1:
      $message = "Notification successfull";
      $class = "success";
      break;

    case 2:
      $message = "Notification failed";
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
    <h3 class="box-title">Serve notice to relative of a deadbody</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="post" action="../../includes/admin/action/send_notice.php">
    <div class="box-body">
      <div class="form-group">
        <label for="">Body Name</label>
        <select class="form-control" name="body_id">
          <?php foreach ($deadbodies as $deadbody) { ?>
            <option value="<?php echo $deadbody->id; ?>"><?php echo $deadbody->get_full_name(); ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Choose Template</label>
        <select class="form-control" name="message">
          <!--option value="-1">Choose ........</option-->
          <option value="1">Notice of debt in relation to corpse</option>
          <option value="2">Release of dead body</option>
          <option value="-2">Others..</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">*(If other is chosen in previous step then specify)</label>
        <textarea class="form-control"  placeholder="Password" name="other">
        </textarea>
      </div>
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
