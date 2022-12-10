<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Account</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/changepass.css"/>
		<?php 
			include('../cdn/cdn.php');
		?>
	</head>
	<body>
		
		<?php 
			include('../nav_master/nav.php');
		?>

		<!-- form card change password -->
		<div class="card card-outline-secondary">
			<div class="card-header ">
				<h3 class="mb-0">Change Password</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="inputPasswordOld">Current Password</label>
					<input type="password" class="form-control" id="inputpass_old" required="">
				</div>
				<div class="form-group">
					<label for="inputPasswordNew">New Password</label>
					<input type="password" class="form-control" id="inputpass_new" required="">
					<span class="form-text small text-muted">
						The password must be 8-20 characters, and must <em>not</em> contain spaces.
					</span>
				</div>
				<div class="form-group">
					<label for="inputPasswordNewVerify">Verify</label>
					<input type="password" class="form-control" id="inputpass_new2" required="">
					<span class="form-text small text-muted">
						To confirm, type the new password again.
					</span>
				</div>
				<div class="form-group">
					<button type="button" data-bs-toggle="modal" data-bs-target='#changepass_modal' class="btn btn-warning btn-lg float-right">Save</button>
				</div>
			</div>
		</div>
	</body>
</html>
<!-- Modal -->
<div class="modal fade" id="changepass_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div>
					<label for="message-text" class="col-form-label"><b>Are you sure you want to change password?</b></label>
				</div>
				<div class="d-flex justify-content-end">
					<button type="button" class="btn btn-light mx-3" data-bs-dismiss="modal">No</button>
					<button type="button" class="btn btn-danger" onclick="change_password()">Yes</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function change_password() {
		var user_id = localStorage.getItem('user_id');
		var inputpass_old = $('#inputpass_old').val();
		var old_pass = localStorage.getItem('password');
		var inputpass_new = $('#inputpass_new').val();
		var inputpass_new2 = $('#inputpass_new2').val();
		if(inputpass_old != "" && inputpass_new != "" && inputpass_new2 != "") {
			if (inputpass_new == inputpass_new2) {
				if(inputpass_old == old_pass) {
					$.ajax({
						url: url,
						type: "GET",
						data: {
							csrf_token: "{{ csrf_token() }}",
							tag: "change_password", 
							user_id: user_id,
							inputpass_new: inputpass_new
						},
						complete: function (response) {
							alert("successfully changed!");
							localStorage.clear();
							window.location.href="http://localhost/Simbahayan/login-page/php/login.php";
						}
					})
				} else {
					alert("old password do not match")
				}
			} else {
				alert("new password do not match")
			}
		} else {
			alert("fill all empty fields first")
		}
	}	
</script>