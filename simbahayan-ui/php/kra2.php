<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 2</title>

    <?php 
      include('../cdn/cdn.php');
    ?>

</head>
<body>

  
  <?php 
    include('../nav_master/nav.php');
  ?>


    <div class="form-parent">
      <div class="form-child">
        <h3>College of Engineering</h3>
      </div>

      <!-- Button trigger modal -->
      <button
        type="button"
        class="btn btn-warning"
        id="btn-modal"
        data-toggle="modal"
        data-target="#exampleModalCenter"
      >
        Change College
      </button>
    </div>
    <hr />

    <div class="title-wrapper m-2">
      <h3>Annual Report</h3>
    </div>

    <div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Select a College</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <select class="form-select" aria-label="Default select example">
              <option>Faculty of Accountancy</option>
              <option>Faculty of Architecture</option>
              <option>Faculty of Arts and Letters</option>
              <option>Faculty of Commerce and Business Administration</option>
              <option>Faculty of Education</option>
              <option>Facutly of Fine Arts and Design</option>
              <option>Faculty of Information and Computing Sciences</option>
              <option>Faculty of Nursing</option>
              <option>Faculty of Rehabilataion Sciences</option>
              <option>Faculty of Tourism and Hospitality Management</option>
              <option>Faculty of Science</option>
              <option>Faculty of Engineering</option>
              <option>Ecclesiastical Faculties</option>
              <option>Graduate School</option>
              <option>Junior High School</option>
              <option>Faculty Medicine and Surgery</option>
              <option>Conservatory of Music</option>
              <option>Institute of Physical Education and Athletics</option>
              <option>Institute of Religion</option>
              <option>Senior High School</option>
              <option>NSTP</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!--Accordion -->
    <br />
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <!--Status and Target NO. -->
      <div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4"><h4>Status No.</h4></div>
        <div class="col-6 col-md-4"><h4>Target No.</h4></div>
      </div>
      <br />
      <!--UCDP Projects (Not Dropdown) -->
      <div class="row">
        <div class="col-6 col-md-4" id="ucdp">
          <h3>Projects under Institutional Development for Community Development</h3>
        </div>

        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>
      <hr />

      <div class="row">
        <div class="col-6 col-md-4" id="ucdp"><h3>Projects under Social Awareness and Advocacy</h3></div>
        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-6 col-md-4" id="ucdp"><h3>Projects Under Community-engaged research</h3></div>
        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>
      <hr />
      <div class="row">
        <div class="col-6 col-md-4" id="ucdp"><h3>Projects Underservice-learning</h3></div>
        <div class="col-6 col-md-4"><input placeholder="0" type="number" readonly /></div>
        <div class="col-6 col-md-3"><input placeholder="0" type="number" readonly /></div>
      </div>


      <div class="button-wrapper">
        <a class="btn btn-warning" href="#" role="button">Edit</a>
        <a class="btn btn-dark" href="/simbahayan-ui/html/kra2-next.html" role="button">Next</a>
      </div>
    </div>

  </body>
</html>
