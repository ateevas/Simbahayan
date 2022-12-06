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
            People's Organizations

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

                      <input id="POs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Community Development and Advocacy Activities

                      <input id="POs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      No. of MOU/MOA

                      <input id="POt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      No. of Community Development and Advocacy Activities
                      <input id="POt_CDAA" placeholder="0" type="number"/>
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
            Government Agencies or LGUs

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

                      <input id="GAs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="GAs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="GAt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="GAt_CDAA" placeholder="0" type="number"/>
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
            Non- Government Organizations

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

                      <input id="NGOs_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="NGOs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="NGOt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="NGOt_CDAA" placeholder="0" type="number"/>
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
            Basic Educational Institutions

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

                      <input id="BEIs_MM" placeholder="0" type="number" />
                    </li>
                    <li class="list-group-item">
                      Status No. of Community Development and Advocacy Activities

                      <input id="BEIs_CDAA" placeholder="0" type="number"/>
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of MOU/MOA

                      <input id="BEIt_MM" placeholder="0" type="number"/>
                    </li>
                    <li class="list-group-item">
                      Target No. of Community Development and Advocacy Activities

                      <input id="BEIt_CDAA" placeholder="0" type="number"/>
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
        <button onclick="kra3_Nextbtn()" type="button" class="btn btn-dark">Next</button>
      </div>
    </div>
  </body>
</html>


<script type="text/javascript">
  function kra3_Nextbtn(){
    var POs_MM = $("#POs_MM").val();
    var POs_CDAA = $("#POs_CDAA").val();
    var POt_MM = $("#POt_MM").val();
    var POt_CDAA = $("#POt_CDAA").val();

    //array
    var pos_arr = [POs_MM,POs_CDAA];
    var pot_arr = [POt_MM,POt_CDAA];
    localStorage.setItem('pos_arr', pos_arr);
    localStorage.setItem('pot_arr', pot_arr);


    var pos_arr = [POs_MM,POs_CDAA];
    var pot_arr = [POt_MM,POt_CDAA];
    

    // SETTING IT TO LOCAL STORAGE
    localStorage.setItem("pos_arr", pos_arr);
    localStorage.setItem("pot_arr", pot_arr);


    var GAs_MM = $("#GAs_MM").val();
    var GAs_CDAA = $("#GAs_CDAA").val();
    var GAt_MM = $("#GAt_MM").val();
    var GAt_CDAA = $("#GAt_CDAA").val();

    //array
    var gas_arr = [GAs_MM,GAs_CDAA];
    var gat_arr = [GAt_MM,GAt_CDAA];
    localStorage.setItem('gas_arr', gas_arr);
    localStorage.setItem('gat_arr', gat_arr);



    var NGOs_MM = $("#NGOs_MM").val();
    var NGOs_CDAA = $("#NGOs_CDAA").val();
    var NGOt_MM = $("#NGOt_MM").val();
    var NGOt_CDAA = $("#NGOt_CDAA").val();

    //array
    var ngos_arr = [NGOs_MM,NGOs_CDAA];
    var ngot_arr = [NGOt_MM,NGOt_CDAA];
    localStorage.setItem('ngos_arr', ngos_arr);
    localStorage.setItem('ngot_arr', ngot_arr);


    var BEIs_MM = $("#BEIs_MM").val();
    var BEIs_CDAA = $("#BEIs_CDAA").val();
    var BEIt_MM = $("#BEIt_MM").val();
    var BEIt_CDAA = $("#BEIt_CDAA").val();

    //array
    var beis_arr = [BEIs_MM,BEIs_CDAA];
    var beit_arr = [BEIt_MM,BEIt_CDAA];
    localStorage.setItem('beis_arr', beis_arr);
    localStorage.setItem('beit_arr', beit_arr);

      window.location.href="http://localhost/Simbahayan/student-official/php/kra3-next.php"
  }

</script>