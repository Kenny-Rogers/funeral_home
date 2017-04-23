<?php
  $deadbodies = Deadbody::find_all(" WHERE NOT status='released'");
?>
<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <!--div class="box-header">
              <h3 class="box-title"></h3>
            </div-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Body Number</th>
                  <th>Name</th>
                  <th>Date of Death</th>
                  <th>Relative</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($deadbodies as $deadbody): ?>
                    <tr>
                    <td><?php echo $deadbody->id; ?></td>
                    <td><?php echo $deadbody->get_full_name(); ?></td>
                    <td><?php echo $deadbody->get_date_of_death(); ?></td>
                    <td>-</td>
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
