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
          <h1>Forgot Password</h1>
          <hr />

          <p>
            Please enter your Email address. We will send a link to reset your
            password
          </p>
          <form>
            <div class="form-group">
              <label for="email">Email address</label>
              <input
                type="email"
                class="form-control"
                id="email"
                aria-describedby="emailHelp"
                placeholder="Enter email"
              />
              <small id="emailHelp" class="form-text text-muted"
                >We'll never share your email with anyone else.</small
              >
            </div>

            <button type="submit" class="btn btn-warning m-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
