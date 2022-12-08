<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA SELECT</title>

    <?php 
      include('../cdn/cdn.php');
    ?>

  </head>
  <body>

    <?php 
      include('../nav_master/nav.php');
    ?>

    <!-- navigation bar -->
    <div class="navigation-container">
      <div class="navigation">
        <ul class="nav nav justify-content-center bg-warning mb-3 rounded mt-3" id="pills-tab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/CD coordinator UI/html/profile.html"
              >Profile <span class="sr-only"></span></a>
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
              KRAs and KPIs
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/CD coordinator UI/html/annual.html">Annual Report Approval</a>
              <a class="dropdown-item" href="/CD coordinator UI/html/kra-select.html">KRAs and KPIs Monitoring Sheet</a>
              <a class="dropdown-item" href="/CD coordinator UI/html/download.html">Download KRAs and KPIs</a>
            </div>
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
              <a class="dropdown-item" href="/CD coordinator UI/html/changepass.html">Change Password</a>
              <a class="dropdown-item" href="/CD coordinator UI/html/manage.html">Manage Students</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/CD coordinator UI/html/contact.html"
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
    <!-- navigation bar end -->

    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="..." alt="" />
        <div class="card-body">
          <h5 class="card-title">KRA 1</h5>
          <p class="card-text">Self-reliant, interdependent, and empowered partner communities and institutions</p>
          <a href="/CD coordinator UI/html/kra1.html"><i id="icon" class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="..." alt="" />
        <div class="card-body">
          <h5 class="card-title">KRA 2</h5>
          <p class="card-text">Thomasian engagement as agents of social transformation</p>
          <br />
          <a href="/CD coordinator UI/html/kra2.html"><i id="icon" class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="..." alt="" />
        <div class="card-body">
          <h5 class="card-title">KRA 3</h5>
          <p class="card-text">Dynamic Community Development External Partnerships and Networks</p>
          <a href="/CD coordinator UI/html//kra3.html"><i id="icon" class="bi bi-arrow-right-circle"></i></a>
        </div>
      </div>
    </div>
  </body>
</html>
