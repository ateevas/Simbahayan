<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/changepass.css"/>
    <?php 
    	include('../cdn/cdn.php');
    ?>


  </head>
  <body>

	<?php 
		include('../nav_master/nav.php');
	?>
	
    <!-- form card change password -->
    <div class="card card-outline-secondary">
      <div class="card-header">
        <h3 class="mb-0">Change Password</h3>
      </div>
      <div class="card-body">
        <form class="form" role="form" autocomplete="off">
          <div class="form-group">
            <label for="inputPasswordOld">Current Password</label>
            <input type="password" class="form-control" id="inputPasswordOld" required="" />
          </div>
          <div class="form-group">
            <label for="inputPasswordNew">New Password</label>
            <input type="password" class="form-control" id="inputPasswordNew" required="" />
            <span class="form-text small text-muted">
              The password must be 8-20 characters, and must <em>not</em> contain spaces.
            </span>
          </div>
          <div class="form-group">
            <label for="inputPasswordNewVerify">Verify</label>
            <input type="password" class="form-control" id="inputPasswordNewVerify" required="" />
            <span class="form-text small text-muted"> To confirm, type the new password again. </span>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-warning btn-lg float-right">Save</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /form card change password -->

  </body>
</html>
