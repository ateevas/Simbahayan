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
		
		<link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/manage.css"/>
	</head>
	<body>
		<?php
		include('../nav_master/nav.php');
		?>
		<div class="m-3">
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
		</div>
	</body>
</html>
<script type="text/javascript">
	get_mystudentlist();
	function status_change(obj) {
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
				let user_id = $(obj).data('user_id');
				let value = $(obj).data('value');
				$.ajax({
				  url: url,
				  type: "GET",
				  data: {
				    csrf_token: "{{ csrf_token() }}",
				    tag: "status_change", 
				    user_id: user_id,
				    value: value
				  },
				  complete: function (response) {
				    location.reload();
				  }
				})
			}
		);
	}
	function verify_user(obj) {
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
				let user_id = $(obj).data('user_id');
				let value = $(obj).data('value');
				$.ajax({
				  url: url,
				  type: "GET",
				  data: {
				    csrf_token: "{{ csrf_token() }}",
				    tag: "verify_user", 
				    user_id: user_id,
				    value: value
				  },
				  complete: function (response) {
				    location.reload();
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