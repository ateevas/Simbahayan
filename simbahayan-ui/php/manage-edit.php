<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/manage.css"/>
    <?php 
      include('../cdn/cdn.php');
    ?>

</head>
<body>
  <?php 
    include('../nav_master/nav.php');
  ?>







  <h1 class="display-5 mt-3">Manage Community Development Coordinators</h1>  
 
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Coordinators</h5>
        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="bi bi-x-circle"></i></span>
        </button>
      </div>
      <div class="modal-body"><!----add content here-->

        <div class=" container rounded-3  my-5 bg-white" style="height:auto;">
         
          <h5 class=" h1">Edit or Add Coordinators</h5> 
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

        <!----up to here-->
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
         <!--TimePassed-->  <td>Time Passed</td>
         <!--Status-->  <td>Status</td>
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
        <td>8:15am</td>
        <!--Status-->  <td id="status"><i  style="color: green;"class="bi bi-person-check-fill "></i></td>
        <td> <div class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
        </div></td>
      </tr>
      <tr>
        <th scope="row"><input type="checkbox"></th>
     <!--Name/College--> <td>Joshua Cabangal</td>
       <!--College-->   <td>CICS</td>
       <!--ID number-->   <td>2018108174</td>
        <!--Email-->  <td>joshuacabangal@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>8:15am</td>
        <!--Status-->  <td id="status"><i style="color:red ;" class="bi bi-person-x-fill"></i></td>
        <td> <div class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
        </div></td>
      </tr>
      <tr>
        <th scope="row"><input type="checkbox"></th>
    <!--Name/College--> <td>Joshua Cabangal</td>
       <!--College-->   <td>CICS</td>
       <!--ID number-->   <td>2018108174</td>
        <!--Email-->  <td>joshuacabangal@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>8:15am</td>
        <!--Status-->  <td id="status"><i  style="color: green;"class="bi bi-person-check-fill "></i></td>
        <td> <div class="form-check form-switch ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
        </div></td>
      </tr>
     
     
    </tbody>
  </table>


  <div class="save-wrapper">
     <!-- Button trigger modal -->
     <a href='manage.php'>Edit</a>

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

  </body>
  </html>
