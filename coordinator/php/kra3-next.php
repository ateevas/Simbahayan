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
											<input id="LHEIs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											No. of Community Development and Advocacy Activities
											<input id="LHEIs_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											No. of MOU/MOA
											<input id="LHEIt_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											No. of Community Development and Advocacy Activities
											<input id="LHEIt_CDAA" placeholder="0" type="number" readonly/>
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
											<input id="IHEIs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input id="IHEIs_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of MOU/MOA
											<input id="IHEIt_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input id="IHEIt_CDAA" placeholder="0" type="number" readonly/>
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
											<input id="CBOs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input id="CBOs_CDAA" placeholder="0" type="number" readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											Target No. of MOU/MOA
											<input id="CBOt_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input id="CBOt_CDAA" placeholder="0" type="number" readonly/>
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
											<input id="PBOs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input id="PBOs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of MOU/MOA
											<input id="PBOt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input id="PBOt_CDAA" placeholder="0" type="number" readonly />
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
											<input id="TCCs_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Status No. of Participants
											<input id="TCCs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Status No. of Participants
											<input id="TCCt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Participants
											<input id="TCCt_CDAA" placeholder="0" type="number" readonly />
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
				<a class="btn btn-warning" href="#" role="button">Edit</a>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#approval">Approve</button>
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
				<a class="btn btn-dark" href="kra1.php" role="button">Prev</a>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
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