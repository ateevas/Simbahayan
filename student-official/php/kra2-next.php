<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Development Report</title>

    <?php 
    	include('../cdn/cdn.php');
    ?>

  </head>
  <body>

	<?php 
		include('../nav_master/nav.php');
	?>

    <div class="title-wrapper m-2">
      <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
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
            aria-controls="flush-collapseOne"
          >
            Number of participants in the projects under the UDCP

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingOne"
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
                      <!---Target no.-->
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
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseFive"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFive"
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
                      <!---Target no.-->
                      No. of Research Presentation in Local Fora/ Conference

                      <input id="fct_RPLFC" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Research Presentation in International Fora/ Conference

                      <input id="fct_RPIFC" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseSix"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingSix"
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
                      <!---Target no.-->
                      Target No. of Local Publications

                      <input id="pt_NLP" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of International Publications

                      <input id="pt_IP" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
          </div>
        </div>
      </div>
      <div class="button-wrapper">
        <button onclick="kra2Next_Savebtn()" type="button" class="btn btn-warning">Save</button>
        <a class="btn btn-dark" href="kra2.php" role="button">Prev</a>
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


<script type="text/javascript">
  function kra2Next_Savebtn(){
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



    alert( "Status No." + "\n"
      + "No. Students Org.: " + ps_NLP + "\n"
      + "No. of Students: " + ps_IP + "\n"
      + "No. of Faculty: " + pt_NLP + "\n"
      + "No. of Administratiors: " + pt_IP + "\n"
      + "No. of Support Staff: " + UDCPt_NSS + "\n"
      + "No. of Alumni: " + UDCPt_NAlumni + "\n"



      );
  }



</script>