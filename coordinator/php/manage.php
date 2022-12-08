<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manage Students</title>
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
      <ul
        class="nav nav justify-content-center  bg-warning mb-3 rounded mt-3"
        id="pills-tab"
        role="tablist"
      >
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

  <h1 class="display-5 mt-3">Manage Students</h1>  
 
  <nav class="navbar ">
    <form class="form-inline w-50 p-2 ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
<div class="btn-wrapper">
  <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>

  <!-- Button trigger modal -->
<button type="button" id="modal" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter"><i class="bi bi-plus-circle-fill"></i>
  Add Coordinators
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Students</h5>
        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="bi bi-x-circle"></i></span>
        </button>
      </div>
      <div class="modal-body"><!-- add content here -->

        <div class=" container rounded-3  my-5 bg-white" style="height:auto;">
         
          <h5 class=" h1">Edit or Add Students</h5> 
          <div>
      <div class="row">
              <div class=" col-8">
          <input class=" py-3 form-control shadow" placeholder="Input New Coordinators" type="text" id="inputText"> 
              </div>
              <div class="col-2">
                  <!-- <i onclick="addList()" class=" btn btn-dark rounded-pill fas fa-4x fa-plus-circle "></i> -->
                  <button onclick="addList()" class=" mt-2 btn btn-dark"> Add </button>
              </div>
          </div>
      </div>
          <hr>
      <div class="row rounded bg-white">
          <div class=" col-12"> 
          <ul class=" list-group" id="list"></ul>
          </div> 
      </div> 
   </div>
   <script src="/CD coordinator UI/js/add.js"></script>

        <!-- up to here-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Save changes</button>
      </div>
    </div>
  </div>

  

  </nav>



  <table class="table">
    
    <thead>
      <tbody class="table-group-divider">
      <tr>
        <th scope="row"></th>
        <!--Name--> <td>Name</td>
         <!--Name--> <td>College</td>
        <!--IDnumber-->   <td>ID number</td>
        <!--Email-->   <td>Email</td>
         <!--PassedKRA/KPI-->  <td>Passed KRA/KPI </td>
         <!--TimePassed-->  <td>Date Passed</td>
         <!--Status-->  <td></td>
      <td></td>
        
         
      </tr>
      
    </thead>

    

    <tbody class="table-group-divider">
      <tr>
        <th scope="row"><input type="checkbox"></th>
    <!--Name/College--> <td>Joshua Cabangal</td>
       <!--College-->   <td>CICS</td>
       <!--ID number-->   <td>2018108174</td>
        <!--Email-->  <td>joshuacabangal@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>1/1/2022</td>
        <!--Status-->  <td id="status"><a href="kra1.php">View</a></i></td>
        <td> <div class="form-check form-switch ">
   
        </div></td>
      </tr>
      <tr>
        <th scope="row"><input type="checkbox"></th>
    <!--Name/College--> <td>Joshua Cabangal</td>
       <!--College-->   <td>CICS</td>
       <!--ID number-->   <td>2018108174</td>
        <!--Email-->  <td>joshuacabangal@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>1/1/2022</td>
        <!--Status-->  <td id="status"><a href="">View</a></i></td>
        <td> <div class="form-check form-switch ">
   
        </div></td>
      </tr>
      <tr>
        <th scope="row"><input type="checkbox"></th>
    <!--Name/College--> <td>Joshua Cabangal</td>
       <!--College-->   <td>CICS</td>
       <!--ID number-->   <td>2018108174</td>
        <!--Email-->  <td>joshuacabangal@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>1/1/2022</td>
        <!--Status-->  <td id="status"><a href="">View</a></i></td>
        <td> <div class="form-check form-switch ">
   
        </div></td>
      </tr>
     
     
    </tbody>
  </table>


  <div class="save-wrapper">
     <!-- Button trigger modal -->
    <button
    type="button"
    class="btn btn-warning"
    data-toggle="modal"
    data-target="#approval"
  >
    Save
  </button>

  <!-- Modal -->
  <div
    class="modal fade"
    id="approval"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            Save Changes
          </h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    Are you sure you want to make changes?
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <button
            type="button"
            class="btn btn-secondary"
            data-dismiss="modal"
          >
            No
          </button>
          <button type="button" class="btn btn-warning">Yes</button>
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
  
  </body>
  </html>
