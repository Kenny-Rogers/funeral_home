<?php
  $services = RequestedService::find_by_sql("SELECT * FROM requested_service WHERE status='TODO'");
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
                  <th>Service</th>
                  <th>Relative</th>
                  <th>Compartment Information</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php  $i = 1;
                    foreach ($services as $service) {
                      $deadbody = Deadbody::find_by_id($service->dead_no);
                      $real_service = Service::find_by_id($service->service_no);
                  ?>
                  <tr>
                  <td><?php echo $deadbody->id; ?></td>
                  <td><?php echo $deadbody->get_full_name(); ?></td>
                  <td><?php echo $real_service->name; ?></td>
                  <td><?php echo $deadbody->get_relative(); ?></td>
                  <td><?php echo $deadbody->get_compartment(); ?></td>
                  <td><a href="?page=release_info&body_id=<?php echo $service->dead_no."&service_no=$service->service_no"; ?>">Attended To</a></td>
                </tr>
                <?php $i++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
