<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra2.css"/>
		<title>KRA 2</title>
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
		<div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
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
											No. of Student Organizations
											<input id="UDCPs_NSO" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Students
											<input id="UDCPs_NStu" readonly placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											No. of Faculty
											<input id="UDCPs_NFac" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Administratiors
											<input id="UDCPs_NAdmin" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Support Staff
											<input id="UDCPs_NSS" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Alumni
											<input id="UDCPs_NAlumni" readonly placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no. -->
											No. of Student Organizations
											<input id="UDCPt_NSO" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Students
											<input id="UDCPt_NStu" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Faculty
											<input id="UDCPt_NFac" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Administratiors
											<input id="UDCPt_NAdmin" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Support Staff
											<input id="UDCPt_NSS" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Alumni
											<input id="UDCPt_NAlumni" readonly placeholder="0" type="number"/>
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
											<!-- Status no.-->
											No. of Research Presentation in Local Fora/ Conference
											<input id="fcs_RPLFC" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Research Presentation in International Fora/ Conference
											<input id="fcs_RPIFC" readonly placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											No. of Research Presentation in Local Fora/ Conference
											<input id="fct_RPLFC" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Research Presentation in International Fora/ Conference
											<input id="fct_RPIFC" readonly placeholder="0" type="number"/>
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
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!-- Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseSix"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingSix"
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
											Status No. of Local Publications
											<input id="ps_NLP" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											Status No. of International Publications
											<input id="ps_IP" readonly placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											Target No. of Local Publications
											<input id="pt_NLP" readonly placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											Target No. of International Publications
											<input id="pt_IP" readonly placeholder="0" type="number"/>
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
								<button type="button" class="btn btn-warning" onclick="approve_kra2simbahayan()">Yes</button>
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
function approve_kra2simbahayan() {
	let user_id=localStorage.getItem('selected_user_id');
		$.ajax({
			url: url,
			type: "GET",
			data: {
			csrf_token: "{{ csrf_token() }}",
			tag: "approve_kra2simbahayan",
			user_id: user_id
		},
		complete: function (response) {
			var data = JSON.parse(response.responseText);
			if(data['status'] == "updated") {
				alert('successfully updated!');
				window.location.href="http://localhost/Simbahayan/simbahayan-ui/php/kra-select.php";
			} else {
				alert('unknown error occured');
				location.reload();
			}
		}
    })
}

get_kra2datafromuserid();

function get_kra2datafromuserid(){
	let user_id = localStorage.getItem('selected_user_id');
	$.ajax({
		url: url,
		type: "GET",
		data: {
			csrf_token: "{{ csrf_token() }}",
			tag: "get_kra2datafromuserid",
			user_id: user_id
		},
		complete: function (response) {
			var data = JSON.parse(response.responseText);
			console.log(data);
			var udcps_arr = data[0].udcps_arr.split(",");
			$("#UDCPs_NSO").val(udcps_arr[0]);
			$("#UDCPs_NStu").val(udcps_arr[1]);
			$("#UDCPs_NFac").val(udcps_arr[2]);
			$("#UDCPs_NAdmin").val(udcps_arr[3]);
			$("#UDCPs_NSS").val(udcps_arr[4]);
			$("#UDCPs_NAlumni").val(udcps_arr[5]);
			var udcpt_arr = data[0].udcpt_arr.split(",");
			$("#UDCPt_NSO").val(udcpt_arr[0]);
			$("#UDCPt_NStu").val(udcpt_arr[1]);
			$("#UDCPt_NFac").val(udcpt_arr[2]);
			$("#UDCPt_NAdmin").val(udcpt_arr[3]);
			$("#UDCPt_NSS").val(udcpt_arr[4]);
			$("#UDCPt_NAlumni").val(udcpt_arr[5]);
			var fcs_arr = data[0].fcs_arr.split(",");
			$("#fcs_RPLFC").val(fcs_arr[0]);
			$("#fcs_RPIFC").val(fcs_arr[1]);
			var fct_arr = data[0].fct_arr.split(",");
			$("#fct_RPLFC").val(fct_arr[0]);
			$("#fct_RPIFC").val(fct_arr[1]);
			var ps_arr = data[0].ps_arr.split(",");
			$("#ps_NLP").val(ps_arr[0]);
			$("#ps_IP").val(ps_arr[1]);
			var pt_arr = data[0].pt_arr.split(",");
			$("#pt_NLP").val(pt_arr[0]);
			$("#pt_IP").val(pt_arr[1]);
		}
	})
}
</script>