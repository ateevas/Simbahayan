<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Manage Students</title>
		<?php
		include('../cdn/cdn.php');
		?>
		<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />
		<link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/manage.css"/>
	</head>
	<body>
		<?php
		include('../nav_master/nav.php');
		?>
		<h1 class="display-5 mt-3">Manage Students</h1>
		<table class="table" id="example">
			<thead>
				<tr>
					<th>Name</th>
					<th>College</th>
					<th>ID number</th>
					<th>Email</th>
					<th>Verification Status</th>
					<th>User Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="tbody_data">
			</tbody>
		</table>
	</body>
</html>
<script type="text/javascript">
	get_mystudentlist();
	function verify_user() {
		swal({
			title: "Are you sure?",
			text: "You can change it right after the update.",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#d9534f",
			confirmButtonText: "Yes",
			cancelButtonText: "No",
			closeOnConfirm: false,
			html: false
			}, function(){
				let user_id = localStorage.getItem('user_id');
				let college_id = localStorage.getItem('college_id');
				$.ajax({
				  url: url,
				  type: "GET",
				  data: {
				    csrf_token: "{{ csrf_token() }}",
				    tag: "verify_user", 
				    user_id: user_id,
				    college_id: college_id
				  },
				  complete: function (response) {
				    $('#tbody_data').html(response.responseText);
				    $('#example').DataTable();
				  }
				})
			}
		);
	}
	function get_mystudentlist() {
		let user_id = localStorage.getItem('user_id');
		let college_id = localStorage.getItem('college_id');
		$.ajax({
		  url: url,
		  type: "GET",
		  data: {
		    csrf_token: "{{ csrf_token() }}",
		    tag: "get_mystudentlist", 
		    user_id: user_id,
		    college_id: college_id
		  },
		  complete: function (response) {
		    $('#tbody_data').html(response.responseText);
		    $('#example').DataTable();
		  }
		})
	}
</script>