<nav class="navbar bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="profile.php">
          <img
            src="../pictures/ustlogo.png"
            alt="Logo"
            width="70"
            height="70"
            class="d-inline-block align-text-middle"
          />
          <span>Simbahayan Portal</span>
        </a>
      </div>
    </nav>


    <div class="navigation-container">
      <div class="navigation">
        <ul class="nav nav justify-content-center bg-warning mb-3 rounded mt-3" id="pills-tab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="profile.php"
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
              <a class="dropdown-item" href="annual.php">Annual Report Approval</a>
              <a class="dropdown-item" href="kra-select.php">KRAs and KPIs Monitoring Sheet</a>
              <a class="dropdown-item" href="download.php">Download KRAs and KPIs</a>
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
              <a class="dropdown-item" href="manage-edit.php"
                >Manage Community Development Coordinators</a
              >
              <a class="dropdown-item" href="dashboard.php">Dashboard</a>
              <a class="dropdown-item" href="changepass.php">Change Password</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="contact.php"
              >Contact <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="login.php">Logout <span class="sr-only"></span></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
        </div>
      </div>
    </div>