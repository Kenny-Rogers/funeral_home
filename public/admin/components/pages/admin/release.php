<?php
  $sql = "SELECT *, datediff(date_admitted, CURRENT_DATE) AS days_spent FROM"
          ." deadbody WHERE NOT status='released'";
  $deadbodies = Deadbody::find_by_sql($sql);
?>
<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Body Number</th>
                  <th>Name</th>
                  <th>Days Spent</th>
                  <th>Relative</th>
                  <th>Total Debit(GH &#8373;)</th>
                  <th>Total Credit(GH &#8373;)</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($deadbodies as $deadbody):
                      $net_amount = $deadbody->get_total_credit() - $deadbody->get_total_debit();
                      $class = "";
                      if ($net_amount >= 0) { $class = "success"; }
                      else { $class = "danger"; }
                  ?>
                    <tr class="<?php echo $class ?>" >
                    <td><?php echo $deadbody->id; ?></td>
                    <td><?php echo $deadbody->get_full_name(); ?></td>
                    <td><?php echo $deadbody->get_days_spent();?></td>
                    <td><?php echo $deadbody->get_relative(); ?></td>
                    <td><?php echo $deadbody->get_total_debit();?></td>
                    <td><?php echo $deadbody->get_total_credit();?></td>
                    <?php if ($net_amount >= 0){  ?>
                      <td><a href="?page=release_info&body_id=<?php echo $deadbody->id; ?>">Release</a></td>
                    <?php } else { ?>
                      <td><a href="?page=release#">Release</a></td>
                    <?php } ?>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
