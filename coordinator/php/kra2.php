<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
		<br />
		<div class="accordion accordion-flush" id="accordionFlushExample">
			<!--Status and Target NO. -->
			<div class="row">
				<div class="col-6 col-md-4"></div>
				<div class="col-6 col-md-4"><h4>Status No.</h4></div>
				<div class="col-6 col-md-4"><h4>Target No.</h4></div>
			</div>
			<br />
			<!--UCDP Projects (Not Dropdown) -->
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp">
					<h3>Projects under Institutional Development for Community Development</h3>
				</div>
				<div class="col-6 col-md-4"><input readonly id="s_PUIDCD" placeholder="0" type="number"/></div>
				<div class="col-6 col-md-3"><input readonly id="t_PUIDCD" placeholder="0" type="number"/></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects under Social Awareness and Advocacy</h3></div>
				<div class="col-6 col-md-4"><input readonly id="s_PSAA" placeholder="0" type="number" /></div>
				<div class="col-6 col-md-3"><input readonly id="t_PSAA" placeholder="0" type="number" /></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects Under Community-engaged research</h3></div>
				<div class="col-6 col-md-4"><input readonly id="s_PUCER" placeholder="0" type="number" /></div>
				<div class="col-6 col-md-3"><input readonly id="t_PUCER" placeholder="0" type="number" /></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects Underservice-learning</h3></div>
				<div class="col-6 col-md-4"><input readonly id="s_PUL" placeholder="0" type="number" /></div>
				<div class="col-6 col-md-3"><input readonly id="t_PUL" placeholder="0" type="number" /></div>
			</div>
			<div class="button-wrapper">
				<a class="btn btn-warning" href="#" role="button">Edit</a>
				<a class="btn btn-dark" href="kra2-next.php" role="button">Next</a>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
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
			var s_puidcd_arr = data[0].s_puidcd_arr.split(",");
			$('#s_PUIDCD').val(s_puidcd_arr[0]);
			var t_puidcd_arr = data[0].t_puidcd_arr.split(",");
			$('#t_PUIDCD').val(t_puidcd_arr[0]);
			var s_psaa_arr = data[0].s_psaa_arr.split(",");
			$('#s_PSAA').val(s_psaa_arr[0]);
			var t_psaa_arr = data[0].t_psaa_arr.split(",");
			$('#t_PSAA').val(t_psaa_arr[0]);
			var s_pucer_arr = data[0].s_pucer_arr.split(",");
			$('#s_PUCER').val(s_pucer_arr[0]);
			var t_pucer_arr = data[0].t_pucer_arr.split(",");
			$('#t_PUCER').val(t_pucer_arr[0]);
			var s_pul_arr = data[0].s_pul_arr.split(",");
			$('#s_PUL').val(s_pul_arr[0]);
			var t_pul_arr = data[0].t_pul_arr.split(",");
			$('#t_PUL').val(t_pul_arr[0]);
		}
	})
}
</script>