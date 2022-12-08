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
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" onclick="kra3Next_yes()" >Save</button>

      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  function kra3Next_yes(){
    var LHEIs_MM = $("#LHEIs_MM").val(); //Local Higher
    var LHEIs_CDAA = $("#LHEIs_CDAA").val();
    var LHEIt_MM = $("#LHEIt_MM").val();
    var LHEIt_CDAA = $("#LHEIt_CDAA").val();

    //array
    var lheis_arr = [LHEIs_MM,LHEIs_CDAA];
    var lheit_arr = [LHEIt_MM,LHEIt_CDAA];
    localStorage.setItem('lheis_arr', lheis_arr);
    localStorage.setItem('lheit_arr', lheit_arr);



    var IHEIs_MM = $("#IHEIs_MM").val(); //International Higher
    var IHEIs_CDAA = $("#IHEIs_CDAA").val();
    var IHEIt_MM = $("#IHEIt_MM").val();
    var IHEIt_CDAA = $("#IHEIt_CDAA").val();

    //array
    var iheis_arr = [IHEIs_MM,IHEIs_CDAA];
    var iheit_arr = [IHEIt_MM,IHEIt_CDAA];
    localStorage.setItem('iheis_arr', iheis_arr);
    localStorage.setItem('iheit_arr', iheit_arr);



    var CBOs_MM = $("#CBOs_MM").val(); //Faith based
    var CBOs_CDAA = $("#CBOs_CDAA").val();
    var CBOt_MM = $("#CBOt_MM").val();
    var CBOt_CDAA = $("#CBOt_CDAA").val();

    //array
    var cbos_arr = [CBOs_MM,CBOs_CDAA];
    var cbot_arr = [CBOt_MM,CBOt_CDAA];
    localStorage.setItem('cbos_arr', cbos_arr);
    localStorage.setItem('cbot_arr', cbot_arr);



    var PBOs_MM = $("#PBOs_MM").val();// Prof. Business org
    var PBOs_CDAA = $("#PBOs_CDAA").val();
    var PBOt_MM = $("#PBOt_MM").val();
    var PBOt_CDAA = $("#PBOt_CDAA").val();

    //array
    var pbos_arr = [PBOs_MM,PBOs_CDAA];
    var pbot_arr = [PBOt_MM,PBOt_CDAA];
    localStorage.setItem('pbos_arr', pbos_arr);
    localStorage.setItem('pbot_arr', pbot_arr);



    var TCCs_MM = $("#TCCs_MM").val(); //Training Courses
    var TCCs_CDAA = $("#TCCs_CDAA").val();
    var TCCt_MM = $("#TCCt_MM").val();
    var TCCt_CDAA = $("#TCCt_CDAA").val();

    //array
    var tccs_arr = [TCCs_MM,TCCs_CDAA];
    var tcct_arr = [TCCt_MM,TCCt_CDAA];
    localStorage.setItem('tccs_arr', tccs_arr);
    localStorage.setItem('tcct_arr', tcct_arr);



$.ajax({
  url: url,
  type: "POST",
  data: {
    csrf_token: "{{ csrf_token() }}",
    tag: "save_kra3", 
    user_id: localStorage.getItem('user_id'),
    pos_arr: localStorage.getItem('pos_arr'),
    pot_arr: localStorage.getItem('pot_arr'),
    gas_arr: localStorage.getItem('gas_arr'),
    gat_arr: localStorage.getItem('gat_arr'),
    ngos_arr: localStorage.getItem('ngos_arr'),
    ngot_arr: localStorage.getItem('ngot_arr'),
    beis_arr: localStorage.getItem('beis_arr'),
    beit_arr: localStorage.getItem('beit_arr'),
    lheis_arr: localStorage.getItem('lheis_arr'),
    lheit_arr: localStorage.getItem('lheit_arr'),
    iheis_arr: localStorage.getItem('iheis_arr'),
    iheit_arr: localStorage.getItem('iheit_arr'),
    cbos_arr: localStorage.getItem('cbos_arr'),
    cbot_arr: localStorage.getItem('cbot_arr'),
    pbos_arr: localStorage.getItem('pbos_arr'),
    pbot_arr: localStorage.getItem('pbot_arr'),
    tccs_arr: localStorage.getItem('tccs_arr'),
    tcct_arr: localStorage.getItem('tcct_arr')
  },
  complete: function (response) {
    console.log(response.responseText);
    var data = JSON.parse(response.responseText);
    if(data['status'] == "ok") {
       alert("successfully saved!");
      window.location.href="http://localhost/Simbahayan/student-official/php/kra-select.php"
    } else {
      alert("Unknown error occured. Please try again.")
    }
  }
})

  }

</script>