<?php
  //get the search request
  $request = isset($_GET['q']) ? $_GET['q'] : '-1';

  if ($request == "find_by_id"){
?>
<div class="row">
  <form action="index.php" method="get">
  <div class="col-md-offset-3 col-md-6">
    <input type="text" name="page" value="display_info" hidden>
    <div class="input-group input-group-sm">
      <input class="form-control" type="text" name="body_id">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-info btn-flat">Find</button>
          </span>
    </div>
  </div>
</form>
</div>
<?php } elseif ($request == "find_by_name") { ?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
        <input type="text" class="form-control" placeholder="Search By Name..."  onkeyup="showHint(this.value)" aria-describedby="basic-addon1">
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-offset-3 col-md-6 iPhone-features">
  <div class="list-group">
      <span id="txtHint"></span>
    <div>
</div>
</div>
<?php } else {?>
Please Choose One of the options
<?php } ?>
