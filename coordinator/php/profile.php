<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
    <?php 
      include('../cdn/cdn.php');
    ?>
  </head>
<<<<<<< HEAD
  <body>
    <?php 
      include('../nav_master/nav.php');
    ?>
=======

  <body>
    <nav class="navbar bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/CD coordinator UI/html/profile.html">
          <img
            src="/CD coordinator UI/pictures/ustlogo.png"
            alt="Logo"
            width="70"
            height="70"
            class="d-inline-block align-text-middle"
          />
          <span>Simbahayan Portal</span>
        </a>
      </div>
    </nav>
>>>>>>> e1d4db5663de5f39e362f8b1e31780846be4110c
    <!--navigation bar---->
    <div class="navigation-container">
    <div class="navigation">
    <ul
      class="nav nav justify-content-center  bg-warning mb-3 rounded mt-3"
      id="pills-tab"
      role="tablist"
    >
    <li class="nav-item active">
      <a class="nav-link  text-dark" href="/CD coordinator UI/html/profile.html">Profile <span class="sr-only"></span></a>
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
      
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link  text-dark" href="/CD coordinator UI/html/contact.html">Contact <span class="sr-only"></span></a>
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
  <!-----------------navigation bar end----------->
    <div class="welcome-container">
      <div class="welcome-inner">
        <div class="welcome-context">
          <h1>Welcome <span>Name!</span></h1>

          <p>
            You may now access the features of the UST Simbahayan Portal!
          </p>
        </div>
      </div>
    </div>

    <!---bootstrap----->

    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="true"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="/CD coordinator UI/pictures/SIMBAHAYAN-20161208-Cagayan-Relief-06.jpg"
            class="d-block w-100"
            alt=""
          />
        </div>
        <div class="carousel-item">
          <img src="/CD coordinator UI/pictures/image 6.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="/CD coordinator UI/pictures/image 7.png" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </body>
</html>
