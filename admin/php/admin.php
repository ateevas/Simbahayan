<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Manage Simbahayan Staff</title>
		<?php
			include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
			include('../nav_master/nav.php');
		?>
	<h1 class="display-5 mt-3">Manage Simbahayan Staff</h1>

	<button type="button" id="modal" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle-fill"></i>Add Simbahayan Staff</button>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Simbahayan Staff</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label>First Name</label>
						<input type="text" class="form-control" placeholder="First Name" id="fname" />
					</div>
					<div class="mb-3">
						<label>Last Name</label>
						<input type="text" class="form-control" placeholder="Last Name" id="lname" />
					</div>
					<div class="mb-3">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Email" id="email" />
					</div>
					<div class="mb-3">
						<label>Contact Number</label>
						<input type="number" class="form-control" placeholder="Contact Number" id="contact" />
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success" onclick="add_simbahayan()">Add Coordinator</button>
				</div>
			</div>
		</div>
	</div>
	<table class="table">
		<thead>
			<tbody class="table-group-divider">
				<tr>
					<!--Name--> <th>Name</th>
					<!--Email-->   <th>Email</td>
						<th>Contact</td>
				</tr>
			</thead>
			<tbody id="tbody_data">
			</tbody>
		</table>
	</body>
</html>
<script type="text/javascript">
	get_simbahayanstaff();
	function add_simbahayan() {
		let fname = $('#fname').val();
		let lname = $('#fname').val();
		let email = $('#email').val();
		let contact = $('#contact').val();
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "add_simbahayan",
				fname: fname,
				lname: lname,
				email: email,
				contact: contact
			},
			complete: function (response) {
				var data = JSON.parse(response.responseText);
				if(data['status'] == "inserted") {
					alert("successfully saved!");
					location.reload();
				} else {
				alert("Unknown error occured. Please try again.")
				}
			}
		})
	}

	function get_simbahayanstaff() {
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "get_simbahayanstaff"
			},
			complete: function (response) {
				console.log(response.responseText);
				$('#tbody_data').html(response.responseText);
				
			}
		})
	}
</script>
