<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRA 3</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra3.css"/>
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
		<div class="kra-1">KRA 3: Dynamic Community Development External Partnerships and Networks</div>
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
						<!-- Aaccordion-list -->
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
											<input class="form-control input_number" id="LHEIs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="LHEIs_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											No. of MOU/MOA
											<input class="form-control input_number" id="LHEIt_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="LHEIt_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<!-- Targer No.-->
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
				International Higher Educational Institutions
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
											Status No. of MOU/MOA
											<input class="form-control input_number" id="IHEIs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="IHEIs_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of MOU/MOA
											<input class="form-control input_number" id="IHEIt_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="IHEIt_CDAA" placeholder="0" type="number" readonly/>
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
				Faith-based/Church-based Organizations
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
											Status No. of MOU/MOA
											<input class="form-control input_number" id="CBOs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="CBOs_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											Target No. of MOU/MOA
											<input class="form-control input_number" id="CBOt_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="CBOt_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<!-- Targer No.-->
							</div>
						</div>
						<!-- Accordion-list  -->
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
						<!-- ccordion-list  -->
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
											<input class="form-control input_number" id="PBOs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="PBOs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of MOU/MOA
											<input class="form-control input_number" id="PBOt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="PBOt_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<!----Targer No.-->
							</div>
						</div>
						<!-- Accordion-list  -->
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
											Status No. of Training/ Course
											<input class="form-control input_number" id="TCCs_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Status No. of Participants
											<input class="form-control input_number" id="TCCs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Status No. of Participants
											<input class="form-control input_number" id="TCCt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Participants
											<input class="form-control input_number" id="TCCt_CDAA" placeholder="0" type="number" readonly />
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
			<div class="button-wrapper">
				<a class="btn btn-warning" id="edit_btn" onclick="edit_kra3()" href="#" role="button">Edit</a>
		  		<a class="btn btn-warning" id="save_btn" style="display: none;" onclick="save_kra3()" href="#" role="button">Save</a>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-warning approve" data-bs-toggle="modal" data-bs-target="#approval">Approve</button>
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
								 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">Approve the Annual Report? It cannot be undone</div>
							<div class="modal-footer d-flex justify-content-between">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
								<button type="button" class="btn btn-warning" onclick="approve_kra3coordinator()">Yes</button>
							</div>
						</div>
					</div>
				</div>
				<a class="btn btn-dark" href="kra2.php" role="button">Prev</a>
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
	  function save_kra3() {
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


  let user_id = localStorage.getItem('selected_user_id');

  $.ajax({
  url: url,
  type: "POST",
  data: {
	csrf_token: "{{ csrf_token() }}",
	tag: "update2_kra3", 
	user_id: user_id,
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
		location.reload();
	 } else {
		alert("Unknown error occured. Please try again.")
	 }
  }
})

}
function edit_kra3() {
	$('.input_number').removeAttr('readonly');
	$('#save_btn').show();
	$('#edit_btn').hide();
}
function approve_kra3coordinator() {
	let user_id=localStorage.getItem('selected_user_id');
	 $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "approve_kra3coordinator",
        user_id: user_id
      },
      complete: function (response) {
       var data = JSON.parse(response.responseText);
	    if(data['status'] == "updated") {
	    	alert('successfully updated!');
	    	window.location.href="http://localhost/Simbahayan/coordinator/php/kra-select.php";
	    } else {
	    	alert('unknown error occured');
	    	location.reload();
	    }
      }
    })
}
  get_kra3datafromuserid();

function get_kra3datafromuserid(){
	let user_id = localStorage.getItem('selected_user_id');
	$.ajax({
		url: url,
		type: "GET",
		data: {
			csrf_token: "{{ csrf_token() }}",
			tag: "get_kra3datafromuserid",
			user_id: user_id
		},
		complete: function (response) {
			var data = JSON.parse(response.responseText);
			console.log(data);
			var lheis_arr = data[0].lheis_arr.split(",");
			$("#LHEIs_MM").val(lheis_arr[0]);
			$("#LHEIs_CDAA").val(lheis_arr[1]);
			var lheit_arr = data[0].lheit_arr.split(",");
			$("#LHEIt_MM").val(lheit_arr[0]);
			$("#LHEIt_CDAA").val(lheit_arr[1]);
			var iheis_arr = data[0].iheis_arr.split(",");
			$("#IHEIs_MM").val(iheis_arr[0]);
			$("#IHEIs_CDAA").val(iheis_arr[1]);
			var iheit_arr = data[0].iheit_arr.split(",");
			$("#IHEIt_MM").val(iheit_arr[0]);
			$("#IHEIt_CDAA").val(iheit_arr[1]);
			var cbos_arr = data[0].cbos_arr.split(",");
			$("#CBOs_MM").val(cbos_arr[0]);
			$("#CBOs_CDAA").val(cbos_arr[1]);
			var cbot_arr = data[0].cbot_arr.split(",");
			$("#CBOt_MM").val(cbot_arr[0]);
			$("#CBOt_CDAA").val(cbot_arr[1]);
			var pbos_arr = data[0].pbos_arr.split(",");
			$("#PBOs_MM").val(pbos_arr[0]);
			$("#PBOs_CDAA").val(pbos_arr[1]);
			var pbot_arr = data[0].pbot_arr.split(",");
			$("#PBOt_MM").val(pbot_arr[0]);
			$("#PBOt_CDAA").val(pbot_arr[1]);
			var tccs_arr = data[0].tccs_arr.split(",");
			$("#TCCs_MM").val(tccs_arr[0]);
			$("#TCCs_CDAA").val(tccs_arr[1]);
			var tcct_arr = data[0].tcct_arr.split(",");
			$("#TCCt_MM").val(tcct_arr[0]);
			$("#TCCt_CDAA").val(tcct_arr[1]);
		}
	})
}
</script>