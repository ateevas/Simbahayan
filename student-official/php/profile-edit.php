<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/profile-edit.css"/>

    <?php 
    	include('../cdn/cdn.php');
    ?>

  </head>
  <body>
  	
	<?php 
		include('../nav_master/nav.php');
	?>

    <!-- Profile Menu -->
    <div class="container-xl px-4 mt-4">
      <hr class="mt-0 mb-4" />
      <div class="row">
        <div class="col-xl-4">
          <!-- Profile picture card-->
          <div class="card mb-4 mb-xl-0">
            <div class="card-header">Profile Picture</div>
            <div class="card-body text-center">
              <!-- Profile picture image-->
              <img
                class="img-account-profile rounded-circle mb-2"
                src="http://bootdey.com/img/Content/avatar/avatar1.png"
                alt=""
              />
              <!-- Profile picture help block-->
              <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
              <!-- Profile picture upload button-->
              <button class="btn btn-warning" id="upload" type="button">Upload new image</button>
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
                    />
                  </div>
                </div>
                <!-- Form Row -->
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
                    />
                  </div>
                </div>
                <!-- Save changes button-->

                <a href="profile.php">
                  <button class="btn btn-warning" id="edit" type="button">Save Changes</button></a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="profile.js"></script>

  </body>
</html>
