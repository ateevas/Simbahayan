<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>    

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

    <!------Profile Menu-------------->

    <div class="container-xl px-4 mt-4">
      <hr class="mt-0 mb-4" />
      <div class="row">
        <div class="col-xl-4">
          <!-- Profile picture card-->
          <div class="card mb-4 mb-xl-0">
            <div class="card-header">Profile Picture</div>
            <div class="card-body text-center">
              <!-- Profile picture image-->
              <div id="display-image"></div>

              <!-- Profile picture help block-->
              <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
              <!-- Profile picture upload button-->

              <input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg" />

              <!-----<button class="btn btn-warning" id="image-input" type="button">Upload new image</button> ---->
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <!-- Account details card-->
          <div class="card mb-4">
            <div class="card-header">Account Details</div>
            <div class="card-body">
              <form>
                <!-- Form Row-->
                <div class="row gx-3 mb-3">
                  <!-- Form Group (first name)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputFirstName">First name</label>
                    <input
                      class="form-control"
                      id="inputFirstName"
                      type="text"
                      placeholder="Enter your first name"
                      value="Joshua"
                      readonly
                    />
                  </div>
                  <!-- Form Group (last name)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputLastName">Last name</label>
                    <input
                      class="form-control"
                      id="inputLastName"
                      type="text"
                      placeholder="Enter your last name"
                      value="Cabangal"
                      readonly
                    />
                  </div>
                </div>
                <!-- Form Row        -->
                <div class="row gx-3 mb-3">
                  <!-- Form Group (organization name)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputOrgName">ID number</label>
                    <input
                      class="form-control"
                      id="inputOrgName"
                      type="text"
                      placeholder="Enter your Student Number"
                      value="201800000"
                      readonly
                    />
                  </div>
                  <!-- Form Group (location)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputLocation">College/Faculty</label>
                    <input
                      class="form-control"
                      id="inputLocation"
                      type="text"
                      placeholder="Enter your College"
                      value="College of Information and Computing Sciences"
                      readonly
                    />
                  </div>
                </div>
                <!-- Form Group (email address)-->
                <div class="mb-3">
                  <label class="small mb-1" for="inputEmailAddress">Email address</label>
                  <input
                    class="form-control"
                    id="inputEmailAddress"
                    type="email"
                    placeholder="Enter your email address"
                    value="joshuafujiyama.cabangal.cics@ust.edu.ph"
                    readonly
                  />
                </div>
                <!-- Form Row-->
                <div class="row gx-3 mb-3">
                  <!-- Form Group (phone number)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputPhone">Phone number</label>
                    <input
                      class="form-control"
                      id="inputPhone"
                      type="number"
                      placeholder="Enter your phone number"
                      value="555-123-4567"
                      readonly
                    />
                  </div>
                  <!-- Form Group (birthday)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                    <input
                      class="form-control"
                      id="inputBirthday"
                      type="date"
                      name="birthday"
                      placeholder="Enter your birthday"
                      value="06/10/1988"
                      readonly
                    />
                  </div>
                </div>
                <!-- Form Row-->
                <div class="row gx-3 mb-3">
                  <!-- Form Group (Organiztion)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputOrg">Organization</label>
                    <input
                      class="form-control"
                      id="org"
                      type="text"
                      placeholder="Enter your Organization"
                      value=""
                      readonly
                    />
                  </div>
                  <!-- Form Group (Position)-->
                  <div class="col-md-6">
                    <label class="small mb-1" for="inputPosition">Position</label>
                    <input
                      class="form-control"
                      id="inputPosition"
                      type="text"
                      placeholder="Enter your Position"
                      value=""
                      readonly
                    />
                  </div>
                </div>
                <!-- Save changes button-->
                <a href="/student-offical/html/profile-edit.html">
                  <button class="btn btn-warning" id="edit" type="button">Edit</button></a
                >
              </form>
            </div>
          </div>
        </div>
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
    <script src="profile.js"></script>
    <script src="upload.js"></script>
  </body>
</html>
