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
            aria-controls="flush-collapseOne"
          >
            Number of participants in the projects under the UDCP

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
            <!-- Accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Status no.-->
                      No. of Student Organizations

                      <input id="UDCPs_NSO" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Students

                      <input id="UDCPs_NStu" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Faculty

                      <input id="UDCPs_NFac" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Administratiors

                      <input id="UDCPs_NAdmin" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Support Staff

                      <input id="UDCPs_NSS" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Alumni
                      <input id="UDCPs_NAlumni" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no. -->
                      No. of Student Organizations

                      <input id="UDCPt_NSO" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Students

                      <input id="UDCPt_NStu" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Faculty

                      <input id="UDCPt_NFac" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Administratiors

                      <input id="UDCPt_NAdmin" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Support Staff

                      <input id="UDCPt_NSS" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Alumni
                      <input id="UDCPt_NAlumni" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>
                <!-- Targer No. -->
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
            Research presentation in fora/ conference

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
            <!-- Accordion-list --->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Status no.-->
                      No. of Research Presentation in Local Fora/ Conference

                      <input id="fcs_RPLFC" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Research Presentation in International Fora/ Conference

                      <input id="fcs_RPIFC" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no.-->
                      No. of Research Presentation in Local Fora/ Conference

                      <input id="fct_RPLFC" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Research Presentation in International Fora/ Conference

                      <input id="fct_RPIFC" placeholder="0" type="number"/>
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
        <h2 class="accordion-header" id="flush-headingSix">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseSix"
            aria-expanded="false"
            aria-controls="flush-collapseSix"
          >
            Publications

            <!-- Number of DATA submitted -->
            <div class="header-num-wrapper">
              <div class="header-num">
              </div>
            </div>
            <!-- Number of DATA submitted -->
          </button>
        </h2>
        <div
          id="flush-collapseSix"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingSix"
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
                      <!-- Status no.-->
                      Status No. of Local Publications

                      <input id="ps_NLP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of International Publications

                      <input id="ps_IP" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no.-->
                      Target No. of Local Publications

                      <input id="pt_NLP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of International Publications

                      <input id="pt_IP" placeholder="0" type="number"/>
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
      <div class="button-wrapper">
        <a class="btn btn-warning" href="#" role="button">Edit</a>
        <!-- Button trigger modal -->
        <button onclick="btnApprove()" type="button" class="btn btn-warning" data-toggle="modal" data-target="#approval">Approve</button>

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
                <h5 class="modal-title" id="exampleModalLongTitle">Annual Report Approval</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">Approve the Annual Report? It cannot be undone</div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-warning">Yes</button>
              </div>
            </div>
          </div>
        </div>

        <a class="btn btn-dark" href="/CD coordinator UI/html/kra2.html" role="button">Prev</a>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  function btnApprove(){
    // --------- Num. of Participants ---------
    var UDCPs_NSO = $("#UDCPs_NSO").val(); //UDCP: Status No.
    var UDCPs_NStu = $("#UDCPs_NStu").val();
    var UDCPs_NFac = $("#UDCPs_NFac").val();
    var UDCPs_NAdmin = $("#UDCPs_NAdmin").val();
    var UDCPs_NSS = $("#UDCPs_NSS").val();
    var UDCPs_NAlumni = $("#UDCPs_NAlumni").val();

    var UDCPt_NSO = $("#UDCPt_NSO").val(); //UDCP: Target No.
    var UDCPt_NStu = $("#UDCPt_NStu").val();
    var UDCPt_NFac = $("#UDCPt_NFac").val();
    var UDCPt_NAdmin = $("#UDCPt_NAdmin").val();
    var UDCPt_NSS = $("#UDCPt_NSS").val();
    var UDCPt_NAlumni = $("#UDCPt_NAlumni").val();

// --------- Research Presentation ---------
    var fcs_RPLFC = $("#fcs_RPLFC").val(); //Fora/Conference: Status No.
    var fcs_RPIFC = $("#fcs_RPIFC").val();

    var fct_RPLFC = $("#fct_RPLFC").val(); //Fora/Conference: Target No.
    var fct_RPIFC = $("#fct_RPIFC").val();


// --------- Publications ---------
    var ps_NLP = $("#ps_NLP").val(); //Publication: Status No.
    var ps_IP = $("#ps_IP").val();

    var pt_NLP = $("#pt_NLP").val(); //Publication: Target No.
    var pt_IP = $("#pt_IP").val();

  }





</script>