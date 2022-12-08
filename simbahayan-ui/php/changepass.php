<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>




    <link rel = "stylesheet" type = "text/css" href = "/simbahayan-ui/css/changepass.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">




</head>
<body>




  <nav class="navbar bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/simbahayan-ui/html/profile.html">
        <img
          src="/simbahayan-ui/pictures/ustlogo.png"
          alt="Logo"
          width="70"
          height="70"
          class="d-inline-block align-text-middle"
        />
        <span>Simbahayan Portal</span>
      </a>
    </div>
  </nav>

  <!---navigation bar--------------------------------->
  <div class="navigation-container">
    <div class="navigation">
    <ul
      class="nav nav justify-content-center  bg-warning mb-3 rounded mt-3"
      id="pills-tab"
      role="tablist"
    >
    <li class="nav-item active">
      <a class="nav-link  text-dark" href="/simbahayan-ui/html/profile.html">Profile <span class="sr-only"></span></a>
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
            <a class="dropdown-item" href="/simbahayan-ui/html/annual.html">Annual Report Approval</a>
            <a class="dropdown-item" href="/simbahayan-ui/html/kra-select.html">KRAs and KPIs Monitoring Sheet</a>
            <a class="dropdown-item" href="/simbahayan-ui/html/download.html">Download KRAs and KPIs</a>
          </div>
        </li>
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
          <a class="dropdown-item" href="/simbahayan-ui/html/manage-edit.html">Manage Community Development Coordinators</a>
          <a class="dropdown-item" href="/simbahayan-ui/html/dashboard.html">Dashboard</a>
          <a class="dropdown-item" href="/simbahayan-ui/html/changepass.html">Change Password</a>
      
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link  text-dark" href="/simbahayan-ui/html/contact.html">Contact <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link  text-dark" href="/login-page/html/login.html">Logout <span class="sr-only"></span></a>
      </li>
     
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="pills-home"
        role="tabpanel"
        aria-labelledby="pills-home-tab"
      >
      
      </div>
      <div
        class="tab-pane fade"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab"
      >
      
      </div>
      <div
        class="tab-pane fade"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
     
      </div>
    </div>
  </div>
</div>
    <!-------------------navigation bar end----------->






         <!-- form card change password -->
         <div class="card card-outline-secondary">
          <div class="card-header ">
              <h3 class="mb-0">Change Password</h3>
          </div>
          <div class="card-body">
              <form class="form" role="form" autocomplete="off">
                  <div class="form-group">
                      <label for="inputPasswordOld">Current Password</label>
                      <input type="password" class="form-control" id="inputPasswordOld" required="">
                  </div>
                  <div class="form-group">
                      <label for="inputPasswordNew">New Password</label>
                      <input type="password" class="form-control" id="inputPasswordNew" required="">
                      <span class="form-text small text-muted">
                              The password must be 8-20 characters, and must <em>not</em> contain spaces.
                          </span>
                  </div>
                  <div class="form-group">
                      <label for="inputPasswordNewVerify">Verify</label>
                      <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                      <span class="form-text small text-muted">
                              To confirm, type the new password again.
                          </span>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-warning btn-lg float-right">Save</button>
                  </div>
              </form>
          </div>
      </div>
      <!-- /form card change password -->









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