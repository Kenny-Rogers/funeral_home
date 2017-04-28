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
                  <?php foreach ($deadbodies as $deadbody): ?>
                    <tr>
                    <td><?php echo $deadbody->id; ?></td>
                    <td><?php echo $deadbody->get_full_name(); ?></td>
                    <td><?php echo $deadbody->get_days_spent();?></td>
                    <td>-</td>
                    <td><?php echo $deadbody->get_total_debit();?></td>
                    <td><?php echo $deadbody->get_total_credit();?></td>
                    <td><a href="?page=release_info&body_id=<?php echo $deadbody->id; ?>">Release</a></td>
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
