<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 3</title>

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

    <div class="kra-1">KRA 3: Dynamic Community Development External Partnerships and Networks</div>

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
            People's Organizations

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
                      No. of MOU/MOA

                      <input id="POs_MM" placeholder="0" type="number" readonly/>
                    </li>
                    <li class="list-group-item">
                      No. of Community Development and Advocacy Activities

                      <input id="POs_CDAA" placeholder="0" type="number"  readonly/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      No. of MOU/MOA

                      <input id="POt_MM" placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      No. of Community Development and Advocacy Activities
                      <input id="POt_CDAA" placeholder="0" type="number" readonly />
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
            Government Agencies or LGUs

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
                      Status No. of MOU/MOA

                      <input id="GAs_MM" placeholder="0" type="number" readonly  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="GAs_CDAA" placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no.-->
                      Target No. of MOU/MOA

                      <input id="GAt_MM" placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="GAt_CDAA" placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!-- Target No.-->
              </div>
            </div>
            <!-- accordion-list-->
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
            Non- Government Organizations

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
            <!-----------------accordion-list ----------------->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Status no.-->
                      Status No. of MOU/MOA

                      <input id="NGOs_MM" placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="NGOs_CDAA" placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="NGOt_MM" placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="NGOt_CDAA" placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!----Targer No.-->
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
            Basic Educational Institutions

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
                      Status No. of MOU/MOA

                      <input id="BEIs_MM" placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="BEIs_CDAA" placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="BEIt_MM" placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="BEIt_CDAA" placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>
                <!-- Targer No.-->
              </div>
            </div>
            <!-- ccordion-list -->
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

        <a class="btn btn-dark" href="/CD coordinator UI/html/kra3-next.html" role="button">Next</a>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  function btnApprove(){
    var POs_MM = $("#POs_MM").val();
    var POs_CDAA = $("#POs_CDAA").val();
    var POt_MM = $("#POt_MM").val();
    var POt_CDAA = $("#POt_CDAA").val();



    var GAs_MM = $("#GAs_MM").val();
    var GAs_CDAA = $("#GAs_CDAA").val();
    var GAt_MM = $("#GAt_MM").val();
    var GAt_CDAA = $("#GAt_CDAA").val();

   

    var NGOs_MM = $("#NGOs_MM").val();
    var NGOs_CDAA = $("#NGOs_CDAA").val();
    var NGOt_MM = $("#NGOt_MM").val();
    var NGOt_CDAA = $("#NGOt_CDAA").val();



    var BEIs_MM = $("#BEIs_MM").val();
    var BEIs_CDAA = $("#BEIs_CDAA").val();
    var BEIt_MM = $("#BEIt_MM").val();
    var BEIt_CDAA = $("#BEIt_CDAA").val();


      window.location.href="http://localhost/Simbahayan/coordiantor/php/kra3-next.php"
  }

</script>