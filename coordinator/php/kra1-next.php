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

    <!------Accordion------------------------->

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
            Cultural Life, Expression and Rootedness for all (Culture and heritage development)

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
            <!-- accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Status no.-->
                      Status No. of Culture and Heritage Projects

                      <input id="cahds_CHP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input id="cahds_CIS" placeholder="0" type="number"/>
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input id="cahds_PM" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Culture and Heritage Projects

                      <input id="cahdt_CHP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input id="cahdt_CIS" placeholder="0" type="number"  />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input id="cahdt_PM" placeholder="0" type="number"  />
                    </li>
                  </ul>
                </div>
                <!-- Targer No. -->
              </div>
            </div>
            <!-- accordion-list -->
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
            Sports for all (Sports development)

            <!-- Number of DATA submitted -->
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
            <!-- accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Status no.-->
                      Status No. of Sports Development Projects

                      <input id="sds_SDP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input id="sds_CIS" placeholder="0" type="number"  />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input id="sds_PM" placeholder="0" type="number"  />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Sports Development Projects

                      <input id="sdt_SDP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input id="sdt_CIS" placeholder="0" type="number"  />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input id="sdt_PM" placeholder="0" type="number"  />
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
        <h2 class="accordion-header" id="flush-headingThree">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree"
            aria-expanded="false"
            aria-controls="flush-collapseThree"
          >
            Environmental Justice for all (Environmental sustainability and action; disaster risk reduction and
            management)
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
                      <!---Status no.-->
                      Status No. of Environmental Sustainability and Action Projects

                      <input id="drrms_ESAP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input id="drrms_CIS" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input id="drrms_PM" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Sustainability and Action Projects

                      <input id="drrmt_SAP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input id="drrmt_CIS" placeholder="0" type="number"/>
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input id="drrmt_PM" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>
                <!-- Target No.-->
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
            Holistic Life for all (Family and household development)

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
                      <!---Status no.-->
                      Status No. of Family and Household Projects

                      <input id="fhds_FHP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input id="fhds_CIS" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input id="fhds_PM" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Family and Household Projects

                      <input id="fhdt_FHP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input id="fhdt_CIS" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input id="fhdt_PM" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>
                <!-- Target No. -->
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
            Community organizations formed

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
            <!--- Accordion-list -->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Status no. -->
                      Status No. of Community Organization Formed
                      <input id="cofs_COF" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served under each Community Organization Formed
                      <input id="cofs_CISCOF" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members under each Community Organization Formed
                      <input id="cofs_PMCOF" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no. -->
                      Target No. of Community Organization Formed
                      <input id="coft_COF" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served under each Community Organization Formed
                      <input id="coft_CISCOF" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members under each Community Organization Formed
                      <input id="coft_PMCOF" placeholder="0" type="number"/>
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

        <a class="btn btn-dark" href="/simbahayan-ui/html/annual-report.html" role="button">Prev</a>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
function btnApprove() {

//Status & Target in Cultural Life
var cahds_CHP = $('#cahds_CHP').val(); 
var cahds_CIS = $('#cahds_CIS').val();
var cahds_PM = $('#cahds_PM').val();
var cahdt_CHP = $('#cahdt_CHP').val();
var cahdt_CIS = $('#cahdt_CIS').val();
var cahdt_PM = $('#cahdt_PM').val();


//Status & Target in Sports for all
var sds_SDP = $('#sds_SDP').val(); 
var sds_CIS = $('#sds_CIS').val();
var sds_PM = $('#sds_PM').val();
var sdt_SDP = $('#sdt_SDP').val();
var sdt_CIS = $('#sdt_CIS').val();
var sdt_PM = $('#sdt_PM').val();

//Status & Target in Environmental Justice
var drrms_ESAP = $('#drrms_ESAP').val(); 
var drrms_CIS = $('#drrms_CIS').val();
var drrms_PM = $('#drrms_PM').val();
var drrmt_SAP = $('#drrmt_SAP').val();
var drrmt_CIS = $('#drrmt_CIS').val();
var drrmt_PM = $('#drrmt_PM').val();

//Status & Target in Holistic Life
var fhds_FHP = $('#fhds_FHP').val(); 
var fhds_CIS = $('#fhds_CIS').val();
var fhds_PM = $('#fhds_PM').val();
var fhdt_FHP = $('#fhdt_FHP').val();
var fhdt_CIS = $('#fhdt_CIS').val();
var fhdt_PM = $('#fhdt_PM').val();

//Status & Target in Community Organization
var cofs_COF = $('#cofs_COF').val(); 
var cofs_CISCOF = $('#cofs_CISCOF').val();
var cofs_PMCOF = $('#cofs_PMCOF').val();
var coft_COF = $('#coft_COF').val();
var coft_CISCOF = $('#coft_CISCOF').val();
var coft_PMCOF = $('#coft_PMCOF').val();

}
</script>

