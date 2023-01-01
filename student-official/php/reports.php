<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>KRAs and KPIs</title>
	<link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/reports.css" />
	<?php 
		include('../cdn/cdn.php');
	?>
</head>

<body>
	<?php 
		include('../nav_master/nav.php');
	?>
	<br>
	<div class="m-3">
		<div class="d-flex justify-content-between">
			<h1 class="align-self-center">KRA and KPI Monitoring Report</h1>
			<button data-bs-toggle="modal" data-bs-target="#addkra_modal" type="button" class="align-self-center btn btn-warning"> Add New Report</button>
		</div>
	
		<table class="table" id="tbl_student">
			<thead>
				<tr>
					<th>Name</th>
					<th>School Year</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody_data">
			</tbody>
		</table>
	</div>
</body>

<!-- Modal -->
<div class="modal fade" id="addkra_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add KRA</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-3">
					<label>School Year</label>
					<input type="number" id="school_year" maxlength="4" class="form-control" placeholder="School Year" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success" onclick="add_kra()">Add</button>
			</div>
		</div>
	</div>
</div>

</html>
<script type="text/javascript">
get_allstudentkra();

function add_kra(){
	var user_id = localStorage.getItem("user_id");
	var college_id = localStorage.getItem("college_id");
	var school_year = $('#school_year').val();
	$.ajax({
		url: url,
		type: "GET",
		data: {
			csrf_token: "{{ csrf_token() }}",
			tag: "add_studentkra",
			user_id:user_id,
			school_year: school_year,
			college_id: college_id
		},
		complete: function(response) {
			console.log(response.responseText);
			// $('#tbody_data').html(response.responseText);
			// $('#tbl_student').dataTable();
		}
	})
}

function get_allstudentkra() {
	var user_id = localStorage.getItem("user_id");
	$.ajax({
		url: url,
		type: "GET",
		data: {
			csrf_token: "{{ csrf_token() }}",
			tag: "get_allstudentkra",
			user_id:user_id
		},
		complete: function(response) {
			$('#tbody_data').html(response.responseText);
			$('#tbl_student').dataTable();
		}
	})
}

function manage_kra(obj) {
	localStorage.setItem('kra_selected_id', $(obj).data('kra_id'));
	window.location.href = "http://localhost/Simbahayan/student-official/php/kra-select.php";
}
</script>