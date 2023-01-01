<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRA SELECT</title>
		    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra-select.css"/>
		<?php
			include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
			include('../nav_master/nav.php');
		?>
		<div class="card-group">
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<h5 class="card-title">KRA 1 <span class="badge kra1badge"></span></h5>
						<p class="card-text">Self-reliant, interdependent, and empowered partner communities and institutions</p>
					</div>
					<div class="mb-3">
						<a href="../php/kra1.php">Go</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<h5 class="card-title">KRA 2 <span class="badge kra2badge"></span></h5>
						<p class="card-text">Thomasian engagement as agents of social transformation</p>
					</div>
					<div class="mb-3">
						<a href="../php/kra2.php">Go</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<h5 class="card-title">KRA 3 <span class="badge kra3badge"></span></h5>
						<p class="card-text">Dynamic Community Development External Partnerships and Networks</p>
					</div>
					<div class="mb-3">
						<a href="../php/kra3.php">Go</a>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex flex-row-reverse bd-highlight mt-3">
			<button type="button" data-bs-toggle="modal" data-bs-target="#disapprove_modal" id="disapprove_button" class="btn btn-warning" readonly="true" >Disapprove</button>	
			<button type="button" data-bs-toggle="modal" data-bs-target="#approval" id="submit_button" class="btn btn-warning disabled mx-3" disabled="disabled" readonly="true" >Approve</button>
		</div>
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
						<h5 class="modal-title" id="exampleModalLongTitle">Annual Report</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">Are you sure you want to approve this report? (this action cannot be undone, it will count the number of kra's & kpi's)</div>
					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
						<button type="button" class="btn btn-warning" onclick="submit_reportsimbahayan()">Yes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Disapprove Modal -->
		<div class="modal fade" id="disapprove_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Disapprove Report</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label>Remarks</label>
							<textarea placeholder="Type message here." id="remarks" class="form-control"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-danger" onclick="disapprove_report()">Disapprove</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	check_simbahayansubmission();
	function disapprove_report() {
		let remarks = $('#remarks').val();
		let college_id = localStorage.getItem("selected_college_id");
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "disapprove_report", 
				college_id: college_id,
				remarks:remarks
			},
			complete: function (response) {
				console.log(response.responseText);
				var data = JSON.parse(response.responseText);
				if(data['status'] == "updated") {
					alert('report_disapproved!');
					window.location.href="http://localhost/Simbahayan/simbahayan-ui/php/pending.php";
				} else {
					alert('unknown error occured');
					location.reload();
				}
			}
		})
	}
	function submit_reportsimbahayan() {
		let my_id = localStorage.getItem("user_id");
		let user_id = localStorage.getItem("selected_user_id");
		let college_id = localStorage.getItem("selected_college_id");
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "submit_reportsimbahayan", 
				my_id: my_id,
				user_id: user_id,
				college_id: college_id
			},
			complete: function (response) {
				console.log(response.responseText);
				var data = JSON.parse(response.responseText);
				if(data['status'] == "ok") {
					alert('successfully updated!');
					window.location.href="http://localhost/Simbahayan/simbahayan-ui/php/dashboard.php";
				} else {
					alert('unknown error occured');
					location.reload();
				}
			}
		})
	}
	function check_simbahayansubmission() {
		let college_id = localStorage.getItem("selected_college_id");
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "check_simbahayansubmission", 
				college_id: college_id,
			},
			complete: function (response) {
				var data = JSON.parse(response.responseText);
				switch (data[0]['kra1_sub']) {
					case 2:
						$('.kra1badge').addClass("bg-success");
						$('.kra1badge').html("Coordinator Approved");
					break;
					case 3:
						$('.kra1badge').addClass("bg-success");
						$('.kra1badge').html("Simbahayan Approved");
					break;
					default:
						$('.kra1badge').addClass("bg-warning");
						$('.kra1badge').html("Pending");
					break;
				}

				switch (data[0]['kra2_sub']) {
					case 2:
						$('.kra2badge').addClass("bg-success");
						$('.kra2badge').html("Coordinator Approved");
					break;
					case 3:
						$('.kra2badge').addClass("bg-success");
						$('.kra2badge').html("Simbahayan Approved");
					break;
					default:
						$('.kra2badge').addClass("bg-warning");
						$('.kra2badge').html("Pending");
					break;
				}

				switch (data[0]['kra3_sub']) {
					case 2:
						$('.kra3badge').addClass("bg-success");
						$('.kra3badge').html("Coordinator Approved");
					break;
					case 3:
						$('.kra3badge').addClass("bg-success");
						$('.kra3badge').html("Simbahayan Approved");
					break;
					default:
						$('.kra3badge').addClass("bg-warning");
						$('.kra3badge').html("Pending");
					break;
				}

				if(data[0]['kra_status'] == "2" && data[0]['kra1_sub'] == "3" && data[0]['kra2_sub'] == "3" && data[0]['kra3_sub'] == "3") {
					$('#submit_button').removeClass("disabled");
					$('#submit_button').removeAttr("disabled");
					$('#submit_button').removeAttr("readonly");
				}
			}
		})
	}
</script>