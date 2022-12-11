<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 1</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra2.css"/>

    <?php 
      include('../cdn/cdn.php');
    ?>

  </head>
  <body>
    <?php 
      include('../nav_master/nav.php');
    ?>
    <div class="title-wrapper m-2">
      <h3>Annual Report</h3>
    </div>

    <div class="kra-1">KRA 1: Self-reliant, interdependent, and empowered partner communities and institutions</div>

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
                      Status No. of Health and Wellness Development Projects

                      <input class="form-control input_number" id="hs_HWDP" placeholder="0" type="number" readonly  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input class="form-control input_number" id="hs_CIS" placeholder="0" type="number" readonly  />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input class="form-control input_number" id="hs_PM" placeholder="0" type="number" readonly  />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no.-->
                      Target No. of Health and Wellness Development Projects

                      <input class="form-control input_number" id="ht_HWDP" placeholder="0" type="number" readonly  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input class="form-control input_number" id="ht_CIS" placeholder="0" type="number" readonly  />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input class="form-control input_number" id="ht_PM" placeholder="0" type="number" readonly  />
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
                      Status No. of Equitable and Inclusive Education Projects

                      <input class="form-control input_number" id="es_EIEP" placeholder="0" type="number" readonly  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input class="form-control input_number" id="es_CIS" placeholder="0" type="number" readonly  />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input class="form-control input_number" id="es_PM" placeholder="0" type="number" readonly  />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no. -->
                      Target No. of Equitable and Inclusive Education Projects

                      <input class="form-control input_number" id="et_EIEP" placeholder="0" type="number" readonly  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input class="form-control input_number" id="et_CIS" placeholder="0" type="number" readonly  />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input class="form-control input_number" id="et_PM" placeholder="0" type="number" readonly  />
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
                      <!-- Status no. -->
                      Status No. of Leadership, Organizational Development, and Good Governance Projects

                      <input class="form-control input_number" readonly id="ggs_LODGGP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input class="form-control input_number" readonly id="ggs_CIS" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input class="form-control input_number" readonly id="ggs_PM" placeholder="0" type="number"  />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no. -->
                      Target No. of Leadership, Organizational Development, and Good Governance Projects

                      <input class="form-control input_number" readonly id="ggt_LODGGP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input class="form-control input_number" readonly id="ggt_CIS" placeholder="0" type="number"  />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input class="form-control input_number" readonly id="ggt_PM" placeholder="0" type="number"  />
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
                      <!-- Status no.-->
                      Status No. of Employability and Social Enterprise Projects

                      <input class="form-control input_number" readonly id="ejs_ESEP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input class="form-control input_number" readonly id="ejs_CIS" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input class="form-control input_number" readonly id="ejs_PM" placeholder="0" type="number"  />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no.-->
                      Target No. of Employability and Social Enterprise Projects

                      <input class="form-control input_number" readonly id="ejt_ESEP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input class="form-control input_number" readonly id="ejt_CIS" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input class="form-control input_number" readonly id="ejt_PM" placeholder="0" type="number"  />
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
                      <!---Status no.-->
                      Status No. of Socio-Pastoral Ministry and Evangelization Projects

                      <input class="form-control input_number" readonly id="cls_SPMEP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input class="form-control input_number" readonly id="cls_CIS" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input class="form-control input_number" readonly id="cls_PM" placeholder="0" type="number"  />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!-- Target no. -->
                      Target No. of Socio-Pastoral Ministry and Evangelization Projects

                      <input class="form-control input_number" readonly id="clt_SPMEP" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input class="form-control input_number" readonly id="clt_CIS" placeholder="0" type="number"  />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input class="form-control input_number" readonly id="clt_PM" placeholder="0" type="number"  />
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
      <div class="button-wrapper">
       <a class="btn btn-warning" id="edit_btn" onclick="edit_kra1()" href="#" role="button">Edit</a>
      <a class="btn btn-warning" id="save_btn" style="display: none;" onclick="save_kra1()" href="#" role="button">Save</a>
        <a class="btn btn-dark" href="kra1-next.php" role="button">Next</a>
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
  get_lock();
  function get_lock() {
    if(localStorage.getItem('edit_lock') == "1") {
      $('#edit_btn').addClass("disabled");
      $('#edit_btn').attr("disabled","disabled");
      $('.approve').addClass("disabled");
      $('.approve').attr("disabled","disabled");
    }
  }
