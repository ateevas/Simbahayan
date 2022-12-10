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

    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/manage.css"/>

  </head>
  <body>

  	<?php 
  	include('../nav_master/nav.php');
  	?>



  <h1 class="display-5 mt-3">Manage Students</h1>  
 



  <table class="table" id="example">
    
    <thead>
      <tr>
        <!--Name--> <th>Name</th>
         <!--Name--> <th>College</th>
        <!--IDnumber-->   <th>ID number</th>
        <!--Email-->   <th>Email</th>
         <!--PassedKRA/KPI-->  <th>Passed KRA/KPI </th>
         <!--TimePassed-->  <th>Date Passed</th>
         <!--Status-->  <th>Action</th>
      </tr>
      
    </thead>

    

    <tbody class="table-group-divider">
      <tr>
    <!--Name/College--> <td>Joshua Cabangal</td>
       <!--College-->   <td>CICS</td>
       <!--ID number-->   <td>2018108174</td>
        <!--Email-->  <td>joshuacabangal@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>1/1/2022</td>
        <!--Status-->  <td id="status"><a href="kra1.php">View</a></i></td>
      </tr>
      <tr>
    <!--Name/College--> <td>Juan</td>
       <!--College-->   <td>CAA</td>
       <!--ID number-->   <td>2018108343</td>
        <!--Email-->  <td>JUAN@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>1/1/2022</td>
        <!--Status-->  <td id="status"><a href="">View</a></i></td>
      </tr>
      <tr>
    <!--Name/College--> <td>JULIA</td>
       <!--College-->   <td>CBB</td>
       <!--ID number-->   <td>20181082222</td>
        <!--Email-->  <td>jJULIA@gmail.com</td>
        <!--PassedKRA/KPI-->  <td>yes</td>
        <td>1/1/2022</td>
        <!--Status-->  <td id="status"><a href="">View</a></i></td>
      </tr>
     
     
    </tbody>
  </table>


  <div class="save-wrapper">


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
<script type="text/javascript">
  $(document).ready(function(){
    $('#example').DataTable();
  })
</script>
