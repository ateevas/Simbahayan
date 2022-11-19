<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forget Password</title>

    <?php 
    	include('../cdn/cdn.php');
    ?>



  </head>
  <body>
   	<?php 
		include('../nav_master/nav.php');
	?>

    <div class="forget-container">
      <div class="inner-pass">
        <div class="forget-context">
          <h1>Reset your Password</h1>
          <hr />

          <p>Please enter your reset your password</p>
          <form>
            <div class="mb-3">
              <label for="newpass" class="form-label">New Password</label>
              <input type="password" class="form-control" id="newpass" aria-describedby="newpass" />
            </div>
            <div class="mb-3">
              <label for="confirmpass" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmpass" />
            </div>

            <button type="submit" class="btn btn-warning">Reset</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
