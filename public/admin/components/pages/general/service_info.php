<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Service Information</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ol>
        <?php foreach ($services as $service) {
            $real_service = Service::find_by_id($service->service_no);
          ?>
          <div class="form-group">
            <li><label for="pwd">Service Name:</label></li>
            <input type="text" class="form-control" id="pwd" value="<?php echo $real_service->name; ?>" disabled>
          </div>
        <?php  } ?>
      </ol>
        </div>
      </div>
</div>
