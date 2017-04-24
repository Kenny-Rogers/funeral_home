<?php $staff = Worker::find_all(" WHERE status='active'");?>
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
                  <th>Staff Number</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($staff as $current_worker) { ?>
                  <tr>
                  <td><?php echo $current_worker->id; ?></td>
                  <td><?php echo $current_worker->get_full_name(); ?></td>
                  <td><?php echo $current_worker->get_role(); ?></td>
                  <td><a href="?page=delete_staff&worker_id=<?php echo $current_worker->id; ?>">Remove</a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
