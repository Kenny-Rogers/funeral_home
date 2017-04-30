<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Service Information</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
      <div class="row">
              <div class="col-xs-12">
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">All Requested Services On This Body</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Service</th>
                        <th>Status</th>
                        <th>Worker </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                          foreach ($services as $service) {
                            $worker_name= "";
                            $class = "";
                            $deadbody = Deadbody::find_by_id($service->dead_no);
                            $real_service = Service::find_by_id($service->service_no);
                            $worker = Worker::find_by_id($service->worker_no);
                            //checking if worker exits
                            if ($worker) { $worker_name = $worker->get_full_name(); }
                            else { $worker_name = "-"; }

                            //checking if service is DONE or _TODO
                            if (stristr($service->status, "TODO")) { $class = "danger"; }
                            elseif (stristr($service->status, "DONE")) { $class = "success"; }
                        ?>
                        <tr class="<?php echo $class; ?>">
                        <td><?php echo $real_service->name; ?></td>
                        <td><?php echo $service->status; ?></td>
                        <td><?php echo  $worker_name; ?></td>
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

        </div>
      </div>
</div>
