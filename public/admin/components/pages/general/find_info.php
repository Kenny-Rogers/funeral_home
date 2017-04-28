<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Choose Method to Find Body</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <div class="form-group">
          <select class="form-control" onchange="load_content(this.value, 'components/pages/admin/search_page.php', 'search_display')">
            <option value="-1">Choose ..........</option>
            <option value="find_by_id">Search By Body Id</option>
            <option value="find_by_name">Search By Name</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="search_display">

</div>
