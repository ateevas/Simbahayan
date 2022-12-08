<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 1</title>


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

    <div class="kra-1">KRA 1: Self-reliant, interdependent, and empowered partner communities and institutions</div>

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

    <!-- Accordion -->

    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne"
            aria-expanded="false"
            aria-controls="flush-collapseOne "
          >
            Health for all (Health and wellness development)

            <!-- Number of DATA submitted -->
            <div class="header-num-wrapper">
              <div class="header-num">
 
              </div>
            </div>
            <!-- Number of DATA submitted -->
          </button>
        </h2>

        <div
          id="flush-collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-- Accordion-list  -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Status no.-->
                      Status No. of Health and Wellness Development Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no.-->
                      Target No. of Health and Wellness Development Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!-- Target No.-->
              </div>
            </div>
            <!-- Accordion-list  -->
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo"
            aria-expanded="false"
            aria-controls="flush-collapseTwo"
          >
            Education for all (Equitable and inclusive education)

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">

              </div>
            </div>
            <!-- Number of DATA submitted -->
          </button>
        </h2>
        <div
          id="flush-collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!--- Accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Status no.-->
                      Status No. of Equitable and Inclusive Education Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Target no.-->
                      Target No. of Equitable and Inclusive Education Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!-- Targer No.-->
              </div>
            </div>
            <!-- Accordion-list -->
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree"
            aria-expanded="false"
            aria-controls="flush-collapseThree"
          >
            Good governance for all (Leadership, organizational development, and good governance)

            <!-- Number of DATA submitted -->
            <div class="header-num-wrapper">
              <div class="header-num">
              </div>
            </div>
            <!-- Number of DATA submitted -->
          </button>
        </h2>
        <div
          id="flush-collapseThree"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-- Accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Status no.-->
                      Status No. of Leadership, Organizational Development, and Good Governance Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Target no.-->
                      Target No. of Leadership, Organizational Development, and Good Governance Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!--Target No.-->
              </div>
            </div>
            <!-- Accordion-list -->
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour"
            aria-expanded="false"
            aria-controls="flush-collapseFour"
          >
            Economic justice for all (Employability and social enterprise)

            <!-- Number of DATA submitted -->
            <div class="header-num-wrapper">
              <div class="header-num">
              </div>
            </div>
            <!-- Number of DATA submitted -->
          </button>
        </h2>
        <div
          id="flush-collapseFour"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-- Accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Status no.-->
                      Status No. of Employability and Social Enterprise Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Target no.-->
                      Target No. of Employability and Social Enterprise Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!-- Targer No.-->
              </div>
            </div>
            <!-- Accordion-list -->
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive"
            aria-expanded="false"
            aria-controls="flush-collapseFive"
          >
            Christ's love for all (Socio-pastoral ministry and evangelization)

            <!-- Number of DATA submitted -->
            <div class="header-num-wrapper">
              <div class="header-num">

              </div>
            </div>
            <!-- Number of DATA submitted -->
          </button>
        </h2>
        <div
          id="flush-collapseFive"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-- Accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Status no.-->
                      Status No. of Socio-Pastoral Ministry and Evangelization Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!--Target no.-->
                      Target No. of Socio-Pastoral Ministry and Evangelization Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!--Targer No.-->
              </div>
            </div>
            <!-- Accordion-list -->
          </div>
        </div>
      </div>
      <div class="button-wrapper">
        <a class="btn btn-warning" href="#" role="button">Edit</a>
        <a class="btn btn-dark" href="/simbahayan-ui/html/kra1-next.html" role="button">Next</a>
      </div>
    </div>
  </body>
</html>
