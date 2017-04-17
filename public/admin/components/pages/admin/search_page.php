<?php
  //get the search request
  $request = isset($_GET['q']) ? $_GET['q'] : '-1';

  if ($request == "find_by_id"){
?>

<div class="row">
  <form action="display_info.php" method="post">
  <div class="col-md-offset-3 col-md-6">
    <div class="input-group input-group-sm">
      <input class="form-control" type="text" name="body_id">
          <span class="input-group-btn">
            <button type="button" class="btn btn-info btn-flat">Find</button>
          </span>
    </div>
  </div>
</form>
</div>

<?php } elseif ($request == "find_by_name") { ?>
dfdfdfsd


<?php } else {?>
dfdf

<?php } ?>
