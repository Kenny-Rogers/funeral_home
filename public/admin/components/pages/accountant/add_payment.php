<?php
 $status = isset($_GET['stat'])?$_GET['stat']:0;

 switch ($status) {
   case 1:
     $message = "Payment successfull";
     $class = "success";
     break;

   case 2:
     $message = "Payment failed";
     $class = "fail";
     break;

 }
?>
<?php
  $sql = "SELECT *, datediff(date_admitted, CURRENT_DATE) AS days_spent FROM"
          ." deadbody WHERE NOT status='released'";
  $deadbodies = Deadbody::find_by_sql($sql);
?>
<div class="row">
  <div class="col-md-offset-2 col-md-10">
    <?php output_message($message, $class)?>
  </div>
</div>
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
                  <th>Total Debit(GH &#8373;)</th>
                  <th>Total Credit(GH &#8373;)</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($deadbodies as $deadbody){ ?>
                    <tr>
                    <td><?php echo $deadbody->id; ?></td>
                    <td><?php echo $deadbody->get_full_name(); ?></td>
                    <td><?php echo $deadbody->get_date_of_death(); ?></td>
                    <td><?php echo $deadbody->get_total_debit();?></td>
                    <td><?php echo $deadbody->get_total_credit();?></td>
                    <td><a href="?page=record_payment&body_id=<?php echo $deadbody->id; ?>">
                        Record Payment</a></td>
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