function save_kra1() {
  //----------------------- Health for All -----------------------//
  var hs_HWDP = $('#hs_HWDP').val();
  var hs_CIS = $('#hs_CIS').val();
  var hs_PM = $('#hs_PM').val();
  var ht_HWDP = $('#ht_HWDP').val();
  var ht_CIS = $('#ht_CIS').val();
  var ht_PM = $('#ht_PM').val();
  var hs_arr=new Array(hs_HWDP, hs_CIS, hs_PM);
  var ht_arr=[ht_HWDP, ht_CIS, ht_PM];
  localStorage.setItem('hs_arr', hs_arr);
  localStorage.setItem('ht_arr', ht_arr);
  //----------------------- Education for All -----------------------//
  var es_EIEP = $('#es_EIEP').val();
  var es_CIS = $('#es_CIS').val();
  var es_PM = $('#es_PM').val();
  var et_EIEP = $('#et_EIEP').val();
  var et_CIS = $('#et_CIS').val();
  var et_PM = $('#et_PM').val();
  var es_arr=[es_EIEP, es_CIS, es_PM];
  var et_arr=[et_EIEP, et_CIS, et_PM];
  localStorage.setItem('es_arr', es_arr);
  localStorage.setItem('et_arr', et_arr);
  //----------------------- Good Governance for All -----------------------//
  var ggs_LODGGP = $('#ggs_LODGGP').val();
  var ggs_CIS = $('#ggs_CIS').val();
  var ggs_PM = $('#ggs_PM').val();
  var ggt_LODGGP = $('#ggt_LODGGP').val();
  var ggt_CIS = $('#ggt_CIS').val();
  var ggt_PM = $('#ggt_PM').val();
  var ggs_arr=[ggs_LODGGP, ggs_CIS, ggs_PM];
  var ggt_arr=[ggt_LODGGP, ggt_CIS, ggt_PM];
  localStorage.setItem('ggs_arr', ggs_arr);
  localStorage.setItem('ggt_arr', ggt_arr);
  //----------------------- Economic Justice for All -----------------------//
  var ejs_ESEP = $('#ejs_ESEP').val();
  var ejs_CIS = $('#ejs_CIS').val();
  var ejs_PM = $('#ejs_PM').val();
  var ejt_ESEP = $('#ejt_ESEP').val();
  var ejt_CIS = $('#ejt_CIS').val();
  var ejt_PM = $('#ejt_PM').val();
  var ejs_arr=[ejs_ESEP, ejs_CIS, ejs_PM];
  var ejt_arr=[ejt_ESEP, ejt_CIS, ejt_PM];
  localStorage.setItem('ejs_arr', ejs_arr);
  localStorage.setItem('ejt_arr', ejt_arr);
  //----------------------- Christ Love for All -----------------------//
  var cls_SPMEP = $('#cls_SPMEP').val();
  var cls_CIS = $('#cls_CIS').val();
  var cls_PM = $('#cls_PM').val();
  var clt_SPMEP = $('#clt_SPMEP').val();
  var clt_CIS = $('#clt_CIS').val();
  var clt_PM = $('#clt_PM').val();
  var cls_arr=[cls_SPMEP, cls_CIS, cls_PM];
  var clt_arr=[clt_SPMEP, clt_CIS, clt_PM];
  localStorage.setItem('cls_arr', cls_arr);
  localStorage.setItem('clt_arr', clt_arr);

  let user_id = localStorage.getItem('selected_user_id');
  $.ajax({
    url: url,
    type: "POST",
    data: {
      csrf_token: "{{ csrf_token() }}",
      tag: "update1_kra1",
      user_id: user_id,
      hs_arr: localStorage.getItem('hs_arr'),
      ht_arr: localStorage.getItem('ht_arr'),
      es_arr: localStorage.getItem('es_arr'),
      et_arr: localStorage.getItem('et_arr'),
      ggs_arr: localStorage.getItem('ggs_arr'),
      ggt_arr: localStorage.getItem('ggt_arr'),
      ejs_arr: localStorage.getItem('ejs_arr'),
      ejt_arr: localStorage.getItem('ejt_arr'),
      cls_arr: localStorage.getItem('cls_arr'),
      clt_arr: localStorage.getItem('clt_arr')
    },
    complete: function (response) {
      var data = JSON.parse(response.responseText);
      if(data['status'] == "ok") {
        alert("successfully saved!");
        location.reload();
      } else {
        alert("Unknown error occured. Please try again.")
      }
    }
  })


}
function edit_kra1() {
  $('.input_number').removeAttr('readonly');
  $('#save_btn').show();
  $('#edit_btn').hide();
}

  
get_kra1datafromuserid();
  function get_kra1datafromuserid(){
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "get_kra1datafromuserid",
        user_id: user_id
      },
      complete: function (response) {
        var data = JSON.parse(response.responseText);
        var hs_arr = data[0].hs_arr.split(",");
        $('#hs_HWDP').val(hs_arr[0]);
        $('#hs_CIS').val(hs_arr[1]);
        $('#hs_PM').val(hs_arr[2]);
        var ht_arr = data[0].ht_arr.split(",");
        $('#ht_HWDP').val(ht_arr[0]);
        $('#ht_CIS').val(ht_arr[1]);
        $('#ht_PM').val(ht_arr[2]);
        var es_arr = data[0].es_arr.split(",");
        $('#es_EIEP').val(es_arr[0]);
        $('#es_CIS').val(es_arr[1]);
        $('#es_PM').val(es_arr[2]);
        var et_arr = data[0].et_arr.split(",");
        $('#et_EIEP').val(et_arr[0]);
        $('#et_CIS').val(et_arr[1]);
        $('#et_PM').val(et_arr[2]);
        var ggs_arr = data[0].ggs_arr.split(",");
        $('#ggs_LODGGP').val(ggs_arr[0]);
        $('#ggs_CIS').val(ggs_arr[1]);
        $('#ggs_PM').val(ggs_arr[2]);
        var ggt_arr = data[0].ggt_arr.split(",");
        $('#ggt_LODGGP').val(ggt_arr[0]);
        $('#ggt_CIS').val(ggt_arr[1]);
        $('#ggt_PM').val(ggt_arr[2]);
        var ejs_arr = data[0].ejs_arr.split(",");
        $('#ejs_ESEP').val(ejs_arr[0]);
        $('#ejs_CIS').val(ejs_arr[1]);
        $('#ejs_PM').val(ejs_arr[2]);
        var ejt_arr = data[0].ejt_arr.split(",");
        $('#ejt_ESEP').val(ejt_arr[0]);
        $('#ejt_CIS').val(ejt_arr[1]);
        $('#ejt_PM').val(ejt_arr[2]);
        var cls_arr = data[0].cls_arr.split(",");
        $('#cls_SPMEP').val(cls_arr[0]);
        $('#cls_CIS').val(cls_arr[1]);
        $('#cls_PM').val(cls_arr[2]);
        var clt_arr = data[0].clt_arr.split(",");
        $('#clt_SPMEP').val(clt_arr[0]);
        $('#clt_CIS').val(clt_arr[1]);
        $('#clt_PM').val(clt_arr[2]);
      }
    })
  }
</script>