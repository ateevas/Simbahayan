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

<!-- Modal -->
<div class="modal fade" id="edit_infomodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<input type="hidden" id="user_id" />
				<div class="mb-3">
					<label>First Name</label>
					<input type="text" id="user_fname" class="form-control" />
				</div>
				<div class="mb-3">
					<label>Last Name</label>
					<input type="text" id="user_lname" class="form-control" />
				</div>
				<div class="mb-3">
					<label>Email</label>
					<input type="text" id="user_email" class="form-control" />
				</div>
				<div class="mb-3">
					<label>College</label>
					<select class="form-control" id="college">
						
					</select>
				</div>
				<div class="mb-3">
					<label>ID Number</label>
					<input type="number" id="user_idnumber" class="form-control" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="save_edituserinfo()">Save changes</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	get_mystudentlist();

	function edit_userinfo(obj) {
		$('#user_id').val($(obj).data('user_id'));
		$('#user_fname').val($(obj).data('user_fname'));
		$('#user_lname').val($(obj).data('user_lname'));
		$('#user_email').val($(obj).data('user_email'));
		$('#user_idnumber').val($(obj).data('idnumber'));
		$('option[value=' + $(obj).data('college') + ']').attr('selected', true);
		$('#edit_infomodal').modal('show');
	}


	function save_edituserinfo() {
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "save_edituserinfo", 
				user_id: $('#user_id').val(),
				user_fname: $('#user_fname').val(),
				user_lname: $('#user_lname').val(),
				user_email: $('#user_email').val(),
				user_idnumber: $('#user_idnumber').val(),
				college_id: $('#college').val(),
			},
			complete: function (response) {
				location.reload();
			}
		})
	}


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
		    getColleges();
		  }
		})
	}


	function getColleges() {
	    $.ajax({
	        url: url,
	        type: "GET",
	        data: {
	            csrf_token: "{{ csrf_token() }}",
	            tag: "get_colleges"
	        },
	        complete: function(response) {
	            $('#college').html(response.responseText);
	        }
	    })
	}
</script>