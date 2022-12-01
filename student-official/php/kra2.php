<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Development Report</title>

    <?php 
    	include('../cdn/cdn.php');
    ?>

  </head>
  <body>

	<?php 
		include('../nav_master/nav.php');
	?>

    <!--navigation bar---->
    <div class="navigation-container">
      <div class="navigation">
        <ul class="nav nav justify-content-center bg-warning mb-3 rounded mt-3" id="pills-tab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/student-official/html/profile.html"
              >Profile <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/student-official/html/kra-select.html"
              >Community Development Report <span class="sr-only"></span
            ></a>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/student-official/html/changepass.html">Change Password</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/student-official/html/contact.html"
              >Contact <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/login-page/html/login.html">Logout <span class="sr-only"></span></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
        </div>
      </div>
    </div>
    <!-----------------navigation bar end----------->

    <hr />

    <div class="title-wrapper m-2">
      <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
    <!------Accordion------------------------->
    <br />
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <!--Status and Target NO. -->
      <div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4"><h4>Status No.</h4></div>
        <div class="col-6 col-md-4"><h4>Target No.</h4></div>
      </div>
      <br />
      <!--UCDP Projects (Not Dropdown) -->
      <div class="row">
        <div class="col-6 col-md-4" id="ucdp">
          <h3>Projects under Institutional Development for Community Development</h3>
        </div>

        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>
      <hr />

      <div class="row">
        <div class="col-6 col-md-4" id="ucdp"><h3>Projects under Social Awareness and Advocacy</h3></div>
        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-6 col-md-4" id="ucdp"><h3>Projects Under Community-engaged research</h3></div>
        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-6 col-md-4" id="ucdp"><h3>Projects Underservice-learning</h3></div>
        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>

      <!-------->

      <div class="button-wrapper">
        <button type="button" class="btn btn-warning">Save</button>
        <a class="btn btn-dark" href="/student-official/html/kra2-next.html" role="button">Next</a>
      </div>
    </div>

    <!---javascript bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>