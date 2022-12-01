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

    <div class="kra-1">KRA 3: Dynamic Community Development External Partnerships and Networks</div>

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
            Local Higher Educational Institutions

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
                      No. of MOU/MOA

                      <input id="LHEIs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Community Development and Advocacy Activities

                      <input id="LHEIs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      No. of MOU/MOA

                      <input id="LHEIt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Community Development and Advocacy Activities
                      <input id="LHEIt_CDAA" placeholder="0" type="number"/>
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
        <h2 class="accordion-header" id="flush-headingTwo">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo"
            aria-expanded="false"
            aria-controls="flush-collapseTwo"
          >
            International Higher Educational Institutions

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
          id="flush-collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingTwo"
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

                      <input id="IHEIs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="IHEIs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="IHEIt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="IHEIt_CDAA" placeholder="0" type="number"/>
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
        <h2 class="accordion-header" id="flush-headingThree">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree"
            aria-expanded="false"
            aria-controls="flush-collapseThree"
          >
            Faith-based/Church-based Organizations

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

                      <input id="CBOs_MM" placeholder="0" type="number" />
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="CBOs_CDAA" placeholder="0" type="number" />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="CBOt_MM" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="CBOt_CDAA" placeholder="0" type="number"  />
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
        <h2 class="accordion-header" id="flush-headingFour">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour"
            aria-expanded="false"
            aria-controls="flush-collapseFour"
          >
            Professional/Business Organizations

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
          id="flush-collapseFour"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFour"
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

                      <input id="PBOs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="PBOs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="PBOt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="PBOt_CDAA" placeholder="0" type="number"/>
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
            Training/Course on Community Engagement and Organizing Offering

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
                      Status No. of Training/ Course

                      <input id="TCCs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants

                      <input id="TCCs_CDAA" placeholder="0" type="number" />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Status No. of Participants

                      <input id="TCCt_MM" placeholder="0" type="number" />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants

                      <input id="TCCt_CDAA" placeholder="0" type="number" />
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
        <a class="btn btn-dark" href="kra3.php" role="button">Prev</a>
        <button type="button" class="btn btn-warning">Save</button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#approval">Submit</button>

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
                <h5 class="modal-title" id="exampleModalLongTitle">Community Development Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">Are you sure you want to submit report?</div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button onclick="kra3Next_yes()" type="button" class="btn btn-warning">Yes</button>
              </div>
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

<script type="text/javascript">
  function kra3Next_yes(){
    var LHEIs_MM = $("#LHEIs_MM").val(); //Local Higher
    var LHEIs_CDAA = $("#LHEIs_CDAA").val();
    var LHEIt_MM = $("#LHEIt_MM").val();
    var LHEIt_CDAA = $("#LHEIt_CDAA").val();


    var IHEIs_MM = $("#IHEIs_MM").val(); //International Higher
    var IHEIs_CDAA = $("#IHEIs_CDAA").val();
    var IHEIt_MM = $("#IHEIt_MM").val();
    var IHEIt_CDAA = $("#IHEIt_CDAA").val();


    var CBOs_MM = $("#CBOs_MM").val(); //Faith based
    var CBOs_CDAA = $("#CBOs_CDAA").val();
    var CBOt_MM = $("#CBOt_MM").val();
    var CBOt_CDAA = $("#CBOt_CDAA").val();


    var PBOs_MM = $("#PBOs_MM").val();// Prof. Business org
    var PBOs_CDAA = $("#PBOs_CDAA").val();
    var PBOt_MM = $("#PBOt_MM").val();
    var PBOt_CDAA = $("#PBOt_CDAA").val();


    var TCCs_MM = $("#TCCs_MM").val(); //Training Courses
    var TCCs_CDAA = $("#TCCs_CDAA").val();
    var TCCt_MM = $("#TCCt_MM").val();
    var TCCt_CDAA = $("#TCCt_CDAA").val();

  }



</script>