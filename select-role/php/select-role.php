<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Select</title>
    <?php 
    	include('../cdn/cdn.php');
    ?>

  </head>
  <body>

	<?php 
		include('../nav_master/nav.php');
	?>

      <section
        class="vh-100"
        style="
          background-image: url('/login-page/pictures/Untitled\ design.png');
          background-size: cover;
        "
      >
        <div class="container py-5 h-100">
          <div
            class="row d-flex justify-content-center align-items-center h-100"
          >
            <div class="card-group">
              <div class="card bg-light">
                <a href="/simbahayan-ui/html/profile.html">
                  <img
                    src="/select-role/picture/staff.png"
                    class="card-img-top"
                    alt=""
                    href="/simbahayan-ui/html/profile.html"
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">Simbahayan Staff</h5>

                  <p class="card-text"></p>
                </div>
              </div>
              <div class="card bg-light">
                <a href="/CD coordinator UI/html/profile.html">
                  <img
                    src="/select-role/picture/coordinator.png"
                    class="card-img-top"
                    alt=""
                  />
                </a>

                <div class="card-body">
                  <h5 class="card-title">Community Development Cooridnator</h5>
                  <p class="card-text"></p>
                </div>
              </div>
              <div class="card bg-light">
                <a href="/student-offical/html/profile.html">
                  <img
                    src="/select-role/picture/student.png"
                    class="card-img-top"
                    alt=""
                    href
                  />
                </a>
                <div class="card-body">
                  <h5 class="card-title">Student</h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
          </div>

          <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"
          ></script>
        </div>
      </section>
    </div>
  </body>
</html>
