<!DOCTYPE html>
<html lang="en">
  <head>
<<<<<<< HEAD
	 <meta charset="UTF-8" />
	 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	 <title>KRA 1</title>
=======
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 1</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra2.css"/>
>>>>>>> 4025b588e276cfe620d73e3bf5ee78c52f78c427

	 <?php 
		include('../cdn/cdn.php');
	 ?>

  </head>
  <body>

	 <?php 
		include('../nav_master/nav.php');
	 ?>

	 <div class="form-parent">

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

							 <input id="hs_HWDP" placeholder="0" type="number" readonly  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Communities/ Institutions Served

							 <input id="hs_CIS" placeholder="0" type="number" readonly  />
						  </li>

						  <li class="list-group-item">
							 Status No. of Participants/ Members

							 <input id="hs_PM" placeholder="0" type="number" readonly  />
						  </li>
						</ul>
					 </div>

					 <div class="col">
						<ul class="list-group">
						  <li class="list-group-item">
							 <!-- Target no.-->
							 Target No. of Health and Wellness Development Projects

							 <input id="ht_HWDP" placeholder="0" type="number" readonly  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Communities/ Institutions Served

							 <input id="ht_CIS" placeholder="0" type="number" readonly  />
						  </li>

						  <li class="list-group-item">
							 Target No. of Participants/ Members

							 <input id="ht_PM" placeholder="0" type="number" readonly  />
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

							 <input id="es_EIEP" placeholder="0" type="number" readonly  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Communities/ Institutions Served

							 <input id="es_CIS" placeholder="0" type="number" readonly  />
						  </li>

						  <li class="list-group-item">
							 Status No. of Participants/ Members

							 <input id="es_PM" placeholder="0" type="number" readonly  />
						  </li>
						</ul>
					 </div>

					 <div class="col">
						<ul class="list-group">
						  <li class="list-group-item">
							 <!-- Target no. -->
							 Target No. of Equitable and Inclusive Education Projects

							 <input id="et_EIEP" placeholder="0" type="number" readonly  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Communities/ Institutions Served

							 <input id="et_CIS" placeholder="0" type="number" readonly  />
						  </li>

						  <li class="list-group-item">
							 Target No. of Participants/ Members

							 <input id="et_PM" placeholder="0" type="number" readonly  />
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

							 <input id="ggs_LODGGP" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Communities/ Institutions Served

							 <input id="ggs_CIS" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Participants/ Members

							 <input id="ggs_PM" placeholder="0" type="number"  />
						  </li>
						</ul>
					 </div>

					 <div class="col">
						<ul class="list-group">
						  <li class="list-group-item">
							 <!-- Target no. -->
							 Target No. of Leadership, Organizational Development, and Good Governance Projects

							 <input id="ggt_LODGGP" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Communities/ Institutions Served

							 <input id="ggt_CIS" placeholder="0" type="number"  />
						  </li>

						  <li class="list-group-item">
							 Target No. of Participants/ Members

							 <input id="ggt_PM" placeholder="0" type="number"  />
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

							 <input id="ejs_ESEP" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Communities/ Institutions Served

							 <input id="ejs_CIS" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Participants/ Members

							 <input id="ejs_PM" placeholder="0" type="number"  />
						  </li>
						</ul>
					 </div>

					 <div class="col">
						<ul class="list-group">
						  <li class="list-group-item">
							 <!-- Target no.-->
							 Target No. of Employability and Social Enterprise Projects

							 <input id="ejt_ESEP" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Communities/ Institutions Served

							 <input id="ejt_CIS" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Participants/ Members

							 <input id="ejt_PM" placeholder="0" type="number"  />
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

							 <input id="cls_SPMEP" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Communities/ Institutions Served

							 <input id="cls_CIS" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Status No. of Participants/ Members

							 <input id="cls_PM" placeholder="0" type="number"  />
						  </li>
						</ul>
					 </div>

					 <div class="col">
						<ul class="list-group">
						  <li class="list-group-item">
							 <!-- Target no. -->
							 Target No. of Socio-Pastoral Ministry and Evangelization Projects

							 <input id="clt_SPMEP" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Communities/ Institutions Served

							 <input id="clt_CIS" placeholder="0" type="number"  />
						  </li>
						  <li class="list-group-item">
							 Target No. of Participants/ Members

							 <input id="clt_PM" placeholder="0" type="number"  />
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
		  <a class="btn btn-warning" href="#" role="button">Edit</a>
		  <a class="btn btn-warning" href="kra1-next.php" role="button">Next</a>
		</div>
	 </div>
  </body>
</html>
<script type="text/javascript">
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