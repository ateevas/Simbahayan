<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts</title>

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
              >Profile <span class="sr-only"></span
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
    <!-- Navigation bar end -->

    <div class="contact_title">
      <div class="inner_container">
        <div class="contact_container">
          <h1>Contact</h1>
          <hr />

          <div class="location_container">
            <div class="location_font">
              <h2>Location</h2>
              <hr />

              <div class="location_details">
                <p>UST simbahayan Community Development Office, 1/F Tan Yan Kee Student Center</p>
              </div>
            </div>

            <div class="email_container">
              <div class="email_font">
                <h2>Email</h2>
                <hr />

                <div class="location_details">
                  <p>simbahayan@ust.edu.ph</p>
                </div>
              </div>

              <div class="facebook_container">
                <div class="facebook_font">
                  <h2>Facebook</h2>
                  <hr />

                  <div class="facebook_details">
                    <p>https://www.facebook.com/USTSIMBAHAYAN</p>
                    <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
