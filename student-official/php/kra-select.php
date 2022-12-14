<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRA SELECT</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/kra-select.css"/>

		<?php
		include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
			include('../nav_master/nav.php');
		?>
		<div class="card-group m-5">
			<div class="card">
				
				<div class="card-body">
					<div class="mb-3">
						<h5 class="card-title">KRA 1 <span class="badge kra1badge"></span></h5>
						<p class="card-text">Self-reliant, interdependent, and empowered partner communities and institutions</p>
					</div>
					<div class="mb-3">
						<a href="kra1.php">Go</a>
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
						<a href="kra2.php">Go</a>
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
						<a href="kra3.php">Go</a>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex flex-row-reverse bd-highlight">
			<button type="button" data-bs-toggle="modal" data-bs-target="#approval" id="submit_button" class="btn btn-warning disabled" disabled="disabled" readonly="true" >Submit</button>
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
						<h5 class="modal-title" id="exampleModalLongTitle">Community Development Report</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">Are you sure you want to submit report?</div>
					<div class="modal-footer d-flex justify-content-between">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
						<button type="button" class="btn btn-warning" onclick="submit_allkra()">Yes</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	check_krasubmission();
	function check_krasubmission() {
		let user_id = localStorage.getItem("user_id");
		let kra_id = localStorage.getItem('kra_selected_id');
		$.ajax({
		  url: url,
		  type: "POST",
		  data: {
		    csrf_token: "{{ csrf_token() }}",
		    tag: "check_krasubmission", 
		    user_id: localStorage.getItem('user_id'),
		    kra_id: kra_id
		  },
		  complete: function (response) {
		  	console.log(response.responseText);
		    var data = JSON.parse(response.responseText);

		    if(data[0]['kra1'] != "0") {
		    	$('.kra1badge').addClass("bg-success");
		    	$('.kra1badge').html("Saved");
		    } else {
		    	$('.kra1badge').addClass("bg-warning");
		    	$('.kra1badge').html("Not yet saved.");
		    }
		    
		    if(data[0]['kra2'] != "0") {
		    	$('.kra2badge').addClass("bg-success");
		    	$('.kra2badge').html("Saved");
		    } else {
		    	$('.kra2badge').addClass("bg-warning");
		    	$('.kra2badge').html("Not yet saved.");
		    }

		    if(data[0]['kra3'] != "0") {
		    	$('.kra3badge').addClass("bg-success");
		    	$('.kra3badge').html("Saved");
		    } else {
		    	$('.kra3badge').addClass("bg-warning");
		    	$('.kra3badge').html("Not yet saved.");
		    }
		    if(data[0]['kra_status'] == "0" && data[0]['kra1'] != "0" && data[0]['kra2'] != "0" && data[0]['kra3'] != "0") {
		    	$('#submit_button').removeClass("disabled");
		    	$('#submit_button').removeAttr("disabled");
		    	$('#submit_button').removeAttr("readonly");
		    }
		  }
		})
	}
	function submit_allkra() {
		let user_id = localStorage.getItem("user_id");
		let kra_id = localStorage.getItem('kra_selected_id');
		$.ajax({
		  url: url,
		  type: "GET",
		  data: {
		    csrf_token: "{{ csrf_token() }}",
		    tag: "submit_allkra", 
		    user_id: user_id,
		    kra_id: kra_id,
		  },
		  complete: function (response) {
		    var data = JSON.parse(response.responseText);
		    if(data['status'] == "ok") {
		    	alert('successfully updated!');
		    	window.location.href = "http://localhost/Simbahayan/student-official/php/reports.php";
		    } else {
		    	alert('unknown error occured');
		    	location.reload();
		    }
		  }
		})
	}
</script>