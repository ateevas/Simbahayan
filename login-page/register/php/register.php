<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <?php 
    	include('../cdn/cdn.php');
    ?>

  </head>
  <body>

	<?php 
		include('../nav_master/nav.php');
	?>
	
    <section class="v-100 bg-dark">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                  <img
                    src="http://localhost/Simbahayan/login-page/register/pictures/1024px-UST_colors.svg.png"
                    alt="Sample photo"
                    class="img-fluid"
                    style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem"
                  />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Registration Form</h3>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input id="fName" type="text" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m">First name</label>
                        </div>
                      </div>


                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input id="lName" type="text" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n">Last name</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input id="uPass" type="password" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1m1">Password</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input id="cPass" type="password" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1n1">Confirm Password</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input id="emailAdd" type="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">Email Address</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input id="bDay" type="date" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example99">Birthday</label>
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                      <h6 class="mb-0 me-4">Gender:</h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="femaleGender"
                          value="option1"
                        />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>


                      <div class="form-check form-check-inline mb-0 me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="maleGender"
                          value="option2"
                        />
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>
                    </div>


                    <div class="form-group mb-4">
                      <label for="college">Select College</label>
                      <select id="col_selection" class="form-control" >
                        <option value="1" >College of Accountancy</option>
                        <option value="2">College of Architecture</option>
                        <option value="3">College of Arts and Letters</option>
                        <option value="4">College of Commerce and Business Administration</option>
                        <option value="5">College of Education</option>
                        <option value="6">College of Fine Arts and Design</option>
                        <option value="7">College of Information and Computing Sciences</option>
                        <option value="8">College of Nursing</option>
                        <option value="9">College of Rehabilataion Sciences</option>
                        <option value="10">College of Tourism and Hospitality Management</option>
                        <option value="11">College of Science</option>
                        <option value="12">Faculty of Engineering</option>
                        <option value="13">Ecclesiastical Faculties</option>
                        <option value="14">Graduate School</option>
                        <option value="15">Junior High School</option>
                        <option value="16">Faculty Medicine and Surgery</option>
                        <option value="17">Conservatory of Music</option>
                        <option value="18">Institute of Physical Education and Athletics</option>
                        <option value="19">Institute of Religion</option>
                        <option value="20">Senior High School</option>
                        <option value="21">NSTP</option>

                      </select>
                    </div>

                    <div class="form-outline mb-4">
                      <input id="id_num" type="number" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example90">ID Number</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input id="contact_num" type="number" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example99">Contact Number</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input id="oraganization" type="text" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example97">Organization </label>

                      <div class="col-7">
                        <input id="position" type="text" class="form-control" placeholder="Enter your Position" />
                      </div>

                    </div>

                    <div class="d-flex justify-content-end pt-3">
                      <button type="button" class="btn btn-light btn-lg" onclick="inputReset()">Reset all</button>
                      <button type="button" class="btn btn-warning btn-lg ms-2" onclick="inputSubmit()">Submit form</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>




<script type="text/javascript"> 
function inputReset(){
  alert("You've selected 'Reset All' button.");
}
</script>

<script type="text/javascript"> 
function inputSubmit(){
  var fName = $('#fName').val();
  var lName = $('#lName').val();
  var uPass = $('#uPass').val();
  var cPass = $('#cPass').val();
  var emailAdd = $('#emailAdd').val();
  var bDay = $('#bDay').val();
  var femaleGender = $('input[name="inlineRadioOptions"]:checked').val();
  var col_selection = $('#col_selection').val();
  var id_num = $('#id_num').val();
  var contact_num = $('#contact_num').val();
  var oraganization = $('#oraganization').val();
  var position = $('#position').val();

  alert(
    "First Name: " + fName + "\n"
    + "Last Name: " + lName + "\n"
    + "Password: " + uPass + "\n"
    + "Confirm Password: " + cPass + "\n"
    + "Email Address: " + emailAdd + "\n"
    + "Birthday: " + bDay + "\n"
    + "Gender Option Selected: " + femaleGender + "\n" //Automatically selecting either Option1 or Option2 (female and male).
    + "College Selected: " + col_selection + "\n"
    + "ID Number: " + id_num + "\n"
    + "Contact Number: " + contact_num + "\n"
    + "Organization: " + oraganization + "\n"
    + "Enter your position: " + position 
    );
}
</script>
