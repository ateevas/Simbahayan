<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UST Portal</title>

    <?php 
    	include('../cdn/cdn.php');
    ?>

  </head>
  <body>
  		<?php 
		include('../nav_master/nav.php');
	?>

    <div class="main-container">
      <div class="inner-container">
        <div class="content-container">
          <h1>What is your role?</h1>

          <a href="student">
            <button
              class="submit"
              input
              id="button1"
              type="button"
              value="Student Orgs"
            >
              Student Org
            </button>
          </a>

          <a href="faculty">
            <button
              class="submit"
              input
              id="button2"
              type="button"
              value="CD-Coordinator"
            >
              CD Coordinator
            </button>
          </a>

          <a href="simbahayan">
            <button
              class="submit"
              input
              id="button3"
              type="button"
              value="Simbahayan Staff"
            >
              Simbahyan
            </button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
