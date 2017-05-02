<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="index.php">Home</a> &nbsp;/&nbsp; <span>Simple</span>
            </div>

            <div class="row">
              <div class="col-xs-9">
              <?php
                  if ($_GET['stat'] == 2) {
                    output_message("Login failed", "fail");
                  } else if($_GET['stat'] == 3) {
                    output_message("Logout success", "success");
                  }
              ?>
            </div>
            </div>


        <div class="row-fluid">
			<!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                    <font color ="violet" size ="8"> Login </font>
					<hr> <br></br>
                    <form method="post" action="pages/login_action.php">
                    <font color ="violet" size = "6">Enter Receipt Number:</font><br></br>
                    <input type ="text" class="form-control" name="receipt_no" required><br>
                    <input type="submit"  value="Continue" class="btn btn-default">

			<div class="row-fluid">
		        <div class="span2">
                   </div>

            </div>
</form>
			<hr>
      </div>


      <div class="span4 sidebar">

          <div class="sidebox">
              <h3 class="sidebox-title"><font color ="violet" size ="8"> Register </font></h3>

    <form method="post" action="?page=confirm_register">
    <div class="form-group">
    <label for="email">Receipt Number:</label>
    <input type ="number" class="form-control" name="receipt_no" required>
    </div>
    <div class="form-group">
    <label for="email"> Full Name:</label>
    <input type="text" class="form-control" name="full_name" required>
    </div>
    <div class="form-group">
    <label for="pwd">Email Address:</label>
    <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
    <label for="pwd">Address:</label>
    <input type="text" class="form-control" name="address" required>
    </div>
    <div class="form-group">
    <label for="pwd">Telephone:</label>
    <input type="text" class="form-control" name="telephone" required>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    </form>


          </div>
            </div>
          </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>
