<div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Payment Information</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="row">
                  <div class="col-xs-12">
                    <?php if ($payments) { ?>
                    <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">All Payments For This Body</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th>Payment Id</th>
                            <th>Paid By</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Date Paid</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($payments as $payment) { ?>
                            <tr>
                            <td><?php echo $payment->id; ?></td>
                            <td><?php echo $payment->paid_by; ?></td>
                            <td><?php echo $payment->description; ?></td>
                            <td><?php echo $payment->amount; ?></td>
                            <td><?php echo datetime_to_text($payment->date_paid); ?></td>
                          </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <?php } else {
                        //if no payment record found
                        output_message("No Payment Made", "fail");
                    } ?>
          </div>
          </div>
        </div>
      </div>
</div>
