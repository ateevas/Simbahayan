<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Dashboard</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/annual.css"/>
		<link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/target.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<?php
		include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
			include('../nav_master/nav.php');
		?>
		<div class="title">
			<div class="inner_title">
				<div class="title_container">
					<h1>Target</h1>
				</div>
			</div>
		</div>
		<div class="d-flex" id="wrapper">
			<!-- Sidebar -->
			<div class="bg-white" id="sidebar-wrapper">
				<div class="list-group list-group-flush my-3">
					<a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Archives</a>
					<a href="target.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Target</a>
				</div>
			</div>
			<!-- /#sidebar-wrapper -->
			<!-- Page Content -->
			<div id="page-content-wrapper">
				<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
					<div class="d-flex align-items-center">
						<i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color:goldenrod"></i>
						<h2 class="fs-2 m-0" style="color:gray">UST Simbahayan</h2>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				</nav>
				<div class="row my-5">
					<h3 class="fs-4 mb-3">Target</h3>
					<div class="container-fluid px-4">
						<div class="row g-3 my-2">
							<div class="col-md-3">
								<div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
									<div>
										<h3 class="fs-2" id="target_hitlabel"></h3>
										<p class="fs-5">Current Target</p>
									</div>
									<i class="bi bi-bullseye fs-1 primary-text border rounded-full secondary-bg p-3"></i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
									<div>
										<h3 class="fs-2" id="current_targetlabel"></h3>
										<p class="fs-5">Current Target</p>
									</div>
									<i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
									<div>
										<h3 class="fs-2" id="current_target3label"></h3>
										<p class="fs-5">Current Target</p>
									</div>
									<i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row my-5">
					<h3 class="fs-4 mb-3">KRA Targets</h3>
					<div class="container-fluid px-4">
						<div class="row g-3 my-2">
							<div class="col-md-3">
								<div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
									<div>
										<h3 class="fs-2" id="kra1_targetlabel"></h3>
										<p class="fs-5">KRA 1 Target Hit</p>
									</div>
									<i class="bi bi-bullseye fs-1 primary-text border rounded-full secondary-bg p-3"></i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
									<div>
										<h3 class="fs-2" id="kra2_targetlabel"></h3>
										<p class="fs-5">KRA 2 Target Hit</p>
									</div>
									<i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
								</div>
							</div>
							<div class="col-md-3">
								<div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
									<div>
										<h3 class="fs-2" id="kra3_targetlabel"></h3>
										<p class="fs-5">KRA 3 Target Hit</p>
									</div>
									<i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btn-group p-3" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">Edit</button>
				</div>
			</div>
		</div>
	</body>
</html>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Targets</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-3">
					<label>Current Target</label>
					<input id="target_hit" class="form-control" value="localStorage.getItem('thit')" placeholder="0" type="number" />
				</div>
				<div class="mb-3">
					<label>Current Target</label>
					<input id="current_target" class="form-control" value="localStorage.getItem('ctarget')" placeholder="0" type="number" />
				</div>
				<div class="mb-3">
					<label>Current Target</label>
					<input id="current_target3" class="form-control" value="localStorage.getItem('ctarget3')" placeholder="0" type="number" />
				</div>
				<div class="mb-3">
					<label>KRA1 Target</label>
					<input id="kra1_target" class="form-control" value="localStorage.getItem('kra1t')" placeholder="0" type="number" />
				</div>
				<div class="mb-3">
					<label>KRA2 Target</label>
					<input id="kra2_target" class="form-control" value="localStorage.getItem('kra2t')" placeholder="0" type="number" />
				</div>
				<div class="mb-3">
					<label>KRA3 Target</label>
					<input id="kra3_target" class="form-control" value="localStorage.getItem('kra3t')" placeholder="0" type="number" />
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="save_alltargets()">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function save_alltargets() {
		let user_id=localStorage.getItem('user_id');
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "save_alltargets",
				user_id: user_id,
				target_hit: $('#target_hit').val(),
				current_target: $('#current_target').val(),
				current_target3: $('#current_target3').val(),
				kra1_target: $('#kra1_target').val(),
				kra2_target: $('#kra2_target').val(),
				kra3_target: $('#kra3_target').val()
			}, 
			complete: function (response) {
				console.log(response.responseText)
				location.reload();
			}
		})
	}
	get_Targets();
	function get_Targets() {
		var user_id = localStorage.getItem('user_id');
		$.ajax({
			url: url,
			type: "GET",
			data: {
				csrf_token: "{{ csrf_token() }}",
				tag: "get_targets",
				user_id: user_id
			}, 
			complete: function (response) {
				var data = JSON.parse(response.responseText);
				localStorage.setItem('thit', data[0]['target_hit']);
				localStorage.setItem('ctarget', data[0]['current_target']);
				localStorage.setItem('ctarget3', data[0]['current_target3']);
				localStorage.setItem('kra1t', data[0]['kra1_target']);
				localStorage.setItem('kra2t', data[0]['kra2_target']);
				localStorage.setItem('kra3t', data[0]['kra3_target']);

				$('#target_hit').val(data[0]['target_hit']);
				$('#current_target').val(data[0]['current_target']);
				$('#current_target3').val(data[0]['current_target3']);
				$('#kra1_target').val(data[0]['kra1_target']);
				$('#kra2_target').val(data[0]['kra2_target']);
				$('#kra3_target').val(data[0]['kra3_target']);


				$('#target_hitlabel').html(data[0]['target_hit']);
				$('#current_targetlabel').html(data[0]['current_target']);
				$('#current_target3label').html(data[0]['current_target3']);
				$('#kra1_targetlabel').html(data[0]['kra1_target']);
				$('#kra2_targetlabel').html(data[0]['kra2_target']);
				$('#kra3_targetlabel').html(data[0]['kra3_target']);
			}
		})
	}
</script>